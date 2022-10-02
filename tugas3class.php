<?php
class  Pegawai{
    //member1 variabel
    protected $nopegawai;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    //variabel konstanta & static di dlm class
    static $jml = 0;
    const DATA = 'Data Gaji Pegawai';
    
    //member2 konstruktor
    public function __construct($nip, $namapegawai, $jabatan,$agama,$status){
        $this->nopegawai = $nip;
        $this->nama = $namapegawai;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;    
        self::$jml++;
    }
    //member3 method2
    private function gapok($jabatan){
        $this-> jabatan = $jabatan;
        switch ($jabatan) {
            case "manager":
                $gaji= 15000000;
                break;
            case "asisten manager":
                $gaji= 10000000;
                break;
            case "supervisor":
                $gaji= 70000000;
                break;
            case "staff":
                $gaji = 4000000;
                break;

        }
    }
    public function tunjab($tunjab){
        $this-> tunjab = $tunjab;
        $tunjab = 20 / 100 * $gp;
    }
    public function tunkel($status){
        $this-> status = $status;
        $this.$status = ($status == 'menikah') ? "menikah" : "belum menikah";
    }
    public function zaprof($agama){
        $this-> agama  = $agama ;
        if ( agama == "muslim" && $gk >= 6000000) {
            $this.$zaprof = 2.5 / 100 * $gk;
        }
        else {
            $this.$zaprof = 0;
        }

    }
    public function gajibersih($gajibersih){
        $this->gajibersih = 20 / 100 * $gapok;
    }
    public function mencetak(){
        echo '<b><u>'.self::DATA.'</u></b>'; 
        echo '<br/>No. Pegawai: '.$this->nopegawai;
        echo '<br/>Nama Pegawai: '.$this->nama;
        echo '<br/>Jabatan: '.$this->jabatan;
        echo '<br/>Agama: '.$this->agama;
        echo '<br/>Status: '.$this->status;
        echo '<br/>Gaji Pokok: '.$this->gapok($this->jabatan);
        echo '<br/>Tunjangan Jabatan: '.$this->gapok($this->jabatan);
        echo '<br/>Tunjangan Keluarga: '.$this->gapok($this->jabatan);
        echo '<br/>Zakat Profesi: '.$this->gapok($this->jabatan);
        echo '<br/>Gaji : '.$this->gapok($this->jabatan);
        // echo '<br/>Gaji Pokok: Rp. '.number_format($this->gapok, 0, ',', '.');
        // echo '<br/>Tunjangan Jabatan: Rp. '.number_format($this->$tunjab, 0, ',', '.');
        // echo '<br/>Tunjangan Keluarga: Rp. '.number_format($this->$tunkel, 0, ',', '.');
        // echo '<br/>Zakat Profesi: Rp. '.number_format($this->$zaprof, 0, ',', '.');
        // echo '<br/>Gaji Bersih: Rp. '.number_format($this->$gajibersih, 0, ',', '.');
        echo '<hr/>';
    }
}
