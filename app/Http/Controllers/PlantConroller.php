<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//pakai dulu model Plant-nya supaya bisa interaksi ke database
use App\Models\Plant;
class PlantConroller extends Controller
{
    public function index()
    {
        //ambil semua data yang ada di tabel plant
        $plant = Plant::all();

        //kirim datanya ke view
        return view('plant.index',['plant'=>$plant]);
    }
}
