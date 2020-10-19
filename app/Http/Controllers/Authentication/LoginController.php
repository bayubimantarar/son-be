<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        return view('authentication.login-form', [
            'token' => csrf_token()
        ]);
    }

    /**
     * [login description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function login(Request $request)
    {
        return response()->json($request->all(), 200);
    }
}
