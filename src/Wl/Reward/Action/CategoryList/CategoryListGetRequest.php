<?php
namespace WlSdk\Wl\Reward\Action\CategoryList;

class CategoryListGetRequest
{
    /**
     * ID of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
