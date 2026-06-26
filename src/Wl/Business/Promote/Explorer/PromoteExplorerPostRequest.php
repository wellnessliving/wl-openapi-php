<?php

namespace WlSdk\Wl\Business\Promote\Explorer;

class PromoteExplorerPostRequest
{
    /**
     * Whether the Explorer promotion is active for the specified business/location.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Business key. Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key. Primary key in RsLocationSql.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Resource string alias to be set as a part of explorer link.
     *
     * @var string|null
     */
    public ?string $text_alias = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_active' => $this->is_active,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_alias' => $this->text_alias,
            ],
            static fn ($v) => $v !== null
        );
    }
}
