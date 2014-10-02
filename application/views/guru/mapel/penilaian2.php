<head>
<link href="<?php echo base_url();?>style/css/bootstrap-cerulean1.css" rel="stylesheet">
<link rel="stylesheet" media="screen" href="<?php echo base_url();?>style/guru/css/widescreen.css" type="text/css">
<link rel="stylesheet" media="screen and (max-width: 900px)" href="<?php echo base_url();?>style/guru/css/mobile.css" type="text/css">
<!-- jQuery -->
<link href="<?php echo base_url();?>style/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url();?>style/css/charisma-app.css" rel="stylesheet">
  <link href="<?php echo base_url();?>style/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
  <link href='<?php echo base_url();?>style/css/fullcalendar.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
  <link href='<?php echo base_url();?>style/css/chosen.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/uniform.default.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/colorbox.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/jquery.cleditor.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/jquery.noty.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/noty_theme_default.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/elfinder.min.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/elfinder.theme.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/jquery.iphone.toggle.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/opa-icons.css' rel='stylesheet'>
  <link href='<?php echo base_url();?>style/css/uploadify.css' rel='stylesheet'>
  <script src="<?php echo base_url();?>style/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
               
               $("#PenilaianAksi").click(function(event){
                   
                   var href         = $(this).attr("href");
                   var btn          = this;
                   var form_data    = {
                      id_nilai                  :   $("#id_nilai").val(),
                      tp1                       :   $("#tp1").val(),
                      tp2                       :   $("#tp2").val(),
                      tp3                       :   $("#tp3").val(),
                      tp4                       :   $("#tp4").val(),
                      p1                        :   $("#p1").val(),
                      p2                        :   $("#p2").val(),
                      p3                        :   $("#p3").val(),
                      p4                        :   $("#p4").val(),
                      pr1                       :   $("#pr1").val(),
                      pr2                       :   $("#pr2").val(),
                      pr3                       :   $("#pr3").val(),
                      keterangan_keterampilan   :   $("#keterangan_keterampilan").val(),
                      uh1                       :   $("#uh1").val(),
                      uh2                       :   $("#uh2").val(),
                      uh3                       :   $("#uh3").val(),
                      uh4                       :   $("#uh4").val(),
                      t1                        :   $("#t1").val(),
                      t2                        :   $("#t2").val(),
                      t3                        :   $("#t3").val(),
                      t4                        :   $("#t4").val(),
                      UTS                       :   $("#UTS").val(),
                      UAS                       :   $("#UAS").val(),
                      keterangan_pengetahuan    :   $("#keterangan_pengetahuan").val(),
                      observasi1                :   $("#observasi1").val(),
                      observasi2                :   $("#observasi2").val(),
                      penilaian_diri1           :   $("#penilaian_diri1").val(),
                      penilaian_diri2           :   $("#penilaian_diri2").val(),
                      penilaian_diri3           :   $("#penilaian_diri3").val(),
                      penilaian_teman1          :   $("#penilaian_teman1").val(),
                      penilaian_teman2          :   $("#penilaian_teman2").val(),
                      jurnal1                   :   $("#jurnal1").val(),
                      jurnal2                   :   $("#jurnal2").val(),
                      desc_kemajuan_belajar     :   $("#desc_kemajuan_belajar").val(),
                      ajax                      :   '1'
                      
                   };
                   $.ajax({
                        type    : "POST",
                        url     : href,
                        async   : false,
                        cache   : false,
                        data    : form_data,
                        success : function(response){
                            if(response=== "Success"){
                                //Jika Berhasil
                               $(btn).fadeOut('500');
                               //$('#tabelPendidikan').fadeOut('500');
                               $('.alert').html("Berhasil Memperbarui nilai");
                               $('.alert').show(); 
                                $('.alert').delay(4500).fadeOut('slow');
                               $(btn).delay(5000).fadeIn('slow');
                            }else{
                                //Jika Gagal
                                
                                
                            }
                        }
                   });
                    event.preventDefault();
               });
               
            });
            
        </script>
</head>


<body>

