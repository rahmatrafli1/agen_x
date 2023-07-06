<?php

namespace App\Http\Controllers;

use App\Models\Ticket_class;
use Illuminate\Http\Request;

class TicketClassController extends Controller
{
    public function index()
    {
        $ticket_class = Ticket_class::all();
        return view('admin.ticket.class', compact('ticket_class'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'class' => 'required',
        ], [
            'class.required' => 'Class must required!',
        ]);

        Ticket_class::create([
            'class' => $request->class,
        ]);

        return redirect('admin/ticketclass')->with(['success' => 'Data Ticket Class has been added!']);
    }
}
