<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PageController extends Controller
{
    //
    
    public function index() {
        // SELECT * FROM `trains` WHERE(date(departure_time)= CURRENT_DATE );
        $trains = Train::where('departure_time', '>', Carbon::now())->get();

        // $trains = Train::where('departure_time', '>', Carbon::today())->where('departure_time', '<', Carbon::tomorrow())->get(); 
        // 13/12/2023 00:00:00
        return view('index',compact('trains'));
    }
}
