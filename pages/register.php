

<?php include_once ('../include/header.php'); ?>



<div class="conatainer">
    <!-- Main Registration Card Container -->
    <div class="w-full max-w-2xl bg-white shadow-2xl rounded-xl p-8 md:p-10 border border-gray-100">

        <!-- Header -->
        <header class="text-center mb-8 md:mb-10">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 tracking-tight">
                New Student Enrollment
            </h1>
            <p class="text-gray-500 mt-2 text-md">
                Register for the upcoming semester's courses and provide initial application details.
            </p>
        </header>

        <!-- Success Message Area (Static, requires JS to hide/show) -->
        <div id="successMessage" class="hidden bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6" role="alert">
            <p class="font-bold">Registration Successful!</p>
            <p>Thank you for enrolling. (Note: This message will not automatically appear without JavaScript.)</p>
        </div>
        
        <!-- Registration Form -->
        <form id="registrationForm" class="space-y-6">
            <!-- NOTE: When the form is submitted, the page will refresh because there is no JavaScript intercepting the submission. -->

            <!-- Personal Information Section -->
            <fieldset class="border-t border-gray-200 pt-4">
                <legend class="text-lg font-semibold text-gray-700 mb-4">Personal Details</legend>

                <!-- Full Name and Identity Card No -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input type="text" id="fullName" name="fullName" required placeholder="John Doe"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                    <div>
                        <label for="identityCardNo" class="block text-sm font-medium text-gray-700 mb-1">Identity Card No</label>
                        <input type="text" id="identityCardNo" name="identityCardNo" required placeholder="A12345678"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                </div>

                <!-- Email and Phone Number -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required placeholder="john.doe@university.edu"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number (Optional)</label>
                        <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                    </div>
                </div>
                
                <!-- Previous Education -->
                <div class="mt-6">
                    <label for="previousEducation" class="block text-sm font-medium text-gray-700 mb-1">Previous School / Major (Required for new students)</label>
                    <input type="text" id="previousEducation" name="previousEducation" required placeholder="High School Name or Previous Major"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150">
                </div>

            </fieldset>

            <!-- Course Selection Section -->
            <fieldset class="border-t border-gray-200 pt-6">
                <legend class="text-lg font-semibold text-gray-700 mb-4">Course Selection</legend>
                
                <!-- Primary Course Selection (Dropdown) -->
                <div>
                    <label for="primaryCourse" class="block text-sm font-medium text-gray-700 mb-1">Primary Course Track</label>
                    <select id="primaryCourse" name="primaryCourse" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 transition duration-150 appearance-none">
                        <option value="" disabled selected>Select your primary study area</option>
                        <option value="cs">Computer Science</option>
                        <option value="business">Business Administration</option>
                        <option value="art">Digital Arts & Design</option>
                        <option value="biology">Molecular Biology</option>
                        <option value="history">World History</option>
                    </select>
                </div>

                <!-- Elective Courses (Checkboxes) -->
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Select Elective Courses (Max 3)</label>
                    <div class="space-y-3 p-4 border border-gray-200 rounded-lg bg-gray-50">
                        <div class="flex items-center">
                            <input id="elective1" name="electives" type="checkbox" value="data_analytics"
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="elective1" class="ml-3 text-sm font-medium text-gray-700">Introduction to Data Analytics</label>
                        </div>
                        <div class="flex items-center">
                            <input id="elective2" name="electives" type="checkbox" value="creative_writing"
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="elective2" class="ml-3 text-sm font-medium text-gray-700">Advanced Creative Writing</label>
                        </div>
                        <div class="flex items-center">
                            <input id="elective3" name="electives" type="checkbox" value="robotics"
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="elective3" class="ml-3 text-sm font-medium text-gray-700">Practical Robotics</label>
                        </div>
                        <div class="flex items-center">
                            <input id="elective4" name="electives" type="checkbox" value="financial_modeling"
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="elective4" class="ml-3 text-sm font-medium text-gray-700">Financial Modeling Basics</label>
                        </div>
                    </div>
                </div>

                <!-- Comments/Notes -->
                <div class="mt-6">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes (Optional)</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="e.g., Requesting specific section times or accommodations."
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 transition duration-150 resize-none"></textarea>
                </div>

            </fieldset>

            <!-- Submit Button -->
            <div class="pt-6">
                <button type="submit"
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-md text-lg font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200 transform hover:scale-[1.01] active:scale-[0.98]">
                    Submit Registration
                </button>
            </div>

        </form>
    </div>
</div>


<?php include_once ('../include/footer.php'); ?>

