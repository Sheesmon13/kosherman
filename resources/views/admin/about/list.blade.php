@extends('admin.layouts.master')

@section('body')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">

            <!-- Display Success and Error Messages -->
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

            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            <!-- Breadcrumb -->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">About</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><ion-icon name="home-outline"></ion-icon></a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Page</li>
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
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Page Form -->
            <section class="shop-page">
                <div class="shop-container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <form id="jQueryValidationForm" method="post" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <h6 class="mb-0 text-uppercase">About Area</h6>
                                                <hr class="mb-3">
                                                <div class="row mb-3">
                                                    <label for="abtitle" class="col-sm-3 col-form-label">About-Heading</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="abtitle" name="abtitle" placeholder="Main Heading">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="abtitle" class="col-sm-3 col-form-label">About-Subhead</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="absub" name="absub" placeholder="Main Heading">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="abmainpic" class="col-sm-3 col-form-label">About-Mainpic</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="file" id="abmainpic" name="abmainpic" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">About Content</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="ckeditor form-control" id="abcontent" name="abcontent" rows="4" cols="50" placeholder="Describe..." required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="abimage" class="col-sm-3 col-form-label">About-Image</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="file" id="abimage" name="abimage" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-9 offset-sm-3">
                                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row about page -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Page Data Table -->
            <h6 class="mb-0 text-uppercase">About Area Data Table</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SI.No</th>
                                    <th class="col-2">About-Heading</th>
                                    <th class="col-2">About-subhead</th>
                                    <th class="col-2">About-Content</th>
                                    <th class="col-2">About-Mainpic</th>
                                    <th class="col-2">About-Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($about as $key => $abt)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $abt->abtitle }}</td>
                                        <td>{{ $abt->absub }}</td>
                                        <td>{!! $abt->abcontent !!}</td>
                                        <td>
                                            @if($abt->abmainpic)
                                                <img src="/uploads/about/{{ $abt->abmainpic }}" width="70px" height="70px">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            @if($abt->abimage)
                                                <img src="/uploads/about/{{ $abt->abimage }}" width="70px" height="70px">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.about.edit', $abt->id) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.about.delete', $abt->id) }}" method="POST" style="display:inline-block;">
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
            
            <!-- Back To Top Button -->
            <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>

            <!-- Overlay -->
            <div class="overlay nav-toggle-icon"></div>
            
            <!-- CKEditor Script -->
            <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
            <script>
                ClassicEditor
                    .create(document.querySelector('#abcontent'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>

        </div>
    </div>
@endsection
