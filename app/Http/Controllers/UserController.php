<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('show', $user);

        return view('frontend.pages.profile')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User                $user
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($user->email === $request->email && $user->reg_num === $request->registrationNumber) {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
            ]);
        } elseif ($user->email === $request->email && $user->reg_num !== $request->registrationNumber) {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'registrationNumber' => ['required', 'string', 'max:255', 'unique:users,reg_num'],
            ]);
        } elseif ($user->reg_num === $request->registrationNumber && $user->email !== $request->email) {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
        } else {
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'registrationNumber' => ['required', 'string', 'max:255', 'unique:users,reg_num'],
            ]);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->reg_num = $request->registrationNumber;
        $user->save();
        session()->flash('success', 'Profile has been successfully updated');

        return redirect()->back();
    }

    public function changePassword(Request $request, User $user)
    {
        $this->validate($request, [
            'oldPassword' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!Hash::check($request->oldPassword, $user->password)) {
            session()->flash('error', 'The old password is not correct');

            return redirect()->back();
        }
        $user->password = bcrypt($request->password);
        $user->save();
        session()->flash('success', 'Password has been changed successfully');

        return redirect()->back();
    }

    public function getChangePasswordPage(User $user)
    {
        $this->authorize('show', $user);

        return view('frontend.pages.password')->withUser($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
    }

    protected function validator(array $data)
    {
        if ($data['email'] === null) {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'registrationNumber' => ['required', 'string', 'max:255', 'unique:users,reg_num'],
                'type' => ['required', 'numeric'],
            ]);
        }

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'registrationNumber' => ['required', 'string', 'max:255', 'unique:users,reg_num'],
            'type' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
}
