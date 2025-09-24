<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{

    public function show()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status === Password::RESET_LINK_SENT) {
            // Success: redirect to login with modal
            return redirect()->route('login')->with([
                'showModal' => true,
                'modalTitle' => 'Password Reset Link Sent',
                'modalMessage' => 'A password reset link has been sent to your email. Please check your inbox.',
            ]);
        } else {
            // Error: stay on the same page with modal
            return back()->with([
                'showModal' => true,
                'modalTitle' => 'Email Not Found',
                'modalMessage' => 'The email you entered is not registered. Please check your input or register a new account.',
            ]);
        }
    }
}
