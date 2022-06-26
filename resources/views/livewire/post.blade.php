<div>
    @include('livewire.modal')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Dashboard') }}
                        <button type="button" class="btn btn-primary btn-sm float-end" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            New Post
                        </button>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('View from livewire Post index') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
