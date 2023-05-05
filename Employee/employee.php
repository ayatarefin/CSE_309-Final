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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style2.css">
    <title>DevTech</title>
</head>

<body>
    <!-- navbar start -->
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

    <!-- sidebar -->
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class=" h-full px-3 pb-4 overflow-y-auto ">
            <ul class=" space-y-2 font-medium">
        <li>
            <a href="employee.php"
                class="flex items-center p-2  rounded-lg bg-gray-100">
                <img src="image/icons/data-report.png" alt="" class="flex-shrink-0 w-6 h-6">
                <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="assigned.php"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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

    <!-- sidebar end -->

    <!-- profile info -->
    
    <div class="p-4 sm:ml-64" style="background: #efefef;">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                <div class="relative rounded border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 bg-white flex flex-col justify-between">
                  <header class="flex">
                    <img src="employee/employee1.png" alt="" width="100px" class=" text-center mr-8">
                    <div>
                      <h3 class="text-lg font-bold">Name: <span class="text-gray-400 font-normal" id="employeeName"><?php
                      echo $fullname?></span></h3>
                      <h3 class="text-lg font-bold">Position: <span class="text-gray-400 font-normal"><?php
                      echo $pos?></span></h3>
                      <h3 class="text-lg font-bold">Email: <span class="text-gray-400 font-normal"><?php
                      echo $email?></span></h3>
                    </div>
                  </header>
                  <div class="">
                    <!-- <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        <a href="profileedit.html">Show Profile</a>
                    </button> -->
                    <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        <a href="profileedit.php">Edit Profile</a>
                    </button>
                    <!-- </a> -->
                  </div>
                </div>

                <!-- calender -->

                <div class="relative rounded border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 bg-white flex flex-col justify-between">
  <div id="monthHeading" class="bg-red-700 text-white py-3 px-4 font-bold text-lg text-center flex flex-col"></div>
  <div id="weekDates" class='flex flex-wrap justify-center px-2 bg-gray-100 p-2'></div>
</div>

<script>
  // Get current date
  let today = new Date();

  // Calculate first day of the current week
  let firstDayOfWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() - today.getDay());
  let ajke = new Date(today.getFullYear(), today.getMonth(), today.getDate());

  // Get the month name and year of the first day of the current week
  let monthName = ajke.toLocaleString('default', { month: 'long' });
  let year = ajke.getFullYear();

  // Update the month heading
  document.getElementById("monthHeading").innerHTML = `${monthName} ${year}`;

  // Create a row for the dates of the current week
  let weekDatesRow = document.createElement("div");
  weekDatesRow.classList.add("flex", "flex-wrap", "justify-center", "px-2", "bg-gray-100", "p-2");

  // Loop through the dates of the current week and create a div for each date
  for (let i = 0; i < 7; i++) {
    let date = new Date(firstDayOfWeek);
    date.setDate(date.getDate() + i);

    let dateDiv = document.createElement("div");
    dateDiv.classList.add("flex", "rounded-lg", "mx-1", "cursor-pointer", "justify-center", "w-10");

    // Highlight today's date
    if (date.toDateString() === today.toDateString()) {
      dateDiv.classList.add("group", "bg-red-400", "shadow-lg", "dark-shadow", "rounded-lg");
    }

    let dateContent = `
      <div class='flex items-center px-4 py-4'>
        <div class='text-center'>
          <p class='text-gray-900 group-hover:text-gray-100 text-sm transition-all	duration-300'> ${date.toLocaleDateString('default', { weekday: 'short' })} </p>
          <p class='text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all	duration-300'> ${date.getDate()} </p>
        </div>
      </div>
    `;

    dateDiv.innerHTML = dateContent;
    weekDatesRow.appendChild(dateDiv);
  }

  // Add the week dates row to the calendar
  document.getElementById("weekDates").appendChild(weekDatesRow);
</script>

                  <!-- feedback -->

                  <a href="#">
                    <div class="relative block rounded border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 md:h-50 bg-white hover:bg-gray-300 transition duration-300">
                      <div class="md:flex items-center gap-4">
                        <img src="image/icons/response.png" alt="" width="50px">
                        <h3 class="text-3xl font-bold sm:text-4xl">Feedback</h3>
                      </div>
                      <p class="mt-8 font-medium text-gray-500 hidden md:block mb-6">
                        You have received feedback on your most recent tasks! Please take a moment to review the feedback and use it as a tool to grow and develop your skills.
                      </p>
                    </div>
                  </a>                  
            </div>

            <!-- project progress bar start-->
            <!--Skills -->
    <section id="skill">
        <div class="container">
            <h3 class="flex justify-center text-3xl font-bold">Ongoing Projects Analysis</h3>
            <div class="skill-col">
                <!--Skill 1-->
                <div class="skill-item">
                    <div class="skill-name-per">
                        <h2>User requirements:</h2>
                        <h2>85%</h2>
                    </div>
                    <div class="skill-outer-bar">
                        <div class="skill-inner-bar-1"></div>
                    </div>
                </div>

                <!--Skill 2-->
                <div class="skill-item">
                    <div class="skill-name-per">
                        <h2>Technical feasibility:</h2>
                        <h2>70%</h2>
                    </div>
                    <div class="skill-outer-bar">
                        <div class="skill-inner-bar-2"></div>
                    </div>
                </div>

                <!--Skill 3-->
                <div class="skill-item">
                    <div class="skill-name-per">
                        <h2>Business requirements:</h2>
                        <h2>50%</h2>
                    </div>
                    <div class="skill-outer-bar">
                        <div class="skill-inner-bar-3" ></div>
                    </div>
                </div>

                <!--Skill 4-->
                <div class="skill-item">
                    <div class="skill-name-per">
                        <h2>Business requirements:</h2>
                        <h2>80%</h2>
                    </div>
                    <div class="skill-outer-bar">
                        <div class="skill-inner-bar-4"></div>
                    </div>
                </div>
                 <!--Skill 5-->
                 <div class="skill-item">
                    <div class="skill-name-per">
                        <h2>Security and privacy:</h2>
                        <h2>45%</h2>
                    </div>
                    <div class="skill-outer-bar">
                        <div class="skill-inner-bar-5" ></div>
                    </div>
                </div>
                 <!--Skill 6-->
                 <div class="skill-item">
                    <div class="skill-name-per">
                        <h2>Security and privacy:</h2>
                        <h2>75%</h2>
                    </div>
                    <div class="skill-outer-bar">
                        <div class="skill-inner-bar-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Skills END -->
            <!-- project progress bar end-->
            <a href="assigned.php">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <!-- prject request  -->
                <div class="relative block rounded  border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 h-48 bg-white hover:bg-gray-300 transition duration-300">
                    <div class="flex items-center gap-4">
                        <img src="image/icons/time.png" alt="" width="50px">
                        <h3 class="text-3xl font-bold sm:text-4xl">Upcoming deadline</h3>
                    </div>

                    <p class="mt-4 font-medium text-gray-500">
                        <strong>SPMS</strong> project has to be completed within this week
                    </p>

                </div>
               </a>
                <!-- on going projects  -->
                <a href="leaveRequest.php">
                <div class="relative block rounded  border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 h-48 bg-white hover:bg-gray-300 transition duration-300">
                    <div class="flex items-center gap-4">
                        <img src="image/icons/process.png" alt="" width="50px">

                        <h3 class="text-3xl font-bold sm:text-4xl">Apply for Leave</h3>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="app.js"></script>
</body>

</html>