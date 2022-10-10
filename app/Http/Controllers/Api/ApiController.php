<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Galeri;
use App\Models\Kontak;
use App\Models\Paket;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getPaketWisata(){
        $paketWisata =  Paket::all();
        return response()->json([
            'status' => '200',
            'message' => 'load complete',
            'url_image' => 'http://127.0.0.1:8000/image-paket-wisata/',
            'results' => $paketWisata
        ]);
    }

    public function getKontak(){
        $getKontak = Kontak::all();
        return response()->json([
            'status' => '200',
            'message' => 'load complete', 
            'results' => $getKontak
        ]);
    }

    public function getDestinasi(){
        $getDestinasi = Destinasi::all();
        return response()->json([
            'status' => '200',
            'message' => 'load complete', 
            'url_image' => 'http://127.0.0.1:8000/image-destinasi/',
            'results' => $getDestinasi
        ]);
    }

    public function getGaleri(){
        $getGaleri = Galeri::all()->take(20);
        return response()->json([
            'status' => '200',
            'message' => 'load complete', 
            'url_image' => 'http://127.0.0.1:8000/image-galeri/',
            'results' => $getGaleri
        ]);
    }
}
