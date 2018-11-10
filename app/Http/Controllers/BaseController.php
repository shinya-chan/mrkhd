<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $info = User::find(1)->with(['services', 'facts', 'clients', 'resumes', 'skills'])->get(); // TODO this should not be like this !;
        $info = $info[0];
//        return view('layouts.app', compact('info'));
        return view('index',compact('info'));
//        return $info;
    }

    public function insert(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:20',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        return response()->json();

    }
}
