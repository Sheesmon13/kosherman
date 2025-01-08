@extends('admin.layouts.master')
@section('body')

<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
    <div class="page-content">

        @if(!empty(session('success')))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(!empty(session('error')))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Pages</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Info</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary">Settings</button>
                    <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
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
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="card radius-10">
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('admin.info.store') }}" method="post" enctype="multipart/form-data">
                            @csrf   
                            <h5 class="mb-0 mt-4">Info Details</h5>
                            <hr>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Info Address</label>
                                    <textarea class="ckeditor form-control" id="infoaddress" name="infoaddress" rows="4" cols="50" placeholder="Describe..." required></textarea>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Info Phone</label>
                                    <input type="text" name="infophone" class="form-control" placeholder="number" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Info email</label>
                                    <input type="email" name="infoemail" class="form-control" placeholder="example@gmail.com" required>
                                </div>
                                <div class="text-start mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary px-4">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        <!-- Info List -->
        <h6 class="mb-0 text-uppercase">Info Area List</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>SI.No</th>
                                <th class="col-2">Info Address</th>
                                <th class="col-2">Info Phone</th>
                                <th class="col-2">Info email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($info as $key => $inf)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td>{!!$inf->infoaddress!!}</td>
                                <td>{{$inf->infophone}}</td>
                                <td>{{$inf->infoemail}}</td>
                                <td><a href="{{route('admin.info.edit', $inf->id)}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <!-- Delete Form -->
                                    <form action="{{ route('admin.info.delete', $inf->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- end page content-->
</div>

<!-- Start Back To Top Button -->
<a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
<!-- End Back To Top Button -->

<!-- Start Overlay -->
<div class="overlay nav-toggle-icon"></div>
<!-- End Overlay -->

<!-- CKEditor Initialization Script -->
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#infoaddress'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
