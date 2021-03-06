<?php
namespace ZxFiles;

trait ByteParser
{
    function parseByte($string, $offset)
    {
        return ord(substr($string, $offset, 1));
    }

    function parseWord($string, $offset)
    {
        return ord(substr($string, $offset, 1)) + ord(substr($string, $offset + 1, 1)) * 0x100;
    }

    function parseWordBigEndian($string, $offset)
    {
        return ord(substr($string, $offset + 1, 1)) + ord(substr($string, $offset, 1)) * 0x100;
    }
}
