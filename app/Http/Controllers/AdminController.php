<?php

namespace App\Http\Controllers;
use App\Models\Binhluan;
use App\Models\User;
use App\Models\Baidang;
use App\Models\tintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adpage()
    {
        return view('Admin.trangchu');
    }
    public function tintuc()
    {
        $Post = tintuc::all();
        return view('Admin.tintuc', compact('Post'));
    }
    public function dangtin()
    {
        return view('Admin.dangtin');
    }
    public function xldangtin(Request $request)
    {
        $Dangtin = tintuc::create([
            'tieude'=>$request->tieude,
            'noidung'=>$request->noidung,
            'mage'=>$request->image,
        ]);
        if($request->has('image'))
      {
        $fileName ="{$Dangtin->id}.jpg";
        $file = $request->file('image');
        $request->file('image')->storeAs('anhad',$fileName,'public');
        $Dangtin->image = "{$fileName}";
        $Dangtin->save();
      }
      if(!empty($Dangtin))
      {
        $Post=tintuc::all();
        return view('Admin.tintuc',compact('Post'));
      }
    }
    public function qlbaiviet()
    {
        $Post = Baidang::all();
        return view('Admin.baiviet',compact('Post'));
    }
    public function dangxuat()
    {

        Auth::logOut();
        return redirect()->route('trang-chu');
    }
    public function ctbaiviet()
    {
        $Post = Baidang::all();
        $binhluan = Binhluan::all();
        return view('Admin.chitietbaidang',compact('Post','binhluan'));
    }
    public function ctbantin()
    {
        $Post = tintuc::all();
        return view('Admin.chitiettin',compact('Post'));
    }
    public function xoatin($id)
    {
        $Delete = tintuc::find($id)->delete();
        return redirect()->route('tin-tuc');
    } public function xoabaiviet($id)
    {
        $Delete = Baidang::find($id)->delete();
        return redirect()->route('ql-bai');
    }
    public function userdisplay(User $id)
  {
    $Post = User::find($id);
       return view('Admin.hosouser', compact('Post'));
    }
    public function xoauser($id)
    {
        $Delete = User::find($id)->delete();
        return redirect()->route('ql-user');
    }
    public function qluser()
    {

        $Post = User::all();
        return view('Admin.users', compact('Post'));
        
    }
    public function edittin($id)
    {
        $Post = tintuc::find($id);
        return view('Admin.capnhattin', compact('Post'));

    }
    public function edithoso()
    {
        $hoso = User::all();
        return view('Admin.edithoso',compact('hoso'));
    }
    public function updatehoso(Request $request)
    {
        
        $Admin->username= $request->username;
        $Admin->email = $request->email;
        $Admin->phone = $request->phone;
        $Admin->Adress = $request->Adress;
        $Admin->date = $request->date;
        $Admin ->save();
        return redirect()->route(trang-chu);
    }
    public function updatetin(Request $request, $id)
    {
        $Tintuc = tintuc::find($id);
        $Tintuc->tieude = $request->tieude;
        $Tintuc->noidung  = $request->noidung;
        $Tintuc->image = $request->image;
        if($request->has('image'))
        {
            $fileName ="{$Tintuc->id}.jpg";
            $file = $request->file('image');
            $request->file('image')->storeAs('anhad',$fileName,'public');
            $Tintuc->image = "{$fileName}";
        }
        $Tintuc->save();
        return redirect()->route('tin-tuc');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}