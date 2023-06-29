<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function countUsers()
    {
        return User::count();
    }
    
    public function listeusers()
    { $liste_users=User::all();
        return view('Listeusers',compact("liste_users"));
    }
   
}
