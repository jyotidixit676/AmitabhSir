<?php  
if(isset($_POST['submit']))  
{  
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname="bigb"; 
   $conn=new mysqli($servername, $username, $password,$dbname);
   if(mysqli_connect_error()){
      die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
   }

   else
   {
      $checkbox1=$_POST['topic']; 
      $chk="";  
      foreach($checkbox1 as $chk1)  
      {  
         $chk .= $chk1.",";  
      }  
      $name = $_POST['name'];
      $suggestion = $_POST['suggestion'];
      $sql="INSERT INTO feedback (name,topic,suggest)
         values('$name','$chk','$suggestion')";
      if($conn->query($sql))  
      {  
         ?>
         <script type="text/javascript">
            alert("Feedback submitted successfully!");
            location.replace("about.php");
         </script>';
         <?php
      }  
      else  
      {  
         ?>
         <script>alert("Unsuccessful feedback submission!")</script>
         <?php
         header("location:feedback.php"); 
      }  
   }
}
?>