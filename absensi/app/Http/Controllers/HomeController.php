<?php

namespace App\Http\Controllers;

use App\Absen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function check_in(Request $request){

        $id = $request->user()->id;
        // dd($id);
        Absen::create([
            'check_in' => now(),
            'user_id' => $id,

        ]);

        return redirect('home');
        
    }

    public function check_out(Request $request) {

        $id = $request->user()->id;
        Absen::where('user_id', $id)->update(['check_out' => now()]);

        return redirect('home');
    }

    public function daftar_absen(Request $request) {

        return view ('daftar_absen',[
            'datas'=> Absen::all(),
        ]);
    }
}
