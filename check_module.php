
<?php 
            try{
           
                $c = $_GET["mn"];
                $ln="";
                if ($c =="Blog") {
                    $ln = "blogs_home.php";
                    header("Location: " . $ln);
                    die();
                } else if ($c == "Programming Languages") {
                    $ln = "programming_home.php";header("Location:". $ln);die();
                } else if ($c == "Languages") {
                    $ln = "language_home.php";header("Location:". $ln);die();
                } else if ($c == "Photo Gallery") {
                    $ln = "photo_home.php";header("Location: ". $ln);die();
                } else {
                    $ln = "index.php";header("Location: ". $ln);die();
                }
                
                
            
            }catch(Exception $e){
                echo $e;}
            ?>