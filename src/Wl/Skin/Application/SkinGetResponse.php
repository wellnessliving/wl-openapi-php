<?php

namespace WlSdk\Wl\Skin\Application;

/**
 * Response from GET
 */
class SkinGetResponse
{
    /**
     * Skin information.
     *
     * @var array|null
     */
    public ?array $a_skin = null;

    /**
     * Determines current business account contains amount for the application customisation.
     *
     * @var bool|null
     */
    public ?bool $has_pay = null;

    /**
     * Name of the link to default application skin.
     *
     * @var string|null
     */
    public ?string $s_link = null;

    public function __construct(array $data)
    {
        $this->a_skin = isset($data['a_skin']) ? (array)$data['a_skin'] : null;
        $this->has_pay = isset($data['has_pay']) ? (bool)$data['has_pay'] : null;
        $this->s_link = isset($data['s_link']) ? (string)$data['s_link'] : null;
    }
}
