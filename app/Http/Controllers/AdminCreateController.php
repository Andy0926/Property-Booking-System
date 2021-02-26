<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProperty;
use App\Image;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCreateController extends Controller
{
    public function create()
    {
        return view('property.create');
    }
}
