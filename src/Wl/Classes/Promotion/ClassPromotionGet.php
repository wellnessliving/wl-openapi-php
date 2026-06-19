<?php
namespace WlSdk\Wl\Classes\Promotion;

use WlSdk\WlSdkClient;

/**
 * Returns list of promotions that can be used to pay for the class / event.
 */
class ClassPromotionGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of promotions that can be used to pay for the class / event.
     *
     * Used in the booking flow to show clients which of their existing passes or memberships cover the
     * selected class. Also returns the default promotion to pre-select so the client does not have to
     * choose manually when there is an obvious match.
     *
     * @return ClassPromotionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClassPromotionGetRequest $request): ClassPromotionGetResponse
    {
        return new ClassPromotionGetResponse($this->client->request('/Wl/Classes/Promotion/ClassPromotion.json', $request->params(), 'GET'));
    }
}
