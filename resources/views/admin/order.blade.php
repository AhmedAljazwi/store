@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">رقم المنتج</th>
                    <th>إسم المنتج</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->product_id}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('/order-edit/'.$order->id)}}">تعديل</a>
                            <a class="btn btn-danger" href="{{url('/order-delete/'.$order->id)}}">حذف</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection