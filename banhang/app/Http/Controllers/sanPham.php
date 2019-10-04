<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class sanPham extends Controller {

    public function show(Request $request) {
        # code...
        $productList = DB::table('sanpham')->paginate(8);
        $index = 1;
        if (isset($request->page)) {
            $index = ($request->page-1)*8+1;
        }
        return view('san_pham')->with([
            'index'       => $index,
            'productList' => $productList
        ]);
    }
}