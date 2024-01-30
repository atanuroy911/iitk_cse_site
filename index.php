<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atanu Shuvam Roy | MTech IIT Kanpur</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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

    <?php
    // Read JSON data from file
    $json_data = file_get_contents('data.json');

    // Check if JSON data was successfully read
    if ($json_data === false) {
        echo "Error: Unable to read profile data from JSON file.";
        exit;
    }

    // Decode JSON data into associative array
    $profile = json_decode($json_data, true);

    // Check if JSON data was successfully decoded
    if ($profile === null) {
        echo "Error: Unable to decode profile data from JSON.";
        exit;
    }
    ?>

    <div class="container flex flex-col lg:flex-row justify-between mx-auto">
        <div class="content lg:w-3/4 p-4">
            <h2 class="text-2xl text-gray-800">About <?php echo $profile['name']; ?></h2>
            <p class="text-gray-700"><?php echo $profile['about']; ?></p>

            <p class="text-gray-700">Current research interests include:
            <ul class="list-disc ml-8">
                <?php foreach ($profile['research_interests'] as $interest) : ?>
                    <li><?php echo $interest; ?></li>
                <?php endforeach; ?>
            </ul>
            </p>
            <br>
            <h2 class="text-2xl text-gray-800">Education</h2>
            <ul class="text-gray-700 list-disc ml-8">
                <?php foreach ($profile['education'] as $education) : ?>
                    <li><?php echo $education['degree']; ?> (<?php echo $education['duration']; ?>)<br>
                        <?php echo $education['department']; ?>, <?php echo $education['institution']; ?><br>
                        <?php if (isset($education['location'])) echo $education['location']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>
            <h2 class="text-2xl text-gray-800">Experience</h2>
            <ul class="text-gray-700 list-disc ml-8">
                <?php foreach ($profile['experience'] as $experience) : ?>
                    <li><?php echo $experience['institution']; ?><br>
                        <?php echo $experience['role']; ?> at <?php echo $experience['lab']; ?> (<?php echo $experience['duration']; ?>)<br>
                        Working under <?php echo $experience['supervisor']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="image lg:w-1/4 p-4">
            <img class="rounded-lg" src="<?php echo $profile['image_url']; ?>" alt="<?php echo $profile['name']; ?>" class="mx-auto">
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4 text-center">
        <p>&copy; <?php echo date("Y"); ?> Atanu Shuvam Roy. All Rights Reserved.</p>
    </footer>
</body>

</html>