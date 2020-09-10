<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedback = Feedback::latest()->get();

        return view('admin.feedback', compact('feedback'));
    }

    public function create()
    {
        return view('contacts');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Feedback::create($validatedData);
        return redirect('/');
    }
}
