@extends('backend.layout')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Energy Foods List</h1>

    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Energy Foods</h6>
            <a href="{{ route('energy-foods.create') }}" class="btn btn-primary">Add Food</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Calories</th>
                            <th>Protein</th>
                            <th>Carbs</th>
                            <th>Fat</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foods as $food)
                        <tr>
                            <td>{{ $food->id }}</td>
                            <td>{{ $food->name }}</td>
                            <td>{{ $food->calories }}</td>
                            <td>{{ $food->protein }}</td>
                            <td>{{ $food->carbs }}</td>
                            <td>{{ $food->fat }}</td>
                            <td>{{ $food->description }}</td>
                           <td>
                                @if($food->image_path && file_exists(public_path('storage/' . $food->image_path)))
                                    <img src="{{ asset('storage/' . $food->image_path) }}" width="70" height="70" alt="{{ $food->name }}">
                                @else
                                    <span>No Image</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('energy-foods.show', $food->id) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('energy-foods.edit', $food->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('energy-foods.destroy', $food->id) }}" method="POST" class="d-inline-block">
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
