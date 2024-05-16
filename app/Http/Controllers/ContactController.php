<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\SendEmail;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends ResourceController
{
    public function index(){

        return view('pages.main.contact', $this->data);
    }

    public function send(ContactRequest $request){

        try{

            $name = $request->input('name');
            $email = $request->input('email');
            $message = $request->input('message');

            $data = array(
                'name' => $name,
                'email' => $email,
                'subject' => 'Questions from customers',
                'message' => $message
            );

            $insert = DB::table('contacts')->insert([
                'name' => $name,
                'email' => $email,
                'message' => $message
            ]);

            if($insert){

                //Mail::to('nikola.lazarevic.nl@hotmail.com')->send(new SendEmail($data));
                return "You have successfully sent us Your question. Be patient, we will text you soon! :)";
            }

        }catch(QueryException $e){

            dd($e);
        }
    }
}
