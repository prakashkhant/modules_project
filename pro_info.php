<?php
include 'layouts/index_top.php';
?>
<style>
    .lang-name,
    .buttons {

        box-shadow: 0 1px 3px #0099cc, 0 1px 2px #0099cc;
        color: whitesmoke;
        padding-inline-start: 15px;
        justify-content: space-between;
        color: #ffffff;
    }

    .pro-img {
        left: 10px;
    }

    .menu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .menu li {
        padding: 8px;
        margin-bottom: 7px;
        background-color: 000435;
        color: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .menu li:hover {
        background-color: #0099cc;
    }

    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    [class*="col-"] {
        float: left;
        padding: 15px;
    }

    .col-1 {
        width: 5.33px;
    }

    .col-2 {
        width: 16.66%;
    }

    .col-3 {
        width: 25%;
    }

    .col-4 {
        width: 33.33%;
    }

    .col-5 {
        width: 41.66%;
    }

    .col-6 {
        width: 50%;
    }

    .col-7 {
        width: 58.33%;
    }

    .col-8 {
        width: 66.66%;
    }

    .col-9 {
        width: 75%;
    }

    .col-10 {
        width: 83.33%;
    }

    .col-11 {
        width: 91.66%;
    }

    .col-12 {
        width: 100%;
    }

    .video-section {
        color: #ffffff;
        padding: 2% 0 2% 0;
        justify-content: left;
    }

    .video-section h3 {
        padding: 2% 0 2% 0;
    }

    .video-list {
        box-shadow: 0 1px 3px #0099cc;
        margin-top: 1%;


        height: 500px;
    }

    .buttons .previous {
        margin-left: 10%;
    }

    .buttons .next {
        margin-right: 10%;
        float: right;
    }

    .btn-test {

        margin: 2px;

    }

    .btn-test a {
        background-color: #04AA6D;
        /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 20px;
    }
    
</style>
<section class="info">

    <div class="lang-name row">
        <div class="pro-img col-1">
            <img src="images/java_icon.png" alt="" srcset="" width="30px" height="30px">
        </div>
        <div class="col-9">
            <h1> Java</h1>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-2 menu">
            <ul>
                <li>what is java ?</li>
                <li>Variables</li>
                <li>Applets</li>
                <li>Inheritence</li>
            </ul>
        </div>

        <div class="col-10 main-content">
            <div class="title">
                <h1>What is Java ?</h1>
            </div>
            <div class="row content">
                <div class="pro-img col-6">
                    <img src="images/java.png" alt="" srcset="">
                </div>
                <div class="description">
                    <?php
                    $def = nl2br("Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.

                    Java was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995. James Gosling is known as the father of Java. Before Java, its name was Oak. Since Oak was already a registered company, so James Gosling and his team changed the name from Oak to Java.

                    Platform: Any hardware or software environment in which a program runs, is known as a platform. Since Java has a runtime environment (JRE) and API, it is called a platform.");
                    echo $def;


                    $content = nl2br("
                    According to Sun, 3 billion devices run Java. There are many devices where Java is currently used. Some of them are as follows:

                    Desktop Applications such as acrobat reader, media player, antivirus, etc.
                    Web Applications such as irctc.co.in, javatpoint.com, etc.
                    Enterprise Applications such as banking applications.
                    Mobile
                    Embedded System
                    Smart Card
                    Robotics
                    Games, etc.
                    Types of Java Applications
                    There are mainly 4 types of applications that can be created using Java programming:

                    1) Standalone Application
                    Standalone applications are also known as desktop applications or window-based applications. These are traditional software that we need to install on every machine. Examples of standalone application are Media player, antivirus, etc. AWT and Swing are used in Java for creating standalone applications.

                    2) Web Application
                    An application that runs on the server side and creates a dynamic page is called a web application. Currently, Servlet, JSP, Struts, Spring, Hibernate, JSF, etc. technologies are used for creating web applications in Java.

                    3) Enterprise Application
                    An application that is distributed in nature, such as banking applications, etc. is called an enterprise application. It has advantages like high-level security, load balancing, and clustering. In Java, EJB is used for creating enterprise applications.

                    4) Mobile Application
                    An application which is created for mobile devices is called a mobile application. Currently, Android and Java ME are used for creating mobile applications.

                    Java Platforms / Editions
                    There are 4 platforms or editions of Java:

                    1) Java SE (Java Standard Edition)
                    It is a Java programming platform. It includes Java programming APIs such as java.lang, java.io, java.net, java.util, java.sql, java.math etc. It includes core topics like OOPs, String, Regex, Exception, Inner classes, Multithreading, I/O Stream, Networking, AWT, Swing, Reflection, Collection, etc.

                    2) Java EE (Java Enterprise Edition)
                    It is an enterprise platform that is mainly used to develop web and enterprise applications. It is built on top of the Java SE platform. It includes topics like Servlet, JSP, Web Services, EJB, JPA, etc.

                    3) Java ME (Java Micro Edition)
                    It is a micro platform that is dedicated to mobile applications.

                    4) JavaFX
                    It is used to develop rich internet applications. It uses a lightweight user interface API.

                    Prerequisite
                    To learn Java, you must have the basic knowledge of C/C++ programming language.

                    Audience
                    Our Java programming tutorial is designed to help beginners and professionals.

                    Problem
                    We assure that you will not find any problem in this Java tutorial. However, if there is any mistake, please post the problem in the contact form.
               ");
                    echo $content;
                    ?>

                </div>
            </div>
            <div class="video-section" id="video-section">
                <div class="title">
                    <h3>Video : </h3>
                </div>

                <div class="video col-10">
                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/tgbNymZ7vqY"> </iframe>
                </div>


            </div>
        </div>

    </div>
    </div>
    <div class="btn-test row">
        <div class="col-12">
            <center>
                <a href="#">Test</a>
            </center>
        </div>
    </div>
    <div class="buttons row">
        <div class="col-1 previous">
            <a href="#" class="buttons">Previous</a> <!-- if id is 1 so not working  -->
        </div>
        <div class="next col-1col-1">
            <a href="#" class="buttons">Next</a>
        </div>
    </div>
    <div class="reference col-2">

        <style>
            .reference {
                left: 100px;
                margin-left: 200px;
            }

            .reference .list-name {
                padding-left: 100px;
            }
        </style>
        <div class="title">
            <h3>Reference: </h3>
        </div>
        <ul class="list-name">
            <li>Javatpoint/java</li>
        </ul>
    </div>
</section>