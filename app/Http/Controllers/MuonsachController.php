<?php

namespace App\Http\Controllers;

use App\Models\Muonsach;
use Illuminate\Http\Request;

class MuonsachController extends Controller
{
    function index()
    {
        return view('layout/muonsach');
    }

    function add(Request $request)
    {
        $Tbl_muonsach = new Muonsach;

        $Tbl_muonsach->tensach = $request->tensach;
        $Tbl_muonsach->masach = $request->masach;
        $Tbl_muonsach->tendocgia = $request->tendocgia;
        $Tbl_muonsach->madocgia = $request->madocgia;
        $Tbl_muonsach->sophieu = $request->sophieu;
        $Tbl_muonsach->ngaymuon = $request->ngaymuon;
        $request->validate([
            'tensach'=>'required',
            'masach'=>'required',
            'tendocgia'=>'required',
            'madocgia'=>'required',
            'sophieu'=>'required',
            'ngaymuon'=>'required',
        ],[
            'tensach.required'=>'Nhập tên sách',
            'masach.required'=>'Nhập mã sách',
            'tendocgia.required'=>'Nhập tên dộc giả',
            'madocgia.required'=>'Nhập mã độc giả',
            'sophieu.required'=>'Nhập số phiếu',
            'ngaymuon.required'=>'Nhập ngày mượn',
        ]);

        $Tbl_muonsach->save();

        return redirect('/layout/sachdamuon')->with('thongbao', "Đã mượn thành công");


    }
}
