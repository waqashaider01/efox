 
       <button class="btn btn-sm light-background mt-2" data-bs-toggle="modal"
            data-bs-target="#addSuburbModal_{{ $city->id }}"><b>Add Suburb</b></button>



        <div class="modal fade" id="addSuburbModal_{{ $city->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Suburb</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('create-subrub/'.$city->id) }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="suburbName" class="form-label">Suburb Name</label>
                                <input type="text" class="form-control" id="suburbName" name="suburbName">
                            </div>
                            <h5>SEO Details</h5>
                            <div class="mb-3">
                                <label for="seoTitle" class="form-label">SEO Title</label>
                                <input type="text" class="form-control" id="seoTitle" name="seoTitle">
                            </div>
                            <div class="mb-3">
                                <label for="seoDescription" class="form-label">SEO Description</label>
                                <textarea id="seoDescription" class="form-control" name="seoDescription" rows="4"
                                    placeholder="Write your description here...">
                            </textarea>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="seoKeywords" class="form-label">SEO Keywords</label>
                                    <input type="text" class="form-control" id="seoKeywords" aria-describedby="emailHelp"
                                        name="seoKeywords">
                                    <div id="emailHelp" class="form-text">Comma separated values</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn primary-button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



