<?php
namespace WlSdk\Wl\Video\Category;

class CategoryListPutRequest
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * A list of shared video category keys displayed in the order to be saved.
     * 
     * Values can be:
     * * <b>[Deprecated]</b> String keys in old format.
     * * String keys in new format.
     *
     * @var string[]|null
     */
    public ?array $a_order = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'a_order' => $this->a_order,
            ],
            static fn($v) => $v !== null
        );
    }
}
