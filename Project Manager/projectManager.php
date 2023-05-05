<!DOCTYPE html>
<html lang="en">

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
                                    Sayed Al banna
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    albanna@gmail.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
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
            <a href="projectManager.html" class="flex items-center p-2  rounded-lg bg-gray-100">
                <img src="image/icons/data-report.png" alt="" class="flex-shrink-0 w-6 h-6">
                <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="managerEmployee.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <img src="image/icons/employee.png" alt="" class="flex-shrink-0 w-6 h-6">
                <span class="ml-3">Employee</span>
            </a>
        </li>
        <li>
            <a href="projectRequest.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <img src="image/icons/project-management.png" alt="" class="flex-shrink-0 w-6 h-6">
                <span class="ml-3">Projects</span>
            </a>
        </li>
        <li>
            <a href="leaveApplication.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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

    <div class="p-4 sm:ml-64" style="background: #efefef;">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="relative block rounded  border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 md:h-48 bg-white">
                    <div class="md:flex items-center gap-4">
                        <img src="image/icons/businesswoman.png" alt="" width="100px">
                        <div class="mt-4 text-xl md:text-3xl font-bold text-gray-500">
                            Good Evening!
                        </div>
                    </div>



                </div>
                <div class="relative block rounded  border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 h-48 bg-white">
                    <div class="md:flex items-center gap-4">
                        <img src="image/icons/success.png" alt="" width="50px">

                        <h3 class="text-3xl font-bold sm:text-4xl">100+</h3>
                    </div>

                    <p class="mt-4 font-medium text-gray-500 hidden md:block">
                        we have completed more than 100 projects in the previous year.
                    </p>

                </div>
                <a href="projectRequest.html">
                    <div class="relative block rounded  border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 h-48 bg-white">

                        <div class="md:flex items-center gap-4">
                            <img src="image/icons/information.png" alt="" width="50px">

                            <h3 class="text-3xl font-bold sm:text-4xl">09</h3>
                        </div>

                        <p class="mt-4 font-medium text-gray-500 hidden md:block">
                            There has been project new project request pendding
                        </p>

                    </div>
                </a>
            </div>
            <!-- project progress bar start-->
            <div class="grid grid-cols-2 gap-4 mb-4 shadow-xl border-pink-600 rounded bg-gray-50 dark:bg-gray-800 ">
                <!-- component -->
                <div class="flex flex-col h-full">
                    <div class="relative flex flex-col rounded  bg-white p-3 w-full">
                        <div class="mt-2 mb-8 w-full">
                            <form method="POST">
                                <span class="px-2">Search Project : </span>
                                <!-- Dropdown menu -->
                                <select name="dropdown" id="dropdown" class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <?php
                                    $sql = "SELECT `projectName` FROM `project`; ";
                                    $result = mysqli_query($conn, $sql);
                                    $options = array();
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $options[] = $row['projectName'];
                                    }
                                    foreach ($options as $option) {
                                        echo "<option value=\"$option\">$option</option>";
                                    }
                                    ?>
                                </select>
                                <input name="submit" type="submit" class="bg-transparent hover:bg-gray-500 text-gray-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            </form>

                            <?php
                            if (isset($_POST['submit'])) {
                                $selected_value = $_POST['dropdown'];
                                $sql = "SELECT * FROM `project` Where `projectName`='$selected_value'; ";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo '<p id="projectname" class="mt-2 px-2 text-base text-gray-600"> project Name: ' . $selected_value . '</p>';
                                echo '<p id="projectoverview" class="mt-2 px-2 text-base text-gray-600 h-20">
                                Project Overview:' . $row['projectOverview']. '</p>';
                            }
                            ?>
                        </div>
                        <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p id="clientName" class="text-base text-gray-600"></p>

                        </div>

                        <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p id="date" class="text-base text-gray-600"></p>

                        </div>
                        <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p id="deadline" class="text-base text-gray-600"></p>

                        </div>
                        <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                            <p id="budget" class="text-base text-gray-600"></p>

                        </div>
                    </div>
                </div>
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                        <tr>
                            <th id="name" scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Role</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Status</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Task status</th>
                        </tr>
                    </thead>
                    <tbody id="tablebody" class="divide-y divide-gray-100 border-t border-gray-100">

                    </tbody>
                </table>
            </div>
            <!-- project progress bar end-->
            <div class="grid grid-cols-2 gap-4 mb-4">

                <!-- prject request  -->
                <div class="relative block rounded  border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 h-48 bg-white">
                    <div class="flex items-center gap-4">
                        <img src="image/icons/time.png" alt="" width="50px">
                        <h3 class="text-3xl font-bold sm:text-4xl">Upcoming deadline</h3>
                    </div>

                    <p class="mt-4 font-medium text-gray-500">
                        <strong>SPMS</strong> project has to be completed within this week
                    </p>

                </div>
                <!-- on going projects  -->
                <div class="relative block rounded  border-pink-600 p-4 shadow-xl sm:p-6 lg:p-8 h-48 bg-white">
                    <div class="flex items-center gap-4">
                        <img src="image/icons/process.png" alt="" width="50px">

                        <h3 class="text-3xl font-bold sm:text-4xl">On going Projects</h3>
                    </div>

                    <p class="mt-4 font-medium text-gray-500">
                        <strong>9</strong> projects are in the working process
                    </p>

                </div>
            </div>
        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>