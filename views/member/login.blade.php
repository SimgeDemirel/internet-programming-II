@extends('la youts.app')

@section('title')
    Login
@endsection
@section('content')
    <h2>Üye Girişi</h2>
    <form method="post">

        @csrf


        <input type="email" name="email" placeholder="E-Mail" /><br />
        <input type="password" name="password" placeholder="Password" /><br />
        <input type="submit" value="Login" />
    </form>
@endsection


