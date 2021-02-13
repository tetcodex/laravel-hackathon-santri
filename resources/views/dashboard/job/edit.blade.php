@extends('_layouts.admin')

@section('content')
<div class="card-body">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Job Data</h1>
    </div>

    <form action="/company/job/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="job-title" class="col-form-label card-title"> Job Title </label>
            <input type="text" class="form-control" id="article-name" name="title"
                   value="{{ old('title') ? old('title') : $data->title }}">
            @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
              <label for="job-company" class="col-form-label card-title">Company</label>
              <input type="text" class="form-control" id="job-company" name="company_name"
                     value="{{ old('company_name') ? old('company_name') : $data->company_name }}">
              @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="job-placement" class="col-form-label card-title">Placement</label>
            <input type="text" class="form-control" id="job-placement" name="placement"
                   value="{{ old('placement') ? old('placement') : $data->placement }}">
            @error('placement')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="job-requierement" class="col-form-label card-title">Requierement</label>
            <textarea class="form-control" id="job-requierement" name="requierement">{{ old('requierement') ? old('requierement') : $data->requierement }}</textarea>
            @error('requierement')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-outline-primary">Edit Data</button>
          </div>
      </form>
</div>
@endsection
