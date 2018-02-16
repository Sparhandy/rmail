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
 * Beschreibung.
 *
 * @author Philipp Witzmann <philipp.witzmann@sh.de>
 */
class EightBitEncoding implements iEncoding
{
    /*
    * Function to "encode" data using
    * 8bit encoding.
    *
    * @param string $input Data to encode
    */
    public function encode($input)
    {
        return $input;
    }

    /**
     * Returns type
     */
    public function getType()
    {
        return '8bit';
    }
}