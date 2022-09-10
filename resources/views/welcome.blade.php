@extends('layouts.app')

@section('content')

<h1 class="text-center">Tests</h1>
<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempore vero earum beatae illum pariatur possimus, numquam impedit iste incidunt tempora architecto sapiente deleniti eligendi, necessitatibus ut error placeat fugit!</p>
<hr>

<div class="container">
    <div class="row">
        <div class="col mt-4 d-flex flex-row justify-content-evenly">
            <a href="{{route('test.1')}}">
                <div>
                    <img src="https://via.placeholder.com/150" height="100" width="100">
                    <h4>Test 1</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </a>

            <a href="{{route('test.2')}}">
                <div>
                    <img src="https://via.placeholder.com/150" height="100" width="100">
                    <h4>Test 2</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>

            <a href="{{route('test.3')}}">
                <div>
                    <img src="https://via.placeholder.com/150" height="100" width="100">
                    <h4>Test 3</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </a>

        </div>
    </div>
</div>
    
@endsection