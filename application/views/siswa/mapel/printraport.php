<?php if (empty($isi)){
    ?>

<div class="alert">Tidak ada Data</div>

<?php
    }else{
    ?>

<div>

    <div class="rightalign">
        <a href="<?php echo base_url();?>index.php/raport/download/<?php echo $dtl->id_tahun;?>"><button class="btn btn-primary"><i class="icon-white icon-pdf"></i> Download PDF</button></a> <button class="btn btn-danger"><i class="icon-white icon-print"></i> Print</button> 
    </div>

    <hr>
    <div class="form-horizontal">
    <div class="control-group">
        <label class="control-label">Nama Siswa</label>
        <div class="controls">
                  <?php echo $dtl->nama_siswa;?>
                   
               </div>
    </div>
    <div class="control-group">
        <label class="control-label">Kelas</label>
        <div class="controls">
                  <?php echo $dtl->kelas;?>
                   
               </div>
    </div>
        </div>
    <hr>
    <table class="table table-bordered table-condensed table-hover table-striped bootstrap-datatable datatable">
        <thead>
        
            <tr>
                <td rowspan="2">NO</td>
                <td rowspan="2">Mata Pelajaran</td>
                <td colspan="2">Keterampilan</td>
                <td colspan="2">Pengetahuan</td>
                <td colspan="2">Sikap</td>
                <td rowspan="2">UTS</td>
                <td rowspan="2">UAS</td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>Predikat</td>
                <td>Nilai</td>
                <td>Predikat</td>
                <td>Nilai</td>
                <td>Predikat</td>
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
                    </p>
                    (<?php echo $d->nama_guru;?>)
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
</div>

<?php
}
?>