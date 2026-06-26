<?php

namespace WlSdk\Wl\Business\Policy;

class CancelPolicyServiceGetRequest
{
    /**
     * Key of a business penalty policy.
     *
     * @var int|null
     */
    public ?int $i_index = null;

    /**
     * Business penalty policy to edit in json format.
     *
     * @var string|null
     */
    public ?string $json_penalty_edit = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_index' => $this->i_index,
            'json_penalty_edit' => $this->json_penalty_edit,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
