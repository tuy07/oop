<html>
</head>
      <title>formarray1</title>
</head>     
<body>
   <hr>
   <legend><h2 align = "center">form array</h2></legend>
   <hr>     
 <form action=""menthod="get" name ="input">
    masukan angka <input type="number" name = "jml" min="1" max="10" required>
    <button name ="submit">submit</button>
    <hr>
</form>
    <?php
    if (isset($_GET['submit'])) {
        $angka =$_GET['jml'];
        for ($i=0; $i < $angka ; $i++) {
            ?>
            <from action="formarray.php" method="post" name="submit"> 
            <table>
              <tr>
                  <td>nama</td>   
                  <td><input type ="text" name="nama[]"></td>
                  <td>kelas</td>
                  <td><input type="text" name="kelas[]"></td> 
                  <br>         
               </tr>
            </table>
            
      <?php
              }
        ?>
         <tr>
           <td><button name="submit" name="input">submit</button></td>
           <td><button name= "reset" name="reset">Reset</button><td>
         </tr>
   <?php   
         }
        ?> 
        </form>
   </body>
</html>