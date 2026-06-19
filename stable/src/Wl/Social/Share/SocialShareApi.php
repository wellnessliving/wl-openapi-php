<?php
namespace WlSdk\Wl\Social\Share;

use WlSdk\WlSdkClient;

/**
 * Saves the share post data and returns the secret key for the shared object.
 */
class SocialShareApi
{
    /**
     * The primary keys of the shared objects. Depends on `id_share_object`.
     * If `id_share_object` is:
     * * [ShareObjectSid::BOOK](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the
     * visit. 
     * * [ShareObjectSid::LOCATION](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the
     * location. 
     * * [ShareObjectSid::PURCHASE](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the
     * purchase. 
     * * [ShareObjectSid::REVIEW](#/components/schemas/Wl.Social.Share.ShareObjectSid) - each value is key of the
     * review.
     *
     * @var int[]|null
     */
    public ?array $a_key = null;

    /**
     * The id of the social network.
     *
     * @var int|null
     */
    public ?int $id_share_destination = null;

    /**
     * The id of type object for share post to social network.
     *
     * @var int|null
     */
    public ?int $id_share_object = null;

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

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the share post data and returns the secret key for the shared object.
     *
     * Records that the user has shared the specified objects (purchases, bookings, locations, or
     * reviews) to a social network, and returns a secret token that can be appended to the
     * destination URL to deep-link directly to the shared items.
     *
     * @return SocialShareApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): SocialShareApiPostResponse
    {
        return new SocialShareApiPostResponse($this->client->request('/Wl/Social/Share/SocialShare.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_key' => $this->a_key,
            'id_share_destination' => $this->id_share_destination,
            'id_share_object' => $this->id_share_object,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
