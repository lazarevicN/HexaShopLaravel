<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FitController extends Controller
{
    public function insert(Request $request){

        $name = $request->input('name');

        try{

            $select = DB::table('fits')
                ->where('name', $name)
                ->first();

            if(!$select){

                $insert = DB::table('fits')->insert([
                    'name' => $name
                ]);

                if($insert){

                    return "You have successfully created new fit!";
                }
            }else{

                return response(['errorMsg' => 'You inserted fit that already exists!'], 400);
            }

        }catch(\Exception $e){
            Log::error($e->getMessage());
        }
    }

    public function delete(Request $request){

        $id = $request->input('id');

        try{

            $select = DB::table('fits')
                ->where('id', $id)
                ->first();

            if($select){

                $delete = DB::table('fits')
                    ->where('id', $id)
                    ->delete();

                if($delete){

                    return "You have successfully deleted choosen fit!";
                }
            }else{

                return response(['errorMsg' => 'The choosen fit doesnt exist!'], 400);
            }

        }catch(\Exception $e){
            Log::error($e->getMessage());
        }
    }

    public function update(Request $request){

        $id = $request->input('id');
        $name = $request->input('name');

        try{

            $select = DB::table('fits')
                ->where('id', $id)
                ->first();

            if($select){

                $select2 = DB::table('fits')
                    ->where('name', $name)
                    ->first();

                if(!$select2){

                    $update = DB::table('fits')
                        ->where('id', $id)
                        ->update([
                            'name' => $name
                        ]);

                    if($update){

                        return "You have successfully updated fit!";
                    }
                }else{

                    return response(['errorMsg' => 'That fit already exists!'], 400);
                }
            }else{

                return response(['errorMsg' => 'The choosen fit doesnt exist!'], 400);
            }

        }catch(\Exception $e){
            Log::error($e->getMessage());
        }
    }
}
