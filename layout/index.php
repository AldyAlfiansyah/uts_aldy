<head>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>

<body>

    <main>
    	<header>
            <img src="layout/assets/images/musiik.jpg" alt="[IMG]" class="gambar">
        </header>

        <nav>
            <ul>
                <li>
                    <a href="index.php" class="active">Home</a>
                </li>
                <li>
                    <a href="index.php?page=login_form">Login</a>
                </li>
            </ul>
        </nav>
    
        <section>
            <?php
                if (isset($_GET['page'])){
                    include $_GET['page'] . ".php";
                } else {
                    include "main_index.php";
                }
            ?>
        </section>

    	<footer>
            Copyright &copy; 2021 Aldy Alfiansyah
        </footer>
    </main>

</body>