<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIkit amb Masonry</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.25/dist/css/uikit.min.css" />
	
	

    <style>
        
        .uk-card {
            background-color: #2a2a2a;
        }
		.uk-navbar-dropbar {
      background: #252121;
    }

    .uk-navbar-container:not(.uk-navbar-transparent) {
      background: #252121;
    }
        .uk-card img {
            max-height: 200px;
            object-fit: cover;
        }
        .etiqueta-svg {
            width: 24px;
            height: 24px;
            display: inline-block;
        }

    .custom-title {
        font-size: 0.9rem; /* Redueix la mida del text */
        line-height: 1.3; /* Ajusta l'espai entre línies */
        overflow-wrap: break-word; /* Permet dividir paraules llargues */
        word-wrap: break-word;
        white-space: normal; /* Permet múltiples línies */
        max-height: 3.9rem; /* Limita l'alçada a 3 línies */
        overflow: hidden; /* Oculta text extra */
    }
	 .uk-tab > .uk-active > a {
        color: #007bff; /* Blau estil Bootstrap */
        font-weight: bold; /* Opcional: destacar amb negreta */
    }

    .uk-tab > .uk-active > a:hover {
        color: #0056b3; /* Blau més fosc en passar el cursor */
    }
	.uk-card-body {
    display: flow-root;
    padding: 10px 10px;
}
</style>
</head>
<body class="uk-background-secondary">

