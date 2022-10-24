<?php
include_once 'includes/class.inc.php';


$user=new User();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-social/bootstrap-social.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

  
    
    
    <style>
          
       
.well {
  background: rgba(0, 0, 0, 0.5);
  border: none;
  height: 200px;
  margin-top:50px;
  margin-left:-50px;
  
}
.well1{
  margin-top:50px;

}
body{
   
  background-color:#D1C4E9;
background-repeat: no-repeat;
background-attachment: fixed;


}



h4 {
  color: #ffbb2b;
  font-size: 15px;
  
}
h6
{
  color: navajowhite;
  font-family:  monospace;
  font-size: 15px;
  
}
label
{
  color:#ffbb2b;
  font-size: 25px;
  font-weight: 100;
}
.btn1{
  margin-top:50px;
}



    </style>
    
    
</head>

<body>
<?php
        require 'header.php';
     ?>   

    <div class="container">
      
      
       <!-- <img class="img-responsive" src="img/balloon.jpg" style="width:100%; height:180px;">       -->
        <!-- nav hobe  -->
        
        
        
        <?php
        
        $sql="SELECT * FROM room_category";
        $result = mysqli_query($user->db, $sql);
        if($result)
        {
            if(mysqli_num_rows($result) > 0)
            {
//               ********************************************** Show Room Category***********************
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "
                            <div class='row'>
                            <div class='col-md-3'></div>
                            <div class='col-md-6 well'>
                                <h4>".$row['roomname']."</h4><hr>
                                <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                                <h6>Facilities: ".$row['facility']."</h6>
                                <h6>Price: ".$row['price']." tk/night.</h6>
                            </div>
                            <div class='col-md-3 btn1'>
                                <a href='booknow.php?roomname=".$row['roomname']."'><button class='btn btn-primary button'>Book Now</button> </a>
                            </div>   
                            </div>                   
                         "; 
                    
                    
                }
                
                
                          
            }
            else
            {
                echo "NO Data Exist";
            }
        }
        else
        {
            echo "Cannot connect to server".$result;
        }
        
        
        
        
        
        ?>


    </div>
    
    
    
    
    
 
    




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>