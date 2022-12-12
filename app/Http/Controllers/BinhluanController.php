<?php

namespace App\Http\Controllers;

use App\Models\Binhluan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class BinhluanController extends Controller
{
    public function store(Request $request)
    {
        $binhLuan = Binhluan::create([
            'binhluan'=>$request->binhluan,
            'idtk'=> Auth::user()->id,
            'idbv'=> $request->idbv,
            'username' =>Auth::user()->username,
        ]);
        if(!empty($binhLuan))
        {
            return redirect('/chi-tiet/'.$request->idbv);
        }
    }
}
