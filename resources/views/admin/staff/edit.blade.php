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
    <div class="alert alert-danger">{{ $error }} </div>
@endforeach  

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Pages</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0 align-items-center">
                        <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Team Member</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-primary">Settings</button>
                    <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"><span class="visually-hidden">Toggle Dropdown</span>
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
            <div class="col-lg-10 mx-auto">
                <div class="card radius-10">
                    <div class="card-body">
                        @if($staffedit)
                        <form class="row g-3" action="{{ route('admin.staff.update', $staffedit->id) }}" method="post" enctype="multipart/form-data">
                            @csrf <!-- CSRF token -->
                            <h5 class="mb-3">Edit Team Member</h5>
                            <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                                <div class="user-change-photo shadow">
                                    @if($staffedit->staffpic)
                                        <img src="/uploads/team/{{ $staffedit->staffpic }}" alt="...">
                                    @endif
                                </div>
                                <input type="file" id="upload" name="staffpic" class="form-control" style="display:none;">
                                <button type="button" id="uploadButton" class="btn btn-outline-primary btn-sm radius-30 px-4">
                                    <ion-icon name="image-sharp"></ion-icon>Change Photo
                                </button>
                            </div>
                            <h5 class="mb-0 mt-4">Staff Information</h5>
                            <hr>

                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="staffname" value="{{ $staffedit->staffname }}" class="form-control" placeholder="enter name">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" name="staffmail" value="{{ $staffedit->staffmail }}" class="form-control" placeholder="example@example.com">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Designation</label>
                                    <input type="text" name="staffjob" value="{{ $staffedit->staffjob }}" class="form-control" placeholder="Job title">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="staffphone" value="{{ $staffedit->staffphone }}" class="form-control" placeholder="xxxx xxx xxx">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">About Me</label>
                                    <textarea class="form-control" name="staffabt" rows="4" cols="4" placeholder="Describe yourself...">{{ $staffedit->staffabt }}</textarea>
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


<script>
    document.getElementById('uploadButton').addEventListener('click', function() {
        document.getElementById('upload').click();
    });

    document.getElementById('upload').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.querySelector('.user-change-photo img');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
@endsection