<div class="uk-position-relative">

    <nav class="uk-navbar-container">
        <div class="uk-container">
            <div uk-navbar="dropbar: true; dropbar-anchor: !.uk-navbar-container; target-y: !.uk-navbar-container">

                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <a href="/" class="uk-navbar-item uk-logo"><svg xmlns="http://www.w3.org/2000/svg" width="1.99em" height="2em" viewBox="0 0 256 258"><g fill="none" fill-rule="evenodd"><path fill="#fb7a24" d="M127.929.002Q177.77.002 227.61 0c4.17 0 8.3.362 12.301 1.582c8.675 2.644 13.268 8.865 15.068 17.438c.715 3.4.918 6.865.925 10.33c.053 23.27.092 46.542.094 69.814c.002 42.384.007 84.768-.08 127.151c-.012 5.933-.328 11.931-3.257 17.336c-3.249 5.994-7.697 10.738-14.45 12.824c-1.22.377-2.494.806-3.745.806c-2.882.002-5.687.716-8.56.716c-65.067-.005-130.133.033-195.2-.07c-5.292-.01-10.67-.395-15.697-2.548c-1-.43-2.01-.79-2.89-1.46c-6.4-4.877-10.746-10.96-11.678-19.191c-.335-2.968-.442-5.92-.442-8.889c.01-65.952.016-131.904.05-197.856c.003-3.826.042-7.718 1.219-11.38C4.403 6.846 11.261 1.519 21.427.437C23.79.185 26.173.022 28.547.02C61.672-.007 94.801.002 127.928.002"/><path fill="#fff" d="M128.775 164.113c-.727 4.454-1.238 8.48-2.838 12.19c-7.49 17.384-20.256 27.977-39.394 30.086c-22.621 2.492-43.515-11.47-49.797-33.154c-2.277-7.858-2.049-15.869-1.223-23.867c.881-8.546 3.399-16.65 7.33-24.296c.563-1.093.552-1.918-.152-2.977c-6.036-9.078-8.378-19.107-7.528-29.932c.455-5.786 1.86-11.32 4.483-16.504c7.689-15.185 24.57-28.072 47.179-25.932c19.88 1.88 38.293 19.029 41.167 38.315c.145.968.417 1.918.735 3.346c.476-2.586.82-4.72 1.265-6.834c3.703-17.521 20.854-35.855 45.164-36.082c24.64-.228 42.887 19.097 46.33 37.045c1.455 7.585 1.202 15.163.002 22.738a81 81 0 0 1-6.672 21.775c-.716 1.529-.642 2.63.275 4.05c5.307 8.224 7.649 17.252 7.349 27.056c-.628 20.457-15.097 38.802-35.002 43.6c-27.79 6.697-49.093-9.923-56.262-30.031c-1.17-3.273-1.723-6.69-2.41-10.592m50.489-35.94c.297-1.157 1.193-1.85 1.837-2.706c6.968-9.26 10.633-19.603 9.815-31.25c-.596-8.5-7.587-14.488-16.05-14.171c-8.469.317-14.85 6.848-14.97 15.322c-.009.694.033 1.389-.01 2.078c-.583 9.031-5.566 13.978-13.117 14.53c-1.379.101-2.762.224-4.143.228c-9.8.022-19.599.018-29.4.009c-4.28-.004-8.524.462-12.6 1.72c-19.027 5.87-30.122 18.882-33.796 38.275c-.728 3.837-1.383 7.819-.125 11.76c1.805 5.653 5.17 9.857 11.126 11.263c6.173 1.457 11.55-.155 15.822-5.004c2.761-3.135 3.632-6.86 3.838-10.948c.534-10.515 6.26-15.771 15.81-15.692c14.649.122 29.3.026 43.951.037c2.6.001 2.624.036 2.637 2.608c.025 4.75-.121 9.507.062 14.252c.298 7.747 7.114 14.186 15.016 14.413c8.148.233 15.411-5.794 15.942-13.661c.458-6.81.429-13.661-.018-20.476c-.346-5.275-3.2-9.035-8.036-11.217c-1.16-.522-2.38-.913-3.591-1.37m-91.832-15.984c3.151 0 5.723-.029 8.293.013c1.274.02 1.746-.528 1.736-1.777c-.042-4.943.213-9.902-.102-14.827c-.416-6.497-3.871-11.194-9.92-13.563c-6.202-2.429-11.878-1.043-16.678 3.538c-4.821 4.603-5.464 10.232-3.777 16.392c1.55 5.662 5.21 8.878 10.968 9.85c3.344.563 6.707.293 9.48.374"/></g></svg></a>
						
						<a href="/uikit3.php" class="uk-navbar-item uk-logo"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 48 48"><path fill="#e8eaf6" d="M42 39H6V23L24 6l18 17z"/><path fill="#c5cae9" d="m39 21l-5-5V9h5zM6 39h36v5H6z"/><path fill="#b71c1c" d="M24 4.3L4 22.9l2 2.2L24 8.4l18 16.7l2-2.2z"/><path fill="#d84315" d="M18 28h12v16H18z"/><path fill="#01579b" d="M21 17h6v6h-6z"/><path fill="#ff8a65" d="M27.5 35.5c-.3 0-.5.2-.5.5v2c0 .3.2.5.5.5s.5-.2.5-.5v-2c0-.3-.2-.5-.5-.5"/></svg></a>
						
						
						
						
                        <!-- DIRECTORIS/////////////////////////////////////////////////////////////////// -->
                        <li class="">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#e3bf1a" d="M12.9 4.22C18.73 6.84 20 2 20 2s-1.11 6.07-6.21 8.55c-1.04.51-1.69.78-1.69.78L3.73 7.25l8.37-3.43s-.2-.06.8.4M11.12 22l-7.79-4.22V9.07l7.79 3.97zm1.76 0l7.8-4.22V9.07l-7.8 3.97z"/></svg></a>
                            <div class=" uk-navbar-dropdown uk-navbar-dropdown-width-4">
                                <div class=" uk-drop-grid uk-child-width-1-4" uk-grid>
 



<div>
<ul class="uk-background-secondary uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">HTML</li>
<li class="uk-nav-divider"></li>

	<?php
// Directorio a explorar
$directory = "C:/xampp/htdocs/HTML";

// Abrir el directorio
if (is_dir($directory)) {
    // Leer el contenido del directorio
    $dirs = scandir($directory);    
    foreach ($dirs as $dir) {
        // Ignorar los directorios especiales "." y ".."
        if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
            // Generar el enlace con formato http://localhost/NOMBRE-DIRECTORIO
            $url = "http://localhost/HTML/" . $dir;
            echo "<li><a href=\"$url\">$dir</a></li>";
        }
    }   
} else {
    echo "El directorio no existe o no se puede leer.";
}
?>

