<?php
namespace WlSdk\Wl\Video\Category;

class CategoryListGetRequest
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * If `true`, groups that are missing videos won't be displayed. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_skip_empty_group = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The filter phrase used to filter categories by name.
     *
     * @var string|null
     */
    public ?string $text_filter = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'is_skip_empty_group' => $this->is_skip_empty_group,
            'k_business' => $this->k_business,
            'text_filter' => $this->text_filter,
            ],
            static fn($v) => $v !== null
        );
    }
}
