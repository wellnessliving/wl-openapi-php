<?php

namespace WlSdk\Core\Cache\CachePhp;

class InvalidateGetRequest
{
    /**
     * CID of a PHP cache file to invalidate.
     *
     * One of {@link \WlSdk\Core\Cache\CachePhp\CachePhpAbstract} subclasses.
     *
     * @var int|null
     * @see \WlSdk\Core\Cache\CachePhp\CachePhpAbstract
     */
    public ?int $cid_class = null;

    /**
     * Protection hash.
     *
     * @var string|null
     */
    public ?string $s_hash = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_class' => $this->cid_class,
            's_hash' => $this->s_hash,
            ],
            static fn ($v) => $v !== null
        );
    }
}
