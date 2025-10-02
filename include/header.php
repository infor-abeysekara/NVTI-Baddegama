<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVTI Baddegama</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    
    <style>
        .nav-bg {
            background-color: #7c1c20; /* Primary Dark Maroon */
        }
        
        /* * NEW Custom Hover Effect: Replaces background color with a white border and ensures padding is applied. 
        * We are adding an explicit padding here for the desktop links (md:p-0) and then using 
        * Tailwind's 'rounded' class for border-radius.
        */
        .nav-hover-border {
            /* Inherit the link's default padding for mobile/non-md screens */
            padding: 8px 12px; /* py-2 px-3 equivalent */
            border: 2px solid transparent; /* Default transparent border */
            transition: border-color 0.3s ease; /* Smooth border transition */
        }

        .nav-hover-border:hover {
            background-color: transparent !important; /* Ensure no background change on hover */
            border-color: white; /* White border on hover */
            color: white; /* Keep text white */
        }

        /* Adjusting for the special case of md:p-0 on desktop */
        @media (min-width: 768px) {
            .nav-link-desktop {
                padding: 0 0; /* Resetting desktop padding on default state */
            }
            .nav-link-desktop:hover {
                 /* Apply padding specifically on hover for desktop links that had md:p-0 */
                padding: 2px 4px; /* A small padding for the border to look nice */
            }
            /* Override the Flowbite/Tailwind's md:p-0 when combined with the hover border */
            .nav-hover-border.md\:p-0 {
                 padding: 8px 12px; /* Resetting to original mobile padding for consistency */
            }
            /* Explicitly define hover padding for desktop links that need a border */
            .nav-link-with-border:hover {
                padding: 6px 10px !important; /* Slightly smaller padding for a compact desktop link */
                border-radius: 0.5rem; /* Equivalent to 'rounded-lg' */
            }
        }
        
        /* Existing color definitions */
        .text-primary {
            color: #7c1c20;
        }
        .bg-primary {
            background-color: #7c1c20;
        }
        .border-primary {
            border-color: #7c1c20;
        }
        .hover-primary:hover {
            background-color: #7c1c20;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="nav-bg border-gray-200 sticky top-0 z-50 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                    <span class="text-primary font-bold text-lg">NVTI</span>
                </div>
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Baddegama</span>
            </a>

            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="../pages/index.php" class="block py-2 px-3 text-white rounded nav-hover-border nav-link-with-border md:p-0 transition duration-300">Home</a>
                    </li>
                    <li>
                        <a href="../pages/about.php" class="block py-2 px-3 text-white rounded nav-hover-border nav-link-with-border md:p-0 transition duration-300">About</a>
                    </li>
                    <li>
                        <a href="../pages/contact.php" class="block py-2 px-3 text-white rounded nav-hover-border nav-link-with-border md:p-0 transition duration-300">Contact</a>
                    </li>
                    
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-white rounded nav-hover-border nav-link-with-border md:p-0 md:w-auto transition duration-300">
                            Courses 
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownNavbarLink">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Vocational Training</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Technical Courses</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Skill Development</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Certificate Programs</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <a href="../pages/gallery.php" class="block py-2 px-3 text-white rounded nav-hover-border nav-link-with-border md:p-0 transition duration-300">Gallery</a>
                    </li>
                    <li>
                        <a href="../pages/register.php" class="block py-2 px-3 text-white rounded nav-hover-border nav-link-with-border md:border-0 md:p-0 transition duration-300 md:ml-2">
                            Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>