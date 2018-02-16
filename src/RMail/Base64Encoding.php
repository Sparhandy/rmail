<?php
/**
 * o------------------------------------------------------------------------------o
 * | This package is licensed under the Phpguru license. A quick summary is       |
 * | that for commercial use, there is a small one-time licensing fee to pay. For |
 * | registered charities and educational institutes there is a reduced license   |
 * | fee available. You can read more  at:                                        |
 * |                                                                              |
 * |                  http://www.phpguru.org/static/license.html                  |
 * o------------------------------------------------------------------------------o
 *
 * � Copyright 2008,2009 Richard Heyes
 */
namespace RMail;

/**
 * Base64 Encoding class
 */
class Base64Encoding implements iEncoding
{
    /*
    * Function to encode data using
    * base64 encoding.
    *
    * @param string $input Data to encode
    */
    public function encode($input)
    {
        return rtrim(chunk_split(base64_encode($input), 76, defined('MAIL_MIME_PART_CRLF') ? MAIL_MIME_PART_CRLF : "\r\n"));
    }

    /**
     * Returns type
     */
    public function getType()
    {
        return 'base64';
    }
}