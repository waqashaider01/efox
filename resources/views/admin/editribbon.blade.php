<button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#updateRibbonModal_{{ $ribbon->id }}">Edit</button>

<!-- Update Banner Modal -->
<div class="modal fade" id="updateRibbonModal_{{ $ribbon->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('update-ribbon') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $ribbon->id }}">
            	@csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="bannerName" class="form-label">Price</label>
                        <input type="number"  class="form-control" id="bannerName" name="price" value="{{ $ribbon->price }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Banner</button>
                </div>
            </form>
        </div>
    </div>
</div>