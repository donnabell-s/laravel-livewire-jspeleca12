<div class="row justify-content-center mt-4">
    <div class="col-md-4 bg-white p-5 rounded shadow-sm ">
        <div class="d-flex flex-row justify-content-center align-items-center mb-4">
            <h3>Login</h3>
        </div>
        

        @if ($error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endif

        <form wire:submit.prevent="login">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input wire:model.lazy="email" type="email" id="email" class="form-control" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input wire:model.lazy="password" type="password" id="password" class="form-control" required>
                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="mb-5">
                <!-- <input wire:model="remember" type="checkbox" class="form-check-input" id="remember"> -->
                <!-- <label class="form-check-label" for="remember">Remember me</label> -->
                <p>Don't have an account? <a href="{{ route('register') }}">Register Here</a></p>
            </div>

            <div class="d-flex flex-row justify-content-center align-items-center">
                 <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
           
        </form>
    </div>
</div>
