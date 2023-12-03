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


    <!--General Space Section-->
    <div class="container px-4 py-5">
      <div class="text-center">
        <h2>مشاركة عامة</h2>
        <p>مشاركة عامة بخصوص موضوع كذا وكذا</p>
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
        <li class="list-group-item">
          <div class="card my-3">
            <h4 class="card-header blog-post-meta">مهنا المهنا 1 يناير 2021</h4>
            <div class="card-body">
              <div class="bd-example m-0 border-0">
                <nav>
                  <div class="nav nav-tabs mb-3"  role="tablist">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-home-1"
                      type="button"
                      role="tab"
                      aria-selected="true"
                    >
                      التدوينة
                    </button>
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-profile-1"
                      type="button"
                      role="tab"
                      aria-selected="false"
                      tabindex="-1"
                    >
                      الملف الشخصي
                    </button>
                  </div>
                </nav>
                <div class="tab-content" >
                  <div
                    class="tab-pane fade active show"
                    id="nav-home-1"
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <h5 class="card-title">تجربتي في موضوع كذا وكذا</h5>
                      <blockquote class="card-text">
                        لم تدرس النصوص العربية <i> (عند القدماء)</i> دراسة مستقلة بل
                        كانت هذه الدراسة مقسمة بين النقد والبلاغة وعلم القوعد
                        وغيرها وفي الحقيقة، درست النصوص العربية صرفاً أو نحواً
                        وغيرهما في الزمن القديم على مستوى الجملة أو تتآل من
                        الجمل لكن علم لغة النص الحديث لا يرى أن النص تتآل من
                        الجمل الكثيرة فالنص هو ليس بمجرد جانب من جوانب الواقع
                        اللغوي بل هو جزء فعلي من الواقع بلحمه ودمه. ولذلك لا
                        يتوقف «علم لغة النص» عند كلمات النص وتحليلها في مستويات
                        الدرس اللغوي صوتاً ونحواً وصرفاً ودلالةً فقط، بل يهتم أن
                        ينفذ ما يكون وراء النص من جميع العوامل المعرفية والنفسية
                        والاجتماعية ومن العمليات العقلية لأن النص حصيلة لتفاعل
                        جميع هذه العوامل ونجد أن علم لغة النص يركز على العلوم
                        الأخرى أيضاً التي تهتم بالاتصال الإنساني مثل علم
                        الاجتماع وعلم النفس وغيرها. ولعلم لغة النص ملامح واضحة
                        والقسمات فقد بنى لنفسه معايير تأسيسية وتنظيمية وكلاهما
                        يساعدان في أن يتميز النص عن غيره من المنطوقات ويدرسان
                        جودة النص وفعاليته وملائمته. لم يظهر مصطلح <cite>«علم لغة النص»</cite>
                         في الدراسات اللغوية عند القدماء من علماء اللغة
                        العربية ولكننا نجد أنه بالغ الأهمية بدراسة / بقراءة
                        الأفكار التي يقدمها المحدثون الغربيون بهذا الشأن وقد
                        يستثنى عبد القاهر من الحكم السابق لأنه قدم نظرية النظم
                      </blockquote>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="nav-profile-1"
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <p>الاسم: مهنا المهنا</p>
                      <p>الجامعة: الملك عبدالعزيز</p>
                      <p>التخصص: علوم حاسب</p>
                      <p>الدفعة: 20</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="card my-3">
            <h4 class="card-header blog-post-meta">مهنا المهنا 1 يناير 2021</h4>
            <div class="card-body">
              <div class="bd-example m-0 border-0">
                <nav>
                  <div class="nav nav-tabs mb-3"  role="tablist">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-home-2"
                      type="button"
                      role="tab"
                      aria-selected="true"
                    >
                      التدوينة
                    </button>
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-profile-2"
                      type="button"
                      role="tab"
                      aria-selected="false"
                      tabindex="-1"
                    >
                      الملف الشخصي
                    </button>
                  </div>
                </nav>
                <div class="tab-content" >
                  <div
                    class="tab-pane fade active show"
                    id="nav-home-2"
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <h5 class="card-title">تجربتي في موضوع كذا وكذا</h5>
                      <blockquote class="card-text">
                        لم تدرس النصوص العربية (عند القدماء) دراسة مستقلة بل
                        كانت هذه الدراسة مقسمة بين النقد والبلاغة وعلم القوعد
                        وغيرها وفي الحقيقة، درست النصوص العربية صرفاً أو نحواً
                        وغيرهما في الزمن القديم على مستوى الجملة أو تتآل من
                        الجمل لكن علم لغة النص الحديث لا يرى أن النص تتآل من
                        الجمل الكثيرة فالنص هو ليس بمجرد جانب من جوانب الواقع
                        اللغوي بل هو جزء فعلي من الواقع بلحمه ودمه. ولذلك لا
                        يتوقف «علم لغة النص» عند كلمات النص وتحليلها في مستويات
                        الدرس اللغوي صوتاً ونحواً وصرفاً ودلالةً فقط، بل يهتم أن
                        ينفذ ما يكون وراء النص من جميع العوامل المعرفية والنفسية
                        والاجتماعية ومن العمليات العقلية لأن النص حصيلة لتفاعل
                        جميع هذه العوامل ونجد أن علم لغة النص يركز على العلوم
                        الأخرى أيضاً التي تهتم بالاتصال الإنساني مثل علم
                        الاجتماع وعلم النفس وغيرها. ولعلم لغة النص ملامح واضحة
                        والقسمات فقد بنى لنفسه معايير تأسيسية وتنظيمية وكلاهما
                        يساعدان في أن يتميز النص عن غيره من المنطوقات ويدرسان
                        جودة النص وفعاليته وملائمته. لم يظهر مصطلح «علم لغة
                        النص» في الدراسات اللغوية عند القدماء من علماء اللغة
                        العربية ولكننا نجد أنه بالغ الأهمية بدراسة / بقراءة
                        الأفكار التي يقدمها المحدثون الغربيون بهذا الشأن وقد
                        يستثنى عبد القاهر من الحكم السابق لأنه قدم نظرية النظم
                      </blockquote>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="nav-profile-2"
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <p>الاسم: مهنا المهنا</p>
                      <p>الجامعة: الملك عبدالعزيز</p>
                      <p>التخصص: علوم حاسب</p>
                      <p>الدفعة: 20</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="card my-3">
            <h4 class="card-header blog-post-meta">مهنا المهنا 1 يناير 2021</h4>
            <div class="card-body">
              <div class="bd-example m-0 border-0">
                <nav>
                  <div class="nav nav-tabs mb-3"  role="tablist">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-home-3"
                      type="button"
                      role="tab"
                      aria-selected="true"
                    >
                      التدوينة
                    </button>
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-profile-3"
                      type="button"
                      role="tab"
                      aria-selected="false"
                      tabindex="-1"
                    >
                      الملف الشخصي
                    </button>
                  </div>
                </nav>
                <div class="tab-content" >
                  <div
                    class="tab-pane fade active show"
                    id="nav-home-3"
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <h5 class="card-title">تجربتي في موضوع كذا وكذا</h5>
                      <blockquote class="card-text">
                        لم تدرس النصوص العربية (عند القدماء) دراسة مستقلة بل
                        كانت هذه الدراسة مقسمة بين النقد والبلاغة وعلم القوعد
                        وغيرها وفي الحقيقة، درست النصوص العربية صرفاً أو نحواً
                        وغيرهما في الزمن القديم على مستوى الجملة أو تتآل من
                        الجمل لكن علم لغة النص الحديث لا يرى أن النص تتآل من
                        الجمل الكثيرة فالنص هو ليس بمجرد جانب من جوانب الواقع
                        اللغوي بل هو جزء فعلي من الواقع بلحمه ودمه. ولذلك لا
                        يتوقف «علم لغة النص» عند كلمات النص وتحليلها في مستويات
                        الدرس اللغوي صوتاً ونحواً وصرفاً ودلالةً فقط، بل يهتم أن
                        ينفذ ما يكون وراء النص من جميع العوامل المعرفية والنفسية
                        والاجتماعية ومن العمليات العقلية لأن النص حصيلة لتفاعل
                        جميع هذه العوامل ونجد أن علم لغة النص يركز على العلوم
                        الأخرى أيضاً التي تهتم بالاتصال الإنساني مثل علم
                        الاجتماع وعلم النفس وغيرها. ولعلم لغة النص ملامح واضحة
                        والقسمات فقد بنى لنفسه معايير تأسيسية وتنظيمية وكلاهما
                        يساعدان في أن يتميز النص عن غيره من المنطوقات ويدرسان
                        جودة النص وفعاليته وملائمته. لم يظهر مصطلح «علم لغة
                        النص» في الدراسات اللغوية عند القدماء من علماء اللغة
                        العربية ولكننا نجد أنه بالغ الأهمية بدراسة / بقراءة
                        الأفكار التي يقدمها المحدثون الغربيون بهذا الشأن وقد
                        يستثنى عبد القاهر من الحكم السابق لأنه قدم نظرية النظم
                        <address>
                          زورونا على<br>
                          Example.com<br>
                          Box 564, جدة<br>
                          السعودية
                          </address>
                      </blockquote>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="nav-profile-3"
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <p>الاسم: مهنا المهنا</p>
                      <p>الجامعة: الملك عبدالعزيز</p>
                      <p>التخصص: علوم حاسب</p>
                      <p>الدفعة: 20</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
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
