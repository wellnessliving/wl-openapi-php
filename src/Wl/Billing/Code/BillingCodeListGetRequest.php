<?php

namespace WlSdk\Wl\Billing\Code;

class BillingCodeListGetRequest
{
    /**
     * Number of the codes to return: the size of a page of the list.
     *
     * Not more than `LIMIT_MAX`, and
     * `LIMIT_DEFAULT` while it is not given.
     *
     * @var int|null
     */
    public ?int $i_limit = 50;

    /**
     * Number of the page of the list to return, `1` for the first one.
     *
     * A page holds {@link \WlSdk\Wl\Billing\Code\BillingCodeList} codes, so the page number 2 is the codes from
     * the 51st to
     * the 100th while the limit is the default one. A page beyond the end of the list is empty, while
     * {@link \WlSdk\Wl\Billing\Code\BillingCodeListGetResponse::$i_count} still tells how many codes answer the
     * request.
     *
     * @var int|null
     */
    public ?int $i_page = 1;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Text to search for, in any case: the value of a code, a part of a description, or plain words. Empty string
     * to
     * get the whole list.
     *
     * The search is split into words, and a code is returned while every word of the search occurs in its value or
     * in its description. So the words may come in any order, and `pain in left shoulder` finds the diagnostic
     * code
     * `M25.512 Pain in left shoulder`. A search of a single word matches a part of a value or of a description as
     * it
     * is: `99` matches `99213`. The case does not matter. A longer text than a description can not match anything,
     * so it is not accepted.
     *
     * A search that has found nothing gets the nearest codes in
     * {@link \WlSdk\Wl\Billing\Code\BillingCodeListGetResponse::$a_code_similar} instead.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_limit' => $this->i_limit,
            'i_page' => $this->i_page,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