</ul>
</div>

<div>
<ul class="uk-background-secondary uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">PHP</li>
<li class="uk-nav-divider"></li>

	<?php
// Directorio a explorar
$directory = "C:/xampp/htdocs/PHP";

// Abrir el directorio
if (is_dir($directory)) {
    // Leer el contenido del directorio
    $dirs = scandir($directory);    
    foreach ($dirs as $dir) {
        // Ignorar los directorios especiales "." y ".."
        if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
            // Generar el enlace con formato http://localhost/NOMBRE-DIRECTORIO
            $url = "http://localhost/PHP/" . $dir;
            echo "<li><a href=\"$url\">$dir</a></li>";
        }
    }   
} else {
    echo "El directorio no existe o no se puede leer.";
}
?>

</ul>
</div>

  

<div>
<ul class="uk-background-secondary uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">codeigniter</li>
<li class="uk-nav-divider"></li>

	<?php
// Directorio a explorar
$directory = "C:/xampp/htdocs/CODEIGNITER";

// Abrir el directorio
if (is_dir($directory)) {
    // Leer el contenido del directorio
    $dirs = scandir($directory);   
    foreach ($dirs as $dir) {
        // Ignorar los directorios especiales "." y ".."
        if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
            // Generar el enlace con formato http://NOMBRE-DIRECTORIO.test
            $url = "http://" . $dir . ".test";
            echo "<li><a href=\"$url\">$dir</a></li>";
        }
    }   
} else {
    echo "El directorio no existe o no se puede leer.";
}
?>					

</ul>
</div>

  <!-- 5 -->   

<div>
<ul class="uk-background-secondary uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">laravel</li>
<li class="uk-nav-divider"></li>

	<?php
// Directorio a explorar
$directory = "C:/xampp/htdocs/LARAVEL";

// Abrir el directorio
if (is_dir($directory)) {
    // Leer el contenido del directorio
    $dirs = scandir($directory);   
    foreach ($dirs as $dir) {
        // Ignorar los directorios especiales "." y ".."
        if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
            // Generar el enlace con formato http://NOMBRE-DIRECTORIO.test
            $url = "http://" . $dir . ".test";
            echo "<li><a href=\"$url\">$dir</a></li>";
        }
    }   
} else {
    echo "El directorio no existe o no se puede leer.";
}
?>										

</ul>
</div>

  <!-- 6 -->   

<div>
<ul class="uk-background-secondary uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">wordpress</li>
<li class="uk-nav-divider"></li>

<?php
// Directorio a explorar
$directory = "C:/xampp/htdocs/WORDPRESS";

// Abrir el directorio
if (is_dir($directory)) {
    // Leer el contenido del directorio
    $dirs = scandir($directory);   
    foreach ($dirs as $dir) {
        // Ignorar los directorios especiales "." y ".."
        if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
            // Generar el enlace con formato http://NOMBRE-DIRECTORIO.test
            $url = "http://" . $dir . ".test";
            echo "<li><a href=\"$url\">$dir</a></li>";
        }
    }   
} else {
    echo "El directorio no existe o no se puede leer.";
}
?>											

</ul>
</div>
								
                                </div>
                            </div>
                        </li>
						
												 <!-- PROJECTES/////////////////////////////////////////////////////////////////// -->
						 <li class="">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 16 16"><g fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="#cad3f5" d="M4.5 4.5H12A1.5 1.5 0 0 1 13.5 6v.5m-7.5 7H2A1.5 1.5 0 0 1 .5 12V3.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1"/><path stroke="#eed49f" d="M8.5 9.5h7v2h-7zm2 0v2m-2 2h7v2h-7zm2 0v2"/></g></svg></a>
                            <div class=" uk-navbar-dropdown uk-navbar-dropdown-width-4">
                                <div class=" uk-drop-grid uk-child-width-1-4" uk-grid>
 

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">HTML</li>
<li class="uk-nav-divider"></li>

	<?php
