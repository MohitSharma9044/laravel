<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function auth(Request $request)
    {
        $request->validate([
            'email_username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email_username)->orWhere('username', $request->email_username)->first();
        if ($admin) {
            if (password_verify($request->password, $admin->password)) {
                $request->session()->put('admin', $admin);
                return redirect('admin/dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        } else {
            return back()->with('fail', 'No account found for this email or username');
        }
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }



}
