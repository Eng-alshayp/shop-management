<?php 

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'Alshayp@2020', 'market');?>
<!DOCTYPE html>
<html>
<head>
<title> Home page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<link rel="stylesheet" href="homestyle.css">

</head>


<body>
    
    
    <form method="post" action="home.php">
        <div class="header">
        <h2><i class="fa-solid fa-store"></i>   HOme page</h2>
        </div>
<hr>
          
<table >
    <thead>
        <tr>
            <th> No.</th>
            <th>Item_Name</th>
            <th>Price</th>
            <th>Exp.D</th>
            <th>Type</th>
            <th>Notes</th>
        </tr>
    </thead>



  <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['id'].'</li>';
                            }?></td>

                            
     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['itemname'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['price'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['exp_d'].'</li>';

                            }?></td>

     <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['type'].'</li>';
                            }?></td>
 <td> <?php
      
                       $query= "select * from items ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['notes'].'</li>';
                            }?></td>


                            
     <tr>  
        
	</form>
    </body>
</html>