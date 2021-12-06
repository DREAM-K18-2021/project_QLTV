<?php

namespace App\Http\Controllers;

use App\Models\Sach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;
use App\Models\Theloai;

class SachController extends Controller
{
    function index()
    {
//        $Tbl_sach = new Sach();
        $Tbl_sach = Sach::orderBy('id', 'desc')->get();
        $Tbl_theloai = theloai::all();
        return view('layout/index', compact('Tbl_sach', 'Tbl_theloai'));
    }

    function detailAddSach()
    {
        $Tbl_theloai = theloai::all();
        return view('add.themsach', compact('Tbl_theloai'));
    }

    function detailEdit($id)
    {
        $Tbl_editsach = Sach::find($id);
//        $Tbl_editsach = Sach::where('id',$id)->leftJoin('Theloai','theloai','=','id');
        $Tbl_theloai = Theloai::all();
//        print_r($Tbl_editsach);
        return view('edit.chinhsuasach', compact('Tbl_editsach', 'Tbl_theloai'));
    }

    function add(Request $request)
    {
        $Tbl_sach = new Sach;
        $Tbl_sach->tensach = $request->tensach;
        $Tbl_sach->theloai = $request->theloai;
        $Tbl_sach->namxuatban = $request->namxuatban;
        $Tbl_sach->tacgia = $request->tacgia;
        $Tbl_sach->masach = $request->masach;
        $Tbl_sach->trangthai = $request->trangthai;

        $request->validate([
            'tensach' => 'required|min:4|unique:sach',
            'theloai'=> 'required',
            'namxuatban'=>'required',
            'tacgia'=>'required',
            'masach'=>'required',
        ],[
            'tensach.required'=>'Nhập tên sách',
            'tensach.min'=>'tối thiểu 4 kí tự',
            'tensach.unique'=>'trùng tên',
            'theloai.required'=>'Chọn thể loại',
            'namxuatban.required'=>'Nhập năm xuất bản',
            'tacgia.required'=>'Nhập tên tác giả',
            'masach.required' =>'Nhập mã sách',
        ]);
        $Tbl_sach->save();
        return redirect('/layout/index')->with('thongbao', 'Thêm sách thành công');
//        print_r($request->theloai);

    }


    function edit(Request $request, $id)
    {
//        $validated = $request->validate([
//            'tensach' => 'required|unique:posts|max:255',
////            'body' => 'required',
//        ]);


        $Tbl_sach = Sach::find($id);

        $Tbl_sach->tensach = $request->tensach;
        $Tbl_sach->theloai = $request->theloai;
        $Tbl_sach->namxuatban = $request->namxuatban;
        $Tbl_sach->tacgia = $request->tacgia;
        $Tbl_sach->masach = $request->masach;
        $Tbl_sach->trangthai = $request->trangthai;
        $request->validate([
           'trangthai'=>'required'
        ],[
            'trangthai.required'=>'chọn trạng thái'
        ]);

        $Tbl_sach->save();

        return redirect('layout/index')->with('thongbao', 'chỉnh sửa thành công');
    }

    function delete($id)
    {
        $Tbl_sach = Sach::find($id);
        $Tbl_sach->delete();

        return redirect('layout/index')->with('thongbao', 'đã xóa');
    }
}
