<?php

namespace Needle;

interface Invoker
{
    /**
     * @param object $object
     * @param string $method
     * @return mixed
     */
    public function invoke($object, $method);
}
