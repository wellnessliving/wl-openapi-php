<?php

namespace WlSdk\Wl\Video;

class VideoListGetResponsePage
{
    /**
     * `true` for the "next page" navigation entry. Only present on the next-page entry.
     *
     * @var bool|null
     */
    public ?bool $is_next = null;

    /**
     * `true` for the "previous page" navigation entry. Only present on the previous-page entry.
     *
     * @var bool|null
     */
    public ?bool $is_previous = null;

    /**
     * `true` if this entry represents the current page. Only present on the selected page entry.
     *
     * @var bool|null
     */
    public ?bool $is_selected = null;

    /**
     * Page number. `0` represents a skipped range (ellipsis) between non-adjacent pages.
     *
     * @var int|null
     */
    public ?int $page = null;

    /**
     * `true` if this entry represents a skipped page range (ellipsis). Only present on skip entries.
     *
     * @var bool|null
     */
    public ?bool $skip = null;

    public function __construct(array $data)
    {
        $this->is_next = isset($data['is-next']) ? (bool)$data['is-next'] : null;
        $this->is_previous = isset($data['is-previous']) ? (bool)$data['is-previous'] : null;
        $this->is_selected = isset($data['is-selected']) ? (bool)$data['is-selected'] : null;
        $this->page = isset($data['page']) ? (int)$data['page'] : null;
        $this->skip = isset($data['skip']) ? (bool)$data['skip'] : null;
    }
}
