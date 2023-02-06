@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/inventory-update/'.$inventory->id)}}" method="post">
                @csrf
                @method('put')
                <label for="">المنتج</label>
                <select class="form-control" name="product_id" id="">
                    @foreach ($products as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                    @endforeach
                </select>

                <label for="">السعر</label>
                <input value="{{$inventory->price}}" class="form-control" type="text" name="price">

                <label for="">الكمية</label>
                <input value="{{$inventory->quantity}}" class="form-control" type="text" name="quantity">

                <label for="">الصلاحية</label>
                <input type="date" name="expire_date">

                <button type="submit" class="btn btn-success">حفظ التعديلات</button>
            </form>
        </div>
    </div>
</div>

@endsection