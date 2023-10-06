@extends('layouts.app')

@section('title', 'Home Property')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Danh sách phòng</h1>
        <a href="{{ route('property.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Tiêu đề</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Vị trí</th>
                <th>Diện tích</th>
                <th>Số phòng ngủ</th>
                <th>Số phòng tắm</th>
                <th>Hình ảnh</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
            </tr>
        </thead>
        <tbody>+
            @if ($property->count() > 0)
                @foreach ($property as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->location }}</td>
                        <td class="align-middle">{{ $rs->area }}</td>
                        <td class="align-middle">{{ $rs->bedrooms }}</td>
                        <td class="align-middle">{{ $rs->bathrooms }}</td>
                        <td class="align-middle">
                            <img width="100" src="{{ asset('uploads/image/' . $rs->image_url) }}">
                        </td>
                        <td class="align-middle">{{ $rs->created_at }}</td>
                        <td class="align-middle">{{ $rs->updated_at }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('property.show', $rs->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('property.edit', $rs->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('property.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Bạn có muốn xóa không ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Property not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
