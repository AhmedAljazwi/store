@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">رقم الطلبية</th>
                    <th>رقم المستخدم</th>
                    <th>إسم المستخدم</th>
                    <th>الإجمالي</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bills as $bill)
                      <tr>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->order_id}}</td>
                        <td>{{$bill->user_id}}</td>
                        <td>{{$bill->user->name}}</td>
                        <td>{{$bill->total}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('/bill-edit/'.$bill->id)}}">تعديل</a>
                            <a class="btn btn-danger" href="{{url('/bill-delete/'.$bill->id)}}">حذف</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection