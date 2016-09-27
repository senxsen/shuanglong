@extends('auth.master')

@section('content')
    <div>
        <div>
            <h1 class="logo-name">雙龍</h1>
        </div>
        <h3>Welcome to Shuanglong Rich Club</h3>
        <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
        </p>
        <p>Login in. To see it in action.</p>
        {!! Form::open(['route' => 'login_post', 'method' => 'post', 'class' => 'm-t', 'id' => 'login-form']) !!}
            <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="login.html#"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
        {!! Form::close() !!}
        <p class="m-t"> <small>Design by Sen. &copy; 2016</small> </p>
    </div>

@endsection
