<?php

// Paramètres d'installation (ne jamais modifier !).
define('CONF_INSTALL', 1);
define('CONF_KEY', '[[CONF_KEY]]');

// Paramètres de la galerie.
define('CONF_DEBUG', 0);
define('CONF_INTEGRATED', 0);
define('CONF_URL_REWRITE', 0);

// Répertoires.
define('CONF_GALLERY_PATH', '[[relativeurl]]');
define('CONF_ADMIN_DIR', 'admin');
define('CONF_ALBUMS_DIR', 'albums');

// Paramètres GD.
define('CONF_GD_TRANSPARENCY', 0); # voir méthode gdTrans() dans includes/classes/img.class.php

// Paramètres de base de données.
define('CONF_DB_USER', '[[softdbuser]]');
define('CONF_DB_PASS', '[[softdbpass]]');
define('CONF_DB_DSN', 'mysql:host=[[softdbhost]];dbname=[[softdb]]');
define('CONF_DB_PREF', '[[dbprefix]]');

// Paramètres SMTP.
define('CONF_SMTP_MAIL', 0);
define('CONF_SMTP_SERV', '');
define('CONF_SMTP_PORT', 25);
define('CONF_SMTP_AUTH', 0);
define('CONF_SMTP_USER', '');
define('CONF_SMTP_PASS', '');

// Paramètres l10n et de dates.
define('CONF_CHARSET', 'UTF-8');
define('CONF_DEFAULT_LANG', '[[language]]');
define('CONF_DEFAULT_TZ', 'America/New_York');

// Paramètres de gestion des erreurs.
define('CONF_ERRORS_DISPLAY', 0); # 1 en développement et à l'installation ; 0 en production
define('CONF_ERRORS_DISPLAY_TRACE', 1);
define('CONF_ERRORS_DISPLAY_NOW', 0);
define('CONF_ERRORS_TRACE_ARGS', 1);
define('CONF_ERRORS_LOG', 1); # 1 en développement et en production
define('CONF_ERRORS_LOG_MAX', 500);
define('CONF_ERRORS_MAIL', 0);

// Paramètres des vignettes.
define('CONF_THUMBS_DIR', 'vignettes'); # uniquement pour compatibilité avec iGalerie 1.x
define('CONF_THUMBS_PROTECT', 0); # protéger les vignettes des accès direct ?
define('CONF_THUMBS_IMG_METHOD', 'prop');
define('CONF_THUMBS_IMG_WIDTH', 80);
define('CONF_THUMBS_IMG_HEIGHT', 80);
define('CONF_THUMBS_IMG_SIZE', 121);
define('CONF_THUMBS_IMG_QUALITY', 75);
define('CONF_THUMBS_CAT_METHOD', 'crop');
define('CONF_THUMBS_CAT_WIDTH', 196);
define('CONF_THUMBS_CAT_HEIGHT', 150);
define('CONF_THUMBS_CAT_SIZE', 150);
define('CONF_THUMBS_CAT_QUALITY', 75);
define('CONF_THUMBS_WID_METHOD', 'crop');
define('CONF_THUMBS_WID_WIDTH', 150);
define('CONF_THUMBS_WID_HEIGHT', 110);
define('CONF_THUMBS_WID_SIZE', 110);
define('CONF_THUMBS_WID_QUALITY', 75);

?>