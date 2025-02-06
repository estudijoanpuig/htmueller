<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>la memoria</title>
    <link rel="icon" type="image/svg+xml" href="images/html.svg">
    <script>
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    


    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


    <!-- FANCYBOX -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>


</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="index.php">
                            <img src="images/html.svg" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">

                    <ul class="s-header__menu-links">
                        <li class="current"><a href="#intro" class="smoothscroll">Intro</a></li>
                        <li><a href="#about" class="smoothscroll">falla la memoria</a></li>
                        <li><a href="#services" class="smoothscroll">4 distraccions</a></li>
                        <li><a href="#folio" class="smoothscroll">Work</a></li>
                        <li><a href="#footer" class="smoothscroll">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <ul class="s-header__social">
                        <li>
                            <a href="https://www.facebook.com/joanpuigbertran">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/estudijoanpuig">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/estudijoanpuig/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/estudijoanpuig">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#daa5ea" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33s1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2"/></svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul> <!-- s-header__social -->

                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        <section id="content" class="s-content">


            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro target-section">

                <div class="s-intro__bg"></div>

                <div class="row s-intro__content">

                    <div class="s-intro__content-bg"></div>

                    <div class="column lg-12 s-intro__content-inner">

                        <h1 class="s-intro__content-title">
                            Ja estas aqui! <br>
                            trovaras el que no puc guardar a la memoria... <br>
                            Una Base de dades.
                        </h1>

                        <div class="s-intro__content-buttons">
                            <a href="#folio" class="btn btn--stroke s-intro__content-btn smoothscroll">mes sobre
                                mi</a>
                            <a href="https://player.vimeo.com/video/149304004?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
                                class="s-intro__content-video-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path d="M7 6v12l10-6z"></path>
                                </svg>
                            </a>
                        </div>

                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

                <div class="s-intro__scroll-down">
                    <a href="#about" class="smoothscroll">
                        <span>Baixa Avall</span>
                    </a>
                </div> <!-- s-intro__scroll-down -->

            </section> <!-- end s-intro -->


            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row section-header" data-num="01">
                    <h3 class="column lg-12 section-header__pretitle pretitle text-pretitle">LA FAMOSA BBDD: postslar11
                    </h3>
                    <div class="column lg-6 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                            Aquest es el meu xuletari, com quan anava a l'universitat.
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                            Tot i que ara amb l'arrivada de la IA intel.ligencia artificial en concret ChatGpt 4.0 ara
                            ja no em caldria.
                        </p>
                    </div>
                </div>

                <div class="row process-list list-block show-ctr block-lg-one-half block-tab-whole">

                    <div class="container mx-auto px-2 py-4">

                        <!--Regular Datatables CSS-->
                        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
                        <!--Responsive Extension Datatables CSS-->
                        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"
                            rel="stylesheet">

                        


                        <!--Card-->
                        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

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

			// Obtener todos los posts 
			$sql = "SELECT * FROM posts"; 
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				echo "<table id='example' class='stripe hover' style='width:100%; padding-top: 1em;  padding-bottom: 1em;'>";
				echo "<thead><tr><th data-priority='1'>Id</th><th data-priority='2'>Título</th><th data-priority='3'>excerpt</th data-priority='4'><th>URL</th data-priority='5'><th data-priority='6'>Ins</th><th data-priority='7'>Face</th><th data-priority='8'>YouTube</th></tr></thead>";
				echo "<tbody>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row['id'] . "</td>";
					echo "<td><a href='post_detail.php?id=" . $row['id'] . "' class='text-blue-500 dark:text-blue-300'>" . $row['title'] . "</a></td>";
					echo "<td>" . $row['excerpt'] . "</td>";
					echo "<td>";
					if (!empty($row['url'])) {
						echo "<a href='" . htmlspecialchars($row['url'], ENT_QUOTES, 'UTF-8') . "' target='_blank' class='text-blue-500 dark:text-blue-300'><i class='fas fa-link'></i></a>";
					}
					echo "</td>";

					echo "<td>";
					if (!empty($row['ins'])) {
						echo "<a href='" . htmlspecialchars($row['ins'], ENT_QUOTES, 'UTF-8') . "' target='_blank' class='text-pink-500 dark:text-pink-300'><i class='fab fa-instagram'></i></a>";
					}
					echo "</td>";

					echo "<td>";
					if (!empty($row['face'])) {
						echo "<a href='" . htmlspecialchars($row['face'], ENT_QUOTES, 'UTF-8') . "' target='_blank' class='text-blue-800 dark:text-blue-400'><i class='fab fa-facebook'></i></a>";
					}
					echo "</td>";

					echo "<td>";
					if (!empty($row['youtube'])) {
						echo "<a data-fancybox='gallery' href='" . htmlspecialchars($row['youtube'], ENT_QUOTES, 'UTF-8') . "' target='_blank' class='text-red-500 dark:text-red-300'><i class='fab fa-youtube'></i></a>";
					}
					echo "</td>";

					echo "</tr>";
				}
				echo "</tbody>";
				echo "</table>";
			} else {
				echo "<p>No hay posts disponibles en la categoría 'CODES'.</p>";
			}

			$conn->close();
			?>

                        </div>
                        <!--/Card-->
                    </div>
                    <!--/container-->
                    <!-- jQuery -->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

                    <!--Datatables -->
                    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
                    <script>
                    $(document).ready(function() {

                        var table = $('#example').DataTable({
                                responsive: true
                            })
                            .columns.adjust()
                            .responsive.recalc();
                    });
                    </script>

                </div> <!-- end process-list -->

            </section> <!-- end s-about -->


            <!-- services
            ----------------------------------------------- -->
            <section id="services" class="s-services target-section">

                <div class="row section-header" data-num="02">
                    <h3 class="column lg-12 section-header__pretitle text-pretitle">que toca avui?</h3>
                    <div class="column lg-6 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                            Primer de tot agraïr a l'univers aquest maravellos dia. En que puc observar la feina
                            d'aquests grans pintors.
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                            El meu pare em deia: "Jo no crec amb deu pero un parenostre no fa mai nosa". Tambe recordo
                            quan sortia de la fabrica per venirme a llevar. Jo era molt dormilega ara poc. En aquella
                            epoca vaig començar la meva feina de pintura.
                        </p>
                    </div>
                </div> <!-- end section-header -->

                <?php
