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
      <div class="row section-t3">
        <div class="col-sm-12">
          <div class="title-box-d">
            <h3 class="title-d">Amenities</h3>
          </div>
        </div>
      </div>
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
  {{-- <div class="col-md-10 offset-md-1">

    <div class="col-md-12">
      <div class="row section-t3">
        <div class="col-sm-12">
          <div class="title-box-d">
            <h3 class="title-d">Contact Agent</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <img src="img/agent.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="property-agent">
            <h4 class="title-agent">Anabella Geller</h4>
            <p class="color-text-a">
              Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
              dui. Quisque velit nisi,
              pretium ut lacinia in, elementum id enim.
            </p>
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between">
                <strong>Phone:</strong>
                <span class="color-text-a">(222) 4568932</span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Mobile:</strong>
                <span class="color-text-a">777 287 378 737</span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Email:</strong>
                <span class="color-text-a">annabella@example.com</span>
              </li>
              <li class="d-flex justify-content-between">
                <strong>Skype:</strong>
                <span class="color-text-a">Annabela.ge</span>
              </li>
            </ul>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="property-contact">
            <form class="form-a">
              <div class="row">
                <div class="col-md-12 mb-1">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                      placeholder="Name *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-1">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                      placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-1">
                  <div class="form-group">
                    <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                      rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-a">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
</div>
@include('footer')
@endsection