<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function prepare_data(Request $request)
    {
        $imagePath = null;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time(). '_' . $file->getClientOriginalName();
            $destinationPath = public_path('photos'); // Public directory 'public/images'
            $file->move($destinationPath, $filename); // Move file to the desired location
            $imagePath = 'photos/' . $filename; // Relative path to store in DB
        }
        return [
              "name" => $request->input('name'),
              "image" => $imagePath,
              "description" => $request->input('description'),
        ];
    }

    final public function storeService(Request $request): Builder|Model
    {
        return self::query()->create($this->prepare_data($request));
    }

    final public function updateService(Request $request, Builder|Model $service)
    {
        return $service->update($this->prepare_data($request));
    }

    public function deleteService(Service $service)
    {
        return $service->forceDelete();
    }
}
