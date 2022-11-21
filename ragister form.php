<form action="" method="POST">
    <label >Name</label>
    <input type="text" name="name" required>
       <br> <br>

    <label >Email</label>
    <input type="email" name="email" required>
            <br> <br>

    <label >Phon Nuber</label>
   <input type="text" name="p_number" required>
       <br> <br>


 <input type="radio"  name="radio" value="male" required>
 <label >male</label>
 <input type="radio"  name="radio" value="fmale" required>
 <label >female</label>
       <br> <br>


     <label > Profile picture</label>
     <input type="file" name="p_picture" required>
       <br> <br>
 
   <input type="submit" name="submit">
</form>

    <?php

    include "conn.php";

    
      if (isset($_POST['submit'])) {

         $name = $_POST['name'];
         $email = $_POST['email'];
         $p_number = $_POST['p_number'];
         $radio = $_POST['radio'];
         $p_picture = $_POST['p_picture'];

    
         $sql = mysqli_query($conn, "INSERT into customer( `name`, `email`, `phon_number`, `gender`, `p_picture`) VALUES ('$name','$email','$p_number','$radio','$p_picture')");
         if($sql)
         {

            echo "record successfully saved";
         }
         else {
                 
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              
               }
      }
	