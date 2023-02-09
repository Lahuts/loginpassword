<?PHP
include_once "./includes/pdo.inc.php";
include_once "./includes/header.inc.php";
?>
    <main>
        <?php
        session_start();
        echo "<h2>Bonjour " . $_SESSION['nom']."</h2>";
        ?>
    </main>
    <?php include_once "./includes/footer.inc.php" ?>
</body>
</html>