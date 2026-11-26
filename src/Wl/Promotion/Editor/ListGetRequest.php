<?php

namespace WlSdk\Wl\Promotion\Editor;

class ListGetRequest
{
    /**
     * The optional columns whose data is wanted. Empty to read the default columns only.
     *
     * Each item is one of the {@link \WlSdk\Wl\Promotion\Editor\ListColumnEnum} cases. The data of a column that
     * is not asked is not read, and its
     * fields are not in the rows.
     *
     * @var int[]|null
     */
    public ?array $a_column = null;

    /**
     * The service categories to show. `null` to show every category.
     *
     * Each item is one of the {@link \WlSdk\RsProgramCategorySid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_program_category = null;

    /**
     * The types of the Purchase Options to show. `null` to show every type.
     *
     * Each item is one of the {@link \WlSdk\RsProgramTypeSid} constants. A session pass is the three types
     * `LIMIT`, `PASS` and
     * `DURATION` together.
     *
     * @var int[]|null
     */
    public ?array $a_program_type = null;

    /**
     * The keys of the store categories to show. `null` to show every store category.
     *
     * Each item is the key of a store category of the business. The Purchase Options that are in no store category
     * are
     * added by {@link \WlSdk\Wl\Promotion\Editor\ListEndpoint}.
     *
     * @var string[]|null
     */
    public ?array $a_shop_category = null;

    /**
     * The number of the page to read, the first page is 1.
     *
     * @var int|null
     */
    public ?int $i_page = 1;

    /**
     * The number of the Purchase Options on a page.
     *
     * @var int|null
     */
    public ?int $i_page_size = 25;

    /**
     * The sort of the list. One of the {@link \WlSdk\Wl\Promotion\Editor\ListSortEnum} cases.
     *
     * @var int|null
     * @see \WlSdk\Wl\Promotion\Editor\ListSortEnum
     */
    public ?int $id_sort = 1;

    /**
     * The status of the Purchase Options to show. One of the {@link \WlSdk\Wl\Promotion\Editor\ListStatusEnum}
     * cases.
     *
     * @var int|null
     * @see \WlSdk\Wl\Promotion\Editor\ListStatusEnum
     */
    public ?int $id_status = 3;

    /**
     * Whether the Purchase Options that are in no store category are shown in addition to the requested store
     * categories. It is the only filter by the store categories when
     * {@link \WlSdk\Wl\Promotion\Editor\ListEndpoint} is `null`.
     *
     * @var bool|null
     */
    public ?bool $is_shop_category_none = null;

    /**
     * Whether the list is sorted from the last to the first.
     *
     * @var bool|null
     */
    public ?bool $is_sort_desc = null;

    /**
     * The key of the business whose Purchase Options are listed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location whose Purchase Options are shown. `null` to show the Purchase Options of every
     * location.
     *
     * The Purchase Options that are not limited to any location are always shown.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The words to search in the titles of the Purchase Options, and the beginning of their barcodes. `null` to
     * show
     * every Purchase Option.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_column' => $this->a_column,
            'a_program_category' => $this->a_program_category,
            'a_program_type' => $this->a_program_type,
            'a_shop_category' => $this->a_shop_category,
            'i_page' => $this->i_page,
            'i_page_size' => $this->i_page_size,
            'id_sort' => $this->id_sort,
            'id_status' => $this->id_status,
            'is_shop_category_none' => $this->is_shop_category_none,
            'is_sort_desc' => $this->is_sort_desc,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
