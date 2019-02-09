<?php 
function strip_shortcode_gallery( $content ) {
    preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

    if ( ! empty( $matches ) ) {
        foreach ( $matches as $shortcode ) {
            if ( 'gallery' === $shortcode[2] ) {
                $pos = strpos( $content, $shortcode[0] );
                if( false !== $pos ) {
                    return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
                }
            }
        }
    }

    return $content;
}

function get_month_name($number,$lang){
    switch ($number) {
        case 01:
            if ($lang == "en") {
                return 'JAN';
            } else {
                return 'يناير';
            }
            break;
        case 02:
            if ($lang == "en") {
                return 'FEB';
            } else {
                return 'يناير';
            }
            break;
        case 03:
            if ($lang == "en") {
                return 'MAR';
            } else {
                return 'مارس';
            }
            break;
        case 04:
            if ($lang == "en") {
                return 'APR';
            } else {
                return 'أبريل';
            }
            break;        
        case 05:
            if ($lang == "en") {
                return 'MAY';
            } else {
                return 'مايو';
            }
            break;
        case 06:
            if ($lang == "en") {
                return 'JUNE';
            } else {
                return 'يونيو';
            }
            break;
        case 07:
            if ($lang == "en") {
                return 'JULY';
            } else {
                return 'يوليو';
            }
            break;
        case 08:
            if ($lang == "en") {
                return 'AUG';
            } else {
                return 'أغسطس';
            }
            break;        
        case 09:
            if ($lang == "en") {
                return 'SEP';
            } else {
                return 'سبتمبر';
            }
            break;
        case 10:
            if ($lang == "en") {
                return 'OCT';
            } else {
                return 'أكتوبر';
            }
            break;
        case 11:
            if ($lang == "en") {
                return 'NOV';
            } else {
                return 'نوفمبر';
            }
            break;
        case 12:
            if ($lang == "en") {
                return 'DEC';
            } else {
                return 'ديسمبر';
            }
            break;        
        
        default:
            # code...
            break;
    }
}

add_theme_support( 'post-thumbnails' );

?>