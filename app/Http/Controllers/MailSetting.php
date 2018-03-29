<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    /**
     * @param Request $request
     */
    public function send_form(Request $request)
    {
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $msg=$request->msg;
        $pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";
        if(preg_match($pattern, "$phone") && filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            Mail::to('lip4evskij@ukr.net')->send(new MailClass($name,$phone,$email,$msg));
            $request->session()->flash('success', 'Успешно отправленно!');
            return redirect('/contacts');
        }
        $request->session()->flash('success', 'Введите корректные данные');
        return redirect('/contacts');

    }
}
