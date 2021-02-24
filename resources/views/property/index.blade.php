@extends('layout')

@section('content')
<div class="container project-container mt-5" max-width="90%">
    @if (session()-> has ('status'))
    <h1 style='color: green' class="text-center">
      {{ session()->get('status')}}
    </h1>
    @endif
    <div class="row text-center border margin-space">
        @forelse ($property as $property)

        <div class=" col-xs-12 col-sm-6 col-md-4 border pt-0">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-2 p-0">
                        <a href="{{route('property.edit', ['property' => $property->id])}}"
                            class="btn btn-primary ">Edit</a>
                    </div>
                    <div class="col-8 p-0">
    
                    </div>
                    <div class="col-2 p-0">
                        <form method="POST" action="{{route('property.destroy', ['property' => $property->id])}}" class="p-0">
                            @csrf
                            @method('DELETE')
    
                            <input type="submit" value="X" class="btn btn-danger" />
                        </form>
                    </div>
    
                </div>
            </div>

            <p class="text-uppercase mb-0 font-18 font-weight-bold">{{$property -> name}}</p>
            <img class="project-img" src="{{$property->image->url()}}">
            <div class="container">
                <p class="text-muted font-13 mt-2 font-weight-bold">{{$property -> summary}}</p>
            </div>
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> area}}</h3>
                    <p class="text-muted">Area</p>
                </li>
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> bed}}</h3>
                    <p class="text-muted">Beds</p>
                </li>
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> bath}}</h3>
                    <p class="text-muted">Bath</p>
                </li>
                <li class="list-inline-item">
                    <h3 class="mb-0">{{$property -> garage}}</h3>
                    <p class="text-muted">Garage</p>
                </li>
            </ul>
            <ul class="list-inline text-left mb-0">
                <li class="list-inline-item ml-3">
                    <p>Type : </p>
                </li>
                <li class="list-inline-item">
                    <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                        {{$property -> type}}
                    </a>
                </li>
            </ul>

            <ul class="list-inline mb-0 text-center">

                <a href="{{route('property.show',['property'=> $property->id])}}"
                    class="btn btn-success btn-rounded w-md  text-center">View
                    Property</a>

            </ul>
        </div>
        @empty
        <div class="container-fluid" style="height: 500px">
            <h1 style='color: green' class="text-center">
                No Property Yet
            </h1>
        </div>
        @endforelse
    </div>
</div>
@include('footer')
@endsection