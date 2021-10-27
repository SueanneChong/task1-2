<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    //
    public function insertform()
    {
        return view('stud_create');
    }
    public function insert(Request $request)
    {
        $name = $request->input('name');
        $phoneNum = $request->input('phoneNum');
        $email = $request->input('email');
        $msg = $request->input('msg');
        DB::table('contactus')->insert(['name' => $name, 'email' => $email, 'phoneNum' => $phoneNum, 'msg' => $msg]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/view-records">Click Here</a> to view record.';
    }
    
}
