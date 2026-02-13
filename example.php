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
 * Contains extension class for example.
 *
 * @package    enrol_campusonline
 * @copyright  2026, think modular
 * @author     think modular (stefan.weber@think-modular.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace campusonlineext_example;

use enrol_campusonline\extension\extension_base;

/**
 * Example class to enrich users or courses.
 *
 * @package enrol_campusonline
 */
class example extends extension_base {
    /**
     * Adds properties to course.
     *
     * @param array $course The course object to enrich.
     * @return array The enriched course object.
     */
    public function enrich_course(array $course): array {
        $course['example:superspecialid'] = $course['course:uid'];
        return $course;
    }

    /**
     * Adds properties to user.
     *
     * @param array $user The user object to enrich.
     * @return array The enriched user object.
     */
    public function enrich_user(array $user): array {
        $user['example:fullname'] = $user['givenName'] . ' ' . $user['surname'];
        return $user;
    }
}
