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

    <!-- Departments Section-->
    <div class="container mt-5 pt-3" id="FCIT-departments">
      <h2>الاقسام</h2>
      <hr />
      <div class="row align-items-center">
        <div class="col-sm">
          <div class="card mt-2">
            <h4 class="card-header">قسم علوم الحاسب</h4>
            <div class="card-body">
              <p class="card-text">
                مساحة خاصة بمناقشة المواضيع المتعلقة بمواد قسم علوم الحاسب.
              </p>
              <a
                href="department.php"
                class="btn btn-outline-primary rounded-pill"
                >انتقال</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card mt-2">
            <h4 class="card-header">قسم تقنية المعلومات</h4>
            <div class="card-body">
              <p class="card-text">
                مساحة خاصة بمناقشة المواضيع المتعلقة بمواد قسم تقنية المعلومات.
              </p>
              <a
                href="department.php"
                class="btn btn-outline-primary rounded-pill"
                >انتقال</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card mt-2">
            <h4 class="card-header">قسم نظم المعلومات</h4>
            <div class="card-body">
              <p class="card-text">
                مساحة خاصة بمناقشة المواضيع المتعلقة بمواد قسم نظم المعلومات.
              </p>
              <a
                href="department.php"
                class="btn btn-outline-primary rounded-pill"
                >انتقال</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--General Space Section-->
    <div class="container px-4 py-5" id="FCIT-generalSpace">
      <h2 class="pb-2 border-bottom">المساحة العامة</h2>
      <div class="card">
        <h5 class="card-header fs-4">المشاركات</h5>
        <div class="card-body">
          <ol class="list-group list-group-numbered">
          <li>
            <a
              href="generalTopic.php"
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
            >
              <div class="ms-2 me-auto">
                <div class="fw-bold fs-5">مشاركة عامة</div>
                <div class="fs-6">بواسطة فلان الفلان في 22 فبراير 2018</div>
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
                <div class="fw-bold fs-5">مشاركة عامة</div>
                <div class="fs-6">بواسطة فلان الفلان في 22 فبراير 2018</div>
              </div>
              <span class="badge bg-primary rounded-pill">الردود 10</span>
            </a>
            </li>
            <li>
            <a
              href="generalTopic.php"
              class="list-group-item list-group-item-action d-flex justify-content-between align-items-start"
            >
              <div class="ms-2 me-auto">
                <div class="fw-bold fs-5">مشاركة عامة</div>
                <div class="fs-6">بواسطة فلان الفلان في 22 فبراير 2018</div>
              </div>
              <span class="badge bg-primary rounded-pill">الردود 15</span>
            </a>
            </li>
          </ol>
        </div>
      </div>
    </div>

    <!--Important Links Section-->
    <div class="container mt-5" id="FCIT-importantLinks">
      <h2>روابط هامة</h2>
      <hr />
      <div class="row align-items-center">
        <div class="col-sm">
          <div class="card mt-2">
            <h5 class="card-header">الدخول الموحد لانظمة الجامعة</h5>
            <div class="card-body">
              <p class="card-text">
                الدخول على جميع حساباتك في انظمة الجامعة من مكان واحد.
              </p>
              <a
                href="https://sso.kau.edu.sa/"
                class="btn btn-outline-primary rounded-pill"
                >الانتقال الى الدخول الموحد</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card mt-2">
            <h5 class="card-header">التقويم الاكاديمي</h5>
            <div class="card-body">
              <p class="card-text">
                التقويم الاكاديمي للعام الدراسي ١٤٤٥هـ الفصل الاول.
              </p>
              <a href="#" class="btn btn-outline-primary rounded-pill"
                >الانتقال الى التقويم الاكاديمي</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card mt-2">
            <h5 class="card-header">BetterKAU</h5>
            <div class="card-body">
              <p class="card-text">
                بسطنا لك تنظيم جدولك الدراسي الان بطريقة سهلة وفعالة 🗓️ !!
              </p>
              <a
                href="https://betterkau.com/"
                class="btn btn-outline-primary rounded-pill"
                >BetterKAU</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card mt-2">
            <h5 class="card-header">مجموعة الواتساب لكل دفعة</h5>
            <div class="card-body">
              <div class="row align-items-center">
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >دفعة 20</a
                >
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >دفعة 21</a
                >
              </div>
              <div class="row align-items-center">
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >دفعة 22</a
                >
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >دفعة 23</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-sm-3">
          <div class="card mt-2">
            <h5 class="card-header">مصادر هامة</h5>
            <div class="card-body">
              <div class="row align-items-center">
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >درايف 17</a
                >
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >درايف 18</a
                >
              </div>
              <div class="row align-items-center">
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >درايف 19</a
                >
                <a
                  href="#"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >درايف 20</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card mt-2">
            <h5 class="card-header">قائمة اعضاء هيئة التدريس</h5>
            <div class="card-body">
              <div class="row align-items-center">
                <a
                  href="https://fcitweb.kau.edu.sa/fcitwebsite/facultycsar.php"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >علوم الحاسب</a
                >
                <a
                  href="https://fcitweb.kau.edu.sa/fcitwebsite/facultyitar.php"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >تقنية المعلومات</a
                >
                <a
                  href="https://fcitweb.kau.edu.sa/fcitwebsite/facultyisar.php"
                  class="col-sm btn btn-outline-primary rounded-pill m-2"
                  >نظم المعلومات</a
                >
              </div>
            </div>
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
