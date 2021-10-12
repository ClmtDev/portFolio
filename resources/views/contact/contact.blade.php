@extends('contact')

@section('title')
    Contact
@endsection

@section('body')
    <div id="body-main">
        <div class="wrapper">
            <h1>
                Contactez-moi
            </h1>
        </div>
        <div id="form-contact" class="wrapper">
            <div class="form-contact-body">
                <form action="{{ route('contact.create') }}" method="POST">
                    @csrf
                    <div class="form-contact-block">
                        <input type="text" class="form-contact-input  @error('nom') form-contact-invalid @enderror"
                            name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}" autocomplete="off">
                        @error('nom')
                            <div class="form-contact-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-contact-block">
                        <input type="email" class="form-contact-input  @error('email') form-contact-invalid @enderror"
                            name="email" id="email" placeholder="Votre email" value="{{ old('email') }}"
                            autocomplete="off">
                        @error('email')
                            <div class="form-contact-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-contact-block">
                        <textarea class="form-contact-input  textzone  @error('message') form-contact-invalid @enderror"
                            name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="form-contact-invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>


@endsection
