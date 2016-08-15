<?php

namespace App\Http\Controllers;

use Illuminate\Database\Elouquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Entities\NewTable;

class NewsController extends Controller
{
    public function index(Request $request, NewTable $newTable)
    {
        $news = $newTable->all();

        return view('test.index', compact('news'));
    }
}
