<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Baidang;
use App\Models\Binhluan;
use App\Models\tintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dangky(Request $request)
    {
        return view('User/dangky');
    }
    public function dangnhap(Request $request)
    {
        return view('User.dangnhap');
    }
    public function trangchu(Request $request)
    {
        $Post = Baidang::all();
        return view('User.page',compact('Post'));
    }
    public function hoso(Request $request)
    {
        return view('User.hoso');
    }
    public function xldangky(Request $request)
    {
        $xldangky = User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'matkhau'=>Hash::make($request->password),
            'confirmpassword'=>$request->confirm_Password,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'Adress'=>$request->Adress,
            'image'=>$request->image,
        ]);
   
        if(!empty($xldangky)){
            return view('User.dangnhap');
        }
        return redirect()->route('dang-ky');
    }

    public function xldangnhap(Request $request)
    {
        $credentials = 
        [
            'username'=>$request->username,
            'password'=>$request->password,
            'loaitk' => null,
        ];  
        $credentials2 = 
        [
            'username'=>$request->username,
            'password'=>$request->password,
            'loaitk' => 2,
        ];
      
        if(Auth::attempt($credentials))
        {
            $Post = Baidang::all();
            return redirect()->route('trang-chu'); 
        }
        else if(Auth::attempt($credentials2))
        {
            return redirect()->route('admin'); 
        }
        
        return redirect()->back()->with("error","Đăng nhập không thành công!");
    }
    public function gioithieu()
    {
        return view('user.gioithieu');
    }

    public function dangxuat()
    {

        Auth::logOut();
        return redirect()->route('trang-chu');
    }
    public function dangbai(Request $request)
    {
        return view('User.post');
    }
    public function xldangbai(Request $request)
    {
        $Baidang = Baidang::create([
            'iduser'=>Auth::user()->id,
            'loai'=>$request->loai,
            'noidung'=>$request->noidung,
            'noimat'=>$request->noimat,
            'ngaymat'=>$request->ngaymat,
            'username'=>$request->username,
            'image'=>$request->image,
            'phone'=>$request->phone,
        ]);
      
        if($request->has('image'))
        {
            $fileName ="{$Baidang->id}.jpg";
            $file = $request->file('image');
            $request->file('image')->storeAs('anh',$fileName,'public');
            $Baidang->image = "{$fileName}";
            $Baidang->save();
        }

        if(!empty($Baidang)){
            $Post = Baidang::all();
            return view('User.page',compact('Post'));
        }
    }

    public function baidang(Request $request)
    {
        return view('User/baidang');
    }

    public function chitiet(Baidang $id)
    {
        $Post = Baidang::find($id);
        $binhluan = Binhluan::all();
        return view('User.chitietbaiviet',compact('Post','binhluan'));
    }
    
    public function chitietbantin(tintuc $id)
    {
        $Post = tintuc::find($id);
        return view('User.chitiettintuc',compact('Post'));
    }
    public function dadang(Request $request)
    {
        $Post = Baidang::all();
        return view('User.baidadang',compact('Post'));
    }
    
 public function delete($id)
    {
        $Delete = Baidang::find($id)->delete();
        return redirect()->route('da-dang');
    }
    public function sreach(Request $request)
    {
       $title =DB::table('baidangs')->where('loai','LIKE','%'.$request->sreach,'%');
       return view('User.sreach', compact('title'));
    }
    public function tintuc()
    {
        $Post =tintuc::all();
        return view('User.bantin',compact('Post'));
    }

 
    public function xledit($id)
    {
        $Post = Baidang::find($id);
        return view('User.capnhatbaidang',compact('Post'));
    }  
    public function updatee(Request $request ,$id)
    {
        $Baidang = Baidang::find($id);
        $Baidang->loai = $request->loai;
        $Baidang->noidung = $request->noidung;
        $Baidang->noimat = $request->noimat;
        $Baidang->ngaymat = $request->ngaymat;
        $Baidang->image = $request->image;
        $Baidang->username = $request->username;
        $Baidang->phone = $request->phone;
        //có ảnh mới dùng khúc này
        if($request->has('image'))
        {
            $fileName ="{$Baidang->id}.jpg";
            $file = $request->file('image');
            $request->file('image')->storeAs('anh',$fileName,'public');
            $Baidang->image = "{$fileName}";
        }
        $Baidang->save();
        return redirect()->route('trang-chu');
    }
    public function ediths($id)
    {
        $Post= User::find($id);
        return view('User.hoso', compact('Post'));
    }
   public function doipass()
   {
    return view('User.doimatkhau');
   }
   public function updatepass(Request $request)
   {
     $pass = User::find(Auth::id());
     if(Hash::check($request->password,$pass['password']))
     {
        User::find(Auth::id())->update([
            'password'=>Hash::make($request->new_pass),
        ]);
        return redirect()->route('dang-nhap');
     }
     return redirect()->route('doi-mat-khau');
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
