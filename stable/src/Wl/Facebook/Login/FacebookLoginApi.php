<?php
namespace WlSdk\Wl\Facebook\Login;

use WlSdk\WlSdkClient;

/**
 * Performs Facebook authorization within the context of the specified business.
 */
class FacebookLoginApi
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
     * Business in which authorization is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The application id.

When application not passed, credential loaded from the application, which makes the request,
used [FacebookCredential](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract) for load the credential.
For set credential need used [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) and set [CredentialApi](/Core/Request/Api/Application/Credential/Credential.json) to [FacebookCredential::CID](#/components/schemas/Core.Request.Api.Application.Credential.CredentialAbstract).

When application passed, the credential loaded by application id.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * The Facebook token.
     *
     * @var string|null
     */
    public ?string $s_token = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs Facebook authorization within the context of the specified business.
     *
     * Validates that the given business is active, sets it as the current frontend context, and then
     * delegates to the parent Facebook login flow to authenticate the user.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Facebook/Login/FacebookLogin.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            's_application' => $this->s_application,
            's_token' => $this->s_token,
            ],
            static fn($v) => $v !== null
        );
    }
}
