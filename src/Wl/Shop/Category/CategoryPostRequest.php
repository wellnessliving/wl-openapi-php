<?php

namespace WlSdk\Wl\Shop\Category;

class CategoryPostRequest
{
    /**
     * The key of the business to get shop categories for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Title of new category.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
