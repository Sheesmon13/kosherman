@extends('admin.layouts.master')
@section('body')

<div class="wrapper">
     <!-- start page content wrapper-->
     <div class="page-content-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header px-4 py-3">
                        <h5 class="mb-0">Price Plan Edit</h5>
                    </div>
                    <div class="card-body p-4">
                        @if($priceedit)
                        <form id="jQueryValidationForm" method="post" action="{{ route('admin.price.update', $priceedit->id) }}">
                            @csrf
                            @method('PUT') <!-- Include method directive for PUT -->
                            <div class="row mb-3">
                                <label for="pricehead" class="col-sm-3 col-form-label">Price Head</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pricehead" name="pricehead" value="{{ $priceedit->pricehead }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="priceplan" class="col-sm-3 col-form-label">Price Plan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="priceplan" name="priceplan" value="{{ $priceedit->priceplan }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pricesub" class="col-sm-3 col-form-label">Price Content</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pricesub" name="pricesub" value="{{ $priceedit->pricesub }}">
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
