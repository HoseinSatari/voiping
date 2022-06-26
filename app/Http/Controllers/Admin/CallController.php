<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function index()
    {
        $calls = Call::query();

        $calls = $calls->latest()->paginate(20);
        $calls->appends(\request()->query())->links();

        return view('panel.calls.index', compact('calls'));
    }
}
