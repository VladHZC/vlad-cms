<?php
/*
# Copyright (C) 2021  Blau Araujo <blau@debxp.org>
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>
*/

// Site Settings

$site['title'] = 'Skatehive';
$site['tagline'] = 'We are owr own Sponsors';
$site['favicon'] = 'favicon.png';
$site['theme'] = 'default';

// Admin Settings

$admin['name'] = 'admin';
$admin['email'] = 'vlad@lbry.org';

// Paths

$cms_path ='cms';
$theme_path ="theme/${site['theme']}/";
$inc_path=$cms_path.'/includes/';
$core_path=$cms_path.'/core/';

// Includes Settings 

$inc_path = 'cms/includes/';
$theme_path = "theme/${site['theme']}/";

include $core_path.'functions.php';
include $inc_path.'header.php';
include $theme_path.'main.php';
include $inc_path.'footer.php';