<?php

namespace App\Http\Controllers;
use App\Models\admin;
use App\Models\client;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $r){

        $adm = admin::all()->where('email', $r->login)->where('password', $r->pwd);
        $cli = client::all()->where('email', $r->login)->where('password', $r->pwd);
        $cAdm = $adm->count();
        $cCli = $cli->count();
        if($cAdm>0){
            return view("compte");
        }
        else if($cCli>0){
            return view("compte");
        }
        else{
            echo("login ou password incorrect !!");
            return view("welcome");


        }

    }
}
