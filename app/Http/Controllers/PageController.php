<?php

namespace App\Http\Controllers;

use App\Models\AboutUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function page() {
        return view("page.home");
    }
    public function page_contact() {
        $data='deni';
        return view("page.page_contact",compact('data'));
    }
    public function page_about() {
        // $pa=AboutUS::whereUser;
        // $pa= AboutUS::whereUserId("id");

       	// mengambil data dari table pegawai
    	$testimonials = DB::table('testimonials')->get();

    	// mengirim data pegawai ke view index
    	return view('page.page_about',['testimonials' => $testimonials]);

    }
    public function page_services() {
        return view("page.page_services");
    }
    public function page_gallery() {
        return view("page.page_gallery");
    }
}
