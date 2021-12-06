<?php

namespace App\Http\Controllers;

use App\Models\Muonsach;
use App\Models\Sachdangmuon;
use Illuminate\Http\Request;

class SachdamuonController extends Controller
{
    function index()
    {
        $Tbl_sachdamuon = new Muonsach;
        $Tbl_sachdamuon = $Tbl_sachdamuon->orderby('id', 'desc')->get();

        return view('layout/sachdamuon', compact('Tbl_sachdamuon'));
    }

    function delete(Request $request, $id)
    {
        $Tbl_sachdamuon = Sachdangmuon::find($id);
        $Tbl_sachdamuon->delete();

        return redirect('layout/sachdamuon')->with('thongbao', 'Đã trả thành công');
    }
}
