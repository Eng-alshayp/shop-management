<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin_Panel</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
   
	<div class="header">
		<h2><i class="fa-solid fa-shop-lock"></i>  Admin_Panel</h2>
	</div>

    <form method="post" action="adminpanel.php ">

       <?php include('errors.php'); ?>

         <div class="input">

			<input type="text" name="itemname" placeholder="Item Name" value="<?php echo $itemname ?>">
            </div>
         <div class="input">

         <input type="text" name="price"  placeholder="Price" value="<?php echo $price ?>" >
            </div>
         <div class="input">

			<input type="text" name="amount"  placeholder="Amount" value="<?php echo $amount ?>" >
        </div>
        <div class="input">

			<input type="text" name="exp_d"  placeholder="Exp / date" value="<?php echo $exp_d ?>" >
            </div>
        <div class="inputs">
          <p>
             <label class="product">Type of product</label>
             <select id = "myList" name="type" value="<?php echo $type ?>" >
                  <option value = "--"  >Select_Item</option>
               <option value = "Meat"  >Meat </option>
               <option value = "foodstuffs">foodstuffs</option>
               <option value = "Detergent">Detergent</option>
               <option value = "Candy">Candy</option>
                  <option value = "Paperwork">Paperwork</option>
             </select>
          </p>
       
            </div>
		
  
        <div class="input">
			<input type="text" name="notes" placeholder="Notes" value="<?php echo $notes ?>"  >
        </div>
              
        <button type="submit" class="btn" name="send"  >Save</button>
		
	</form>
</body>
</html>