<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PomodoroController extends Controller
{
    public function index()
    {
        return view('pomodoros.index');
    }

    public function start(Request $request)
    {
        $request->validate([
            'pomodoro' => 'required|integer|min:1'
        ]);

        $pomodoro = $request->input('pomodoro');

        return view('pomodoros.index', compact('pomodoro'));
    }
}
