<?php
namespace WlSdk\Wl\Member\Progress\Field\Edit;

use WlSdk\WlSdkClient;

/**
 * Returns field data.
 */
class Field
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns field data.
     *
     * Loads the configuration of the specified progress field for the given business, including its type,
     * measurement unit, visibility settings, and title, and populates the result properties accordingly.
     *
     * @return FieldGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(FieldGetRequest $request): FieldGetResponse
    {
        return new FieldGetResponse($this->client->request('/Wl/Member/Progress/Field/Edit/Field.json', $request->params(), 'GET'));
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
