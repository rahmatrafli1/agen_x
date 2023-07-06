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
}
