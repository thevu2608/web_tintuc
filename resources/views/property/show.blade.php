@extends('layouts.app')

@section('title', 'Show Property')

@section('contents')
    <h1 class="mb-0">Detail Property</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $property->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="Description" class="form-control" placeholder="Description" value="{{ $property->Description }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="price" value="{{ $property->price }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" placeholder="location" value="{{ $property->location }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Area</label>
            <input type="text" name="area" class="form-control" placeholder="area" value="{{ $property->area }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Bedrooms</label>
            <input type="text" name="bedrooms" class="form-control" placeholder="Property Code" value="{{ $property->bedrooms }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Bathrooms</label>
            <textarea class="form-control" name="bathrooms" placeholder="Descriptoin" readonly>{{ $property->bathrooms }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Url_image</label>
            <textarea class="form-control" name="url_image" placeholder="Descriptoin" readonly>{{ $property->url_image }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $property->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $property->updated_at }}" readonly>
        </div>
    </div>
@endsection
