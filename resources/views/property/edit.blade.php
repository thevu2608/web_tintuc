@extends('layouts.app')

@section('title', 'Edit Property')

@section('contents')
    <h1 class="mb-0">Edit Property</h1>
    <hr />
    <form action="{{ route('property.update', $property->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $property->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="Description" class="form-control" placeholder="Description" value="{{ $property->Description }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="price" value="{{ $property->price }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-control" placeholder="location" value="{{ $property->location }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Area</label>
                <input type="text" name="area" class="form-control" placeholder="area" value="{{ $property->area }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bedrooms</label>
                <input type="text" name="bedrooms" class="form-control" placeholder="Property Code" value="{{ $property->bedrooms }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Bathrooms</label>
                <textarea class="form-control" name="bathrooms" placeholder="Descriptoin" >{{ $property->bathrooms }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Url_image</label>
                <textarea class="form-control" name="url_image" placeholder="Descriptoin" >{{ $property->url_image }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $property->created_at }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $property->updated_at }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
