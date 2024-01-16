<?php
include './layouts/top.php';
?>

<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
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

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
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

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">
                    <?php
                    $count_no=$db->count_rows_table("userdetails") ;
                            foreach($count_no as $cn)
                            {
                                echo $cn[0];
                            }
                            ?>
                    </h3>
                    <p class="fs-5">Users</p>
                </div>
                <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
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

    <div class="row my-5">
        <h3 class="fs-4 mb-3">Recent Items</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
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
               
                
                $items = $db->fetch_all_items();
               
                foreach ($items as $item) { 
                    echo "
                    <tr>
                        <th scope='row' style='color:red;'>".$item["id"]."</th>                       
                        <td  style='color:green;'>".$item["title"]."</td>
                        <td  style='color:blue;'>".$item["module_id"]."</td>
                        <td  style='color:blue;'>".$item["categorie"]."</td>
                        <td>".$item["publish_date"]."</td>
                        <td>".$item["publish_by"]."</td>
                        <td>Update/delete</td>
                        <td>
                            <a href='#'> <i class='fas fa-eye'></i>
                             </a>
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