<html>
   <head>
       <title>kalkulator biasa</title>
   </head>
   <body>
       <h1>kalkulatoe biasa</h1>
       <form><!--  bersifat get secara default tanpa harus method    -->
       <input type="number" name="angka1">
       <select name="operator">
           <option select disable>pilih operator</option>
           <option value="+">+</option>
           <option value="-">-</option>
           <option value="*">*</option>
           <option value="/">/</option>
       </select>
       <input type="number" name="angka2">
       <div style="margin-top:10px">
           <button type="reset">clear</button>
           <button type="submit">hitung</button>
       </div>
       <!-- logika kalku{lator biasa -->
         <?php 
           if ($_GET):
            $angka1 = (double) @$_GET['angka1'];
            $angka2 = (double) @$_GET['angka2'];
            $operator = @$_GET['operator'];
            // buat logika untuk penjumlahan 
            switch ($operator){
                case '+':
                   $hasil = $angka1 + $angka2;
                break;
                case '-':
                   $hasil = $angka1 - $angka2;
                break;
                case '*':
                   $hasil = $angka1 * $angka2;
                break;
                case '/':
                   $hasil = $angka1 / $angka2;
                break;
            }
         ?>
         <div style="margin-top:10px">
             hasil : <strong><?php echo $hasil ?></strong>
         </div>
         <?php 
         endif;
         ?>
       <!-- end logika -->
       </form>
   </body>
</html>