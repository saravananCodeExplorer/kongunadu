<?php 

    include "dbconnect.php";
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
								<td>S.No</td>
                                <td> Name </td>
                                <td> UserName </td>
                                <td> Password </td>
                                <td> Course </td>
                                <td> contactNo  </td>
                                <td> City </td>
                            </tr>

                            <?php 
							
									$query = " select * from subform ";
									$result = mysqli_query($con,$query);
                                   if($result)
								   {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
										$id=$row['id'];
                                        $name = $row['name'];
                                        $username = $row['username'];
                                        $password = $row['pasword'];
                                        $course = $row['course'];
										$contactno=$row['contactno'];
										$city=$row['city'];
										echo '<tr>
											<th>'.$id.'</th>
										  <td>'.$name.'</td>
										   <td>'.$username.'</td>
										  <td>'.$password.'</td>
										  <td>'.$course.'</td>
										  <td>'.$contactno.'</td>
										   <td>'.$city.'</td>
										  <td>
										  <button ><a href="edit.php?editid='.$id.'" >Update</a></button>
										  <button ><a href="delete.php?deleteid='.$id.'" >Delete</a></button>
										  </td>
										</tr>';
                                   
									}	
								   }
							
							 
							
							?>
									
                                                                             
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>