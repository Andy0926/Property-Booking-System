@extends('layout')

@section('content')

<section class="intro-single ">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12 col-lg-8">
        <div class="title-single-box">
          <h1 class="title-single">{{$property -> name}}</h1>
          <span class="color-text-a">{{$property -> location}}</span>
        </div>
      </div>
      <div class="col-md-12 col-lg-4">
        <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('home')}}">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('property.index')}}">Property</a>
            </li>
            <li class="breadcrumb-item">
              {{$property -> name}}
            </li>
          </ol>
        </nav>
      </div>
    </div>
    @if (session()-> has ('status'))
    <h1 style='color: green' class="text-center">
      {{ session()->get('status')}}
    </h1>
    @endif
  </div>
</section>
<!-- End Intro Single-->

{{-- <img class="img-fluid" src="{{$images->path}}"/> --}}

{{-- <img class="img-fluid" src="{{Storage::url($property->image->path)}}"/> --}}

<!--- Image Slider -->
<div class="container project-details-carousel-container">
  <div id="slides" class="carousel slide mb-5" data-ride="carousel">
    {{-- <ul class="carousel-indicators">
      <li data-target="#slides" data-slide-to="0" class="active"></li>
      <li data-target="#slides" data-slide-to="1"></li>
      <li data-target="#slides" data-slide-to="2"></li>
    </ul> --}}

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="{{$property->image->url()}}" />
      </div>
      {{-- <div class="carousel-item">
        <img class="img-fluid" src="img/pd2.jpg">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="img/pd3.jpg">
      </div> --}}
    </div>
  </div>
</div>

<div class="container project-description-container">
  <div class="row justify-content-between">
    <div class="col-md-5 col-lg-4">
      <div class="property-price justify-content-center foo">
        <div class="card-header-c d-flex">
          <div class="card-box-ico ">
            <span class="ion-money justify-content-center">RM{{$property -> price}}</span>
          </div>

        </div>
      </div>
      <div class="property-summary">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box-d section-t4">
              <h3 class="title-d">Quick Summary</h3>
            </div>
          </div>
        </div>
        <div class="summary-list">
          <ul class="list">
            <li class="d-flex justify-content-between">
              <strong>Property ID:</strong>
              <span>{{$property -> id}}</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Location:</strong>
              <span>{{$property -> location}}</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Property Type:</strong>
              <span>{{$property -> type}}</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Status:</strong>
              <span>Sale</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Area:</strong>
              <span>{{$property -> area}}m
                <sup>2</sup>
              </span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Beds:</strong>
              <span>{{$property -> bed}}</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Baths:</strong>
              <span>{{$property -> bath}}</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Garage:</strong>
              <span>{{$property -> garage}}</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Agent:</strong>
              <span>{{$property -> agent}}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-lg-7 section-md-t3">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box-d">
            <h3 class="title-d">Property Description</h3>
          </div>
        </div>
      </div>
      <div class="property-description">
        <p class="description color-text-a">
          {{$property -> description}}
        </p>
      </div>
      {{-- <div class="row section-t3">
        <div class="col-sm-12">
          <div class="title-box-d">
            <h3 class="title-d">Agents</h3>
          </div>
        </div>
      </div> --}}
      {{-- <div class="amenities-list color-text-a">
        <ul class="list-a no-margin">
          <li>Balcony</li>
          <li>Outdoor Kitchen</li>
          <li>Cable Tv</li>
          <li>Deck</li>
          <li>Tennis Courts</li>
          <li>Internet</li>
          <li>Parking</li>
          <li>Sun Room</li>
          <li>Concrete Flooring</li>
        </ul>
      </div> --}}
    </div>
  </div>
</div>
@include('footer')
@endsection