<html>
    <head>
       <title>menggunakan metode post</title>
    </head>
    <body>
        <h1>menggunakan metode post</h1>
        <form method="POST">
        <!-- passing data si dalam body request tanpa menampilkan secara url -->
            <div>
                <label>email</label><br>
                <input type="email" name="email">
            </div>
            <div>
                <label>password</label><br>
                <input type="password" name="password">
            </div>
            <div>
                <button>login</button>
            </div>
            <?php 
            $email = @$_POST['email'];
            $password = @$_POST['password'];

            echo "email = {$email} <br>";
            echo "password = {$password}";
            ?>
        </form>
    </body>
</html>