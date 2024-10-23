<?php

/**
 * Verifies that a @throws tag exists for a function that throws exceptions.
 * Verifies the number of @throws tags and the number of throw tokens matches.
 * Verifies the exception type.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2012 Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/PHPCSStandards/licence.txt BSD 
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */


/**
 * Function 2calAdditionOfTwoNumbers - [DESCRIPTION]
 * 
 * @param Int $a - [DESCRIPTION]
 * @param Int $b - [DESCRIPTION]
 * 
 * @return int
 */
function add_no($a, $b)
{
    return $a + $b;
}
