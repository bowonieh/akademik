<script type="text/javascript">  
 $(document).ready(function(){    
 //modal - action after click button Delete->Yes  
 $('#btn_YesDel').click(function(){              
   var idExp = $('#idExp').val();      
   $(location).attr('href','<?php echo base_url() ?>index.php/applicant_work/delete/'+idExp);  
 });        
 for(var i=1;i<=$('#bilExp').val();i++) {  
 //modal - action after click button View      
 $('#view'+i).click(function(){  
   var idExp = $('#idExp').val();  
   $.post('<?php echo base_url() ?>index.php/applicant_work/view/'+idExp,function(data){                                      
     var obj = $.parseJSON(data);  
     $('#Vposition').html(obj.desc_position);          
     $('#Vdesignation').html(obj.designation);    
     $('#Vworkplace').html(obj.workplace);    
     $('#Vduration').html(obj.date_from+" - "+obj.date_to);    
     $('#Vsector').html(obj.desc_sector);    
     $('#Vgrade').html(obj.desc_grade);  
   });        
 });      
 //modal - action after click button Edit  
 $('#edit'+i).click(function(){              
   var idExp = $('#idExp').val();               
   $.post('<?php echo base_url() ?>index.php/applicant_work/view/'+idExp,function(data){                                      
     var obj = $.parseJSON(data);    
      $('#id').val(obj.id_applicantpc_experience);  
     $('#Eposition option[value=' + obj.position +']').attr("selected",true);  
     $('#Edesignation').val(obj.designation);          
     $('#Eworkplace').val(obj.workplace);    
     $('#Edate_from').val(obj.date_from);  
     $('#Edate_to').val(obj.date_to);  
     $('input[name=Esector][value=' + obj.sector +']').attr("checked",true);    
   });                  
 });    
 } //end function for  
 //modal - action after click button Save  
 $("#btn_wEdit").click(function( e ) {  
   e.preventDefault();  
   var id = $('#id').val();  
   var position = $('#Eposition').val();  
   var designation = $('#Edesignation').val();  
   var workplace = $('#Eworkplace').val();  
   var dtFrom = $('#Edate_from').val();  
   var dtTo = $('#Edate_to').val();  
   var sector = $('input:radio[name=Esector]:checked').val();    
   var grade = $('#Egrade').val();  
   $.ajax({  
     type: "POST",  
     url: "<?=base_url()?>index.php/applicant_work/update",  
     cache: false,  
     dataType: "json",  
     data: 'id='+id+'&Eposition='+position+'&Edesignation='+designation+'&Eworkplace='+workplace+'&dtFrom='+dtFrom+'&dtTo='+dtTo+'&Esector='+sector+'&Egrade='+grade,  
     success: function(result){  
       if(result.error) {  
         $(".alert").fadeIn('slow');  
         $("#error_message").html(result.message);  
       } else {        
         $(location).attr('href','<?php echo base_url() ?>index.php/applicant_work/refresh/'+modul_id);        }  
     }  
   });  
 });  
 });
</script>