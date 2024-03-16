<?php

include 'layouts/index_top.php' ?>
<main id="main">
    <section class="biosec container flex">
        <div class="bio">
            <h4>Hello Everyone! </h4>

            <h1>Here
                <div>
                    <span class="multi-text">Entertaiments</span>
                    <span class="blink"></span>

                </div>
            </h1>
            <p>Welcome to our multifaceted online hub,
                a digital haven designed to cater to your diverse interests and make your leisure moments truly
                enjoyabl..
            </p>
            <!-- <div class="emailsub">
                <form action="#" class="flex">
                    <input type="email" name="email" id="email" placeholder="Enter your free time ">
                    <button type="submit"><span>Let's Go </span></button>
                </form>
            </div> -->

        </div>
        <div class="bioimg">
            <img src="images/home.png" alt="">
            <div class="pattern-1"><img src="images/svg/pattern-1.svg" alt=""></div>
            <div class="pattern-2"><img src="images/svg/pattern-2.svg" alt=""></div>
            <div class="pattern-3"><img src="images/svg/pattern-3.svg" alt=""></div>
            <div class="pattern-4"><img src="images/svg/pattern-4.svg" alt=""></div>
        </div>
    </section>
    <!-- hot topics section -->

    <section class="hottopicsec container flex">
        <div class="hottopics">
            <h3>Interested Topics</h3>
            <p>Don't moss any Things :</p>
            <div class="lrbtn">
                <button class="leftbtn"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="rightbtn"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="hotcards flex">
            <?php
            $ml = $db->fetch_modules_list();
            $c = "index.php";
            // link name for indivuale module $ln
            foreach ($ml as $ml) {
                
                echo "
                    <div class='hcard'>
                        <a href='check_module.php?mn=" . $ml["module_name"] . "'>
                            <img src='images/" . $ml["photo"] . "' alt='' width='400px' height='300px'>
                            <div class='hdetails'>
                                <div class='hdetail'>
                                    <h4>" . $ml["module_name"] . "</h4>
                                    <p>5 Articles</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    ";
            }
            ?>
        </div>
    </section>
    <!-- </section>  -->

    <!-- big title section -->
    <div class="bigtitle container ">
        <h2 class="textcolor">Engaging Blogs </h2>
        <p>That Will Capture Your Attention</p>
    </div>
    <section class="editorcards container flex">


        <?php
        $bd = $db->fetch_random_items_by_module(2);
        $i = 1;

        foreach ($bd as $bd) {
            $time = date('i', strtotime($bd["time"]));
            $publish = date('d M, Y', strtotime($bd["publish_date"]));
            if ($i > 5) {
                break;
            }
            echo "<div class='edcard'>
        <a href='blogs_single.php?c=".$bd["category"]."&id=".$bd["id"]."'>
            <img src='images/blogs/" . $bd["photopath"] . "' alt='' width='400px' height='300px'>
            <div class='edcarddet1'>
                <div class='tegtime flex'>
                    <h5>#".$bd["keywords"]."</h5>
                    <h5 class='flex'>
                        <i class='fa-solid fa-clock'></i>
                        <span>" . $time . "</span>mins rated
                    </h5>
                </div>
      
      
                <!-- </a> -->
                <!-- </div> -->
                <a href='blogs_single.php?c=".$bd["category"]."&id=".$bd["id"]."'>
                    <h2>" . $bd["title"] . "</h2>
                </a>
      
                <div class='postby flex'>
                    <div class='author-box flex'>
                        <img src='images/author.png' alt=''>
                        <div class='authoname'>
                            <h4>" . $bd["publish_by"] . "</h4>
                            <span>" . $publish . "</span>
                        </div>
                    </div>
      
                    <a href='blogs_single.php?c=".$bd["category"]."&id=".$bd["id"]."' class='readmore'><span>Read More</span></a>
                </div>
            </div>
        </a>
      </div>";
            $i++;
        }
        ?>



    </section>

    <!-- contact section -->
    <!-- <div class="contactbanner container flex">
        <img src="images/contactus.jpg" alt="">
    </div> -->
    <div class="bigtitle container ">
        <h2 class="textcolor">Popular Programming Languages</h2>

    </div>

    <div class="tegsec container flex">
        <?php
        $pl = $db->fetch_category_list(4);

        foreach ($pl as $pl) {
            $item_id = $db->fetch_items_list($pl["cat_id"]);
            foreach ($item_id as $ci) {

                echo "<a href='pro_single.php?id=" . $ci["id"] . "&c=" . $pl["cat_id"] . "'><img src='images/programming/" . $pl["cat_photo"] . "' alt=''>" . $pl["cat_name"] . "</a>";
                break;
            }
        }
        ?>

        <!-- <a href="/"><img src="images/nature.png" alt="">Nature</a> -->

    </div>
    <div class="bigtitle container ">
        <h2 class="textcolor">Popular Native Languages</h2>
        <!-- <p>Most searched keywords</p> -->
    </div>

    <div class="tegsec container flex">
        <?php
        $pl = $db->fetch_category_list(3);

        foreach ($pl as $pl) {
            $item_id = $db->fetch_items_list($pl["cat_id"]);
            foreach ($item_id as $ci) {

                echo "<a href='pro_single.php?id=" . $ci["id"] . "&c=" . $pl["cat_id"] . "'><img src='images/language/" . $pl["cat_photo"] . "' alt=''>" . $pl["cat_name"] . "</a>";
                break;
            }
        }
        ?>
    </div>

    <!-- recentpost section -->

    <section class="recentpostsec container flex">
        <div class="recentposts">
            <div class="bigtitle">
                <h2 class="textcolor">Popular Programming Blogs</h2>

            </div>
            <div class="posts">
                <?php

                $data = $db->fetch_random_items_by_module(4);
                // print_r($data);
                $count = 0;
                foreach ($data as $d) {
                    $time = date('h i s', strtotime($d["time"]));
                    $publish = date('d M, Y', strtotime($d["publish_date"]));
                    $count += 1;
                    if ($count == 7) {
                        break;
                    }
                    $lang_name = $db->find_category_name($d["category"]);
                    foreach ($lang_name as $l_name) {
                        echo "
        
            <div class='post flex'>
            <a href='pro_single.php?id=" . $d["id"] . "&name=" . $l_name["cat_name"] . "&c=" . $d["category"] . "'>
                <img src='images/programming/" . $d["photopath"] . "' alt=''>
            </a>
            <div class='postdetails'>
                <div class='postlabel'>
                    <a href=''>" . $l_name["cat_name"] . "</a>
                </div>
                <a href='pro_single.php?id=" . $d["id"] . "&name=" . $l_name["cat_name"] . "&c=" . $d["category"] . "'>
                    <h2> " . $d["title"] . "</h2>
                </a>
                <p>  " . nl2br($d["description"]) . "</p>
                <div class='posttimeteg flex'>
                    <div class='flex'>
                        <h5><span>Tegs  :</span> ".$d["keywords"]."</h5>
                
                    </div>
                    <div class='tegtime'>
                        <h5 class='flex'>
                            <i class='fa-regular fa-clock'></i>
                            <span>".$time."</span>mins read
                        </h5>
                    </div>
                </div>
            </div>
            </div>
            ";
                    }
                }
                ?>


            </div>
        </div>
        <div class="postslider">
        <div class=" aside-card insta-card popularposts">
                <div class="poptitle">
                    <h3>Photos Gallery</h3>
                </div>

                <ul class="insta-list">
                    <?php $data = $db->fetch_random_items_by_module(5);
                    // print_r($data);
                    $count = 0;
                    foreach ($data as $d) {
                        
                        if ($count > 10) {
                            break;
                        }
                        echo "<li>
                        <a href='photo_single.php?c=" . $d["category"] . "' class='insta-post img-holder' style='--width: 276; --height: 277;'>
                            <img src='images/photo/" . $d["photopath"] . "' width='100px' height='100px' loading='lazy' alt='insta post' class='img-cover'>
                        </a>
                    </li>";
                    $count += 1;
                    } ?>


                </ul>

            </div>
            <style>
    
    .insta-card1 .card-text {
    color: var(--text-slate-gray);
    font-weight: var(--weight-bold);
    margin-block: 5px 30px;
  }
  
  .insta-list1 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    justify-content: center;
    text-align: center;
  }
  
  .insta-post1 img{ border-radius: 10px; }
  .aside-card {
    padding: 25px;
    /* border-radius: var(--radius-16); */
  }
            </style>
            <div class=" aside-card insta-card1 popularposts">
                <div class="poptitle">
                    <h3>Latetst Movies</h3>
                </div>

                <ul class="insta-list1">
                    <?php $data = $db->fetch_random_items_by_module(1);
                    // print_r($data);
                    $count = 0;
                    foreach ($data as $d) {
                        
                        if ($count >= 10) {
                            break;
                        }
                        echo "<li>
                        <a href='ent_single.php?id=".$d["id"]."&c=" . $d["category"] . "' class='insta-post1 img-holder' style='--width: 276; --height: 277;'>
                            <img src='images/entertaintment/" . $d["photopath"] . "' width='200px' height='200px' loading='lazy' alt='insta post1' class='img-cover'>
                            <h3 > " . $d["title"] . "</h3>
                        </a>
                    </li>";
                    $count += 1;
                    } ?>


                </ul>

            </div>
        </div>
    </section>
</main>
<?php include 'layouts/index_bottom.php' ?>
<script src="js/app.js"></script>