<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'name' => 'required',
            'password' => 'required|min:5|confirmed',
            'level_id' => 'required|'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = UserModel::create([
            'username' => $request->username,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id
        ]);

        if ($user) {
            return response()->json([
                'status' => true,
                'user' => $user
            ], 201);
        }

        return response()->json([
            'status' => false,
        ], 409);
    }
}
