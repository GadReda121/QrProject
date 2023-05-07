<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        if (!$request->has('id_number')) {
            return redirect()->route('index');
        }

        $user = User::where('id_number', $request->id_number)->first();
        if ($user)
            return redirect()->route('showQr', $user->id);

        return view('create', [
            'id_number' => $request->id_number
        ]);
    }

    public function store(UserRequest $request)
    {
        // Check if id number exists
        $user = User::where('id_number', $request->id_number)->first();
        if ($user)
            return redirect()->route('showQr', $user->id);

        // If not create new user
        $user = User::create($request->except(['habit', 'history', '_token', '_method']));
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
