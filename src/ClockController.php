<?php

namespace Awonwon\Booclock;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class ClockController extends Controller
{
    public function index(Request $request){
        $time = Carbon::now()->toRfc850String();
        return view('booclock::clock')->with(compact(['time']));
    }
}
