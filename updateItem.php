<?php
include 'layouts/top.php';
include 'database/db.php';
$db = new DB();
if (isset($_GET['mid'])) {
    $mid = $_GET['mid'];
} else {
    $mid = 1;
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch item data from database
    $item = $db->populate_item_content($id);
    
    if (!$item) {
        // Item not found, handle error
        echo 'Item not found';
        exit;
    }
} else {
    // No ID provided, handle error
    echo 'Item ID not provided';
    exit;
}
foreach($item as $item){
    $module_name = $item['module-name'];
    $cat_name = $item['cat-name'];
    $title = $item['tbTitle'];
    $description = $item['tdDescription'];
    $contentArea = $item['tdContentArea'];
    $publishBy = $item['tbPublishBy'];
    $photopath = $item['photopath'];
    $videopath = $item['tbvideopath'];
    $testLink = $item['tbTestLink'];
    $keywords = $item['tbKeywords'];
    $hours = $item['hours'];
    $minutes = $item['minutes'];
    $seconds = $item['seconds'];
}
?>

<div class="page-header mb-5">
    <h1>Add Item</h1>

</div>
<style>
    .image-box {
        width: 35%;
        box-shadow: inset;
        margin-left: 10px;
        position: sticky;
        top: 3rem;
        margin-bottom: 98px;
    }

    .form-box {
        background: rgba(255, 255, 255, 0.2);

        width: 55%;
        justify-content: center;
        padding-top: 4rem;
    }
    
