<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html,type=charset-UTF-8">
    <meta charset="utf-8">
    <meta name="view-port" view-port="initial-scale=0.1, width=width">
    <meta name="author" author="prof-prog">
    <meta name="description" description="template">

    <!-- custom CSS link with bootstrap both in one -->
    <!-- bootstrap is imported insed the custum file-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>main.css">

    <!--jQuery for site--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <title>Automatic Printing Site</title>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <a class="navbar-brand" href="#">Site Header</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Catagories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">How To</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </header>

        <section>
            <div class="container-fluid">
                <?php if ($main_content) { ?>             
                    <?php $this->load->view("$main_content"); ?>
                <?php } ?>
            </div>
        </section>
        
        <section>
            <div class="container">
                <div>
                    <?php if(isset($content)){ ?>
                    
                    <?php } ?>
                </div>
            </div>
            
        </section>

    </body>
    <!-- Custom JavaScript -->
    <script type="text/javascript" src="<?= base_url('assets/') ?>main.js" defer></script>
    <footer>

    </footer>
</footer>
<!--Bootstrap javaScript-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
</html>