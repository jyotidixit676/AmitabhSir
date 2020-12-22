<?php
   session_start();
   if(isset($_GET['logout']))
   {
         session_destroy();
   		header("location:login.php");	
   }
   else
   {
   		?>

               <script type="text/javascript">
               alert("You are still logged in!");
               </script>
         <?php
   }
?>