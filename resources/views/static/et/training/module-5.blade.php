﻿@extends('layout.base') @section('content')<section>

        <div class="container">

            <div class="content-wrap nopadding">


                <div class="container clearfix ">


                    <div class="flex flex-col justify-center text-center w-full mb-8 uppercase">
                        <h1>Robotite ehitamine ja meisterdamine klassiruumis</h1><span>Autor: Tullia Urschitz</span></div>

                    <hr>

                    <p>Programmeerimise, meisterdamise, robotiehituse ja mikroelektroonika integreerimine &otilde;ppet&ouml;&ouml;s ja &otilde;ppevahendites on v&otilde;ti 21.&nbsp;sajandi haridusse.</p>

                    <p>Meisterdamise ja robootika toomine koolidesse aitab &otilde;pilasi mitmel viisil, v&otilde;imaldades neil arendada oma probleemilahendamise, tiimi- ja koost&ouml;&ouml; tegemisi oskusi. See suurendab ka &otilde;pilaste loomingulisust ja enesekindlust, mis omakorda aitab neil leida sihikindlust ja tahtej&otilde;udu raskuste &uuml;letamiseks. Robootika v&otilde;imaldab kaasata erinevate oskustega lapsi (nii poisse kui ka t&uuml;drukuid) ja m&otilde;jub positiivselt ka autismispektri h&auml;iretega &otilde;pilastele.</p>

                    <p>Vaadake videot, kus Tullia Urschitz, Itaalia Scientixi esindaja ja Sant&rsquo;Ambrogio Di Valpolicella STEM-&otilde;petaja, annab praktilist n&otilde;u, kuidas saaksid &otilde;petajad integreerida meisterdamist ja robootikat klassiruumis ning muuta seel&auml;bi oma &otilde;pilased entusiastlikeks loojateks.</p>

                    @include('static.youtube', ['video_id' => '5V9G-vWWSik'])

                    <p><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/ET/CNECT-2018-00222-00-20-ET-TRA-00.DOCX">Laadi alla video skript</a></p>

                    <h2>Kas olete valmis &otilde;pitut oma &otilde;pilastega jagama?</h2>

                    <p>Valige altpoolt &uuml;ks tunniplaanidest ja alustage &otilde;ppimist.</p>

                    <ul>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/ET/CNECT-2018-00222-00-13-ET-TRA-00.DOCX">1. tegevus &ndash; Kuidas luua papist mehaanilist k&auml;tt, algkool</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/ET/CNECT-2018-00222-00-14-ET-TRA-00.DOCX">2. tegevus &ndash; Kuidas luua mehaanilist k&auml;tt, p&otilde;hikooli esimene aste</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/ET/CNECT-2018-00222-00-15-ET-TRA-00.DOCX">3. tegevus &ndash; Kuidas luua mehaanilist k&auml;tt, p&otilde;hikooli teine aste</a></li>
                    </ul>@if(view()->exists('static.'.App::getLocale().'.training.footer')) @include('static.'.App::getLocale().'.training.footer') @else @include('static.en.training.footer') @endif</div>

            </div>

        </div>

    </section>@endsection
