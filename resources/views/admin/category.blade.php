@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{url('/category-add')}}">فئة جديدة</a>
        </div>
    
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">الإسم</th>
                    <th>عمليات</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                      <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <a class="btn btn-success" href="{{url('/category-edit/'.$category->id)}}">تعديل</a>
                            <a class="btn btn-danger" href="{{url('/category-delete/'.$category->id)}}">حذف</a>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection