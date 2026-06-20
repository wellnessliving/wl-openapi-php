<?php

namespace WlSdk\Wl\Profile\Attach;

class AttachListGetRequest
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The filter phrase to filter attach by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
