<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\LoaiSanPham;
use App\Member;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function getLogin()
    {
        //$LSP = LoaiSanPham::all();
        return view("Front.login");        
    }

    public function postLogin(Request $request)
    {
        $data = ['username' => $request['username'], 'password' => $request['password']];
        // echo $data['username'] . " " . $data['password'];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('home');
        }else {
            if (Auth::guard('member')->attempt($data)) {
                return redirect()->route('mainPage');
            }
            return redirect()->route('login');
        }
    }
    
    public function logout(Request $request)
    {
       Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

       return redirect()->route('login');
    }

    public function postSignUp(Request $request)
    {   
        $this->validate($request, 
        [
            'username' => 'unique:admin,username|unique:member,username'
        ], 
        [
            'username.unique' => 'Tên đăng nhập đã tồn tại, vui lòng nhập tên khác.'
        ]);

        $member = new Member();

        $member->username = $request->username;
        $member->HoTen = $request->hoten;
        $member->NgaySinh = Carbon::parse($request->ns);
        $member->SDT = $request->sdt;
        $member->DiaChi = $request->diachi;
        $member->password = bcrypt($request->pw);
        $member->id_role = 2;

        $member->save();
        return redirect()->route('mainPage')->with('alert', 'Thanh cong');
        //Alert: chỉ số của session, có thể là số hoặc chuỗi
        //Thanh cong: giá trị của session, có thể là mảng, chuỗi, số, đối tượng
    }
}
