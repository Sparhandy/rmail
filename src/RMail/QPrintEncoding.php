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
 * Quoted Printable Encoding class.
 *
 * @author Philipp Witzmann <philipp.witzmann@sh.de>
 */
class QPrintEncoding implements iEncoding
{
    /*
    * Function to encode data using
    * quoted-printable encoding.
    *
    * @param string $input Data to encode
    */
    public function encode($input)
    {
        // Replace non printables
        $input    = preg_replace('/([^\x20\x21-\x3C\x3E-\x7E\x0A\x0D])/e', 'sprintf("=%02X", ord("\1"))', $input);
        $inputLen = strlen($input);
        $outLines = [];
        $output   = '';

        $lines = preg_split('/\r?\n/', $input);

        // Walk through each line
        for ($i = 0; $i < count($lines); $i++)
        {
            // Is line too long ?
            if (strlen($lines[$i]) > $lineMax)
            {
                $outLines[] = substr($lines[$i], 0, $lineMax - 1) . "="; // \r\n Gets added when lines are imploded
                $lines[$i]  = substr($lines[$i], $lineMax - 1);
                $i--; // Ensure this line gets redone as we just changed it
            } else
            {
                $outLines[] = $lines[$i];
            }
        }

        // Convert trailing whitespace
        $output = preg_replace('/(\x20+)$/me', 'str_replace(" ", "=20", "\1")', $outLines);

        return implode("\r\n", $output);
    }

    /**
     * Returns type
     */
    public function getType()
    {
        return 'quoted-printable';
    }
}