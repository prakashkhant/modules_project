<?php
include './layouts/top.php';
?>
<main>
    <!-- <div class="container-fluid px-4 "> -->
    <div class="page-header ">
        <p>Admin Tab</p>
    </div>

    <div class="p-0 bg-white shadow-sm d-flex justify-content-around align-items-center rounded w-25 m-3">
        <div>
            <p class="fs-5 fw-bold">Total Admins</p>
            <!-- here php scrip for admil total -->
            <h3 class="fs-2">3</h3>
        </div>
        <i class="fas fa-user-tie fs-1 primary-text border rounded-full secondary-bg p-3"></i>
    </div>

    <div class="create-admin ">
        <h1 class="heading mb-4">
            Create new Admin
        </h1>
    <form action="#" method="post" class="addadmin ">
            <div>
                <label for="admin_name">
                    Admin Name :
                </label>
                <input type="text" name="tbadminname" />

            </div>
            <div>
                <input type="submit" value="Create">
            </div>
        </form>
        
    </div>
    <div class="admin-img">
            <img src="./images/admintab.png" alt="" srcset="">
        </div>
    <div class="main-content  p-2">

        <!-- </div> -->

</main>




<?php
include './layouts/bottom.php';
?>