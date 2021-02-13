@extends('_layouts.admin')

@section('content')
<div class="card-body">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Job Data</h1>
    </div>

    <form action="/company/course/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="course-title" class="col-form-label card-title"> Course Title </label>
            <input type="text" class="form-control" id="course-name" name="title"
                   value="{{ old('title') ? old('title') : $data->title }}">
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
              <label for="course-company" class="col-form-label card-title">Company</label>
              <input type="text" class="form-control" id="course-company" name="company_name"
                     value="{{ old('company_name') ? old('company_name') : $data->company_name }}">
              @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="course-status" class="col-form-label card-title">Status</label>
            <input type="text" class="form-control" id="course-status" name="status"
                   value="{{ old('status') ? old('status') : $data->status }}">
            @error('status')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="course-detail" class="col-form-label card-title">Detail</label>
            <textarea class="form-control" id="course-detail" name="detail">{{ old('detail') ? old('detail') : $data->detail }}</textarea>
            @error('detail')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="course-certificate" class="col-form-label card-title">Certificate</label>
            <input type="text" class="form-control" id="course-certificate" name="certificate"
                   value="{{ old('certificate') ? old('certificate') : $data->certificate }}">
            @error('certificate')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-outline-primary">Edit Data</button>
          </div>
      </form>
</div>
@endsection
