<!-- ALVIN NOOR HIDAYAH
     21091397016
    B/ DIV MANAJEMEN INFORMATIKA -->

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="016_ALVIN NH_praktikum4_no1.css"> 
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal No.1</h2>
<?php
    class Orang {
        protected $nama,$umur;
        public function __construct($nama,$umur){
        $this->nama = $nama;
        $this->umur = $umur;
        }
    }

    class Dosen extends Orang   {
        private $nip;
        public function __construct($nama, $umur, $nip) {
            $this->nip = $nip;
            parent::__construct($nama, $umur);    
        }

        public function hasil() {
            return $this->nama . ' , umur ' . $this->umur. ' , NIP ' . $this->nip;
        }
    }

    $dosen1 = new Dosen('Salamun', 30, 21334312); 
    $dosen2 = new Dosen('Asmunin RA', 35, 212211567);
    $dosen3 = new Dosen(' Dodik Dermawan', 42, 213344321);

    echo $dosen1->hasil();
        echo '<br> <br>';
    echo $dosen2->hasil();
        echo '<br> <br>';
    echo $dosen3->hasil();
        echo '<br> <br>';
?>
</div>
</body>
</html>