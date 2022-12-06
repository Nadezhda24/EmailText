<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller{

    public function Registration(){
        return view('registration', ['user' => User::all()]);
    }

    public function Authorization(){
        return view('auth');
    }

    public function sendPassword(Request $request){
        $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890%$';
        $pass = array();
        $combLen = strlen($comb) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $combLen);
            $pass[] = $comb[$n];
        }

        $comment = "Ваш пароль: ".implode($pass);

        $toEmail = $request->email;

        try{
            Mail::to($toEmail)->send(new FeedbackMail($comment));
            return view('auth');
        }catch (Exception $e){
            return $e;
        }

    }
}
