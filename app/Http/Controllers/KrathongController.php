<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB ;

class KrathongController extends Controller
{
    public function index() {
        // $_data = DB::select('select * from krathong limit 10') ;
        $_data = DB::table('krathong')->orderBy('id', 'desc')
                ->limit(10)
                ->get();
        // return dd($_data) ;
        return view('pages.kt',['_data'=>$_data]);
    }
    public function savekrathong(Request $request) {
        $name = $request->input('name');
        $kt_wish = $request->input('kt_wish');
        $kt_type = $request->input('kt_type');
        $strSQL = "insert into krathong (name,kt_wish,kt_type) values ('".$name."','".$kt_wish."','".$kt_type."') ;" ;
        DB::insert($strSQL);
        return redirect('/');
    }
}
