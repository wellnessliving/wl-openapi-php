<?php
namespace WlSdk\Wl\Tag;

class TagListPostResponseList
{
    /**
     * The sort order of the tag.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * The tag key.
     *
     * @var string|null
     */
    public ?string $k_tag = null;

    /**
     * The tag title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->k_tag = isset($data['k_tag']) ? (string)$data['k_tag'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
