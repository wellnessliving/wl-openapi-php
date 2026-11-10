<?php

namespace WlSdk\Wl\Catalog\Terms;

class TermsPostRequest
{
    /**
     * From where request comes. One of {@link \WlSdk\RsPlaceSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPlaceSid
     */
    public ?int $id_place = null;

    /**
     * Cart items to apply the action to. Every element has next fields:
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * Data for Quick Buy. Empty if the purchase is not in Quick Buy mode. Structure of the array:
     *
     * @var array|null
     */
    public ?array $a_quick_config = null;

    /**
     * Action to perform. One of {@link \WlSdk\Wl\Catalog\Terms\TermsActionSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Catalog\Terms\TermsActionSid
     */
    public ?int $id_terms_action = null;

    /**
     * Business the cart belongs to.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_place' => $this->id_place,
            'a_item' => $this->a_item,
            'a_quick_config' => $this->a_quick_config,
            'id_terms_action' => $this->id_terms_action,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
