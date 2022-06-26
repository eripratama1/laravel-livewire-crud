<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="savePost">
                <div class="modal-body">
                    <div class="form-group mb-3 mt-3">
                        <label for="">Title Post</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="">Content Post</label>
                        <textarea wire:model="content" class="form-control" id="" cols="30" rows="10"></textarea>
                        @error('content')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-3">
                        <label for="">Image Post</label>
                        <input type="file" class="form-control" wire:model="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
