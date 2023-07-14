<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {

        if ($request->isMethod('get')) {


            return view('admin.auth.login');
        }

        if ($request->isMethod('post')) {

            // dd($request->all());
            $validator = Validator::make($request->all(), [
                'email' => 'email|required',
                'password' => 'required'
            ]);

            if ($validator->fails()) {
                return back()->with('message', 'invalid Credentials');
            }
            if (Auth::guard('owner')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect(route('admin.dashboard'));
            } else {
                return back()->with('message', 'invalid Credentials');
            }
        }
    }
}
