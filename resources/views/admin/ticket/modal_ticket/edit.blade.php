@foreach ($ticket as $tkt)
    <div class="modal fade" id="editTicketModal{{ $tkt->id }}" tabindex="-1" aria-labelledby="editTicketModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTicketModalLabel">Edit Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/ticket/' . $tkt->id) }}" method="post">
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Ticket Name</label>
                            <input type="text" name="ticket_name"
                                class="form-control @error('ticket_name') is-invalid @enderror"
                                value="{{ old('ticket_name', $tkt->ticket_name) }}">
                            @error('ticket_name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ticket Price</label>
                            <input type="text" name="ticket_price"
                                class="form-control @error('ticket_price') is-invalid @enderror"
                                value="{{ old('ticket_price', $tkt->ticket_price) }}">
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
                                    @if ($tkt->ticket_class_id == $tc->id)
                                        <option value="{{ $tc->id }}" selected>{{ $tc->class }}</option>
                                    @else
                                        <option value="{{ $tc->id }}"
                                            @if (old('ticket_class_id') == $tc->id) selected @endif>
                                            {{ $tc->class }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('ticket_class_id')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            @if ($tkt->status == '1')
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" value="1"
                                        checked>
                                    <label class="form-check-label">Available</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" value="0">
                                    <label class="form-check-label">Sold Out</label>
                                </div>
                            @elseif ($tkt->status == '0')
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" value="1">
                                    <label class="form-check-label">Available</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" value="0"
                                        checked>
                                    <label class="form-check-label">Sold Out</label>
                                </div>
                            @else
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
                            @endif
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
@endforeach
