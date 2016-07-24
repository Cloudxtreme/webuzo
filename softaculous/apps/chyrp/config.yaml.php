<?php header("Status: 403"); exit("Access denied."); ?>
---
sql: 
  host: "[[softdbhost]]"
  username: "[[softdbuser]]"
  password: "[[softdbpass]]"
  database: "[[softdb]]"
  prefix: "[[dbprefix]]"
  adapter: "mysql"
name: "[[site_name]]"
description: "[[site_desc]]"
url: "[[softurl]]"
chyrp_url: "[[softurl]]"
email: "[[admin_email]]"
timezone: "America/New_York"
locale: "en_US"
check_updates: true
theme: "firecrest"
admin_theme: "default"
posts_per_page: 5
feed_items: 20
feed_url: 
uploads_path: "/uploads/"
enable_trackbacking: true
send_pingbacks: false
enable_xmlrpc: true
enable_ajax: true
enable_wysiwyg: true
enable_emoji: true
can_register: false
email_activation: false
enable_recaptcha: false
default_group: 2
guest_group: 5
clean_urls: false
post_url: "(year)/(month)/(day)/(url)/"
enabled_modules: 
enabled_feathers: 
  - "text"
routes: 
secure_hashkey: "[[secure_hashkey]]"
