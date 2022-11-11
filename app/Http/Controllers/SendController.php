<?php

namespace App\Http\Controllers;

use App\Mail\mailsendform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class SendController extends Controller
{
    public function newRequest(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = array('name' => $request['name'], 'phone' => $request['phone']);
        Mail::send('emails.mail', $data, function ($message) use ($data) {
            $message->from('noreply@desire-company.com', 'Новая заявка');
            $message->to('vkaftancikov@gmail.com');
            $message->subject($data['name']);
        });
        return redirect()->back();
    }

    public function newOrder(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = array('name' => $request['name'], 'phone' => $request['tel'], 'tg' => $request['telegram'],
            'category' => $request['category'], 'tarif' => $request['tarif']);
        if (!empty($request['file']))
        {
            $file = $request->file('file');
            $upload_folder = 'mailFiles';
            $fileName = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $fileName);
            Mail::send('emails.order', $data, function ($message) use ($fileName, $data) {
                $message->from('noreply@desire-company.com', 'Новый заказ');
                $message->to('vkaftancikov@gmail.com');
                $message->attach(storage_path('app/mailFiles/'.$fileName));
                $message->subject($data['name']);
            });
            Storage::delete('mailFiles/'.$fileName);
            return redirect()->back();
        }

        Mail::send('emails.order', $data, function ($message) use ($data) {
            $message->from('noreply@desire-company.com', 'Новый заказ');
            $message->to('vkaftancikov@gmail.com');
            $message->subject($data['name']);
        });
        return redirect()->back();

    }

    public function newCandidate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = array('name' => $request['name'], 'phone' => $request['tel'], 'email' => $request['email'],
            'tg' => $request['telegram'], 'story' => $request['about']);
        if (!empty($request['file']))
        {
            $file = $request->file('file');
            $upload_folder = 'mailFiles';
            $fileName = $file->getClientOriginalName();
            Storage::putFileAs($upload_folder, $file, $fileName);
            Mail::send('emails.kandidat', $data, function ($message) use ($fileName, $data) {
                $message->from('noreply@desire-company.com', 'Новый кандидат');
                $message->to('vkaftancikov@gmail.com');
                $message->attach(storage_path('app/mailFiles/'.$fileName));
                $message->subject($data['name']);
            });
            Storage::delete('mailFiles/'.$fileName);
            return redirect()->back();
        }

        Mail::send('emails.kandidat', $data, function ($message) use ($data) {
            $message->from('noreply@desire-company.com', 'Новый кандидат');
            $message->to('vkaftancikov@gmail.com');
            $message->subject($data['name']);
        });
        return redirect()->back();
    }
}
