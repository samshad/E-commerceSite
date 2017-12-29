<?php
include_once "view/inc_header.php";
include_once "view/inc_menu.php";
?>
<section>
     <div class="cartItems">
        <div class="wrapper" style="width: 100%">
        <div class="left-bar">
                
                <div style=" margin:5px; margin-left:90px">
				    <img class="img-circle" src="raw/propic.jpg" style="margin:15px">
			    </div>
                <h1 style="color: antiquewhite">Nafeez Zawad Hossain</h1>
                <hr>
                <nav>
                    <ul style="background-color:#444141;">
                        <li>
                            <a href="dashboard.html"><i class="fa fa-tachometer" aria-hidden="true" style="color: white"><font face="Arial" style="margin:10px">Dashboard</font></i></a>
                        </li> <br><br>
                        
                        <li>
                            <a href="official_info.html"><i class="fa fa-info-circle" aria-hidden="true"><font face="Arial" style="margin:10px">Official Info</font></i></a>
                        </li><br><br>
                        
                        <li>
                            <a href="reports.html"><i class="fa fa-file-text" aria-hidden="true"><font face="Arial" style="margin:10px">Reports</font></i></a>
                        </li><br><br>
                        
                        <li>
                            <a href="delivery_info.html"><i class="fa fa-cart-arrow-down" aria-hidden="true"><font face="Arial" style="margin:10px">Delivery Info</font></i></a>
                        </li><br><br>
                        
                        <li>
                            <a href="registration_info.html"><i class="fa fa-registered" aria-hidden="true"><font face="Arial" style="margin:10px">Registration Info</font></i></a>
                        </li><br><br>
                        
                        <li>
                            <a href="add_item.html"><i class="fa fa-plus-circle" aria-hidden="true"><font face="Arial" style="margin:10px">Add Item</font></i></a>
                        </li><br><br>
                        
                        <li>
                            <a href="home.html"><i class="fa fa-sign-out" aria-hidden="true"><font face="Arial" style="margin:10px">Logout</font></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <br>

            <div class="" style="position: relative; left: 500; width: 50%">
               
				<div style="position: relative;  background-color: grey; height: 300; ">
					
					<div style="margin:5px; position: relative; right: 150">
							<font face="Arial" size="5" color="white"><b>Visitor Statistics</b></font>
					</div>
					
					<div style=" bottom: 500; right: 20">
							<img src="visitor.png" width="700">
					</div>
						
				</div>
		
				<div id="Notification" style="position: relative; right: ;bottom: 200; background-color: grey; clear: left">
					
						<font face="Arial" size="5" color="white"><b>Notifications</b></font>
							<hr>
							<div style="float:left">
							<i class="fa fa-bullhorn" aria-hidden="true" style="color:white"><label class="ViewProfile_Profile2" style="color:white">ID 0112 payment is received</label></i>
							</div>
							
							<div style="float:right">
							<label class="ViewProfile_Profile2" style="color:white">DEC 21</label>
							</div>
							<br>
							<hr>
							
							<div style="float:left">
							<i class="fa fa-bullhorn" aria-hidden="true" style="color:white"><label class="ViewProfile_Profile2" style="color:white">ID 0112 account is been activated</label></i>
							</div>
							
							<div style="float:right">
							<label class="ViewProfile_Profile2" style="color:white">DEC 18</label>
							</div>
							<br>
							<hr>
						
				</div>
				
				
				
				<div id="Mothly" style="clear: left; position: relative; right: ;bottom: 200; background-color: grey">
					
					
					<div style="margin:5px; position: relative; right: ">
							<font face="Arial" size="5" color="white"><b>Daily Sales</b></font>
					</div>
					
					<div style="margin:5px">
							<img src="Monthly.png" width="300px" height="300px">
					</div>
						
				</div>
				
				<div id="Mothly" style="position: relative; right: ; bottom: 200;background-color: grey">
					
					
					<div style="margin:5px; position: relative; right: ">
							<font face="Arial" size="5" color="white"><b>Monthly Sales</b></font>
					</div>
					
					<div style="margin:5px">
							<img src="Monthly.png" width="300px" height="300px">
					</div>
						
				</div>
				
				<div id="Yearly" style="position: relative; right: ;bottom: 200; background-color: grey">
				
					<div style="margin:5px">
							<font face="Arial" size="5" color="white"><b>Yearly Sales</b></font>
					</div>
					
					<div style="margin:5px">
							<img src="Yearly.png" width="300px" height="300px">
					</div>
					
						
				</div>
				
				



               
            </div>
         </div>
    </div>
</section>

<?php
include_once "view/inc_footer.php";
?>