<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Champion;

class CalcController extends Controller
{
    public function select($name)
    {       
        //$champion = \DB::table('champions')->where('name', $champion)->first();
        $champion = Champion::where('name', $name)->firstOrFail();
        

        return view('calculator', [
            'champion' => $champion
        ]);
    }
}