// Directorio a explorar
$directory = "C:/xampp/htdocs/HTML";

// Abrir el directorio
if (is_dir($directory)) {
    // Leer el contenido del directorio
    $dirs = scandir($directory);    
    foreach ($dirs as $dir) {
        // Ignorar los directorios especiales "." y ".."
        if ($dir !== '.' && $dir !== '..' && is_dir($directory . '/' . $dir)) {
            // Generar el enlace con formato http://localhost/NOMBRE-DIRECTORIO
            $url = "http://localhost/HTML/" . $dir;
            echo "<li><a href=\"$url\">$dir</a></li>";
        }
    }   
} else {
    echo "El directorio no existe o no se puede leer.";
}
?>

</ul>
</div>

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">patro uikit arrel htdocs</li>
<li class="uk-nav-divider"></li>

	<!-- Aquest codi PHP genera una llista no ordenada (<ul>) amb enllaços (<a>) per a tots els fitxers del directori actual que compleixen un patró específic. -->								  
<?php
$directory = __DIR__;
$phpFiles = array_filter(glob($directory . '/../../uikit*.php', ));
foreach ($phpFiles as $file) {
$fileName = basename($file);
echo '<li><a href="/../../' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</a></li>';
}
?>			

</ul>
</div>

 

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">directori arrel localhost</li>
<li class="uk-nav-divider"></li>

	<?php
$directory = __DIR__;
$phpFiles = array_filter(glob($directory . '/../../*.php'), function ($file) {
    $excludedFiles = ['footer.php', 'eliminar_img_noutils.php', 'navbar.php', 'navbar_devdojo.php'];
    return !in_array(basename($file), $excludedFiles);
});

foreach ($phpFiles as $file) {
    $fileName = basename($file);
    echo '<li><a href="/../../' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</a></li>';
}
?>				

