<?php
/**
 * User: Ananti
 * Date: 5/17/14
 * Time: 2:16 PM
 */

    function ik_custom_footer() {
        global $wpdb;
        $query = "SELECT YEAR(max(post_date)) as year FROM $wpdb->posts WHERE status = 'publish'";
        $result = $wpdb->get_results($query);
        $data = $result[0]->year;
        $data .= "&copy; 2014 ";
        $data .= "<a href='".get_home_url()."'>IsengKoding</a>";
        return $data;
    }
?>