<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
        <title>DevTech</title>
    </head>

    <body>
        <?php
        include "../connection.php";
        session_start();
        $userID = $_SESSION['userID'];
        $sql = "SELECT * FROM user Where userID=$userID;";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        ?>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Alkatra&display=swap%27');

            * {
                margin: 0;
                padding: 0;
                font-family: 'Alkatra', cursive;
            }
        </style>
        <!-- navbar start -->
        <nav class="fixed top-0 z-50 w-full bg-gray-50">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center justify-start">
                        <!-- expand button start -->
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="p-2 rounded-lg md:hidden hover:bg-gray-200">
                            <img src="image/icons/menu.png" alt="" class="w-8">
                        </button>
                        <!-- expand button end -->
                        <a href="#" class="flex ml-2 md:mr-24 self-center text-2xl font-bold sm:text-2xl whitespace-nowrap dark:text-white">Dev<span class="text-red-700">Tech</span></a>
                    </div>
                    <div class="flex items-center">
                        <div class="flex items-center ml-3">
                            <div>

                                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full" src="employee/employee1.png" alt="user photo">
                                </button>

                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        <?php
                                        echo $user['firstName'] . " " . $user['lastName'];
                                        ?>
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                        <?php
                                        echo $user['email'];
                                        ?>
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="projectManager.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="../index.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar end  -->
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar" ">
        <div class=" h-full px-3 pb-4 overflow-y-auto ">
            <ul class=" space-y-2 font-medium">
            <li>
                <a href="projectManager.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img src="image/icons/data-report.png" alt="" class="flex-shrink-0 w-6 h-6">
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="managerEmployee.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img src="image/icons/employee.png" alt="" class="flex-shrink-0 w-6 h-6">
                    <span class="ml-3">Employee</span>
                </a>
            </li>
            <li>
                <a href="projectRequest.php" class="flex items-center p-2  rounded-lg bg-gray-100">
                    <img src="image/icons/project-management.png" alt="" class="flex-shrink-0 w-6 h-6">
                    <span class="ml-3">Projects</span>
                </a>
            </li>
            <li>
                <a href="leaveApplication.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img src="image/icons/leave.png" alt="" class="flex-shrink-0 w-6 h-6">
                    <span class="ml-3">Leave Applications</span>
                </a>
            </li>
            <li>
                <a href="../index.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <img src="image/icons/logout.png" alt="" class="flex-shrink-0 w-6 h-6">
                    <span class="ml-3">Log Out</span>
                </a>
            </li>

            </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col items-center pt-16">
            <h1 class="text-3xl font-bold mb-8">Pending Project Requests</h1>

            <!-- Filter -->
            <div class="flex flex-wrap justify-between items-center mb-8">
                <div class="relative mb-4 sm:mb-0">
                    <input type="text" id="search" name="search" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow-sm text-sm leading-tight focus:outline-none focus:shadow-outline" placeholder="Search...">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <img src="image/icons/search.png" alt="" class="h-6 w-6">
                    </div>
                </div>
            </div>

            <!-- Project Requests Table -->
            <div class=" overflow-x-auto">
                <table class="table-auto w-full border-collapse mb-8">
                    <thead>
                        <tr class="border-b-2 border-gray-300">
                            <th class="px-4 py-2 text-left">Request ID</th>
                            <th class="px-4 py-2 text-left">Client Name</th>
                            <th class="px-4 py-2 text-left">Requested System</th>
                            <th class="px-4 py-2 text-left">Submission Date</th>
                            <th class="px-4 py-2 text-left">Budget</th>
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-left">Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM clientprojectreq INNER JOIN user on clientID=userId;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr class="border-b border-gray-300 hover:bg-gray-100">
                            <td class="px-4 py-2">'.$row['id'].'</td>
                            <td class="px-4 py-2">'.$row['firstName'].' '.$row['lastName'].'</td>
                            <td class="px-4 py-2">'.$row['name'].'</td>
                            <td class="px-4 py-2">'.$row['name'].'</td>
                            <td class="px-4 py-2">'.$row['budget'].'</td>
                            <td class="px-4 py-2">Pending</td>
                            <td class="px-4 py-2">
                            <form method="POST">
                        <button name ="accept" value = "' . $row['id'] . '"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"

                            type="submit">
                            Approve
                        </button>
                        <button name = "reject" value = "' . $row['id'] . '"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Reject
                        </button>
                        </form></td>
                            </tr>';
                        }
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if (isset($_POST['accept'])) {
                                $id = $_POST['accept'];
                                $sql = "SELECT * FROM clientprojectreq WHERE id=$id;";
                                $result=mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $projectName=$row['name'];
                                $projectOverview=$row['message'];
                                $deadline=$row['deadline'];
                                $budget= $row['budget'];
                                $clientID= $row['clientID'];
                                $sql = "INSERT INTO `project` (`projectID`, `projectName`, `projectOverview`, `startingDate`, `deadline`, `budget`, `projectStatus`) VALUES ('$id', '$projectName', '$projectOverview', current_timestamp(), '$deadline', '$budget', 'Yet to start');";
                                mysqli_query($conn, $sql);
                                $sql = "INSERT INTO `client_project` (`clientID`, `projectID`) VALUES ('$clientID', '$id');";
                                mysqli_query($conn, $sql);
                                $sql = "DELETE FROM `clientprojectreq` WHERE id = $id";
                                mysqli_query($conn, $sql);
                            }
                            elseif (isset($_POST['reject'])) {
                                $id = $_POST['reject'];
                                $sql = "DELETE FROM `clientprojectreq` WHERE id = $id";
                                mysqli_query($conn, $sql);
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    </body>

</php>