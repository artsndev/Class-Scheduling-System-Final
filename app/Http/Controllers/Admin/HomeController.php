<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    //
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        return view('admin.home', ['users'=> User::paginate(2)]);
    }
    public function destroy(int $id)
    {
        $user= User::find($id);
        //dd($user);
        $user->delete();
        return back();
    }
    public function update(int $id,User $user,Request $request,)
    {
        $request->validate([
            'name' =>'required|string',
            'email'=>'required|email|string|max:255',
            'phone' =>'required|string',
            'gender' =>'required|string',
            'address' =>'required|string',
            'username' =>'required|string',
            'birth_date' =>'required|string',
        ]);
        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->username = $request['username'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        $user->gender = $request['gender'];
        $user->birth_date = $request['birth_date'];
        $user->save();
        // dd($user);
        Alert::toast('Updated Successfully!', 'success');
        return back();
    }
}
