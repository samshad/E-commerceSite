<?php
echo '
<content>
		<div id="Checkout-bar" style="float: left; width:33%">
		
			
			
			<div align="center">
                <font face="Arial" Color="#444141" size="6" style="margin:15px" ><b>ORDER SUMMERY</b><p id="order_summery">(2 Items)</p></font>
			    <hr class="hr_border"><br>
			</div>
			
			<div style="padding:15px">
						<table width="400px" height="100px" >
							<tr>
								<td>Item Subtotal</td>
								<td>3000.00 Tk</td>
							</tr>
							
							<tr>
								<td>Shipping</td>
								<td>Free</td>
							</tr>
							
							<tr>
								<td>Discount</td>
								<td>--</td>
							</tr>
							
							<tr>
							    <td>Item #1 x 1</td>
							    <td>1000 BDT.</td>
							</tr>
							<tr>
							    <td>Item #2 x 1</td>
                                <td>2000 BDT.</td>
				            </tr>
							
							
							<tr>
                                <td><b>Total</b></td>
								<td>3000.00 Tk</td>
							</tr>
							
						</table>
					
			</div>
			
			<div align="center" width="400px">
				<button type="submit">Checkout (Online Payment)</button>
				 <font face="Arial" color="#444141" size="3">|</font>
				<button type="submit">Payment After Delivery</button>
			</div>
			
		</div>
		
</content>
	
	
	<div style="float: right; margin-left: 130; width:50%; margin-top: 40">
	    <div align="center">
		    <font face="Arial" Color="#444141" size="6" style="margin:15px"><b>SHOPPING CART</b></font>
        </div>
	    <hr class="hr_border"><br>
   
        <div id="Cart_Menu">
            <div style="float:left">
                <img src="Image/productf1.jpg"  height="150px" width="150px" style="margin:50px">
            </div>

            <div style="float:left ">
                <font face="Arial" Color="#444141" size="4" style="margin:15px"><b>Skirt For Kid</b></font>
                <hr>
                <table width="500px" height="100px">

                    <tr>
                        <td class="Checkout_Onside">Item</td>
                        <td class="Checkout_Onside2">Price</td>
                        <td class="Checkout_Onside2">Quantity</td>
                    </tr>

                    <tr>
                        <td class="Checkout_Onside">1</td>
                        <td class="Checkout_Onside2">1000.00 Tk</td>
                        <td class="Checkout_Onside2">1</td>
                    </tr>

                </table>
                <br>
                <div align="center">
                    <form action="">
                         <input type="number" placeholder="Quantity">
                         <button type="submit">Update</button>
                         <font face="Arial" color="#444141" size="3">|</font>
                         <button type="submit">Remove</button>
                         <font face="Arial" color="#444141" size="3">|</font>
                         <button type="submit">Save For Later</button>
                         <font face="Arial" color="#444141" size="3">|</font>
                         <button type="submit" formaction="item_details.html">Details</button>
                    </form>
                  
                    
                </div>

            </div>
        </div>

        <div id="Cart_Menu">
            <div style="float:left">
                <img src="Image/productf3.jpg"  height="150px" width="150px" style="margin:50px">
            </div>

            <div style="float:left ">
                <font face="Arial" Color="#444141" size="4" style="margin:15px"><b>Skirt For Woman</b></font>
                <hr>
                <table width="500px" height="100px">

                    <tr>
                        <td class="Checkout_Onside">Item</td>
                        <td class="Checkout_Onside2">Price</td>
                        <td class="Checkout_Onside2">Quantity</td>
                    </tr>

                    <tr>
                        <td class="Checkout_Onside">1</td>
                        <td class="Checkout_Onside2">2000.00 Tk</td>
                        <td class="Checkout_Onside2">1</td>
                    </tr>

                </table>
                <br>
                <div align="center">
                     <input type="number" placeholder="Input Quantity">
                     <button type="submit">Update</button>
                     <font face="Arial" color="#444141" size="3">|</font>
                     <button type="submit">Remove</button>
                      <font face="Arial" color="#444141" size="3">|</font>
                     <button type="submit">Save For Later</button>
                     <font face="Arial" color="#444141" size="3">|</font>
                     <button type="submit" formaction="item_details.html">Details</button>
                </div>

            </div>
        </div>
    
    </div>
    
    <br>
    
  <div class="wrappers" style="clear: both; width: 100%; margin-bottom: 100">
      <br>
      
         <b><font face="Arial" Color="#444141" size="6" style="margin:15px"><b>Bought Together</b></font></b>
         <hr class="hr_border"><br>
          <div align="center">
            <table>
            
				<tr align = "left">
                   
                    <div class="dropdown">
                        <a href="item_details.html"><img src =  "../Women Product/product2.jpg" height="300px" width="300px" style="margin:15" class="btn-social"></a>
                        <div class="dropdown-content">
                        
                        </div>
                    </div>
								
                    <div class="dropdown">
                         <a href="item_details.html"><img src =  "../Women Product/product3.jpg" height="300px" width="300px" style="margin:15" class="btn-social"></a>
                         <div class="dropdown-content">
                         
                         </div>
                    </div>

                    <div class="dropdown">
                         <a href="item_details.html"><img src =  "../Women Product/product6.jpg" height="300px" width="300px" style="margin:15" class="btn-social"></a>
                         <div class="dropdown-content">
                         
                         </div>
                    </div>
        
        	    </tr>
                
                <br>
                
							
             </table>
        </div>
      
        
    </div>';
?>