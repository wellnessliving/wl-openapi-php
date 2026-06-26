<?php

namespace WlSdk\Wl\Resource\Type\Edit;

class EditPostRequest
{
    /**
     * Asset category ID from {@link \WlSdk\Wl\Resource\ResourceCategoryEnum}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Resource\ResourceCategoryEnum
     */
    public ?int $id_category = null;

    /**
     * ID of current business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Title for asset category. For post.
     *
     * @var string|null
     */
    public ?string $s_title_post = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_category' => $this->id_category,
            'k_business' => $this->k_business,
            's_title_post' => $this->s_title_post,
            ],
            static fn ($v) => $v !== null
        );
    }
}
