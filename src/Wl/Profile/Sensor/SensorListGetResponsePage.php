<?php

namespace WlSdk\Wl\Profile\Sensor;

class SensorListGetResponsePage
{
    /**
     * Page number.
     *
     * @var int|null
     */
    public ?int $page = null;

    /**
     * Whether the page is current.
     *
     * @var bool|null
     */
    public ?bool $is_selected = null;

    /**
     * Whether the page is previous.
     *
     * @var bool|null
     */
    public ?bool $is_previous = null;

    /**
     * Whether the page is next.
     *
     * @var bool|null
     */
    public ?bool $is_next = null;

    /**
     * Code to execute after button is clicked.
     *
     * @var string|null
     */
    public ?string $onclick = null;

    public function __construct(array $data)
    {
        $this->page = isset($data['page']) ? (int)$data['page'] : null;
        $this->is_selected = isset($data['is_selected']) ? (bool)$data['is_selected'] : null;
        $this->is_previous = isset($data['is_previous']) ? (bool)$data['is_previous'] : null;
        $this->is_next = isset($data['is_next']) ? (bool)$data['is_next'] : null;
        $this->onclick = isset($data['onclick']) ? (string)$data['onclick'] : null;
    }
}
