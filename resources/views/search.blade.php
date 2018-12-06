@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pretraga - rezultati pretrage</div>

                <div class="card-body">
                    
                   @if($albumi || $knjige || $stripovi) 

                        @if($albumi)
                         @foreach ($albumi as $album)
                            <p>
                                <a href="{{route('public.show.album', ['id' => $album->id])}}">
                                {{$album->title}}
                                </a>
                            </p>
                         @endforeach
                         @endif
                    <hr>


                    @if($knjige)
                    @foreach ($knjige as $knjiga)
                        <p>
                            <a href="{{route('public.show.knjiga', ['id' => $knjiga->id])}}">
                            {{$knjiga->title}}
                            </a>
                        </p>
                    @endforeach
                     @endif
                    <hr>

                    @if($stripovi)
                    @foreach ($stripovi as $strip)
                        <p>
                            <a href="{{route('public.show.strip', ['id' => $strip->id])}}">
                            {{$strip->title}}
                            </a>
                        </p>
                    @endforeach
                    @endif

                    
                    @else
                        <p>Nije pronađen ni jedan rezultat....</p>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
