@extends('admin.layouts.master')
@section('body')

<div class="page-content-wrapper">
    <div class="page-content">
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }} </div>
        @endforeach

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Page</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary">Settings</button>
                    <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span></button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="card radius-10">
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('admin.service.update', $serviceedit->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h5 class="mb-0 mt-4">Edit Service Details</h5>
                            <hr>
                            <div class="row g-3">
                                <div class="row mb-3">
                                    <label for="serviceimage" class="col-sm-3 col-form-label">Service Icon</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="serviceicon" name="serviceicon" accept="image/*">
                                        @if($serviceedit->serviceicon)
                                            <img src="{{ asset('uploads/services/'.$serviceedit->serviceicon) }}" width="50px" height="50px" alt="Current Image">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="servicename" class="col-sm-3 col-form-label">Service Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="servicename" class="form-control" value="{{ old('servicename', $serviceedit->servicename) }}" placeholder="Service Heading" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="servicecontent" class="col-sm-3 col-form-label">Service Content</label>
                                    <div class="col-sm-9">
                                        <textarea class="ckeditor form-control" name="servicecontent" rows="5" cols="100" placeholder="Describe.." required>{{ old('servicecontent', $serviceedit->servicecontent) }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="serviceimage" class="col-sm-3 col-form-label">Service Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="serviceimage" name="serviceimage" accept="image/*">
                                        @if($serviceedit->serviceimage)
                                            <img src="{{ asset('uploads/services/'.$serviceedit->serviceimage) }}" width="70px" height="50px" alt="Current Image">
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4" name="submit2">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[name="servicecontent"]'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection