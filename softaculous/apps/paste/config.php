<?php
/*
* $ID Project: Paste 2.0 - J.Samuel - 29/09/2013 @ 04:11 (Coffee please!)
* This is the configuration file for paste. See /docs for more information.
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 3
* of the License, or (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License in LIC.txt for more details.
*/
 
// Database information
$CONF['dbhost']='[[softdbhost]]';
$CONF['dbname']='[[softdb]]';
$CONF['dbuser']='[[softdbuser]]';
$CONF['dbpass']='[[softdbpass]]';

// These extra databases are supported: postgresql
$CONF['dbsoftware']='mysql';

// This should be the entire URL to your PASTE installation.
$CONF['url']=$CONF['pastebin']='[[softurl]]/'; // Make sure you end it with a slash! (/)
// And the title
$CONF['sitetitle']='[[site_name]]';

// Enable mod_rewrite? remember to move htaccess.txt to .htaccess!
$mod_rewrite=false;

// What is the name of the template you want to use for the frontend (the folder name as displayed in /templates/)
$CONF['template']='default';

// Enable reCAPTCHA to help prevent spambots?
$CONF['useRecaptcha'] = false;
// Get your keys at http://www.google.com/recaptcha
$CONF['pubkey']='public-key-here';
$CONF['privkey']='private-key-here';

// This is a random string used for extra security for passwords (slows down dictionary attacks for really weak passwords)
// Generate new random salts at http://mkpasswd.net/
$salt='c7428522a9f84320ad63275162904a';

/* 
* You can set the format of the paste ID here which will be used in URLs.
* Examples: http://php.net/manual/en/function.sprintf.php
*/
$CONF['pid_format']='%d';

// Default expiry time - d (day), m (month), and f (forever).
$CONF['default_expiry']='f';

// The maximum number of posts you want to keep. Keep this as-is if you want no limits.
$CONF['max_posts']=0;

// Default syntax highlight for pastes.
$CONF['default_highlighter']='text';

