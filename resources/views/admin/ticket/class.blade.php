@extends('admin.templates.master')
@section('title')
    Ticket Class
@endsection

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
            <h1 class="h2">Ticket Class</h1>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addTicketClassModal">Add Ticket
            Class</a>

        <div class="table-responsive">
            <table class="table-striped table-sm table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($ticket_class as $tc)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $tc->class }}</td>
                            <td>
                                Edit Delete
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    @include('admin.ticket.modal_ticket_class.create')
@endsection
