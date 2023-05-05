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
    $fullname=$fname." ".$lname;
    $pos=$row['Role'];
    $email=$row['email'];
    };
?>
<?php
$sql= "Select * FROM `project`";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="common.css" />

    <title>Assigned Task</title>
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
              <a href="#"
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

<!-- sidebar -->
<aside id="logo-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  aria-label="Sidebar">
  <div class=" h-full px-3 pb-4 overflow-y-auto ">
      <ul class=" space-y-2 font-medium">
  <li>
      <a href="employee.php"
          class="flex items-center p-2  rounded-lg ">
          <img src="image/icons/data-report.png" alt="" class="flex-shrink-0 w-6 h-6">
          <span class="ml-3">Dashboard</span>
      </a>
  </li>
  <li>
      <a href="assigned.php"
          class="flex items-center p-2 text-gray-900 bg-gray-100 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
          <img src="image/icons/delegation.png" alt="" class="flex-shrink-0 w-6 h-6">
          <span class="ml-3">Assigned Tasks</span>
      </a>
  </li>
  <li>
      <a href="chatroom.php"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
          <img src="image/icons/chat.png" alt="" class="flex-shrink-0 w-6 h-6">
          <span class="ml-3">DevChat</span>
      </a>
  </li>
  <li>
    <div class="relative">
        <button class="flex items-center p-2 w-full text-gray-900 rounded-lg dark:text-white hover:bg-gray-100">
          <img src="image/icons/resource.png" alt="" class="flex-shrink-0 w-6 h-6">
          <span class="ml-3">Project Resources ▼</span>
        </button>
        <div class="absolute top-full left-0 z-10 w-full p-2 mt-1 bg-white border rounded-lg shadow-lg invisible opacity-0 transition-all duration-300 ease-out">
          <a href="umldiagram.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
            <img src="image\icons\uml.png" alt="" class="w-6 h-6 mr-3">UML Diagrams</a>
          <a href="analytics.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"><img src="image\icons\monitor.png" alt="" class="w-6 h-6 mr-3">Analytics and Reports</a>
          <a href="uploadfile.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"><img src="image\icons\folder.png" alt="" class="w-6 h-6 mr-3">Files</a>
        </div>
    </div>
    </li>
  <li>
      <a href="../index.php"
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
          <img src="image/icons/logout.png" alt="" class="flex-shrink-0 w-6 h-6">
          <span class="ml-3">Log Out</span>
      </a>
  </li>

  </ul>
  </div>
</aside>
<br><br>

        <h1 class="text-center mb-5 " ><b>Assigned Tasks</b></h1>
    <div class="grid gap-1 my-5 md:grid-cols-1 common" style="margin-left: 17em;">

<div class="grid gap-1 md:grid-cols-3">
  <?php
  while($row=mysqli_fetch_assoc($result)){
  ?>
  <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg hoverr shadow dark:bg-gray-800 dark:border-gray-700 text-center">
  <a href="#">
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row['projectName']?></h5>
  </a>
  <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $row['projectOverview']?></p>
  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      View

  </a>
  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      Mark as completed

  </a>
</div>
<?php
}
?>
</div>      

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>
</html>