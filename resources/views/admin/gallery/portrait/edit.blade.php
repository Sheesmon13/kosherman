@extends('admin.layouts.master')
@section('body')

<div class="wrapper">
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
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach


        <section class="shop-page">
            <div class="shop-container">
                <div class="row">
                    <div class="col-xl-11 mx-auto">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body p-4">
                                        @if($portedit)
                                        <form id="jQueryValidationForm" method="post" action="{{ route('admin.gallery.portrait.update', $portedit->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <h6 class="mb-0 text-uppercase">Edit Main Portrait Image</h6>
                                        <hr class="mb-3">
                                        <div class="row mb-3">
                                            <div class="row mb-3">
                                                <label for="portedit" class="col-sm-3 col-form-label">Main Portrait</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" id="portimg" name="portimg" accept="image/*">
                                                    @if($portedit->portimg)
                                                    <img src="/uploads/gallery/{{ $portedit->portimg }}" width="70px" height="70px" class="mt-2">
                                                    @endif
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
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>

        </div>
    </div>
</div>
@endsection
