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
     * The form is rendered by the client, so this endpoint answers with data: the settings of the class, the lists
     * the
     * Book Now Tab, the quick search tag and the store category pickers are filled from, the
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

    /**
     * Saves the class.
     *
     * Creates the class while {@link \WlSdk\Wl\Classes\Editor\ClassEditor} is empty, and changes the class
     * otherwise. The settings
     * come in {@link \WlSdk\Wl\Classes\Editor\ClassEditorGetResponse::$a_class}, which has the same fields the
     * load answers with. The key of the class
     * that has been written is answered with in {@link
     * \WlSdk\Wl\Classes\Editor\ClassEditorPostResponse::$k_class_save}. An error of a field is reported
     * with the name of the field on the form, one error for every field that failed.
     *
     * @return ClassEditorPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClassEditorPostRequest $request): ClassEditorPostResponse
    {
        return new ClassEditorPostResponse($this->client->request('/Wl/Classes/Editor/ClassEditor.json', $request->params(), 'POST'));
    }
}
