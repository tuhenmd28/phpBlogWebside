﻿<?php include 'inc/header.php' ?>
<?php include 'inc/sideBar.php' ?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 
                        <?php
                        if(isset($_GET['submit'])){

                            $name = $_GET['name'];
                            $sql = "INSERT INTO categories( name) VALUES ('$name')";
                            $result = $dbCon->select($sql);
                        }
                        
                        ?>					
                 <form method="get" action="">
                    <table class="form">
                        <tr>
                            <td>
                                <input type="text" name="name" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'inc/footer.php' ?>
