<!--Basic Modal -->
<div class="modal fade text-left" id="{{ $idModal }}" tabindex="-1" role="dialog" aria-labelledby="{{ $idModal . 'Label' }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $idModal . 'Label' }}">{{ $modal_title }}</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ $url }}" method="{{ $method }}" {{ isset($file) ? 'enctype=multipart/form-data' : '' }} >
                @csrf
                <div class="modal-body">
                    {{ $modal_body }}
                </div>
                <div class="modal-footer">
                    @if (isset($modal_footer))
                        {{ $modal_footer }}
                    @else
                        <button type="button" class="btn" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn {{ $btn_color ?? 'btn-primary' }} ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save Changes</span>
                        </button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
