<div class="card offset-3 col-6">
    <div class="card-header">
        Create Customer
    </div>
    <div class="card-body">
        <form wire:submit='save'>
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input wire:model='fullname' type="text" class="form-control" id="fullname">
                <div>
                    @error('fullname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input wire:model='email' type="email" class="form-control" id="email">
                <div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input wire:model='phone' type="text" class="form-control" id="phone">
                <div>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
