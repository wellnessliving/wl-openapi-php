<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

use WlSdk\WlSdkClient;

/**
 * Gets custom pattern data.
 */
class Pattern
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets custom pattern data.
     *
     * Loads the saved notification template for the given business and mail type together with the
     *  default template, the reply-to business contact data and the list of variables available for
     *  substitution. When a list is requested, also loads all custom templates for the mail form.
     *
     * @return PatternGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PatternGetRequest $request): PatternGetResponse
    {
        return new PatternGetResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/CustomTemplate/Pattern.json', $request->params(), 'GET'));
    }

    /**
     * Saves custom pattern.
     *
     * Validates and stores the submitted notification template (email, push or SMS) for the given
     *  business. A system template edited under a business is copied into that business instead of
     *  modifying the original. The saved mail pattern key is returned in
     *  [PatternApi::$k_mail_pattern](/Wl/Mail/Pattern/AutomatedMarketing/CustomTemplate/Pattern.json).
     *
     * @return PatternPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PatternPostRequest $request): PatternPostResponse
    {
        return new PatternPostResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/CustomTemplate/Pattern.json', $request->params(), 'POST'));
    }
}
