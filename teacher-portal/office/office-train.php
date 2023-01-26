<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Office</title>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" href="./assets/css/tailwind.output.css" />
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
		<script src="./assets/js/init-alpine.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
		<script src="./assets/js/charts-lines.js" defer></script>
		<script src="./assets/js/charts-pie.js" defer></script>
	</head>
	<body>
		<?php
			$conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
			error_reporting(0);
			$query = "SELECT t.*, s.* FROM student_train_map AS t, student AS s WHERE t.s_id=s.s_id ORDER BY t.tc_no ASC";
			$data = mysqli_query($conn, $query);
			$total = mysqli_num_rows($data);
		?>
		
		<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
      
			<!-- Desktop sidebar START -->
				<aside  class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
					<div class="py-4 text-gray-500 dark:text-gray-400">
						<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="office-home.php">
							CRCE Office
						</a>
						
						<ul class="mt-6">
                            
                            <li class="relative px-6 py-3">
								<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
								    href="office-home.php">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    <span class="ml-4">
                                       Employees
                                    </span>
								</a>
							</li>

                            <li class="relative px-6 py-3">
								<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
								    href="office-bonafide.php">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                                    </svg>
                                    <span class="ml-4">
                                        Bonafide
                                    </span>
								</a>
							</li>

                            <li class="relative px-6 py-3">
                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                                    href="office-train.php">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path   d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                    </svg>
                                    <span class="ml-4">
                                        Railway Concession 
                                    </span>
                                </a>
                            </li>
						</ul>
						
						<ul>
                            <li class="relative px-6 py-3">
								<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
								    href="office-lc.php">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75"></path>
                                    </svg>
                                    <span class="ml-4">
                                       Leaving Certificate
                                    </span>
								</a>
							</li>

                            <li class="relative px-6 py-3">
								<button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true" >
								<span class="inline-flex items-center">
									<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
									</svg>
									<span class="ml-4">
									Student Section
									</span>
								</span>
								<svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
								</button>
								<template x-if="isPagesMenuOpen">
									<ul
										x-transition:enter="transition-all ease-in-out duration-300"
										x-transition:enter-start="opacity-25 max-h-0"
										x-transition:enter-end="opacity-100 max-h-xl"
										x-transition:leave="transition-all ease-in-out duration-300"
										x-transition:leave-start="opacity-100 max-h-xl"
										x-transition:leave-end="opacity-0 max-h-0"
										class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
										aria-label="submenu"
									>
										<li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
											<a class="w-full" href="all-student-office.php">All Student</a>
										</li>
										<li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
											<a class="w-full" href="office-documents.php"> Documents </a>
										</li>
										<li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
											<a class="w-full" href="office-exam.php"> Exam Cell </a>
										</li>
                                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
											<a class="w-full" href="add-student-office.php"> Add New Student </a>
										</li>
									</ul>
								</template>
							</li>
						</ul>

                        
						<div class="px-6 my-6">
							<button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >
								<a href="add-employee-office.php">
									Add New Employee <span class="ml-2" aria-hidden="true">+</span>
								</a>
							</button>
						</div>
					</div>
				</aside>
			<!-- Desktop sidebar END -->
					
			<div class="flex flex-col flex-1 w-full">
				<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
					<div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
						<!-- Mobile hamburger START -->
							<button
								class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
								@click="toggleSideMenu"
								aria-label="Menu"
							>
								<svg
								class="w-6 h-6"
								aria-hidden="true"
								fill="currentColor"
								viewBox="0 0 20 20"
								>
								<path
									fill-rule="evenodd"
									d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
									clip-rule="evenodd"
								></path>
								</svg>
							</button>
						<!-- Mobile hamburger END-->


						<!-- Search input START-->
							<div class="search flex justify-center flex-1 lg:mr-32">
								<div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
									<div class="absolute inset-y-0 flex items-center pl-2">
										<svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
										<path
											fill-rule="evenodd"
											d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
											clip-rule="evenodd"
										></path>
										</svg>
									</div>
									<input
										class="searchTerm cd-search table-filter w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
										type="text"
										placeholder="Search"
										aria-label="Search"
										id="myInput" 
										onkeyup="myFunction()" 
										data-table="order-table"
									/>
								</div>
							</div>
						<!-- Search input END-->

						<ul class="flex items-center flex-shrink-0 space-x-6">
							<!-- Theme toggler START -->
								<li class="flex">
								<button
									class="rounded-md focus:outline-none focus:shadow-outline-purple"
									@click="toggleTheme"
									aria-label="Toggle color mode"
								>
									<template x-if="!dark">
									<svg
										class="w-5 h-5"
										aria-hidden="true"
										fill="currentColor"
										viewBox="0 0 20 20"
									>
										<path
										d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
										></path>
									</svg>
									</template>
									<template x-if="dark">
									<svg
										class="w-5 h-5"
										aria-hidden="true"
										fill="currentColor"
										viewBox="0 0 20 20"
									>
										<path
										fill-rule="evenodd"
										d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
										clip-rule="evenodd"
										></path>
									</svg>
									</template>
								</button>
								</li>
							<!-- Theme toggler END -->

							<!-- Profile menu START -->
								<li class="relative">
								<button
									class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
									@click="toggleProfileMenu"
									@keydown.escape="closeProfileMenu"
									aria-label="Account"
									aria-haspopup="true"
								>
									<img
									class="object-cover w-8 h-8 rounded-full"
									src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
									alt=""
									aria-hidden="true"
									/>
								</button>
								<template x-if="isProfileMenuOpen">
									<ul
									x-transition:leave="transition ease-in duration-150"
									x-transition:leave-start="opacity-100"
									x-transition:leave-end="opacity-0"
									@click.away="closeProfileMenu"
									@keydown.escape="closeProfileMenu"
									class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
									aria-label="submenu"
									>
									<li class="flex">
										<a 
										class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
										href="#"
										>
										<svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
											<path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
										</svg>
										<span>Profile</span>
										</a>
									</li>
							
									<li class="flex">
										<a
										class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
										href="../teacher-login.php"
										>
										<svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
											<path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
										</svg>
										<span>Log out</span>
										</a>
									</li>
									</ul>
								</template>
								</li>
							<!-- Profile menu END -->
						</ul>
					</div>
				</header>
				
				<!-- Railway Concession START -->
				<main class="h-full overflow-y-auto">
					<div class="container px-6 mx-auto grid">
						<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Railway Concession </h2>

						<!-- Cards Section START-->
							<?php
								$sql = "SELECT COUNT(s_id) as t_train  FROM student_train_map;";
								$query = mysqli_query($conn, $sql);
								$row = mysqli_fetch_assoc($query);

								$code = "SELECT issue_date FROM student_train_map ORDER BY issue_date DESC LIMIT 1";
								$count = mysqli_query($conn, $code);
								$student = mysqli_fetch_assoc($count);
							?>
							<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                                <!-- Card 1 START -->
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                                            Railway Concession  Taken
                                        </p>
                                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                            <?php echo $row['t_train']; ?>
                                        </p>
                                    </div>
                                    </div>
                                <!-- Card 1 END -->

                                <!-- Card 2 START -->
                                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                                    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> Lastest Issue Date </p>
                                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                            <?php echo $student['issue_date']; ?>
                                        </p>
                                    </div>
                                    </div>
                                <!-- Card 2 END -->
							</div>
						<!-- Cards Section END-->

						<!-- Table START -->
							<div class="w-full overflow-hidden rounded-lg shadow-xs">
								<div class="w-full overflow-x-auto">
									<table class="order-table w-full whitespace-no-wrap">
										<thead>
											<tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
											<th class="px-4 py-3">Concession No</th>
											<th class="px-4 py-3">Roll No</th>
											<th class="px-4 py-3">Student Name</th>
                                            <th class="px-4 py-3"> Class </th>
                                            <th class="px-4 py-3"> Period </th>
                                            <th class="px-4 py-3"> Station </th>
                                            <th class="px-4 py-3">Issue Date </th>
                                            <th class="px-4 py-3">Exp. Date </th>
											</tr>
										</thead>
										
										<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
											<?php
													while($result = mysqli_fetch_assoc($data))
													{
														echo"<tr class='text-gray-700 dark:text-gray-400'>
																<td class='px-4 py-3 text-xs'>".$result['tc_no']."</td>
																<td class='px-4 py-3'>".$result['s_id']."</td>
																<td class='px-4 py-3 text-sm'>".$result['first_name']." ".$result['last_name']."</td>
                                                                <td class='px-4 py-3 text-xs'>".$result['class']."</td>
                                                                <td class='px-4 py-3 text-xs'>".$result['period']."</td>
                                                                <td class='px-4 py-3 text-xs'>".$result['home_stn']."</td>
                                                                <td class='px-4 py-3 text-xs'>".$result['issue_date']."</td>
                                                                <td class='px-4 py-3 text-xs'>".$result['exp_date']."</td>
															</tr>";
													}
											?>					
										</tbody>	
									</table>
								</div>
							</div>
						<!-- Table END -->
					</div>
				</main>
				<!-- Railway Concession  END -->

			</div>
    	</div>
		<script  src="script.js"></script>
	</body>
</html>