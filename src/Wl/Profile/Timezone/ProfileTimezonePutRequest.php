<?php

namespace WlSdk\Wl\Profile\Timezone;

class ProfileTimezonePutRequest
{
    /**
     * Key of the business, in which user selected timezone.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * If a timezone deprecation validation is needed.
     *
     * `true` if required, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_deprecate_restrict = null;

    /**
     * Key of the timezone, which user selected to see site in.
     *
     * @var string|null
     */
    public ?string $k_timezone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_deprecate_restrict' => $this->is_deprecate_restrict,
            'k_timezone' => $this->k_timezone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
