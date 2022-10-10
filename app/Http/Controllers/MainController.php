<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Paket;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use \Cviebrock\EloquentSluggable\Services\SlugService;

class MainController extends Controller
{
    
    public function dashboard_admin()
    {
        $totalDestinasi = DB::table('destinasi')->count();
        $totalpaket = DB::table('paket')->count();
        $totPengunjung = DB::table('pengunjung')->distinct('ip')->count('ip');
        
        return view('panel.pages.dashboard',[
            'totalDestinasi' => $totalDestinasi,
            'totalpaket' => $totalpaket,
            'totPengunjung' => $totPengunjung
        ]);
    }
    
    //DESTINASI WISATA
    public function add_destinasi_wisata()
    {
        return view('panel.pages.add-destinasi-wisata');
    }

    public function list_destinasi_wisata()
    {
        $destianasi = Destinasi::all();

        return view('panel.pages.list-destinasi-wisata',[
            'destinasi' => $destianasi
        ]);
    }

    public function post_destinasi(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'image' => 'required|max:2048',
                'title' => 'required|max:255',
                'deskripsi' => 'required|max:255',
                'userlog' => ''
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
                $image->move(public_path() . '/image-destinasi/', $name);
                $validatedData['image'] = $name;
            }

            $validatedData['userlog'] = auth()->user()->username;
            
