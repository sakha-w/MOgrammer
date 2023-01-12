<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function create(){
        return view ('frontend.user.registrasi');
        
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
        $user = User::findorFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request->password),
            'is_admin' => $request->is_admin,
        ]);
        return redirect()
            ->route('home')
            ->with('success', 'User updated successfully.');

        return redirect()->route('user');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('userEdit', compact('user'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required'],
            'is_admin' => ['required', 2],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin,
        ]);
        return redirect()
            ->route('home')
            ->with('success', 'User created successfully.');
    }
    public function getAllUsers() {
        $Users = DB::table('Users')
        ->select(
            'id as id',
            'name as name',
            'email as email',
            'is_admin as is_admin'
        )
        ->orderBy('name', 'asc')
        ->get();

        return DataTables::of($Users)
        ->addColumn('action', function ($user){
            $html = '
            <a href="' . route('userView', $user->id) .'" data-rowid="" class="btn btn-xs btn-light" data-toggle="tooltip" data-placement="top"
                data-container="body" title="Edit User" onclick="infoUser('."'".$user->id."'".')">
            <i class="fa fa-edit"></i>
            ';
            return $html;
        })
        ->make(true);
    }

    public function show(User $user){
        return view ('frontend.user.infoPengguna', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorFail($id);
        $user->delete();
        return redirect()->route('home')
        ->with('success','User deleted successfully');
    }
}