@extends('backend.layout')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Disease Update</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
      DataTables documentation</a>.</p>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header d-flex align-items-center justify-content-between  py-3">
      <h6 class="m-0 font-weight-bold text-primary">Update Diseases</h6>
      <a href="{{route('diseases.index')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="card-body">
      <form action="{{route('diseases.update', $disease->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="row mb-3">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text"
              name="diseaseName"
              class="form-control w-50 @error('diseaseName') is-invalid @enderror"
              id="name"
              placeholder="Eg: Electronics" value="{{$disease->name}}">        
               @error('diseaseName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
     </div>

        </div>
        <div class="row-mb-3">
          <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection