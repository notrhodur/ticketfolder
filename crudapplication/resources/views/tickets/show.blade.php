@extends('tickets.layouts')
@section('content')


    <div class="card">
        <div class="card-header">Ticketpagina</div>
        <div class="card-body">


            <div class="card-body">
                <h5 class="card-title">Name : {{ $tickets->name }}</h5>
                <p class="card-text">Beschrijving : {{ $tickets->desc }}</p>
                <p class="card-text">Progressie : {{ $tickets->progress }}</p>
            </div>

            </hr>

        </div>
    </div>
