<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Text;

class TextController extends Controller{

    public function addData(Request $request){
        Text::create([
            'text' => $request->text
        ]);
        return redirect()->route('home');
    }

    public function getData(){
       return view('welcome', ['data' => Text::all()]);
    }

}
