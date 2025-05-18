@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1>Register Page</h1>
    
    <form action="" method="post">
        @csrf
        
        <div class="input-field">    
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
        </div>

        <div class="input-field">    
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Enter Username">
        </div>
        
        <div class="input-field">    
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter Email">
        </div>

        <div class="input-field">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter Password">
        </div>

        <div class="input-field">
            <label for="password_confirmation">Confrim Password</label>
            <input type="password" name="password_confirmation" placeholder="Confrim Password">
        </div>

        <button type="submit">Register</button>
    </form>
@endsection