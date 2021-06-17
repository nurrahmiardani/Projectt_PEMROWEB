<?php 

class Village_model
{
    private $table = 'villages';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add($data, $foto)
    {
        // echo($foto['foto']['error']) == 0;
        // echo getcwd();
        // die();

        if ($foto['foto']['error'] == 0)
        {
            $query = "INSERT INTO villages (nama, provinsi, nama_kepala_desa, kabupaten, jumlah_penduduk, foto)
                        VALUES (
                            :nama, :provinsi, :nama_kepala_desa, :kabupaten, :jumlah_penduduk, :foto
                        )";
        } else {
            $query = "INSERT INTO villages (nama, provinsi, nama_kepala_desa, kabupaten, jumlah_penduduk)
                        VALUES (
                            :nama, :provinsi, :nama_kepala_desa, :kabupaten, :jumlah_penduduk
                        )";
        }

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('nama_kepala_desa', $data['nama_kepala_desa']);
        $this->db->bind('kabupaten', $data['kabupaten']);
        $this->db->bind('jumlah_penduduk', $data['jumlah_penduduk']);
        

        if ($foto['foto']['error'] == 0)
        {
            $this->db->bind('foto', $foto['foto']['name']);

            
            $fileName = $foto['foto']['name'];
            $tempName = $foto['foto']['tmp_name'];

            // tentukan lokasi file akan dipindahkan
            $dirUpload = getcwd() .  "/images/foto-desa/";

            // pindahkan file
            $uploaded = move_uploaded_file($tempName, $dirUpload.$fileName);
        }
        
        $this->db->execute();

        return $this->db->rowCount();
    }

}