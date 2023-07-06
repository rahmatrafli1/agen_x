<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Ticket_class;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $ticket = Ticket::latest()->paginate(5);
        $ticket_class = Ticket_class::all();
        return view('admin.ticket.main', compact('ticket', 'ticket_class'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ticket_name' => 'required|max:255',
            'ticket_price' => 'required|numeric',
            'ticket_class_id' => 'required',
            'status' => 'required'
        ], [
            'ticket_name.required' => 'Ticket Name must required!',
            'ticket_name.max' => 'Ticket Name maximum 255 characters!',
            'ticket_price.required' => 'Ticket Price must required!',
            'ticket_price.numeric' => 'Ticket Price must numeric!',
            'ticket_class_id.required' => 'Ticket Class must required!',
            'status.required' => 'Status must required!',
        ]);

        Ticket::create([
            'ticket_name' => $request->ticket_name,
            'ticket_price' => $request->ticket_price,
            'ticket_class_id' => $request->ticket_class_id,
            'status' => $request->status
        ]);

        return redirect('admin/ticket')->with(['success' => 'Data Ticket has been added!']);
    }
}
