<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>


<!-- navbaar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Welcome</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#" active>Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">About us</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
<!-- 	end of navbar -->

<!-- main content -->
	<div class="container">
        <h2 class="text-center pt-4">User Details</h2> 
       	<br>
       	<div class="table-responsive-sm">
	    	<table class="table table-hover table-striped table-condensed table-bordered">
	        	<thead>
	            	<tr>
		                <th class="text-center">Id</th>
		                <th class="text-center">Userame</th>
		                <th class="text-center">Email</th>
		                <th class="text-center">Password</th>
		                
		            </tr>
		        </thead>
		        <tbody>
		        <?php

		            include 'connection.php';

		            $sql ="select * from users";
		            
		            $query =mysqli_query($conn, $sql);

		            while($rows = mysqli_fetch_assoc($query))
		            {
		        ?>

		            <tr>
		            <td class="py-2"><?php echo $rows['id']; ?></td>
		            <td class="py-2"><?php echo $rows['username']; ?></td>
		            <td class="py-2"><?php echo $rows['email']; ?></td>
		            <td class="py-2"><?php echo $rows['password']; ?></td>

		        <?php
		            }
		        ?>

		        </tbody>
		    </table>
		</div>
	</div>


<!-- Footer -->
	
	<footer style="position: sticky;">
		<p class="p-3 bg-dark text-white text-center fixed" style="margin-top: 120px; margin-bottom: 0px;">&copy; 2022 sample website made for task</p>
	</footer>

<!-- 	end of footer -->

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>