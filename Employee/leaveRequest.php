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
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $leaveID=NULL; //id will be auto increamented in sql since leaveID is primary key and set to auto increament
        $sDate=$_POST['startDate'];
        $eDate=$_POST['endDate'];
        $lType=$_POST['leaveType'];
        $sql= "INSERT INTO `leaveapplication`(`leaveID`, `empID`, `startDate`, `endDate`, `leaveType`) VALUES ('$leaveID', '$devid', '$sDate', '$eDate', '$lType')";
        $conn->query($sql);
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" /> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="common.css">
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
                                <?php echo $fullname?></span></h3>
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                <?php echo $email?></span></h3>
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
                                    <a href="leaveApplication.php" target="_blank"
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
    <br><br>
    <section class="bg-gray-100 common">
        <div class="container mx-auto py-8">

            <!-- Time Tracking -->
            <div class="bg-white shadow rounded-lg p-6 mb-8">
                <h3 class="text-xl font-bold mb-4">Time Tracking</h3>
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 text-left">Project Name</th>
                            <th class="py-2 px-4 text-left">Hours Worked</th>
                            <th class="py-2 px-4 text-left">Deadline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4">Project A</td>
                            <td class="py-2 px-4">20</td>
                            <td class="py-2 px-4">2023-04-30</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Project B</td>
                            <td class="py-2 px-4">15</td>
                            <td class="py-2 px-4">2023-05-15</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">Project C</td>
                            <td class="py-2 px-4">10</td>
                            <td class="py-2 px-4">2023-06-30</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Leave Request -->
            <div class="bg-white shadow rounded-lg p-6 mb-8">
                <h3 class="text-xl font-bold mb-4">Leave Request</h3>
                <form class="contact-form"  method="POST">
                    <div class="mb-4">
                        <label for="leave-type" class="block text-gray-700 font-bold mb-2">Leave Type</label>
                        <select id="leave-type" name="leaveType" class="border rounded-lg p-2 w-full">
                            <option value="vacation">Vacation</option>
                            <option value="sick">Sick</option>
                            <option value="personal">Personal</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="start-date" class="block text-gray-700 font-bold mb-2">Start Date</label>
                        <input type="date" id="start-date" name="startDate" class="border rounded-lg p-2 w-full">
                    </div>
                    <div class="mb-4">
                        <label for="end-date" class="block text-gray-700 font-bold mb-2">End Date</label>
                        <input type="date" id="end-date" name="endDate" class="border rounded-lg p-2 w-full">
                    </div>
                    <button type="submit" onclick="submitted()" class="bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded">Submit Request</button>
                </form>
            </div>
        </div>
    </section>
    <script>
  function submitted(){
    alert("Leave Request has been submitted successfully");
  }
</script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
