@extends('admin.templates.master')

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
            <h1 class="h2">Dashboard Page</h1>
        </div>

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
@endsection
