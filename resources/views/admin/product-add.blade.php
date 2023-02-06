@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/product-add')}}" method="post">
                @csrf
                <label for="">إسم المنتج</label>
                <input class="form-control mt-1 mb-3" type="text" name="name">

                <label for="">الفئة</label>
                <select class="form-control" name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
    </div>
</div>

@endsection