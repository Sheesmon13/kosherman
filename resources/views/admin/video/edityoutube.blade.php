@extends('admin.layouts.master')
@section('body')

<div class="wrapper">
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


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header px-4 py-3">
                            <h5 class="mb-0">Plan Create</h5>
                        </div>
                        <div class="card-body p-4">
                            <form id="jQueryValidationForm" method="post" action="{{ route('admin.video.update', $data->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Video Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input35" name="link" value="{{$data->link}}">
                                        @error('link')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4" name="submit2">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--end row-->
        </div>
    </div>
</div>

@endsection