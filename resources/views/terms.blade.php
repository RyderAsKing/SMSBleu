@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-8 mx-auto">
            <div id="content" class="site-content" role="main">
                <article id="post-108" class="post-108 page type-page status-publish hentry">
                    <header class="entry-header">
                        <h1>SMSBleu {{ __('text.app.tos') }}</h1>
                        <p>Last updated: 17/04/2021</p>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <div class="general">

                            <h2>1. {{ __('text.title.terms') }}</h2>
                            <p>{{ __('text.tos.terms') }}
                            </p>
                            <h2>2. {{ __('text.title.use_license') }}</h2>
                            {!! __('text.tos.license') !!}
                            <h2>3. {{ __('text.title.sms_messaging') }}</h2>
                            {!! __('text.tos.messaging') !!}
                            <h2>4. {{ __('text.title.sales') }}</h2>
                            {!! __('text.tos.sales') !!}
                            <h2>5. {{ __('text.title.your_data') }}</h2>
                            {!! __('text.tos.data') !!}
                            <h2>6. {{ __('text.title.disclaimer') }}</h2>
                            {!! __('text.tos.disclaimer') !!}
                            <h2>7. {{ __('text.title.limitations') }}</h2>
                            <p>{{ __('text.tos.limitations') }}</p>
                            <h2>8. {{ __('text.title.accuracy') }}</h2>
                            <p>{{ __('text.tos.accuracy') }}</p>
                            <h2>9. {{ __('text.title.links') }}</h2>
                            <p>{{ __('text.tos.links') }}</p>
                            <h2>10. {{ __('text.title.modifications') }}</h2>
                            <p>{{ __('text.tos.modifications') }}</p>
                            <h2>11. {{ __('text.title.law') }}</h2>
                            <p>These terms and conditions are governed by and construed in accordance with the laws of
                                Norway and you
                                irrevocably submit to the exclusive jurisdiction of the courts in that location.</p>
                        </div>
                    </div><!-- .entry-content -->
                </article><!-- #post-108 -->
            </div><!-- #content .site-content -->
        </div><!-- #primary .content-area -->

    </div>
</div>

</main>
@endsection