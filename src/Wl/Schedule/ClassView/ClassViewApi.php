<?php
namespace WlSdk\Wl\Schedule\ClassView;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about class.
 */
class ClassViewApi
{
    /**
     * A list of sessions to get information for. Every element has the following keys:
     * 
     * 
     * `null` if requesting a single session.
     *
     * @var array[]|null
     */
    public ?array $a_session_request = null;

    /**
     * The date/time of the session.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * Key of the business in which the action is performed.
     * 
     * `null` if key of the business was not passed.
     * 
     * Key of the business is required if [ClassViewApi](/Wl/Schedule/ClassView/ClassView.json) was passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The class period key.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * A list of sessions to get information for.
     * A serialized array. See `a_session_request` for the array structure.
     * Serialization and sending by POST is necessary to send big lists.
     *
     * @var string|null
     */
    public ?string $s_session_request = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about class.
     *
     * Returns detailed information about one or more class sessions, including staff, location,
     * assigned assets, virtual location links, visit counts, and booking availability. Supports
     * single-session mode for one class period or multi-session mode for batch lookups.
     *
     * @return ClassViewApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ClassViewApiGetResponse
    {
        return new ClassViewApiGetResponse($this->client->request('/Wl/Schedule/ClassView/ClassView.json', $this->params(), 'GET'));
    }

    /**
     * Retrieves information about classes.
     *
     * A POST-method alternative to `get()` for multi-session batch lookups
     * where the session list is too long to encode in a GET query string. The session list is
     * provided as a JSON-encoded string in the request body.
     *
     * @return ClassViewApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): ClassViewApiPostResponse
    {
        return new ClassViewApiPostResponse($this->client->request('/Wl/Schedule/ClassView/ClassView.json', $this->params(), 'POST'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'a_session_request' => $this->a_session_request,
            'dt_date' => $this->dt_date,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid' => $this->uid,
            's_session_request' => $this->s_session_request,
            ],
            static fn($v) => $v !== null
        );
    }
}
