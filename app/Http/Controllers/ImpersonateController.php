<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    public function start($userId)
    {
        $user = Auth::user();

        if (!$user->hasPermissionTo('access-other-users')) {
            abort(403, 'You do not have permission to impersonate users.');
        }

        $targetUser = User::findOrFail($userId);

        session()->put('impersonate', $targetUser->id);

        return redirect()->route('admin.dashboard')->with('success', "You are now impersonating {$targetUser->name}.");
    }

    public function stop()
    {
        session()->forget('impersonate');
        $targetUser = User::findOrFail(1);
        session()->put('impersonate', $targetUser->id);
        return redirect()->route('admin.dashboard');
    }
}
