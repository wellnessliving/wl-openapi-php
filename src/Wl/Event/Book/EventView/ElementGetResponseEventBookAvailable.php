<?php

namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseEventBookAvailable
{
    /**
     * Date/time when the session starts. In UTC.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Class session primary keys.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    public function __construct(array $data)
    {
        $this->dt_date = isset($data['dt_date']) ? (string)$data['dt_date'] : null;
        $this->k_class_period = isset($data['k_class_period']) ? (string)$data['k_class_period'] : null;
    }
}
