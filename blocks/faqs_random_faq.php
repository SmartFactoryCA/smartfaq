<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

function b_faqs_random_faq_show()
{
    include_once(XOOPS_ROOT_PATH."/modules/smartfaq/include/functions.php");
    
    $block = array();

    // Creating the faq handler object
	$faq_handler =& sf_gethandler('faq');

    // creating the FAQ object
    $faqsObj = $faq_handler->getRandomFaq('question', array(_SF_STATUS_PUBLISHED, _SF_STATUS_NEW_ANSWER));
    
    If ($faqsObj) {
       	$block['content'] = $faqsObj->question();
       	$block['id'] = $faqsObj->faqid();
       	$block['lang_answer'] = _MB_SF_ANSWERHERE;
    } 
    return $block;
} 

?>