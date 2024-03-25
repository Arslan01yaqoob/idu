<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LawyerController extends Controller
{

    public function givemelawyers()
    {
        $lawyers = DB::table('lawyers')->get();
        // return $lawyers;
        return view('welcome', ['abc' => $lawyers]);
    }
    public function singlelawyer(string $id)
    {
        $lawyer = DB::table('lawyers')->where('id', $id)->get();
        return view('lawyer', ['abc' => $lawyer]);
        // return $lawyer;
    }
    public function addLawyer()
    {
        $lawyer = DB::table('lawyers')
            ->insert([
                'name' => 'Naeem',
                'lastname' => 'Abbas',
                'city' => 'Faislabaad',
                'phone' => '+9232458752569',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        if ($lawyer) {
            echo "<h1>Data added Succesfully</h1>";
        } else {
            echo "<h2>Data does not added something Went Wrong</h2>";
        }

    }

    public function updatelawyer()
    {
        $lawyer = DB::table('lawyers')
            ->where('id', 12)
            ->update([
                'city' => 'Kasur',
                'updated_at' => now()
            ]);
        if ($lawyer) {
            echo "<h1>Data Updated Succesfully</h1>";
        } else {
            echo "<h2>Data does not Updated something Went Wrong</h2>";
        }
    }

    public function Deletelawyer(string $id)
    {
        $lawyer = DB::table('lawyers')
            ->where('id', $id)
            ->delete();
        if ($lawyer) {

            return redirect()->route('home');
        }



    }




}

