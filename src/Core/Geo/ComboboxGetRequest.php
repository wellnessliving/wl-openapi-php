<?php
namespace WlSdk\Core\Geo;

class ComboboxGetRequest
{
    /**
     * The locale ID used as a filter. The locale is generally a country.
     * 
     * One of the {@link \WlSdk\Core\Locale\LocaleSid} constants.
     * 
     * This will be `0` if all locations are searched.
     *
     * @var int|null
     */
    public ?int $id_locale = null;

    /**
     * The city name (or a fragment of the city name) used for the search.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_locale' => $this->id_locale,
            's_value' => $this->s_value,
            ],
            static fn($v) => $v !== null
        );
    }
}
