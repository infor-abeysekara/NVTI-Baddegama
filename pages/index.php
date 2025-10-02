<?php include 'header.php'; ?>

<main class="min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto py-12 px-4">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Welcome to NVTI Baddegama</h1>
        <p class="text-lg text-gray-600 text-center mb-12">
            Your gateway to quality vocational education and skill development.
        </p>
        
        <!-- Sample content to test scrolling -->
        <div class="space-y-8">
            <?php for($i = 1; $i <= 10; $i++): ?>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-primary mb-4">Section <?php echo $i; ?></h2>
                <p class="text-gray-700">
                    This is sample content to demonstrate the sticky navbar functionality. 
                    Scroll down to see how the navbar remains fixed at the top of the page.
                </p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>