// Connexió a la base de dades
$host = 'localhost';
$db = 'postslar11';
$user = 'joan';
$pass = 'queMm88/g62123';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Consulta per obtenir els posts de la categoria "people" (ID 7) amb l'etiqueta "painters" (ID 24)
$stmt = $pdo->prepare("
   SELECT p.id, p.title, p.excerpt, p.img
FROM posts p
JOIN post_etiquetas pe ON p.id = pe.post_id
WHERE p.category_id = :category_id AND pe.etiqueta_id = :etiqueta_id
ORDER BY p.title ASC;

");
$stmt->execute(['category_id' => 7, 'etiqueta_id' => 24]);
$posts = $stmt->fetchAll();
?>




                <div class="row services-list list-block block-lg-one-half block-tab-whole">

                    <?php foreach ($posts as $post): ?>
                    <div class="column list-block__item">
                        <div class="list-block__title">
                            <div class="list-block__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="m6.516 14.323-1.49 6.452a.998.998 0 0 0 1.529 1.057L12 18.202l5.445 3.63a1.001 1.001 0 0 0 1.517-1.106l-1.829-6.4 4.536-4.082a1 1 0 0 0-.59-1.74l-5.701-.454-2.467-5.461a.998.998 0 0 0-1.822 0L8.622 8.05l-5.701.453a1 1 0 0 0-.619 1.713l4.214 4.107zm2.853-4.326a.998.998 0 0 0 .832-.586L12 5.43l1.799 3.981a.998.998 0 0 0 .832.586l3.972.315-3.271 2.944c-.284.256-.397.65-.293 1.018l1.253 4.385-3.736-2.491a.995.995 0 0 0-1.109 0l-3.904 2.603 1.05-4.546a1 1 0 0 0-.276-.94l-3.038-2.962 4.09-.326z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="h5">
                                <a href="post_detail.php?id=<?= $post['id'] ?>">
                                    <?= htmlspecialchars($post['title']) ?>
                                </a>
                            </h3>
                        </div>
                        <div class="list-block__text">
                            <p>
                                <img data-fancybox="gallery" src="img/<?= htmlspecialchars($post['img']) ?>"
                                    alt="<?= htmlspecialchars($post['title']) ?>"
                                    style="float: left; width: 100px; height: 100px; object-fit: cover; margin-right: 10px;">
                                <?= htmlspecialchars($post['excerpt']) ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>



                </div> <!-- end process-list -->

            </section> <!-- end s-services -->

            <script type="text/javascript">
            /* Assegura que les imatges es mostren quadrades */
            #bricks.entry__thumb {
                position: relative;
                width: 100 % ; /* Ocupa l'ample del contenidor */
                padding - top: 100 % ; /* Força una proporció quadrada (1:1) */
                overflow: hidden; /* Retalla el contingut que sobresurti */
            }

            #bricks.entry__thumb img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100 % ;
                height: 100 % ;
                object - fit: cover; /* Centra i ajusta la imatge */
                display: block;
                margin: 0;
                padding: 0;
                border: none;
            }

            /* Per a imatges grans (brick--double) */
            #bricks.brick--double {
                grid - column: span 2; /* Opcional, depèn del grid */
                grid - row: span 2; /* Opcional, depèn del grid */
            }
            </script>



            <section id="folio" class="s-folio target-section">

                <div class="row section-header light-on-dark" data-num="03">
                    <h3 class="column lg-12 section-header__pretitle text-pretitle">Recent Works</h3>
                    <div class="column lg-6 stack-on-1100 section-header__primary">
                        <h2 class="title text-display-1">
                            Tinc un directori a img on hi vaig colocant les imatges de la meva feina.
                        </h2>
                    </div>
                    <div class="column lg-6 stack-on-1100 section-header__secondary">
                        <p class="desc">
                            Amb la intel.ligencia artificial hem buscat la manera de portar-les aqui davant.
                        </p>
                    </div>
                </div> <!-- end section-header -->



                <?php
