<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudViewController extends Controller
{
    //
    public function index()
    {
        $users = DB::select('select * from contactus');
        return view('stud_view', ['users' => $users]);
    }
    public function delete(Request $request)
    {
        $name = $request->get('name');
        DB::table('contactus')->where('name', $name)->delete();
        echo "Record deleteded successfully.<br/>";
        echo '<a href = "/view-records">Click Here</a> to go back.';
    }
    public function updateform(Request $request){
        $name = $request->get('name');
        $users = DB::select("select * from contactus where name='$name'");
        return view('stud_update', ['users' => $users]);
    }
    public function update(Request $request){
        $name = $request->get('name');
        $phoneNum = $request->input('phoneNum');
        $email = $request->input('email');
        $msg = $request->input('msg');
        DB::update("update contactus set email = '$email', phoneNum = '$phoneNum', msg = '$msg' where name = '$name'");
        // DB::table('contactus')->where('name', $name)->update(['email' => $email, 'phoneNum' => $phoneNum, 'msg' => $msg]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/view-records">Click Here</a> to view records.';
    }
}
