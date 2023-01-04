<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function signUp(request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required|min:8',
            'phone' =>'|min:13|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => $validator->messages(),
            ], 400);
        }

        $user = new User;
        $user->name = $request->name;
        $user->password = app('hash')->make($request->password);
        $user->phone = $request->phone;
        $user->role_id =1;
        $user->status_id =1;
        $user->save();

        //$request->request->add(['status_id' => 1]);
        $credentials = $request->only(['phone', 'password']);
        //$token = JWTAuth::attempt($credentials);
        $token = auth()->attempt($credentials);
        return response()->json([
            'success' => true,
            'token' => $token,
        ], 200);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data' => $validator->messages(),
            ], 400);
        }
        $request->request->add(['status_id' => 1]);
        $credentials = $request->only(['phone', 'password','status_id']);
        try {
            if(!$token = auth()->attempt($credentials))
            {
                throw new Exception('invalid_credentials');
            }
            return response()->json([
                'success' => true,
                'token' => $token,
            ],200);
            }catch(Exception $e)
            {
                return response()->json([
                    'success' => false,
                    'data' => $e->getMessage(),
                ]);
            }
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        //return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            //'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
