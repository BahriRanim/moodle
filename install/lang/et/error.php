<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Andmebaasi ei saa luua.</p>
<p>Määratud andmebaasi pole ja antud kasutajal puudub õigus andmebaasi loomiseks.</p>
<p>Õpikeskkonna administraator peab kontrollima andmebaasi konfiguratsiooni</p>';
$string['cannotcreatelangdir'] = 'Keelekataloogi ei saa luua';
$string['cannotcreatetempdir'] = 'Ajutist kataloogi ei saa luua';
$string['cannotdownloadcomponents'] = 'Komponente ei saa alla laadida';
$string['cannotdownloadzipfile'] = 'ZIP-faili ei saa alla laadida';
$string['cannotfindcomponent'] = 'Ei leia komponenti';
$string['cannotsavemd5file'] = 'MD5-faili ei saa salvestada';
$string['cannotsavezipfile'] = 'ZIP-faili ei saa salvestada';
$string['cannotunzipfile'] = 'Faili ei saa lahti pakkida.';
$string['componentisuptodate'] = 'Komponent on ajakohane';
$string['dmlexceptiononinstall'] = '<p>Ilmnes andmebaasitõrge [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Allalaaditud faili kontroll nurjus';
$string['invalidmd5'] = 'Kontrolli muutuja oli vale – proovige uuesti';
$string['missingrequiredfield'] = 'Mõni nõutav väli on puudu';
$string['remotedownloaderror'] = '<p>Komponendi teie serverisse allalaadimine nurjus. Kontrollige puhvri sätteid; PHP laiend cURL on tungivalt soovitatav.</p>
<p>Peate faili <a href="{$a->url}">{$a->url}</a> käsitsi alla laadima, kopeerima selle oma serveris asukohta „{$a->dest}“ ja seal lahti pakkima.</p>';
$string['wrongdestpath'] = 'Vale sihtkohatee';
$string['wrongsourcebase'] = 'Vale allika URL-i baas';
$string['wrongzipfilename'] = 'Vale ZIP-faili nimi';
