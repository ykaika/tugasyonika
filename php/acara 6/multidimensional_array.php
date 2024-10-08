<?php
// Membuat array multidimensi $marks yang menyimpan nilai siswa di beberapa mata pelajaran
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39
    ),
    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29
    ),
    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39
    )
);

// Mengakses dan menampilkan nilai dari array multidimensi
echo "Marks for mohammad in physics: " . $marks['mohammad']['physics'] . "<br />"; // Menampilkan nilai fisika Mohammad
echo "Marks for qadir in maths: " . $marks['qadir']['maths'] . "<br />"; // Menampilkan nilai matematika Qadir
echo "Marks for zara in chemistry: " . $marks['zara']['chemistry'] . "<br />"; // Menampilkan nilai kimia Zara
?>