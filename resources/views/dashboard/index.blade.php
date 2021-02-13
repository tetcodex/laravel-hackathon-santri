@extends('_layouts.admin')

@section('content')
            <!-- Begin Page Content -->

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Hello, User</h1>
                </div>

                <div class="row">
                    <!-- Company Profile Card -->
                    <div class="col-xl-">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Company Profile Data</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="mt-2">
                                    <h6 class="m-0 font-weight-bold text-primary">Name :</h6>
                                    <p>Maju Bersama Karsa</p>

                                    <h6 class="m-0 font-weight-bold text-primary">Status :</h6>
                                    <p>PT</p>

                                    <h6 class="m-0 font-weight-bold text-primary">Nomor Izin Perusahaan</h6>
                                    <p>12459873249</p>

                                    <h6 class="m-0 font-weight-bold text-primary">Address :</h6>
                                    <p>Jl. Suka Maju No 21 Kudus Jawa Tengah</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Job Posted Area -->
                    <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Job Posted Overview</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table text-center">
                                        <thead>
                                          <tr>
                                            <th scope="col">Job Title</th>
                                            <th scope="col">Placement</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($jobData as $job)
                                          <tr>
                                            <div class="modal fade" id="viewData" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="modalLabel">Detail Data</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                          <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Job Title : {{ $job->title }} </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Company Name : {{ $job->company_name }} </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Job Placement : {{ $job->placement }} </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Job Requierement :</label>
                                                            <ul>
                                                                <li>{{ $job->requierement }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <td>{{ ucfirst($job->title)}}</td>
                                            <td>{{ ucfirst($job->placement) }}</td>
                                            <td>
                                                <div class="row">
                                                    <a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#viewData" href="/company/job/{{ $job->id }}">
                                                        <i class="fas fa-fw fa-eye"></i>
                                                    </a>
                                                    |
                                                    <a class="btn btn-sm btn-outline-success" href="/company/job/{{ $job->id }}/edit">
                                                        <i class="fas fa-fw fa-edit"></i>
                                                    </a>
                                                    |
                                                    <form action="/company/job/{{ $job->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-outline-danger">
                                                            <i class="fas fa-fw fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                          </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                    </div>

                    <!-- Course Posted Area -->
                    <div class="col-xl-6">
                        <div class="card shadow mb-4">
                            <!-- Card Header -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Course Posted Overview</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <table class="table text-center">
                                    <thead>
                                      <tr>
                                        <th scope="col">Course Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($courseData as $course)
                                      <tr>


                                        <div class="modal fade" id="viewCourse" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="modalLabel">Detail Data</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                      <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Course Title : {{ $course->title }} </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Company Name : {{ $course->company_name }} </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Course Status : {{ $course->status }} </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Course Detail :</label>
                                                        <ul>
                                                            <li>{{ $course->detail }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label modal-title font-weight-bold"> Course Certificate : {{ $course->certificate }} </label>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                        <td>{{ ucfirst($course->title)}}</td>
                                        <td>{{ ucfirst($course->status) }}</td>
                                        <td>
                                                <a class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#viewCourse" href="/company/course/{{ $course->id }}">
                                                    <i class="fas fa-fw fa-eye"></i>
                                                </a>
                                                |
                                                <a class="btn btn-sm btn-outline-success" href="/company/course/{{ $course->id }}/edit">
                                                    <i class="fas fa-fw fa-edit"></i>
                                                </a>
                                                |
                                                <form action="/company/course/{{ $course->id }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-fw fa-trash"></i>
                                                    </button>
                                                </form>
                                        </td>
                                      </tr>
                                    @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>

                </div>

@endsection
