<div class="modal fade" id="addTicketClassModal" tabindex="-1" aria-labelledby="addTicketClassModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTicketClassModalLabel">Add Ticket Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/admin/ticketclass') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Class</label>
                        <input type="text" name="class" class="form-control @error('class') is-invalid @enderror"
                            value="{{ old('class') }}">
                        @error('class')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
