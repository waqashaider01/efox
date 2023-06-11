<button href="{{url('edit-banner')}}/{{$banner->id}}" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#updateBannerModal_{{ $banner->id }}">Edit</button>

<!-- Update Banner Modal -->
<div class="modal fade" id="updateBannerModal_{{ $banner->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/update-banner" method="post" enctype="multipart/form-data">
            	@csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="bannerName" class="form-label">Banner Name</label>
                        <input type="text"  class="form-control" id="bannerName" name="bannerName" value="{{ $banner->banner_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="bannerImage" class="form-label">Banner Image</label>
                        <input type="file" class="form-control" id="bannerImage" name="bannerImage" value="{{ $banner->banner_image }}">
                    </div>
                    <div class="mb-3">
                        <label for="adsenceCode" class="form-label">Adsence Code</label>
                        <input type="text" class="form-control" id="adsenceCode" name="adsenceCode" value="{{ $banner->adsence_code }}">
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label">Categories</label>
                        <select class="chosen-select" name="categories" id="categories" multiple>
                            <option value="Computers">Computers</option>
                            <option value="Cars">Cars</option>
                            <option value="Toys">Toys</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="bannerSlot" class="form-label">Banner Slot</label>
                        <select class="form-select" aria-label="Default select example" name="bannerSlot"
                            id="bannerSlot">
                            <option value="{{ $banner->id }}">{{ $banner->banner_slot }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>

                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="paidFrom" class="form-label">Paid From</label>
                                <input type="date" class="form-control" id="paidFrom" name="paidFrom" value="{{ $banner->paid_from }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="validUntil" class="form-label">Valid Until</label>
                                <input type="date" class="form-control" id="validUntil" name="validUntil" value="{{ $banner->valid_until }}">
                            </div>
                        </div>
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