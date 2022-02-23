<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class TeachersDashController extends Controller
{
    //
    public function index(Teacher $teacher)
    {
        $teacher = Teacher::latest()->paginate(10);
        // dd($teacher);
        return view('admin.teacher', compact('teacher'));
    }
    public function destroy(int $id)
    {
        $teacher= Teacher::find($id);
        // dd($teacher);
        $teacher->delete();
        Alert::toast('Teacher\'s Data Removed Successfully!', 'success');
        return back();
    }
    public function update(int $id, Teacher $teach, Request $request)
    {
        $request->validate([
            'name' =>'required|string',
            'email'=>'required|email|string|max:255',
            'phone' =>'required|string',
            'gender' =>'required|string',
            'address' =>'required|string',
            'birth_date' =>'required|string',
        ]);
        $teach = Teacher::find($id);
        $teach->name = $request['name'];
        $teach->email = $request['email'];
        $teach->phone = $request['phone'];
        $teach->address = $request['address'];
        $teach->gender = $request['gender'];
        $teach->birth_date = $request['birth_date'];
        // dd($teach);
        $teach->save();
        Alert::toast('Updated Successfully!', 'success');
        return back();
    }
}
