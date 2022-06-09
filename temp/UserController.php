<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer as ModelsCustomer;

use DB;
use app\Http\Controllers;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $user = ModelsCustomer::all();
        
        return view('pages/backoffice', [
            'user'=>$user,
            'title' => 'hamodos'
        ]);
    }

    public function insertForm(){
        return view('pages/backoffice');
    }

    public function insert(Request $request){
        $cartId = $request->input('cartId');
        $empty = $request->input('empty');
        $data=array('cartId'=>$cartId,"empty"=>$empty);
        DB::table('cart')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
