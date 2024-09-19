<?php
// Koneksi ke database
require_once 'admin/config/connection.php';


// Ambil logo terakhir dari tabel 'logo'
$sql = "SELECT logo_image_path FROM logo ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Inisialisasi variabel $logo_path
$logo_path = 'admin/uploads/placeholder.png'; // Gambar default jika tidak ada logo

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (!empty($row['logo_image_path'])) {
        $logo_path = 'admin/uploads/' . $row['logo_image_path']; // Path logo terakhir
    }
}

$title_query = "SELECT title_name FROM title LIMIT 1";
$title_result = $conn->query($title_query);

$title_name = '';
if ($title_result->num_rows > 0) {
    $title_row = $title_result->fetch_assoc();
    $title_name = $title_row['title_name'];
}

?>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <img src="<?php echo $logo_path; ?>" alt="Logo">
            <h1 class="sitename"><?php echo $title_name; ?></h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="tentang.php">Tentang</a></li>
                <li><a href="portofolio.php">Portfolio</a></li>
                <li><a href="pesan.php">Paket Pemesanan</a></li>
                <li><a href="#team">Team</a></li>
                <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> -->
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="chat_wa.php">WhatsApp</a>

    </div>
</header>