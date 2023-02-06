@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/category-add')}}" method="post">
                @csrf
                <label for="">إسم الفئة</label>
                <input class="form-control mt-1 mb-3" type="text" name="name">
                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
    </div>
</div>

@endsection