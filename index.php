<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NEW INDIAN TRANSFER</title>
    <style media="screen">
    /*Master styles*/
    body{
      margin: 0;
    }
    .container{
      display: grid;
      grid-template-columns: 1fr;
    }

    /*nav-styles*/
    .nav-wrapper{
      display: flex;
      justify-content: space-between;
      padding: 38px;
      background-color: #ff2e63;
    }
    .brand{
      font-family: italic;
      color: white;
      font-family:fantasy;
    }
    .nav-link-wrapper{
      padding-top: 38px;
      height: 22px;
      border-bottom: 1px solid transparent;
      transition: border-bottom 0.5s;
    }
    .nav-link-wrapper a{
      color: white;
      text-decoration: none;
      transition: color 0.5s;
    }
    .nav-link-wrapper:hover{
      border-bottom: 1px solid black;
    }
    .nav-link-wrapper a:hover{
      color: black;
    }
    /*contents*/
    .portfolio-items-wrapper{
      display: grid;
      grid-template-columns: 1fr;
    }
    .portfolio-item-wrapper{
      position: relative;

    }
    .portfolio-img-background{
      height: 800px;
      width: 100%;
      background-size: cover;
      background-position:center;
      background-repeat: no-repeat;
    }
    .img-text-wrapper{
      position: absolute;
      top:350px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100px;
      text-align: center;
      padding-left: 100px;
      padding-right: 100px;
    }
    .logo-wrapper img{
      width: 50%;
      margin-bottom: 20px;
    }
    .img-text-wrapper .subtitle{
      transition: 1s;
      font-weight: 600;
      color: transparent;
    }
    .img-text-wrapper .subtitle a{
      font-weight: 600;
      color: transparent;
      transition: 1s;
    }
    .img-text-wrapper:hover .subtitle{
      font-weight: 600;
      color: white;

    }
    .img-text-wrapper .subtitle a:hover{
      font-weight: 600;
      color: white;
    }
    .img-darken{
      transition: 1s;
      filter: brightness(10%);
    }

    </style>
  </head>

  <body>
    <div class="container">
      <div class="nav-wrapper">
        <div class="left-side">
          <div class="brand">
            <h1><strong>NEW INDIAN TRANSFER</strong></h1>
          </div>
        </div>
        <div class="right-side">
          <div class="nav-link-wrapper">
            <a href="viewcustomers.php">VIEW CUSTOMERS</a>
          </div>
        </div>
      </div>
      <div class="content-wrapper">
        <div class="portfolio-items-wrapper">
          <div class="portfolio-item-wrapper">
            <div class="portfolio-img-background" style="background-image:url(internshiptransfer.jpg)">
            </div>
            <div class="img-text-wrapper">
              <div class="logo-wrapper">
                <img src="logoo.png" alt="">

              </div>
              <div class="subtitle">
                <a href="viewcustomers.php">MAKE YOUR TRANSFERS</a>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </body>
  <script type="text/javascript">
    const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

    portfolioItems.forEach(portfolioItem => {
     portfolioItem.addEventListener('mouseover', () => {
      portfolioItem.childNodes[1].classList.add('img-darken');
     });
     portfolioItem.addEventListener('mouseout', () => {
      portfolioItem.childNodes[1].classList.remove('img-darken');
     });
   });

  </script>
</html>
