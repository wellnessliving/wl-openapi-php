<?php

namespace WlSdk\Wl\Profile\Waiver;

/**
 * Response from GET
 */
class WaiverGetResponse
{
    /**
     * List of subscribed waivers. Every element has next keys:
     *
     * @var WaiverGetResponseWaiver[]|null
     */
    public ?array $a_waiver = null;

    /**
     * Age of minor which documents can be signed by parent or legal guardian.
     *
     * @var int|null
     */
    public ?int $i_minor_age = null;

    public function __construct(array $data)
    {
        $this->a_waiver = isset($data['a_waiver']) ? array_map(static fn ($item) => new WaiverGetResponseWaiver((array)$item), (array)$data['a_waiver']) : null;
        $this->i_minor_age = isset($data['i_minor_age']) ? (int)$data['i_minor_age'] : null;
    }
}
