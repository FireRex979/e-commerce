<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('authUser')->except('logout');
    }*/

    public function login(Request $request){
        $dataUser = User::where('email',$request->email)->first();
        if($dataUser != NULL){
            if(Hash::check($request->password, $dataUser->password)){
                //Login Admin Success
                Auth::guard('user')->LoginUsingId($dataUser->id);
                return redirect('/userHome');
            }else{
                return redirect('/userLogin')->with('alert', 'Username atau Password salah');
            }
        }else{
            return redirect('/userLogin')->with('alert', 'Login Gagal tidak Berhasil');
        }
    }

    public function logout(){
    	if(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
        return redirect('/userHome');
    }

    public function register(Request $request){
    	$messages = [
            'required' => ':attribute Wajib Diisi',
            'max' => ':attribute Harus Diisi maksimal :max karakter',
            'min' => ':attribute Harus Diisi minimum :min karakter',
            'string' => ':attribute Hanya Diisi Huruf dan Angka',
            'confirmed' => ':attribute Konfirmasi Password Salah',
            'unique' => ':attribute Username sudah ada',
            'email' => 'attribute Format Email Salah',
        ];

        $this->validate($request,[
            'email' => 'required|unique:users|max:100|email',
            'name' => 'required|max:100',
            'password' => 'required|min:8|string|confirmed'
        ],$messages);

    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->profile_image = 'image/profile default.jpg';
    	$user->status = 'belum verif';
    	$user->password = Hash::make($request->password);
    	$user->save();

    	return 'berhasil register';
    }
}
