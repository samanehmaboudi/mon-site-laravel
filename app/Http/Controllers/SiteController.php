<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){ return view('home'); }
    public function aPropos(){ return view('a-propos'); }
    public function projets(){ return view('projets'); }
    public function contact(){ return view('contact'); }

    public function storeContact(Request $request){
        $data = $request->validate([
            'name'    => 'required|min:2',
            'email'   => 'required|email',
            'message' => 'required|min:5',
        ]);
        return view('confirmation', compact('data'));
    }
}