</style>
<div class="row container-fluid ms-5  ">
    <div class="col-3 image-box">
        <div class="add-img  flex" style="width: 350px;">
            <img src="images/add-item.png" alt="" srcset="" width="100%" height="100%">
        </div>
    </div>
    <div class="col-12  form-box  flex pd-4" style="width: 700px;padding: bottem 10px;">
        <form class=" ms-2 mb-5" action="#" method="post">
            <div class="row mb-3">

                <div class="col-sm-5">
                    <select class="form-select form-select-sm " onchange="fillSubCategory()" id="module_name" name="module-name" aria-label="Small select example">

                        <?php
                        $module_list = $db->fetch_modules_list();

                        foreach ($module_list as $ml) {
                            if ($mid == $ml["mid"]) {
                                $s = "selected";
                            }
                            echo "<option value=" . $ml["mid"] . " $s >" . $ml["module_name"] . "</option>";
                            $s = "";
                        }
                        ?>
                    </select>

                </div>
                <div class="col-sm-5 ms-4">
                    <select class="form-select form-select-sm  " name="cat-name" id="cat-name" aria-label="Small select example">

                        <?php
                        $cat_list = $db->fetch_category_list($mid);

                        foreach ($cat_list as $cl) {

                            echo "<option value=" . $cl["mid"] . ">" . $cl["cat_name"] . "</option>";
                        }
                        ?>
                    </select>

                </div>
            </div>

            <div class="row mb-3 title">
                <label for="title" class="col-sm-2 col-form-label ">Title </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control mt-2" width="20" id="tbTitle" name="tbTitle">
                </div>
            </div>

            <div class="row mb-3 description">
                <label for="Description" class="col-sm-2 col-form-label ">Description</label>
                <div class="col-sm-8">
                    <textarea type="text" class="form-control mt-2" name="tdDescription" id="tdDescription" cols="40" rows="3"></textarea>
                </div>
            </div>
            <div class="row mb-3 contentArea">
                <label for="contentArea" class="col-sm-2 col-form-label ">Content </label>
                <div class="col-sm-9">
                    <textarea type="text" class="form-control mt-2" name="tdContentArea" id="tdContentArea" cols="40" rows="7"></textarea>
                </div>
            </div>
            <div class="row mb-3 publish-details">
                <label for="tbPublish" class="col-sm-2 col-form-label ">Publish name : </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control " id="tbePublishBy" name="tbPublishBy" text="<?php echo $uname; ?>" value="<?php echo $uname; ?>"  >

                </div>

                <!-- <label for="datePublish" class="col-sm-2 col-form-label">Publish Date </label>
                <div class="col-sm-3">
                    <input type="date" min="2017-04-01" max="2017-04-30" class="form-control " id="datePublish" name="dtPublishDate">

                </div> -->
            </div>
            <div class="row mb-3 media-box">
                <label for="filePhoto" class="col-sm-2 col-form-label ">Photo </label>
                <div class="col-sm-6">
                    <input type="file" class="form-control " id="filePhoto" name="photopath">

                </div>
            </div>
            <div class="row mb-3 media-box">
                <label for="video-link" class="col-sm-2 col-form-label">Video link </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control " id="video-link" name="tbvideopath">

                </div>
            </div>
            <div class="row mb-3 test-link">
                <label for="test-link" class="col-sm-2 col-form-label">Test link </label>
                <div class="col-sm-8">
                    <input type="text" class="form-control " id="test-link" name="tbTestLink">

                </div>
            </div>
            <div class="row mb-3 keywords">
                <label for="keywords" class="col-sm-2 col-form-label">Tags </label>
                <div class="col-sm-3">
                    <textarea type="text" class="form-control " id="keywords" cols="20" name="tbKeywords"> </textarea>

                </div>
            </div>
            <div class="row mb-3 timebox">
                <label for="time-tb" class="col-sm-2 col-form-label">Time Duration </label>
                <div class="col-sm-8">
                    <!-- <input type="time" class="form-control " id="timeDuration" name="tbTimeDuration"  > -->
                    <label for="hours"> Hours:</label>
                    <select id="hours" name="hours" onchange="updateDuration()" >
                        <?php
                        // Populate hours dynamically
                        for ($i = 0; $i <= 23; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>

                    <label for="minutes"> Minutes:</label>
                    <select id="minutes" name="minutes" onchange="updateDuration()">
                        <?php
                        // Populate minutes dynamically
                        for ($i = 0; $i <= 59; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <label for="seconds"> Seconds:</label>
                    <select id="seconds" name="seconds" onchange="updateDuration()">
                        <?php
                        // Populate seconds dynamically
                        for ($i = 0; $i <= 59; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <!-- <p id="duration">Selected Duration: 0 hours 0 minutes</p> -->
                </div>
            </div>

            <button type="submit" name="submit" class="row btn btn-primary w-75">submit</button>
        </form>
    </div>
</div>
<div class="footer">
    <style>
        .footer{
            width: 100%;
            height: 10px;
            background: #0ff345;
            position: relative;
            margin-top: 70px;
        }
        .btn{
            /* align-items: center; */
            margin-left: 10%;
        }
    </style>
</div>
<script>
    function fillSubCategory() {
        mid = document.getElementById("module_name").value;
        window.location.replace("?mid=" + mid);
    }

    function updateDuration() {
        var hours = document.getElementById('hours').value;
        var minutes = document.getElementById('minutes').value;

        // document.getElementById('duration').innerText = "Selected Duration: " + hours + " hours " + minutes + " minutes";
    }
    document.getElementById("tdTitle").value = "jdfaeildfjalidfjl";
</script>
<?php
include 'layouts/bottom.php';



?>

<!-- add details in databse -->

<?php 



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $module_name = $_POST['module-name'];
    $cat_name = $_POST['cat-name'];
    $title = $_POST['tbTitle'];
    $description = $_POST['tdDescription'];
    $contentArea = $_POST['tdContentArea'];
    $publishBy = $_POST['tbPublishBy'];
    $photopath = $_POST['photopath'];
    $videopath = $_POST['tbvideopath'];
    $testLink = $_POST['tbTestLink'];
    $keywords = $_POST['tbKeywords'];
    $hours = $_POST['hours'];
    $minutes = $_POST['minutes'];
    $seconds = $_POST['seconds'];

    // Update item in the database
    $result = $db->update_item($id, $module_name, $cat_name, $title, $description, $contentArea, $publishBy, $photopath, $videopath, $testLink, $keywords, $hours, $minutes, $seconds);

    if ($result) {
        echo "<script type='text/JavaScript'>alert('Item updated successfully'); window.location = 'dashboard.php';</script>";
    } else {
        echo 'Failed to update item';
    }
}
?>
