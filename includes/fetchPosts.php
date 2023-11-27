<?php

$link = mysqli_connect("localhost","root","","stu.kau");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

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
                  <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button
                      class="nav-link active"
                      id="nav-home-tab"
                      data-bs-toggle="tab"
                      data-bs-target=<?php echo "#nav-home-" . $counter; ?>
                      type="button"
                      role="tab"
                      aria-controls="nav-home"
                      aria-selected="true"
                    >
                      التدوينة
                    </button>
                    <button
                      class="nav-link"
                      id="nav-profile-tab"
                      data-bs-toggle="tab"
                      data-bs-target=<?php echo "#nav-profile-" . $counter; ?>
                      type="button"
                      role="tab"
                      aria-controls="nav-profile"
                      aria-selected="false"
                      tabindex="-1"
                    >
                      الملف الشخصي
                    </button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div
                    class="tab-pane fade active show"
                    id=<?php echo "nav-home-" . $counter; ?>
                    role="tabpanel"
                    aria-labelledby="nav-home-tab"
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
                    aria-labelledby="nav-profile-tab"
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