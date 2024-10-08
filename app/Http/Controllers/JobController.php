<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index() {
        $data = Job::all();
        return view('job.index', ['jobs' => $data, 'name' => 'Yahya']);
    }
}
