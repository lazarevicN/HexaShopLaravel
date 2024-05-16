<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoginController extends ResourceController
{
    public function index(){

        return view('pages.main.login', $this->data);
    }

    public function login(LoginRequest $request){

        $email = $request->input('email');
        $password = md5($request->input('password'));

        try{

            $user = DB::table('users')
                ->where('email', $email)
                ->where('password', $password)
                ->first();

            if(!$user){

                return response(['error' => true, 'errorMsg' => 'Please, make sure Your data are correct and try again.'], 400);

            }else{

                $request->session()->put('user', $user);

                DB::table('admin')->insert([
                    'user_id' => session('user')->id,
                    'action' => 'Login',
                    'date' => Carbon::now()->toDateTime()
                ]);

                return 'Successfully logged in!';

            }

        }catch (\Exception $e){
            Log::error($e->getMessage());
        }
    }

    public function logout(Request $request){

        DB::table('admin')->insert([
            'user_id' => session('user')->id,
            'action' => 'Logout',
            'date' => Carbon::now()->toDateTime()
        ]);

        $request->session()->forget('user');
        return redirect()->route('home');
    }
}
