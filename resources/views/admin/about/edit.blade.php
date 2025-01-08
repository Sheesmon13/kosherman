@extends('admin.layouts.master')
@section('body')
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

     <!-- start of about edit-->

    <section class="shop-page">
      <div class="shop-container">
        <div class="row">
          <div class="col-xl-11 mx-auto">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body p-4">
                    @if($aboutedit)
                      <form id="jQueryValidationForm" method="post" action="{{ route('admin.about.update', $aboutedit->id) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <h6 class="mb-0 text-uppercase">Edit About</h6>
                      <hr class="mb-3">
                      <div class="row mb-3">
                        <label for="abtitle1" class="col-sm-3 col-form-label">About-Heading</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="abtitle" name="abtitle" value="{{ $aboutedit->abtitle }}" placeholder="Main Heading">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="abtitle1" class="col-sm-3 col-form-label">About-Subhead</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="absub" name="absub" value="{{ $aboutedit->absub }}" placeholder="Sub Heading">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="abimage1" class="col-sm-3 col-form-label">About-Mainpic</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="abmainpic" name="abmainpic" accept="image/*">
                          @if($aboutedit->abmainpic)
                            <img src="/uploads/about/{{ $aboutedit->abmainpic }}" width="70px" height="70px" class="mt-2">
                          @endif
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">About Content</label>
                        <div class="col-sm-9">
                            <textarea class="ckeditor form-control" id="abcontent" value="{{ $aboutedit->abcontent }}" name="abcontent" rows="4" cols="50" placeholder="Describe..." required></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="image2" class="col-sm-3 col-form-label">About-Image</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" id="abimage" name="abimage" accept="image/*">
                          @if($aboutedit->abimage)
                            <img src="/uploads/about/{{ $aboutedit->abimage }}" width="70px" height="70px" class="mt-2">
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
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('textarea[name="abcontent"]'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection