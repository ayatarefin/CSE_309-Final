<?php
session_start();
if(!isset($_SESSION['developerid'])){
    header("Location:../index.php");
}
else{
    echo "Location not found";
}
$devid=$_SESSION['developerid'];
include "../connection.php";
$sqli="SELECT * FROM `user` WHERE userID='$devid'";
$result=mysqli_query($conn,$sqli);
if (mysqli_num_rows($result)> 0) {
    $row=mysqli_fetch_assoc($result);
    $fname=$row['firstName'];
    $lname=$row['lastName'];
    $fullname=$fullname. $fname." ".$lname;
    $pos=$row['Role'];
    $email=$row['email'];
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <title>Edit Profile</title>
</head>
<body>
    

<nav class="fixed top-0 z-50 w-full bg-gray-50">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
              <!-- expand button start -->
              <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                  aria-controls="logo-sidebar" type="button" class="p-2 rounded-lg md:hidden hover:bg-gray-200">
                  <img src="image/icons/menu.png" alt="" class="w-8">
              </button>
              <!-- expand button end -->
              <a href="employee.php"
                  class="flex ml-2 md:mr-24 self-center text-2xl font-bold sm:text-2xl whitespace-nowrap dark:text-white">Dev<span
                      class="text-red-700">Tech</span></a>
          </div>
          <div class="flex items-center">
              <div class="flex items-center ml-3">
                  <div>

                      <button type="button"
                          class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                          aria-expanded="false" data-dropdown-toggle="dropdown-user">
                          <span class="sr-only">Open user menu</span>
                          <img class="w-8 h-8 rounded-full"
                              src="employee/employee1.png"
                              alt="user photo">
                      </button>

                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                      id="dropdown-user">
                      <div class="px-4 py-3" role="none">
                          <p class="text-sm text-gray-800 dark:text-white" role="none">
                          <?php echo $fullname?>
                          </p>
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                          <?php echo $email?>
                          </p>
                      </div>
                      <ul class="py-1" role="none">
                          <li>
                              <a href="employee.php"
                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                  role="menuitem">Dashboard</a>
                          </li>
                          <li>
                              <a href="profileedit.php" target="_blank"
                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                  role="menuitem">Edit profile</a>
                          </li>
                          <li>
                              <a href="assigned.php" target="_blank"
                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                  role="menuitem">Projects</a>
                          </li>
                          <li>
                              <a href="leaveRequest.php" target="_blank"
                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                  role="menuitem">Apply for leave</a>
                          </li>
                          <li>
                              <a href="../index.php"
                                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                  role="menuitem">Sign out</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</nav><!-- navbar end  -->

<br><br><br>
    <div class="d-flex justify-content-center align-items-center">
        <div class="container my-5">
          <div class="card border-primary shadow">
            <div class="card-header">
              <h1 class=" text-center" style="font-size: xx-large;">Upload the projects files</h1>
            </div>
            <div class="card-body text-center mt-5">
              <h1 class="card-title">Choose files to upload</h1>
              <input type="file" name="files[]" multiple style="border: 1px solid black;">
            </div>
            <div class="mt-5 mb-5 text-center">
              <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>

            </div>  
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>