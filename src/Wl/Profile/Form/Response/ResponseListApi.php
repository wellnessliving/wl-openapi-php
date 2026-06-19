<?php
namespace WlSdk\Wl\Profile\Form\Response;

use WlSdk\WlSdkClient;

/**
 * Returns the lists of completed and pending quiz responses for the specified user and business.
 */
class ResponseListApi
{
    /**
     * Defines whether completed forms should not be included in result list of forms.
     * 
     * `true` to exclude completed forms from result.
     * `false` to include completed forms to result.
     *
     * @var bool|null
     */
    public ?bool $hide_completed = null;

    /**
     * Defines whether optional uncompleted forms should not be included in result list of forms.
     * 
     * `true` to exclude optional uncompleted forms from result.
     * `false` to include optional uncompleted forms to result.
     *
     * @var bool|null
     */
    public ?bool $hide_optional = null;

    /**
     * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to show information for.
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
     * Returns the lists of completed and pending quiz responses for the specified user and business.
     *
     * Returns the client's completed, draft, and pending form responses for the business, sorted
     *  newest first. Also provides permission flags that control which actions the current user may
     *  perform on each response.
     *
     * @return ResponseListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): ResponseListApiGetResponse
    {
        return new ResponseListApiGetResponse($this->client->request('/Wl/Profile/Form/Response/ResponseList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'hide_completed' => $this->hide_completed,
            'hide_optional' => $this->hide_optional,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
