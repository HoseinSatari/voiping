<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CallUserController extends Controller
{
    public function index(User $user)
    {
        $calls = $user->customer();

        $calls = $calls->latest()->paginate(20);
        $calls->appends(\request()->query())->links();

         return view('panel.calls.callsuser' , compact('calls'));
   }
}
