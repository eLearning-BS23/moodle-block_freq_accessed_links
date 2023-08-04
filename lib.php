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
 * Plugin functions for the block_freq_accessed_links plugin.
 *
 * @package   block_freq_accessed_links
 * @copyright 2023, Brain Station 23
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 defined('MOODLE_INTERNAL') || die();

 function block_freq_accessed_links_before_footer() {
    global $PAGE, $USER, $DB;

    $record = new stdClass();
    $record->user_id = $USER->id;
    $record->url = "" . $PAGE->url;
    $record->title = $PAGE->title;
    $record->time_created = time();

    $DB->insert_record('block_freq_accessed_links', $record);
 }