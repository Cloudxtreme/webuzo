tinymce.init({

 
    file_browser_callback: function(field_name, url, type, win) { 
        tinyMCE.activeEditor.windowManager.open({
            file           : '[[wwwurl]]/dada_mail_support_files/kcfinder/browse.php?opener=tinymce&type=' + type,
            title          : 'KCFinder',
            width          : 700,
            height         : 500,
            resizable      : "yes",
            inline         : true,
            close_previous : "no",
            popup_css      : false
        }, {
            window : win,
            input  : field_name
        });
        return false;        
    },



    selector:              "textarea#html_message_body",
    height:                "30em", 
    image_advtab :          true,
    paste_data_images :     true,
    convert_fonts_to_spans : true,
    element_format :         "xhtml",
    entity_encoding :        "names",
    keep_styles:             true,
    protect: [
         /<\?dada.*?\?>/g
     ],
     visual: true, 
     convert_urls: false, 
     relative_urls: false,
      
     document_base_url :     "[[wwwurl]]/dada_mail_support_files/",
     
     
     remove_script_host: false, 
     visualblocks_default_state: true,
    
    plugins: [
        "autoresize advlist autolink lists link image charmap preview hr anchor ",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "nonbreaking table contextmenu directionality",
        "emoticons paste textcolor fullpage"
    ],

    toolbar1 : "undo redo  | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect | bullist numlist outdent indent | link image",
    toolbar2 : "preview | forecolor backcolor emoticons code fullpage"
    
 });