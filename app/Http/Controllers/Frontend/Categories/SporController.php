<?php

namespace App\Http\Controllers\Frontend\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SporController extends Controller
{
    public function index()
    {

        $data1 = DB::table('news')
            ->where('durum', '=', '1')
            ->where('categori_id', '=', '2')
            ->take(5)->orderBy('id', 'desc')->get();

        $datacount = DB::table('news')
            ->where('durum','=','1')
            ->where('categori_id','=','2')
            ->get()->count();

        if($datacount>5){
            $adet = $datacount;
            $data2 = DB::table('news')
                ->where('durum', '=', '1')
                ->where('categori_id', '=', '2')
                ->take($adet-5)
                ->orderBy('id', 'asc')->get();
        }
        else{
            $adet = 0;
            $data2 = DB::table('news')
                ->where('durum', '=', '1')
                ->where('categori_id', '=', '2')
                ->take(0)
                ->orderBy('id', 'asc')->get();
        }
        return view('frontend.categories.spor.index')->with([
            "data1" => $data1,
            "data2" => $data2
        ]);
    }
}
