<?php
require_once "db_connect.php";

function isUniqueEmail($email){
	$sql = "SELECT * FROM customer WHERE Email = '$email' LIMIT 1";
	$result = executeSQL($sql);
	
	$ans = array();
	$ans = mysqli_fetch_assoc($result);
	
	if(count($ans) != 0) return false;
	else return true;
}

function isUniqueUserName($name){
	$sql = "SELECT * FROM customer WHERE Username = '$name' LIMIT 1";
	$result = executeSQL($sql);
	
	$ans = array();
	$ans = mysqli_fetch_assoc($result);
	
	if(count($ans) != 0) return false;
	else return true;
}

function addUsers($users){
    $sql = "INSERT INTO users(Username, Password, Type, Status) VALUES('$users[uname]', '$users[pass]', '$users[type]', 'valid')";
    
    $result = executeSQL($sql);
    
    if($result == true){
        return true;
    }
    
    return false;
}

function addCustomer($customer){
    $sql = "INSERT INTO customer(First_name, Last_name, Email, Username, Password, Status, DOJ) VALUES('$customer[fname]', '$customer[lname]', '$customer[email]', '$customer[uname]', '$customer[pass]', 'valid', '$customer[doj]')";
    
    $result = executeSQL($sql);
    
    $customer['type'] = "customer";
    
    if($result == true){
        if(addUsers($customer)){
			return true;
	    }
    }
    
    return false;
}

function getCustomerByUsername($customer){
	$sql = "SELECT * FROM customer WHERE Username = '$customer'";
	$result = executeSQL($sql);
	
	$customer=mysqli_fetch_assoc($result);
	
	return $customer;
}

function editUserDOB($customer){
	$sql = "UPDATE customer SET DOB='$customer[dob]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserMobile($customer){
	$sql = "UPDATE customer SET Phone='$customer[mobile]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserGender($customer){
	$sql = "UPDATE customer SET Gender='$customer[gender]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserEmail($customer){
	$sql = "UPDATE customer SET Email='$customer[email]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserFname($customer){
	$sql = "UPDATE customer SET First_name='$customer[fname]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

function editUserLname($customer){
	$sql = "UPDATE customer SET Last_name='$customer[lname]' WHERE Username='$customer[username]'";
	
	$result = executeSQL($sql);
	
	return $result;
}

/*---------------------------------For Product Showcase-------------------------------------*/

function getall_productsByCategory($all_productscategory){
        
        $type= $all_productscategory['type'];
        
        $cat=$all_productscategory['category'];
        
        if($cat=="all")
        {
            $sql = "SELECT * from all_products WHERE Type='$type'";
        }
        
        else
            $sql = "SELECT * FROM all_products WHERE Type = '$type' AND Category = '$cat'";
        
        $result = executeSQL($sql);
        
        $all_products = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $all_products[$i] = $row;
        }
        
        if($result!=true)
        {
             echo "<script>
                    alert('Failed From all products');
                    
                   </script>";
        }
        
        return $all_products;
}

function getall_productsBySize($all_productssize){
        
        $type= $all_productssize['type'];
        
        $cat=$all_productssize['category'];
        
        if($cat=="all")
        {
            $sql = "SELECT * from all_products WHERE Type='$type' AND Size='$all_productssize[size]'";
        }
        
        
        else $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' AND Size='$all_productssize[size]'";
        
        $result = executeSQL($sql);
        
        $all_products = array();
    
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $all_products[$i] = $row;
        }
        
        if($result!=true)
        {
            echo "<script>
                    alert('Failed From all products');
                    
                 </script>";
        }
        
        return $all_products;
}

function getall_productsBySprice($all_productss_price){
        
        $type= $all_productss_price['type'];
        $cat=$all_productss_price['category'];
        
        if($cat=="all")
        {
            if($all_productss_price['price']=="1000")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND S_price<1000";
            }

            if($all_productss_price['price']=="1500")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND S_price>=1000 AND S_price<=1500";
            }

            if($all_productss_price['price']=="2000")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND S_price>=1500 AND S_price<=2000";
            }

            if($all_productss_price['price']=="2500")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND S_price>=2000 AND S_price<=2500";
            }

            if($all_productss_price['price']=="2500")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND S_price>=2500";
            }
        }
        
        else
        {
            if($all_productss_price['price']=="1000")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' AND S_price<1000";
            }

            if($all_productss_price['price']=="1500")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' AND S_price>=1000 AND S_price<=1500";
            }

            if($all_productss_price['price']=="2000")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' AND S_price>=1500 AND S_price<=2000";
            }

            if($all_productss_price['price']=="2500")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' AND S_price>=2000 AND S_price<=2500";
            }

            if($all_productss_price['price']=="2500")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' AND S_price>=2500";
            }
        }
        
        
       
        $result = executeSQL($sql);
        
        var_dump($result);
        
        $all_products = array();
    
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $all_products[$i] = $row;
        }
        
         if($result!=true)
        {
             echo "<script>
                    alert('Failed From all products');
                    
                 </script>";
        }
        
        return $all_products;
}

function getall_productsBySold($all_productssold){
       
        $type= $all_productssold['type'];
        $cat=$all_productssold['category'];
        
        if($cat=="all")
        {
            $sql = "SELECT * from all_products WHERE Type='$type' ORDER BY Sold DESC";
        }
       
        $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' ORDER BY Sold DESC";
        
       
        $result = executeSQL($sql);
        
        $all_products = array();
    
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $all_products[$i] = $row;
        }
        
         if($result!=true)
        {
             echo "<script>
                    alert('Failed From all products');
                    
                 </script>";
        }
        
        return $all_products;
    }

    function getall_productsBySort($all_productssort){
        
        $type= $all_productssort['type'];
        $cat=$all_productssort['category'];
        
        if($cat=="all")
        {
            if($all_productssort['srt']=="asc")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' ORDER BY S_price ASC";
            }
            
            if($all_productssort['srt']=="dsc")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' ORDER BY S_price DESC";
            }

            if($all_productssort['srt']=="sold")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' ORDER BY Sold DESC";
            }

            if($all_productssort['srt']=="arrival")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' ORDER BY Products_id DESC";
            }
        }
        
        
        else 
        {
            if($all_productssort['srt']=="asc")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' ORDER BY S_price ASC";
            }
        
            if($all_productssort['srt']=="dsc")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' ORDER BY S_price DESC";
            }

            if($all_productssort['srt']=="sold")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' ORDER BY Sold DESC";
            }

            if($all_productssort['srt']=="arrival")
            {
                $sql = "SELECT * from all_products WHERE Type='$type' AND Category='$cat' ORDER BY Products_id DESC";
            }
        }
        
       
        $result = executeSQL($sql);
        
        var_dump($result);
        
        $all_products = array();
        
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $all_products[$i] = $row;
        }
        
         if($result!=true)
        {
             echo "<script>
                    alert('Failed From all products');
                    
                 </script>";
        }
        
        return $all_products;
}

 function getall_productsByFilter($filter){
        $sz="$filter[size]";
        $cat="$filter[category]";
        $tp="$filter[type]";
        
        $sql = "SELECT * FROM all_products WHERE Type = '$tp'";
     
        $result = executeSQL($sql);
    
        $all_products = array();
     
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $all_products[$i] = $row;
        }
        
        if($result!=true)
        {
             echo "<script>
                    alert('Failed From all products');
                    
                 </script>";
        }
        
        return $all_products;
}

?>