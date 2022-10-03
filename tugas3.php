*abstrak*
<?php
  abstract class Member{
      abstract protected function luasbidang();
      abstract protected function kelilingbidang();
  }  
?>

*Lingkaran*
<?php
require_once 'member2d_class.php';
class lingkaran extends Member{
    public function luasbidang(){
        $this-> luas =  $phi * $jari2   ;
        return $luas;
    }
    public function kelilingbidang(){
        $this-> keliling = 2 * $phi * $jari2   ;
        return $kelilig;
    }
}

*Persegipanjang*
  <?php
require_once 'member2d_class.php';
class persegipanjang extends Member{
    public function luasbidang(){
        $this-> luas = $panjang  * $lebar ;
        return $luas;
    }
    public function kelilinbidang(){
        $this-> keliling = 2 * ($panjang + $lebar)  ;
        return $keliling;
    }

}
 *Segitiga*
   <?php
require_once 'member2d_class.php';
class segitiga extends Member{
    public function luasbidang(){
        $this-> luas = 1/2 * $alas  * $tinggi ;
        return $luas;
    }
    public function kelilingbidang(){
        $this-> keliling = 2 * ($panjang + $lebar)  ;
        return $keliling;
    }
    
}

*<?php
require_once 'lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$ling = new lingkaran();
$pp = new persegipanjang();
$sg= new segitiga();

$cetakbidang = [$ling, $pp, $sg];

foreach($cetakbidang as $cetak){
    echo '<br/>'.$cetak->hitung();
}*
