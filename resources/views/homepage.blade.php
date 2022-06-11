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


  <style scoped lang="scss">

.jumbotron{
  height: 400px;
  background-image: url("./public/images/jumbotron.jpg");
  background-position: top;
  background-size: cover;
  background-repeat: no-repeat;}

 img {
  height: 200px;
  width: 200px;
  object-fit: cover;
  object-position: top;
  padding-bottom: 5px;
 }
.card {
  max-width: 200px;
  height: calc(200px + 36px);
  padding: 5px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-right: 30px;
  text-transform: uppercase;

  &:hover {
    cursor: pointer;
    opacity: 0.8;
  }
}
</style>