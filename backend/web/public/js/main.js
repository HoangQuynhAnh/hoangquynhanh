
    tinymce.init({
    selector: 'textarea#content',
    height: 350,
    width:"",
    plugins: [
     
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"],
    toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
    toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
    image_advtab: true,
    image_advtab: true,
    menubar: false,
    toolbar_items_size: 'small',
        relative_urls: false, 
        remove_script_host : false,
        filemanager_title:"Media Manager",  
    external_filemanager_path: "http://localhost/kientap1/file/",
    external_plugins: { 
      "filemanager":"http://localhost/kientap1/file/plugin.min.js",
      //"codemirror":"http://localhost/advanced/backend/web/tinymce/plugins/codemirror/plugin.js"
    },
      
         });

  jQuery(document).ready(function($) {
    $('#show-media').click(function() {
      $('#media-modal').modal('show');
      // $('input#image').attr('value','sá');;
      $('#media-modal').on('hide.bs.modal',function(){
        var imgUrrl = $('#image').val();
        $('img#show-img').attr('src',imgUrrl);
        $('input#image').attr('value',imgUrrl);;
        // alert(imgUrrl);
      });
    });
  });
  
//    external_filemanager_path: homeUrl()+"/file/",
  //  external_plugins: { "filemanager" : homeUrl()+"/file/plugin.min.js"},
    //  filemanager_access_key:csrf(),
  //});//
