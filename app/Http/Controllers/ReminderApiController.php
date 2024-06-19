<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;

class ReminderApiController extends Controller
{

    public function index()
    {
        $reminders = Reminder::all();
        return response()->json(['message' => 'Success', 'data' => $reminders]);
    }

    public function show($id)
    {
        $Reminder = Reminder::find($id);
        return response()->json(['message' => 'Success', 'data' => $Reminder]);
    }

    public function store(Request $request)
    {
        $Reminder = Reminder::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $Reminder]);
    }

    public function update(Request $request, $id)
    {
        $Reminder = Reminder::find($id);
        $Reminder->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $Reminder]);
    }

    public function destroy($id)
    {
        $Reminder = Reminder::find($id);
        $Reminder->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
