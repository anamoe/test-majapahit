<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    //
    
    
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = profile::with('User')->get();
    
        return view('index',compact('users'));
    }

    
    public function view_create()
    {
       
        return view('tambah');
    }

    public function create_profil(Request $request){

		$request->validate([
    		'email' => 'required',
    		'username' => 'required',
    		'password' => 'required',
    		'alamat_ktp'=> 'required',
        	'pekerjaan'=> 'required',
        	'nama_lengkap'=> 'required',
        	'pendidikan_terakhir'=> 'required',
        	'nama_lengkap'=> 'required',
        	'nomor_telepon'=> 'required',

		]);
     
       
         $i = User::create([
        	'email' => $request->email,
    		'name' => $request->username,
    		'password' => bcrypt($request->password)])
    		->id;

        profile::create([
         		'alamat_ktp'=>$request->email,
        		'pekerjaan'=>$request->pekerjaan,
        		'nama_lengkap'=>$request->nama_lengkap,
        		'pendidikan_terakhir'=>$request->pendidikan_terakhir,
        		'nama_lengkap'=>$request->nama_lengkap,
        		'nomor_telepon'=>$request->nomor_telepon,
        		'user_id'=>$i,
        ]);

        return redirect('/')->with('succes', 'Tambah Profil Sukses');   

    }

    public function edit_profile($id){
        $users = profile::where('id',$id)->with('User')->first();
        return view('edit',compact('users'));



    }

    public function update_profile($id ,Request $request){
        
        $request->validate([
    		'email' => 'required',
    		'username' => 'required',
    		'alamat_ktp'=> 'required',
        	'pekerjaan'=> 'required',
        	'nama_lengkap'=> 'required',
        	'pendidikan_terakhir'=> 'required',
        	'nama_lengkap'=> 'required',
        	'nomor_telepon'=> 'required',

		]);
     
       
        User::where('id',$id)->update([
        	'email' => $request->email,
    		'name' => $request->username,
    		])
    		;

        profile::where('user_id',$id)->update([
         		'alamat_ktp'=>$request->email,
        		'pekerjaan'=>$request->pekerjaan,
        		'nama_lengkap'=>$request->nama_lengkap,
        		'pendidikan_terakhir'=>$request->pendidikan_terakhir,
        		'nama_lengkap'=>$request->nama_lengkap,
        		'nomor_telepon'=>$request->nomor_telepon,
        ]);
	
        
        return redirect('/')->with('succes', 'Update Porfil Sukses');

    }

    public function delete_profile($id){

        profile::where('user_id',$id)->delete();
        User::where('id',$id)->delete();
        return redirect('/')->with('succes', 'Hapus Porfil Sukses');
    }

}
