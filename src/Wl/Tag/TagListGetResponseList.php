<?php

namespace WlSdk\Wl\Tag;

class TagListGetResponseList
{
    /**
     * The sort order of the tag, starts from zero. A tag sent without it (or with `null`) keeps the sort order
     *   it has now, and a new tag sent without it goes to the end of the list. A new tag sent with it is put at
     * that
     *   position: the tags of the business that are not in the list and have the same or a greater sort order move
     *   down by one. The tags that are in the list are not moved.
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
