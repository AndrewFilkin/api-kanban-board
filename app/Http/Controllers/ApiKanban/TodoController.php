<?php

namespace App\Http\Controllers\ApiKanban;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getTodo() {

        $title = Todo::all();
        return response()->json([
            'name' => $title,
            'title' => 'title',
        ]);
    }
}
