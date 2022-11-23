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

    public function newOrder(Request $request, mailsendform $mail): RedirectResponse|JsonResponse
    {

        $validator = validator($request->all(), [
            'tel' => 'required_without:telegram|phone',
            'telegram' => 'required_without:tel',
            'email' => 'email'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->messages()]);
        }

        $mail->SendNewOrder($request);
        return redirect()->back();
    }

    public function newCandidate(Request $request, mailsendform $mail): RedirectResponse|JsonResponse
    {
        $validator = validator($request->all(), [
            'tel' => 'required_without:telegram|phone',
            'telegram' => 'required_without:tel',
            'email' => 'email'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->messages()]);
        }

        $mail->SendNewCandidate($request);
        return redirect()->back();
    }
}
