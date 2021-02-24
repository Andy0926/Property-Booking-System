{{-- <div class="row mt-4">
    <label>Name</label>
    <input type="text" name="name" value="{{old('name', $property->name ?? null)}}">
<label>Type</label>
<input type="text" name="type" value="{{old('type', $property->type ?? null)}}">
<label>Location</label>
<input type="text" name="location" value="{{old('location', $property->location ?? null)}}">
<label>Agent</label>
<input type="text" name="agent" value="{{old('agent', $property->agent ?? null)}}">
</div>
<div class="row mt-4">
    <label>Price</label>
    <input type="number" name="price" value="{{old('price', $property->price ?? null)}}">
    <label>Bed</label>
    <input type="number" name="bed" value="{{old('bed', $property->bed ?? null)}}">
    <label>Bath</label>
    <input type="number" name="bath" value="{{old('bath', $property->bath ?? null)}}">
    <label>Garage</label>
    <input type="number" name="garage" value="{{old('garage', $property->garage ?? null)}}">
</div>
<div class="row mt-4">
    <label>Area</label>
    <input type="number" name="area" value="{{old('area', $property->area ?? null)}}">
    <label>Summary</label>
    <input type="text" name="summary" value="{{old('summary', $property->summary ?? null)}}">
    <label>Description</label>
    <input type="text" name="description" value="{{old('description' , $property->description ?? null)}}">
</div> --}}

<div class="row">
    <div class="col-md-12">
        <div class="md-form mb-0">
            <input type="text" name="name" value="{{old('name', $property->name ?? null)}}" class="form-control">
            <label class="">Property Name :</label>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="text" name="type" value="{{old('type', $property->type ?? null)}}" class="form-control">
            <label class="">Property Type :</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="text" name="location" value="{{old('location', $property->location ?? null)}}"
                class="form-control">
            <label class="">Location : </label>
        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="text" name="agent" value="{{old('agent', $property->agent ?? null)}}" class="form-control">
            <label class="">Agent Name :</label>
        </div>
    </div>

    <div class="col-md-6 ">
        <div class="input-group">
            <span class="input-group-text col-md-1 pr-5">RM</span>
            <input type="number" name="price" value="{{old('price', $property->price ?? null)}}"
                class="form-control col-md-11">
        </div>

        <label class="">Price :</label>
    </div>
</div>

<div class="row">

    <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="number" name="bed" value="{{old('bed', $property->bed ?? null)}}" class="form-control">
            <label class="">Bed :</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="number" name="bath" value="{{old('bath', $property->bath ?? null)}}" class="form-control">
            <label class="">Bath : </label>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="number" name="garage" value="{{old('garage', $property->garage ?? null)}}"
                class="form-control">
            <label class="">Garage :</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="md-form mb-0">
            <input type="value" name="area" value="{{old('area', $property->area ?? null)}}" class="form-control">
            <label class="">Area :</label>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="md-form mb-0">
            <input type="text" name="summary" value="{{old('summary', $property->summary ?? null)}}"
                class="form-control form-control-long">
            <label class="">Summary :</label>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <div class="md-form mb-0">
            <input type="text" name="description" value="{{old('description', $property->description ?? null)}}"
                class="form-control form-control-long">
            <label class="">Description :</label>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-12">
        <div class="md-form mb-0">
            <label class="">Image :</label>
            <input type="file" name="image" class="form-control-file">
                {{-- class="form-control form-control-long"> --}}

        </div>
    </div>
</div>

@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif