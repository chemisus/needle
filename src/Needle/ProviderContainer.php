<?php

namespace Needle;

interface ProviderContainer
{
    /**
     * @param string $key
     * @return mixed
     */
    public function provide($key);

    /**
     * @param string[] $keys
     * @return mixed
     */
    public function provideAll(array $keys);
}
