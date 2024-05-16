<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\City;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RegisterController extends ResourceController
{
    private $cityModel;

    public function __construct()
    {
        parent::__construct();

        $this->cityModel = new City();
    }

    public function index(){

        $this->data['cities'] = $this->cityModel->get();

        return view('pages.main.registration', $this->data);
    }

    public function register(UserRequest $request){

        try{

            $firstName = $request->input('firstName');
            $lastName = $request->input('lastName');
            $city = $request->input('city');
            $email = $request->input('email');
            $password = md5($request->input('password'));
            $street = $request->input('street');

            $selectedEmail = DB::table('users')
                ->where('email', $email)
                ->first();

            if($selectedEmail){
                return response(['error' => true, 'errorMsg' => 'Email already exists!'], 400);
            }

            $insert = DB::table('users')->insertGetId([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'password' => $password,
                'street' => $street,
                'city_id' => $city,
                'role_id' => 2
            ]);

            if($insert){

                $user = DB::table('users')
                    ->select('id as user_id', $insert)
                    ->first();

                DB::table('admin')->insert([
                    'user_id' => $user->user_id,
                    'action' => 'Registration',
                    'date' => Carbon::now()->toDateTime()
                ]);

                return "You have successfully registered! Please, login now. :)";
            }

        }catch(\Exception $e){

            Log::error($e->getMessage());
        }
    }
}
