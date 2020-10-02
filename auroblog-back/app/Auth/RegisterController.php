<?php

namespace App\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        // $result = [];
        // $result['error'] = 1;
        // try {
        //     DB::beginTransaction();

        //     $data = $request->all();
        //     $user = Auth::user();
        //     $data['idUsuario'] = $user->usuario->id;


        //     // $path = "Paquetes/banner";
        //     // $file = $this->uploadFile($request->foto, $path);
        //     // if(!empty($file)) {
        //     //     $data->foto = $file;
        //     // }

        //     $result['data'] = User::create($data);

        //     DB::commit();
        //     $result['error'] = 0;
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     dd($e);
        // }

        // return $result;
    }

    public function register(Request $request)
    {
        // $this->validator($request->all())->validate();
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
