<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-6 max-w-2xl mx-auto p-6 bg-base-100 rounded-lg shadow">
        @csrf

        <h2 class="text-2xl font-bold text-center">Register</h2>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-error">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Full Name -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Full Name</span></label>
            <input type="text" name="name" value="{{ old('name') }}" class="input input-bordered w-full" required autofocus>
        </div>

        <!-- Email -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Email</span></label>
            <input type="email" name="email" value="{{ old('email') }}" class="input input-bordered w-full" required>
            @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-control w-full relative">
            <label class="label"><span class="label-text">Password</span></label>
            <input type="password" name="password" id="password" class="input input-bordered w-full" required>
            <button type="button" onclick="togglePassword()" class="absolute top-9 right-3 btn btn-xs">Show</button>
        </div>

        <!-- Confirm Password -->
        <div class="form-control w-full relative">
            <label class="label"><span class="label-text">Confirm Password</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="input input-bordered w-full" required>
            <button type="button" onclick="toggleConfirmPassword()" class="absolute top-9 right-3 btn btn-xs">Show</button>
        </div>

        <!-- Birth Date -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Birth Date</span></label>
            <input type="date" name="birth" value="{{ old('birth') }}" class="input input-bordered w-full">
        </div>

        <!-- Gender -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Gender</span></label>
            <select name="gender" class="select select-bordered w-full">
                <option disabled selected>Select Gender</option>
                <option value="male" {{ old('gender')=='male'?'selected':'' }}>Male</option>
                <option value="female" {{ old('gender')=='female'?'selected':'' }}>Female</option>
                <option value="other" {{ old('gender')=='other'?'selected':'' }}>Other</option>
            </select>
        </div>

        <!-- Village -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Village</span></label>
            <input type="text" name="village" value="{{ old('village') }}" class="input input-bordered w-full">
        </div>

        <!-- Post Office -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Post Office</span></label>
            <input type="text" name="po" value="{{ old('po') }}" class="input input-bordered w-full">
        </div>

        <!-- District -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">District</span></label>
            <input type="text" name="district" value="{{ old('district') }}" class="input input-bordered w-full">
        </div>

        <!-- Country -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Country</span></label>
            <input type="text" name="country" value="{{ old('country') }}" class="input input-bordered w-full">
        </div>

        <!-- Phone -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Phone</span></label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="input input-bordered w-full">
        </div>

        <!-- Position -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Position</span></label>
            <select name="position" class="select select-bordered w-full">
                <option disabled selected>Select Position</option>
                <option value="admin" {{ old('position')=='admin'?'selected':'' }}>Admin</option>
                <option value="manager" {{ old('position')=='manager'?'selected':'' }}>Inventory Manager</option>
                <option value="staff" {{ old('position')=='staff'?'selected':'' }}>Staff</option>
                <option value="auditor" {{ old('position')=='auditor'?'selected':'' }}>Auditor</option>
            </select>
        </div>

        <!-- Start Date -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Start Date</span></label>
            <input type="date" name="start_date" value="{{ old('start_date') }}" class="input input-bordered w-full">
        </div>

        <!-- Contract -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Contract Type</span></label>
            <input type="text" name="contract" value="{{ old('contract') }}" class="input input-bordered w-full">
        </div>

        <!-- Emergency Contact Name -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Emergency Contact Name</span></label>
            <input type="text" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}" class="input input-bordered w-full">
        </div>

        <!-- Emergency Contact Number -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Emergency Contact Number</span></label>
            <input type="text" name="emergency_contact_number" value="{{ old('emergency_contact_number') }}" class="input input-bordered w-full">
        </div>

        <!-- Salary -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Salary</span></label>
            <input type="number" name="salary" value="{{ old('salary') }}" class="input input-bordered w-full" step="0.01">
        </div>

        <!-- Status -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Status</span></label>
            <select name="status" class="select select-bordered w-full">
                <option value="1" {{ old('status')=='1'?'selected':'' }}>Active</option>
                <option value="0" {{ old('status')=='0'?'selected':'' }}>Inactive</option>
            </select>
        </div>

        <!-- Profile Image -->
        <div class="form-control w-full">
            <label class="label"><span class="label-text">Profile Image</span></label>
            <input type="file" name="image" class="file-input file-input-bordered w-full" accept="image/*">
        </div>

        <!-- Submit -->
        <div class="form-control mt-6">
            <button type="submit" class="btn btn-primary w-full">Register</button>
        </div>
    </form>
</x-guest-layout>

<!-- Toggle Password Script -->
<script>
function togglePassword() {
    const pwd = document.getElementById('password');
    pwd.type = pwd.type === 'password' ? 'text' : 'password';
}
function toggleConfirmPassword() {
    const pwd = document.getElementById('password_confirmation');
    pwd.type = pwd.type === 'password' ? 'text' : 'password';
}
</script>
