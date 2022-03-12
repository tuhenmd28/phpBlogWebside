<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
		<?php if(!(session::get('userrole') == '1')){
          echo "<script>window.location='index.php';</script>";
                    
                     } ?>
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock"> 
                <?php
                if(isset($_POST['submit'])){
                    $msg = '';
                    $name = $formateObj->validation($_POST['username']);
                    $pass = $formateObj->validation(md5($_POST['password']));
                    $role = $formateObj->validation($_POST['role']);
                    $email = $formateObj->validation($_POST['email']);
                    $name = mysqli_real_escape_string($dbCon->link, $name);
                    $pass = mysqli_real_escape_string($dbCon->link, $pass);
                    $email = mysqli_real_escape_string($dbCon->link, $email);
                    $role = mysqli_real_escape_string($dbCon->link, $role);

                    $emailsql = "SELECT * FROM user where email = '$email' limit 1";
                    $checkresult = $dbCon->select($emailsql);
                    // var_dump($checkresult);exit;
                    // $checkemail = mysqli_fetch_assoc($checkresult);
                   if($checkresult){
                    $msg = "<span style='color:red;'> email already exits </span>";

                   }else{
                    if($name == '' || $pass =='' || $role == '' || $email == ''){
                        $msg = "<span style='color:red;'>Field must not be empty </span>";
                    }else{
                    $sql = "INSERT INTO  user (  userName , email,  password ,  role ) VALUES ('$name','$email','$pass','$role')";
                    $result = $dbCon->insert($sql);
                    if ($result) {
                        $msg = "<span style='color:green;'> User Create  Successfully.
                        </span>";
                        }else {
                            $msg = "<span style='color:red;'>User  Not Create !</span>";
                        }
                    }
                }
                }
                
                ?>					
                 <form method="POST" action="">
                    <table class="form">
                     <h3>  <?php if(isset($msg))
                     {echo $msg;} 
                     ?></h3> 
                        <tr>
                            <td><label for="">User Name</label></td>
                            <td>
                                <input type="text" name="username" placeholder="Enter user Name..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Email</label></td>
                            <td>
                                <input type="email" name="email" placeholder="Enter your email..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">Password</label></td>
                            <td>
                                <input type="password" name="password" placeholder="Enter Password..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td><label for="">User Role</label></td>
                            <td>
                               <select name="role" id="select">
                                    <option value="">Select User Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Author</option>
                                    <option value="3">Editor</option>
                               </select>
                            </td>
                            
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Create " />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>
