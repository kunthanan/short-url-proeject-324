<?php

namespace App\Http\Controllers;


use App\URL;
use Illuminate\Http\Request;

class ControController extends Controller
{
    //
    public function index(){
        return view('create');
    }
    public function input(Request $request)
    {
        //dd($request->all());
        $URL = new URL;
        $URL->longurl = $request->get('URL');

        $id_num = 324;

        $length = 3;
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }


        $lengthx2 =2;
        $charactersx2 = '0123456789';
        $charactersLengthx2 = strlen($charactersx2);
        $randomStringx2 = '';
        for ($i = 0; $i < $lengthx2; $i++) {
            $randomStringx2 .= $charactersx2[rand(0, $charactersLengthx2 - 1)];
        }

        $URL->shorturl = "short.local/gt/$id_num$randomString$randomStringx2";
        $URL->save();

        return redirect('/');
    }
}