            Destinasi::create($validatedData);
            return redirect('/dashboard/add-destinasi-wisata')->with('add-destinasi', 'Destinasi berhasil ditambahkan');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/add-destinasi-wisata')->with('error-destinasi', 'Error, ulangi lagi!');
        }
    }

    public function detail_destinasi_wisata($id)
    {
        $getID = base64_decode($id);
        $detail_destinasi = Destinasi::findOrFail($getID);
        return view('panel.pages.detail-destinasi-wisata',[
            'detail_destinasi' => $detail_destinasi
        ]);
    }
    public function get_data_destinasi($id)
    {
        $destinasiGet = Destinasi::findOrFail($id);
        return response()->json($destinasiGet);
    }
    
    public function update_destinasi_wisata(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'image' => '',
                'title' => 'required|max:255',
                'deskripsi' => 'required|max:255',
                'userlog' => ''
            ]);

            if ($request->hasFile('image')) {
                if ($request->oldImage) {
                    $image_path = public_path() . '/image-destinasi/' . $request->oldImage;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }

                $nameNew = date('mdYHis') . uniqid() . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path() . '/image-destinasi/', $nameNew);
                $data = $nameNew;
                
                $validatedData['image'] = $data;
            }
            $validatedData['userlog'] = auth()->user()->username;
            Destinasi::where('id', $request->id)
                ->update($validatedData);
            return redirect('/dashboard/detail-destinasi-wisata/'.base64_encode($request->id))->with('edit-destinasi', 'Destinasi berhasil diupdate');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/detail-destinasi-wisata/'.base64_encode($request->id))->with('error-destinasi', 'Error, ulangi lagi!');
        }
    }

    public function delete_destinasi_wisata(Request $request)
    {
        try {
            $gmbr = $request->oldImages;
            $image_path = public_path() . '/image-destinasi/' . $gmbr;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            Destinasi::destroy($request->id_del);
            return redirect('/dashboard/list-destinasi-wisata')->with('delete-destinasi', 'Destinasi telah dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/list-destinasi-wisata')->with('error-destinasi', 'Error, ulangi lagi!');
        }
    }

    //PAKET WISATA
    public function add_paket_wisata()
    {
        return view('panel.pages.add-paket-wisata');
    }

    public function list_paket_wisata()
    {
        $paket = Paket::all();

        return view('panel.pages.list-paket-wisata',[
            'paket' => $paket
        ]);
    }

    public function post_paket(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'image' => 'required|max:2048',
                'title' => 'required|max:255',
                'slug' => '',
                'harga' => 'required',
                'fasilitas' => 'required',
                'userlog' => ''
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
                $image->move(public_path() . '/image-paket-wisata/', $name);
                $validatedData['image'] = $name;
            }

            $validatedData['userlog'] = auth()->user()->username;
            $validatedData['slug'] = SlugService::createSlug(Paket::class, 'slug', $request->title);
            
            Paket::create($validatedData);
            return redirect('/dashboard/add-paket-wisata')->with('add-paket', 'Paket wisata berhasil ditambahkan');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/add-paket-wisata')->with('error-paket', 'Error, ulangi lagi!');
        }
    }

    public function detail_paket_wisata($id)
    {
        $getID = base64_decode($id);
        $detail_paket = Paket::findOrFail($getID);
        return view('panel.pages.detail-paket-wisata',[
            'detail_paket' => $detail_paket
        ]);
    }
    
    public function get_data_paket($id)
    {
        $paketGet = Paket::findOrFail($id);
        return response()->json($paketGet);
    }

    public function update_paket_wisata(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'image' => '',
                'title' => 'required|max:255',
                'slug' => '',
                'harga' => 'required',
                'fasilitas' => 'required',
                'userlog' => ''
            ]);

            if ($request->hasFile('image')) {
                if ($request->oldImage) {
                    $image_path = public_path() . '/image-paket-wisata/' . $request->oldImage;
                    if (File::exists($image_path)) {
                        File::delete($image_path);
                    }
                }

                $nameNew = date('mdYHis') . uniqid() . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path() . '/image-paket-wisata/', $nameNew);
                $data = $nameNew;
                
                $validatedData['image'] = $data;
            }
            $validatedData['userlog'] = auth()->user()->username;
            if ($request->oldTitle != $request->title) {
                $validatedData['slug'] = SlugService::createSlug(Paket::class, 'slug', $request->title);
            }
            Paket::where('id', $request->id)
                ->update($validatedData);
            return redirect('/dashboard/detail-paket-wisata/'.base64_encode($request->id))->with('edit-paket', 'Paket wisata berhasil diupdate');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/detail-paket-wisata/'.base64_encode($request->id))->with('error-paket', 'Error, ulangi lagi!');
        }
    }

    public function delete_paket_wisata(Request $request)
    {
        try {
            $gmbr = $request->oldImages;
            $image_path = public_path() . '/image-paket-wisata/' . $gmbr;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            Paket::destroy($request->id_del);
            return redirect('/dashboard/list-paket-wisata')->with('delete-paket', 'Paket wisata telah dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/list-paket-wisata')->with('error-paket', 'Error, ulangi lagi!');
        }
    }

    //GALERI GWD
    public function data_galeri()
    {
        return view('panel.pages.data-galeri');
    }

    public function post_galeri(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'image' => 'required|max:2048',
                'userlog' => ''
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = date('mdYHis') . uniqid() . $image->getClientOriginalName();
                $image->move(public_path() . '/image-galeri/', $name);
                $validatedData['image'] = $name;
            }

            $validatedData['userlog'] = auth()->user()->username;
            
            Galeri::create($validatedData);
            return redirect('/dashboard/galeri-gwd')->with('add-galeri', 'Galeri berhasil ditambahkan');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/galeri-gwd')->with('error-paket', 'Error, ulangi lagi!');
        }
    }

    public function list_galeri()
    {
        $galeri = Galeri::all();

        return view('panel.pages.list-galeri',[
            'galeri' => $galeri
        ]);
    }

    public function get_galeri($id)
    {
        $galeriGet = Galeri::findOrFail($id);
        return response()->json($galeriGet);
    }

    public function delete_galeri(Request $request)
    {
        try {
            $gmbr = $request->oldImages;
            $image_path = public_path() . '/image-galeri/' . $gmbr;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            Galeri::destroy($request->id_del);
            return redirect('/dashboard/list-galeri')->with('delete-galeri', 'Foto telah dihapus!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/dashboard/list-galeri')->with('error-galeri', 'Error, ulangi lagi!');
        }
    }

    //KONTAK
    public function data_kontak()
    {
        $kontakData = Kontak::all();

        return view('panel.pages.kontak',[
            'kontakData' => $kontakData
        ]);
    }
}