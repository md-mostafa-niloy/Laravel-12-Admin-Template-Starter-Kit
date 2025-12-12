<form action="{{ route('users.store') }}" method="POST" id="addEditUserForm">
    @csrf
    <!-- Modal Header -->
    <div class="modal-header bg-light py-2">
        <h5 class="modal-title">Create a new user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <!-- Modal Body -->
    <div class="modal-body">
        <div class="mb-2">
            <label for="name">Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter user name" required>
        </div>
        <div class="mb-2">
            <label for="email">Email <span class="text-danger">*</span></label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter user email" required>
        </div>
        <div class="mb-2">
            <label for="password">Password <span class="text-danger">*</span></label>
            <input type="password" name="password" id="password" class="form-control" placeholder="********" required>
        </div>
        <div class="mb-2">
            <label for="password_confirmation">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="********"
                   class="form-control"
                   required>
        </div>
        <div class="mb-2">
            <label for="role">Role <span class="text-danger">*</span></label>
            <select name="role" id="role" class="form-select">
                <option value="">Select Role</option>
                @forelse($roles as $role)
                    <option value="{{ $role->name }}">{{ ucfirst($role->name) }}</option>
                @empty
                @endforelse
            </select>
        </div>
    </div>
    <!-- Modal Footer -->
    <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" id="submitBtn">Save</button>
        <button type="button" class="btn btn-subtle-danger" data-bs-dismiss="modal">Close</button>
    </div>
</form>
