<?php
namespace WlSdk\Social\Google\Plus;

use WlSdk\WlSdkClient;

/**
 * Authorizes user with Google.
 */
class LoginApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * The application id.

When application not passed, credential loaded from the application, which makes the request,
used [GoogleCredential](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract) for load the credential.
For set credential need used [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) and set [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) to [GoogleCredential::CID](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract).

When application passed, the credential loaded by application id.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * The Google server authorization code.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Authorizes user with Google.
     *
     * Accepts a Google server authorization code and an optional application ID, loads the configured Google
     * credential for the application, and completes the OAuth 2.0 flow to sign the user in or create a new
     * account.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Social/Google/Plus/Login.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            's_application' => $this->s_application,
            's_code' => $this->s_code,
            ],
            static fn($v) => $v !== null
        );
    }
}
