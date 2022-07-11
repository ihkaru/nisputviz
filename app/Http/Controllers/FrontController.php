<?php

namespace App\Http\Controllers;

use App\Models\LinkTableau;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view("pages.front.index");
    }
    public function dash($id){
        $tab = LinkTableau::where("jenis_dashboard","Dashboard $id")->firstOrFail();
        return view("pages.front.dash",[
            "tab"=>$tab
        ]);
    }
}
