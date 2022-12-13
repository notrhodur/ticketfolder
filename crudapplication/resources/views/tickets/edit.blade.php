@extends('tickets.layouts')
@section('content')

    <div class="card">
        <div class="card-header">Bewerk ticket</div>
        <div class="card-body">

            <form action="{{ url('ticket/' .$tickets->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$tickets->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$tickets->name}}" class="form-control"></br>
                <label>Beschrijving</label></br>
                <input type="text" name="desc" id="desc" value="{{$tickets->desc}}" class="form-control"></br>
                <label for="progress">Hoe ver is het ticket?:</label>

                <select type="text" name="progress" id="progress" class="form-control">
                    <option value="Nog niet gestart" @selected($tickets->progress=='Nog niet gestart')>Nog niet gestart</option>
                    <option value="In Behandeling" @selected($tickets->progress=='In Behandeling')>In behandeling</option>
                    <option value="Af" @selected($tickets->progress=='Af')>Af</option>
                </select><br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
