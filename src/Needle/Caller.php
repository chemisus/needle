<?php

namespace Needle;

interface Caller
{
    /**
     * @param callable $callback
     * @return mixed
     */
    public function call(callable $callback);
}
