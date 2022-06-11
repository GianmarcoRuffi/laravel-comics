@extends('layouts.base')
@section('main')




<div class="jumbotron"></div>

<main id="comics">

    <div class="container">
      <div class="product-label">Current Series</div>
      @foreach ($comic as $comics)
        <div class="card">
            <img src="{{$comics['thumb']}}" alt="{{$comics['type']}}">
            <h4>{{$comics['series']}}</h4>
        </div>
        @endforeach
    </div>
    <div class="load-more">
      <div class="btn-main"><span>Load More</span></div>
    </div>

    
  </main>

  @endsection


