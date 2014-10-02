<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function initialize_tinymce() {
$tinymce = '<script type="text/javascript" src="' . base_url() . 'assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
theme : "modern",
mode : "textareas",
theme_advanced_toolbar_location : "top",
plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
             "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
       ],
toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
image_advtab: true ,
theme_advanced_buttons1 : "|responsivefilemanager|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
convert_urls : false,
relative_urls : false,
remove_script_host : false,
height: 300,
width:700,
external_filemanager_path:"../../assets/filemanager/",
       filemanager_title:"Responsive Filemanager" ,
       external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
});
</script>';
return $tinymce;
 
}