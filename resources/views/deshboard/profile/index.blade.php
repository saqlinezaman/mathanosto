@extends('layouts.headerandfooter')
 @section('content')

 <div class="row" style="margin: 20px;">
     {{-- name --}}
    <div class="col-xl-6">
        <div class="card bg-success text-dark bg-opacity-25">
            <div class="card-body">
                <h4 class="header-title">Update Username</h4>
                <form action="{{ route('profile.username') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">update</button>
                </form>
            </div>
        </div>
    </div>
{{-- email --}}
    <div class="col-xl-6">
        <div class="card bg-warning text-dark bg-opacity-25">
            <div class="card-body">
                <h4 class="header-title">Update Email Address</h4>
                <form action="{{ route('profile.email') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Email Address">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">update</button>
                </form>
            </div>
        </div>
    </div>
    {{-- password --}}
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body bg-info text-dark bg-opacity-25">
                <h4 class="header-title">Update Password</h4>
                <form action="{{ route('profile.password') }}" method="POST">
                    @csrf
                    <div class="row">

                        {{-- current password🥷🥷 --}}
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail4" class="form-label">Current Password</label>
                            <input name="c_password" type="password" class="form-control @error('c_password') is-invalid @enderror" id="inputEmail4" placeholder="Old Password">
                            @error('c_password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- New password🥷🥷 --}}

                        <div class="mb-3 col-md-12">
                            <label for="inputEmail4" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="inputEmail4" placeholder="New Password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- confirm New password🥷🥷 --}}
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail4" class="form-label">Confirm password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="inputEmail4" placeholder="Confirm Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">update</button>
                </form>
            </div>
        </div>
    </div>
    {{-- image--}}
    <div class="col-xl-6">
        <div class="card bg-secondary text-dark bg-opacity-25">
            <div class="card-body">
                <h4 class="header-title">Upload your Profile</h4>
                <form action="{{ route('profile.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="inputEmail4" placeholder="Email Address">
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">update</button>
                </form>
            </div>
        </div>
    </div>
 </div>



 @endsection

 @section('script')

@if (session('name_update'))

<script>
Swal.fire({
  position: "top-end",
  icon: "success",
  title: "{{session('name_update')}}",
  showConfirmButton: false,
  timer: 1000
});
</script>
@endif

@if (session('email_update'))

<script>
Swal.fire({
  position: "top-end",
  icon: "success",
  title: "{{session('email_update')}}",
  showConfirmButton: false,
  timer: 1000
});
</script>
@endif

@if (session('password_update'))

<script>
Swal.fire({
  position: "top-end",
//   icon: "success",
  title: "{{session('password_update')}}",
  showConfirmButton: false,
  timer: 1000
});
</script>
@endif
@if (session('image_update'))

<script>
Swal.fire({
  position: "top-end",
//   icon: "success",
  title: "{{session('image_update')}}",
  showConfirmButton: false,
  timer: 1000
});
</script>
@endif

@endsection

