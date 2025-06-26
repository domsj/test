<?php

namespace X\Y;

class Z
{
    public function abc($xyz)
    {
        exec("cp " . escapeshellarg($xyz) . " .");
    }
}
