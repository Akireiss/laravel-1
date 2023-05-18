<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;
use Illuminate\Hashing\BcryptHasher;

class UserController extends Controller
{
    public function index()
    {
        return "Akira";
    }

    public function login()
    {
        if (View::exists('user.login')) {
            return view('user.login');
        } else {
            return abort('404');
        }
    }

    public function process(Request $request)
    {
     $validated = $request->validate([
        "email" => ['required', 'email'],
        'password' => 'required'
    ]);
    if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/report')->with('message', 'Welcome');

        }
        return back()->withErrors(['email' => 'Login Failed'])->onlyInput('email');

    }

    public function register()
    {
        return view('user.register');

    }

    public function logout(Request $request)
    { auth()->logout();
//invalidaate meam: destroy
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout Success');

    }

    public function store(Request $request)
    {
        //this is where u validate the content of the form
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            //the 'users' are the table name and the 'email' is the row name
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        //hashing the password here| u can also use bcrypt and Hash
        $validated['password'] = bcrypt($validated['password']);
        //dito na gagawin
        $user = User::create($validated);
        //dito naman para ma login  mo ginawa mong acccoount sa registration area
        auth()->login($user);
    }





    //pag pasa ng basic data sa form ng array sa controlle or view
    public function show($id)
    {
        // $data = array(
        //     $id => "id",
        //     "name" => "Akira",
        //     "age" => 21,
        //     "address" => "La Union"
        // );
        //to pass the view from the data: insert here the data
        //one way to call: by using array
        // return view('user', ['data' => $data]);

        //other way to call: when calling from the data base
        // return view('user', $data);

        //other way to view data
        $data = ["data" => "sample data from database"];
        return view('user')
            ->with('sample', $data)
            ->with('name', 'aki')
            ->with('email', 'aki@gmail.com');
    }
}
