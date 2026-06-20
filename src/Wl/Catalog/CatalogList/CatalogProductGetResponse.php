<?php
namespace WlSdk\Wl\Catalog\CatalogList;

/**
 * Response from GET
 */
class CatalogProductGetResponse
{
    /**
     * Categories with sort settings. Keys refer to shop category keys. Values refer to sort settings. Contains the
     * following structure:
     *
     * @var CatalogProductGetResponseCategorySort[]|null
     */
    public ?array $a_category_sort = null;

    /**
     * The list of products. Each element has the following keys:
     *
     * @var CatalogProductGetResponseProduct|null
     */
    public ?CatalogProductGetResponseProduct $a_product = null;

    /**
     * The currently shown element.
     *
     * @var int|null
     */
    public ?int $i_last = null;

    /**
     * Determines whether more products can be loaded.
     *
     * @var bool|null
     */
    public ?bool $is_load_more = null;

    /**
     * The cache key used to get products.
     *
     * @var string|null
     */
    public ?string $s_cache_key = null;

    public function __construct(array $data)
    {
        $this->a_category_sort = isset($data['a_category_sort']) ? array_map(static fn($item) => new CatalogProductGetResponseCategorySort((array)$item), (array)$data['a_category_sort']) : null;
        $this->a_product = isset($data['a_product']) ? new CatalogProductGetResponseProduct((array)$data['a_product']) : null;
        $this->i_last = isset($data['i_last']) ? (int)$data['i_last'] : null;
        $this->is_load_more = isset($data['is_load_more']) ? (bool)$data['is_load_more'] : null;
        $this->s_cache_key = isset($data['s_cache_key']) ? (string)$data['s_cache_key'] : null;
    }
}
