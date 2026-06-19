<?php
namespace WlSdk\Wl\Gym\Visit;

use WlSdk\WlSdkClient;

/**
 * Records a gym visit for the specified client at the given date and time.
 */
class VisitAddPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Records a gym visit for the specified client at the given date and time.
     *
     * Validates access and input, creates a visit record for the client at the specified location, optionally
     * applies a membership promotion if payment is required, and returns the catalog URL if no promotion was
     * found and payment was requested.
     *
     * @return VisitAddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(VisitAddPostRequest $request): VisitAddPostResponse
    {
        return new VisitAddPostResponse($this->client->request('/Wl/Gym/Visit/VisitAdd.json', $request->params(), 'POST'));
    }
}
