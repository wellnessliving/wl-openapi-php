<?php

namespace WlSdk\Wl\Tag;

/**
 * Response from GET
 */
class TagListGetResponse
{
    /**
     * No description.
     *
     * @var TagListGetResponseList[]|null
     */
    public ?array $a_list = null;

    /**
     * Whether a business did set up a penalty fee for failed automatic payments.
     *
     * @var bool|null
     */
    public ?bool $has_fee = null;

    /**
     * Whether a business did set up surcharges.
     *
     * @var bool|null
     */
    public ?bool $has_surcharge = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new TagListGetResponseList((array)$item), (array)$data['a_list']) : null;
        $this->has_fee = isset($data['has_fee']) ? (bool)$data['has_fee'] : null;
        $this->has_surcharge = isset($data['has_surcharge']) ? (bool)$data['has_surcharge'] : null;
    }
}
