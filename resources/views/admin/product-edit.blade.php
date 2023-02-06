@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/product-update/'.$product->id)}}" method="post">
                @csrf
                @method('put')
                <label for="">إسم المنتج</label>
                <input value="{{$product->name}}" class="form-control mt-1 mb-3" type="text" name="name">
                
                <label for="">رابط صورة المنتج</label>
                <input value="{{$product->img}}" class="form-control mt-1 mb-3" type="text" name="img">

                <label for="">الفئة</label>
                <select class="form-control" name="category_id" id="">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-success">حفظ التعديلات</button>
            </form>
        </div>
    </div>
</div>

@endsection