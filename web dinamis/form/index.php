<html>
    <head>
        <title>form get dan post</title>
    </head>
    <body>
        <form>
           <div>
               <label>nama</label><br>
               <input type="text" name="nama" placehoder="masukan nama">
           </div>
           <div>
               <label>email</label><br>
               <input type="text" name="email" placehoder="masukan email">
           </div>
           <div>
                <button>submit</button>
           </div>
           <?php 
                // @berfungdi untul mengambah nilai menjadi null jika form 
                $nama = @$_GET['nama'];
                $email = @$_GET['email'];

                echo "nama = {$nama}";
                echo "<br>";
                echo "nama = {$email}";
           ?>
        </form>
    </body>
</html>