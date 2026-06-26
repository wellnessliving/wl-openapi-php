<?php

namespace WlSdk\Thoth\WlPay\Transaction;

class StatusPostRequest
{
    /**
     * List of keys of transactions to get statuses for, JSON-encoded array of primary keys.
     *
     * Originally this field was a GET input with type `array`. For GET parameters the framework automatically
     *  json-decodes fields whose names start with `json_` when the declared type is `array`, so no manual decoding
     *  was needed. However, that auto-decode only applies to query string parameters - POST body data goes through
     *  a different code path and the auto-decode does not fire. As a result, a POST body value (a JSON string)
     *  could not be assigned to an `array` typed property and the field silently stayed empty.
     *
     * To fix HTTP 414 "URI Too Long" errors when the report contains many transactions, the JS
     *  caller `StatusReportCell.afterLoadTable()` was switched from GET to POST (see `post()`).
     * The annotation was changed to a POST input and the type was changed from `array` to `string` so the raw
     *  JSON string from the POST body is received as-is; `post()` calls `json_decode()` explicitly
     *  before passing the keys to `_loadStatuses()`.
     *
     * @var string|null
     */
    public ?string $json_pay_transaction = null;

    public function params(): array
    {
        return array_filter(
            [
            'json_pay_transaction' => $this->json_pay_transaction,
            ],
            static fn ($v) => $v !== null
        );
    }
}
