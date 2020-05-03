<!DOCTYPE html>
<html lang="en">
<?php include 'testData.php'?> 
<head>
  <title> <?php echo $template['page_title']?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    
    .well > img
    {
      
      width: 100;
    }

    .navbar-brand > img 
    {
      height: 100%;
    }

    .col-sm-4 > img
    {
      height: 100%;
      width:100%
    }
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
          

          <a class="navbar-brand" href="#"> 
            <img src="<?php echo $template['logo_src'] ?>">
          </a>



    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#" <?php echo $template['logo_src']?> >Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      

      <!-- TEST EIKONA 0 -->
      <div class="item active">
        <!-- <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image"> -->
        <img src="<?php echo $template['slideshow'][0]['image_src'] ?>" alt = "Image">

        <div class="carousel-caption">
          <h3>
            <!-- PINAKAS template->3o pedioArray'slideshow'->array0->title -->
            <?php echo $template['slideshow'][0]['title'] ?>
          </h3>
          
          <p>
            <?php echo $template['slideshow'][0]['descritpion']?>
          </p>
        </div>      
      </div>


      <!-- TEST EIKONA 1 -->
      <div class="item">
        <!--<img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">-->
        <img src="<?php echo $template['slideshow'][1]['image_src'] ?>" alt = "Image">

        <div class="carousel-caption">
          <h3>
            <!-- PINAKAS template->3o pedioArray'slideshow'->array1->title -->
            <?php echo $template['slideshow'][1]['title'] ?>
          </h3>
          <p>
            <?php echo $template['slideshow'][1]['descritpion']?>
          </p>
        </div>      
      </div>


      <!-- TEST EIKONA 2 -->
      <div class="item">
        <!--<img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">-->
        <img src="<?php echo $template['slideshow'][2]['image_src'] ?>" class="img-responsive img-circle" alt = "Image">
        <div class="carousel-caption">
          <h3>
            <!-- PINAKAS template->3o pedioArray'slideshow'->array2->title -->
            <?php echo $template['slideshow'][2]['title'] ?>
          </h3>
          <p>
            <?php echo $template['slideshow'][2]['descritpion']?>
          </p>
        </div>      
      </div>
    </div>






    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>What We Do</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <!--  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">  -->
      <img  src = "<?php echo $template['home_blocks'][0]['image_src']?>"  class="img-responsive"  alt="Image"> 

      <div> 
          <p>
            <?php echo $template['home_blocks'][0]['title']?>
          </p>
          <p> 
            <?php echo $template['home_blocks'][0]['description']?> 
          </p>
      </div>

    </div>
    
    <div class="col-sm-4"> 
      <!--  <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">  -->
      <img  src = "<?php echo $template['home_blocks'][1]['image_src']?>" class="img-responsive"  alt="Image"> 
      
      <div> 

          <p>
            <?php echo $template['home_blocks'][1]['title']?>
          </p>
          <p> 
            <?php echo $template['home_blocks'][1]['description']?> 
          </p>
      </div>
   
    </div>
    
    <div class="col-sm-4">
      <div class="well">
        <!--   <p>  Some text..</p> -->
        <img  src = "<?php echo $template['home_blocks'][2]['image_src']?>" class="img-responsive"  alt="Image">
        <p>
          <?php echo $template['home_blocks'][2]['title']?>
        </p> 
        <p>
          <?php echo $template['home_blocks'][2]['description']?>
        </p>      
      </div>
    </div>
    <div class="well">
        <p> 
          <?php echo $template['home_text']?>

          Some text..
        </p>
      </div>
    
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p><?php echo $template['page_description']?></p>
</footer>

</body>
</html>