<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Gedung;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gedung = Gedung::all();
        if (Auth::user()->hasAnyRole('owner')){
            return view('owner.indexgedung', ['gedung'=> $gedung]);
        }
        else if (Auth::user()->hasAnyRole('admin')){
            return view('admin.indexgedung', ['gedung'=> $gedung]);
        }
        else if (Auth::user()->hasAnyRole('masyarakat')){
            return view('masyarakat.indexsewa', ['gedung'=> $gedung]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('owner.creategedung');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'File' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
            
        //cari inputan file dari form
        $file = $request->file('File');

        // nama folder di public
        $folder = 'file';

        // nama file yang disimpan ke folder public
        $file_foto = time()."_".$file->getClientOriginalName();

        // pindah file dari form ke folder laravel
        $file->move($folder, $file_foto);

        Gedung::create([
        'id_owner' => Auth::id(),
        'NamaGedung' => $request->NamaGedung,
        'AlamatGedung' => $request->AlamatGedung,
        'Biaya' => $request->Biaya,
        'Kapasitas' => $request->Kapasitas,
        'Keterangan' => $request->Keterangan,
        'File' => $file_foto,
        'Kriteria' => !empty($request->Kriteria) ? $request->Kriteria : "Sedang" ,
        'Verifikasi' => !empty($request->Verifikasi) ? $request->Verifikasi : false
        ]);
        
        
        return redirect('owner.indexgedung')->with('status','Data Gedung Berhasil di Tambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gedung $gedung)
    {
        //
        if (Auth::user()->hasAnyRole('owner')){
        return view('owner.showgedung', ['gedung'=> $gedung] );
        } else if (Auth::user()->hasAnyRole('admin')){
        return view('admin.showgedung', ['gedung'=> $gedung] );
        }else if (Auth::user()->hasAnyRole('masyarakat')){
        return view('masyarakat.showgedung', ['gedung'=> $gedung] );
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gedung $gedung)
    {
        //
        return view('owner.editgedung', ['gedung'=> $gedung]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gedung $gedung)
    {
        //
        
        // return view('admin.showgedung', ['gedung'=> $request]);
        // if (Auth::user()->hasAnyRole('owner')){
        //     return view('owner.indexgedung', ['gedung'=> $gedung]);
        // }
        // else if (Auth::user()->hasAnyRole('admin')){
        //     return view('admin.indexgedung', ['gedung'=> $gedung]);
        
        $request->validate([
			'File' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
            
        //cari inputan file dari form
        $file = $request->file('File');

        // nama folder di public
        $folder = 'file';

        // nama file yang disimpan ke folder public
        $file_foto = time()."_".$file->getClientOriginalName();

        // pindah file dari form ke folder laravel
        $file->move($folder, $file_foto);
        Gedung::where('id',$gedung->id)
                ->update([
                    'NamaGedung' => $request->NamaGedung,
                    'AlamatGedung' => $request->AlamatGedung,
                    'Biaya' => $request->Biaya,
                    'Kapasitas' => $request->Kapasitas,
                    'Keterangan' => $request->Keterangan,
                    'File' => $file_foto,
                    'Kriteria' => !empty($request->Kriteria) ? $request->Kriteria : "Sedang" ,
                    'Verifikasi' => !empty($request->Verifikasi) ? $request->Verifikasi : false
                    ]);
                    return redirect('owner.indexgedung')->with('status','Data Gedung Berhasil di ubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gedung $gedung)
    {
        //
        Gedung::destroy($gedung->id);
        return redirect('owner.indexgedung')->with('status','Data Gedung Berhasil di hapus');
        

    }
}
