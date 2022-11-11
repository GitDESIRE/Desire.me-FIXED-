<?php

namespace App\Http\Controllers;

use App\Mail\mailSendForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class SendController extends Controller
{

    public function newRequest(Request $request, mailsendform $mail): \Illuminate\Http\RedirectResponse
    {
        $mail->SendNewRequest($request);
        return redirect()->back();
    }

    public function newOrder(Request $request, mailsendform $mail): \Illuminate\Http\RedirectResponse
    {
        $mail->SendNewOrder($request);
        return redirect()->back();
    }

    public function newCandidate(Request $request, mailsendform $mail): \Illuminate\Http\RedirectResponse
    {
        $mail->SendNewCandidate($request);
        return redirect()->back();
    }
}
