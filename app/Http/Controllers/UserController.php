<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
	public function uploadavatar(Request $request)
	{
		if($request->hasFile('image'))
		{
			$filename = $request->image->getClientOriginalName();
			$request->image->storeAs('images',$filename,'public');
			$request->session()->flash('message','image uploaded.');
			User::find(1)->update(['avatar' => $filename]);
			
		}
		$request->session()->flash('error','upload image.');
		//dd($request->file('image'));
		//$request->image->store('images','public');
		return redirect()->back();
	}

    public function index()
    {
    	/*$user = new User();
    	$user -> name = 'kaushik';
    	$user -> email = 'asds@asds.asd';
    	$user -> password = bcrypt('password');
    	$user -> save();*/

    	/*$user = User::all();
    	return $user;*/

    	User::where('id',4)->update(['name'=>'kau']);

    	//User::where('id' ,3)->delete();

    	//return('i am inside user controller');
    	/*DB::insert('insert into users (name,email,password) values(?,?,?)',[
    		'asd','asd@asd.asd','password'
    	]);*/
    	/*DB::update('update users set name = ? where id = 1',['zzz']);

    	$users = DB::select('select * from users');
    	return $users;*/
    	//return view('home');
    }
}
