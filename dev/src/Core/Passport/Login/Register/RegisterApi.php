<?php
namespace WlSdk\Core\Passport\Login\Register;

use WlSdk\WlSdkClient;

/**
 * Validates the new user's data and sends a confirmation email to complete registration.
 */
class RegisterApi
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
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_data = null;

    /**
     * ID of source mode.

One of [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
`null` if not initialized or the api is not called in the Wellnessliving project.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The application ID. This is a business specific ID required to register clients.
     *
     * @var string|null
     */
    public ?string $s_application = null;

    /**
     * The new client email address.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    /**
     * The new client given name.
     *
     * @var string|null
     */
    public ?string $s_name_first = null;

    /**
     * The new client surname.
     *
     * @var string|null
     */
    public ?string $s_name_last = null;

    /**
     * The new client password.
     *
     * @var string|null
     */
    public ?string $s_password = null;

    /**
     * The URL to the confirmation page. This link is used in a confirmation email.

If empty, URL to default page is used.
     *
     * @var string|null
     */
    public ?string $url_confirm = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Validates the new user's data and sends a confirmation email to complete registration.
     *
     * Accepts the new user's name, email, and password, validates each field, stores the pending registration,
     * and sends a confirmation email with a link to complete registration via
     * [RegisterConfirmApi](/Core/Passport/Login/Register/RegisterConfirm.json).
     * An optional application ID and custom confirmation URL may be provided.
     *
     * @return array Parsed JSON response data.
     *   - string json_confirm_config: JSON configuration for confirmation email.
     *   - string url_confirm: The URL to the confirmation page. This link is used in a confirmation email.

If empty, URL to default page is used.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Core/Passport/Login/Register/Register.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_data' => $this->a_data,
            'id_mode' => $this->id_mode,
            's_application' => $this->s_application,
            's_mail' => $this->s_mail,
            's_name_first' => $this->s_name_first,
            's_name_last' => $this->s_name_last,
            's_password' => $this->s_password,
            'url_confirm' => $this->url_confirm,
            ],
            static fn($v) => $v !== null
        );
    }
}
