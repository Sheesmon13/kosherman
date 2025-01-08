@extends('admin.layouts.master')
@section('body')

<div class="wrapper">
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">





            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header px-4 py-3">
                            <h5 class="mb-0">YouTube Link</h5>
                        </div>
                        <div class="card-body p-4">
                            <form id="jQueryValidationForm" method="post" action="{{ route('admin.video.create') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Video Link</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input35" name="link">
                                        @error('link')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mb-0 text-uppercase">YouTube Link List</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Vidoe Link</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if('$data')
                                @foreach( $data as $key => $data )
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->link}}</td>
                                        <td><a href="{{ route('admin.video.Editpage', $data->id) }}" class="btn btn-primary">Edit</a></td>
                                        <td><a href="{{ route('admin.video.delete', $data->id) }}" class="btn btn-danger">Delete</a></td>
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