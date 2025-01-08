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
            <div class="breadcrumb-title pe-3">page</div>
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
                        <form class="row g-3" action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h5 class="mb-0 mt-4">Service Details</h5>
                            <hr>
                            <div class="row g-3">
                                <div class="row mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Service Icon</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="serviceicon" name="serviceicon" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Service Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="servicename" class="form-control" placeholder="service" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Service Content</label>
                                    <div class="col-sm-9">
                                        <textarea class="ckeditor form-control" name="servicecontent" rows="5" cols="100" placeholder="Describe.." required></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Service Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" id="serviceimage" name="serviceimage" accept="image/*">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="mb-0 text-uppercase">Service List</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>SI.No</th>
                                <th>Service Icon</th>
                                <th>Service Title</th>
                                <th>Service Content</th>
                                <th>Service Image</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($service)
                                @foreach($service as $key => $ser)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><img src="/uploads/services/{{ $ser->serviceicon }}" width="50px" height="50px"></td>
                                        <td>{{ $ser->servicename }}</td>
                                        <td>{!! $ser->servicecontent !!}</td>
                                        <td><img src="/uploads/services/{{ $ser->serviceimage }}" width="70px" height="50px"></td>
                                        <td>
                                            <a href="{{ route('admin.service.edit', $ser->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.service.delete', $ser->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="javascript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>

<div class="overlay nav-toggle-icon"></div>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[name="servicecontent"]'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
