<!DOCTYPE html>
<html lang="en">

<head>
  <title>TetraMap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/about.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

  <?php include('modules/notification.php');?>

  <div class="perspective effect-rotate-left">
    <div class="container">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">

          <?php include('modules/header.php');?>

          <nav class="l-side-nav">
            <ul class="side-nav">
              <li class="is-active"><span>INTRO</span></li>
              <li><span>WHY</span></li>
              <li><span>NATURE</span></li>
            </ul>
          </nav>


          <ul class="l-main-content main-content">
            <li class="l-section section section--is-active">
              <div class="intro" >
                <div class="intro--banner intro--tetra" >
                  <h1 style="text-align:center">TetraMap is metaphor</h1>
                  <h2 style="text-align:center">that is used to explore inter-dependencies</h2>
                  <!-- <p>TetraMap founders Yoshimi and Jon Brett</p> -->
                </div>
                <div class="intro--options">
                  <a class="option--tetra" href="/">
                    <h3>TO HELP YOU</h3>
                    <p>
                    TetraMap® maps are a very useful way to help you navigate your way through your thinking or Planning. It’s incredibly helpful to find your way through Conflict, Planning, Deciding, Influencing and can be used in almost any situation. 
                    </p>
                  </a>
                  <a class="option--tetra" href="/">
                    <h3>INCLUSIVE FRAMEWORK</h3>
                    <p>
                    TetraMap is an Inclusive framework which is designed to Value Differences and use each other’s strengths to obtain the best possible outcomes.
                    </p>
                  </a>
                </div>
              </div>
            </li>


            <li class="l-section section">
              <div class="work">
                <div id="tetrahedron"></div>
                <h2>Why the Tetrahedron</h2>
                  <p class="work--tetra">
                    The tetrahedron is a four sided-pyramid. It is a fascinating geometric shape.<br> <strong style="color:#0f33ff">The tetrahedron is the minimum structural system in Universe.</strong>
                  </p>
                  <ul class="work--list">
                    <li>It has no opposite faces</li>
                    <li>Each triangle touches every other triangle, showing inter-dependece</li>
                    <li>You can make a tetrahedron from just two triangles, showing the sysnergy of</li>
                  </ul>
                  <p style="padding: 1rem 5rem; color:#999;">
                    Picture a different Element of Nature on each face of the tetrahedron. Unfold the tetrahedron and you have the TetraMap! TetraMap also helps us look at ourselves and our word from at least four different perspectives. This gives us a more holistic approach to finding solutions to many of our challenges.
                  </p>
              </div>
            </li>


            <!-- nature -->
            <li class="l-section section">
              <div class="about">
                <div class="about--banner">
                  <h2>Nature<br>as a Metaphor</h2>
                  <p>
                      Nature illustrates how Earth, Air, Water and Fire work together in synergy. <br>
                      It’s hard to imagine life or a sustainable environment without each one of them.
                    </p>
                </div>
                <div class="row">
                  <ul class="col-sm-12 cards">

                    <li class="col-md-3 col-sm-6 one-card">
                      <div class="card-container">
                        <div class="card">
                          <div class="front">
                            <div class="cover">
                              <img src="assets/img/bg-earth.png" />
                            </div>
                            <div class="t-icon">
                              <img class="img-circle" src="assets/img/icon-earth.png" />
                            </div>
                            <div class="content">
                              <div class="main">
                                <h3 class="title">Earth</h3>
                                <p class="means">Firm</p>
                                <p>
                                  Like a mountain is firm
                                </p>
                              </div>
                            </div>
                          </div> <!-- end front panel -->
                          <div class="back">
                            <div class="content">
                              <div class="main">
                                <div class="t-icon">
                                  <img class="img-circle" src="assets/img/icon-earth.png" />
                                </div>
                                <h3 class="title">Earth</h3>
                                <p>
                                  Bold and sturdy, Earth Elements are confident in the way they walk and talk.
                                  Goals, control, achievement and winning are important. Quick, possibly risky
                                  decisions come easily.
                                </p>
                              </div>
                            </div>
                          </div> <!-- end back panel -->
                        </div> <!-- end card -->
                      </div> <!-- end card-container -->
                    </li> <!-- end each card -->
                    <li class="col-md-3 col-sm-6 one-card">
                      <div class="card-container">
                        <div class="card">
                          <div class="front">
                            <div class="cover">
                              <img src="assets/img/bg-air.png" />
                            </div>
                            <div class="t-icon">
                              <img class="img-circle" src="assets/img/icon-air.png" />
                            </div>
                            <div class="content">
                              <div class="main">
                                <h3 class="title">Air</h3>
                                <p class="means">Clear</p>
                                <p>
                                  Like the wind is clear  
                                </p>
                              </div>
                            </div>
                          </div> <!-- end front panel -->
                          <div class="back">
                            <div class="content">
                              <div class="main">
                                <div class="t-icon">
                                  <img class="img-circle" src="assets/img/icon-air.png" />
                                </div>
                                <h3 class="title">Air</h3>
                                <p>
                                    These orderly and focused individuals rely on their abilities to think things out. They excel in finding logical solutions. Air Elements listen and plan to ensure accuracy and quality.
                                </p>
                              </div>
                            </div>
                          </div> <!-- end back panel -->
                        </div> <!-- end card -->
                      </div> <!-- end card-container -->
                    </li> <!-- end each card -->
                    <li class="col-md-3 col-sm-6 one-card">
                      <div class="card-container">
                        <div class="card">
                          <div class="front">
                            <div class="cover">
                              <img src="assets/img/bg-water.png" />
                            </div>
                            <div class="t-icon">
                              <img class="img-circle" src="assets/img/icon-water.png" />
                            </div>
                            <div class="content">
                              <div class="main">
                                <h3 class="title">Water</h3>
                                <p class="means">Calm</p>
                                <p>
                                  Like a lake is calm
                                </p>
                              </div>
                            </div>
                          </div> <!-- end front panel -->
                          <div class="back">
                            <div class="content">
                              <div class="main">
                                <div class="t-icon">
                                  <img class="img-circle" src="assets/img/icon-water.png" />
                                </div>
                                <h3 class="title">Water</h3>
                                <p>
                                    Caring and consistent, Water Elements are important in holding families and teams together. They are loyal and deeply feeling people who show steadfast effort.
                                </p>
                              </div>
                            </div>
                          </div> <!-- end back panel -->
                        </div> <!-- end card -->
                      </div> <!-- end card-container -->
                    </li> <!-- end each card -->
                    <li class="col-md-3 col-sm-6 one-card">
                      <div class="card-container">
                        <div class="card">
                          <div class="front">
                            <div class="cover">
                              <img src="assets/img/bg-fire.png" />
                            </div>
                            <div class="t-icon">
                              <img class="img-circle" src="assets/img/icon-fire.png" />
                            </div>
                            <div class="content">
                              <div class="main">
                                <h3 class="title">Fire</h3>
                                <p class="means">Bright</p>
                                <p>
                                  Like the sun is bright
                                </p>
                              </div>
                            </div>
                          </div> <!-- end front panel -->
                          <div class="back">
                            <div class="content">
                              <div class="main">
                                <div class="t-icon">
                                  <img class="img-circle" src="assets/img/icon-fire.png" />
                                </div>
                                <h3 class="title">Fire</h3>
                                <p>
                                    Looking at the positive side of life, they love to explore possibilities and inspire others to see bright futures. Fire Elements are often colourful and have a great sense of fun!
                                </p>
                              </div>
                            </div>
                          </div> <!-- end back panel -->
                        </div> <!-- end card -->
                      </div> <!-- end card-container -->
                    </li> <!-- end each card -->

                  </ul> <!-- end card section-->
                </div>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <!-- //container -->
    <?php include('modules/nav.php');?>
  </div>
  <!-- // perspective -->

  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/functions-min.js"></script>
  <script src="assets/js/card.js"></script>
  <script src="assets/js/vendor/three.js"></script>
  <script src="assets/js/vendor/OrbitControls.js"></script>
  <script src="assets/js/vendor//WebGL.js"></script>
  <script src="assets/js/vendor/stats.min.js"></script>
  <script src="assets/js/3d-logo-s.js"></script>
</body>

</html>