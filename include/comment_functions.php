<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

function smartfaq_com_update($faq_id, $total_num)
{
    $db = &Database::getInstance();
    $sql = 'UPDATE ' . $db->prefix('smartfaq_faq') . ' SET comments = ' . $total_num . ' WHERE faqid = ' . $faq_id;
    $db->query($sql);
} 

function smartfaq_com_approve(&$comment)
{ 
    // notification mail here
} 

?>