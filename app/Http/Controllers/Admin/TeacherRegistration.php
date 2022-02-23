<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherRegistration extends Controller
{
    //
    public function index()
    {
        return view('admin.teacherRegister');
    }
    public function store(Teacher $teacher,Request $request)
    {
        $request->validate([
            'name' =>'required|string',
            'email'=>'required|email|string|max:255',
            'address'=>'required|string|max:255',
            'phone'=>'required|string|max:255',
            'gender' =>'required|string',
            'birth_date'=>'required|string|max:255',
            'password' => 'required|min:6',
        ]);
        $teacher = Teacher::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'address' =>$request->input('address'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'birth_date' => $request->input('birth_date'),
            'password' => bcrypt($request->input('password')),
        ]);
        Alert::toast('New Teacher Added!', 'success');
        return redirect('/admin/teachers/data');
    }
}
