<?php

namespace App\Http\Controllers;

use App\SanPham;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function show()
    {
        $slide = Slide::all();
        return view('Admin.Slide.list-Slide', ['slide'=>$slide]);
    }

    public function delete($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return redirect()->route('list-Slide');
    }
}
