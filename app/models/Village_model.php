<?php 

class Village_model
{
    private $table = 'villages';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function add($data, $foto)
    {
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

    public function getById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function delete($id)
    {
        $fileName = $this->getById($id)['foto'];

        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        unlink(getcwd() . "/images/foto-desa/" . $fileName);

        return $this->db->rowCount();
    }

    public function update($data, $foto)
    {
        
        if ($foto['foto']['error'] == 0)
        {
            $query = "UPDATE $this->table SET
                                nama = :nama,
                                provinsi = :provinsi,
                                nama_kepala_desa = :nama_kepala_desa,
                                kabupaten = :kabupaten,
                                jumlah_penduduk = :jumlah_penduduk
                                where id = :id
                        ";
        } else {
            $query = "UPDATE $this->table SET
                                nama = :nama,
                                provinsi = :provinsi,
                                nama_kepala_desa = :nama_kepala_desa,
                                kabupaten = :kabupaten,
                                jumlah_penduduk = :jumlah_penduduk
                                where id = :id
                        ";
        }

        $this->db->query($query);
             

        if ($foto['foto']['error'] == 4)
        {
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('provinsi', $data['provinsi']);
            $this->db->bind('nama_kepala_desa', $data['nama_kepala_desa']);
            $this->db->bind('kabupaten', $data['kabupaten']);
            $this->db->bind('jumlah_penduduk', $data['jumlah_penduduk']);
            $this->db->bind('id', $data['id']);    
        
            $this->db->execute();

            return $this->db->rowCount();
        } else {
            $id = (int)$data['id'];
            $previousFileName = $this->getById($id)['foto'];
                     
            
            
            $fileName = $foto['foto']['name'];
            $tempName = $foto['foto']['tmp_name'];
        
            
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('provinsi', $data['provinsi']);
            $this->db->bind('nama_kepala_desa', $data['nama_kepala_desa']);
            $this->db->bind('kabupaten', $data['kabupaten']);
            $this->db->bind('jumlah_penduduk', $data['jumlah_penduduk']);
            $this->db->bind('id', $data['id']);    

            $this->db->execute();
            // tentukan lokasi file akan dipindahkan
            $dirUpload = getcwd() .  "/images/foto-desa/";
            
            // pindahkan file
            $uploaded = move_uploaded_file($tempName, $dirUpload.$fileName);

            // unlink(getcwd() . "/images/foto-desa/" . $previousFileName);
            
            return $this->db->rowCount();

        }

        
    }

    public function getByTitle($keyword)
    {
        
        $query = "SELECT * FROM $this->table WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}