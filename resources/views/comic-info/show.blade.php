@extends('layouts.app')
@section('content')
@include('partials.jumbo')
<div class="blueBanner bg-primary">
    <div class="container">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
</div>
<div class="comicInfo container my-3 text-primary">
    <h2>{{$comic['title']}}</h2>
    <div class="row priceInfo py-3">
        <div class="col-8">
            <h6 class="mb-0">U.S. Price: <span class="text-white">$19.99</span></h6>
        </div>
        <div class="col-4 text-white">
            Check Availability
        </div>
    </div>
</div>
@include('partials.links')
@endsection
