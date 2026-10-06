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
     * Remembers the requested language for the user who makes this request, within the context this user is
     * currently
     * in, and stores it in the session and in the cookie so that the very next request is served in this language
     * too.
     * The language must be active in this installation, otherwise the request is rejected and nothing is stored.
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
