<?php
function rumus() {
    $shape = $_POST["shape"];
    $inputDiv = $_POST["input"];
    $outputDiv = $_POST["output"];

    // Hapus isi div input dan output
    $inputDiv = "";
    $outputDiv = "";

    if ($shape === "lingkaran") {
        $inputDiv .= "<label>Jari-jari Lingkaran:</label>";
        $inputDiv .= "<input type='number' id='jari' placeholder='Jari-jari'>";

        $outputDiv .= "<button onclick='hitungLingkaran()'>Hitung</button><br><br>";
        $outputDiv .= "<label>Luas Lingkaran:</label>";
        $outputDiv .= "<span id='luas'></span>";
    } else if ($shape === "persegi") {
        $inputDiv .= "<label>Sisi Persegi:</label>";
        $inputDiv .= "<input type='number' id='sisi' placeholder='Sisi'>";

        $outputDiv .= "<button onclick='hitungPersegi()'>Hitung</button><br><br>";
        $outputDiv .= "<label>Luas Persegi:</label>";
        $outputDiv .= "<span id='luas'></span>";
    } else if ($shape === "segitiga") {
        $inputDiv .= "<label>Alas Segitiga:</label>";
        $inputDiv .= "<input type='number' id='alas' placeholder='Alas'>";
        $inputDiv .= "<br><label>Tinggi Segitiga:</label>";
        $inputDiv .= "<input type='number' id='tinggi' placeholder='Tinggi'>";

        $outputDiv .= "<button onclick='hitungSegitiga()'>Hitung</button><br><br>";
        $outputDiv .= "<label>luas Segitiga:</label>";
        $outputDiv .= "<span id='luas'></span>";
    }
}

function hitungLingkaran() {
    $jari = $_POST["jari"];
    $luas = M_PI * pow($jari, 2);
    echo "<script>document.getElementById('luas').textContent = $luas;</script>";
}

function hitungPersegi() {
    $sisi = $_POST["sisi"];
    $luas = pow($sisi, 2);
    echo "<script>document.getElementById('luas').textContent = $luas;</script>";
}

function hitungSegitiga() {
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];
    $luas = ($alas * $tinggi) / 2;
    echo "<script>document.getElementById('luas').textContent = $luas;</script>";
}
