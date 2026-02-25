<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

public function index()
    {

$todos = Todo::orderBy('created_at', 'desc')->get();


return view('index', ['todos' => $todos]);
    }
}
