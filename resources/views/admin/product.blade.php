@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{url('/product-add')}}">منتج جديد</a>
        </div>
    
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">الإسم</th>
                    <th>الفئة</th>
                    <th>عمليات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category_id}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('/product-edit/'.$product->id)}}">تعديل</a>
                            <a class="btn btn-danger" href="{{url('/product-delete/'.$product->id)}}">حذف</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection