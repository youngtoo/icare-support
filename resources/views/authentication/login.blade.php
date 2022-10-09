<x-theme>
    <div>
        This is a login page

        <form action="" method="POST">
            @csrf
            <input type="email" name="useremail" id="useremail">
            <input type="password" name="userpassword" id="userpassword">
            <input type="submit" value="Login">
        </form>
    </div>
</x-theme>