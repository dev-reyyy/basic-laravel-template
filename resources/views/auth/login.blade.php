@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1>Login Page</h1>

    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        
        <div class="input-field">    
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email">
        </div>

        <div class="input-field">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password">
        </div>

        <button type="submit">Login</button>
    </form>
@endsection