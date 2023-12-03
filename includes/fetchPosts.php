<?php

$link = mysqli_connect("sql112.infinityfree.com","if0_35511372","Slq9lylQxcLw13","if0_35511372_STU_KAU");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
mysqli_set_charset($link,'utf8');
// $sql = "SELECT * FROM posts";
$sql = "SELECT * FROM posts, users where posts.userID = users.id";


if($result = mysqli_query($link,$sql)){
    if(mysqli_num_rows($result) > 0){
        $counter = 1;
        while($row = mysqli_fetch_array($result)){
            ?>

        <li class="list-group-item">
          <div class="card my-3">
            <h4 class="card-header blog-post-meta"> <?php echo $row['name'] . " ";  echo $row['date']; ?></h4>
            <div class="card-body">
              <div class="bd-example m-0 border-0">
                <nav>
                  <div class="nav nav-tabs mb-3"  role="tablist">
                    <button
                      class="nav-link active"
                      data-bs-toggle="tab"
                      data-bs-target=<?php echo "#nav-home-" . $counter; ?>
                      type="button"
                      role="tab"
                      aria-selected="true"
                    >
                      التدوينة
                    </button>
                    <button
                      class="nav-link"
                      data-bs-toggle="tab"
                      data-bs-target=<?php echo "#nav-profile-" . $counter; ?>
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
                    id=<?php echo "nav-home-" . $counter; ?>
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <h5 class="card-title"><?php echo $row['title'];?></h5>
                      <p class="card-text">
                      <?php echo $row['text'];?>
                      </p>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id=<?php echo "nav-profile-" . $counter; ?>
                    role="tabpanel"
                  >
                    <div class="px-3">
                      <p>الاسم: <?php echo $row['name'];?></p>
                      <p>الجامعة: <?php echo $row['university'];?></p>
                      <p>التخصص: <?php echo $row['major'];?></p>
                      <p>الدفعة: <?php echo $row['year'];?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        
        <?php
            $counter++;
        }
        
        mysqli_free_result($result);
    } else{
        echo " no records";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>