<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Portrait;
use App\Models\Photo;
use App\Models\Staff;
use App\Models\Service;
use App\Models\Info;


class GuestController extends Controller
{
    public function index(Request $request)
    {
        $info = DB::table('infos')->get();
        return view ('guest.pages.index', compact('info'));
    }

    public function about(Request $request) 
    {
        $about = DB::table('abouts')->get();
        $staff = DB::table('staffs')->get();
        $info = DB::table('infos')->get();
        $meta = DB::table('homes')->get();
        return view ('guest.pages.about', compact('info','staff','about','meta'));
     }
     public function services(Request $request)
    {
        $service = DB::table('services')->get();
        $price = DB::table('prices')->get();
        $info = DB::table('infos')->get();
        $data = DB::table('videos')->get();
        return view('guest.pages.services' , compact('info','price','service','data'));
    }
    public function gallery(Request $request)
    {
        $portrait = DB::table('portraits')->get();
        $photo = DB::table('photos')->get();
        $info = DB::table('infos')->get();
        
        return view('guest.pages.gallery', compact('info','photo','portrait'));
    }
    public function contact(Request $request)
    {
        $info = DB::table('infos')->get();
        return view('guest.pages.contact',  compact('info'));
    }
    public function footer(Request $request)
    {
        $info = DB::table('infos')->get();
        return view('guest.layouts.footer', compact('info'));
    }
   
    
}
