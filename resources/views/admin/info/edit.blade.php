@extends('admin.layouts.master')
@section('body')

<!-- start page content wrapper-->
<div class="page-content-wrapper">
    <!-- start page content-->
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
    <div class="alert alert-danger">{{ $error }}</div>
@endforeach

    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Pages</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Company Info</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"><a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-lg-11 mx-auto">
            <div class="card radius-10">
                <div class="card-body">
                    @if($infoedit)
                    <form class="row g-3" action="{{ route('admin.info.update', $infoedit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf  
                        @method('PUT') 
                        <h5 class="mb-0 mt-4">Edit Company info</h5>
                        <hr>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Info Content</label>
                                <textarea class="ckeditor form-control" id="infoaddress" name="infoaddress" rows="4" cols="4" placeholder="Describe..." required>{{ $infoedit->infoaddress }}</textarea>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Info Phone</label>
                                <input type="text" name="infophone" value="{{ $infoedit->infophone }}" class="form-control" placeholder="xxxx xxx xxx " required>
                            </div>
                            <div class="col-6">
                                <label class="form-label">Info Email</label>
                                <input type="text" name="infoemail" value="{{ $infoedit->infoemail }}" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                            <div class="text-start mt-3">
                                <button type="submit" name="submit" class="btn btn-primary px-4">Save Changes</button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div><!--end row-->

    </div>
    <!-- end page content-->
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector('#infoaddress'))
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
