<?php
session_start();
require_once '_db_file.php'; 

function renderAdminButton($user) {
    if (isset($user['username']) && $user['username'] === 'admin') {
        echo '<a href="users.php" class="user-btn admin-btn">Seznam uživatelů</a>';
    }
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jóga - Cesta k harmonii</title>
    <link rel="stylesheet" href="styles/JS.css">
    <link rel="icon" type="image/png" href="styles/logo.jpg">
</head>
<body>
    
    <header class="main-header">
        <nav class="main-nav">
            <ul class="nav-menu">
                <li><a href="homepage.php">Domů</a></li>
                <li><a href="images.php">Fotogalerie</a></li>
                <li><a href="articles.php">Články</a></li>
            </ul>
        </nav>

        <?php if (!isset($_SESSION['user'])): ?>
            <div class="user-area">
                <a href="https://zwa.toad.cz/~hitzgvit/CVUT/ZWA/log_in.php" class="login-btn">Přihlásit se</a>
                <a href="https://zwa.toad.cz/~hitzgvit/CVUT/ZWA/sign_up.php" class="signup-btn">Registrace</a>
            </div>
        <?php else: ?>
            <div class="user-area">
                <span class="user-welcome-text">Ahoj, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</span>
                <?php renderAdminButton($_SESSION['user']); ?>
                <a href="logout.php" class="login-btn">Odhlásit</a>
            </div>
        <?php endif; ?>
    </header>

    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h2>Objevte rovnováhu těla a mysli</h2>
                <p>Jóga není jen cvičení. Je to cesta k vnitřnímu klidu, zdraví a sebepoznání.</p>
                </div>
        </section>

        <section class="info-section">
            <div class="info-item">
                <h3>Fyzická síla</h3>
                <p>Pravidelná praxe posiluje svalstvo, zlepšuje držení těla a zvyšuje flexibilitu páteře i kloubů.</p>
            </div>
            <div class="info-item">
                <h3>Psychická pohoda</h3>
                <p>Dechové techniky a meditace pomáhají snižovat hladinu stresu, úzkosti a zlepšují kvalitu spánku.</p>
            </div>
            <div class="info-item">
                <h3>Energie a vitalita</h3>
                <p>Jóga odblokovává energetické dráhy v těle, což vede k pocitu svěžesti a nové životní síly.</p>
            </div>
        </section>

        <section class="content-block white-bg">
            <div class="content-wrapper">
                <h3>Co je to Jóga?</h3>
                <p>
                    Slovo "jóga" pochází ze sanskrtu a znamená "spojení" – spojení těla, mysli a ducha. 
                    Není to náboženství, ale starověká věda o životě, která vznikla v Indii před tisíci lety.
                    Zahrnuje fyzické pozice (ásany), ovládání dechu (pránájámu) a meditaci.
                </p>
                <p>
                    V dnešní uspěchané době nám jóga nabízí útočiště. Učí nás zpomalit, vnímat přítomný okamžik
                    a naslouchat vlastnímu tělu. Nezáleží na tom, zda jste flexibilní nebo silní. 
                    Jóga je pro každého, kdo chce na sobě pracovat.
                </p>
            </div>
        </section>

        <section class="content-block styles-section">
            <h3>Základní styly jógy</h3>
            <div class="styles-grid">
                <div class="style-card">
                    <h4>Hatha Jóga</h4>
                    <p>Klasický, pomalejší styl zaměřený na správné provedení pozic a dýchání. Ideální pro začátečníky.</p>
                </div>
                <div class="style-card">
                    <h4>Vinyasa Flow</h4>
                    <p>Dynamické cvičení, kde je pohyb plynule synchronizován s dechem. Buduje teplo a kondici.</p>
                </div>
                <div class="style-card">
                    <h4>Yin Jóga</h4>
                    <p>Pasivní a relaxační styl. V pozicích se setrvává 3-5 minut pro protažení pojivových tkání.</p>
                </div>
                <div class="style-card">
                    <h4>Ashtanga</h4>
                    <p>Fyzicky náročný, přesně daný sled pozic, který buduje disciplínu a vnitřní oheň.</p>
                </div>
            </div>
        </section>

    </main>

    <footer class="main-footer">
        <p>&copy; 2025 Jóga Portál. Všechna práva vyhrazena. | Ochrana osobních údajů | Kontakty</p>
    </footer>

</body>
</html>
