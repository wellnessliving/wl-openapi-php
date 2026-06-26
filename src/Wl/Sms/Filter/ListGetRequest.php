<?php

namespace WlSdk\Wl\Sms\Filter;

class ListGetRequest
{
    /**
     * The ID of the region. One of FilterMessage::REGION
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_locale' => $this->id_locale,
            ],
            static fn ($v) => $v !== null
        );
    }
}
