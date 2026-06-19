<?php
namespace WlSdk\Wl\Profile\Attach;

use WlSdk\WlSdkClient;

/**
 * Returns the list of file attachments for the specified client in the given business.
 */
class AttachListApi
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The filter phrase to filter attach by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    /**
     * Business key.
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
     * Returns the list of file attachments for the specified client in the given business.
     *
     * Returns all file attachments uploaded to the client's profile. In backend mode the result
     *  also includes private attachments that are hidden from the client-facing view, with
     *  additional metadata such as source, description, and a delete permission flag.
     *
     * @return AttachListApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AttachListApiGetResponse
    {
        return new AttachListApiGetResponse($this->client->request('/Wl/Profile/Attach/AttachList.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
