<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Menampilkan halaman edit profil awal
     */
    public function welcome()
    {
        if(Auth::user()->userType() == 'ikhwan') {
            return view('user.welcome_ikhwan');
        } else if(Auth::user()->userType() == 'akhwat') {
            return view('user.welcome_akhwat');
        }
    }

    /**
     * Menampilkan halaman edit profil awal
     */
    public function registrationSuccess()
    {
        if(!Auth::user()->verified) {
            return view('auth.registration-success');
        }
        return redirect('dashboard');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->userType() == 'ikhwan') {
            $user = User::where('users.id', Auth::user()->id)->join('user_ikhwans', 'users.id', '=', 'user_ikhwans.user_id')->get()[0];
            return view('user.detaildataikhwan')->with('user', $user);

        } else if(Auth::user()->userType() == 'akhwat') {
            $user = User::where('users.id', Auth::user()->id)->join('user_akhwats', 'users.id', '=', 'user_akhwats.user_id')->get()[0];
            return view('user.detaildataakhwat')->with('user', $user);
        }
    }

    /**
     * Menampilkan halaman edit profil
     */
    public function editProfile()
    {
        if(Auth::user()->userType() == 'ikhwan') {
            $user = User::where('users.id', Auth::user()->id)->join('user_ikhwans', 'users.id', '=', 'user_ikhwans.user_id')->get()[0];
            return view('user.editdataikhwan')->with('user', $user);

        } else if(Auth::user()->userType() == 'akhwat') {
            $user = User::where('users.id', Auth::user()->id)->join('user_akhwats', 'users.id', '=', 'user_akhwats.user_id')->get()[0];
            return view('user.editdataakhwat')->with('user', $user);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
