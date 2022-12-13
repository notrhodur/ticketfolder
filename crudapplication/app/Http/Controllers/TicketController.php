<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index')->with('tickets', $tickets);
    }


    public function create()
    {
        return view('tickets.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Ticket::create($input);
        return redirect('ticket')->with('Ticket toegevoegd');
    }


    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.show')->with('tickets', $ticket);
    }


    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.edit')->with('tickets', $ticket);
    }


    public function update(Request $request, $id)
    {
        $ticket = Ticket::find($id);
        $input = $request->all();

        $ticket->update($input);
        return redirect('ticket')->with('Ticket aangepast');
    }


    public function destroy($id)
    {
        Ticket::destroy($id);
        return redirect('ticket')->with('Ticket verwijderd');
    }
}