</ul>
</div>

  

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">hosts</li>
<li class="uk-nav-divider"></li>
<!-- PROJECTES_TEST HOSTS-->
<?php
$hostsFile = 'C:\Windows\System32\drivers\etc\hosts';
if (file_exists($hostsFile)) {
$lines = file($hostsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$validHosts = [];

foreach ($lines as $line) {
$line = trim($line);

// Procesar líneas válidas de hosts
if (!empty($line) && strpos($line, '#') !== 0) {
$parts = preg_split('/\s+/', $line);
if (isset($parts[1])) {
$validHosts[] = $parts[1]; // Agregar solo el dominio
}
}
}

foreach ($validHosts as $host) {
echo '<li><a href="http://' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '" class="active">' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '</a></li>';
}
} else {
echo '<li><span class="text-gray-500">Archivo hosts no encontrado.</span></li>';
}
?>						

</ul>
</div>
									
								
                                </div>
                            </div>
                        </li>
						
						
  <!-- ARREL/////////////////////////////////////////////////////////////////// -->
						 <li class="">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 32 32"><path fill="#f4571d" d="M27.4 5.5h-9.2l-2.1 4.2H4.3v16.8h25.2v-21Zm0 18.7H6.6V11.8h20.8Zm0-14.5h-8.2l1-2.1h7.1v2.1Z"/><path fill="#f4571d" d="M25.7 13.7H.5l3.8 12.8h25.2z"/><path fill="#f4571d" d="M19.635 31.25h-5.924l9.794-21.5h5.985z"/><path fill="#ffeebe" d="M23.666 10H29.1l-9.625 21H14.1Z"/></svg></a>
                            <div class=" uk-navbar-dropdown uk-navbar-dropdown-width-4">
                                <div class=" uk-drop-grid uk-child-width-1-4" uk-grid>
 

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold"> BOOTSTRAP </li>
<li class="uk-nav-divider"></li>

	<!-- Aquest codi PHP genera una llista no ordenada (<ul>) amb enllaços (<a>) per a tots els fitxers del directori actual que compleixen un patró específic. -->								  
<?php
$directory = __DIR__;
$phpFiles = array_filter(glob($directory . '/../../bootstrap*.php', ));
foreach ($phpFiles as $file) {
$fileName = basename($file);
echo '<li><a href="/../../' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</a></li>';
}
?>			

</ul>
</div>

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">uikit</li>
<li class="uk-nav-divider"></li>

	<!-- Aquest codi PHP genera una llista no ordenada (<ul>) amb enllaços (<a>) per a tots els fitxers del directori actual que compleixen un patró específic. -->								  
<?php
$directory = __DIR__;
$phpFiles = array_filter(glob($directory . '/../../uikit*.php', ));
foreach ($phpFiles as $file) {
$fileName = basename($file);
echo '<li><a href="/../../' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</a></li>';
}
?>			

</ul>
</div>

 

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">tailwind</li>
<li class="uk-nav-divider"></li>

	<!-- Aquest codi PHP genera una llista no ordenada (<ul>) amb enllaços (<a>) per a tots els fitxers del directori actual que compleixen un patró específic. -->								  
<?php
$directory = __DIR__;
$phpFiles = array_filter(glob($directory . '/../../tailwind*.php', ));
foreach ($phpFiles as $file) {
$fileName = basename($file);
echo '<li><a href="/../../' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '">' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</a></li>';
}
?>			

</ul>
</div>

  

<div>
<ul class=" uk-nav uk-navbar-dropdown-nav">
<li class="uk-nav-header uk-text-primary uk-text-bold">hosts</li>
<li class="uk-nav-divider"></li>
<!-- PROJECTES_TEST HOSTS-->
<?php
$hostsFile = 'C:\Windows\System32\drivers\etc\hosts';
if (file_exists($hostsFile)) {
$lines = file($hostsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$validHosts = [];

foreach ($lines as $line) {
$line = trim($line);

// Procesar líneas válidas de hosts
if (!empty($line) && strpos($line, '#') !== 0) {
$parts = preg_split('/\s+/', $line);
if (isset($parts[1])) {
$validHosts[] = $parts[1]; // Agregar solo el dominio
}
}
}

foreach ($validHosts as $host) {
echo '<li><a href="http://' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '" class="active">' . htmlspecialchars($host, ENT_QUOTES, 'UTF-8') . '</a></li>';
}
} else {
echo '<li><span class="text-gray-500">Archivo hosts no encontrado.</span></li>';
}
?>						

</ul>
</div>
									
								
                                </div>
                            </div>
                        </li>
						
                    </ul>

                </div>

                <div class="uk-navbar-right">

                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="#">admin</a>
                            <div class="uk-navbar-dropdown uk-background-secondary">
                                <ul class="uk-nav uk-navbar-dropdown-nav">                                    
                                    <li class="uk-nav-header uk-text-primary uk-text-bold">localhost</li>
                                    
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="http://localhost/phpmyadmin/index.php?route=/">phpmyadmin</a></li>
									 <li><a href="http://administracio.test/admin/posts">projecte administracio laravel</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>

</div>


    <div class="uk-container uk-container-expand ">
	
	
	<section class="uk-section uk-section-secondary">
	
	<!-- jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>
	<link href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
	
	
    <div class="uk-container uk-text-center">
        <h1 class="uk-margin-remove">Nanogallery People</h1>
        <p class="uk-margin-remove uk-visible@s">Explora la galería con millones de seguidores.</p>

        <!-- Contenedor de la galería -->
        <div id="nanogallery2" data-nanogallery2='{
            "kind": "nano_photos_provider2",
            "dataProvider": "nano_photos_provider2.php",
            "ThumbnailHeight": 350,
            "ThumbnailWidth": 350,
            "itemsBaseURL": "nano_photos_content/"
        }'>
        </div>
    </div>
</section>
	
	
    </div>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.25/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.25/dist/js/uikit-icons.min.js"></script>
</body>
</html>

