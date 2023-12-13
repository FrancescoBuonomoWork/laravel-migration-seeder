<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {

        $trains = Train::all();
        return view('index',compact('trains'));
    }
}