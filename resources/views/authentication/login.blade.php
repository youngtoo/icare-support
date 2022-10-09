<x-app>
    <x-slot:pageTitle>Login </x-slot>

    <div>

        <form action="/login" method="POST" id="loginform">
            @csrf
            <div class="mb-3">
            <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" id="useremail">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password"  class="form-control form-control-sm" placeholder="Password"  id="userpassword">
            </div>
                
            <input type="submit" class="btn btn-outline-dark btn-sm" value="Login">
        </form>
    </div>
</x-app>