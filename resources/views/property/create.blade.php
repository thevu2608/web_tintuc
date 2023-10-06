@extends('layouts.app')

@section('title', 'Create Property')

@section('contents')
    <h1 class="mb-0">Add Property</h1>
    <hr />
    <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="location" class="form-control" placeholder="Location">
            </div>
            <div class="col">
                <input type="text" name="area" class="form-control" placeholder="Area">
            </div>
            <div class="col">
                <input type="text" name="bedrooms" class="form-control" placeholder="Bedrooms">
            </div>
            <div class="col">
                <input type="text" name="bathrooms" class="form-control" placeholder="Bathrooms">
            </div>
            <div class="form-group">
                <label for="image">Hình ảnh</label>
                <input type="file" name="image" class="form-control-file">
                <br>
                @if (isset($property))
                    <img width="20%" src="{{ asset('uploads/image/' . $property->image) }}">
                @endif
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
