<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Facades\Datatables;

class AjaxdataController extends Controller
{
    public function index()
    {
        return view('my.ajaxdata');
    }

    public function getdata()
    {
//        $user = DB::select('name','age','dob','gender','email','mobileNumber','address','city','pinCode','cityState','fileName');
//        return Datatables::of($user)->make(true);
//
//        Route::get('user-data', function() {


            $model = User::query();

            return Datatables::eloquent($model)
                ->filter(function ($query) {
                    if (request()->has('name')) {
                        $query->where('name', 'like', "%{request('name')}%");
                    }

//                    if (request()->has('email')) {
//                        $query->where('email', 'like', "%{request('email')}%");
//                    }
                })
                ->make(true);
//        });
    }
}
