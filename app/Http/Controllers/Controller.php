<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\UserController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
{
    $prospectController = new ProspectController();
    $prospectCount = $prospectController->countProspects();
    $prospectCountok = $prospectController->countProspectsok();
    $prospectCountnook = $prospectController->countProspectsnook();
    $userController = new UserController();
    $userCount = $userController->countUsers();
    return view('welcome', compact('prospectCount','userCount','prospectCountok','prospectCountnook'));
}
}
