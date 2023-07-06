<div class="modal fade" id="addTicketModal" tabindex="-1" aria-labelledby="addTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTicketModalLabel">Add Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('/admin/ticket') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Ticket Name</label>
                        <input type="text" name="ticket_name"
                            class="form-control @error('ticket_name') is-invalid @enderror"
                            value="{{ old('ticket_name') }}">
                        @error('ticket_name')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ticket Price</label>
                        <input type="text" name="ticket_price"
                            class="form-control @error('ticket_price') is-invalid @enderror"
                            value="{{ old('ticket_price') }}">
                        @error('ticket_price')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Ticket Class</label>
                        <select name="ticket_class_id"
                            class="form-control @error('ticket_class_id') is-invalid @enderror">
                            <option value="">--Choose your Ticket Class--</option>
                            @foreach ($ticket_class as $tc)
                                <option value="{{ $tc->id }}" @if (old('ticket_class_id') == $tc->id) selected @endif>
                                    {{ $tc->class }}</option>
                            @endforeach
                        </select>
                        @error('ticket_class_id')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="1"
                                @if (old('status') == '1') checked @endif>
                            <label class="form-check-label">Available</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" value="0"
                                @if (old('status') == '0') checked @endif>
                            <label class="form-check-label">Sold Out</label>
                        </div>
                        @error('status')
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