<div class="row">
       <div class="form-horizontal">
           <fieldset>
           
       <div class="control-group">
           <label class="control-label" for="file"> <strong>NAMA</strong> </label>
           <div class="controls">
           
                
           </div>
                
       </div>
           
       
                
       </div>
            <legend>Nilai Keterampilan</legend>
            <div class="span3">
       <div class="control-group">
           <label class="control-label" for="file"> <strong>Tugas Praktek 1</strong> </label>
           <div class="controls">
               <?php echo form_input('tp1',$isi->tp1,'id="tp1" class="input-nilai"');?>
               <?php echo form_hidden('id_nilai', $isi->id_nilai, 'id_nilai');?>
           </div>
                
       </div>  
                
          <div class="control-group">
           <label class="control-label" for="file"> <strong>Tugas Praktek 2</strong> </label>
           <div class="controls">
               <?php echo form_input('tp2',$isi->tp2,'id="tp2" class="input-nilai"');?>
           </div>
                
       </div> 
            </div>
            
            <div class="span3">
            
       <div class="control-group">
           <label class="control-label" for="file"> <strong>Tugas Praktek 3</strong> </label>
           <div class="controls">
               <?php echo form_input('tp3',$isi->tp3,'id="tp3" class="input-nilai"');?>
           </div>
                
       </div> 
     
        <div class="control-group">
           <label class="control-label" for="file"> <strong>Tugas Praktek 4</strong> </label>
           <div class="controls">
               <?php echo form_input('tp4',$isi->tp4,'id="tp4" class="input-nilai"');?>
           </div>
                
       </div> 
            </div>
            <legend></legend>
            <div class="span3">
            
       <div class="control-group">
           <label class="control-label" for="file"> <strong>Project 1</strong> </label>
           <div class="controls">
               <?php echo form_input('p1',$isi->p1,'id="p1" class="input-nilai"');?>
           </div>
                
       </div> 
     
        <div class="control-group">
           <label class="control-label" for="file"> <strong>Project 2</strong> </label>
           <div class="controls">
               <?php echo form_input('p2',$isi->p2,'id="p2" class="input-nilai"');?>
           </div>
                
       </div> 
            </div>
            
            <div class="span3">
            
       <div class="control-group">
           <label class="control-label" for="file"> <strong>Project 3</strong> </label>
           <div class="controls">
               <?php echo form_input('p3',$isi->p3,'id="p3" class="input-nilai"');?>
           </div>
                
       </div> 
     
        <div class="control-group">
           <label class="control-label" for="file"> <strong>Project 4</strong> </label>
           <div class="controls">
               <?php echo form_input('p4',$isi->p4,'id="p4" class="input-nilai"');?>
           </div>
                
       </div> 
            </div>
            
            <legend></legend>
             <div class="span3">
                 
            
       <div class="control-group">
           <label class="control-label" for="file"> <strong>Portofolio 1</strong> </label>
           <div class="controls">
               <?php echo form_input('pr1',$isi->pr1,'id="pr1" class="input-nilai"');?>
           </div>
                
       </div> 
     
        <div class="control-group">
           <label class="control-label" for="file"> <strong>Portofolio 2</strong> </label>
           <div class="controls">
               <?php echo form_input('pr2',$isi->pr2,'id="pr2" class="input-nilai"');?>
           </div>
                
       </div> 
            </div>
            
            <div class="span3">
            
       <div class="control-group">
           <label class="control-label" for="file"> <strong>Portofolio 3</strong> </label>
           <div class="controls">
               <?php echo form_input('pr3',$isi->pr3,'id="pr3" class="input-nilai"');?>
           </div>
                
       </div> 
     
        
            </div>
            <legend></legend>
            <div class="span8">
                <div class="control-group">
                    <label class="control-label"><strong>Catatan Keterampilan</strong></label>
                    <div class="controls">
                        <?php echo form_textarea('keterangan_keterampilan', $isi->keterangan_keterampilan, 'id="keterangan_keterampilan" class="cleditor"');?>
                    </div>
                </div>
            </div>
            
             <legend>Nilai Pengetahuan</legend>
             <div class="span3">
                 <div class="control-group">
           <label class="control-label" for="uh1"> <strong>Ulangan Harian 1</strong> </label>
           <div class="controls">
               <?php echo form_input('uh1',$isi->uh1,'id="uh1" class="input-nilai"');?>
           </div>
                
       </div>  
                
          <div class="control-group">
           <label class="control-label" for="uh2"> <strong>Ulangan Harian 2</strong> </label>
           <div class="controls">
               <?php echo form_input('uh2',$isi->uh2,'id="uh2" class="input-nilai"');?>
           </div>
             </div>
             </div>
             
             <div class="span3">
                 <div class="control-group">
           <label class="control-label" for="uh1"> <strong>Ulangan Harian 3</strong> </label>
           <div class="controls">
               <?php echo form_input('uh3',$isi->uh3,'id="uh3" class="input-nilai"');?>
           </div>
                
       </div>  
                
          <div class="control-group">
           <label class="control-label" for="uh4"> <strong>Ulangan Harian 4</strong> </label>
           <div class="controls">
               <?php echo form_input('uh4',$isi->uh4,'id="uh4" class="input-nilai"');?>
           </div>
             </div>
             </div>
             <legend></legend>
             <div class="span3">
                 <div class="control-group">
                    <label class="control-label" for="t1"> <strong>Tugas 1</strong> </label>
                    <div class="controls">
                        <?php echo form_input('t1',$isi->t1,'id="t1" class="input-nilai"');?>
                    </div>
                
                 </div>  
                
                <div class="control-group">
                <label class="control-label" for="t2"> <strong>Tugas 2</strong> </label>
                    <div class="controls">
                        <?php echo form_input('t2',$isi->t2,'id="t2" class="input-nilai"');?>
                    </div>
                </div>
                 
                 <div class="control-group">
                <label class="control-label" for="UTS"> <strong>UTS</strong> </label>
                    <div class="controls">
                        <?php echo form_input('UTS',$isi->UTS,'id="UTS" class="input-nilai"');?>
                    </div>
                </div>
             </div>
             <div class="span3">
                 <div class="control-group">
                    <label class="control-label" for="t3"> <strong>Tugas 3</strong> </label>
                    <div class="controls">
                        <?php echo form_input('t3',$isi->t3,'id="t3" class="input-nilai"');?>
                    </div>
                
                 </div>  
                
                <div class="control-group">
                <label class="control-label" for="t4"> <strong>Tugas 4</strong> </label>
                    <div class="controls">
                        <?php echo form_input('t4',$isi->t4,'id="t4" class="input-nilai"');?>
                    </div>
                </div>
                 <div class="control-group">
                <label class="control-label" for="UAS"> <strong>UAS</strong> </label>
                    <div class="controls">
                        <?php echo form_input('UAS',$isi->UAS,'id="UAS" class="input-nilai"');?>
                    </div>
                </div>
             </div>
             <legend></legend>
            <div class="span8">
                <div class="control-group">
                    <label class="control-label"><strong>Catatan Nilai Pengetahuan</strong></label>
                    <div class="controls">
                        <?php echo form_textarea('keterangan_pengetahuan', $isi->keterangan_pengetahuan, 'id="keterangan_pengetahuan" class="cleditor"');?>
                    </div>
                </div>
            </div>
             <legend>Nilai Sikap</legend>
             <div class="span3">
                 <div class="control-group">
                     <label class="control-label"><strong>Observasi 1</strong></label>
                     <div class="controls">
                         <?php echo form_input('observasi1',$isi->observasi1,'id="observasi1" class="input-nilai"');?>
                     </div>
                 </div>
                 
                 <div class="control-group">
                     <label class="control-label"><strong>Penilaian Diri 1</strong></label>
                     <div class="controls">
                         <?php echo form_input('penilaian_diri1',$isi->penilaian_diri1,'id="penilaian_diri1" class="input-nilai"');?>
                     </div>
                 </div>
                 <div class="control-group">
                     <label class="control-label"><strong>Penilaian Diri 2</strong></label>
                     <div class="controls">
                         <?php echo form_input('penilaian_diri2',$isi->penilaian_diri2,'id="penilaian_diri2" class="input-nilai"');?>
                     </div>
                 </div>
             </div>
             
             <div class="span3">
                 <div class="control-group">
                     <label class="control-label"><strong>Observasi 2</strong></label>
                     <div class="controls">
                         <?php echo form_input('observasi2',$isi->observasi2,'id="observasi2" class="input-nilai"');?>
                     </div>
                 </div>
                 
                 <div class="control-group">
                     <label class="control-label"><strong>Penilaian Diri 3</strong></label>
                     <div class="controls">
                         <?php echo form_input('penilaian_diri3',$isi->penilaian_diri3,'id="penilaian_diri3" class="input-nilai"');?>
                     </div>
                 </div>
                 
             
             </div>
             <legend></legend>
             <div class="span3">
                 <div class="control-group">
                     <label class="control-label"><strong>Penilaian Teman 1</strong></label>
                     <div class="controls">
                         <?php echo form_input('penilaian_teman1',$isi->penilaian_teman1,'id="penilaian_teman1" class="input-nilai"');?>
                     </div>
                 </div>
                 
                 <div class="control-group">
                     <label class="control-label"><strong>Penilaian Teman 2</strong></label>
                     <div class="controls">
                         <?php echo form_input('penilaian_teman2',$isi->penilaian_teman2,'id="penilaian_teman2" class="input-nilai"');?>
                     </div>
                 </div>
                 
             
             </div>
             <div class="span3">
                 <div class="control-group">
                     <label class="control-label"><strong>Jurnal 1</strong></label>
                     <div class="controls">
                         <?php echo form_input('jurnal1',$isi->jurnal1,'id="jurnal1" class="input-nilai"');?>
                     </div>
                 </div>
                 <div class="control-group">
                     <label class="control-label"><strong>Jurnal 2</strong></label>
                     <div class="controls">
                         <?php echo form_input('jurnal2',$isi->jurnal2,'id="jurnal2" class="input-nilai"');?>
                     </div>
                 </div>
             </div>
             <legend></legend>
            <div class="span8">
                <div class="control-group">
                    <label class="control-label"><strong>Catatan Kemajuan Belajar</strong></label>
                    <div class="controls">
                        <?php echo form_textarea('desc_kemajuan_belajar', $isi->desc_kemajuan_belajar, 'id="desc_kemajuan_belajar" class="cleditor"');?>
                    </div>
                </div>
            </div>
             <div class="span8">
                 <div class="control-group">
                     <div class="controls">
                         <button class="btn btn-primary" id="PenilaianAksi" href="<?php echo base_url();?>index.php/mapelsaya/aksipenilaian"><i class="icon icon-white icon-save"> </i>Simpan </button>
                         <div class="alert"></div>
                     </div>
                 </div>
             </div>
           </body>