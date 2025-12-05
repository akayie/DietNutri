@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Meal Plan</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Meal Plan</h6>
            <a href="{{ route('meal-plans.index') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card-body">
            <form action="{{ route('meal-plans.update', $mealPlan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @php
                    $selected = old() ?: $mealPlan;
                @endphp

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Energy Food</label>
                    <div class="col-sm-10">
                        <select name="energy_food_id" class="form-control w-50 @error('energy_food_id') is-invalid @enderror">
                            <option value="">Select Energy Food</option>
                            @foreach($energyFoods as $food)
                                <option value="{{ $food->id }}" {{ $selected['energy_food_id'] == $food->id ? 'selected' : '' }}>
                                    {{ $food->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('energy_food_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">BodyBuilding Food</label>
                    <div class="col-sm-10">
                        <select name="bodybuilding_food_id" class="form-control w-50 @error('bodybuilding_food_id') is-invalid @enderror">
                            <option value="">Select BodyBuilding Food</option>
                            @foreach($bodybuildingFoods as $food)
                                <option value="{{ $food->id }}" {{ $selected['bodybuilding_food_id'] == $food->id ? 'selected' : '' }}>
                                    {{ $food->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('bodybuilding_food_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Protective Food</label>
                    <div class="col-sm-10">
                        <select name="protective_food_id" class="form-control w-50 @error('protective_food_id') is-invalid @enderror">
                            <option value="">Select Protective Food</option>
                            @foreach($protectiveFoods as $food)
                                <option value="{{ $food->id }}" {{ $selected['protective_food_id'] == $food->id ? 'selected' : '' }}>
                                    {{ $food->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('protective_food_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Disease</label>
                    <div class="col-sm-10">
                        <select name="disease_id" class="form-control w-50 @error('disease_id') is-invalid @enderror">
                            <option value="">Select Disease</option>
                            @foreach($diseases as $disease)
                                <option value="{{ $disease->id }}" {{ $selected['disease_id'] == $disease->id ? 'selected' : '' }}>
                                    {{ $disease->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('disease_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Meal Time</label>
                    <div class="col-sm-10">
                        <input type="text" name="meal_time" value="{{ $selected['meal_time'] }}" class="form-control w-50 @error('meal_time') is-invalid @enderror">
                        @error('meal_time') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-10">
                        <textarea name="note" rows="3" class="form-control w-50 @error('note') is-invalid @enderror">{{ $selected['note'] }}</textarea>
                        @error('note') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control w-50 @error('image') is-invalid @enderror">
                        @if($mealPlan->image_path && file_exists(public_path('storage/'.$mealPlan->image_path)))
                            <img src="{{ asset('storage/'.$mealPlan->image_path) }}" width="150" class="mt-2">
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
