<!--Authors: Mouhana Almouhana,  Yazan Alshareef-->
<?php
    session_start();
?>
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

     <!-- feedback form -->
    <div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center mt-2">Feedback Form</h2>
        </div>
        <div class="card-body">
                <form action="../../includes/form-insert.php" method="POST" id="Form">

                    <fieldset class="mb-4">
                        <legend>لو تزودنا ببعض بياناتك اذا ممكن</legend>
                        <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="name" class="form-label">اسمك طال عمرك</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <label for="email" class="form-label">بريدك الالكتروني الله يحييك</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="feedback" class="form-label">الكلية</label>
                            <select id="feedback-type" name="faculty" class="form-select">
                                <option value="1">كلية الحاسبات وتقنية المعلومات</option>
                                <option value="2">كلية الهندسة</option>
                                <option value="3">كلية العلوم</option>
                                <option value="4">كلية الاقتصاد والادارة</option>
                            </select>
                        </div>
                    </fieldset>

                    <fieldset class="mb-4">
                        <legend>الرسالة:</legend>
                        <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">وش ودك توصل؟</label>
                            <div class="form-check">
                                <input type="radio" id="note" name="feedbackType" value="note" class="form-check-input" checked>
                                <label for="note" class="form-check-label">ملاحظة عامة</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="suggestion" name="feedbackType" value="suggestion" class="form-check-input">
                                <label for="suggestion" class="form-check-label">اقتراح</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="complaint" name="feedbackType" value="complaint" class="form-check-input">
                                <label for="complaint" class="form-check-label">شكوى</label>
                            </div>
                        </div>
        
                        <div class="col-12 col-md-6 mb-3">
                            <label class="form-label">ملاحظاتك في اي قسم؟</label>
                            <div class="form-check">
                                <input type="checkbox" id="Faculties" name="section[]" value="Faculties" class="form-check-input">
                                <label for="Faculties" class="form-check-label">الكليات</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="generalSpace" name="section[]" value="generalSpace" class="form-check-input">
                                <label for="generalSpace" class="form-check-label">المساحة العامة</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="importantLinks" name="section[]" value="importantLinks" class="form-check-input">
                                <label for="importantLinks" class="form-check-label">الروابط المهمة</label>
                            </div>
                        </div>
                        
                    </div>
                       
                        
        
                        <div class="mb-3">
                            <label for="feedback" class="form-label">تفضل, قل الي بخاطرك:</label>
                            <textarea id="feedback" name="feedback" class="form-control" rows="4" required></textarea>
                        </div>
                    </fieldset>
        
                    <div class="text-center mb-3">
                        <button type="submit" class="btn btn-outline-primary rounded-pill mb-3 col-sm-3" name = "submit"
                        onclick="valid()"
                        >ارسال</button>

                    </div>
                </form>
                
            
        </div>
      </div>
    </div>
    

    <?php include("../../includes/footer.php"); ?>

    <!--JAVASCRIPT-->
    <script src="../../scripts/form-validation.js"></script>
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>