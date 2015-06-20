<?php
/*
 * Copyright (C) 2014 ZorDesigns <http://zordesigns.org/>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

/* SOCIAL LINKS */
$socialnk['Facebook'] 	= "https://www.facebook.com/ARKGRGaming";
$socialnk['Twitter']  	= "#";
$socialnk['Youtube']  	= "https://www.youtube.com/channel/UCcegG7KKMvpd7UVFHdJ4tTQ";
$socialnk['Steam']   	= "http://store.steampowered.com/app/346110";
$socialnk['Rss']   		= "#";
$socialnk['Google']   	= "#";

/* CMS LINKS */
$cms['title']       	= "ARKGR |";
$cms['description'] 	= "ARKGR is the best Soultion for the Greek Community of ARK: Survival Evolved";
$cms['keywords']    	= "ARKGR, ARK: Survival Evolved, ZorDesigns, FlameCMS, ARK Community, ARK";
$cms['author']    		= "ZorDesigns, FailZorD, FlameCMS";

/* DB CONNECTION CODE */
$arkcon = mysqli_connect("127.0.0.1","root","password","arkdb") or die("Error " . mysqli_error($arkcon)); 

?>