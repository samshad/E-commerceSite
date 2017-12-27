<hr class="hr_border">

<?php 
    
    $cnt=0;

    $GLOBALS['cnt'];

    if(!empty($_REQUEST['sz']))
    {
        $filter['size']=$_REQUEST['sz'];  
        $GLOBALS['cnt']=1;
    }

    if(!empty($_REQUEST['sort']))
    {
        $filter['srt']=$_REQUEST['sort']; 
        $GLOBALS['cnt']=2;
    }  

    if(!empty($_REQUEST['price']))
    {
        $filter['price']=$_REQUEST['price']; 
        $GLOBALS['cnt']=3;
    }  
    
    if(!empty($_REQUEST['cate']))
    {
        $_REQUEST['category']=$_REQUEST['cate']; 
        $GLOBALS['cnt']=4;
    }
    
    
    $filter['type'] ='men';
    $filter['category'] =$_REQUEST['category'];
    $GLOBALS['category']=$_REQUEST['category'];

?>

<div class="pages">
    <ul>
        <li class="menu_font"><a href="MenSite.php?cate=all"><font color="black" face="Impact" style = "margin:15" size = "3">Sort</font> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdowns">
               <?php
                echo '<li><a href="MenSite.php?sort=asc&category='.$GLOBALS['category'].'"><font class="fnt" >Price Ascending</font></a></li>';
                        
                echo '<li><a href="MenSite.php?sort=dsc&category='.$GLOBALS['category'].'"><font class="fnt" >Price Descending</font></a></li>';
                       
                echo '<li><a href="MenSite.php?sort=sold&category='.$GLOBALS['category'].'"><font class="fnt" >Best Sellers</font></a></li>';
                        
                echo '<li><a href="MenSite.php?sort=arrival&category='.$GLOBALS['category'].'"><font class="fnt" >New Arrivals</font></a></li>';
                ?>       
                
            </ul>
        </li>
        
        <li class="menu_font"><a href="MenSite.php?cate=all"><font color="black" face="Impact" style = "margin:15" size = "3">Price</font> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdowns">
               <?php 
                echo '<li><a href="MenSite.php?price=1000&category='.$GLOBALS['category'].'"><font class="fnt" >< 1000</font></a></li>';
                       
                echo '<li><a href="MenSite.php?price=1500&category='.$GLOBALS['category'].'"><font class="fnt" >1000-1500</font></a></li>';
                        
                echo '<li><a href="MenSite.php?price=2000&category='.$GLOBALS['category'].'"><font class="fnt" >1500-2000</font></a></li>';
                       
                echo '<li><a href="MenSite.php?price=2500&category='.$GLOBALS['category'].'"><font class="fnt" >2000-2500</font></a></li>';
                       
                echo '<li><a href="MenSite.php?price=2500&category='.$GLOBALS['category'].'"><font class="fnt" >> 2500</font></a></li>';
               ?>
            </ul>
        </li>
        
        <li class="menu_font" id="size"><a href="MenSite.php?cate=all"><font color="black" face="Impact" style = "margin:15" size = "3">Size</font> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdowns">
               <?php 
                
                echo '<li value="xl"><a href="MenSite.php?sz=xl&category='.$GLOBALS['category'].'"><font class="fnt">XL</font></a></li>';
                        
                echo '<li value="l"><a href="MenSite.php?sz=l&category='.$GLOBALS['category'].'"><font class="fnt">LARGE</font></a></li>';
                        
                echo '<li value="m"><a href="MenSite.php?sz=m&category='.$GLOBALS['category'].'"><font class="fnt">MEDIUM</font></a></li>';
                        
                echo '<li value="s"><a href="MenSite.php?sz=s&category='.$GLOBALS['category'].'"><font class="fnt">SMALL</font></a></li>';
                 ?>       
            </ul>
        </li>
    </ul>  
          
</div>
<hr class="hr_border"><br>



<section> 
    <div class="wrapper">
      
       <div align="center">
            <table>
            
            <?php 
                 
                if($GLOBALS['cnt']==2)
                {
                    $products=getall_productsBySort($filter);
                } 
                
                if($GLOBALS['cnt']==1)
                {
                    $products=getall_productsBySize($filter);
                    //var_dump($products);
                }        
                
                if($GLOBALS['cnt']==3)
                    $products=getall_productsBySprice($filter);
                
                if($GLOBALS['cnt']==4)
                    $products=getall_productsByCategory($filter);
                      
                 
                foreach($products as $product)
                {
                    $name= $product['Name'];
                    $price= $product['S_price'];
                    $id=$product['Products_id'];
                    $size= $product['Size'];
                    $type= $product['Type'];
                    $cat=$product['Category'];
				    $avail=$product['Stock']-$product['Sold'];
                    echo '<tr align = "left">
                   
                    <div class="dropdown">';
                       echo '<a href="itemDetails.php?id='.$id.'&price='.$price.'&size='.$size.'&type='.$type.'&avail='.$avail.'&cat='.$cat.'&name='.$name.'">';
                       echo '<img src = "products/'.$id.'.jpg" height="300px" width="300" style="margin:15" class="btn-social">';
                       echo '</a>';
                        
                       echo '<p class="price"><u>Price: '.$price.'</u></p>';
                    echo '</div>';
								
        	    echo '</tr>';
                }?>		
             </table>
        </div>          
    </div>
</section>
<hr>
<div class="pages">
    <a href = ""><img src = "../Icon/left.png"  style="margin:" ></a>
    <a href = ""><font face="Arial Black" size="6" color="#444141" style="margin:10">1</font></a>
    <a href = ""><font face="Arial Black" size="6" color="#444141" style="margin:10">2</font></a>
	<a href = ""><font face="Arial Black" size="6" color="#444141" style="margin:10">3</font></a>
    <a href = ""><font face="Arial Black" size="6" color="#444141" style="margin:10">4</font></a>
	<a href = ""><img src = "../Icon/right.png"  style="margin:"></a>
</div>
<hr class="hr_border"><br>
