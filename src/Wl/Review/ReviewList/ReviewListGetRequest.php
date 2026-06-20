<?php
namespace WlSdk\Wl\Review\ReviewList;

class ReviewListGetRequest
{
    /**
     * If not specified, this request will return all review keys. If specified, this request will return detailed
     * reviews
     * (10 per page).
     * 
     * This will be `null` if you only need to load the keys of the review.
     *
     * @var int|null
     */
    public ?int $i_page = null;

    /**
     * The order in which the review should be arranged. One of the {@link
     * \WlSdk\Wl\Review\ReviewList\ReviewOrderSid} constants.
     * 
     * If not passed use default order {@link \WlSdk\Wl\Review\ReviewList\ReviewOrderSid}.
     *
     * @var \WlSdk\Wl\Review\ReviewList\ReviewOrderSid|null
     */
    public ?\WlSdk\Wl\Review\ReviewList\ReviewOrderSid $id_order = null;

    /**
     * Business key. If not specified, location key needs to be specified.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location to show reviews for. If not specified, business key should be specified.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user's key. WellnessLiving allows staff to check low-rated reviews before posting them. Staff members
     * can see
     * all reviews. Clients can only see checked reviews.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_page' => $this->i_page,
            'id_order' => $this->id_order?->value,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
