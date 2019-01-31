<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use Datatables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function signup(){

//        return 122;
        return view('my.register');



    }

    public function postSignup(Request $request){

//    return $request->all();

        $user = new User();


        $v = Validator::make($request->all(), [
            'name' => 'required',
            'age' => 'required',
            'dob' => 'nullable|date',
            'gender' => 'required',
            'email' => 'required|email',
            'mobileNumber' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pinCode' => 'required',
            'cityState' => 'required',
            'fileName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required',
        ]);

        if ($v->fails())
        {

            return redirect()->back()->withInput()->withErrors($v->errors());
        }


//        $user->create($request->all());


        $user->name = Input::get('name');
        $user->age = Input::get('age');
        $user->dob = Input::get('dob');
        $user->gender = Input::get('gender');
        $user->email = Input::get('email');
        $user->mobileNumber = Input::get('mobileNumber');
        $user->address = Input::get('address');
        $user->city = Input::get('city');
        $user->pinCode = Input::get('pinCode');
        $user->cityState = Input::get('cityState');

        $path = $request->file('fileName')->store('uploads');
        $user->filename=$path;

        $user->password = Hash::make(Input::get('password'));

        $user->save();

        $post = new Post();
        $post->users_id = $user->id;
        $post->post_title = Input::get('post_title');
        $post->post_details = Input::get('post_details');
        $post->save();


        $comment = new Comment();
        $comment->users_id = $user->id;
        $comment->comment_title = Input::get('comment_title');
        $comment->comment_details = Input::get('comment_details');
        $comment->save();

        return Redirect::back();

    }

    public function  displayRegistration(){

        $user=User::all();
//        $post= Post::all();
//        $comment= Comment::all();
//        print_r($user);exit;
        return view('my/display',compact('user'));

}

    public function editRegistration($id){

        $user = User::find($id);
        return view('my/edit',compact('user'));
//        return view('my/edit');
    }


    public function updateRegistration(Request $request,$id){

        $user = User::find($id);

        $v = Validator::make($request->all(), [
            'name' => 'required',
            'age' => 'required',
            'dob' => 'nullable|date',
            'gender' => 'required',
            'email' => 'required|email',
            'mobileNumber' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pinCode' => 'required',
            'cityState' => 'required',
            'fileName' => 'required',
        ]);

        if ($v->fails())
        {

            return redirect()->back()->withErrors($v->errors());
        }


        $user->update($request->all());

//        $user->name = Input::get('name');
//        $user->age = Input::get('age');
//        $user->dob = Input::get('dob');
//        $user->gender = Input::get('gender');
//        $user->email = Input::get('email');
//        $user->mobileNumber = Input::get('mobileNumber');
//        $user->address = Input::get('address');
//        $user->city = Input::get('city');
//        $user->pinCode = Input::get('pinCode');
//        $user->cityState = Input::get('cityState');
//        $user->save();

        return redirect()->back();

    }


    public function deleteRegistration($id)
    {
        $user = User::find($id);
        $user->posts()->delete();
        $user->comments()->delete();
        $user->delete();

        return redirect()->back()->withErrors('Successfully deleted!');
//        return view('my/delete');
    }


//    public function anyData(Request $request)
//    {
//        $user = User::select('name','age','dob','gender','email','mobileNumber','address','city','pinCode','cityState','fileName');
//
//
//        return Datatables::of($user)
//            ->filterColumn('user_id', function($query, $keyword) {
//                $query->whereRaw("CONCAT(users.id,'-',users.id) like ?", ["%{$keyword}%"]);
//            })
//            ->make(true);
//
//        return Datatables::of(User::query())->make(true);
//
//
//    }
}
