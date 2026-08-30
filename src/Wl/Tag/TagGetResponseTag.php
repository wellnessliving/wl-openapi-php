<?php

namespace WlSdk\Wl\Tag;

class TagGetResponseTag
{
    /**
     * Bookable assets assigned to the tag. Each element has the next structure:
     *
     * @var TagGetResponseTagAsset|null
     */
    public ?TagGetResponseTagAsset $a_asset = null;

    /**
     * Classes and events assigned to the tag. Each element has the next structure:
     *
     * @var TagGetResponseTagClass|null
     */
    public ?TagGetResponseTagClass $a_class = null;

    /**
     * Gift cards assigned to the tag. Each element has the next structure:
     *
     * @var TagGetResponseTagCoupon|null
     */
    public ?TagGetResponseTagCoupon $a_coupon = null;

    /**
     * Purchase options (passes and memberships) assigned to the tag. Each element has the next structure:
     *
     * @var TagGetResponseTagPromotion|null
     */
    public ?TagGetResponseTagPromotion $a_promotion = null;

    /**
     * Appointment types assigned to the tag. Each element has the next structure:
     *
     * @var TagGetResponseTagService|null
     */
    public ?TagGetResponseTagService $a_service = null;

    /**
     * Store products assigned to the tag. Each element has the next structure:
     *
     * @var TagGetResponseTagProduct|null
     */
    public ?TagGetResponseTagProduct $a_product = null;

    /**
     * The sort order of the tag.
     *
     * @var int|null
     */
    public ?int $i_sort = null;

    /**
     * The tag title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_asset = isset($data['a_asset']) ? new TagGetResponseTagAsset((array)$data['a_asset']) : null;
        $this->a_class = isset($data['a_class']) ? new TagGetResponseTagClass((array)$data['a_class']) : null;
        $this->a_coupon = isset($data['a_coupon']) ? new TagGetResponseTagCoupon((array)$data['a_coupon']) : null;
        $this->a_promotion = isset($data['a_promotion']) ? new TagGetResponseTagPromotion((array)$data['a_promotion']) : null;
        $this->a_service = isset($data['a_service']) ? new TagGetResponseTagService((array)$data['a_service']) : null;
        $this->a_product = isset($data['a_product']) ? new TagGetResponseTagProduct((array)$data['a_product']) : null;
        $this->i_sort = isset($data['i_sort']) ? (int)$data['i_sort'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
