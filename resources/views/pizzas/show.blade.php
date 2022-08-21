@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <div class="content">
        <p class="type">Type - {{ $pizza->type }}</p>
        <div class="base">Base - {{ $pizza->base }}</div>
    </div>
</div>
@endsection