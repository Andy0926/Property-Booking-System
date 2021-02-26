<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProperty;
use App\Image;
use App\Property;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('property.index', ['property' => Property::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Gate::allows('admin-only', Auth::user())) {
            return view('property.create');
        } else {
            $request->session()->flash('status', 'You are not Allowed to do this');
            return redirect()->route('property.index');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
        $property = Property::findOrFail($id);
        if (Gate::allows('admin-only', Auth::user())) {
            return view('property.edit', ['property' => $property]);
        } else {
            $request->session()->flash('status', 'You are not Allowed to do this');
            return redirect()->route('property.index');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProperty $request)
    {
        $validatedData = $request->validated();

        $property = Property::create($validatedData);

        if ($request->hasFile('image')) {
            // $file = $request -> file('image');
            // $name1=$file->storeAs('image', $property->id . '.' . $file->guessExtension());
            // dump(Storage::url($name1));
            $path = $request->file('image')->store('image');
            $property->image()->save(
                Image::create(['path' => $path])
            );
        }
        // die;
        $request->session()->flash('status', 'Property was created');

        return redirect()->route('property.show', ['property' => $property->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $request->session()->reflash();
        return view('property.show', ['property' => Property::findOrFail($id)]);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProperty $request, $id)
    {
        //
        $property = Property::findOrFail($id);
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image');

            if ($property->image) {
                Storage::delete($property->image->path);
                $property->image->path = $path;
                $property->image->save();
            } else {
                $property->image()->save(
                    Image::create(['path' => $path])
                );
            }
        }

        $property->fill($validatedData);
        $property->save();

        $request->session()->flash('status', 'Property was Updated');

        return redirect()->route('property.show', ['property' => $property->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        $request->session()->flash('status', 'Property was Deleted');

        return redirect()->route('property.index');
    }
}
