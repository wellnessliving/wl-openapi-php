<?php

namespace WlSdk\Wl\Tag;

class TagListPostRequest
{
    /**
     * The business key of the tags.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    /**
     * List of tags in json format.
     * See `a_list` for the structure of each tag.
     * `null` to use `a_list` for getting the tag list.
     *
     * @var string|null
     */
    public ?string $json_list = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_list' => $this->a_list,
            'json_list' => $this->json_list,
            ],
            static fn ($v) => $v !== null
        );
    }
}
