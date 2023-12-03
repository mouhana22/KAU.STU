<!--Authors: Mouhana Almouhana,  Yazan Alshareef-->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap"
      rel="stylesheet"
    />
    <!--Title-->
    <title>STU.KAU</title>
  </head>
  <body>
    <?php include("../../includes/header.php"); ?>

    <?php include("../../includes/links.php"); ?>
    

    <!--Course Space Section-->
    <div class="container px-4 py-5" id="courseSpace">
      <div class="text-center">
        <h2>CPCS-202</h2>
        <p>برمجة المستوى الاول (جافا) | Programming 1 (JAVA)</p>
        <hr />

        <!-- Button trigger writing blog modal -->
        <button
          type="button"
          class="btn btn-outline-primary rounded-pill col-sm-3"
          data-bs-toggle="modal"
          data-bs-target="#writingModal"
        >
          كتابة تدوينة
        </button>

        <!-- writing blog Modal -->
        <div
          class="modal fade"
          id="writingModal"
          tabindex="-1"
          aria-labelledby="exampleModalLabel1"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel1">
                  كتابة تدوينة
                </h1>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="postTitleInput" class="form-label"
                    >عنوان التدوينة</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="postTitleInput"
                    placeholder="تجربتي في مادة برمجة 1"
                  />
                </div>
                <div class="mb-3">
                  <label for="postContentInput" class="form-label"
                    >محتوى التدوينة</label
                  >
                  <textarea
                    class="form-control"
                    id="postContentInput"
                    rows="3"
                  ></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  الغاء
                </button>
                <button type="button" class="btn btn-primary">ارسال</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="list-group list-group-flush">

      <?php include("../../includes/fetchPosts.php"); ?>
      
      </ol>
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
