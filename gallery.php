<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-auto-rows: 10px;
            gap: 10px;
        }

        .gallery img {
            width: 100%;
            height: auto;
            grid-row-end: span 1;
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-gray-800 text-white">
        <h1 class="text-3xl">Atanu Shuvam Roy</h1>
    </header>
    <nav class="bg-gray-800 py-4 text-center">
        <a href="index.php" class="px-4 py-2 hover:text-blue-200">Home</a>
        <a href="publications.php" class="px-4 py-2 hover:text-blue-200">Publications</a>
        <a href="gallery.php" class="px-4 py-2 hover:text-blue-200">Gallery</a>
        <a href="contact.php" class="px-4 py-2 hover:text-blue-200">Contact</a>
    </nav>



    <div class="mx-20 my-4">


        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/0.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/1.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/2.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/3.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/4.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/5.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/6.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/7.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/8.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/9.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/10.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/11.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/12.JPG" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/13.JPG" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/14.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/15.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/16.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/17.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/18.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/19.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/20.jpg" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/21.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/22.jpg" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="images/23.jpg" alt="">
                </div>
            </div>
        </div>

    </div>




    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; <?php echo date("Y"); ?> Atanu Shuvam Roy. All Rights Reserved.</p>
    </footer>
</body>

</html>