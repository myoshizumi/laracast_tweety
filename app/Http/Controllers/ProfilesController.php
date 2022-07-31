<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        // if ($user->isNot(current_user())) {
        //     abort(404);
        // }
        // abort_if($user->isNot(current_user()), 404);
        // $this->authorize('edit', $user);

        return view('profiles.edit', compact('user'));
    }
}
