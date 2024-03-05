<?php

include './layouts/top.php';
?>

<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-3 ">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center sub-rect">
                <div>
                    <h3 class="fs-2">
                        <?php 
                          include './database/db.php';
                          $db = new DB();
                            $count_no=$db->count_rows_table("modules") ;
                            foreach($count_no as $cn)
                            {
                                echo $cn[0];
                            }
                        ?>
                    </h3>
                    <p class="fs-5">Modules</p>
                </div>
                <i class="fas fa-sitemap fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3 ">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center sub-rect">
                <div>
                    <h3 class="fs-2">
                        <?php
                    $count_no=$db->count_rows_table("item") ;
                            foreach($count_no as $cn)
                            {
                                echo $cn[0];
                            }
                            ?>
                    </h3>
                    <p class="fs-5">Items</p>
                </div>
                <i class="fas fa-edit fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        

        <!-- <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">3</h3>
                    <p class="fs-5">Admins</p>
                </div>
                <i class="fas fa-user-tie fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div> -->
    </div>

    <div class="row my-5 ">
        <h3 class=" mb-3 table-heading"> <i class="fab fa-staylinked"></i> Recent Items : </h3>
        <div class="col ">
            <table class="table  shadow-sm  table-hover">
                <thead>
                    <tr class="heading-row">
                        <th scope="col" width="50">#id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Module</th>
                        <th scope="col">Category</th>
                        <th scope="col">Publish Date</th>
                        <th scope="col">Publish By</th>
                        <th scope="col">Actions</th>
                        <th scope="col">view</th>
                    </tr>
                </thead>
                <tbody>
                <?php
               
                
                $items = $db->fetch_all_user_items($uname);
               
                foreach ($items as $item) { 
                    echo "
                    <tr class='data-row'>
                        <th scope='row' style='color:red;'>".$item["id"]."</th>                       
                        <td  style='color:green;'>".$item["title"]."</td>
                        <td  style='color:blue;'>".$item["module_id"]."</td>
                        <td  style='color:blue;'>".$item["category"]."</td>
                        <td>".$item["publish_date"]."</td>
                        <td>".$item["publish_by"]."</td>
                        <td><a class='btn btn-success' href=''>Update </a>
                        <a class='btn btn-primary' href='delete-item.php?id=".$item["id"]."'>Delete </a></td>
                        <td>
                            <a href='#'> <i class='fas fa-eye'></i>
                            
                        </td>
                    </tr> ";
                     } ?>
                   
                    
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
<!-- /#page-content-wrapper -->

<?php
include './layouts/bottom.php';
?>