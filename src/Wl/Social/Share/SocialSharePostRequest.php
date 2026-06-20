<?php
namespace WlSdk\Wl\Social\Share;

class SocialSharePostRequest
{
    /**
     * The primary keys of the shared objects. Depends on `id_share_object`.
     * If `id_share_object` is:
     * * {@link \WlSdk\Wl\Social\Share\ShareObjectSid} - each value is key of the visit.
     * * {@link \WlSdk\Wl\Social\Share\ShareObjectSid} - each value is key of the location.
     * * {@link \WlSdk\Wl\Social\Share\ShareObjectSid} - each value is key of the purchase.
     * * {@link \WlSdk\Wl\Social\Share\ShareObjectSid} - each value is key of the review.
     *
     * @var \WlSdk\Wl\Social\Share\ShareObjectSid[]|null
     */
    public ?array $a_key = null;

    /**
     * The id of the social network.
     *
     * @var \WlSdk\ASocialSid|null
     */
    public ?\WlSdk\ASocialSid $id_share_destination = null;

    /**
     * The id of type object for share post to social network.
     *
     * @var \WlSdk\Wl\Social\Share\ShareObjectSid|null
     */
    public ?\WlSdk\Wl\Social\Share\ShareObjectSid $id_share_object = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_key' => $this->a_key,
            'id_share_destination' => $this->id_share_destination?->value,
            'id_share_object' => $this->id_share_object?->value,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
