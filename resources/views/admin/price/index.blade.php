@extends('admin.layouts.master')
@section('body')

<div class="wrapper">
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header px-4 py-3">
                            <h5 class="mb-0">Plan Create</h5>
                        </div>
                        <div class="card-body p-4">
                            <form id="jQueryValidationForm" method="post" action="{{ route('admin.price.create') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="input35" class="col-sm-3 col-form-label">Price Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input35" name="pricehead">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="input36" class="col-sm-3 col-form-label">Price Plan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input36" name="priceplan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="input36" class="col-sm-3 col-form-label">Price Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input36" name="pricesub">
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
            <h6 class="mb-0 text-uppercase">Created Gallery List</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Price Title</th>
                                    <th>Price Plan</th>
                                    <th>Price Subtitle</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($price->isNotEmpty())
                                    @foreach($price as $key => $prc)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $prc->pricehead }}</td>
                                            <td>{{ $prc->priceplan }}</td>
                                            <td>{{ $prc->pricesub }}</td>
                                            <td><a href="{{ route('admin.price.edit', $prc->id) }}" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action="{{ route('admin.price.delete', $prc->id) }}" method="POST" style="display:inline-block;">
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