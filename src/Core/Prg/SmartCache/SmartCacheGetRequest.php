<?php

namespace WlSdk\Core\Prg\SmartCache;

class SmartCacheGetRequest
{
    /**
     * `true` if use redirect, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_redirect = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_redirect' => $this->is_redirect,
            ],
            static fn ($v) => $v !== null
        );
    }
}
