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
  <!-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" /> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="common.css">
  <link rel="stylesheet" href="style2.css">
  <!-- <link rel="stylesheet" href="chatroom.css" /> -->
  <title>chatroom</title>

</head>

<body>
  <nav class="fixed top-0 z-50 w-full bg-gray-50">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <!-- expand button start -->
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
            type="button" class="p-2 rounded-lg md:hidden hover:bg-gray-200">
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
                <img class="w-8 h-8 rounded-full" src="employee/employee1.png" alt="user photo">
              </button>

            </div>
            <div
              class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
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
          <a href="employee.php" class="flex items-center p-2 hover:bg-gray-100 rounded-lg ">
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
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white bg-gray-100  dark:hover:bg-gray-700">
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
            <div
              class="absolute top-full left-0 z-10 w-full p-2 mt-1 bg-white border rounded-lg shadow-lg invisible opacity-0 transition-all duration-300 ease-out">
              <a href="umldiagram.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                <img src="image\icons\uml.png" alt="" class="w-6 h-6 mr-3">UML Diagrams</a>
              <a href="analytics.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"><img
                  src="image\icons\monitor.png" alt="" class="w-6 h-6 mr-3">Analytics and Reports</a>
              <a href="uploadfile.php" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100"><img
                  src="image\icons\folder.png" alt="" class="w-6 h-6 mr-3">Files</a>
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

  <br>
  <!-- component -->
  <div class="flex h-screen antialiased text-gray-800 common4">

    <div class="flex flex-col flex-auto h-full p-6">
      <div class="flex flex-col flex-auto  flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4"
        style="width: 64vw; height: 50vh;">
        <div class="flex flex-col h-full overflow-x-auto mb-4">
          <div class="flex flex-col h-full">
            <div class="grid grid-cols-12 gap-y-2">
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                    A
                  </div>
                  <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                    <div>Hey How are you today?</div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                    A
                  </div>
                  <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                    <div>
                      Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Vel ipsa commodi illum saepe numquam maxime
                      asperiores voluptate sit, minima perspiciatis.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-green-100 flex-shrink-0">
                    <img src="employee/employee1.png" alt="" class="photo">
                  </div>
                  <div class="relative ml-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                    <div>I'm ok what about you?</div>
                  </div>
                </div>
              </div>
              <div class="col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-green-100 flex-shrink-0">
                    <img src="employee/employee1.png" alt="" class="photo">
                  </div>
                  <div class="relative ml-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                    <div>
                      Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                    A
                  </div>
                  <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                    <div>Lorem ipsum dolor sit amet !</div>
                  </div>
                </div>
              </div>
              <div class="col-start-6 col-end-13 p-3 rounded-lg">
                <div class="flex items-center justify-start flex-row-reverse">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-green-100 flex-shrink-0">
                    <img src="employee/employee1.png" alt="" class="photo">
                  </div>
                  <div class="relative ml-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                    <div>
                      Lorem ipsum dolor sit, amet consectetur adipisicing. ?
                    </div>
                    <div class="absolute text-xs bottom-0 right-0 -mb-5 mr-2 text-gray-500">
                      Seen
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                    A
                  </div>
                  <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                    <div>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Perspiciatis, in.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-start-1 col-end-8 p-3 rounded-lg">
                <div class="flex flex-row items-center">
                  <div class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                    A
                  </div>
                  <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                    <div class="flex flex-row items-center">
                      <button
                        class="flex items-center justify-center bg-indigo-600 hover:bg-indigo-800 rounded-full h-8 w-10">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                          </path>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                      </button>
                      <div class="flex flex-row items-center space-x-px ml-4">
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-12 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-6 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-5 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-3 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-10 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-1 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-8 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-2 w-1 bg-gray-500 rounded-lg"></div>
                        <div class="h-4 w-1 bg-gray-500 rounded-lg"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4">
          <div>
            <button class="flex items-center justify-center text-gray-400 hover:text-gray-600">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                </path>
              </svg>
            </button>
          </div>
          <div class="flex-grow ml-4">
            <div class="relative w-full">
              <input type="text"
                class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />
              <button
                class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="ml-4">
            <button
              class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
              <span>Send</span>
              <span class="ml-2">
                <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>


    <div class="flex flex-row h-full w-full overflow-x-hidden">
      <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0" style="width: 20vw; height: 100vh;">
        <div class="flex flex-row items-center justify-center h-12 w-full">
          <div class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
              </path>
            </svg>
          </div>
          <div class="ml-2 font-bold text-2xl flex">Dev<div class="text-red-700">Chat</div>
          </div>
        </div>
        <div class="flex flex-col items-center bg-indigo-100 border border-gray-200 mt-4 w-full py-6 px-4 rounded-lg">
          <div class="h-20 w-20 rounded-full border overflow-hidden">
            <img src="employee/employee1.png" alt="Avatar" class="h-full w-full" />
          </div>
          <div class="text-sm font-semibold mt-2"><?php echo $fullname ?></div>
          <div class="text-xs text-gray-500"><?php echo $pos ?></div>
          <div class="flex flex-row items-center mt-3">
            <div class="flex flex-col justify-center h-4 w-8 bg-indigo-500 rounded-full">
              <div class="h-3 w-3 bg-white rounded-full self-end mr-1"></div>
            </div>
            <div class="leading-none ml-1 text-xs">Active</div>
          </div>
        </div>
        <div class="flex flex-col mt-8">
          <div class="flex flex-row items-center justify-between text-xs">
            <span class="font-bold">Active Conversations</span>
            <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">4</span>
          </div>
          <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
            <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2 bg-indigo-100">
              <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                <img src="talk.png" alt="">
              </div>
              <div class="ml-2 text-sm font-semibold ">DevTech Family</div>
              <div class="bg-green-400"></div>
            </button>
            <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
              <div class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full">
                <img src="employee/employee11.png" alt="">
              </div>
              <div class="ml-2 text-sm font-semibold">Ayatullah Arefin</div>
              <div
                class="flex items-center justify-center ml-auto text-xs text-white bg-red-500 h-4 w-4 rounded leading-none">
                4
              </div>
            </button>
            <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
              <div class="flex items-center justify-center h-8 w-8 bg-orange-200 rounded-full">
                <img src="employee/employee3.png" alt="">
              </div>
              <div class="ml-2 text-sm font-semibold">Rasheeq Ishmum Priyo</div>
            </button>
            <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
              <div class="flex items-center justify-center h-8 w-8 bg-pink-200 rounded-full">
                <img src="employee/employee9.png" alt="">
              </div>
              <div class="ml-2 text-sm font-semibold">Akib Raihan</div>
            </button>
            <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
              <div class="flex items-center justify-center h-8 w-8 bg-purple-200 rounded-full">
                <img src="employee/employee7.png" alt="">
              </div>
              <div class="ml-2 text-sm font-semibold">Jaima Jahan Khan</div>
            </button>
          </div>
          <div class="flex flex-row items-center justify-between text-xs mt-6">
            <span class="font-bold">Archivied</span>
            <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">7</span>
          </div>
          <div class="flex flex-col space-y-1 mt-4 -mx-2">
            <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
              <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                <img src="employee/employee4.png" alt="">
              </div>
              <div class="ml-2 text-sm font-semibold">Nafeesa S Kohon</div>
            </button>
          </div>
          <div class="flex flex-col space-y-1 mt-4 -mx-2">
            <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
              <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                <img src="employee/employee2.png" alt="">
              </div>
              <div class="ml-2 text-sm font-semibold">Sayed Al Banna</div>
            </button>
          </div>

        </div>

      </div>


    </div>


    <!-- hehafuvnaidvfj -->


  </div>


  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>