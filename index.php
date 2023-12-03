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
    <link rel="stylesheet" href="CSS/style.css" />
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

  <?php include("includes/header.php"); ?>

  <?php include("includes/links.php"); ?>
    
    <!--landing area-->
    <div class="landing d-flex justify-content-center align-items-center">
      <div class="text-center bg-body-tertiary">
        <h1 class="text-dark">مبادرة STU.KAU</h1>
        <p class="text-dark">
          هي مبادرة من الطالب الى الطالب لتكوين منصة تجمع عدة مساحات لمشاركة
          الخبرات والتجارب الجامعية والمهنية بين طلاب الجامعة.
        </p>
        <a href="#faculties" class="btn btn-outline-primary rounded-pill"
          >اطّلع على الكليات</a
        >
      </div>
    </div>

    <!--Faculties Section-->
    <div class="container mt-5" id="faculties">
      <h2 class="pt-3">الكليات</h2>
      <hr />
      <div class="row align-items-center">
        <div class="col-sm">
          <div class="card mb-3">
            <img src="images/FCITImage.jpeg" alt="FCIT logo" class="card-img-top" />
            <div class="card-body">
              <h4 class="card-title">كلية الحاسب</h4>
              <p class="card-text">
                مساحة خاصة بمناقشة المواضيع المتعلقة بكلية الحاسبات وتقنية
                المعلومات.
              </p>
              <a
                href="HTML/faculties/FCIT.php"
                class="btn btn-outline-primary rounded-pill"
                >انتقال</a
              >
            </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card mb-3">
            <img src="images/engImage.png" alt="engineering logo" class="card-img-top" />
            <div class="card-body">
              <h4 class="card-title">كلية الهندسة</h4>
              <p class="card-text">
                مساحة خاصة بمناقشة المواضيع المتعلقة بكلية الهندسة.
              </p>
              <a
                href="HTML/faculties/FE.php"
                class="btn btn-outline-primary rounded-pill"
                >انتقال</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card mb-3">
            <img src="images/BusImage.jpeg" alt="Business logo" class="card-img-top" />
            <div class="card-body">
              <h4 class="card-title">كلية الاقتصاد والادارة</h4>
              <p class="card-text">
                مساحة خاصة بمناقشة المواضيع المتعلقة بكلية الاقتصاد والادارة.
              </p>
              <a
                href="HTML/faculties/FEA.php"
                class="btn btn-outline-primary rounded-pill"
                >انتقال</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card mb-3">
            <img src="images/ScienceImage.jpeg" alt="Science logo" class="card-img-top" />
            <div class="card-body">
              <h4 class="card-title">كلية العلوم</h4>
              <p class="card-text">
                مساحة خاصة بمناقشة المواضيع المتعلقة بكلية العلوم.
              </p>
              <a
                href="HTML/faculties/FS.php"
                class="btn btn-outline-primary rounded-pill"
                >انتقال</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--General Space Section-->
    <div class="container px-4 py-5" id="generalSpace">
      <h2 class="pb-2 border-bottom">المساحة العامة</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
        <div class="col d-flex align-items-start">
          <div
            class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
          >
            <img
              src="images/student-in-class-svgrepo-com.svg" alt="student image"
              class="smallImages"
            />
          </div>
          <div>
            <h4 class="text-body-emphasis">السنة التحضيرية</h4>
            <hr />
            <p>
              بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء
              الأكبر من محتوى البطاقة.
            </p>
            <a
              href="HTML/generalSpacePages/foundation-year.php"
              class="btn btn-primary rounded-pill"
              >انتقال</a
            >
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div
            class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
          >
            <img src="images/diploma-svgrepo-com.svg" alt="diploma image" class="smallImages"  />
          </div>
          <div>
            <h4 class="text-body-emphasis">التدريب الصيفي | التعاوني</h4>
            <hr />
            <p>
              بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء
              الأكبر من محتوى البطاقة.
            </p>
            <a
              href="HTML/generalSpacePages/co-op.php"
              class="btn btn-primary rounded-pill"
              >انتقال</a
            >
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div
            class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
          >
            <img
              src="images/student-person-part-2-svgrepo-com.svg" alt="student image"
              class="smallImages"
            />
          </div>
          <div>
            <h4 class="text-body-emphasis">الخريجين</h4>
            <hr />
            <p>
              بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء
              الأكبر من محتوى البطاقة.
            </p>
            <a
              href="HTML/generalSpacePages/graduates.php"
              class="btn btn-primary rounded-pill"
              >انتقال</a
            >
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div
            class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3"
          >
            <img src="images/group-svgrepo-com.svg" alt="group image" class="smallImages" />
          </div>
          <div>
            <h4 class="text-body-emphasis">مشاركة الخبرات والمهارات</h4>
            <hr />
            <p>
              بعض الأمثلة السريعة للنصوص للبناء على عنوان البطاقة وتشكيل الجزء
              الأكبر من محتوى البطاقة.
            </p>
            <a
              href="HTML/generalSpacePages/sharing-experience.php"
              class="btn btn-primary rounded-pill"
              >انتقال</a
            >
          </div>
        </div>
      </div>
    </div>

    <!--Important Links Section-->
    <div class="container mt-5" id="importantLinks">
      <h2>روابط هامة</h2>
      <hr />
      <div class="row align-items-center">
        <div class="col-sm">
          <div class="card mb-3">
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
          <div class="card mb-3">
            <h5 class="card-header">التقويم الاكاديمي</h5>
            <div class="card-body">
              <p class="card-text">
                التقويم الاكاديمي بالاسابيع والمواعيد للعام الدراسي ١٤٤٥هـ الفصل
                الاول.
              </p>
              <a href="HTML/Assignment2/table.php" class="btn btn-outline-primary rounded-pill"
                >الانتقال الى التقويم الاكاديمي</a
              >
            </div>
          </div>
        </div>
        <div class="col-sm mb-3">
          <div class="card">
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
      </div>
    </div>

    <?php include("includes/footer.php"); ?>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
