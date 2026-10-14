<?php

namespace WlSdk\Wl\Billing\Code;

/**
 * Response from GET
 */
class BillingCodeListGetResponse
{
    /**
     * Billing codes of the business.
     *
     * Contains the custom codes of the business and the system codes of the ICD-10-CM reference library, which are
     * shared by all businesses. The system codes are returned only if the business has turned on ICD diagnostic
     * codes .
     *
     * Removed codes are not returned - they are not offered for selection anymore, they only stay on the receipts
     * and invoices they have already been applied to.
     *
     * The custom codes go first, then the system codes: the library has about 75 000 codes, and the business must
     * see its own codes on the first pages of the list. Only the codes that match
     * {@link \WlSdk\Wl\Billing\Code\BillingCodeList} are returned, if it is given, and then each group is ranked
     * by the
     * search, the best match first: the code value equal to the search, the code value beginning with it, the
     * description equal to it, the description beginning with it, the rest. Without a search each group is sorted
     * by
     * the code value.
     *
     * The list is a page of the codes: {@link \WlSdk\Wl\Billing\Code\BillingCodeList} of them from the page
     * {@link \WlSdk\Wl\Billing\Code\BillingCodeList}, out of the {@link
     * \WlSdk\Wl\Billing\Code\BillingCodeListGetResponse::$i_count} codes that answer the
     * request.
     *
     * @var BillingCodeListGetResponseCode[]|null
     */
    public ?array $a_code = null;

    /**
     * Up to `SIMILAR_MAX` codes nearest to the search, the nearest first.
     *
     * Filled only when {@link \WlSdk\Wl\Billing\Code\BillingCodeList} is given and has found nothing, so that a
     * client may
     * offer something instead of an empty list: the words of the search are matched by their first characters, and
     * one word matching is enough, so a word that is mistyped or cut short at its end still finds a code. Empty
     * while the search has found codes, while it is not given, or while nothing in the list comes close to it.
     *
     * The rows are the same as the rows of {@link \WlSdk\Wl\Billing\Code\BillingCodeListGetResponse::$a_code}.
     *
     * @var BillingCodeListGetResponseCodeSimilar[]|null
     */
    public ?array $a_code_similar = null;

    /**
     * Number of the codes that answer the request, the page not applied.
     *
     * A client knows by it how many pages the list has, see {@link \WlSdk\Wl\Billing\Code\BillingCodeList} and
     * {@link \WlSdk\Wl\Billing\Code\BillingCodeList}. `0` while nothing answers the request.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    public function __construct(array $data)
    {
        $this->a_code = isset($data['a_code']) ? array_map(static fn ($item) => new BillingCodeListGetResponseCode((array)$item), (array)$data['a_code']) : null;
        $this->a_code_similar = isset($data['a_code_similar']) ? array_map(static fn ($item) => new BillingCodeListGetResponseCodeSimilar((array)$item), (array)$data['a_code_similar']) : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
    }
}
