@extends('backend.layouts.master')
@section('title')
    create agent
@endsection

@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form Elements</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Service Form</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Use PUT method for update -->

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $service->name) }}" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea name="description" class="form-control" placeholder="Enter Description">{{ old('description', $service->description) }}</textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label for="image">Image:</label>
                                    <input type="file" name="image" class="form-control">
                                    @if($service->image)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" width="150" class="img-thumbnail">
                                        </div>
                                        <small>Current image: {{ $service->image }}</small>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>




                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection
