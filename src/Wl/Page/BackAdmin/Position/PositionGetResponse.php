<?php

namespace WlSdk\Wl\Page\BackAdmin\Position;

/**
 * Response from GET
 */
class PositionGetResponse
{
    /**
     * Value of left property.
     *
     * @var string|null
     */
    public ?string $i_left = null;

    /**
     * Value of top property.
     *
     * @var string|null
     */
    public ?string $i_top = null;

    public function __construct(array $data)
    {
        $this->i_left = isset($data['i_left']) ? (string)$data['i_left'] : null;
        $this->i_top = isset($data['i_top']) ? (string)$data['i_top'] : null;
    }
}
