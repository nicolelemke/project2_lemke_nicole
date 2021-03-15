<link rel="stylesheet" href="https://use.typekit.net/izw1gbm.css">


  <style type="text/css">

  * {
  	margin: 0;
  	padding: 0;
  	border: 0;
  }

  article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
      display:block;
  }

  header {
  	background-color: #367341;
  }

  header img {
  	width: 98%;
  	max-width: 450px;
  }

  .toplogo {
  	position: relative;
  	top: 50px;
  	padding: 30px 20px;
  	background: #1C1B1B;
  	text-align: center;
  }



  .thankyou {
    position: relative;
    top: 100px;
    height: 200px;
    text-align: center;
    margin: auto;
    color: black;
    font-family: roboto, sans-serif;
  	font-weight: 400;
  	font-style: normal;
  }




  </style>



<!-- =========== HEADER =========== -->
  <header class="subpage-header">
    <button class="hamburger sub-hamburger">&#9776;</button>
    <button class="cross sub-cross">&#735;</button>

<!--Desktop Menu ************************* -->
    <div class="toplogo">
      <img src="../images/KBDlogo.png" alt="Kelley Bros. Disposal Logo" title="Kelley Bros. Disposal Logo" />
    </div>
  </header>


  <div>
    <div class="thankyou">
      <h1 class="title">MISSING FIELDS</h1>
      <p>Sorry, you have not completed all of the required fields.</p>
      <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

      <ul>
      <?php
        for($i=0; $i<count($this->missing_required_fields); $i++){
          echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
        }
      ?>
      </ul>

      <p><a href= "../formpage.html">Back To Form</a></p>
    </div>
  </div>
