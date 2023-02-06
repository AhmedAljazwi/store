@extends('admin.master')

@section('content')

<div class="container mt-4">
    <div class="justify-content-center">
        <div class="row">
            @foreach ($inventories as $inventory)
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold text-center">{{$inventory->product->name}}</h5>
                            <img src="{{$inventory->product->img}}" alt="" height="200px">
                            <h6 class="fw-bold text-end">{{$inventory->price}} د.ل</h6>
                            <a href=""><i class="bi bi-cart-plus" style="font-size: 24px; color:black"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection