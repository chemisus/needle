<?php

namespace Needle;

interface Factory
{
    /**
     * @param string $class
     * @return object
     */
    public function instance($class);
}
