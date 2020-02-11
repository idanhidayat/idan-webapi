<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
     public function teacher()
    {
    	$data = ['teacher' => Teacher::all() ];

    	return $data;
    }
}
