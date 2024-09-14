@extends('layouts.headerandfooter')
 @section('content')

 <div class="row" style="margin: 20px;">
    <div class="col-xl-3">
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

    <div class="col-xl-3">
        <div class="card bg-success text-dark bg-opacity-25">
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
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body bg-success text-dark bg-opacity-25">
                <h4 class="header-title">Update Password</h4>
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
  timer: 3000
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
  timer: 3000
});
</script>
@endif

@endsection

