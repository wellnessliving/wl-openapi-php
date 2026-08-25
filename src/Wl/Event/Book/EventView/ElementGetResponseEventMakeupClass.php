<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseEventMakeupClass
{
    /**
     * Class key.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Class title. `null` if title is unavailable for the selected language.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
