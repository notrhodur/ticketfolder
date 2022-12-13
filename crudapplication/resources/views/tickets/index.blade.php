@extends('tickets.layouts')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Ticketsysteem</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/ticket/create') }}" class="btn btn-success btn-sm" title="Voeg ticket toe">
                            <i class="fa fa-plus" aria-hidden="true"></i> Voeg ticket toe
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Naam</th>
                                    <th>Beschrijving</th>
                                    <th>Progressie</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->desc }}</td>
                                        <td>{{ $item->progress }}</td>


                                        <td>
                                            <a href="{{ url('/ticket/' . $item->id) }}" title="Bekijk ticket"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/ticket/' . $item->id . '/edit') }}" title="Bewerk ticket"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/ticket' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Verwijder ticket" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
