<?php 
        //REQUEST FOR SYSTEM LOGO FROM DATABASE
        error_reporting(E_ALL & E_NOTICE);
        include 'db_conn.php';
        $sql = "SELECT * from system_images WHERE user ='system'";
        $query = $conn-> prepare($sql);
        $query->execute();
        $results=$query->fetch();
        
        
?>
<div class="container">
    
    <div class="row">
        <div class="image_col">
            <img class="system_logo" src="images/<?php echo $results ["pic_name"];?>">
        </div>
    </div>
</div>





