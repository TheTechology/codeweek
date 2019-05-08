@extends('layout.base') @section('content')<section>

        <div class="container">

            <div class="content-wrap nopadding">


                <div class="container clearfix ">


                    <div class="flex flex-col justify-center text-center w-full mb-8 uppercase">
                        <h1>Programmare senza computer (unplugged)</h1><span>di Alessandro Bogliolo</span></div>

                    <hr>

                    <p>La programmazione &egrave; il linguaggio delle cose, che ci consente di scrivere programmi per concedere nuove funzionalit&agrave; alle decine di miliardi di oggetti programmabili che ci circondano. La programmazione &egrave; il modo pi&ugrave; veloce per realizzare le nostre idee nonch&eacute; il modo pi&ugrave; efficace per sviluppare capacit&agrave; di pensiero computazionale. Tuttavia, la tecnologia non &egrave; strettamente necessaria per sviluppare il pensiero computazionale, ma &egrave; piuttosto quest'ultimo a essere una capacit&agrave; essenziale per far funzionare la tecnologia.</p>

                    <p>In questo video, Alessandro Bogliolo, professore di Sistemi informatici in Italia e coordinatore della Settimana europea della programmazione, presenter&agrave; attivit&agrave; di programmazione unplugged che possono essere svolte senza alcun dispositivo elettronico. Lo scopo principale delle attivit&agrave; unplugged &egrave; abbassare le barriere di accesso per portare la programmazione in ogni scuola, indipendentemente dai finanziamenti e dalle apparecchiature.</p>

                    <p>Le attivit&agrave; di programmazione unplugged svelano gli aspetti computazionali del mondo fisico che ci circonda.</p>

                    @include('static.youtube', ['video_id' => '18N1CaQJ0GI'])

                    {{--<p><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/IT/CNECT-2018-00222-00-17-IT-TRA-00.DOCX">Scarica lo script video</a></p>--}}

                    <h2>Pronto a condividere ci&ograve; che hai imparato con i tuoi studenti?</h2>

                    <p>Scegli uno dei piani di lezione qui sotto e organizza un&rsquo;attivit&agrave; con i tuoi studenti.</p>

                    <ul>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/IT/CNECT-2018-00222-00-00-IT-TRA-00.DOCX">Attivit&agrave; 1 - CodyRoby per la scuola primaria</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/IT/CNECT-2018-00222-00-02-IT-TRA-00.DOCX">Attivit&agrave; 2 - CodyRoby per la scuola secondaria di primo grado</a></li>
                        <li><a href="https://s3-eu-west-1.amazonaws.com/codeweek-s3/docs/training/IT/CNECT-2018-00222-00-03-IT-TRA-00.DOCX">Attivit&agrave; 3 - CodyRoby per la scuola secondaria di secondo grado</a></li>
                    </ul>@if(view()->exists('static.'.App::getLocale().'.training.footer')) @include('static.'.App::getLocale().'.training.footer') @else @include('static.en.training.footer') @endif</div>

            </div>

        </div>

    </section>@endsection