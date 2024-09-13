@extends('layouts.headerandfooter')
 @section('content')

{{-- name  --}}

<div class="row" style="margin-left: 12px;">
    <div class="col-xl-4">
        <div class="card">
           <div class="card-body">
            <h4 class="header-title">Update Username</h4>
            <form action="{{route('profile.username')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-2 col-md-full">
                        <label for="inputEmail4" class="form-label">Name</label>
                        <input type="name" name="name" class="form-control" id="inputEmail4" placeholder="Name">

                        @error('name')
                            <p class="text-danger"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <button type="submit" name="nameu-btn" class="btn btn-success">Update</button>
                    </div>
            </form>
           </div>
        </div>
    </div>
</div>



{{-- image upload --}}

 <div class="container-fluid">

    <!-- start page title -->
    <div class="py- py-lg-4">
        <div class="row">
            <div class="col-lg-6 ">
                <h4 class="page-title mb-0" style="margin-left: 12px;">Image Uploads</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-4">Upload Your Picture</h4>

                    <form action="https://myrathemes.com/" method="post" class="dropzone dz-clickable" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">


                        <div class="dz-message needsclick">
                            <i class="h1 text-muted ri-upload-cloud-2-line"></i>
                            <h3>Drop files here or click to upload.</h3>
                        </div>
                    </form>

                    <!-- Preview -->
                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
    </div>
    <!-- end row -->

    <!-- file preview template -->
    <div class="d-none" id="uploadPreviewTemplate">
        <div class="card mt-1 mb-0 shadow-none border">
            <div class="p-2">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img data-dz-thumbnail="" src="#" class="avatar-sm rounded bg-light" alt="">
                    </div>
                    <div class="col ps-0">
                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name=""></a>
                        <p class="mb-0" data-dz-size=""></p>
                    </div>
                    <div class="col-auto">
                        <!-- Button -->
                        <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove="">
                            <i class="fe-x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
 @endsection