// Available formats (All GeSHi formats are here)
$CONF['geshiformats']=array(
	'abap'=>'ABAP',
	'actionscript'=>'ActionScript',
	'actionscript3'=>'ActionScript 3',
	'ada'=>'Ada',
	'apache'=>'Apache',
	'applescript'=>'AppleScript',
	'apt_sources'=>'Apt sources.list',
	'asm'=>'ASM',
	'asp'=>'ASP',
	'autoit'=>'AutoIt',
	'avisynth'=>'AviSynth',
	'bash'=>'BASH',
	'basic4gl'=>'Basic4GL',
	'bf'=>'Brainfuck',
	'bibtex'=>'BibTeX',
	'blitzbasic'=>'BlitzBasic',
	'bnf'=>'BNF',
	'boo'=>'Boo',
	'c'=>'C',
	'c_mac'=>'C for Macs',
	'caddcl'=>'CADDCL',
	'cadlisp'=>'CADLisp',
	'cfdg'=>'CFDG',
	'cfm'=>'ColdFusion',
	'cil'=>'CIL',
	'cmake'=>'CMake',
	'cobol'=>'COBOL',
	'cpp-qt'=>'C++ (with QT extensions)',
	'cpp'=>'C++',
	'csharp'=>'C#',
	'css'=>'CSS',
	'd'=>'D',
	'dcs'=>'DCS',
	'delphi'=>'Delphi',
	'diff'=>'Diff-output',
	'div'=>'DIV',
	'dos'=>'DOS',
	'dot'=>'dot',
	'eiffel'=>'Eiffel',
	'email'=>'E-mail (mbox\eml\RFC format)',
	'erlang'=>'Erlang',
	'fo'=>'FO',
	'fortran'=>'Fortran',
	'freebasic'=>'FreeBasic',
	'genero'=>'Genero',
	'gettext'=>'GNU Gettext .po/.pot',
	'glsl'=>'glSlang',
	'gml'=>'GML',
	'gnuplot'=>'GNUPlot',
	'groovy'=>'Groovy',
	'haskell'=>'Haskell',
	'hq9plus'=>'HQ9+',
	'html4strict'=>'HTML 4.01 strict',
	'idl'=>'Unoidl',
	'ini'=>'INI',
	'inno'=>'Inno Script',
	'intercal'=>'INTERCAL',
	'io'=>'IO',
	'java'=>'Java',
	'java5'=>'Java 5',
	'javascript'=>'JavaScript',
	'kixtart'=>'KiXtart',
	'klonec'=>'KLone with C',
	'klonecpp'=>'KLone with C++',
	'latex'=>'LaTeX',
	'lisp'=>'Generic Lisp',
	'locobasic'=>'Locomotive Basic',
	'lolcode'=>'LOLcode',
	'lotusformulas'=>'@Formula/@Command',
	'lotusscript'=>'LotusScript',
	'lscript'=>'Lightwave Script',
	'lsl2'=>'Linden Script',
	'lua'=>'LUA',
	'm68k'=>'Motorola 68000 Assembler',
	'make'=>'GNU make',
	'matlab'=>'Matlab',
	'mirc'=>'mIRC',
	'modula3'=>'Modula-3',
	'mpasm'=>'Microchip Assembler',
	'mxml'=>'MXML',
	'mysql'=>'MySQL',
	'nsis'=>'NSIS',
	'oberon2'=>'Oberon-2',
	'objc'=>'Objective-C',
	'ocaml-brief'=>'Objective Caml',
	'oobas'=>'OOo Basic',
	'oracle11'=>'Oracle 11i',
	'oracle8'=>'Oracle 8',
	'pascal'=>'Pascal',
	'per'=>'Per (forms)',
	'perl'=>'Perl',
	'php-brief'=>'PHP (Brief version)',
	'php'=>'PHP',
	'pic16'=>'PIC16 Assembler',
	'pixelbender'=>'Pixel Bender',
	'text'=>'Plain text',
	'plsql'=>'Oracle 9.2 PL/SQL',
	'povray'=>'Povray',
	'powershell'=>'PowerShell',
	'progress'=>'Progress',
	'prolog'=>'Prolog',
	'properties'=>'Property',
	'providex'=>'ProvideX',
	'python'=>'Python',
	'qbasic'=>'QuickBASIC',
	'rails'=>'Ruby on Rails',
	'rebol'=>'Rebol',
	'reg'=>'Microsoft REGEDIT',
	'robots'=>'Robots.txt',
	'ruby'=>'Ruby',
	'sas'=>'SAS',
	'scala'=>'Scala',
	'scheme'=>'Scheme',
	'scilab'=>'SciLab',
	'sdlbasic'=>'sdlBasic',
	'smalltalk'=>'Smalltalk',
	'smarty'=>'Smarty',
	'sql'=>'SQL',
	'tcl'=>'TCL',
	'teraterm'=>'Tera Term Macro',
	'thinbasic'=>'thinBasic',
	'tsql'=>'T-SQL',
	'typoscript'=>'TypoScript',
	'vb'=>'Visual Basic',
	'vbnet'=>'Visual Basic .NET',
	'verilog'=>'Verilog',
	'vhdl'=>'VHDL',
	'vim'=>'Vim',
	'visualfoxpro'=>'Visual FoxPro',
	'visualprolog'=>'Visual Prolog',
	'whitespace'=>'Whitespace',
	'whois'=>'WHOIS (RPSL format)',
	'winbatch'=>'WinBatch',
	'xml'=>'XML',
	'xorg_conf'=>'xorg.conf',
	'xpp'=>'Axapta/Dynamics Ax X++',
	'z80'=>'ZiLOG Z80 Assembler',
);

// The formats that are listed first.
$CONF['popular_formats']=array(
	'text','bash','html4strict', 'css', 'javascript', 'php',
	'perl','python','sql','ruby', 'rails', 'tcl', 'xml',
	'whois','xorg_conf','java','apt_sources','mirc','c','cpp',
);

/*
You're not advised to change this if you don't have any JS experience.
The new default theme will take care of this for you (a button to append the highlight prefix to selected lines)
But, we've kept this here if you wish to change the prefix, you can change the values located in paste.js on function highlight(e)
Don't forget to change 11 (the length of the default prefix) to the new length of the prefix you wish to use.
-->*/ $CONF['highlight_prefix']='!highlight!';

// END OF CONFIGURATION FILE
?>
