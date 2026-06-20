<?php

namespace WlSdk\Wl\Family\Relation;

class Relation72GetRequest
{
    /**
     * ID of the user behavior flow.
     * One of {@link \WlSdk\Wl\User\Tracking\FlowSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\User\Tracking\FlowSid
     */
    public ?int $id_flow = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user whose relationships are being assessed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_flow' => $this->id_flow,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
