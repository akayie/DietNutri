@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Meal Plans List</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Meal Plans</h6>
            <a href="{{ route('meal-plans.create') }}" class="btn btn-primary">Add Meal Plan</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Energy Food</th>
                            <th>BodyBuilding Food</th>
                            <th>Protective Food</th>
                            <th>Disease</th>
                            <th>Meal Time</th>
                            <th>Note</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mealPlans as $mealPlan)
                        <tr>
                            <td>{{ $mealPlan->id }}</td>
                            <td>{{ $mealPlan->energyFood->name ?? '-' }}</td>
                            <td>{{ $mealPlan->bodybuildingFood->name ?? '-' }}</td>
                            <td>{{ $mealPlan->protectiveFood->name ?? '-' }}</td>
                            <td>{{ $mealPlan->disease->name ?? '-' }}</td>
                            <td>{{ $mealPlan->meal_time }}</td>
                            <td>{{ $mealPlan->note }}</td>
                            <td>
                                @if($mealPlan->image_path && file_exists(public_path('storage/' . $mealPlan->image_path)))
                                    <img src="{{ asset('storage/' . $mealPlan->image_path) }}" width="70" height="70" alt="Meal Plan">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('meal-plans.show', $mealPlan->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('meal-plans.edit', $mealPlan->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('meal-plans.destroy', $mealPlan->id) }}" method="POST" class="d-inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
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
