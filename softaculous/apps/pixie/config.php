<?php
if (!defined('DIRECT_ACCESS')) {
	header('Location: ../');
	exit();
}
/**
 * Pixie: The Small, Simple, Site Maker.
 * 
 * Licence: GNU General Public License v3
 * Copyright (C) 2010, Scott Evans
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see http://www.gnu.org/licenses/
 *
 * Title: Configuration settings
 *
 * @package Pixie
 * @copyright 2008-2010 Scott Evans
 * @author Scott Evans
 * @author Sam Collett
 * @author Tony White
 * @author Isa Worcs
 * @link http://www.getpixie.co.uk
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3
 *
 */
/* MySQL settings */
$pixieconfig['db'] = '[[softdb]]';
$pixieconfig['user'] = '[[softdbuser]]';
$pixieconfig['pass'] = '[[softdbpass]]';
$pixieconfig['host'] = '[[softdbhost]]';
$pixieconfig['table_prefix'] = '';
/* Timezone - (Server time zone) */
$pixieconfig['server_timezone'] = 'Europe/London';
/* Foreign language database bug fix */
$pixieconfig['site_charset'] = 'UTF-8';
?>