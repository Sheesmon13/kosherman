@extends('admin.layouts.master')
@section('body')

<div class="wrapper">
    <!-- start page content wrapper-->
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

            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Page</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
            <!--end breadcrumb-->

           <!-- About Page Form -->
    <section class="shop-page">
      <div class="shop-container">
          <div class="row">
              <div class="col-xl-11 mx-auto">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-body p-4">
                                <form id="jQueryValidationForm" method="post" action="{{ route('admin.gallery.photo.store') }}" enctype="multipart/form-data">
                                @csrf
                                  <h6 class="mb-0 text-uppercase">Photo Image</h6>
                                  <hr class="mb-3">
                                  <div class="row mb-3">
                                    <div class="row mb-3">
                                      <label for="photoimg" class="col-sm-3 col-form-label">Main Photo</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" id="photoimg" name="photoimg" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 offset-sm-3">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="submit" class="btn btn-primary px-4">Submit</button>
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
      </div>
    </section>

            <h6 class="mb-0 text-uppercase">Photo List</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Photo Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($photo)
                                    @foreach($photo as $key => $pht)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                @if($pht->photoimg)
                                                    <img src="/uploads/gallery/{{ $pht->photoimg }}" width="70px" height="70px">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.gallery.photo.edit', $pht->id) }}" class="btn btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.gallery.photo.delete', $pht->id) }}" method="POST" style="display:inline-block;">
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
            <!--end row-->
        </div>
    </div>
</div>

@endsection