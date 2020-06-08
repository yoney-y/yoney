<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
   
    <title>Yoney</title>
   <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <script src="https://kit.fontawesome.com/ea502cd413.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@1,700&display=swap" rel="stylesheet">
    
</head>

<body>


<div class="icon-bar">
 
        
<a class="dribbble" target="_blank" href="https://dribbble.com/yoney-y">
        <i class="fab fa-dribbble"></i> 
        
        </a>
        
        <a class="be" target="_blank" href="https://www.behance.net/yoney-y">
        <i class="fab fa-behance"></i> 
        
        </a>
        
         <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/yoana-yakova/">
        <i class="fa fa-linkedin"></i> 
        </a>
        <a class="insta" target="_blank" href="https://www.instagram.com/yoney_y/">
        <i class="fab fa-instagram"></i> 
        
        </a>

</div>



        <div class="logo-box">
            <div class="hero"></div>
            <img src="portfolio/cloud2.png" id="cloud" alt="Logo" style="width:1000px;"> 
        <img src="portfolio/logooo.png" class="" id="logo" alt="Logo" style="width:800px;"> 
        
        <h3 id="intro">Hi, my name is Yoana. <br>
            I am 18 years old and create esthetics things.<br>
    
        </h3>
        <div class="arrow-pulse-down"></div>
        
        </div>
        
    

   


   
    <div class="container">
        <h1 class="text-center">My work</h1>
<br>
        <div class="grid">
            <div class="grid-col grid-col--1">

            </div>
            <div class="grid-col grid-col--2">

            </div>
            <div class="grid-col grid-col--3">

            </div>
           

            <?php      
                    for ($i = 1; $i < 22; $i++) {
            ?>
            
                        <div class="grid-item">
                        <div class="content">
                            
                        </div>
                        <div data-aos="fade-up">
                        <?php
                        echo '<img class="design"src="portfolio/'.$i.'.jpg">';
                        ?>
                        </div>
                        </div>
                    
                        <?php  }?>
            

            

        </div>
    </div>
   

 

<footer class="section">
<div class="foot">


<div class="container-fluid ">

    <div class="row align-items-center justify-content-center"> 
    
    <div class="col-lg-12 text-center m-2 mr-1"> 
    <h5> Let's work together</h3>
    <p> (+359) 892 208716 <br> Yoana Yakova </p>
    <p> email: yoni.yakova@gmail.com </p>
    </div>



    </div>
    
    
    <div class="row align-items-center justify-content-center"> 
    
        <div class="col-lg-4 col-xs-12 social"> 
        <a target="_blank" href="https://www.instagram.com/yoney_y/">
        <i class="fab fa-instagram"></i> <span>@yoney_y</span>
        </div>
        </a>

       
        <div class="col-lg-4 col-sm-12 social"> 
        <a target="_blank" href="https://dribbble.com/yoney-y">
        <i class="fab fa-dribbble"></i> <span> @yoney-y</span>
        </div>
        </a>

 <div class="col-lg-4 col-sm-12 social"> 
        <a target="_blank" href="https://www.behance.net/yoney-y">
        <i class="fab fa-behance-square"></i> <span> @yoney-y</span>
        </div>
        </a>
        
        <div class="col-lg-4 col-sm-12 social"> 
        <a target="_blank" href="https://www.linkedin.com/in/yoana-yakova/">
        <i class="fab fa-linkedin"></i> <span> Yoana Yakova </span>
        </div>
        </a>

    </div>
</div>
   
<div class="text-center">Copyright &copy <?php echo date("Y"); ?> Yoney Y. </div>
</footer> </div>
<script>
  AOS.init();
</script>
<script src="https://unpkg.com/colcade@0/colcade.js"></script>
<script>
    var colc = new Colcade( '.grid', {
        columns: '.grid-col',
        items: '.grid-item'
    });
</script>
</body>
</html>