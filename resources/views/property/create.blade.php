@extends('layout')

@section('content')
<div class="container center">
    <form method="POST" action="{{route('property.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-lg">

            <div class="card-body form">

                <h3 class="mt-4"><i class="fas fa-plus pr-2"></i>Create Property:</h3>
                @include('property._form')
                <button type="submit" class="btn btn-primary float-right">Add Property</button>
            </div>

        </div>

    </form>

</div>
@include('footer')
@endsection