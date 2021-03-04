@extends('layout.base')

@section('content')

    <section id="codeweek-training-page" class="codeweek-page">

        @include('static.training.banner')

        <section class="codeweek-content-wrapper">

            <section class="codeweek-content-wrapper-inside">

                <h1>@lang('training.lessons.14.title')</h1>
                <span style="font-weight: bold">@lang('training.lessons.14.author')</span>

                <p>@lang('training.lessons.14.text.1')</p>
                <p>@lang('training.lessons.14.text.2')</p>

                <p>@lang('training.lessons.14.activities.title')</p>
                <ul style="list-style-type: circle;margin-left:40px; margin-top:-4px;">
                    <li>@lang('training.lessons.14.activities.1')</li>
                    <li>@lang('training.lessons.14.activities.2')</li>
                    <li>@lang('training.lessons.14.activities.3')</li>
                </ul>
            </section>

            @include('static.youtube', ['video_id' => 'TXWyFwwjuzw'])

            <section class="codeweek-content-wrapper-inside">


                <p>
                    <a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/{{strtoupper(App::getLocale())}}/CODEWEEK-TRAINING-014-VIDEO-SCRIPT-{{strtoupper(App::getLocale())}}.docx">
                        @lang('training.download_video_script')
                    </a>
                </p>


                <h2>@lang('training.ready_to_share')</h2>

                <p>
                    @lang('training.choose_lessons')
                </p>

                <ol style="list-style-type: decimal;margin-left:40px; margin-top:-4px;">
                    <li>
                        <a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/{{strtoupper(App::getLocale())}}/CODEWEEK-TRAINING-014-ACTIVITY-01-{{strtoupper(App::getLocale())}}.docx">
                            @lang('training.lessons.14.activities.1')
                        </a>
                    </li>
                    <li>
                        <a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/{{strtoupper(App::getLocale())}}/CODEWEEK-TRAINING-014-ACTIVITY-02-{{strtoupper(App::getLocale())}}.docx">
                            @lang('training.lessons.14.activities.2')
                        </a>
                    </li>
                    <li>
                        <a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/{{strtoupper(App::getLocale())}}/CODEWEEK-TRAINING-014-ACTIVITY-03-{{strtoupper(App::getLocale())}}.docx">
                            @lang('training.lessons.14.activities.3')
                        </a>
                    </li>
                </ol>

                <h2>@lang('training.footer.title')</h2>
                @lang('training.footer.text')

            </section>

        </section>

    </section>

@endsection