@extends('layouts.public')

@section('content')
    <div style="padding-top: 50px;">
        @include('TroubleTicket::troubleTickets.public.create', ['troubleTicket'=>$troubleTicket])
    </div>
@endsection
