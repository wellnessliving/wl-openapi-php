<?php

namespace WlSdk\Core\Testing\Postman;

class HashPostRequest
{
    /**
     * Algorithm for encoding string from `s_original`. Default is `sha3-512`.
     *
     * @var string|null
     */
    public ?string $s_algorithm = null;

    /**
     * Original string
     *
     * @var string|null
     */
    public ?string $s_original = null;

    public function params(): array
    {
        return array_filter(
            [
            's_algorithm' => $this->s_algorithm,
            's_original' => $this->s_original,
            ],
            static fn ($v) => $v !== null
        );
    }
}
