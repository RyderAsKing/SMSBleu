@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-8 mx-auto">
            <div id="content" class="site-content" role="main">
                <article id="post-108" class="post-108 page type-page status-publish hentry">
                    <header class="entry-header">
                        <h1>SMSBleu Terms of Service</h1>
                        <p>Last updated: 17/04/2021</p>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <div class="general">

                            <h2>1. Terms</h2>
                            <p>{{ __('text.tos.terms') }}
                            </p>
                            <h2>2. Use License</h2>
                            {!! __('text.tos.license') !!}
                            <h2>3. SMS Messaging</h2>
                            {!! __('text.tos.messaging') !!}
                            <h2>4. Sales</h2>
                            {!! __('text.tos.sales') !!}
                            <h2>5. Your Data</h2>
                            {!! __('text.tos.data') !!}
                            <h2>6. Disclaimer</h2>
                            {!! __('text.tos.disclaimer') !!}
                            <h2>7. Limitations</h2>
                            <p>{{ __('text.tos.limitations') }}</p>
                            <h2>8. Accuracy of materials</h2>
                            <p>{{ __('text.tos.accuracy') }}</p>
                            <h2>9. Links</h2>
                            <p>{{ __('text.tos.links') }}</p>
                            <h2>10. Modifications</h2>
                            <p>{{ __('text.tos.modifications') }}</p>
                            <h2>11. Governing Law</h2>
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