<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Page to reset all plugin settings
 *
 * @package     local_accessibility
 * @category    admin
 * @copyright   2023 Ponlawat Weerapanpisit <ponlawat_w@outlook.co.th>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php'); // @codingStandardsIgnoreLine ignore login check as guest is also allowed.
require_once(__DIR__ . '/lib.php');

require_sesskey();

$returnurl = optional_param('returnurl', new moodle_url('/'), PARAM_LOCALURL);

$widgets = local_accessibility_getwidgetinstances();
foreach ($widgets as $widget) {
    $widget->setuserconfig(null);
}

redirect($returnurl);
