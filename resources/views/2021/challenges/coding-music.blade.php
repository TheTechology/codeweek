@extends('layout.base')

<x-tailwind></x-tailwind>

@section('content')

    @php
        $slug = 'coding-music'
    @endphp

    <section id="codeweek-schools-page" class="codeweek-page">

        <section class="flex flex-row justify-between" style="background-color: #6DB4B4">
            <div class="flex justify-center items-center w-full">
                <div class="text-center m-12">
                    <div class="text-xl text-white w-full"><a class="text-white" href="{{route('challenges')}}">@lang('challenges.title')</a></div>
                    <div class="text-5xl mt-2" style="color: #fecc54">@lang("challenges-content.$slug.title")</div>
                </div>
            </div>

            <div class="md:w-10/12 md:mb-2 md:flex hidden">
                <img src="{{asset('img/2021/challenges/thumbnails/compose-song.png')}}">

            </div>

        </section>

        <section class="codeweek-content-wrapper">
            <div class="m-6">

                @include('2021.challenges._author', ['author' => __("challenges-content.$slug.author")])

                <section class="grid grid-cols-1 gap-6 md:grid-cols-5 mx-6 my-4">


                    <div>
                        <div class="text-xl text-left text-blue-600">@lang('challenges.common.target-audience')</div>
                        <ol class="list-disc ml-5">
                            <li>@lang('challenges.common.teachers')</li>
                            <li>@lang('challenges.common.students') (13-16)</li>
                        </ol>
                    </div>

                    <div>
                        <div class="text-xl text-left text-blue-600">@lang('challenges.common.experience')</div>
                        <ol class="list-disc ml-5">
                            <li>@lang('challenges.common.advanced')</li>
                        </ol>
                    </div>

                    <div>
                        <div class="text-xl text-left text-blue-600">@lang('challenges.common.duration')</div>
                        <ol class="list-disc ml-5">
                            <li>@lang('challenges-content.coding-music.duration')</li>
                        </ol>
                    </div>

                    <div>
                        <div class="text-xl text-left text-blue-600">@lang('challenges.common.materials')</div>
                        <ol class="list-disc ml-5">
                            <li><a href="https://sonic-pi.net/" target="_blank">Sonic Pi</a></li>
                            <li><a href="https://www.raspberrypi.com/" target="_blank">@lang('challenges-content.coding-music.materials.0')</a> @lang('challenges-content.coding-music.materials.1')</li>
                        </ol>

                    </div>




                </section>

                <div class="mx-6 my-4">
                    <div class="text-xl text-left text-blue-600">@lang('challenges.common.purpose')</div>
                    <ol class="list-disc ml-5">
                        <li>@lang("challenges-content.$slug.purposes.0")</li>
                        <li>@lang("challenges-content.$slug.purposes.1")</li>
                        <li>@lang("challenges-content.$slug.purposes.2")</li>
                    </ol>

                </div>


                <div class="leading-6 text-base text-left">

                    <section class="bg-blue-100 p-2 mt-6">
                        <div class="orange text-3xl mt-2">
                            @lang('challenges.common.description')
                        </div>


                        <div class="mt-2">
                            @lang("challenges-content.$slug.description.0") <a href="{{route('podcasts')}}">@lang("challenges-content.$slug.description.1")</a>.
                        </div>
                    </section>



                    <section class="p-2">
                        <div class="leading-8">
                            <div class="mt-6 orange text-3xl">@lang('challenges.common.instructions')</div>
                            <ul class="leading-7 ml-2 mt-0 checklist mt-2">
                                <li>@lang("challenges-content.$slug.instructions.0") <a href="{{route('training.module-8')}}">@lang("challenges-content.$slug.instructions.1")</a>.</li>
                                <li>@lang("challenges-content.$slug.instructions.2")</li>
                                <img class="m-4" width="100" src="{{asset('img/2022/challenges/coding-music-1.png')}}"/>
                                <li>@lang("challenges-content.$slug.instructions.3")</li>
                                <li>@lang("challenges-content.$slug.instructions.4")</li>
                                <img class="m-4" width="220" src="{{asset('img/2022/challenges/coding-music-2.png')}}"/>
                                <li>@lang("challenges-content.$slug.instructions.5")</li>
                                <li>@lang("challenges-content.$slug.instructions.6")</li>
                                <li>@lang("challenges-content.$slug.instructions.7")</li>
                                <li>@lang("challenges-content.$slug.instructions.8")</li>
                                <img class="m-4" width="800" src="{{asset('img/2022/challenges/coding-music-3.png')}}"/>
                                <li>@lang("challenges-content.$slug.instructions.9")</li>

                            </ul>

                        </div>
                    </section>

                    <section class="p-2">
                        <div class="leading-8">
                            <div class="mt-2 orange text-3xl">@lang('challenges.common.additional-materials')</div>
                            <ul class="leading-7 ml-2 mt-0 checklist mt-2">
                                <li>@lang("challenges-content.$slug.more.0") <a href="https://sonic-pi.net/tutorial.html#section-1">@lang("challenges-content.$slug.more.1")</a> @lang("challenges-content.$slug.more.2")</li>
                                <li><a href="https://www.8notes.com/">@lang("challenges-content.$slug.more.3")</a> @lang("challenges-content.$slug.more.4")</li>

                            </ul>

                        </div>
                    </section>

{{--                    @include('2021.challenges._share')--}}

{{--                    <section class="p-2">--}}
{{--                        <div class="mt-6 orange text-3xl">@lang('challenges.common.example')</div>--}}
{{--                        <div class="mt-2">--}}
{{--                            @lang("challenges-content.$slug.example.0") <a href="https://earsketch.gatech.edu/earsketch2/?sharing=eQgzojvIKsMLrum8CBYj1g" target="_blank">@lang("challenges-content.$slug.example.1")</a>. @lang("challenges-content.$slug.example.2").--}}
{{--                        </div>--}}
{{--                    </section>--}}


                </div>

                @include('2021.challenges._download',['url'=>'https://codeweek-s3.s3.eu-west-1.amazonaws.com/cw2021/EUCW+-+music.docx'])
            </div>
        </section>
    </section>

@endsection

@section('extra-css')
    <style>
        ul.checklist>li:before {
            content: '• ';
            color: #ee6a2c;
            font-weight: bold;
        }
    </style>
@endsection
