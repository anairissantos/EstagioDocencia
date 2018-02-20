<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/*parte de gerenciamento*/
class AdminController extends Controller
{
    /*metodo index*/
    public function index()
    {
        return view('admin.home.index');
    }


}