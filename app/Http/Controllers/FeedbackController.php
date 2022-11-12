<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class FeedbackController extends Controller{

    public function send() {
        $comment = 'Это сообщение отправлено из формы обратной связи';
        $toEmail = "gerasimova.nadezhda2001@gmail.com";
        Mail::to($toEmail)->send(new FeedbackMail($comment));
        return 'Сообщение отправлено на адрес '. $toEmail;
    }
}
