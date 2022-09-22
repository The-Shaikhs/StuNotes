<!DOCTYPE html>
<html lang="en">
<?php
include "includes/head.php"
?>
<?php
include "includes/function.php"
?>

<body>
  <?php
  include "includes/navbar.php"
  ?>
  <div class="main">
    <div class="bg">

    </div>

    <div class="breadcrumb">
      <!-- Breadcrumb -->
      <nav class="flex px-5 py-3 text-black border border-gray-200 rounded-lg b bg-white dark:border-gray-200  border-x-4 border-y-0" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-indigo-500 dark:text-gray-400 ">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
              </svg>
              Home
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
              <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-indigo-500 md:ml-2 dark:text-gray-400 ">Published Notes</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
              </svg>
              <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Category</span>
            </div>
          </li>
        </ol>
      </nav>

    </div>
  </div>

  <div class="semester">

    <?php
    $data =  get_sem();
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';



    $num = sizeof($data);
    // echo $num;
    // $i = 0;


    for ($i = 0; $i < $num; $i++) {
    ?>




      <div class="content" id="hahah">

        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
              <h1 class="sm:text-3xl text-2xl font-bold text-center title-font text-gray-900 mb-4">Semester <?php
                                                                                                            echo $data[$i]['sem-num'];
                                                                                                            ?></h1>
              <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Details about semester</p>

              <div class="sem">
                <div class="flex-container">



                  <?php

                  $sub = get_sub($data[$i]['id']);

                  $nu = sizeof($sub);


                  // $nu = sizeof($sub);
                  for ($k = 0; $k < $nu; $k++) {
                  ?>
                    <button class="mx-auto mx-10 mt-16 px-5  bg-sky-100 border-2 rounded p-4 h-full items-center hover:bg-white hover:text-black hover:border-2 hover:border-sky-300 cursor-pointer" id="buttonsub"><?php if (isset($sub[$k]['sub-name'])) {
                                                                                                                                                                                                                      echo $sub[$k]['sub-name'];
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                      echo 'Not uploaded yet';
                                                                                                                                                                                                                    }  ?></button>

                  <?php
                  }

                  ?>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>
  </div>
  <!-- semester end -->
  <!-- footer -->
<?php
    }
?>
<?php
include "includes/footer.php"
?>
</body>

</html>