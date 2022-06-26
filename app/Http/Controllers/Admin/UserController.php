<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query();
        if ($keyword = \request('search')) {
            $users = $users->where('name', 'LIKE', "%{$keyword}%")
                ->orWhere('phone', 'LIKE', "%{$keyword}%");
        }
        $users = $users->where('type', 'operator');
        $users = $users->latest()->paginate(20);
        $users->appends(\request()->query())->links();

        return view('panel.users.index', compact('users'));
    }
}
