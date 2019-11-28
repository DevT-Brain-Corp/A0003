<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index(){
        $gedung = Building::all();
        return view('user.index', compact('gedung'));
    }
    public function DetailGedung($id){
        $detailGedung = Building::find($id);

        return view('user.gedung',['detailGedung'=>$detailGedung]);
    }
    public function sewa(){
//        $sewa = ;
        return view('user.cart');
    }
}
