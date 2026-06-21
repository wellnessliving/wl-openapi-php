<?php

namespace WlSdk\Core\Geo\Region;

class RegionGetRequest
{
    /**
     * The locale ID to find regions for. One of the {@link \WlSdk\Core\Locale\LocaleSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\LocaleSid
     */
    public ?int $id_locale = null;

    /**
     * Determines whether to get regions for all locales.
     *
     * If `true`, this will get regions for all locales. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_locale_all = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_locale' => $this->id_locale,
            'is_locale_all' => $this->is_locale_all,
            ],
            static fn ($v) => $v !== null
        );
    }
}
