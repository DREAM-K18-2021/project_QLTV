<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use App\Models\Theloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TheloaiController extends Controller
{
    function index()
    {
        $Tbl_theloai = Theloai::orderby('id', 'desc')->get();

        return view('layout/theloai', compact('Tbl_theloai'));
    }

    function detailAdd()
    {
        return view('add/themtheloai');
    }

    function add(Request $request)
    {
        $Tbl_theloai = new Theloai;
        $Tbl_theloai->theloai = $request->theloai;
        $request->validate([
            'theloai'=>'required'
        ],
        [
            'theloai.required'=>'Nhập thể loai'
        ]);

        $Tbl_theloai->save();
        return redirect('/layout/theloai')->with('thongbao', 'Thêm thể loại thành công');
    }

    function detailEdit( $id)
    {
        $Tbl_edittheloai = Theloai::find($id);

//        print_r($Tbl_edittheloai);
        return view('edit.chinhsuatheloai', compact('Tbl_edittheloai'));
    }

    function edit(Request $request, $id)
    {


        $Tbl_edittheloai = Theloai::find($id);
        $Tbl_edittheloai->theloai = $request->theloai;

        $Tbl_edittheloai->save();

        return redirect('layout/theloai')->with('thongbao', 'chỉnh sửa thành công');
    }

    function delete($id)
    {
        $Tbl_deletetheloai = Theloai::find($id);
        $Tbl_deletetheloai->delete();

        return redirect('layout/theloai')->with('success', 'đã xóa');
    }

}
