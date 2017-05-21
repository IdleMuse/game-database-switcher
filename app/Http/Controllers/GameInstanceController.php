<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameInstance;
use Auth;
use DB;

class GameInstanceController extends Controller
{
    public function index(){
        return view('instances.index',['gameinstances'=>GameInstance::all()]);
    }

    public function create(){

        $dbname = Auth::user()->id."_".Auth::user()->gameinstances()->count();

        if(DB::statement('CREATE DATABASE '.$dbname)){
            $gi = Auth::user()->gameinstances()->create([
                "database_name" => $dbname
            ]);
        }

        return back();
    }
}
