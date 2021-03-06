<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Empty_;

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
        if (!empty(Auth::user())){
            $id = Auth::user()->id;
            $sewa = \App\Rental::all()->where('id_loaner','=',$id);
//            $day = Carbon::now()->format('d');
//            $month = Carbon::now()->addMonth(1)->format('m');
//            $year = Carbon::now()->format('Y');
//            $durasi = $sewa->where($day);
            return view('user.cart')
                ->with('sewa', $sewa);
//                ->with('durasi', $durasi);
        }else{
            return view('user.cart')
                ->with('null','Tidak ada gedung yang anda pesan. silihakan pesan terebih dahulu');
        }

    }
}
