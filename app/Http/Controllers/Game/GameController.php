<?php

namespace App\Http\Controllers\Game;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $viewData['user'] = $user;
        return view('game.math')->with('data', $viewData);
    }
    public function math(Request $request)
    {
        $user = Auth::user();
        $point = $request['correct'];
        $oldPoint = $user->point;

        $newPoint = $oldPoint + $point;

        $user->point = $newPoint;
        $user->save();

        return back();
    }
}
