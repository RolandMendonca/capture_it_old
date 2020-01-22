<?php
$server="localhost";
    $user="root";
$pass="";
$db="final";
$con=mysqli_connect($server,$user,$pass,$db);
if(!$con)
{
echo"Error in connection".mysqli_error($con);
}
?>
<?php 
include("header.php");
if(isset($_POST[submit]))
{

    $sql = "INSERT INTO orgreg(name,logid,password,address,contno,status) values('".$_POST[customername]."','".$_POST[loginid]."','".$_POST[password]."','".$_POST[address]."','".$_POST[contactno]."','Active')";
	 $abc = mysqli_query($con,$sql);
		echo mysqli_error($con);
		if(mysqli_affected_rows($con) == 1)
		{
			echo "<script>alert('Orgnizer Registration done Successfully...');</script>";
			echo "<script>window.location='orgzrlogin.php';</script>";
		}
    else{
        echo"<script>alert('Email id already exist');</script>";
        
    }
		
}  		
?>			
			<!-- Sub Page Banner
			============================================= -->
			<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
				
				<div class="overlay"></div>
				
				<div class="container">
					<h1 class="entry-title">Organizer Registration Panel</h1>
					<p>Kindly enter Registration details here...</p>
				</div>
				
			</section>
    
    

    
    
			<!-- Sub Page Content
			============================================= -->
			<div id="sub-page-content" class="clearfix">

				<div class="container">
					
					<div class="row">
						
						<div class="col-md-12 clearfix">
					
							   
							<div class="row">
							
								<div class="col-md-3">
								
									<div class="cart-shipping clearfix">
										
										
										<div>
											<label >Enter Organizer Registration Details...</label>
										</div>
										
								    </div> 
									
								</div>
								
								
								<div class="col-md-9">
									
									<div class="cart-shipping clearfix">
									
<form method="post" action="" name="frm" onsubmit="return validateform()">

			<label class="col-md-3">user Name</label>
			<div class="col-md-9">
				<input type="text" name="customername" class="form-control" >
			</div>
					
			<label class="col-md-3">Email ID</label>
			<div class="col-md-9">
				<input type="text" name="loginid" class="form-control"  >
			</div>
			
			<label class="col-md-3">Password</label>
			<div class="col-md-9">
				<input type="password" name="password" class="form-control"  >
			</div>
			
			<label class="col-md-3">Confirm Password</label>
			<div class="col-md-9">
				<input type="password" name="cpassword" class="form-control" >
			</div>
															
			<label class="col-md-3">Address</label>
			<div class="col-md-9">
				<textarea name="address" class="form-control"></textarea>
			</div>
				
			<label class="col-md-3">Contact No.</label>
			<div class="col-md-9">
				<input type="text" name="contactno" class="form-control" >
			</div>
				
			<label class="col-md-3">&nbsp;</label>
			<div class="col-md-9">
				<center><input type="submit" name="submit" value="Click here to Register" class="form-control"></center>
			</div>			
</form>

								    </div> 
								   
								</div>
								
							
							</div>
							   
						</div>
						
					</div>
					
				</div>
    
    
	
	
		</div><!--end sub-page-content-->
    

		
		<div class="colourfull-row"></div>
	
	
	
		<?php 
include("footer.php");
?>
<script>
function validateform()
{
	var expnumericExpression = /^[0-9]+$/;
	var expalphaExp = /^[a-zA-Z]+$/;
	var expalphanumberExp = /^[0-9a-zA-Z]+$/;
	var expalphaspaceExp = /^[a-zA-Z\s]+$/;
	var expemailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	
	if(document.frm.customername.value == "")
	{
		alert("Customer name should not be empty.. ");
		return false;
	}
	else if(!document.frm.customername.value.match(expalphaspaceExp))
	{
		alert("Entered customer name is not valid..");
		return false;
	}
	else if(document.frm.loginid.value == "")
	{
		alert("Login ID should not be empty.. ");
		return false;
	}
	else if(!document.frm.loginid.value.match(expemailExp))
	{
		alert("Entered Email ID is not valid..")
		return false;
	}
	else if(document.frm.password.value == "")
	{
		alert("Password should not be empty.. ");
		return false;
	}
	else if(document.frm.password.value.length < 6)
	{
		alert("Password should contain more than 6 characters... ");
		return false;
	}
	else if(document.frm.cpassword.value == "")
	{
		alert("Confirm password should not be empty.. ");
		return false;
	}
	else if(document.frm.password.value != document.frm.cpassword.value)
	{
		alert("Password and Confirm password is not matching... ");
		return false;
	}
	else if(document.frm.contactno.value == "")
	{
		alert("Contact Number should not be empty.. ");
		return false;
	}
	else if(document.frm.contactno.value.length != 10)
	{
		alert("Kindly enter 10 digit contact number... ");
		return false;
	}	
	else
	{
		return true;
	}
}
</script>    