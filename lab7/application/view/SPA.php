<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Define CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
  <!-- Define JS -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Define useful fonts -->
  <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
  <!-- Font links -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <!-- JS for X3D displays-->
  <link rel='stylesheet' type='text/css' href='css/x3dom.css'>
  <script type='text/javascript' src='js/x3dom.js'></script>

  <!-- JS for swap -->
  <script type="text/javascript" src='js/Swap.js'></script>
  <script type="text/javascript" src='js/AnimationTrigger.js'></script>
  
  <!-- JS for gallery generator -->
  <script type="text/javascript" src="js/gallery_generator.js"></script>

  <script src="js/getJsonData.js"></script>

  <title>Single Page Application</title>
</head>

<body>
  <!-- Logo and navigation bar -->
  <nav class="navbar navbar-expand-sm navbar_coca_cola">
    <div class="container">
      <!-- Brand -->
      <div class="logo">
        <a class="navbar-brand" href="#">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
        </a>
      </div>

      <!-- Navbar menu icon-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Link menu button to the links class navbar-collaspe selector -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="javascript:swap('home')">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Drinks
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:swap('coke')">Coce cola</a>
              <a class="dropdown-item" href="javascript:swap('sprite')">Sprite</a>
              <a class="dropdown-item" href="javascript:swap('pepper')">Dr Pepper</a>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- Home page block-->
  <div id="home" class="container main_contents">
    <!-- Image -->
    <div class="row">
      <div class="col-sm-12">
        <div id="main_3d_image">
          <div id="main_text" class="col-xs-12 col-sm-4">
            <div id="title_home"></div>
            <div id="subTitle_home"></div>
            <div id="description_home"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Colums -->
    <div class="row">
      <div class="col-sm-4">
        <!-- Coca cola card -->
        <div class="card">
          <a href="#">
            <img class="card-img-top" src="Assets/images/coca_cola.jpg" alt="Coca Cola">
          </a>
          <div class="card-body">
            <div id="title_left" class="card-title homeText"></div>
            <div id="subTitle_left" class="card-subtitle homeText"></div>
            <div id="description_left" class="card-text homeText"></div>
            <a href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <!-- Coca cola card -->
        <div class="card">
          <a href="#">
            <img class="card-img-top" src="Assets/images/sprite.jpg" alt="Sprite">
          </a>
          <div class="card-body">
            <div id="title_centre" class="card-title homeText"></div>
            <div id="subTitle_centre" class="card-subtitle homeText"></div>
            <div id="description_centre" class="card-text homeText"></div>
            <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <!-- Coca cola card -->
        <div class="card">
          <a href="#">
            <img class="card-img-top" src="Assets/images/dr_pepper.jpg" alt="Dr Pepper">
          </a>
          <div class="card-body">
            <div id="title_right" class="card-title homeText"></div>
            <div id="subTitle_right" class="card-subtitle homeText"></div>
            <div id="description_right" class="card-text homeText"></div>
            <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary">Find out more ...</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Coke page block-->
  <div id="coke" class="container main_contents" style="display:none;">
    <p>
      <div class="container main_contents">
            
          <div class="row">
            <!-- X3D tabs -->
            <div class="col-sm-9">
              <div class="card text-left">
    
                <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="CokePage.html">Coke</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="CokePage.html">Sprite</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="CokePage.html">Dr Pepper</a>
                    </li>
                  </ul>
                </div>
    
              <!-- X3D model-->
                <div class="card-body">
                  <div id = "coke">
                    <div id = "x3dTitle_Coke" class="card-title drinksText"></div>
                    <!-- Here is the 3D model-->
                    <div class="model3D">
                      <x3d>
                        <scene>
                          <inline nameSpaceName="model" mapDEFToID="true" onclick="AnimationModel();" url = "Assets/X3d/Coke_Rotate.x3d"></inline>
                        </scene>
                      </x3d>
                    </div>
                  </div>                 
                  <h4 class="card-title">Coca cola 3d model</h4>
    
                  
    
                  <p class="card-text"> Here is the 3D model for the coke cola can.</p>
                  <h4>Camera views</h4>
                  <p class="card-text">Here are some buttons to select a viewpoint for the X3d model.</p>
                  <a href="#" class="btn btn-primary btn-responsive camera-font" onclick="AnimationOn();">Spin</a>
                  <a href="#" class="btn btn-secondary btn-responsive camera-font" onclick="AnimationOff();">Back</a>
                  <a href="#" class="btn btn-success btn-responsive camera-font">Left</a>
                  <a href="#" class="btn btn-danger btn-responsive camera-font">Right</a>
                </div>
              </div>
            </div>
    
            
            <!-- 3D image gallery -->
            <div class="col-sm-3">
              <div class="card text-left">
                <div class="card-header">Gallery</div>
    
                <div class="card-body">
                 <h4 class="card-title">3D Image Gallery</h4>
                 <div class="gallery" id="gallery_coke"></div>
                 <p class="card-text">Here is the gallery by PHP.</p>
                </div>
              </div>
            </div>
    
          </div>
    
            <!-- Colums -->
            <div class="row">
              <div class="col-sm-12">
              <!-- Coca cola card -->
              <div class="card">
                 <div class="card-body">
                   <h5 class="card-title">Coca Cola</h5>
                   <p class="card-text">It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled.
                    Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs' Pharmacy put it on sale for five cents (about 3p) a glass.</p>
                   <a href="#" class="btn btn-primary">Find out more ...</a>
                 </div>
              </div>
              </div>
    
              
            
    
            </div>
            
      </div></p>
  </div>

  <!-- Sprite page block-->
  <div id="sprite" class="container main_contents" style="display:none;">
    <p>Merge sprite.html here</p>
  </div>

  <!-- Pepper page block-->
  <div id="pepper" class="container main_contents" style="display:none;">
    <p>Merge pepper.html here</p>
  </div>

  <!-- Web footer -->
  <nav class="navbar navbar-expand-sm footer">
    <div class="container">
      <div class="navbar-text float-left copyright">
        <p><span class="align-baseline"></span>&copy 2024 Mobile Web 3D Applications</span></p>
      </div>
      <div class="navbar-text float-right social">
        <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size: 20px; color: red;"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x" style="font-size: 20px; color: green;"></i></a>
        <a href="#"><i class="fab fa-google-plus fa-2x" style="font-size: 20px; color: blue;"></i></a>
        <a href="#"><i class="fab fa-github-square fa-2x" style="font-size: 20px; color: yellow;"></i></a>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="contactModal">
  </div>
</body>

</html>