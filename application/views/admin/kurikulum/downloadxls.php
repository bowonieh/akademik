<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$detil->nama_matpel \"_\" $detil->nama_guru\" _" .date('Ymd'). ".xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border="1">
<thead>
          <tr>
            <th rowspan="3">NO</th>
            <th rowspan="3">NIS</th>
            <th rowspan="3">KELAS</th>
            <th rowspan="3">NAMA LENGKAP</th>
            <th colspan="11">KETERAMPILAN</th>
            <th colspan="10">PENGETAHUAN</th>
            <th colspan="9">SIKAP</th>
            <th rowspan="3">Nilai Keterampilan</th>
            <th rowspan="3">Deskripsi Keterampilan</th>
            <th rowspan="3">Nilai Pengetahuan</th>
            <th rowspan="3">Deskripsi Pengetahuan</th>
            <th rowspan="3">Nilai Sikap</th>
            <th rowspan="3">Deskripsi Sikap</th>
          </tr>
          <tr>
            <th colspan="4">Praktek</th>
            <th colspan="4">Project</th>
            <th colspan="3">Portofolio</th>
            <th colspan="4">Tugas</th>
            <th colspan="4">UH</th>
            <th >UTS</th>
            <th >UAS</th>
            
            <th colspan="2">Observasi</th>
            <th colspan="3">Pdiri</th>
            <th colspan="2">Pteman</th>
            <th colspan="2">Jur</th>
            
            
            
          </tr>
          <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>2</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>1</th>
            <th>2</th>
            <th>1</th>
            <th>2</th>
            
          </tr>
        </thead>
        <tbody>
         
          <?php 
          $no=1;
          if (empty($list)){

          }else{
            foreach($list as $d){
              ?>
              <tr>
              <td id="nis"><?php echo $no++;?></td>
            <td id="nis:<?php echo $d->id_nilai;?>"><?php echo $d->nis;?></td>
            <td id="kelas:<?php echo $d->id_nilai;?>"><?php echo $d->kelas;?></td>
            <td id="nama_siswa:<?php echo $d->id_nilai;?>"><?php echo $d->nama_siswa; ?></td>
            <td id="tp1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp1;?></td>
            <td id="tp2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp2;?></td>
            <td id="tp3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp3;?></td>
            <td id="tp4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->tp4;?></td>
            <td id="p1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p1;?></td>
            <td id="p2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p2;?></td>
            <td id="p3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p3;?></td>
            <td id="p4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->p4;?></td>
            <td id="pr1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->pr1;?></td>
            <td id="pr2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->pr2;?></td>
            <td id="pr3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->pr3;?></td>
            
            <td id="t1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t1;?></td>
            <td id="t2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t2;?></td>
            <td id="t3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t3;?></td>
            <td id="t4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->t4;?></td>
            <td id="uh1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh1;?></td>
            <td id="uh2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh2;?></td>
            <td id="uh3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh3;?></td>
            <td id="uh4:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->uh4;?></td>
            <td id="UTS:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->UTS;?></td>
            <td id="UAS:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->UAS;?></td>
            <td id="observasi1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->observasi1;?></td>
            <td id="observasi2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->observasi2;?></td>
            <td id="penilaian_diri1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_diri1;?></td>
            <td id="penilaian_diri2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_diri2;?></td>
            <td id="penilaian_diri3:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_diri3;?></td>
            <td id="penilaian_teman1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_teman1;?></td>
            <td id="penilaian_teman2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->penilaian_teman2;?></td>
            <td id="jurnal1:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->jurnal1;?></td>
            <td id="jurnal2:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->jurnal2;?></td>
  			<td><?php echo $d->predikat_keterampilan;?></td>
                <td id="keterangan_keterampilan:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->keterangan_keterampilan;?></td>
                <td><?php echo $d->predikat_pengetahuan;?></td>
                <td id="keterangan_pengetahuan:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->keterangan_pengetahuan;?></td>
                <td><?php echo kriteria($d->nilai_raport);?></td>
                <td id="desc_kemajuan_belajar:<?php echo $d->id_nilai;?>" contenteditable="true"><?php echo $d->desc_kemajuan_belajar;?></td>          
            

          </tr>

              <?php
            }
          }
          ?>
        </tbody>

</table>