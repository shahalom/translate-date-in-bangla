<?php
/**
 * PHP class to translate date in Bangla
 * @package TranslateDate
 *
 * Concept & Primary script is collected from http://tareq.wedevs.com/2010/09/translate-wordpress-date-time-comment-number-to-bangla-digit/
 * @author Shah Alom <shahalom.amin@gmail.com>
 *
 *
 * Example of Use:
 *
 * $tcObj = new TranslateDate();
 *
 * $output = $tcObj->get_date("d M, Y");
 * or
 * $output = $tcObj->translate("10 October, 1983");
 * 
 * echo $output;
 */


#**********************************************************************
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# ( at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# ERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Online: http://www.gnu.org/licenses/gpl.txt

# *****************************************************************


class TranslateDate {
 
    public function __construct() {}
	

    /**
     * get_date function get the date format to pass the string date to the translate() function
     *
     * @param string $dt_frmt
     * @return string
     */
    function get_date( $dt_frmt='', $str_date='' ) {
        if ( !$dt_frmt || empty($dt_frmt) ) {
            $dt_frmt = "d M, Y";
        }
 				
		if( empty($str_date) )
       		return $this->translate( date($dt_frmt) );
		else {
			$var_strtotime = strtotime($str_date);
			
			if( is_numeric($var_strtotime) )
				return $this->translate( date($dt_frmt, $var_strtotime) );
			else
				return "";
		}
    }
	
	

    /**
     * translate function used to translate the string date
     *
     * @param string $str
     * @return string
     */
    function translate( $str ) {
        if ( !$str ) {
            return;
        }
 
        $str = $this->translate_number( $str );
        $str = $this->translate_day( $str );
        $str = $this->translate_am( $str );
 
        return $str;
    }



    /**
     * Translate numbers only
     *
     * @param string $str
     * @return string
     */
    function translate_number( $str ) {
        $en = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );
        $bn = array( '০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯' );
 
        $str = str_replace( $en, $bn, $str );
 
        return $str;
    }
 
    /**
     * Translate months only
     *
     * @param string $str
     * @return string
     */
    function translate_day( $str ) {
        $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
        $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
        $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
 
        $str = str_replace( $en, $bn, $str );
        $str = str_replace( $en_short, $bn, $str );
 
        return $str;
    }
 
    /**
     * Translate AM and PM
     *
     * @param string $str
     * @return string
     */
    function translate_am( $str ) {
        $en = array( 'am', 'pm' );
        $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
 
        $str = str_replace( $en, $bn, $str );
 
        return $str;
    }
	
}
/* eof class.translateDate.php */
