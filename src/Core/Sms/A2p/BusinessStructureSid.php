<?php

namespace WlSdk\Core\Sms\A2p;

/**
 * Business structures for A2P10DLC registration.
 *
 * Last used id: 6.
 *
 * Values:
 * - 1 (`COOPERATIVE`): Co-Operative.
 * - 2 (`CORPORATION`): Corporation.
 * - 3 (`LIMITED_LIABILITY_CORPORATION`): Limited Liability Corporation.
 * - 4 (`NON_PROFIT_CORPORATION`): Non-Profit Corporation.
 * - 5 (`PARTNERSHIP`): Partnership.
 * - 6 (`SOLE_PROPRIETORSHIP`): Sole Proprietorship.
 */
class BusinessStructureSid
{
    /** Co-Operative. */
    public const COOPERATIVE = 1;

    /** Corporation. */
    public const CORPORATION = 2;

    /** Limited Liability Corporation. */
    public const LIMITED_LIABILITY_CORPORATION = 3;

    /** Non-Profit Corporation. */
    public const NON_PROFIT_CORPORATION = 4;

    /** Partnership. */
    public const PARTNERSHIP = 5;

    /** Sole Proprietorship. */
    public const SOLE_PROPRIETORSHIP = 6;
}
