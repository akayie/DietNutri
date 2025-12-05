@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Protective Food</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Food</h6>
            <a href="{{ route('protective-foods.index') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('protective-foods.update', $protectivefood->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" value="{{ old('name', $protectivefood->name) }}"
                               class="form-control w-50 @error('name') is-invalid @enderror">
                        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Calories</label>
                    <div class="col-sm-10">
                        <input type="number" name="calories" value="{{ old('calories', $protectivefood->calories) }}"
                               class="form-control w-50 @error('calories') is-invalid @enderror">
                        @error('calories') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Fiber</label>
                    <div class="col-sm-10">
                        <input type="number" name="fiber" value="{{ old('fiber', $protectivefood->fiber) }}"
                               class="form-control w-50 @error('fiber') is-invalid @enderror">
                        @error('fiber') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Sugar</label>
                    <div class="col-sm-10">
                        <input type="number" name="sugar" value="{{ old('sugar', $protectivefood->sugar) }}"
                               class="form-control w-50 @error('sugar') is-invalid @enderror">
                        @error('sugar') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Vitamin</label>
                    <div class="col-sm-10">
                        <input type="text" name="vitamin" value="{{ old('vitamin', $protectivefood->vitamin) }}"
                               class="form-control w-50 @error('vitamin') is-invalid @enderror">
                        @error('vitamin') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Minerals</label>
                    <div class="col-sm-10">
                        <input type="text" name="minerals" value="{{ old('minerals', $protectivefood->minerals) }}"
                               class="form-control w-50 @error('minerals') is-invalid @enderror">
                        @error('minerals') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="4" class="form-control w-50 @error('description') is-invalid @enderror">{{ old('description', $protectivefood->description) }}</textarea>
                        @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control w-50 @error('image') is-invalid @enderror">
                        @if($protectivefood->image_path && file_exists(public_path('storage/'.$protectivefood->image_path)))
                            <img src="{{ asset('storage/'.$protectivefood->image_path) }}" width="150" class="mt-2">
                        @endif
                        @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
