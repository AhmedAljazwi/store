@extends('user.master')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{url('/login')}}" method="post">
                @csrf

                <label for="">البريد الإلكتروني</label>
                <input class="form-control mb-3" type="email" name="email">

                <label for="">كلمة المرور</label>
                <input class="form-control mb-3" type="password" name="password">

                <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
            </form>
        </div>
    </div>
</div>

@endsection