<?php  $db_data["TABS"] = array (
  'SYS_SEQUENCES' => 
  array (
    'FILE' => 'album_SYS_SEQUENCES.php',
    'COLUMNS' => 
    array (
      'name' => '',
      'nextval' => '1',
      'increment' => '1',
    ),
  ),
  'setup' => 
  array (
    'FILE' => 'album_setup.php',
    'COLUMNS' => 
    array (
      'album_dir' => 'photos/',
      'cache_dir' => '[[cache_dir]]/',
      'site_name' => '[[site_name]]',
      'site_theme' => 'Borders',
      'return_home_url' => '[[domhost]]',
      'new_dir_indic' => '48',
      'cookie_password_hours' => '168',
      'language' => 'EN_UTF8',
      'ftp_server' => '',
      'ftp_server_photos_dir' => '',
      'default_sorting' => 'name_asc',
      'comments_enabled' => 'true',
      'comments_approve_queue_size' => '100',
      'logs_enabled' => 'true',
      'logs_filename' => 'logs.txt',
      'logs_exclude' => '',
      'cache_thumbnails' => 'true',
      'cache_resized_photos' => 'true',
      'statistic_count' => '50',
      'login_enabled' => 'true',
      'register_enabled' => 'true',
      'last_dir_scan' => '0',
      'date_format' => 'd.M.Y H:i:s',
      'error_logging_enabled' => 'false',
      'antispam_code_enabled' => 'true',
      'publish_only_approved_comments' => 'false',
      'use_iptc_desc' => 'true',
      'ecard_enabled' => 'true',
      'ecard_subject' => 'You have got an e-card !',
      'ecard_text' => 'Hello #TO_NAME,

#FROM_NAME sent you an electronic card from phpAlbum.net.
You can pick up it on this adress: http://www.phpalbum.net/phpAlbum/#ECARD_ADRESS
Or you can just look at the picture here: http://www.phpalbum.net/phpAlbum/#IMAGE_ADRESS

Your e-card was sent on #DATE at #TIME.',
      'ecard_picked_subject' => 'You e-card was picked up !',
      'ecard_picked_text' => 'Hello #FROM_NAME,

#TO_NAME picked up your e-card on #DATE at #TIME

e-card adress: http://www.phpalbum.net/phpAlbum/#ECARD_ADRESS',
      'tracking_code' => '',
    ),
  ),
  'quality' => 
  array (
    'FILE' => 'album_quality.php',
    'COLUMNS' => 
    array (
      'id' => '',
      'name' => 'my_quality',
      'thmb_size' => '140',
      'thmb_qual' => '70',
      'photo_size' => '700',
      'photo_qual' => '85',
      'enabled' => 'true',
      'default' => 'false',
      'resize_if_bigger' => 'false',
      'square_thumbnails' => 'false',
      'resize_photo_to_fit' => 'both',
      'watermark_file' => '',
      'watermark_position' => 'RD',
      'thmb_sharp_use' => 'false',
      'thmb_sharp_amount' => '20',
      'thmb_sharp_radius' => '1',
      'thmb_sharp_treshold' => '0',
      'thmb_show_views' => 'true',
      'thmb_show_comments' => 'true',
      'thmb_show_votes' => 'false',
    ),
  ),
  'color_map' => 
  array (
    'FILE' => 'album_color_map.php',
    'COLUMNS' => 
    array (
      'id' => '',
      'name' => 'my_colors',
      'bg_color' => '464646',
      'link_color' => 'DDCC88',
      'dir_desc_color' => 'CCCCCC',
      'border_color' => 'FFFFFF',
      'photo_desc_color' => 'DDCC88',
      'logo_color' => 'DDCC88',
    ),
  ),
  'theme' => 
  array (
    'FILE' => 'album_theme.php',
    'COLUMNS' => 
    array (
      'name' => 'Flowing_Dark',
      'color_map' => '1',
      'logo_path' => 'res/logo.png',
      'logo_style' => 'file',
      'logo_text' => 'phpAlbum.net',
      'directory_style' => 'flowing',
      'additional_thmb_height' => '65',
      'additional_thmb_width' => '45',
      'maximum_photos_per_page' => '100',
      'raster_dir_x' => '4',
      'raster_dir_y' => '3',
      'disable_bottom_nextprev' => 'false',
      'show_filenames' => 'true',
      'display_shadows' => 'true',
      'picture_border_size' => '10',
      'thumbnail_border_size' => '5',
      'dir_logo_style' => 'pic_other_size',
      'dir_logo_size' => '70',
      'dir_logo_quality' => '85',
      'dir_logo_square_thumbnail' => 'false',
      'show_search_box' => 'true',
    ),
  ),
  'directory' => 
  array (
    'FILE' => 'album_directory.php',
    'COLUMNS' => 
    array (
      'path' => '',
      'password' => '',
      'desc' => '',
      'long_desc' => '',
      'alias' => '',
      'sorting' => 'default',
      'visibility' => 'true',
      'view_count' => 0,
      'vote_count' => 0,
      'vote_avg' => 0,
      'comment_count' => 0,
      'photo_count' => 0,
      'photo_count_r' => 0,
      'icon_path' => '',
      'groups' => '',
      'inh_groups' => '',
      'show_parameters' => 'default',
      'show_parameters_custom_id' => '',
      'seq_files' => '',
      'newest_file_time' => '',
      'newest_file_time_with_subdirs' => '',
      'show_newest_pictures_count' => '0',
      'keywords' => 
      array (
      ),
    ),
  ),
  'new_comments' => 
  array (
    'FILE' => 'album_new_comments.php',
    'COLUMNS' => 
    array (
      'seq_files' => '',
      'pic_link' => '',
      'id' => '',
      'file_name' => '',
      'time' => '',
      'name' => '',
      'email' => '',
      'text' => '',
    ),
  ),
  'languages' => 
  array (
    'FILE' => 'album_languages.php',
    'COLUMNS' => 
    array (
      'name' => '',
      'desc' => '',
      'character_set' => '',
      'include_file' => '',
      'translate_file' => '',
    ),
  ),
  'user' => 
  array (
    'FILE' => 'album_user.php',
    'COLUMNS' => 
    array (
      'id' => '',
      'name' => '',
      'password' => '',
      'email' => '',
      'homepage' => '',
      'groups' => '',
    ),
  ),
  'group' => 
  array (
    'FILE' => 'album_group.php',
    'COLUMNS' => 
    array (
      'name' => '',
      'grants' => 
      array (
        'imageorig' => '1',
        'imageview' => '1',
      ),
      'default' => 'false',
    ),
  ),
  'photo_param' => 
  array (
    'FILE' => 'album_photo_param.php',
    'COLUMNS' => 
    array (
      'id' => '',
      'name' => '',
      'type' => '',
      'default' => '',
      'default_lov' => -1,
      'lov' => '',
      'allow_html' => 'false',
      'default_displayed' => 'true',
    ),
  ),
  'photo_param_type' => 
  array (
    'FILE' => 'album_photo_param_type.php',
    'COLUMNS' => 
    array (
      'name' => '',
      'desc' => '',
    ),
  ),
  'anti_spam_codes' => 
  array (
    'FILE' => 'album_anti_spam_codes.php',
    'COLUMNS' => 
    array (
      'pic_seq' => '',
      'code' => '',
      'time' => '',
    ),
  ),
  'phpalbum_version' => 
  array (
    'FILE' => 'album_phpalbum_version.php',
    'COLUMNS' => 
    array (
      'version' => '',
    ),
  ),
  'object_cache' => 
  array (
    'FILE' => 'album_object_cache.php',
    'COLUMNS' => 
    array (
      'type' => '',
      'file' => '',
    ),
  ),
  'ecards' => 
  array (
    'FILE' => 'album_ecards.php',
    'COLUMNS' => 
    array (
      'uid' => '',
      'image' => '',
      'from_name' => '',
      'from_email' => '',
      'to_name' => '',
      'to_email' => '',
      'message_text' => '',
      'created' => '',
      'picked_up' => 'false',
    ),
  ),
  'files_1000' => 
  array (
    'FILE' => 'album_files_1000.php',
    'COLUMNS' => 
    array (
      'file_name' => '',
      'visible' => 'true',
      'desc' => '',
      'long_desc' => '',
      'params' => '',
      'dir_logo' => 'true',
      'view_count' => 0,
      'vote_count' => 0,
      'vote_avg' => 0,
      'comment_count' => 0,
      'use_for_logo' => 'false',
      'file_time' => '',
      'screenshot' => '',
      'type' => 'I',
      'keywords' => 
      array (
      ),
    ),
  ),
  'comments_1000' => 
  array (
    'FILE' => 'album_comments_1000.php',
    'COLUMNS' => 
    array (
      'id' => '',
      'file_name' => '',
      'time' => '',
      'name' => '',
      'email' => '',
      'text' => '',
      'visible' => 'true',
    ),
  ),
) ?>