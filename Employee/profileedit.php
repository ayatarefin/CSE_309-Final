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
    $phone=$row['phoneNumber'];
    $pass=$row['password'];
    };
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['firstName']))
        {
            $firstName=$_POST['firstName'];
        }
        else
        {
            $firstName = $fname;
        }
        if(isset($_POST['surname']))
        {
            $lastName=$_POST['surName'];
        }
        else
        {
            $lastName = $lname;
        }
        if(isset($_POST['emailAddress']))
        {
            $emailAddress=$_POST['emailAddress'];
        }
        else
        {
            $emailAddress = $email;
        }
        if(isset($_POST['mobileNumber']))
        {
            $mobileNumber=$_POST['mobileNumber'];
        }
        else
        {
            $mobileNumber = $phone;
        }
        if(isset($_POST['currentPassword']))
        {
            $currentPassword=$_POST['currentPassword'];
        }
        if(isset($_POST['newPassword']))
        {
            $newPassword=$_POST['newPassword'];
        }
        

        $sql= "UPDATE `user` SET `password`='$newPassword', `firstName`='$firstName', `lastName`='$lastName', `email`='$emailAddress', `phoneNumber`='$mobileNumber' WHERE `userID`='$devid' AND `password` = '$pass'";
        $conn->query($sql);
        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="profileedit.css" />
     <!-- <link rel="stylesheet" href="common.css"> -->
     <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" -->
     />
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" /> 
     <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="common.css">
     <link rel="stylesheet" href="style2.css">

    <title>Edit Profile</title>
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
                                    <?php echo $fullname?>
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

    
      <!-- Profile edit -->
      <div class="container rounded bg-white mb-5 common2" >
        
            <form action="" method="POST">
            <div class="col-md-3 border-right" style="margin-left: 40%">
                <div class="d-flex flex-column align-items-center text-center p-3">
                    <img class="rounded-circle mt-5" width="150px" src="employee/employee1.png">
                    <br>
                    <h6 class="font-weight-bold"><?php echo $fullname?></h6>
                    <h6 class="text-black-50"><?php echo $email?></h6></h6>
                </div>
            </div>
            <div class="col-md-5 border-right" style="margin-left: 33%">
                <div class="p-3">
                    <div class="mb-3">
                        <h4 class=""><b>Profile Settings</b></h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><label class="labels" >Name</label><input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $fname?>"></div>
                        <div class="col-md-6"><label class="labels" >Surname</label><input type="text" name="surName" id="surName" class="form-control" value=<?php echo $lname?>></div>
                    </div>
                    <br>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="mobileNumber" id="mobileNumber" class="form-control" value=<?php echo $phone?>></div>
                    <br>
                    <div class="col-md-12"><label class="labels" >Email ID</label><input type="text" name="emailAddress" id="emailAddress" class="form-control" value=<?php echo $email?>></div>
                    <br>
                    <h4 class=""><b>Privacy & Security</b></h4>
                    <br>
                    <p class="text-red-600"><b>If you will not be changing your password, please enter the same password twice.</b></p>
                    <br>
                    <div class="col-md-12"><label class="labels">Current Password</label><input required type="text" name="currentPassword" id="currentPassword" class="form-control" placeholder="Current Password" value="" id=></div>
                    <br>
                    <div class="col-md-12"><label class="labels">New Password</label><input required type="text" name="newPassword" id="newPassword" class="form-control" placeholder="New Password" value=""></div>
                    <br>
                    <button type ="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-400 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800" type="button" style="margin-left: 40%">Save</span></button>
                </div> 
                    <!-- <div class="mt-5 text-center"><button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button"> <a href="employee.html">Save Profile</a></button></div> -->
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>