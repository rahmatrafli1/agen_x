@foreach ($ticket as $tkt)
    <div class="modal fade" id="hapusTicketModal{{ $tkt->id }}" tabindex="-1" aria-labelledby="hapusTicketModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusTicketModalLabel">Delete Ticket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/ticket/' . $tkt->id) }}" method="post">
                    <div class="modal-body">
                        @csrf
                        @method('DELETE')
                        <p>Are you sure delete?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
