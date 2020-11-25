<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
      
      public function login(Request $request){

            $validatedData = $request->validate([
            'email' => 'required ',
            'password' => 'required',
        ]);


        $credential = ['email' => $request->email, 'password' => $request->password, 'status' => 1];

        if (Auth::guard('admin')->attempt($credential)) {
            Session::put('admin', Auth::guard('admin')->user());
            return response()->json([
                'status' => 'SUCCESS',
                'admin' => Auth::guard('admin')->user(),
                'token' => Hash::make($request->password),
                'message' => 'Login successfully'
            ]);
        } else {
            return response()->json([
                'status' => 'FAILD',
                'message' => 'sorry ! invalid login information '
            ]);
        }

      }




       public function logout()
    {

        Auth::guard('admin')->logout();
        session()->forget('admin');
        return response()->json([
            'status' => 'SUCCESS',
            'message' => 'Logout successfully'
        ]);
    }


     public function sessionCheck()
    {


        if (!Session::has('admin')) {
            return response()->json([
                'status' => 'EXPIRED',
                'message' => 'Your session has expired'
            ]);
        } else {
            return response()->json([
                'status' => 'RUNNING',
                'message' => 'your session is running',
                'admin'=>session()->get('admin'),
            ]);
        }
    }



       public function get_admin_list() {
        $admins = Admin::orderby('id', 'desc')->paginate(10);
        return response()->json([
            'admins' => $admins,
            'status' => 'SUCCESS'
        ]);
       }







       

}
