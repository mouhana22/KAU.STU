<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../CSS/style.css" />
    <link rel="stylesheet" href="../../CSS/gallery.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap"
      rel="stylesheet"
    />
    <!--JAVASCRIPT-->
    <script src="../../scripts/select-image.js"></script>
    <!--Title-->
    <title>STU.KAU</title>
  </head>

  <body>
    <?php include("../../includes/header.php"); ?>

    <?php include("../../includes/links.php"); ?>

    <!--PHOTO GALLERY-->
    <div class="container text-center mt-5">
        
        <div class="card">
            <h3 class="card-header">Picture Gallery</h3>
            <div class="card-body">
                    <!--Selected image-->
        <div class="selected">
            <img src="../../images/gallery/fcit.jpg" id="main" alt="fcit logo">
        </div>

        <!--Thumbnail images-->
        <div class="thumbnail">
            <img src="../../images/gallery/fcit.jpg"  alt="fcit logo" onclick="change(this.src)">
            <img src="../../images/gallery/engineering.jpg" alt="engineering logo" onclick="change(this.src)">
            <img src="../../images/gallery/economy.jpg" alt="economy logo" onclick="change(this.src)">
            <img src="../../images/gallery/science.png"  alt="science logo" onclick="change(this.src)">
        </div>
            </div>
        </div>
        
    </div>

    <?php include("../../includes/footer.php"); ?>
  
      <!-- Bootstrap JS -->
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>
    </body>
  </html>