@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{url('/user-add')}}">مستخدم جديد</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th>إسم المستخدم</th>
                    <th>البريد الإلكتروني</th>
                    <th>الهاتف</th>
                    <th>العنوان</th>
                    <th>الجنس</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->gender_id}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('/user-edit/'.$user->id)}}">تعديل</a>
                            <a class="btn btn-danger" href="{{url('/user-delete/'.$user->id)}}">حذف</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection