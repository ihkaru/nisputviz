<?php

namespace App\Http\Controllers;

use App\Models\LinkTableau;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;

class FrontController extends Controller
{
    public function index(){
        return view("pages.front.index");
    }
    public function dash($id){
        $tab = LinkTableau::where("jenis_dashboard","Dashboard $id")->firstOrFail();
        $tabs = LinkTableau::orderBy("jenis_dashboard")->get();
        return view("pages.front.dash",[
            "tab"=>$tab,
            "tabs"=>$tabs
        ]);
    }
}
