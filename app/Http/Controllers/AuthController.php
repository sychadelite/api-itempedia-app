<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function IndexUsers() {
        $users = DB::table('users')->get();

        return response()->json([
            'status' => true,
            'message' => 'got all of the available users',
            'data' => $users
        ]);
    }

    public function IndexAuthUser() {
        $auth_user = DB::table('users')->where('id', auth()->user()->id)->first();

        return response()->json([
            'status' => true,
            'message' => 'got your authenticated information',
            'data' => $auth_user
        ]);
    }
}
