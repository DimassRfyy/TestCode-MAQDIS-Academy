<?php

echo "Masukkan nama: ";
$nama = trim(fgets(STDIN));

echo "Masukkan peran (Penyihir, Guard, Werewolf): ";
$peran = trim(fgets(STDIN));

if ($nama == "") {
    echo "Nama harus diisi!\n";
} elseif ($peran == "") {
    echo "Halo $nama, Pilih peranmu untuk memulai game!\n";
} else {
    echo "Selamat datang di Dunia Werewolf, $nama\n";
    switch (strtolower($peran)) {
        case "penyihir":
            echo "Halo Penyihir $nama, kamu dapat melihat siapa yang menjadi werewolf!\n";
            break;
        case "guard":
            echo "Halo Guard $nama, kamu akan membantu melindungi temanmu dari serangan werewolf.\n";
            break;
        case "werewolf":
            echo "Halo Werewolf $nama, Kamu akan memakan mangsa setiap malam!\n";
            break;
        default:
            echo "Peran tidak dikenali. Pilih antara Penyihir, Guard, atau Werewolf.\n";
            break;
    }
}