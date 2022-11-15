<?php

namespace App\Http\Controllers;

use App\Mail\mailSendForm;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function validator;


class SendController extends Controller
{

    public function newRequest(Request $request, mailsendform $mail): RedirectResponse
    {
        $mail->SendNewRequest($request);
        return redirect()->back();
    }

    public function newOrder(Request $request, mailsendform $mail): RedirectResponse|JsonResponse|string
    {
        $validator = validator($request->all(), [
            'name' => 'required',
            'tel' => 'required_without:telegram',
            'telegram' => 'required_without:tel',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->messages()]);
        }

        $mail->SendNewOrder($request);
        return redirect()->back();
    }

    public function newCandidate(Request $request, mailsendform $mail): RedirectResponse
    {
        $mail->SendNewCandidate($request);
        return redirect()->back();
    }
}
