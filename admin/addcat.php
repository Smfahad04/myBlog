﻿<?php
    include "inc/header_admin.php";
    include "inc/sidebar_admin.php";

    $db = new Database();
    $fm = new Format();
?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New Category</h2>
               <div class="block copyblock"> 

                <?php 
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        $name = $_POST['name'];

                        if(empty($name)){
                            echo "<span style='color:red'>Field mustn't be empty</span>";
                        }else{

                            $query = "insert into tbl_category(name) values('$name')";
                            $result = $db->insert($query);
                            if($result){
                                echo "<span style='color:green'>Category inserted Successfully</span>";
                            }else{
                                echo "<span style='color:red'>Category not inserted Successfully</span>";
                            }
                        }
                    }
                ?>

                 <form action="" method="post">
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

<?php
    include "inc/footer_admin.php";
?>