@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/user-add')}}" method="post">
                @csrf

                <label for="">الإسم</label>
                <input class="form-control mb-3" type="text" name="name">

                <label for="">البريد الإلكتروني</label>
                <input class="form-control mb-3" type="email" name="email">

                <label for="">كلمة المرور</label>
                <input class="form-control mb-3" type="password" name="password">

                <label for="">رقم الهاتف</label>
                <input class="form-control mb-3" type="text" name="phone">

                <label for="">العنوان</label>
                <input class="form-control mb-3" type="text" name="address">

                <label for="">الجنس</label>
                <select class="form-control mb-3" name="gender_id" id="">
                  <option value="1">ذكر</option>
                  <option value="2">أنثى</option>
                </select>

                <button type="submit" class="btn btn-primary">حفظ</button>
            </form>
        </div>
    </div>
</div>

@endsection