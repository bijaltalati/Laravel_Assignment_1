@extends('index');

@section('content')
<div id="content">

    @foreach ($data as $ds)

    <h1><a href="#intro" id="intro">{{$ds->title}}</a></h1>
    <h2>{{$ds->created_at}}</h2>
    <p> {{$ds->body}} </p>
    
   
    @endforeach
   
  </div>
@endsection