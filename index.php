<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusHub</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="short icon" href="images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header id="header">
        <nav class="container1 flex">
            <div class="logo flex">
                <div class="logoimg">
                    <img src="images/logo.png" alt="" srcset="">
                </div>
                <a href="/">
                    <h1 class="webname">NexusHub</h1>
                </a>
            </div>
            <div class="navlist flex">
                <ul class="flex">
                    <li><a href="index.php" class="liactive">Home</a></li>
                    <li><a href="">About Me</a></li>
                    <li><a href="">Category<i class="fa-solid fa-sort-down"></i></li>

                    
                    <li><a href="">Blogs<i class="fa-solid fa-sort-down"></i></a></li>
                    <li><a href="">Entertaiments<i class="fa-solid fa-sort-down"></i></a></li>
                    <li><a href="programming_home.php">Computer Languages</a></li>

                </ul>
            </div>
            <div class="searchdarksub flex">
                <div class="searchbar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="searchclick">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search" id="">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </form>
                        <div class="tegsec">
                            <h3>Popular tags:</h3>
                            <div class="tegs flex">
                                <a href="#">#Travel<span>,</span></a>
                                <a href="#">#Tech<span>,</span></a>
                                <a href="#">#Movie<span>,</span></a>
                                <a href="#">#Lifestyle<span>,</span></a>
                                <a href="#">#Sport</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toggle-switch">
                    <input type="checkbox" name="" class="l toggle-checkbox" id="dark-mode-toggle">
                    <label for="dark-mode-toggle" class="toggle-label"></label>
                </div>
                <button><a href="login_regs.php">Join Me !</a></button>
            </div>
        </nav>
    </header>


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
                <div class="emailsub">
                    <form action="#" class="flex">
                        <input type="email" name="email" id="email" placeholder="Enter your free time ">
                        <button type="submit"><span>Let's Go </span></button>
                    </form>
                </div>

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
                <h3>Hot Topics</h3>
                <p>Don't moss out on the latest news about travel tips, Hotels reviews</p>
                <div class="lrbtn">
                    <button class="leftbtn"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="rightbtn"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            <div class="hotcards flex">
                <div class="hcard">
                    <a href="/">
                        <img src="images/food.jpg" alt="" width="400px" height="300px">
                        <div class="hdetails">
                            <div class="hdetail">
                                <h4>food</h4>
                                <p>receipe</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hcard">
                    <a href="/">
                        <img src="images/food.jpg" alt="" width="400px" height="300px">
                        <div class="hdetails">
                            <div class="hdetail">
                                <h4>food</h4>
                                <p>receipe</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hcard">
                    <a href="/">
                        <img src="images/furniture.jpg" alt="" width="400px" height="300px">
                        <div class="hdetails">
                            <div class="hdetail">
                                <h4>food</h4>
                                <p>receipe</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hcard">
                    <a href="/">
                        <img src="images/interior.jpg" alt="" width="400px" height="300px">
                        <div class="hdetails">
                            <div class="hdetail">
                                <h4>food</h4>
                                <p>receipe</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="hcard">
                    <a href="/">
                        <img src="images/gimbap.jpg" alt="" width="400px" height="300px">
                        <div class="hdetails">
                            <div class="hdetail">
                                <h4>food</h4>
                                <p>receipe</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- </section>  -->

        <!-- big title section -->
        <div class="bigtitle container ">
            <h2 class="textcolor">Editor's picked</h2>
            <p>Featured and highly rated articles</p>
        </div>
        <section class="editorcards container flex">
            <div class="edcard">
                <a href="/">
                    <img src="images/food.jpg" alt="" width="400px" height="300px">
                    <div class="edcarddet1">
                        <div class="tegtime flex">
                            <h5>#food</h5>
                            <h5 class="flex">
                                <i class="fa-solid fa-clock"></i>
                                <span>5</span>mins rated
                            </h5>
                        </div>


                        <!-- </a> -->
                        <!-- </div> -->
                        <a href="/">
                            <h2>Welcome to Hub for intresting Blogs</h2>
                        </a>

                        <div class="postby flex">
                            <div class="author-box flex">
                                <img src="images/author.png" alt="">
                                <div class="authoname">
                                    <h4>Coder</h4>
                                    <span>03 sep 2023</span>
                                </div>
                            </div>

                            <a href="/" class="readmore"><span>Read More</span></a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="edcard">
                <a href="/">
                    <img src="images/food.jpg" alt="" width="400px" height="300px">
                    <div class="edcarddet1">
                        <div class="tegtime flex">
                            <h5>#food</h5>
                            <h5 class="flex">
                                <i class="fa-solid fa-clock"></i>
                                <span>5</span>mins rated
                            </h5>
                        </div>


                        <!-- </a> -->
                        <!-- </div> -->
                        <a href="/">
                            <h2>Welcome to Hub for intresting Blogs</h2>
                        </a>

                        <div class="postby flex">
                            <div class="author-box flex">
                                <img src="images/author.png" alt="">
                                <div class="authoname">
                                    <h4>Coder</h4>
                                    <span>03 sep 2023</span>
                                </div>
                            </div>

                            <a href="/" class="readmore"><span>Read More</span></a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="edcard">
                <a href="/">
                    <img src="images/food.jpg" alt="" width="400px" height="300px">
                    <div class="edcarddet1">
                        <div class="tegtime flex">
                            <h5>#food</h5>
                            <h5 class="flex">
                                <i class="fa-solid fa-clock"></i>
                                <span>5</span>mins rated
                            </h5>
                        </div>


                        <!-- </a> -->
                        <!-- </div> -->
                        <a href="/">
                            <h2>Welcome to Hub for intresting Blogs</h2>
                        </a>

                        <div class="postby flex">
                            <div class="author-box flex">
                                <img src="images/author.png" alt="">
                                <div class="authoname">
                                    <h4>Coder</h4>
                                    <span>03 sep 2023</span>
                                </div>
                            </div>

                            <a href="/" class="readmore"><span>Read More</span></a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="edcard">
                <a href="/">
                    <img src="images/food.jpg" alt="" width="400px" height="300px">
                    <div class="edcarddet1">
                        <div class="tegtime flex">
                            <h5>#food</h5>
                            <h5 class="flex">
                                <i class="fa-solid fa-clock"></i>
                                <span>5</span>mins rated
                            </h5>
                        </div>


                        <!-- </a> -->
                        <!-- </div> -->
                        <a href="/">
                            <h2>Welcome to Hub for intresting Blogs</h2>
                        </a>

                        <div class="postby flex">
                            <div class="author-box flex">
                                <img src="images/author.png" alt="">
                                <div class="authoname">
                                    <h4>Coder</h4>
                                    <span>03 sep 2023</span>
                                </div>
                            </div>

                            <a href="/" class="readmore"><span>Read More</span></a>
                        </div>
                    </div>
                </a>
            </div>

            <div class="edcard">
                <a href="/">
                    <img src="images/food.jpg" alt="" width="400px" height="300px">
                    <div class="edcarddet1">
                        <div class="tegtime flex">
                            <h5>#food</h5>
                            <h5 class="flex">
                                <i class="fa-solid fa-clock"></i>
                                <span>5</span>mins rated
                            </h5>
                        </div>


                        <!-- </a> -->
                        <!-- </div> -->
                        <a href="/">
                            <h2>Welcome to Hub for intresting Blogs</h2>
                        </a>

                        <div class="postby flex">
                            <div class="author-box flex">
                                <img src="images/author.png" alt="">
                                <div class="authoname">
                                    <h4>Coder</h4>
                                    <span>03 sep 2023</span>
                                </div>
                            </div>

                            <a href="/" class="readmore"><span>Read More</span></a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="showmorepost flex">
                <a href="/">Show More Posts <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>

        <!-- contact section -->
        <div class="contactbanner container flex">
            <img src="images/contactus.jpg" alt="">
        </div>
        <div class="bigtitle container ">
            <h2 class="textcolor">Popular Tegs</h2>
            <p>Most searched keywords</p>
        </div>

        <div class="tegsec container flex">
            <a href="/"><img src="images/business.png" alt="">Business</a>
            <a href="/"><img src="images/nature.png" alt="">Nature</a>
            <a href="/"><img src="images/plant.png" alt="">Plant</a>
            <a href="/"><img src="images/interior.png" alt="">Interior</a>
            <a href="/"><img src="images/minimal.png" alt="">Minimal</a>
            <a href="/"><img src="images/animal.png" alt="">Animal</a>
            <a href="/"><img src="images/space.png" alt="">Space</a>
            <a href="/"><img src="images/food.png" alt="">Food</a>
            <a href="/"><img src="images/fashion.png" alt="">Fsahion</a>
            <a href="/"><img src="images/lifestyle.png" alt="">Lifestyle</a>
            <a href="/"><img src="images/culture.png" alt="">Culture</a>
            <a href="/"><img src="images/travel.png" alt="">Travel</a>
        </div>

        <!-- recentpost section -->

        <section class="recentpostsec container flex">
            <div class="recentposts">
                <div class="bigtitle">
                    <h2 class="textcolor">Popular Tegs</h2>
                    <p>Most searched keywords</p>
                </div>
                <div class="posts">
                    <div class="post flex">
                        <a href="/">
                            <img src="images/nature-card.jpg" alt="">
                        </a>
                        <div class="postdetails">
                            <div class="postlabel">
                                <a href="/">Nature</a>
                            </div>
                            <a href="/">
                                <h2>Best ways for growing environment at home</h2>
                            </a>
                            <p>take small but impactful steps towards environmental stewardship and sustainability
                                within the comfort of your own home, contribuiting to a planet</p>
                            <div class="posttimeteg flex">
                                <div class="flex">
                                    <h5><span>#</span>Travel</h5>
                                    <h5><span>$</span>Lifestyle</h5>
                                </div>
                                <div class="tegtime">
                                    <h5 class="flex">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>5</span>mins read
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post flex">
                        <a href="/">
                            <img src="images/nature-card.jpg" alt="">
                        </a>
                        <div class="postdetails">
                            <div class="postlabel">
                                <a href="/">Nature</a>
                            </div>
                            <a href="/">
                                <h2>Best ways for growing environment at home</h2>
                            </a>
                            <p>take small but impactful steps towards environmental stewardship and sustainability
                                within the comfort of your own home, contribuiting to a planet</p>
                            <div class="posttimeteg flex">
                                <div class="flex">
                                    <h5><span>#</span>Travel</h5>
                                    <h5><span>$</span>Lifestyle</h5>
                                </div>
                                <div class="tegtime">
                                    <h5 class="flex">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>5</span>mins read
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post flex">
                        <a href="/">
                            <img src="images/nature-card.jpg" alt="">
                        </a>
                        <div class="postdetails">
                            <div class="postlabel">
                                <a href="/">Nature</a>
                            </div>
                            <a href="/">
                                <h2>Best ways for growing environment at home</h2>
                            </a>
                            <p>take small but impactful steps towards environmental stewardship and sustainability
                                within the comfort of your own home, contribuiting to a planet</p>
                            <div class="posttimeteg flex">
                                <div class="flex">
                                    <h5><span>#</span>Travel</h5>
                                    <h5><span>$</span>Lifestyle</h5>
                                </div>
                                <div class="tegtime">
                                    <h5 class="flex">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>5</span>mins read
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post flex">
                        <a href="/">
                            <img src="images/nature-card.jpg" alt="">
                        </a>
                        <div class="postdetails">
                            <div class="postlabel">
                                <a href="/">Nature</a>
                            </div>
                            <a href="/">
                                <h2>Best ways for growing environment at home</h2>
                            </a>
                            <p>take small but impactful steps towards environmental stewardship and sustainability
                                within the comfort of your own home, contribuiting to a planet</p>
                            <div class="posttimeteg flex">
                                <div class="flex">
                                    <h5><span>#</span>Travel</h5>
                                    <h5><span>$</span>Lifestyle</h5>
                                </div>
                                <div class="tegtime">
                                    <h5 class="flex">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>5</span>mins read
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post flex">
                        <a href="/">
                            <img src="images/nature-card.jpg" alt="">
                        </a>
                        <div class="postdetails">
                            <div class="postlabel">
                                <a href="/">Nature</a>
                            </div>
                            <a href="/">
                                <h2>Best ways for growing environment at home</h2>
                            </a>
                            <p>take small but impactful steps towards environmental stewardship and sustainability
                                within the comfort of your own home, contribuiting to a planet</p>
                            <div class="posttimeteg flex">
                                <div class="flex">
                                    <h5><span>#</span>Travel</h5>
                                    <h5><span>$</span>Lifestyle</h5>
                                </div>
                                <div class="tegtime">
                                    <h5 class="flex">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>5</span>mins read
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="postslider">
                <dic class="popularposts">
                    <div class="poptitle">
                        <h3>Popular Posts</h3>
                    </div>
                    <div class="populposts">
                        <div class="popupost flex">
                            <img src="images/work-freelancer.png" alt="">
                            <div class="popupostde">
                                <a href="/">
                                    <h4>Helpful Tips for working from home as a freelancer</h4>
                                </a>
                                <div class="poputime flex">
                                    <h5><span>5</span>mins read</h5>
                                    <p>-</p>
                                    <h5>03 sep 2023</h5>
                                </div>
                            </div>
                        </div>

                        <div class="popupost flex">
                            <img src="images/work-freelancer.png" alt="">
                            <div class="popupostde">
                                <a href="/">
                                    <h4>Helpful Tips for working from home as a freelancer</h4>
                                </a>
                                <div class="poputime flex">
                                    <h5><span>5</span>mins read</h5>
                                    <p>-</p>
                                    <h5>03 sep 2023</h5>
                                </div>
                            </div>
                        </div>

                        <div class="popupost flex">
                            <img src="images/work-freelancer.png" alt="">
                            <div class="popupostde">
                                <a href="/">
                                    <h4>Helpful Tips for working from home as a freelancer</h4>
                                </a>
                                <div class="poputime flex">
                                    <h5><span>5</span>mins read</h5>
                                    <p>-</p>
                                    <h5>03 sep 2023</h5>
                                </div>
                            </div>
                        </div>

                        <div class="popupost flex">
                            <img src="images/work-freelancer.png" alt="">
                            <div class="popupostde">
                                <a href="/">
                                    <h4>Helpful Tips for working from home as a freelancer</h4>
                                </a>
                                <div class="poputime flex">
                                    <h5><span>5</span>mins read</h5>
                                    <p>-</p>
                                    <h5>03 sep 2023</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popularposts">
                        <div class="poptitle">
                            <h3>Last Comments</h3>
                        </div>
                        <div class="comment">
                            <p><span>"</span>
                                share your comments and ask your queries to us and also share your feedback to our
                                website
                            </p>
                            <div class="authorcomment flex">
                                <img src="images/author.png" alt="">
                                <div class="authortimename">
                                    <h5>coder</h5>
                                    <span>03 Sep 2023</span>
                                </div>
                            </div>
                        </div>

                        <div class="comment">
                            <p><span>"</span>
                                share your comments and ask your queries to us and also share your feedback to our
                                website
                            </p>
                            <div class="authorcomment flex">
                                <img src="images/author.png" alt="">
                                <div class="authortimename">
                                    <h5>coder</h5>
                                    <span>03 Sep 2023</span>
                                </div>
                            </div>
                        </div>

                        <div class="comment">
                            <p><span>"</span>
                                share your comments and ask your queries to us and also share your feedback to our
                                website
                            </p>
                            <div class="authorcomment flex">
                                <img src="images/author.png" alt="">
                                <div class="authortimename">
                                    <h5>coder</h5>
                                    <span>03 Sep 2023</span>
                                </div>
                            </div>
                        </div>


                    </div>
            </div>
            </div>
        </section>
    </main>

    <!-- footer section -->
    <footer class="container">
        <section class="foootersec flex">
            <div class="logofooter">
                <div class="logof">
                    <a href="/" class="flex">
                        <img src="images/logo.png" alt="">
                        <h1>NexusHub</h1>
                    </a>

                </div>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Optio consequatur cum obcaecati autem
                    reiciendis ut
                    eveniet ex eaque.
                </p>
                <h4>Address</h4>
                <p>123 Lorem Street</p>
                <p>India, Gujrata</p>
            </div>
            <div class="categoriesfooter">
                <h3>Categories</h3>
                <div class="flex">
                    <div class="catefbx">
                        <ul>
                            <li><a href="/">Entertainments</a></li>
                            <li><a href="/">Photos</a></li>
                            <li><a href="/">Languages</a></li>
                            <li><a href="/">Computer Languages</a></li>
                            <li><a href="/">News Portal</a></li>
                            <li><a href="/">Blogs</a></li>

                        </ul>
                    </div>

                    <div class="catefbx">
                        <ul>
                            <li><a href="/">Entertainments</a></li>
                            <li><a href="/">Photos</a></li>
                            <li><a href="/">Languages</a></li>
                            <li><a href="/">Computer Languages</a></li>
                            <li><a href="/">News Portal</a></li>
                            <li><a href="/">Blogs</a></li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="newsletterfooter" id="subform">
                <h3>Newsletter</h3>
                <p>Lorem ipsum dolor sit, consectetur adipisicing. elit. harum, doloribus</p>
                <form action="#" class="flex">
                    <div class="flex">
                        <i class="fa-regular fa-user"></i>
                        <input type="name" placeholder="Your Name">
                    </div>

                    <div class="flex">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="name" placeholder="Email Address">
                    </div>
                    <button type="submit" class="flex">Subsribe<i class="fa-solid fa-arrow-right"></i></button>
                </form>
            </div>
        </section>
        <div class="themeauthor container flex">
            <div class="createdby">
                <h4>&copy; 2023 Created by <a href="https://www.codingwebstudio.com/" target="_blank" title="codingwebstudio">codingwebstudio.com</a></h4>
            </div>
            <div class="social flex">
                <div class="socialcon">
                    <i class="fa-brands fa-twitter"></i>
                    <h4>Twitter</h4>
                </div>

                <div class="socialcon">
                    <i class="fa-brands fa-instagram"></i>
                    <h4>Instagram</h4>
                </div>

                <div class="socialcon">
                    <i class="fa-brands fa-facebook"></i>
                    <h4>Facebook</h4>
                </div>

            </div>
        </div>

    </footer>
    <script src="js/app.js"></script>
</body>

</html>