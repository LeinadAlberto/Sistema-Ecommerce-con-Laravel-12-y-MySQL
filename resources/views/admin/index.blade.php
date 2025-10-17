@extends('layouts.admin')

@section('content')
    <h1>Bienvenido {{ Auth::user()->name }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At quasi natus, deleniti corrupti voluptas atque!</p>
@endsection