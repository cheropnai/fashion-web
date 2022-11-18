<form class="search-form" action="" method="get">
                <section class="registration">
                            <ul>
                                <br><br>
                             
                                    <label for="user_id">User</label>
                                    <input type="text" class="input" name="user_id" value="<?php if(isset($_POST["user_id"])){echo $_GET["user_id"];}  ?>">
                                    <input type="submit" class="btn" value="SEARCH" name="search">
                                    
                                       
                </section>
        </form>
   
            <hr>
            <?php 
            require("connect.php");

                if(isset($_GET['user_id'])){
                    $user_id = $_GET['user_id'];
                    $sql = "select * from users where userID='$user_id'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        foreach($result as $row){

                    ?>
                    <form action="" method="POST" class="form">
                   
                            <label for="fname">First Name</label>
                            <input type="text" class="input" value="<?php echo $row['userName']; ?>" name="first_name">
                       <br><br>
                       
                            
                        
                            <label for="email">Email</label>
                            <input type="text" class="input" value="<?php echo $row['email']; ?>" name="email">
                        <br><br>
                        
                            <label for="password">Password</label>
                            <input type="text" class="input" value="<?php echo $row['userPass']; ?>" name="password">
                       <br><br>
                       
                            
                       
                            <input type="submit" class="btn"  value="UPDATE" name="update">
                            <?php
                                if(isset($_POST['update'])){
                                    $user_id = $_GET['user_id'];
                                    $sql = "UPDATE `user` SET userName='$_POST[first_name]',, email='$_POST[email]',`password`='$_POST[password]', WHERE `userID`='$user_id'";
                                    $execute = mysqli_query($conn, $sql);
                                    
                                    if($execute){
                                        echo "<h5 style=color:black;>Records updated Succesfully!</h5>";
                                    } else {echo "<h5 style=color:red;>Records not updated</h5>";}
                                }
                            ?>
                      <br><br>
                  
                    <?php
              }
                    } else{ echo "<h3 style=color:red;text-align:center;>No users found!</h3>";}
                }
                
                
            ?>
        </form>