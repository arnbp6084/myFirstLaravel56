<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepository as UserInterface;

class UserController extends Controller
{
    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->getAll();
        print 'index result---<pre>';
        print_r($users->toArray());
        print '</pre>';
        //return view('users.index',['users']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        print 'show result---<pre>';
        print_r($user->toArray());
        print '</pre>';
        //return view('users.show',['user']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if($this->user->delete($id)){
        	echo 'deleted.';
        }else{
        	echo 'unable to delete.';
        }
        //return redirect()->route('users');
    }
}
