        <?php

            $koneksi = mysqli_connect("localhost","root","","db_absensi");

            $id = $_POST['id'];
            $no=1;
            $data=mysqli_query($koneksi, "SELECT * FROM pegawai WHERE kode_scan='$id'");

                if($data->num_rows === 0)
                {
                    $my_array = array("nama_pegawai" => '', "jabatan" => '', "id_pegawai" => '');
                    $json_string = json_encode($my_array);
                    echo $json_string;
                }
                else
                {
                    while ($d=mysqli_fetch_array($data)) {
                        $nama= $d['nama_pegawai'];
                        $id_pegawai= $d['id_pegawai'];
                        $jabatan= $d['jabatan'];
                    }
                    
                    $my_array = array("nama_pegawai" => $nama, "jabatan" => $jabatan, "id_pegawai" => $id_pegawai);
                    $json_string = json_encode($my_array);
                    echo $json_string;
                }

           
          

        ?>
