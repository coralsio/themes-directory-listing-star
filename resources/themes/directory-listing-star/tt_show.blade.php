@extends('layouts.public')

@section('content')
    <div style="padding-top: 50px;">
        @include('TroubleTicket::troubleTickets.public.partial_show', ['troubleTicket'=>$troubleTicket])
    </div>
@endsection
