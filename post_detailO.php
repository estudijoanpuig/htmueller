<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Post</title>
    <link href="/img/xampp.png" rel="icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['system-ui', 'sans-serif'],
                    },
                    fontWeight: {
                        'normal': 400,
                    },
                    colors: {
                        'dark-bg': '#1a202c',
                        'dark-text': '#a0aec0',
                        'dark-card': '#2d3748',
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>


    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Clipboard.js -->
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>

    <!-- NanoGallery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <!-- Fancybox JS -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <!-- COPY CSS -->
    <link rel="stylesheet" href="copy/style.css">

    <style>
        .dark .bg-indigo-50 {
            background-color: #1a202c;
        }

        .dark .text-gray-700 {
            color: #a0aec0;
        }

        .dark .bg-white {
            background-color: #2d3748;
        }

        .dark .text-gray-800 {
            color: #a0aec0;
        }

        .container {
            max-width: 800px;
            /* Ajustar el ancho de la página */
        }

        .banner-image {
            max-height: 250px;
            max-width: 300px;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-indigo-50 font-sans font-normal text-gray-500" :class="{ 'dark:bg-dark-bg dark:text-dark-text': darkMode }">



    <!-- Botón para alternar el tema -->
    <div class="flex justify-end p-2">
        <button @click="darkMode = !darkMode" class="text-gray-700 dark:text-gray-400">
            <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 2a1 1 0 011-1 1 1 0 110 2 1 1 0 01-1-1zm0 15a1 1 0 100 2 1 1 0 000-2zM2 10a1 1 0 112-0 1 1 0 01-2 0zm14-0a1 1 0 112-0 1 1 0 01-2 0zM4.22 4.22a1 1 0 011.41 0 1 1 0 11-1.41-1.41zm10.36 10.36a1 1 0 010 1.41 1 1 0 11-1.41-1.41zm-10.36 0a1 1 0 010 1.41 1 1 0 11-1.41-1.41zm10.36-10.36a1 1 0 110-1.41 1 1 0 010 1.41zM10 5a5 5 0 100 10 5 5 0 000-10zm0 1a4 4 0 110 8 4 4 0 010-8z" />
            </svg>
            <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M17.293 13.293A7.975 7.975 0 0018 10a8 8 0 10-8 8 7.975 7.975 0 003.293-.707l4.992 4.992a1 1 0 001.414-1.414l-4.992-4.992zM12 2a8 8 0 100 16 8 8 0 000-16z" />
            </svg>
        </button>
    </div>

    <div class="container mx-auto">
        <?php
        $servername = "localhost";
        $username = "joan";
        $password = "queMm88/g62123";
        $dbname = "postslar11";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if (isset($_GET['id'])) {
            $post_id = intval($_GET['id']);
            $sql = "SELECT * FROM posts WHERE id = $post_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $post = $result->fetch_assoc();

                echo "<h1 class='text-3xl font-bold mb-2 text-gray-800 dark:text-gray-400 text-center'>" . $post['title'] . "</h1>";
                echo "<p class='text-sm text-gray-600 dark:text-gray-500 text-center'>Created at: " . $post['created_at'] . " | Updated at: " . $post['updated_at'] . "</p>";



                echo "<div class='flex space-x-4 mt-4 justify-center'>";
                if (!empty($post['url'])) {
                    echo "<a href='" . $post['url'] . "' target='_blank' class='text-blue-500 dark:text-blue-300'><i class='fas fa-link'></i></a>";
                }
                if (!empty($post['ins'])) {
                    echo "<a href='" . $post['ins'] . "' target='_blank' class='text-pink-500 dark:text-pink-300'><i class='fab fa-instagram'></i></a>";
                }
                if (!empty($post['face'])) {
                    echo "<a href='" . $post['face'] . "' target='_blank' class='text-blue-800 dark:text-blue-400'><i class='fab fa-facebook'></i></a>";
                }
                if (!empty($post['youtube'])) {
                    echo "<a data-fancybox='gallery' href='" . $post['youtube'] . "' target='_blank' class='text-red-500 dark:text-red-300'><i class='fab fa-youtube'></i></a>";
                }
                echo "</div>";

                echo "<div id='post-content' class='text-gray-800 dark:text-gray-400'>" . $post['content'] . "</div>";


                if ($post['category_id'] == 7) {
                    echo "<div id='nanogallery2' data-nanogallery2='{
            \"thumbnailHeight\": 350,
            \"thumbnailWidth\": 350,
            \"itemsBaseURL\": \"img/people/" . urlencode($post['title']) . "/\"
          }'>";
                    for ($i = 1; $i <= 18; $i++) {
                        echo "<a href='{$i}.jpg' data-ngThumb='{$i}.jpg'>{$post['title']} {$i}</a>";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p class='text-red-500'>Post no encontrado.</p>";
            }
        } else {
            echo "<p class='text-red-500'>ID de post no proporcionado.</p>";
        }
        echo "<div class='flex justify-center'><img src='img/" . $post['img'] . "' alt='" . $post['title'] . "' class='banner-image rounded-lg mb-4'></div>";
        $conn->close();
        ?>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js'></script>
    <script src='https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?skin=sunburst'></script>
    <script src="copy/script.js"></script>

</body>

</html>