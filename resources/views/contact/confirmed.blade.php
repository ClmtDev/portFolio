@extends('contact')

@section('body')
    <div id="body-main">
        <br>
        <div class="wrapper" id="response">
            <div class="">
                <h4 class="card-header">Contactez-moi</h4>
                <p class="inform-message">Merci. Votre message a été envoyé avec succés. Vous recevrez une réponse aussi vite
                    que possible.</p>
            </div>
        </div>
        <div id="back">
            <a href="{{ url('/') }}">Retour</a>
        </div>
    </div>
@endsection
