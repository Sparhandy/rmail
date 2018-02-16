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
 * Attachment class to handle attachments which are contained
 * in a variable.
 */
class stringAttachment extends attachment
{
    /**
     * Constructor
     *
     * @param string $data        File data
     * @param string $name        Name of attachment (filename)
     * @param string $contentType Content type of file
     * @param string $encoding    What encoding to use
     */
    public function __construct($data, $name = '', $contentType = 'application/octet-stream', $encoding = null)
    {
        $encoding = is_null($encoding) ? new Base64Encoding() : $encoding;

        parent::__construct($data, $name, $contentType, $encoding);
    }
}