@extends('layouts.app')
@section('content')

  <!-- Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide p-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/750x300.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/750x300.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://via.placeholder.com/750x300.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--music grid-->

  <div class="container">
  <div class="row row-cols-4 p-1">
    @foreach ($data as $data)


    <div class="card  p-2 m-4 bg-transparent text-light  border border-3" style="width: 20rem; height:27rem">
        <img src="{{$data->small_img}}" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text text-success">Song Name -> <span class="text-light"> {{$data->name}}</span></p>
          <p class="card-text fw-lighter"> {{$data->singer}}</p>
          <a href='/song/{{$data->id}}' class="btn btn-primary">play</a>
        </div>
    </div>

    @endforeach



  </div>


</div>
@endsection
