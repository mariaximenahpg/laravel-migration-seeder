<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains=Train::where('in_time',1)->get();
        // "in orario" perché devo rivedere use carbon per today date now() per scegliere invece data di partenza "oggi"
        return view('homepage', compact('trains'));
    }
}
