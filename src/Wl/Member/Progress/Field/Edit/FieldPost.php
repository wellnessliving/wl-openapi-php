<?php
namespace WlSdk\Wl\Member\Progress\Field\Edit;

use WlSdk\WlSdkClient;

/**
 * Saves field data.
 */
class FieldPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves field data.
     *
     * Updates the configuration of the specified progress field, validating measurement unit, type, and title
     * constraints before persisting the changes. Logs the change when the field data is modified.
     *
     * @return FieldPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(FieldPostRequest $request): FieldPostResponse
    {
        return new FieldPostResponse($this->client->request('/Wl/Member/Progress/Field/Edit/Field.json', $request->params(), 'POST'));
    }
}
