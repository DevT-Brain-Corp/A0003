<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenyewaController extends Controller
{
    public function index(){
        $gedung = Building::all();
        $verif = $gedung->where('verif','=','1');
        $edit = $gedung->where('edit','=',1);

        return view('user.index')
            ->with('verif', $verif)
            ->with('edit', $edit);
    }
    public function DetailGedung($id){
        $detailGedung = Building::find($id);

        return view('user.gedung',['detailGedung'=>$detailGedung]);
    }
    public function sewa(){
        $id = Auth::user()->id;
        $sewa = \App\Rental::all()->where('id_loaner','=',$id);

        return view('user.cart')
            ->with('sewa', $sewa);
    }
}
