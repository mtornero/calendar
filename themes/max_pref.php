<?php
/* Custom theme for use with WebCalendar.
 *
 * Touch of Grey
 *
 * @author Jeff Hoover
 * @copyright Craig Knudsen, <cknudsen@cknudsen.com>, http://www.k5n.us/cknudsen
 * @license http://www.gnu.org/licenses/gpl.html GNU GPL
 * @version $Id: touch_of_grey_pref.php,v 1.5 2007/02/01 02:23:11 bbannon Exp $:
 * @package WebCalendar
 */

// Define your stuff here...
// Any option in webcal_user_pref can be configured here.

//This theme will be available to both normal users and System Settings.
$webcal_theme = array (
  'MENU_THEME'   => 'max',
  'BGCOLOR'      => '#A6A867',  // Document background
  'CELLBG'       => '#E3DCC2',  // Table cell background
  'H2COLOR'      => '#000000',  // Document title
  'HASEVENTSBG'  => '#C3BCA2',  // Table cell background for days with events
  'MYEVENTS'     => '#000000',  // My events text
  'OTHERMONTHBG' => '#FFFCE2',  // Table cell background for other month
  'POPUP_BG'     => '#E0E2EB',  // Event popup background
  'POPUP_FG'     => '#000000',  // Event popup text
  'TABLEBG'      => '#000000',  // Table grid color
  'TEXTCOLOR'    => '#000000',  // Document text
  'THBG'         => '#51513D',  // Table header background
  'THFG'         => '#E3DCC2',  // Table header text
  'TODAYCELLBG'  => '#E3DC95',  // Table cell background for current day
  'WEEKENDBG'    => '#D3BCB2',  // Table cell background for weekends
 );

include 'theme_inc.php';

?>
