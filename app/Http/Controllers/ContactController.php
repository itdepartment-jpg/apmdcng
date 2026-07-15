<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Mail\ContactFormMail;

class ContactController extends Controller

{

    public function show()
    {
        return view('seo-page/contact'); // Assuming your Blade file is contact.blade.php
    }


    public function submit1(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|in:general,quote,service,complaint,other',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // dd($validated);

        Mail::to('no-reply@apmdcng.com')->send(new ContactFormMail($validated));
        //        Mail::to('tethys-no-reply@nalcometgroup.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }

    public function submit(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|in:general,quote,service,complaint,other',
            'message' => 'required|string|min:10|max:2000',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()
                ->route('contact.show')
                ->withErrors($validator)
                ->withInput();
        }

        // Get validated data
        $validated = $validator->validated();


        // Send email notification
        try {
            // Send email to admin
            Mail::to(config('mail.from.address'))
                ->send(new ContactFormMail($validated));

            // Optionally, send confirmation email to user
            // Mail::to($validated['email'])->send(new ContactConfirmationMail($validated));
        } catch (\Exception $e) {
            // Log the error but still show success to user
            \Log::error('Contact form email failed: ' . $e->getMessage());
        }

        // Redirect back with success message
        return redirect()
            ->route('contact.show')
            ->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
