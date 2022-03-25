<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    // Globals
    $title = "Power-Up With Clouds And (Tekton) Pipelines";
    $url = "http://javascripteverything.com/landing/tkn-powerup.php";
    $description = "Additional resources for my talk ".$title;
    $bgImage = "assets/pipe.jpg";
    $image = "http://www.javascripteverything.com/landing/assets/mongodb.png";
    $conference = "Scenic City Summit";
    $conferenceLink = "https://sceniccitysummit.com";
    $date = "September 24, 2021";
    $eventHashtag = "#SCS2021";

    $linksLine1 = "Thank you for attending my talk about Tekton Pipelines and Cloud-Native CI/CD. I hope you've enjoyed it. If so, please <a href='https://twitter.com/joel__lord'>Tweet about it</a>.";
    $links = [
      ["link" => "https://tekton.dev", "text" => "Tekton Official Website"],
      ["link" => "https://www.redhat.com/en/topics/devops/what-is-ci-cd", "text" => "What is CI/CD by Red Hat"],
      ["link" => "https://learn.openshift.com/middleware/pipelines/", "text" => "Try out Tekton pipelines in OpenShift"],
      ["link" => "http://tekton.dev/docs/concepts", "text" => "Tekton Concepts"],
      ["link" => "https://hub-preview.tekton.dev/", "text" => "Tekton Tasks Catalog (preview)"]
    ];

    $slideType = "diorama";
    $slideText = "";
    $slideLink = [];

    switch ($slideType) {
      case "container": 
        $slideText = "Looking for my slides? You won't be able to see them as a PDF but... there is a containerized version! You can start the slide deck with <br/><br/><i>docker run -it joellord/containers-talk</i>";
        $slideLink = ["link" => "https://hub.docker.com/repository/docker/joellord/containers-talk", "text" => "Slides container on Docker Hub"];
        break;
      case "diorama": 
        $slideText = "Looking for my slides? You won't be able to see them as a PDF but you can run the react application locally.";
        $slideLink = ["link" => "https://github.com/joellord/pipes-and-clouds", "text" => "Slide Deck"];
        break;
      default:
        $slideText = "Looking for my slides? They are not available yet but come back soon and I'll have them uploaded.";
        $slideLink = false;
    }

    $codeText = "The best way to learn is always to try the code samples on your own. Give it a try and ping me on <a href='http://twitter.com/joel__lord'>Twitter</a> if you have any questions!";
    $codeLink = ["link" => "https://github.com/joellord/pipes-and-clouds", "text" => "Code samples on Github"];
  ?>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<? echo $description ?>">
  <meta name="author" content="Joel Lord">

  <title>Thank you for attending <?= $title ?></title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="assets/css/clean-blog.min.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">

  <!-- facebook open graph tags -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<? echo $url ?>" />
  <meta property="og:title" content="<? echo $title ?>" />
  <meta property="og:description" content="<? echo $description ?>" />
  <meta property="og:image" content="<? echo $image ?>" />

  <!-- twitter card tags additive with the og: tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:domain" value="javascripteverything.com" />
  <meta name="twitter:title" value="<? echo $title ?>" />
  <meta name="twitter:description" value="<? echo $description ?>" />
  <meta name="twitter:image" content="<? echo $image ?>" />
  <meta name="twitter:url" value="<? echo $url ?>" />
  <meta name="twitter:label1" value="Presented at" />
  <meta name="twitter:data1" value="<? echo $conference ?>" />
  <meta name="twitter:label2" value="When" />
  <meta name="twitter:data2" value="<? echo $date ?>" />

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">#</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#links">Links</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#code">Slides and Code</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#mongodb">MongoDB</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<? echo $bgImage ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1 data-field="title"><? echo $title ?></h1>
            <h2 class="subheading">Links, code and more...</h2>
            <br/>
            <h3 class="meta">
              <a href="<? echo $conferenceLink ?>"><? echo $conference ?></a>
              <br/>
              <? echo $date ?></h3>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Links -->
  <section id="links">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h2 class="section-title">Find out more</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p><? echo $linksLine1?></p>
          <p>Here are a few links with additional information about the topic you've just learned about.</p>
          <ul>
            <?php
            foreach($links as $link) {
              ?>
              <li><a href="<? echo $link["link"] ?>"><? echo $link["text"] ?></a></li>
              <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <hr />

  <section id="code">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h2 class="section-title">Slides and Code</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h3 class="section-subtitle">Slides</h3>
          <p><? echo $slideText ?></p>
          <?php if ($slideLink) {?>
          <p><a href="<? echo $slideLink["link"]?>"><? echo $slideLink["text"]?></a></p>
          <?php } ?>
          <h3 class="section-subtitle">Code Samples</h3>
          <p><? echo $codeText ?></p>
          <?php if ($codeLink) {?>
          <p><a href="<? echo $codeLink["link"]?>"><? echo $codeLink["text"]?></a></p>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <hr />

  <section id="mongodb">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <h2 class="section-title">Curious about MongoDB?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>If you want to learn more about <a href="https://mongodb.com">MongoDB</a>, here are a few links that will help you get started.</p>
          <ul>
            <li><a href="https://www.mongodb.com/try">Try MongoDB in the cloud for free</a></li>
            <li><a href="https://www.youtube.com/watch?v=fbYExfeFsI0&t=0s">MongoDB and Node.js, a 4 part tutorial by Lauren Schaefer</a></li>
            <li><a href="https://www.mongodb.com/live">Join us on July 13-14 for MongoDB.live to learn about the lastest trends and products.</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <hr />

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://twitter.com/joel__lord">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/joel-lord">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/joellord">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Joel Lord <?php echo date("Y") ?></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/clean-blog.min.js"></script>
  <script src="assets/js/scrolling-nav.js"></script>

</body>

</html>
