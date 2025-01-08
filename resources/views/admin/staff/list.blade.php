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
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
        </div>
        <div class="ms-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-outline-primary">Settings</button>
            <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
              <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <!--end breadcrumb-->

      <div class="row">
        <div class="col-lg-11 mx-auto">
          <div class="card radius-10">
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.staff.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h5 class="mb-3">Team Member</h5>
                    <hr>
                    <div class="mb-4 d-flex flex-column gap-3 align-items-center justify-content-center">
                        <div class="user-change-photo shadow">
                            <img src="/assets/images/avatars/06.png" id="staffPicPreview" alt="...">
                        </div>
                        <input type="file" id="upload" name="staffpic" class="form-control" accept="image/*" style="display: none;">
                        <button type="button" id="uploadButton" class="btn btn-outline-primary btn-sm radius-30 px-4">
                            <ion-icon name="image-sharp"></ion-icon>Add Photo
                        </button>
                    </div>
                    <h5 class="mb-0 mt-4">Staff Information</h5>
                    <hr>

                    <div class="row g-3">
                        <div class="col-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="staffname" class="form-control" placeholder="enter name" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Email Address</label>
                            <input type="text" name="staffmail" class="form-control" placeholder="example@example.com" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Designation</label>
                            <input type="text" name="staffjob" class="form-control" placeholder="Job title" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Phone</label>
                            <input type="text" name="staffphone" class="form-control" placeholder="xxxx xxx xxx" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">About Me</label>
                            <textarea class="form-control" name="staffabt" rows="4" cols="4" placeholder="Describe yourself..." required></textarea>
                        </div>
                        <div class="text-start mt-3">
                            <button type="submit" name="submit" class="btn btn-primary px-4">Save</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        {{-- starting so team page --}}
        <h6 class="mb-0 text-uppercase">Team Members List</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>SI.No</th>
                                <th class="col-2">Staff Image</th>
                                <th class="col-2">Staff Name</th>
                                <th class="col-2">Staff Email</th>
                                <th class="col-2">Staff Designation</th>
                                <th class="col-2">Staff phone</th>
                                <th class="col-2">Staff About</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff as $key => $stf)
                            <tr>
                                <th scope="row">{{$key + 1}}</th>
                                <td><img src="/uploads/team/{{$stf->staffpic}}" width="70px" height="70px"></td>
                                <td>{{$stf->staffname}}</td>
                                <td>{{$stf->staffmail}}</td>
                                <td>{{$stf->staffjob}}</td>
                                <td>{{$stf->staffphone}}</td>
                                <td>{{$stf->staffabt}}</td>
                                <td>
                                    <a href="{{ route('admin.staff.edit', $stf->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.staff.delete', $stf->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
        <!--End of staff -->
    </div>
</div>


<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
<!--End Back To Top Button-->


<!--start overlay-->
<div class="overlay nav-toggle-icon"></div>
<!--end overlay-->
<script>
    document.getElementById('uploadButton').addEventListener('click', function() {
        document.getElementById('upload').click();
    });

    document.getElementById('upload').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('staffPicPreview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

@endsection
