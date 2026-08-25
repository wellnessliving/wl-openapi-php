<?php

namespace WlSdk\Core\Locale\Language;

use WlSdk\WlSdkClient;

/**
 * Switches the language.
 */
class LanguageSwitch
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Switches the language.
     *
     * @return LanguageSwitchPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LanguageSwitchPostRequest $request): LanguageSwitchPostResponse
    {
        return new LanguageSwitchPostResponse($this->client->request('/Core/Locale/Language/LanguageSwitch.json', $request->params(), 'POST'));
    }
}
