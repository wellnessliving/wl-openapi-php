<?php

namespace WlSdk\Wl\Catalog\Terms;

/**
 * Action that a client or staff performs with terms and conditions of cart items.
 *
 * Values:
 * - 1 (`AGREE`): Terms and conditions are accepted.
 * - 2 (`DECLINE`): Terms and conditions are declined, so items are removed from the cart.
 * - 3 (`SKIP`): Terms and conditions are skipped by staff in the point of sale.
 */
class TermsActionSid
{
    /** Terms and conditions are accepted. */
    public const AGREE = 1;

    /** Terms and conditions are declined, so items are removed from the cart. */
    public const DECLINE = 2;

    /** Terms and conditions are skipped by staff in the point of sale. */
    public const SKIP = 3;
}
