<?php

namespace App\Http\Controllers;

use App\Enums\ContactRequestStatus;
use App\Models\ContactRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    public function create(): View
    {
        return view('contact.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['nullable', 'string', 'max:60'],
            'subject' => ['nullable', 'string', 'max:190'],
            'message' => ['required', 'string', 'max:4000'],
        ]);

        $data['ip_address'] = $request->ip();
        $data['user_agent'] = $request->userAgent();
        $data['status'] = ContactRequestStatus::Neu->value;

        ContactRequest::create($data);

        return redirect()
            ->route('contact.create')
            ->with('status', 'Vielen Dank! Wir melden uns so schnell wie möglich.');
    }
}
