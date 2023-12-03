   
   <!--HEADER-->
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
      <button class="navbar-toggler d-block mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <a class="navbar-brand" href="http://stu-kau.rf.gd/"><b>STU.KAU</b></a>
        <div class="vr d-none d-lg-block"></div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active p-lg-3" aria-current="page" href="http://stu-kau.rf.gd/"
                >الرئيسية</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="http://stu-kau.rf.gd/#faculties">الكليات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="http://stu-kau.rf.gd/#generalSpace">المساحة العامة</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-lg-3" href="http://stu-kau.rf.gd/#importantLinks">روابط هامة</a>
            </li>
          </ul>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <!-- Button trigger sign in modal -->
              <button
                type="button"
                class="btn btn-outline-primary rounded-pill me-2 mb-2"
                data-bs-toggle="modal"
                data-bs-target="#signInModal"
              >
                تسجيل الدخول
              </button>
            </li>
            <li class="nav-item">
              <!-- Button trigger sign up modal -->
              <button
                type="button"
                class="btn btn-primary rounded-pill me-2 mb-2"
                data-bs-toggle="modal"
                data-bs-target="#signUpModal"
              >
                انشاء حساب
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- sign in Modal -->
    <div
      class="modal fade"
      id="signInModal"
      tabindex="-1"
      aria-labelledby="SignInHeader"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="SignInHeader">تسجيل الدخول</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="SignInForm" name="SignInForm">
              <div class="mb-3">
                <label for="SignInEmail" class="form-label"
                  >البريد الالكتروني</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="SignInEmail"
                  name="SignInEmail"
                />
              </div>
              <div class="mb-3">
                <label for="SignInPassword" class="form-label"
                  >كلمة المرور</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="SignInPassword"
                  name="SignInPassword"
                />
              </div>
              <div class="row mx-2">
                <button type="submit" class="btn btn-primary rounded-pill">
                  تسجيل الدخول
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- sign up Modal -->
    <div
      class="modal fade"
      id="signUpModal"
      tabindex="-1"
      aria-labelledby="SignUpHeader"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="SignUpHeader">انشاء حساب</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="SignUpForm" name="SignUpForm">
              <div class="mb-3">
                <label for="username" class="form-label">اسم المستخدم</label>
                <input type="text" class="form-control" id="username" />
              </div>
              <div class="mb-3">
                <label for="facultySelect" class="form-label">الكلية:</label>
                <select
                  class="form-select"
                  id="facultySelect"
                  aria-label="Default select example"
                >
                  <option value="1">كلية الحاسبات وتقنية المعلومات</option>
                  <option value="2">كلية الهندسة</option>
                  <option value="3">كلية العلوم</option>
                  <option value="3">كلية الاقتصاد والادارة</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="studentMajor" class="form-label">التخصص</label>
                <input type="text" class="form-control" id="studentMajor" />
              </div>
              <div class="mb-3">
                <label for="SignUpEmail" class="form-label"
                  >البريد الالكتروني</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="SignUpEmail"
                />
              </div>
              <div class="mb-3">
                <label for="SignUpPassword" class="form-label"
                  >كلمة المرور</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="SignUpPassword"
                />
              </div>
              <div class="row mx-2">
                <button type="submit" class="btn btn-primary rounded-pill">
                  انشاء حساب
                </button>
              </div>
              <small class="text-muted text-center mx-4"
                >بانشائك حساب , انت توافق على الشروط والاحكام.</small
              >
            </form>
          </div>
        </div>
      </div>
    </div>