// Configuració de les imatges
$directory = 'C:/projectes/PHP/htmueller/img/people/joanpuig/';
$relativePath = '/img/people/joanpuig/';
$images = glob($directory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$rowPattern = [2, 4]; // Patró d'imatges per fila (2 grans, 4 petites)
?>

<div id="bricks" class="row bricks">
    <div class="column lg-12 masonry">
        <div class="bricks-wrapper">
            <div class="grid-sizer"></div>
            <?php 
            $currentRow = 0; // Inicialitzem el comptador de files
            foreach ($images as $index => $imagePath): 
                $imageName = basename($imagePath);
                $title = ucwords(str_replace(['-', '_'], ' ', pathinfo($imageName, PATHINFO_FILENAME))); // Genera un títol amigable
                $description = "Aquesta és una descripció automàtica per a \"$title\". Pots personalitzar aquest text.";

                // Determina si és gran o petita
                $isLarge = $rowPattern[$currentRow % count($rowPattern)] === 2 && $index % 2 === 0;
                $brickClass = $isLarge ? 'brick brick--double' : 'brick';

                // Canvia la fila segons el patró
                if ($index % $rowPattern[$currentRow % count($rowPattern)] === 0) {
                    $currentRow++;
                }
            ?>
            <article class="<?= $brickClass ?> entry">
                <a href="#modal-<?= $index + 1 ?>" class="entry__link">
                    <div class="entry__thumb">
                        <img src="<?= $relativePath . $imageName ?>" alt="Image <?= $index + 1 ?>">
                    </div>
                </a>
            </article>

            <!-- Modal per a cada imatge -->
            <div id="modal-<?= $index + 1 ?>" hidden>
                <div class="modal-popup">
                    <img src="<?= $relativePath . $imageName ?>" alt="<?= $title ?>">
                    <div class="modal-popup__desc">
                        <h5><?= ucfirst($title) ?></h5>
                        <p>Aquesta és la descripció automàtica per a "<?= $title ?>". Pots personalitzar aquest text.</p>
                        <ul class="modal-popup__cat">
                            <li>Categoria Dinàmica</li>
                            <li>Exemple d'informació</li>
                        </ul>
                    </div>
                    <a href="#" class="modal-popup__details">Enllaç al projecte</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


                <!-- clients
                -------------------------------------------- -->
                <div class="s-clients row">
                    <div class="column lg-12">

                        <div class="row section-header">
                            <div class="column lg-12">
                                <h3 class="title text-display-1">Ara estic recopilant informacio sobre una colla 'eines que em seran de molta utilitat.</h3>
                            </div>
                        </div> <!-- end section-header -->

						<div class="row clients-list block-lg-one-fourth block-md-one-third block-tab-one-half block-stack">
						
                            <?php
// Connexió a la base de dades
$conn = new mysqli("localhost", "joan", "queMm88/g62123", "postslar11");

// Verificar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Consulta per obtenir els posts de la categoria "Eines"
$sql = "SELECT posts.id, posts.img 
FROM posts
JOIN categories ON posts.category_id = categories.id
JOIN post_etiquetas ON posts.id = post_etiquetas.post_id
JOIN etiquetas ON post_etiquetas.etiqueta_id = etiquetas.id
WHERE categories.name = 'Eines' 
AND etiquetas.name = 'essential'";
$result = $conn->query($sql);

// Comprovar si hi ha resultats
if ($result->num_rows > 0) {
    // Generar l'HTML per a cada post
    while ($row = $result->fetch_assoc()) {
        echo '<div class="column clients-list__item">
                <a href="post_detail.php?id=' . $row['id'] . '">
                    <img src="img/' . $row['img'] . '" alt="">
                </a>
              </div>';
    }
} else {
    echo "No s'han trobat posts a la categoria 'Eines'.";
}

// Tancar la connexió
$conn->close();
?>

							
                        </div> <!-- clients-list -->
						
						
                    </div> <!-- end column lg-12 -->
                </div> <!-- end s-clients -->

            </section> <!-- end s-folio -->


            <!-- testimonials
            ----------------------------------------------- -->
            <section id="testimonials" class="s-testimonials">

                <div class="row s-testimonials__content">
                    <div class="column lg-12">

                         <!-- NANOGALLERY-->              
<div class="uk-container uk-text-center uk-padding">
		<h1>nanogallery joanpuig</h1>
	<p class="uk-text-large">les meves aquarel.les</p>
		<link href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
		<div id="nanogallery2" data-nanogallery2='{
		"kind": "nano_photos_provider2",
		"dataProvider": "http://htmueller.test/nanogallery/nano_photos_content",
		"ThumbnailHeight": 350,
		"ThumbnailWidth": 350
		}'>
		</div>
		<!-- jQuery -->
		
		<script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>
	</div> <!-- /NANOGALLERY--> 

                    </div> <!-- end column -->
                </div> <!-- end s-testimonials__content -->

            </section> <!-- end testimonials -->

        </section> <!-- end content -->


        <!-- # site-footer
        ================================================== -->
        <footer id="footer" class="s-footer target-section">

            <div class="row section-header" data-num="04">
                <h3 class="column lg-12 section-header__pretitle text-pretitle">Get In Touch</h3>
                <div class="column lg-6 stack-on-1100 section-header__primary">
                    <h2 class="title text-display-1">
                        Have an idea or an epic project in mind? Talk to us.
                        Let's work together and make something great.
                        Drop us a line at <a href="mailto:#0" title="">hello@mueller.com</a>
                    </h2>
                </div>
                <div class="column lg-6 stack-on-1100 section-header__secondary">

                    <div class="contact-block">
                        <h6>Where To Find Us</h6>
                        <p>
                            1600 Amphitheatre Parkway <br>
                            Mountain View, California <br>
                            94043 US
                        </p>
                    </div>

                    <div class="contact-block">
                        <h6>Contact Infos</h6>
                        <ul class="contact-list">
                            <li><a href="tel:197-543-2345">+197 543 2345</a></li>
                            <li><a href="tel:197-123-9876">+197 123 9876</a></li>
                        </ul>
                    </div>

                </div>
            </div> <!-- end section-header -->

            <div class="row list-block block-lg-one-half block-tab-whole block-stack-on-1000 s-footer__btns">
                <div class="column list-block__item">
                    <div class="s-footer__contact-btn">
                        <a href="mailto:#0" class="btn btn--primary u-fullwidth">
                            Let's Talk
                        </a>
                    </div>
                </div>
                <div class="column list-block__item">
                    <div class="subscribe-form s-footer__subscribe">
                        <h6>Subscribe</h6>
                        <form id="mc-form" class="mc-form">
                            <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center"
                                placeholder="Your Email Address"
                                title="The domain portion of the email address is invalid (the portion after the @)."
                                pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"
                                required>
                            <input type="submit" name="subscribe" value="Subscribe"
                                class="btn btn--primary u-fullwidth">
                            <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                            <div class="mc-status"></div>
                        </form>
                    </div>
                </div>
            </div> <!-- end s-footer__btns -->

            <div class="row s-footer__bottom">

                <div class="column lg-6 tab-12 s-footer__bottom-left">
                    <ul class="s-footer__social">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:">
                                    <path
                                        d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z">
                                    </path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z">
                                    </path>
                                </svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="column lg-6 tab-12 s-footer__bottom-right">
                    <div class="ss-copyright">
                        <span>© Copyright Mueller 2022</span>
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div>
                </div>

            </div> <!-- s-footer__bottom -->

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"></path>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer> <!-- end footer -->


        <!-- Java Script
    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>



</body>

</html>




