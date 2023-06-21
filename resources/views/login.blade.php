@extends('template.all')

@section('title')
    <title>Log In</title>
@endsection

@section('content')
    <h1>Log In</h1>
    <form action="{{route('login.submit')}}" method="post">
        @csrf
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
@endsection