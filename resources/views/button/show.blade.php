@extends('layouts.default');

@section('content')
<h1>{{ $button->title}}</h1>

     <p>{{ $button-> link }}</p>
    <p>{{ $button -> color }}</p>
@endsection