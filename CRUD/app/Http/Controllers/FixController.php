<?php

namespace App\Http\Controllers;

use App\Models\CRUD;
use Illuminate\Http\Request;

class FixController extends Controller
{
    function index($id) {
        CRUD::find($id)->delete();
        return redirect()->back()->with('success','Delete Successful');
    }
}
