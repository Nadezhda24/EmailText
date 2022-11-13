<?php

namespace App\Http\Controllers;
use App\Model\Text;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class FeedbackController extends Controller{

    public function __invoke() {
        $comment = "Количество записей на текущий момент: ".Text::all()->count();
        $toEmail = "jungariki@list.ru";
        Mail::to($toEmail)->send(new FeedbackMail($comment));
    }
}
