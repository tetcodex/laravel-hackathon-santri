@extends('_layouts.admin')

@section('content')
<div class="card-body">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Course Data</h1>
    </div>

    <form action="/company/course" method="POST">
        @csrf
        <div class="form-group">
          <label for="course-title" class="col-form-label card-title">Course Title </label>
          <input type="text" class="form-control" id="course-name" name="title">
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label for="course-company" class="col-form-label card-title">Company </label>
            <input type="text" class="form-control" id="course-company" name="company_name">
            @error('company_name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="course-status" class="col-form-label card-title">Status </label>
            <input type="text" class="form-control" id="course-status" name="status">
            @error('status')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
          <label for="course-detail" class="col-form-label card-title">Detail Course</label>
          <textarea class="form-control" id="course-detail" name="detail"></textarea>
          @error('detail')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
            <label for="course-certificate" class="col-form-label card-title">Certificate</label>
            <input type="text" class="form-control" id="course-certificate" name="certificate">
            @error('certificate')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="form-group">
          <button class="btn btn-outline-primary">Publish</button>
        </div>
      </form>
</div>
@endsection
