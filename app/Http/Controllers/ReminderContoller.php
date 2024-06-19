<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;


class ReminderContoller extends Controller
{
    public function index()
    {
        $reminders = Reminder::all();
        return view('reminders.index', compact(['reminders']));
    }

    public function create()
    {
        return view('reminders.create');
    }

    public function store(Request $request)
    {
        Reminder::create($request->all());
        return redirect('/reminders');
    }

    public function edit($id)
    {
        $Reminder = Reminder::find($id);
        return view('reminders.edit', compact(['Reminder']));
    }

    public function update(Request $request, $id)
    {
        $Reminder = Reminder::find($id);
        $Reminder->update($request->all());
        return redirect('/reminders');
    }

    public function destroy($id)
    {
        $Reminder = Reminder::find($id);
        $Reminder->delete();
        return redirect('/reminders');
    }
}
