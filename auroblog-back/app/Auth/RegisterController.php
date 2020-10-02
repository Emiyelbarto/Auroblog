<?php

namespace App\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $this->guard()->login($user);
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }
    protected function registered(Request $request, $user)
    {
        $user->generateToken();

        return response()->json(['data' => $user->toArray()], 201);
    }
}
