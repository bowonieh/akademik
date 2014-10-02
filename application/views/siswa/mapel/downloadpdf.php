<style>
    h3{
        margin:2px;
    }
    h5{
        margin:2px;
    }
    #kanan {
        
        text-align:left;
        padding:50px 100px 100px 400px;
        
    }
    .kanan-tanggal{
        
        margin-top: 0px;
        
    }
    .kanan-walas{
        margin-top:50px;
    }
    /*table */
.nilai {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

.nilai td, .nilai th {
    font-size: 0.5em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}

.nilai th {
    font-size: 0.9em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

.nilai tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}

.nilai th.deskripsi {
    width: 40%;
}

.nilai th.listNo {
    width: 5%;
}
.nilai th.mapel {
    width: 30%;
}
</style>
<h3>Laporan Nilai Siswa Tahun Pelajaran <?php echo $dtl->tahun;?></h3>
<h3>SMK Negeri 1 Kota Bekasi</h3>
<h5>Jl. Bintara VIII No 2 Kelurahan Bintara, Kecamatan Bekasi Barat</h5>
<h5>Telp. (021) 88951151 Email: info@smkn1kotabekasi.sch.id</h5>
<hr>

    <table width="100%" border="0">
        <tr>
            
            <td>Nama Sekolah</td>
            <td>:</td>
            <td colspan="2">SMK Negeri 1 Kota Bekasi</td>
            <td>Kelas</td>
            <td>:</td>
            <td ><?php echo $dtl->kelas;?></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td colspan="2"><?php echo $dtl->nis;?></td>
            <td>Tahun Pelajaran / Semester</td>
            <td>:</td>
            <td><?php echo $dtl->tahun;?></td>
        </tr>
        <tr>
            
            <td>NAMA LENGKAP</td>
            <td>:</td>
            <td colspan="2"><?php echo $dtl->nama_siswa;?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</p>

<div >
    <br>
    <table class="nilai">
        <thead>
        
            <tr>
                <th rowspan="2" class="listNo">NO</th>
                <th rowspan="2" class="mapel">Mata Pelajaran</th>
                <th colspan="2">Keterampilan</th>
                <th colspan="2">Pengetahuan</th>
                <th colspan="2">Sikap</th>
                <th rowspan="2">UTS</th>
                <th rowspan="2">UAS</th>
            </tr>
            <tr>
                <th>N</th>
                <th>Prd</th>
                <th>N</th>
                <th>Prd</th>
                <th>N</th>
                <th>Prd</th>
            </tr>
        
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($isi as $d){
                
                ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d->nama_matpel;?>
                    <p>
                    (<?php echo $d->nama_guru;?>)
                    </p>
                </td>
                <td><?php echo $d->nilai4_keterampilan;?></td>
                <td><?php echo $d->predikat_keterampilan;?></td>
                <td><?php echo $d->skala4_pengetahuan;?></td>
                <td><?php echo $d->predikat_pengetahuan;?></td>
                <td><?php echo $d->skala4_sikap;?></td>
                <td><?php echo $d->predikat_sikap;?></td>
                <td><?php echo $d->UTS;?></td>
                <td><?php echo $d->UAS;?></td>
            </tr>
            
            <?php
                
            }?>
        </tbody>
    </table>
    
    <p></p>
    <p></p>
    <div>
        <h3>DESKRIPSI</h3>
        <table class="nilai">
        <thead>
        
            <tr>
                <th class="listNo"> NO</th>
                <th class="mapel">Mata Pelajaran</th>
                <th >Kompetensi</th>
                <th class="deskripsi">Catatan</th>
                
            </tr>
            
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($isi as $d){
                
                ?>
            <tr>
                <td rowspan="3"><?php echo $no++;?></td>
                <td rowspan="3"><?php echo $d->nama_matpel;?>
                    <p>( <?php echo $d->nama_guru ;?> )</p>
                
                
                </td>
                <td colspan="1">Pengetahuan</td>
                <td colspan="1"><?php echo $d->keterangan_pengetahuan;?></td>
                
                
            </tr>
            <tr>
                <td>Keterampilan</td>
                <td><?php echo $d->keterangan_keterampilan;?></td>
                
            </tr>
            <tr>
                <td>Sosial dan spiritual</td>
                <td><?php echo $d->desc_kemajuan_belajar;?></td>
                
            </tr>
            
            <?php
                
            }?>
        </tbody>
    </table>
    
    </div>
    <p></p>
    <div id="kanan">
        <div class="kanan-tanggal">
            Bekasi , <?php echo date('d-M-Y');?>
            <br>
        Wali Kelas,
        </div>
        <div class="kanan-walas">
           <?php 
            if (empty($walas->nama_guru)){
                ?>
                (_____________________)

                <?php 
        }else{
            ?>
            <?php
             echo $walas->nama_guru;
        }
            ?>
        </div>
    </div>
    </div>
