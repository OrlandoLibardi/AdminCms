<?php

namespace OrlandoLibardi\OlCms\AdminCms\app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request) {

        return view('viewAdminCms::dashboard');

    }

}