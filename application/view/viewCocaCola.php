<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3D</title>
    <!-- bootstrap.css -->
    <link rel="stylesheet" href="../application/css/bootstrap.css">
    <!-- custom.css -->
    <link rel="stylesheet" href="../application/css/custom.css">
    <!-- X3dom -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    <!-- Use fancy box -->
    <link rel="stylesheet" href="../application/css/fancybox.css">
    <!-- Fontawesome font -->
    <script src="https://kit.fontawesome.com/7af889d1f3.js" 
    crossorigin="anonymous"></script>
    <!-- Get view -->
    <?php require 'HomeImageCard.php';
          require 'viewLogo.php';
          require 'viewHomeMainContent.php';
          require 'viewmodel.php'
    ?>
  </head>
  <body id ="bodyColor" >
    <!-- Logo and navigation bar -->
    <nav id = "headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      <div class="container-fluid">
        <!-- Brand -->
        <div class="logo">
          <a id="Looo" class="navbar-brand" href="#">
          
          </a>
        </div>          
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Link menu item button to the links class navbar-collapse selector-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Link -->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <button id="Header_homeButton" class="nav-link active">Home</button> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-bs-toggle="dropdown" >Drinks</a>
              <div class="dropdown-menu">
                <button id="Header_cokeButton" class="dropdown-item" >Coca Cola</button>
                <button id="Header_spriteButton" class="dropdown-item" >Sprite</button>
                <button id="Header_pepperButton" class="dropdown-item" >Dr Pepper</button>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">Contact</a>
            </li>
          </ul>
        </div>    
      </div>
    </nav>

    <div class="container-fluid main_contents">
      <!-- Home Page block element -->
      <div id="home">
        <div class="row">
          <div class="col-md-12">
            <div id="main_3d_image">
              <div id="main_text" class="col-xl-12 col-sm-4">
                <!-- <div id="Home_Title"></div>
                <div id="Home_Subtitle"></div>
                <div id="Home_Description"></div> -->
              </div>
            </div>
          </div>
        </div>
        <br>
        <div id = placholder class="row">
                <?php echo $htmlCode; ?>
        </div>
      </div>
      <!-- End home page -->
      <div id="3DModelAndGallery">
        <!-- Two things in one row -->
        <div class="row">
          <!-- X3D Models — Place 3 models in here for the assignment -->
          <div class="col-sm-8">
            <div class="card text-start">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <button id="cokeButton_3DPage" class="nav-link active">Coke</button>
                  </li>
                  <li class="nav-item">
                    <button id="spriteButton_3DPage" class="nav-link " >Sprite</button>
                  </li>
                  <li class="nav-item">
                    <button id="pepperButton_3DPage" class="nav-link ">Pepper</button>
                  </li>
                </ul>
              </div>
              <!-- Coke,Sprite,Pepper X3D Model -->
              <div class="card-body">
                <div id="coke">
                      <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                          <div class="model3D">
                              <x3d id="model">
                                  <scene>
                                      <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/FinalCoke.x3d" > </inline>
                                  </scene>
                              </x3d>
                     </div> 
                      <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                  </div>
                <div id="sprite">
                          <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                          
                          <div class="model3D">
                              <x3d id="models">
                                  <scene>
                                      <inline nameSpaceName="models" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/newsprite.x3d" > </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                </div>
                  <div id="pepper">
                          <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>
                          
                          <div class="model3D">
                              <x3d id="modelss">
                                  <scene>
                                      <inline nameSpaceName="modelss" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/FinalPepper.x3d" > </inline>
                                  </scene>
                              </x3d>
                          </div> 
                          <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                  </div>
              </div>
            </div>
          </div>
          <!-- 3D image Gallery -->
          <div class="col-sm-4">
            <div class="card text-start">
              <div class="card-header gallery-header">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <!-- Dynamically generated image gallery using JS and PHP -->
                <div class="card-title title_gallery"></div>
                <div class="gallery" id="gallery_coke"></div>
                <div class="card-text description_gallery"></div>
              </div>
            </div> <!-- End gallery column -->
          </div> <!-- End gallery column -->
        </div><!-- End row for X3D Model and Gallery -->
      </div> <!-- End X3D Models and Gallery -->
      
      <!-- The light camera -->
      <div id ="interaction">
        <div class="row">
          <div class="col-sm-12">
            <div class="card text-start">
              <div class="card-header">
                <ul class="nav nav-underline">
                  <li class="nav-item">
                    <a id="CameraViews_Button" class="nav-link active" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a id="AnimationOptions_Button" class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                    <a id="RenderLights_Button" class="nav-link" href="#"></a>
                  </li>
                </ul>
              </div>
              <!-- The Part of CameraViews -->
              <div id ="CameraViews">
                <div class="card-header">
                  <ul class="nav nav-tabs">
                    <li class="nav-item dropdown">
                      <div class="btn-group dropend">
                        <a id="Camera_Header"class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                          <li><a id="Frontside" class="dropdown-item" href="#" onclick="cameraFront()"></a></li>
                          <li><a id="BackSide" class="dropdown-item" href="#" onclick="cameraBack()"></a></li>
                          <li><a id="LeftSide" class="dropdown-item" href="#" onclick="cameraLeft()"></a></li>
                          <li><a id="RightSide" class="dropdown-item" href="#" onclick="cameraRight()"></a></li>
                          <li><a id="TopSide" class="dropdown-item" href="#" onclick="cameraTop()"></a></li>
                          <li><a id="BottomSide" class="dropdown-item" href="#" onclick="cameraBottom()"></a></li>
                        </ul>
                      </div>  
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                    <button id="Default_Button" type="button" class="btn btn-success" onclick="cameraFront()"></button>
                    <button id="Back_Button" type="button" class="btn btn-primary" onclick="cameraBack()"></button>
                    <button id="Left_Button" type="button" class="btn btn-secondary" onclick="cameraLeft()"></button>
                    <button id="Right_Button" type="button" class="btn btn-info" onclick="cameraRight()"></button>
                    <button id="Off_button" type="button" class="btn btn-dark" onclick="cameraFront()"></button>
                </div>
                <div class="card-text x3dCameraSubtitle"></div>
              </div><!-- The end of CameraViews-->

              <!-- The part of Animation -->
              <div id="Animation">
                <div class="card-body">
                  <button id="RotX_Button" type="button" class="btn btn-outline-primary" onclick="spin()"></button>
                  <button id="RotY_Button" type="button" class="btn btn-outline-light" onclick="spin2()"></button>
                  <button id="Rotz_Button"type="button" class="btn btn-outline-success" onclick="spin3()"></button>
                  <button id="Stop_Button" type="button" class="btn btn-outline-danger" onclick="stopRotation()"></button>
                </div>
                <div class="card text AnimationText"></div>
              </div><!-- The end of Animation-->

              <!-- The part of Render and lights -->
              <div id="RenderLights">
                <div class="card-header">
                  <ul class="nav nav-tabs">
                    <li class="nav-item dropdown">
                      <a id="Render_header" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Renders</a>
                      <ul class="dropdown-menu">
                        <li><a id="Polygon_dropdown" class="dropdown-item" href="#"></a></li>
                        <li><a id="Wireframe_dropdown"class="dropdown-item" href="#" onclick="wireframe()"></a></li>
                        <li><a id="Vertex_dropdown"class="dropdown-item" href="#" onclick="toggleVertices()"></a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a id="Lights_header"class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Lights</a>
                      <ul class="dropdown-menu">
                        <li><a id="RenderLights_Default_Button"class="dropdown-item" href="#"></a></li>
                        <li><a id="Onmi_button" class="dropdown-item" href="#" onclick="pointlight()"></a></li>
                        <li><a id="Target_Button" class="dropdown-item" href="#"></a></li>
                        <li><a id="Headlight_dropdown"class="dropdown-item" href="#" onclick="headlight()"></a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- The end of CardHeader-->
                <div class="card-body">
                  <button id="Poly_Button" type="button" class="btn btn-success"></button>
                  <button id="Wire_Button" type="button" class="btn btn-primary" onclick="wireframe()"></button>
                  <button id="Headlight_Button" type="button" class="btn btn-secondary" onclick="headlight()"></button>
                  <button id="Default_info_Button" type="button" class="btn btn-info" onclick="RenderLightsDefault()"></button>
                </div> <!-- The end of Card body-->
                <div class="card-text RenderLightsText"></div>
              </div><!-- The end of RenderLights-->
  
            </div><!-- The end of card-->
          </div><!-- The end of col-->
        </div><!-- The end of row -->
      </div><!-- The end of interaction -->
  
      <!-- X3D coke can page description -->
      <div id="Coke3D_Description"class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div id="CokeBottom_Title" class="card-title"></div>
              <div id="CokeBottom_SubTitle" class="card-subtitle"></div>
              <div id="CokeBottom_Description" class="card-text"></div> 
              <a id="coke3DWebsite" class="btn btn-primary">Find out more about Coke...</a>
            </div>
          </div><!-- coke 3d description card end -->
        </div><!-- col end -->
      </div><!-- row end-->

      <!-- X3D Sprite Bottle page description -->
      <div id="Sprite3D_Description"class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div id="SpriteBottom_Title" class="card-title"></div>
              <div id="SpriteBottom_SubTitle" class="card-subtitle"></div>
              <div id="SpriteBottom_Description" class="card-text"></div> 
              <a id="sprite3DWebsite"class="btn btn-primary">Find out more about Sprite...</a>
            </div>
          </div><!-- Sprite 3d description card end -->
        </div><!-- col end -->
      </div><!-- row end-->

      <!-- X3D Sprite Bottle page description -->
      <div id="Pepper3D_Description"class="row">
        <!-- Coca cola column -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div id="PepperBottom_Title" class="card-title"></div>
              <div id="PepperBottom_SubTitle" class="card-subtitle"></div>
              <div id="PepperBottom_Description" class="card-text"></div> 
              <a id="pepper3DWebsite" class="btn btn-primary">Find out more about Pepper...</a>
            </div>
          </div><!--  3d description card end -->
        </div><!-- col end -->
      </div><!-- row end-->
   
  </div>
    
    <br>
    <!-- Your 3D app footer -->
      <nav id = footerColor class="navbar navbar-expand-sm footer ">
        <div class="container-fluid">
          <div class="navbar-text float-start copyright">
          <p><span class="align-baseline">&copy 2024 LabTop and Mobile Web 3D Application | <a href="javascript:changeLook()">Restyle</a>| <a href="javascript:changeBack()">Reset</a></span></p>
        </div>
        <div class="navbar-text float-end social">
          <a href="#"><i class="fa-brands fa-facebook-square fa-2x fa-pull-right"></i></a>
          <a href="#"><i class="fa-brands fa-twitter-square fa-2x fa-pull-right"></i></a>
          <a href="#"><i class="fa-brands fa-google-plus-g fa-2x fa-pull-right"></i></a>
          <a href="#"><i class="fa-brands fa-square-github fa-2x fa-pull-right"></i></a>
        </div>
          
      </div>
    </nav>

  
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../application/js/jquery-3.7.1.js"></script>
    <script src="../application/js/popper.min.js"></script>
    <script src="../application/js/bootstrap.js"></script>
    <!-- Include the x3dom JavaScript -->
    <script src="../application/js/x3dom.js"></script>
    <script src="../application/js/custom.js"></script>
    <!-- JavaScript to swap for SPA and restyle -->
    <!-- <script src="scripts/js/swap_restyle.js"></script> -->
    <!-- Jquery to show and hide page -->
    <script src="../application/js/swapJquery_restyle.js"></script>
    <!-- JavaScript and PHP based Gallery generator  -->
    <script src="../application/js/gallery_generator.js"></script>
    <!-- Get Json data for page text -->
    <script src="../application/js/getJsonData.js"></script>
    <!-- Include the x3dom JavaScript -->
    <script type='text/javascript' src='../application/js/x3dom.js'></script>
    <!-- Add fancy box -->
    <script src="../application/js/fancybox.umd.js"></script>
    <script src="../application/js/fancybox_trigger.js"></script>
    <script src="../application/js/modelinteraction.js"></script>
  </body>
</html>
