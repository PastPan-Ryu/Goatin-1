<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the user accounts.
     */
    public function index()
    {
        // Fetch users who have the role of 'user'
        $users = User::where('role', 'user')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.accounts.index', compact('users'));
    }
}
