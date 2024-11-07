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
                            <h5 class="card-title">Agent Form</h5>

                            <!-- General Form Elements -->
                            <form action="{{ route('agents.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <x-required />
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                    <x-validation-error :error="$errors->first('name')" />
                                </div>

                                <div class="form-group">
                                    <x-required />
                                    <label for="designation">Designation:</label>
                                    <input type="text" name="designation" class="form-control"
                                        placeholder="Enter Designation">
                                        <x-validation-error :error="$errors->first('designation')" />
                                </div>

                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
                                    <x-validation-error :error="$errors->first('description')" />
                                </div>

                                <div class="form-group mb-2">
                                    <label for="image">Image:</label>
                                    <input type="file" name="image" class="form-control">
                                    <x-validation-error :error="$errors->first('image')" />
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>

                </div>


            </div>
        </section>

    </main><!-- End #main -->
@endsection