@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/category-update/'.$category->id)}}" method="post">
                @csrf
                @method('put')
                <label for="">إسم الفئة</label>
                <input value="{{$category->name}}" class="form-control mt-1 mb-3" type="text" name="name">
                <button type="submit" class="btn btn-success">حفظ التعديلات</button>
            </form>
        </div>
    </div>
</div>

@endsection