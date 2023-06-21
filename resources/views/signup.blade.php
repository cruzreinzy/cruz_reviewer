@extends('template.all')

@section('title')
    <title>Sign Up</title>
@endsection

@section('content')
    <h1>Sign Up</h1>
    <form action="{{route('signup.submit')}}" method="post">
        @csrf
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
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