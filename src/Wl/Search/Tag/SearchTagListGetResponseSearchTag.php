<?php
namespace WlSdk\Wl\Search\Tag;

class SearchTagListGetResponseSearchTag
{
    /**
     * The business category that can use this search tag.
     * One of the {@link \WlSdk\RsBusinessCategorySid} constants.
     * This can be found in the business information found in [DataApi](/Wl/Business/Data.json).
     *
     * @var int|null
     */
    public ?int $id_business_category = null;

    /**
     * The key of the tag. The primary key in the table of tags.
     *
     * @var string|null
     */
    public ?string $k_search_tag = null;

    /**
     * The name of the tag.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_business_category = isset($data['id_business_category']) ? (int)$data['id_business_category'] : null;
        $this->k_search_tag = isset($data['k_search_tag']) ? (string)$data['k_search_tag'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
