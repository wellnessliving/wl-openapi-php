<?php

namespace WlSdk\Wl\Location;

class ListGetRequest
{
    /**
     * A list of business keys.
     * You can specify this instead of {@link \WlSdk\Wl\Location\ListEndpoint} to load data for many businesses in
     * one call.
     *
     * @var string[]|null
     */
    public ?array $a_business = null;

    /**
     * The business key used internally by WellnessLiving.
     *
     * In case when passed regular or franchisee business returns only locations for requested business.
     * In case when passed franchisor business returns locations for all franchisees of this franchisor.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The primary keys of the selected businesses.
     * You can specify this instead of {@link \WlSdk\Wl\Location\ListEndpoint} to load data for many businesses in
     * one call.
     *
     * This is the same as `$a_business`, but serialized with JSON (to make the URL shorter).
     *
     * @var string|null
     */
    public ?string $s_business = null;

    /**
     * Determines whether removed locations should be returned.
     *
     * @var bool|null
     */
    public ?bool $show_remove = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_business' => $this->a_business,
            'k_business' => $this->k_business,
            's_business' => $this->s_business,
            'show_remove' => $this->show_remove,
            ],
            static fn ($v) => $v !== null
        );
    }
}
