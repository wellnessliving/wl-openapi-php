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
     * The tag list.
     *
     * Each element has the next structure:
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    /**
     * List of tags in json format.
     * See [TagListApi::$a_list](/Wl/Tag/TagList.json) for the structure of each tag.
     * `null` to use [TagListApi::$a_list](/Wl/Tag/TagList.json) for getting the tag list.
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
