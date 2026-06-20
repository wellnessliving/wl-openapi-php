<?php
namespace WlSdk\Wl\Family\Relation;

class Relation72PostRequest
{
    /**
     * ID of the user behavior flow.
     * One of {@link \WlSdk\Wl\User\Tracking\FlowSid} constants.
     *
     * @var \WlSdk\Wl\User\Tracking\FlowSid|null
     */
    public ?\WlSdk\Wl\User\Tracking\FlowSid $id_flow = null;

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

    /**
     * The new relationship to be added to user, specified with [RelationApi](/Wl/Family/Relation/Relation.json):
     *
     * @var array|null
     */
    public ?array $a_new = null;

    /**
     * ID of source mode.
     * One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var \WlSdk\Wl\Mode\ModeSid|null
     */
    public ?\WlSdk\Wl\Mode\ModeSid $id_mode = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_flow' => $this->id_flow?->value,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_new' => $this->a_new,
            'id_mode' => $this->id_mode?->value,
            ],
            static fn($v) => $v !== null
        );
    }
}
