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
 * Course header
 *
 * @package   format_multitopic
 * @copyright 2018 Otago Polytechnic
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace format_multitopic;

defined('MOODLE_INTERNAL') || die;

/**
 * Course header: A banner with the course title and a slice of the course image.
 *
 * @copyright  2018 Otago Polytechnic
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class format_multitopic_courseheader implements \renderable {

    /** @var \moodle_url|null course image URL */
    private $imageurl;
    /** @var string|null course image name */
    private $imagename;
    /** @var string|null course image author's name, optionally followed by vertical bar and URL */
    private $authorwithurl;
    /** @var string|null course image licence */
    private $licencecode;
    /** @var int how far down the course image (in percent) to take the banner slice from */
    private $bannerslice;
    /** @var string course name */
    private $coursename;

    /**
     * Construct course header
     *
     * @param \stdClass $course the course to construct a header for
     */
    public function __construct(\stdClass $course) {

        $contextid = \context_course::instance($course->id)->id;

        // Set course-related properties.
        $this->coursename   = $course->fullname;
        $this->bannerslice  = $course->bannerslice;

        // Clear image-related properties.
        $this->imageurl     = null;
        $this->imagename    = null;
        $this->authorwithurl = null;
        $this->licencecode  = null;

        // Search for the course image.
        $fs = get_file_storage();
        $files = $fs->get_area_files($contextid, 'course', 'overviewfiles');
        foreach ($files as $file) {
            $filename = $file->get_filename();
            $filenameextpos = strrpos($filename, '.');
            if ($filenameextpos) {
                $url = \moodle_url::make_file_url('/pluginfile.php' ,
                        '/' . $file->get_contextid() . '/course/overviewfiles' .
                        $file->get_filepath() . $filename);
                $this->imageurl     = $url;
                $this->imagename    = substr($filename, 0, $filenameextpos);
                $this->authorwithurl = $file->get_author();
                $this->licencecode  = $file->get_license();
            }
        }

    }

    /**
     * Output the course header
     *
     * @return string generated HTML.
     */
    public function output(): string {

        // Output the banner.
        // NOTE: Changes here need to be reflected in _course_edit.js .
        $o = \html_writer::start_tag('div', array(
            'id' => 'course-header-banner',
            'style' => "background-image: url('{$this->imageurl}'); "
                     . "background-position: center {$this->bannerslice}%;"
        ));
        $o .= \html_writer::tag('div', $this->coursename, array(
            'id' => 'course-header-banner-text',
            ));
        $o .= \html_writer::end_tag('div');

        // Output the attribution.
        $o .= \html_writer::start_tag('p', array('id'    => 'course-header-banner_attribution',
                                                'style' => 'visibility: ' . ($this->imageurl ? 'visible' : 'hidden') . ';'));
        $imagename          = $this->imagename;
        $authorwithurlarray = explode('|', $this->authorwithurl);
        $authorhtml         = $authorwithurlarray[0];
        if (count($authorwithurlarray) > 1) {
            $authorurl  = $authorwithurlarray[1];
            $authorhtml = \html_writer::tag('a', $authorhtml, array('href' => $authorurl, 'target' => '_blank'));
        }
        $licencehtml = $this->imageurl ? get_string($this->licencecode, 'license') : '';
        if ($licencehtml && substr($this->licencecode, 0 , 3) == 'cc-') {
            $licenceurl = 'https://creativecommons.org/licenses/by-' . substr($this->licencecode, 3, 5) . '/4.0';
            $licencehtml = \html_writer::tag('a', $licencehtml, ['href' => $licenceurl, 'target' => '_blank']);
        }
        $o .= get_string('image', 'format_multitopic') . ": {$imagename}, ";
        $o .= get_string('image_by', 'format_multitopic') . " {$authorhtml}"
                . (($this->licencecode == 'unknown') ? '' : (', '));
        $o .= (($this->licencecode == 'unknown') ? ''
                : (get_string('image_licence', 'format_multitopic') . " {$licencehtml}"));
        $o .= \html_writer::end_tag('p');

        return $o;
    }

}