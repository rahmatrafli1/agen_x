@extends('admin.templates.master')
@section('title')
    Ticket
@endsection

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
            <h1 class="h2">Ticket</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addTicketModal">Add Ticket</a>

        <div class="table-responsive">
            <table class="table-striped table-sm table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ticket Name</th>
                        <th>Ticket Price</th>
                        <th>Ticket Class</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ticket as $index => $tkt)
                        <tr>
                            <td>{{ $index + $ticket->firstItem() }}</td>
                            <td>{{ $tkt->ticket_name }}</td>
                            <td>Rp {{ number_format($tkt->ticket_price, 2) }}</td>
                            <td>{{ $tkt->ticket_class->class }}</td>
                            <td>{{ $tkt->status == 1 ? 'Available' : 'Sold Out' }}</td>
                            <td>
                                <a href="#" class="badge badge-warning" data-toggle="modal"
                                    data-target="#editTicketModal{{ $tkt->id }}">
                                    Edit
                                </a>
                                <a href="#" class="badge badge-danger" data-toggle="modal"
                                    data-target="#hapusTicketModal{{ $tkt->id }}">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $ticket->links() }}
        </div>
    </main>

    @include('admin.ticket.modal_ticket.create')
    @include('admin.ticket.modal_ticket.edit')
    @include('admin.ticket.modal_ticket.delete')
@endsection
