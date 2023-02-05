@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{url('/inventory-add')}}">إضافة منتج للمخزن</a>
        </div>
    
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">رقم المنتج</th>
                    <th>إسم المنتج</th>
                    <th>السعر</th>
                    <th>الكمية</th>
                    <th>الصلاحية</th>
                    <th>عمليات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($inventories as $inventory)
                      <tr>
                        <td>{{$inventory->id}}</td>
                        <td>{{$inventory->product_id}}</td>
                        <td>{{$inventory->product_id}}</td>
                        <td>{{$inventory->price}}</td>
                        <td>{{$inventory->quantity}}</td>
                        <td>{{$inventory->expire_date}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('/inventory-edit/'.$inventory->id)}}">تعديل</a>
                            <a class="btn btn-danger" href="{{url('/inventory-delete/'.$inventory->id)}}">حذف</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection