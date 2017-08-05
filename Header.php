<?php
/**
 * CookiesPlus, by TuxSoft Limited <tuxsoft@tuxsoft.uk> 2017.  
 * CookiesPlus is a PHP plugin to allow sites to comply with the EU Cookie Law by informing users of a site's cookie policy.
 * Header.php is a part of CookiesPlus.
 * 
 * Copyright (C) 2017 TuxSoft Limited, Released under the GNU GPL v3.0 or later.
 *
 *  - ORIGINAL COPYRIGHT NOTICE - 
 * * MonstrousCookies, created by James Phillips <james@jamesphillipsuk.com> September 2016.  
 * * MonstrousCookies is a PHP plugin to allow sites to comply with the EU Cookie Law by informing users of a site's cookie policy.
 * * Header.php is a part of MonstrousCookies.
 * * 
 * * Copyright (C) 2016 James Phillips, Released under the GNU GPL v3.0 or later.
 * 
 * This program is free software: you can redistribute it and/or modify it under the terms of the 
 * GNU General Public License as published by the Free Software Foundation, either version 3 of the License, 
 * or (at your option) any later version.  This program is distributed in the hope that it will be useful, 
 * but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
 * FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.   
 * You should have received a copy of the GNU General Public License along with this program.
 * If not, see <http://www.gnu.org/licenses/>.
 * 
 * Edited 08th February 2017
**/
//To use this file, type <?php include('./Header.php'); ?> instead of the <body> tag in your HTML.
?>
		<link rel="stylesheet" type="text/css" href="./Style.css">
		<script src="./jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<?php
			include ('./JavaScriptNotice.php');
			include ('./CookieNotice.php');
		?>
