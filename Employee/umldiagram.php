<?php
session_start();
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
     <link rel="stylesheet" href="uml.css" />
     <link rel="stylesheet" href="common.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

    <title>UML</title>
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
                                <a href="projects.php" target="_blank"
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

<br>
<br>
<br>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card card-margin">
                    <div class="row search-body">
                        <div class="col-lg-12">
                            <div class="table-responsive" style="width: 75vw;">
                            <?php
                            $sql = "SELECT `projectName`,`startingDate`, `deadline`, `projectStatus` FROM `project` WHERE `projectID` IN (SELECT `projectID` FROM `employee_project` WHERE `empID`='$devid')";
                            $result = mysqli_query($conn, $sql);

                            // Check if the query was successful
                            if (!$result) {
                                die("Query failed: " . mysqli_error($conn));
                            }

                            echo '<table class="table widget-26">
                                    <div class="text-center"><h1 style="font-size: xx-large;">UML Diagram</h1></div>
                                    <table class="table widget-26">';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr style="border-bottom: 1px solid #9CA3AF;">
                                        <td>
                                            <div class="widget-26-job-emp-img ml-5">
                                                <img src="employee/employee8.png" alt="Company" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-title">
                                                <a href="#">' . $row["projectName"] . '</a>
                                                <p class="m-0"><a href="#" class="employer-name"> Start Date: ' . $row["startingDate"] . '</a> <span class="text-muted time">Deadline: ' . $row["deadline"] . '</span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-info">
                                                <p class="type m-0">' . $row["projectStatus"] . '</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="widget-26-job-category d-flex justify-content-center">
                                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View</button>
                                                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Edit</button>
                                            </div>
                                        </td>
                                    </tr>';
                            }

                            echo '</tbody>
                                </table>';

                            // Close the database connection
                            mysqli_close($conn);
                            ?>
                            </div>
                        </div>
                    </div>
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination pagination-base pagination-boxed pagination-square mb-0">
                            <li class="page-item">
                                <a class="page-link no-border" href="#">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link no-border" href="#">1</a></li>
                            <li class="page-item"><a class="page-link no-border" href="#">2</a></li>
                            <li class="page-item"><a class="page-link no-border" href="#">3</a></li>
                            <li class="page-item"><a class="page-link no-border" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link no-border" href="#">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>