<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Update Student Document</title>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" href="./assets/css/tailwind.output.css" />
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
		<script src="./assets/js/init-alpine.js"></script>
	</head>
	<body>
		<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
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
								<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
								    href="office-train.php">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"></path>
                                    </svg>
                                    <span class="ml-4">
                                        Railway Concession  
                                    </span>
								</a>
							</li>

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
                        </ul>

                        <ul>
                            <li class="relative px-6 py-3">
                                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
                                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true" >
                                    <span class="inline-flex items-center">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                        </svg>
                                        <span class="ml-4">
                                            <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
                                                Students Section
                                            </a>
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

                <!-- Dashboard START -->
                    <main class="h-full pb-16 overflow-y-auto">
						<form  action="" method = "POST"> 
							<?php
								$conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));
								error_reporting(0); 
								$rollno = $_GET['rollno'];
								$name = $_GET['name'];
								echo $rn;
								$records = mysqli_query($conn,"SELECT * FROM student s, student_exam_map se WHERE s.s_id = se.s_id AND s.s_id= '$rollno'"); // fetch data from database
								while($data = mysqli_fetch_array($records))
								{ 
									echo' 
										<div class="container px-6 mx-auto grid">
											<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">'.$_GET['name'].'</h2>
											<br>
											
                                            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 1</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem1" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem1" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 2</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem2" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem2" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 3</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem3" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem3" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 4</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem4" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem4" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 5</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem5" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem5" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 6</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem6" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem6" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 7</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem7" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem7" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="mt-4 text-sm">
                                                    <span class="text-gray-700 dark:text-gray-400">Semester 8</span>
                                                    <div class="mt-2">       
                                                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio"
                                                                name= "sem8" 
                                                                value="yes"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">Yes</span>
                                                        </label>

                                                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                                                            <input
                                                                type="radio" 
                                                                name= "sem8" 
                                                                value="no"
                                                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                                            />
                                                            <span class="ml-2">No</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <br>

                                			</div>
										
											<div>
												<input 
													id="update" 
													type="submit" 
													name="submit" 
													value="UPDATE DATA" 
													class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
												>
											</div>
										</div>
									';
								}
							?>
						</form>
					</main>
				<!-- Dashboard END -->
      		</div>
    	</div>

		<?php		
			if($_POST['submit'])
			{
				if($_REQUEST["sem1"] == "yes") {
					$sem1 = "Yes";
				} 
				else if($_REQUEST["sem1"] == "no") {
					$sem1 = "No";
				}

                if($_REQUEST["sem2"] == "yes") {
					$sem2 = "Yes";
				} 
				else if($_REQUEST["sem2"] == "no") {
					$sem2 = "No";
				}

                if($_REQUEST["sem3"] == "yes") {
					$sem3 = "Yes";
				} 
				else if($_REQUEST["sem3"] == "no") {
					$sem3 = "No";
				}

                if($_REQUEST["sem4"] == "yes") {
					$sem4 = "Yes";
				} 
				else if($_REQUEST["sem4"] == "no") {
					$sem4 = "No";
				}


                if($_REQUEST["sem5"] == "yes") {
					$sem5 = "Yes";
				} 
				else if($_REQUEST["sem5"] == "no") {
					$sem5 = "No";
				}


                if($_REQUEST["sem6"] == "yes") {
					$sem6 = "Yes";
				} 
				else if($_REQUEST["sem6"] == "no") {
					$sem6 = "No";
				}


                if($_REQUEST["sem7"] == "yes") {
					$sem7 = "Yes";
				} 
				else if($_REQUEST["sem7"] == "no") {
					$sem7 = "No";
				}


                if($_REQUEST["sem8"] == "yes") {
					$sem8 = "Yes";
				} 
				else if($_REQUEST["sem8"] == "no") {
					$sem8 = "No";
				}

                if($_REQUEST["sem1"] == "yes" && 
                   $_REQUEST["sem2"] == "yes" &&
                   $_REQUEST["sem3"] == "yes" && 
                   $_REQUEST["sem4"] == "yes" && 
                   $_REQUEST["sem5"] == "yes" && 
                   $_REQUEST["sem6"] == "yes" &&  
                   $_REQUEST["sem7"] == "yes" && 
                   $_REQUEST["sem8"] == "yes") {
                        $all_sem_clear = "Yes";
                    }
                else {
                    $all_sem_clear = "No";
                }
                

				$query = "UPDATE student_exam_map SET sem1='$sem1', sem2='$sem2', sem3='$sem3', sem4='$sem4', sem5='$sem5', sem6='$sem6', sem7='$sem7', sem8='$sem8', all_sem_clear='$all_sem_clear' WHERE s_id='$rollno'";
				$data = mysqli_query($conn, $query);
				if($data) {
					echo "<script type='text/javascript'>alert('Data Updated.');  location.replace('office-exam.php') </script>";
					exit;
				}
				else {
					echo "<script type='text/javascript'>alert('Data not updated. Please try again later.');  location.replace('office-exam.php') </script>";
				}
			}
		?>
	</body>
</html>