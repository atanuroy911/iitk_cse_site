<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* 100% of the viewport height */
        }

        .content {
            flex-grow: 1; /* Grow to fill remaining vertical space */
        }

        .image {
            flex-shrink: 0; /* Prevent image from shrinking */
            margin-left: 2rem; /* Add margin for spacing */
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="wrapper">
        <header class="bg-gray-800 text-white py-4">
            <h1 class="text-3xl">Atanu Shuvam Roy</h1>
        </header>
        <nav class="bg-gray-800 py-4 text-center">
            <a href="index.php" class="px-4 py-2 hover:text-blue-200">Home</a>
            <a href="publications.php" class="px-4 py-2 hover:text-blue-200">Publications</a>
            <a href="gallery.php" class="px-4 py-2 hover:text-blue-200">Gallery</a>
            <a href="contact.php" class="px-4 py-2 hover:text-blue-200">Contact</a>
        </nav>

        <!-- Contact information -->
        <div class="container mx-auto px-4 py-8 flex">
            <div class="content w-3/4">
                <h2 class="text-2xl text-gray-800 mb-4">Contact Information</h2>
                <p class="text-gray-700">
                    <strong>Atanu Shuvam Roy</strong><br>
                    Student Researcher<br>
                    Department of Computer Science and Engineering (CSE)<br>
                    Indian Institute of Technology, Kanpur (IITK)<br>
                    Kanpur, Uttar Pradesh 208016, India<br>
                    Email: atanusroy [at] cse [dot] iitk [dot] ac [dot] in
                </p>
                <p class="mt-4">
                    <a href="path_to_your_cv.pdf" class="text-blue-600 hover:underline">Click here for my CV</a>
                </p>
            </div>
            <div class="image w-1/4">
                <img src="images/KD-tiny.jpg" alt="Contact Image">
            </div>
        </div>

        <footer class="bg-gray-800 text-white py-4 text-center">
            <p>&copy; <?php echo date("Y"); ?> Atanu Shuvam Roy. All Rights Reserved.</p>
        </footer>
    </div>
</body>

</html>
