<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\TokenRequest;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    //
    function getApiToken(TokenRequest $request) 
    {
        $user = User::where('user_email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->user_password)) {
            throw ValidationException::withMessages([
                'message' => 'The provided credentials are incorrect.',
            ]);
        }

        return response()->json([
            'message' => 'Success',
            'token' => $user->createToken($request->device_name, [''])->plainTextToken
        ]);
    }

    function registerUser(RegisterRequest $request)
    {
        if ($request->user()->user_email != 'root@root.com') {
            throw ValidationException::withMessages([
                'message' => 'The token being used does not belong to any application!',
            ]);
        }

        try {
            $user = User::create([
                'user_name' => $request->name,
                'user_email' => $request->email,
                'user_password' => Hash::make($request->password),
                'user_type_id' => 3
            ]);
    
            return response()->json([
                'message' => 'Success',
                'token' => $user->createToken($request->device_name)->plainTextToken
            ]);
        }catch (QueryException $e) {
            return response()->json([
                 'message' => 'Email is being used by another user.',
            ], 400);
        }
    }

    function logout(Request $request) {
        $request->user()->tokens()->delete();
    }

    
}
