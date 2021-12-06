<?php

namespace App\Http\Controllers;

use App\Models\Docgia;
use App\Models\Sach;
use App\Models\Theloai;
use Illuminate\Http\Request;

class DocgiaController extends Controller
{
    function index()
    {
        $Tbl_docgia = new Docgia;
        $Tbl_docgia = $Tbl_docgia->orderby('id', 'desc')->get();

        return view('layout/docgia', compact('Tbl_docgia'));
    }

    function detailAdd()
    {
        return view('add/themdocgia');
    }

    function add(Request $request)
    {
        $Tbl_docgia = new Docgia;


        $Tbl_docgia->tendocgia = $request->tendocgia;
        $Tbl_docgia->madocgia = $request->madocgia;
        $Tbl_docgia->lop = $request->lop;
        $Tbl_docgia->sodienthoai = $request->sodienthoai;
        $Tbl_docgia->sachdamuon = $request->sachdamuon;
        $request->validate([
            'tendocgia'=>'required',
            'madocgia'=>'required',
            'lop'=>'required',
            'sodienthoai'=>'required',
        ],[
            'tendocgia.required'=>'Nhập tên độc giả',
            'madocgia.required'=>'Nhập mã độc giả',
            'lop.required'=>'Nhập lớp',
            'sodienthoai.required'=>'Nhập sđt',
        ]);

        $Tbl_docgia->save();

        return redirect('/layout/docgia')->with('thongbao', 'Thêm độc giả thành công');
    }

    function editDocgia($id)
    {
        $Tbl_editdocgia = Docgia::find($id);
//        print_r($Tbl_editdocgia);
        return view('edit.chinhsuadocgia', compact('Tbl_editdocgia'));
    }

    function edit(Request $request, $id)
    {


        $Tbl_editdocgia = Docgia::find($id);

        $Tbl_editdocgia->tendocgia = $request->tendocgia;
        $Tbl_editdocgia->madocgia = $request->madocgia;
        $Tbl_editdocgia->lop = $request->lop;
        $Tbl_editdocgia->sodienthoai = $request->sodienthoai;
        $request->validate([
            'tendocgia'=>'required',
            'madocgia'=>'required',
            'lop'=>'required',
            'sodienthoai'=>'required',
        ],[
            'tendocgia.required'=>'Nhập tên độc giả',
            'madocgia.required'=>'Nhập mã độc giả',
            'lop.required'=>'Nhập lớp',
            'sodienthoai.required'=>'Nhập sđt',
        ]);

        $Tbl_editdocgia->save();

        return redirect('layout/docgia')->with('thongbao', 'chỉnh sửa thành công');
    }

    function delete(Request $request, $id)
    {
        $Tbl_docgia = Docgia::find($id);
        $Tbl_docgia->delete();

        return redirect('layout/docgia')->with('thongbao', 'Đã xóa thành công');
    }
}
