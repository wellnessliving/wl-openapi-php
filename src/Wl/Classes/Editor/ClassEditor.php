<?php

namespace WlSdk\Wl\Classes\Editor;

use WlSdk\WlSdkClient;

/**
 * Returns everything the class setup form needs.
 */
class ClassEditor
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns everything the class setup form needs.
     *
     * The form is rendered by the client, so this endpoint answers with data: the fields of the class section by
     * section, the lists the Book Now Tab, the quick search tag and the store category pickers are filled from,
     * the
     * send rules of the client reminder, the currency sign, whether the Administration section may be shown, the
     * addresses of the pages the form links to and the markup of the blocks that have no template on the client.
     *
     * @return ClassEditorGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ClassEditorGetRequest $request): ClassEditorGetResponse
    {
        return new ClassEditorGetResponse($this->client->request('/Wl/Classes/Editor/ClassEditor.json', $request->params(), 'GET'));
    }
}
