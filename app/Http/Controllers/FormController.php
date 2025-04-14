<?php

namespace App\Http\Controllers;

use App\AreYou;
use App\Expertize;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class FormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'linkedin' => 'required|string',
            'are_you' => ['required', Rule::enum(AreYou::class)],
            'looking_to' => 'required|array',
            'expertize' => ['required', Rule::enum(Expertize::class)],
        ]);

        Submission::create($validated);

        return redirect()->route('thankyou');
    }
}
