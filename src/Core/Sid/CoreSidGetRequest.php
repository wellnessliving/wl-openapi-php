<?php

namespace WlSdk\Core\Sid;

class CoreSidGetRequest
{
    /**
     * Name of the Sid class to get list from.
     *
     * Should be a fully qualified class name.
     *
     * @var string|null
     */
    public ?string $s_class_name = null;

    public function params(): array
    {
        return array_filter(
            [
            's_class_name' => $this->s_class_name,
            ],
            static fn ($v) => $v !== null
        );
    }
}
