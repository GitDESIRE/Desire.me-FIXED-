<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\NoReturn;

class mailSendForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }

    public function SendNewRequest(Request $request): bool
    {
        if ($request['name'] != '' && $request['phone'] != ''){
            $data = array('name' => $request['name'], 'phone' => $request['phone']);
            Mail::send('emails.mail', $data, function ($message) use ($data) {
                $message->from('noreply@desire-company.com', 'Новая заявка');
                $message->to('vkaftancikov@gmail.com');
                $message->subject($data['name']);
            });
            return true;
        }
        return false;
    }

    public function SendNewOrder(Request $request): bool
    {
        if ($request['name'] != '' && $request['tel'] != '' && $request['email']) {
            $data = array('name' => $request['name'], 'phone' => $request['tel'], 'tg' => $request['telegram'],
                'category' => $request['category'], 'tarif' => $request['tarif'], 'email' => $request['email']);
            if (!empty($request['file'])) {
                $file = $request->file('file');
                $upload_folder = 'mailFiles';
                $fileName = $file->getClientOriginalName();
                Storage::putFileAs($upload_folder, $file, $fileName);
                Mail::send('emails.order', $data, function ($message) use ($fileName, $data) {
                    $message->from('noreply@desire-company.com', 'Новый заказ');
                    $message->to('vkaftancikov@gmail.com');
                    $message->attach(storage_path('app/mailFiles/' . $fileName));
                    $message->subject($data['name']);
                });
                Storage::delete('mailFiles/' . $fileName);
                return true;
            }

            Mail::send('emails.order', $data, function ($message) use ($data) {
                $message->from('noreply@desire-company.com', 'Новый заказ');
                $message->to('vkaftancikov@gmail.com');
                $message->subject($data['name']);
            });

            return true;
        }

        return false;
    }

    public function SendNewCandidate(Request $request): bool
    {
        if ($request['name'] != '' && $request['tel'] != '' && $request['email']) {
            $data = array('name' => $request['name'], 'phone' => $request['tel'], 'email' => $request['email'],
                'tg' => $request['telegram'], 'story' => $request['about']);
            if (!empty($request['file'])) {
                $file = $request->file('file');
                $upload_folder = 'mailFiles';
                $fileName = $file->getClientOriginalName();
                Storage::putFileAs($upload_folder, $file, $fileName);
                Mail::send('emails.kandidat', $data, function ($message) use ($fileName, $data) {
                    $message->from('noreply@desire-company.com', 'Новый кандидат');
                    $message->to('vkaftancikov@gmail.com');
                    $message->attach(storage_path('app/mailFiles/' . $fileName));
                    $message->subject($data['name']);
                });
                Storage::delete('mailFiles/' . $fileName);
                return true;
            }

            Mail::send('emails.kandidat', $data, function ($message) use ($data) {
                $message->from('noreply@desire-company.com', 'Новый кандидат');
                $message->to('vkaftancikov@gmail.com');
                $message->subject($data['name']);
            });
            return true;
        }
        return false;
    }
}

