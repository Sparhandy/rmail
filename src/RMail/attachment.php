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
 * � Copyright 2008,2009 Richard Heyes
 */

namespace RMail;

/**
 * Attachment classes
 */
class attachment
{
    /**
     * Data of attachment
     *
     * @var string
     */
    public $data;

    /**
     * Name of attachment (filename)
     *
     * @var string
     */
    public $name;

    /**
     * Content type of attachment
     *
     * @var string
     */
    public $contentType;

    /**
     * Encoding type of attachment
     *
     * @var iEncoding
     */
    public $encoding;

    /**
     * Constructor
     *
     * @param string    $data File data
     * @param string    $name Name of attachment (filename)
     * @param string    $contentType Content type of attachment
     * @param iEncoding $encoding Encoding type to use
     */
    public function __construct($data, $name, $contentType, iEncoding $encoding)
    {
        $this->data        = $data;
        $this->name        = $name;
        $this->contentType = $contentType;
        $this->encoding    = $encoding;
    }
}