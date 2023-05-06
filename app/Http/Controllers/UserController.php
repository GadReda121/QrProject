<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $user = User::where('id_number', $request->id_number)->first();

        if($user)
            return redirect()->route('showQr', $user->id);

        $user = User::create([
            'id_number' => $request->id_number
        ]);
        return redirect()->route('edit')->with('id_number', $user->id_number);
    }

    public function edit()
    {
        $id_number = session('id_number');
        if ($id_number)
            return view('edit', [
                'id_number' => $id_number
            ]);

        return redirect()->route('create');
    }

    public function update(UserRequest $request, $id_number)
    {
        $user = User::where('id_number', $id_number)->first();
        $user->update($request->except(['habit', 'history', '_token', '_method']));

        $user->habit()->create($request->habit);

        $user->history()->create($request->history);

        return redirect()->route('showQr', $user->id);
    }

    public function show(User $user)
    {
        return view('show', compact('user'));
    }

    public function showQr(User $user)
    {
        $qr = QrCode::size(400)->margin(4)->generate(route('show', $user->id));
        return view('qr', compact('user', 'qr'));
    }
}
