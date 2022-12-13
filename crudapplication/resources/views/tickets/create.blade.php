@extends('tickets.layouts')
@section('content')
    <div class="card">
        <div class="card-header">Ticket pagina</div>
        <div class="card-body">

            <form action="{{ url('ticket') }}" method="post">
                {!! csrf_field() !!}
                <label>Naam</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Beschrijving</label></br>
                <input type="text" name="desc" id="desc" class="form-control"></br>
                <label for="progress">Hoe ver is het ticket?:</label>

                <select type="text" name="progress" id="progress" class="form-control">
                    <option value="Nog niet gestart">Nog niet gestart</option>
                    <option value="In Behandeling">In behandeling</option>
                    <option value="Af">Af</option>
                </select><br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
