<?php

require('../PHP/connectFordB.php');
if(!isset($_SESSION['username'])){
    header('Location: http://localhost/INTP_project/Alumneye/src/html/index.html'); 
} 

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../css/homePage.css">
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <script src="https://kit.fontawesome.com/78a1f04c92.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <a class="navbar-brand" href="./homePage.html" style="font-size: xx-large;">AlumnEye</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./homePage.html"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./about.html"><i class="fas fa-info-circle"></i> About</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./contact.html"><i class="fas fa-address-book"></i> Contact Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./mynetwork.html"><i class="fas fa-user-friends"></i> My Network</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user-circle"></i> Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./profile.html"><?php echo $_SESSION['username']; ?></a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="../PHP/logout.php">Sign Out</a>
                </div>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
    </nav>

    <div class="flex-container">
        <div class="flex-left">
            <div class="flex-questions">
                <div class="question-flex">
                    <heading>Top Questions</heading>

                    <div class="question-content">
                        This is trail questions
                    </div>

                    <div class="question-content">
                        This is trail questions
                    </div>
                    <div class="question-content">
                        This is trail questions
                    </div>
                    <div class="question-content">
                        This is trail questions
                    </div>
                </div>
            </div>
        </div>


        <div class="flex-center" id="post-post">
            <div class="flex-post-answer">
                <!--Bootstrap Modal-->
                <!-- Button trigger modal -->
                <button type="button" class="btn post-btn" data-toggle="modal" data-target="#exampleModal">
                    <i class="far fa-edit"></i>  Start a post!
                </button>
                
                <!-- Modal -->
                
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tell us what you think!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form action= "../PHP/homePage.php" id="post-content-form" name="post-content-form" method="POST">
                        <div class="modal-body">
                        <textarea rows="10"  id="post-content" name="post-content" class="form-control" placeholder="Write your messsage here" ></textarea> 
                        </div>
                        </form>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" id="post-button-a" onclick="document.getElementById('post-content-form').submit();">Post</a>
                        <!-- <button type="submit" class="btn btn-primary" id="post-button">Post</button> -->
                        </div>
                    </div>
                    </div>
                </div>

            </div>
            
            <div class="post-view">
                <div class="post-writer">
                   
                </div>
                <div class="post-view-question">
                   What is the easiest way to learn CSS?
                </div>

                <div class="post-view-answer">
                    You don’t need to commit to memorizing every CSS Property and Value, as there are good places to
                    look them up. There are some fundamental things, however, which will make CSS much easier for
                    you to use. 

                    I get a lot of people asking me to recommend to them utorials on various parts of CSS, or asking how 
                    to learn CSS. I also see a lot of people who are confused about bits of CSS, in part because of outdated 
                    ideas about the language. Given that CSS has changed quite substantially in the last few years, this is a
                    really good time to refresh your knowledge. Even if CSS is a small part of what you do (because you
                    work elsewhere in the stack), CSS is how things end up looking as you want them on screen, so it is
                    worth being reasonably up to date. 
                </div>

                <div class="post-view">
                    <div class="post-view-question">How to be good at coding?</div>
                </div>

            </div> 


        </div>

        <div class="flex-right">
            <div class="flex-field-related">
                <heading>Questions Related to</heading>
                <div class="question-flex">
                    <div class="question-content">
                        WebDeveloepemnt
                    </div>
                    <div class="question-content">
                        CyberSecurity
                    </div>
                    <div class="question-content">
                        CyberSecurity
                    </div>
                    <div class="question-content">
                        CyberSecurity
                    </div>
                </div>
            </div>

            <div class="flex-suggested-network">
                <heading>Suggested Network</heading>
                <div class="question-flex">
                    <div class="question-content">
                            <div class="network-box">
                                <div class="network-image">
                                    <img src="../../images/user-image-with-black-background.png" class="network-image">
                                </div>
                                <div class="network-name">Harsh </div>
                                <div class="network-profile">Web Developer</div>
                            </div>



                    </div>
                    <div class="question-content">
                         <div class="network-box">
                                <div class="network-image">
                                    <img src="../../images/user-image-with-black-background.png" class="network-image">
                                </div>
                                <div class="network-name">Harsh </div>
                                <div class="network-profile">Web Developer</div>
                            </div>

                    </div>
                    <div class="question-content">
                        <div class="network-box">
                            <div class="network-image">
                                <img src="../../images/user-image-with-black-background.png" class="network-image">
                            </div>
                            <div class="network-name">Harsh </div>
                            <div class="network-profile">Web Developer</div>
                        </div>

                    </div>
                    <div class="question-content">
                         <div class="network-box">
                                <div class="network-image">
                                    <img src="../../images/user-image-with-black-background.png" class="network-image">
                                </div>
                                <div class="network-name">Harsh </div>
                                <div class="network-profile">Web Developer</div>
                            </div>

                    </div>
                </div>
            </div>


        </div>

    </div>


    <!--Bootstrap CDN-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="../js/homePage.js"></script>
</body>

</html>