@extends('layout.app')
@section('content')
<section class="jumbotron text-center" style="margin-top: 15%">
    <div class="container">
        <h1 class="jumbotron-heading">SMSBleu</h1>
        <p class="lead text-muted">{{ __('text.home.welcome') }}</p>
        <p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary my-2">{{ __('text.app.dashboard') }}</a>
        </p>
    </div>
</section>
</main>
@endsection