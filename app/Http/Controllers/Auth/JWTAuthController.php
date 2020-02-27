<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidCredentialException;
use App\Http\Requests\ValidateAuthentication;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JWTAuthController extends Controller
{
    /**
     * JWTAuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(ValidateAuthentication $request)
    {
        $validatedCredentials = $request->validated();

        if (!$token = auth()->attempt($validatedCredentials)) {
            return $this->sendFailedResponse();
        }

        return $this->sendSuccessResponse($token, auth()->user());
    }

    /**
     * Log the current authenticated user out (Invalidating the token).
     *
     * @return JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Send success login response.
     *
     * @param $token
     * @param User|Authenticatable $user
     * @return JsonResponse
     */
    public function sendSuccessResponse($token, User $user)
    {
        return response()->json([
            'access_token' => $token,
            'user' => $user->output()
        ], 200);
    }

    /**
     * Send failed login response.
     *
     * @throws InvalidCredentialException
     */
    public function sendFailedResponse()
    {
        throw new InvalidCredentialException();
    }
}
