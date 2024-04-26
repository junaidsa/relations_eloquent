<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function get($id){

    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::with('profile')->get();
        // $user = User::with('profile')->find(id);
        $user = User::withWherehas('profile',function($query){
            $query->where('id','!=',1);
        })->get();
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //      // One TO Many relationship
    // // $prfile = User::withWherehas('job')->find(1);
    // // $prfile = User::has('job')->with('job')->get();
    // // $prfile = User::has('job')->with('job')->get();
    // // $prfile = User::doesntHave('job')->get();
    // $prfile = User::has('job','>=',20)->get();
    // return $prfile;
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
 // 
        public function create()
    {
        // Add a role to exesting user
        $user = User::find(4);
        if (!$user) {
            # code...
            return 'User not found';
        }
        $role = [1,5];
        $user->roles()->attach($role);
        
        // $onetoMany = User::with('roles')->get();
    // return $onetoMany;
    }
}
