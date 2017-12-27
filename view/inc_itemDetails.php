
<hr class="hr_border"><br>
	
<content>
		<div id="Checkout-bar" style="float: left; width:33%">
			
			<div style="padding:15px">
				
				<?php 
                    $id=$_REQUEST['id'];
                    $type=$_REQUEST['type'];
                    $size=$_REQUEST['size'];
                    $price=$_REQUEST['price'];
                    $avail=$_REQUEST['avail'];
                    $cat=$_REQUEST['cat'];
                    $name=$_REQUEST['name'];
				echo '<img src = "products/'.$id.'.jpg" height="300px" width="300" style="margin:50">';
				?>	
			</div>	
			
		</div>
		
</content>
	
	
	<div style="float: right; margin-left: 130; width:50%; margin-top: 100">
	    <div align="center">
            <font face="Arial" Color="#444141" size="6" style="margin:15px"><p id="item_name"><b><?= $name ?></b></p></font>
        </div>
	    <hr class="hr_border"><br>
   
        <div id="Cart_Menu">
            <div style="margin-left:350">
               <font face="Arial" Color="#444141" size="4" style="margin:15px"><p id="item_name"><b>Product ID: <?=$id ?></b></p></font>
               
            </div>	
            <hr>
            <div >
                <div style="float: left; margin-left: 300">
                    <label>Item Gender: </label>
                    <br><br><br>

                    <label>Item Size: </label>
                    <br><br><br>

                    <label> Price: </label>
                    <br><br><br>
                    
                    <label>Item Available: </label>
                </div>
                
                  <div style="margin-left: 500">
                    <label id="gender"><?=$type ?></label>
                    <br><br><br>

                    <label id="size"><?=$size ?></label>
                    <br><br><br>

                    <label id="price"><?=$price ?></label>
                    <br><br><br>
                    
                    <label id="available"><?=$avail ?></label>
                </div>
                <br>
                <div align="center">
                     
                    <input type="number" placeholder="Quantity" value="1">
                    <button type="submit">Add To Cart</button>
                    <font face="Arial" color="#444141" size="3">|</font>
                    <button type="submit">Save For Later</button>
                    
                </div>

            </div>
        </div>
    
    </div>
    
    <br>
    
     <div class="wrappers" style="clear: both; width: 100%; margin-bottom: 100">
      <br>
      
         <b><font face="Arial" Color="#444141" size="6" style="margin:15px"><b>Relative Items</b></font></b>
         <hr class="hr_border"><br>
          <div align="center">
            <table>
            
				<?php 
                $filter['size'] = $size;
                $filter['type'] =$type;
                $filter['category'] =$cat;
               
                $products=getall_productsByFilter($filter);
                shuffle($products);        
                $cnt=0;
                
                foreach($products as $product)
                {
                    $cnt++;
                    if($cnt>3)
                    {
                        break;
                    }
                    $name= $product['Name'];
                    $price= $product['S_price'];
                    $id=$product['Products_id'];
                    $size= $product['Size'];
                    $type= $product['Type'];
				    $avail=$product['Stock']-$product['Sold'];
                    $cat=$product['Category'];
                    echo '<tr align = "left">
                   
                    <div class="dropdown">';
                       echo '<a href="itemDetails.php?id='.$id.'&price='.$price.'&size='.$size.'&type='.$type.'&avail='.$avail.'&cat='.$cat.'&name='.$name.'">';
                       echo '<img src = "products/'.$id.'.jpg" height="300px" width="300" style="margin:15" class="btn-social">';
                       echo '</a>';
                        
                       echo '<p class="price"><u>Price: '.$price.'</u></p>';
                    echo '</div>';
        
        	    echo '</tr>';
                }?>
                
                <br>
            
             </table>
        </div>        
         
    </div>
    <hr class="hr_border"><br>