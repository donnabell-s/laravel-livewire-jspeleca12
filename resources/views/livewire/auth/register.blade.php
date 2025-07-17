<div class="row justify-content-center mt-4">
    <div class="col-md-4 bg-white p-5 rounded shadow-sm ">
        <div class="d-flex flex-row justify-content-center align-items-center mb-4">
            <h3>Register</h3>
        </div>
        

        <form wire:submit.prevent="register">
            <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input wire:model.lazy="name" type="text" id="name" class="form-control">
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input wire:model.lazy="email" type="email" id="email" class="form-control">
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input wire:model.lazy="password" type="password" id="password" class="form-control">
                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-2">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input wire:model.lazy="password_confirmation" type="password" id="password_confirmation" class="form-control">
            </div>
            
            <div class="mb-5">
                <!-- <input wire:model="remember" type="checkbox" class="form-check-input" id="remember"> -->
                <!-- <label class="form-check-label" for="remember">Remember me</label> -->
                <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
            </div>

            
            <div class="d-flex flex-row justify-content-center align-items-center">
                 <button type="submit" class="btn btn-success w-100">Register</button>
            </div>
        </form>
    </div>
</div>
