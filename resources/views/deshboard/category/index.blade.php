@extends('layouts.headerandfooter')

@section('content')

    <div class="row mx-3">
        {{-- table --}}
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">

                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                          <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Position</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    class="rounded-circle"
                                    />
                                <div class="ms-3">
                                  <p class="fw-bold mb-1">John Doe</p>
                                  <p class="text-muted mb-0">john.doe@gmail.com</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">Software engineer</p>
                              <p class="text-muted mb-0">IT department</p>
                            </td>
                            <td>
                              <span class="badge badge-success rounded-pill d-inline">Active</span>
                            </td>
                            <td>Senior</td>
                            <td>
                              <button type="button" class="btn btn-link btn-sm btn-rounded">
                                Edit
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    />
                                <div class="ms-3">
                                  <p class="fw-bold mb-1">Alex Ray</p>
                                  <p class="text-muted mb-0">alex.ray@gmail.com</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">Consultant</p>
                              <p class="text-muted mb-0">Finance</p>
                            </td>
                            <td>
                              <span class="badge badge-primary rounded-pill d-inline"
                                    >Onboarding</span
                                >
                            </td>
                            <td>Junior</td>
                            <td>
                              <button
                                      type="button"
                                      class="btn btn-link btn-rounded btn-sm fw-bold"
                                      data-mdb-ripple-color="dark"
                                      >
                                Edit
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img
                                    src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                                    class="rounded-circle"
                                    alt=""
                                    style="width: 45px; height: 45px"
                                    />
                                <div class="ms-3">
                                  <p class="fw-bold mb-1">Kate Hunington</p>
                                  <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="fw-normal mb-1">Designer</p>
                              <p class="text-muted mb-0">UI/UX</p>
                            </td>
                            <td>
                              <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                            </td>
                            <td>Senior</td>
                            <td>
                              <button
                                      type="button"
                                      class="btn btn-link btn-rounded btn-sm fw-bold"
                                      data-mdb-ripple-color="dark"
                                      >
                                Edit
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
        {{-- form --}}
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="fs-3 fw-bold mb-4">Category Insert</h5>

                    {{-- form start --}}

                    <form enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name" value="" name="titel">
                            <label for="floatingnameInput">Category Titel</label>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingemailInput" placeholder="Enter Email address" value="" name="slug">
                                    <label for="floatingemailInput">Category Slug</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="row mb-3">
                                        <img id="montrimosai" src="{{ asset('uploads/default/default.png') }}" alt="" style="width: 100%; height:300px; object-fit:contain;">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="floatingnameInput">Category Image</label>
                                        <div class="col-sm-9">
                                            <input onchange="document.querySelector('#montrimosai').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="inputPassword5"  name="image">
                                        </div>
                                    </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
