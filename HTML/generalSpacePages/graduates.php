<!--Authors: Mouhana Almouhana,  Yazan Alshareef-->
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


    <!--GRADUATES BODY-->
    <div class="container px-4 py-5" id="hanging-icons">
      <div class="text-center">
        <h2 class="pb-2 col-sm" id="depSub">مساحة الخريجين</h2>
        <p>Graduates Space</p>
        <hr />
       <!-- Button trigger writing blog modal -->
        <button
          type="button"
          class="btn btn-outline-primary rounded-pill col-sm-3 mb-3"
          data-bs-toggle="modal"
          data-bs-target="#writingModal"
        >
          كتابة مشاركة
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
                  كتابة مشاركة
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
                    >عنوان المشاركة</label
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
                    >محتوى المشاركة</label
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

      <!--GENERAL DISCUSSION-->
      <div class="card">
        <h5 class="card-header fs-4">المشاركات</h5>
        <div class="card-body">
          <ol class="list-group list-group-numbered mb-5">
            <li>
            <a
              href="generalTopic.php"
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
            >
              <div class="ms-2 me-auto">
                <div class="fw-bold fs-5">مشاركة 1</div>
                <div class="fs-6">مختصر المشاركة...</div>
              </div>
              <span class="badge bg-primary rounded-pill">الردود 7</span>
            </a>
            </li>
            <li>
            <a
              href="generalTopic.php"
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
            >
              <div class="ms-2 me-auto">
                <div class="fw-bold fs-5">مشاركة 2</div>
                <div class="fs-6">مختصر المشاركة...</div>
              </div>
              <span class="badge bg-primary rounded-pill">الردود 2</span>
            </a>
            </li>
            <li>
            <a
              href="generalTopic.php"
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
            >
              <div class="ms-2 me-auto">
                <div class="fw-bold fs-5">مشاركة 3</div>
                <div class="fs-6">مختصر المشاركة...</div>
              </div>
              <span class="badge bg-primary rounded-pill">الردود 8</span>
            </a>
            </li>
            <li>
            <a
              href="generalTopic.php"
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
            >
              <div class="ms-2 me-auto">
                <div class="fw-bold fs-5">مشاركة 4</div>
                <div class="fs-6">مختصر المشاركة...</div>
              </div>
              <span class="badge bg-primary rounded-pill">الردود 3</span>
            </a>
            </li>
            <li>
            <a
              href="generalTopic.php"
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
            >
              <div class="ms-2 me-auto">
                <div class="fw-bold fs-5">مشاركة 5</div>
                <div class="fs-6">مختصر المشاركة...</div>
              </div>
              <span class="badge bg-primary rounded-pill">الردود 5</span>
            </a>
            </li>
          </ol>
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
