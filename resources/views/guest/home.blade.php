@extends('layouts.guest')

@section('content')
    @include('partials.guest.header')

    <section id="events" class="events">
        <div class="container">
            <div class="row">
                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <div class="col-lg-4"   style="background-image: url(../images/{{ $event->img }}); 
                                                background-color: rgba(255,255,255,0.6);
                                                background-blend-mode: lighten;
                                                background-position: center; 
                                                background-repeat: no-repeat; 
                                                background-size: cover;">
                           
                            <h2><a href="{{ route('events.show', $event->id) }}" class="">{{ $event->title }}</h2></a>
                            <div class="event-meta">
                                <div class="venue"><span class="label label-default">{{ $event->venue }}</span></div>
                                <div class="datetime"><span class="label label-info">{{ $event->start_time }}</span></div>
                                <div>                                 
                                </div>
                            </div>
                            {!! $event->description !!}
                        </div>
                        @if ($loop->index > 0 && ($loop->index + 1) % 3 == 0) </div><hr /><div class="row"> @endif
                    @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection