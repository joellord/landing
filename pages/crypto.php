<?
$title = "From Caesar Cipher To Quantum Cryptography";
$description = "Slides and additional resources for my talk '".$title."'";
$url = "http://www.javascripteverything.com/landing/crypto.php";
$image = "http://www.javascripteverything.com/landing/assets/openshift.png";
$slides = "https://www.slideshare.net/JoelLord4/from-ceasar-cipher-to-quantum-cryptography";

$conference = "PHP[World]";
$location = "Washington, DC";
$when = "October 25, 2019";

$moreText = "
  Interested in knowing more about cryptography?<br>
  Look up those resources:<br>
  <ul>
    <li><a href='https://blog.storagecraft.com/5-common-encryption-algorithms/'>Modern Encryption Algorithms</a></li>
    <li><a href='https://www.amazon.com/Code-Book-Science-Secrecy-Cryptography/dp/0385495323/ref=sr_1_1?keywords=code+book&qid=1564431642&s=gateway&sr=8-1'>The Code Book</a></li>
    <li><a href='https://www.crypto101.io/'>Crypto 101</a> by <a href='http://twitter.com/lvh'>@lvh</a></li>
    <li><a href='http://homepage.smc.edu/morgan_david/vpn/assignments/assgt-sdes-decrypt-template-with-color.pdf'>Simplified DES template</a></li>
    <li>Movies I mentioned during the talk</li>
      <ul>
        <li><a href='https://www.imdb.com/title/tt0416449/?ref_=fn_al_tt_1'>300</a></li>
        <li><a href='http://www.focusfeatures.com/mary-queen-of-scots'>Mary, Queen of Scots</a></li>
        <li><a href='https://www.imdb.com/title/tt2084970/'>The Imitation Game</a></li>
      </ul>
  </ul>
";
?>

<html>
  <head>
    <title>Thank you for attending my talk</title>

    <!-— facebook open graph tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?echo $url?>" />
    <meta property="og:title" content="<?echo $title?>" />
    <meta property="og:description" content="<?echo $description?>" />
    <meta property="og:image" content="<?echo $image?>" />

    <!-— twitter card tags additive with the og: tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" value="javascripteverything.com" />
    <meta name="twitter:title" value="<?echo $title?>" />
    <meta name="twitter:description" value="<?echo $description?>" />
    <meta name="twitter:image" content="<?echo $image?>" />
    <meta name="twitter:url" value="<?echo $url?>" />
    <meta name="twitter:label1" value="Presented at" />
    <meta name="twitter:data1" value="<?echo $conference?>" />
    <meta name="twitter:label2" value="When" />
    <meta name="twitter:data2" value="<?echo $when?>" />
  </head>

  <style>
    body {
      text-align: center;
      letter-spacing: .03em;
      font-family: "Overpass","Open Sans",Helvetica,Arial,sans-serif;
    }

    h2 {
      color: #aa0000
    }

    li {
      list-style: none;
    }

    a {
      text-decoration: none;
      color: #aa0000;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>

  <body>
    <div>
      <img width="30%" src="./assets/openshift.png" />
    </div>
    <div>
      <h1>Thank you for attending my talk!</h1>
      <h2><?echo $title?></h2>
      <h4><?echo $conference?> - <?echo $location?>, <?echo $when?></h4>
    </div>
    <div>
      Slides for this talk are available <a href="<? echo $slides ?>">on SlideShare</a>.
    </div>
    <div>
    <? echo $moreText ?>
    </div>
    <hr width="80%"/>
    <div>
      <h4>Want to learn more about <a href="http://www.openshift.com">Red Hat OpenShift</a>?</h4>
      Here's a free ebook for you!<br/><a href="https://www.openshift.com/deploying-to-openshift/">Deploying to OpenShift</a>
    </div>
  </body>
</html>
