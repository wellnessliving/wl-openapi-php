<?php

namespace WlSdk\Wl\Profile\Attach;

class AttachElementDeleteRequest
{
    /**
     * Attachment key.
     *
     * @var string|null
     */
    public ?string $k_attach = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_attach' => $this->k_attach,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
