<x-app>
   
    <div class="d-flex align-items-center justify-content-center h-100">

        <form action="/login" method="POST" id="loginform" class="h-100">
            @csrf

            <div class="my-3 text-center">
                {{ config('app.name')}} <br>
                <span class="small">User Login</span>
            </div>
            <div class="mb-3">
            <input type="email" name="email" class="form-control form-control" placeholder="Email" id="useremail">

            @error('email')
                <div class="form-text text-danger small">{{ $message }}</div>
            @enderror
            </div>
            <div class="mb-3">
               
                <input type="password" name="password"  class="form-control form-control" placeholder="Password"  id="userpassword">
                @error('password')
                <div class="form-text text-danger small">{{ $message }}</div>
                @enderror
            </div>
                
            <input type="submit" class="btn btn-outline-dark btn-sm" value="Login">
        </form>
    </div>
</x-app>