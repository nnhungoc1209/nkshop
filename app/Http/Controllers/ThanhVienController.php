<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class ThanhVienController extends Controller
{
    public function show()
    {
        $ThanhVien = Member::all();
        return view('Admin.ThanhVien.list-ThanhVien', ['tv'=>$ThanhVien]);
    }
}
