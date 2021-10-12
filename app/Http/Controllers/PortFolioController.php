<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortFolioController extends Controller
{
    public function list(){
        return view('portFolio/list');
    }

    public function single($tag){
        $project = [
            'id' => $tag,
            'name' => 'placeholder'
        ];
        return view('portFolio/single')-> withProject($project);
    }
}
