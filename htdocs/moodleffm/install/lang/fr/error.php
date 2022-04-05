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

$string['cannotcreatedboninstall'] = '<p>Impossible de créer la base de données.</p>
<p>La base de données indiquées n\'existe pas et l\'utilisateur spécifié n\'a pas les permissions requises pour créer une base de données.</p>.
<p>L\'administrateur du site doit revoir la configuration de la base de données.</p>';
$string['cannotcreatelangdir'] = 'Création du dossier lang impossible';
$string['cannotcreatetempdir'] = 'Création du dossier temp impossible';
$string['cannotdownloadcomponents'] = 'Téléchargement des composants impossible';
$string['cannotdownloadzipfile'] = 'Téléchargement du fichier ZIP impossible';
$string['cannotfindcomponent'] = 'Composant introuvable';
$string['cannotsavemd5file'] = 'Enregistrement du fichier md5 impossible';
$string['cannotsavezipfile'] = 'Enregistrement du fichier ZIP impossible';
$string['cannotunzipfile'] = 'Décompression du fichier ZIP impossible';
$string['componentisuptodate'] = 'Le composant est à jour';
$string['dmlexceptiononinstall'] = '<p>Une erreur de base de données est survenue [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'La vérification du fichier téléchargé à échoué';
$string['invalidmd5'] = 'Le code de contrôle md5 n\'est pas valide';
$string['missingrequiredfield'] = 'Un champ obligatoire n\'est pas renseigné';
$string['remotedownloaderror'] = '<p>Le téléchargement du composant sur votre serveur a échoué. Veuillez vérifier les réglages de proxy. L\'extension cURL de PHP est vivement recommandée.</p>
<p>Vous devez télécharger manuellement le fichier <a href="{$a->url}">{$a->url}</a>, le copier sur votre serveur à l\'emplacement « {$a->dest} » et le décompresser à cet endroit.</p>';
$string['wrongdestpath'] = 'Chemin de destination incorrect';
$string['wrongsourcebase'] = 'Adresse URL de base de la source incorrecte';
$string['wrongzipfilename'] = 'Nom de fichier ZIP incorrect';
