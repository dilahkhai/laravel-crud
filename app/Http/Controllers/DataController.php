<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Care;

class DataController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $care = Care::where('product', 'LIKE', "%$request->search%")->paginate(10);
            return view('welcome', [
                'data'=>$care
            ]);
        }

        $care = Care::all();
        return view('welcome', [
            'data'=>$care
        ]);
    }
}
