<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kontak;
use App\Models\Paket;
use App\Models\Galeri;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    public function home()
    {
        $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
        function get_client_ip_env() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
        else
        $ipaddress = 'UNKNOWN IP Address';

        return $ipaddress;
        }

        $ip_user  		=   get_client_ip_env();
        
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=180.246.12.9");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);      
        $data = json_decode($output, TRUE);
        $getData['ip'] = $data['geoplugin_request'];
        $getData['negara'] = $data['geoplugin_countryName'];
        $getData['kd_negara'] = $data['geoplugin_countryCode'];
        $getData['prov'] = $data['geoplugin_region'];
        $getData['kota'] = $data['geoplugin_city'];
        $getData['alamat'] = $data['geoplugin_city'].", ".$data['geoplugin_regionName'];
        $getData['latitude'] = $data['geoplugin_latitude'];
        $getData['longitude'] = $data['geoplugin_longitude'];
        //dd($getData);

        //Pengunjung::create($getData);
        //$totPengunjung = DB::table('pengunjung')->distinct('ip')->count('ip');

        $cekIP = $data['geoplugin_request'];
        //dd($getData);

        Carbon::setWeekStartsAt(Carbon::MONDAY);
        Carbon::setWeekEndsAt(Carbon::SUNDAY);
        
        $dayNow = Carbon::now();
        //$formatedDateDay = $dayNow->format('d');
        $monthNow = Carbon::now();
        //$formatedDateMonth = $dayNow->format('m');
        $yearNow = Carbon::now();
        $formatedDateYear = $dayNow->format('Y');
        
        $checkExist = Pengunjung::where('ip', '=', $cekIP)
        ->whereDate('created_at', $dayNow)
        ->whereMonth('created_at', $monthNow)
        ->whereYear('created_at', $yearNow)
        ->count();
        // dd($checkExist);
        
        if ($checkExist < 1) { 
            Pengunjung::create($getData);
        }

        $pengunjungHariIni = Pengunjung::distinct('ip')->whereDate('created_at', $dayNow)->whereMonth('created_at', $monthNow)->whereYear('created_at', $yearNow)->count();
        $pengunjungMingguIni = Pengunjung::distinct('ip')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->whereMonth('created_at', $monthNow)->whereYear('created_at', $yearNow)->count();
        $pengunjungBulanIni = Pengunjung::distinct('ip')->whereMonth('created_at', $monthNow)->whereYear('created_at', $yearNow)->count();
        $pengunjungTahunIni = Pengunjung::distinct('ip')->whereYear('created_at', $yearNow)->count();
        $totPengunjung = DB::table('pengunjung')->distinct('ip')->count('ip');

        //dd($pengunjungMingguIni);
        //dd($pengunjungHariIni." ".$pengunjungBulanIni." ".$pengunjungTahunIni);

        //Jamal
        define('BOT_TOKEN', '5328244937:AAHfFqQoLCqok5uR69NPKIq_G1mznRtPMkw');
        define('CHAT_ID','1643848436');

        //gwd
        //define('BOT_TOKEN', '5316404565:AAEeIMY_uibpyW2e5IFyN19i1AGdXqZtMfU');
        //define('CHAT_ID','5345838843');
        
        function kirimTelegram($pesan) {
            $pesan = urlencode($pesan);
            $API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$pesan&parse_mode=HTML";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_URL, $API);
            $result = curl_exec($ch);
            curl_close($ch);
            return $result;
        }

        $text = "<b>Informasi Data Pengunjung Th $formatedDateYear</b>\n\nPengunjung Hari Ini : $pengunjungHariIni\nPengunjung Minggu Ini : $pengunjungMingguIni\nPengunjung Bulan Ini : $pengunjungBulanIni\nPengunjung Tahun Ini : $pengunjungTahunIni\nTotal Pengunjung Keseluruhan : $totPengunjung
        \n<i>Pesan ini dikirim otomatis oleh sistem dari website grandwatudodol.com</i>.";
        kirimTelegram($text);

        $destinasi = Destinasi::all();
        $kontak = Kontak::all();
        return view('website.pages.home',[
            'destinasi' => $destinasi,
            'kontak' => $kontak
        ]);
    }
    
    public function destinasi_wisata()
    {
        $destinasi = Destinasi::all();
        $kontak = Kontak::all();
        return view('website.pages.destinasi-wisata',[
            'destinasi' => $destinasi,
            'kontak' => $kontak
        ]);
    }
    
    public function paket_wisata()
    {
        $paket = Paket::all();
        $kontak = Kontak::all();
        
        return view('website.pages.paket-wisata',[
            'paket' => $paket,
            'kontak' => $kontak
        ]);
    }

    public function paket_wisata_detail($slug)
    {
        $detailPaket = Paket::where('slug','=',$slug)->get();
        $kontak = Kontak::all();
        $baseUrl="https://grandwatudodol.com/detail-paket-wisata/";
        return view('website.pages.paket-wisata-detail',[
            'detailPaket' => $detailPaket,
            'kontak' => $kontak,
            'baseUrl' => $baseUrl
        ]);
    }
    
    public function galeri()
    {
        $galeri = Galeri::all();
        $kontak = Kontak::all();
        return view('website.pages.galeri',[
            'galeri' => $galeri,
            'kontak' => $kontak
        ]);
    }
    
    public function kontak()
    {
        $kontak = Kontak::all();
        return view('website.pages.kontak',[
            'kontak' => $kontak
        ]);
    }
}
