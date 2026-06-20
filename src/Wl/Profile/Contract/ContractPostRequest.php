<?php

namespace WlSdk\Wl\Profile\Contract;

class ContractPostRequest
{
    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the selected purchase item.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * The key of the current user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * `false` if user has not agreed to use Electronic Signatures,
     * `true` if user has agreed to use Electronic Signatures,
     * `null` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * An encoded version of the client signature.
     * This is different from the signature needed to communicate with an endpoint.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_purchase_item' => $this->k_purchase_item,
            'uid' => $this->uid,
            'is_agree' => $this->is_agree,
            's_signature' => $this->s_signature,
            ],
            static fn ($v) => $v !== null
        );
    }
}
