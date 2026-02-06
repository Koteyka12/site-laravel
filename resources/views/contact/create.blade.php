@extends('layouts.app')

@section('title', 'Kontakt')
@section('meta_description', 'Kontaktieren Sie uns mit Ihrer Anfrage.')

@section('content')
    <section class="hero">
        <h1>Kontakt</h1>
        <p>Schicken Sie uns Ihre Anfrage. Wir melden uns schnellstmöglich bei Ihnen zurück.</p>
    </section>

    <section class="form-card">
        @if (session('status'))
            <div class="notice success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="notice error">
                Bitte prüfen Sie die markierten Felder und versuchen Sie es erneut.
            </div>
        @endif

        <form method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-grid">
                <div class="form-field">
                    <label for="name">Name *</label>
                    <input id="name" name="name" type="text" required autocomplete="name" value="{{ old('name') }}">
                    @error('name')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-field">
                    <label for="email">E-Mail *</label>
                    <input id="email" name="email" type="email" required autocomplete="email" value="{{ old('email') }}">
                    @error('email')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-field">
                    <label for="phone">Telefon</label>
                    <input id="phone" name="phone" type="tel" autocomplete="tel" value="{{ old('phone') }}">
                    @error('phone')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-field">
                    <label for="subject">Betreff</label>
                    <input id="subject" name="subject" type="text" value="{{ old('subject') }}">
                    @error('subject')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-field full">
                    <label for="message">Nachricht *</label>
                    <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                    @error('message')
                        <small class="error">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-actions">
                <button class="btn" type="submit">Anfrage senden</button>
            </div>
        </form>
    </section>
@endsection
