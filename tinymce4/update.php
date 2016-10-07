<?php
if(null === rex_config::get('tinymce4', 'profiles')){
    $profiles = array(
        array(
            'id' => time(),
            'selector' => 'textarea.tinyMCEEditor',
            'plugins' => 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table contextmenu paste code',
            'toolbar' => 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        ),
    );
    rex_config::set('tinymce4', 'profiles', serialize($profiles));
}
if(null === rex_config::get('tinymce4', 'content_css')){
    rex_config::set('tinymce4', 'content_css', 'default');
}
if(null === rex_config::get('tinymce4', 'image_format')){
    rex_config::set('tinymce4', 'image_format', 'default');
}
if(null === rex_config::get('tinymce4', 'media_format')){
    rex_config::set('tinymce4', 'media_format', 'default');
}