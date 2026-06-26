<?php

namespace WlSdk\Wl\User\Option;

/**
 * Possible settings for each user.
 *
 * First piece of constant used when chose method serialization data.
 * For example "SERIALIZE_PROMPT_LIST". First peace it 'SERIALIZE'.
 * It will be serialize with class OptionValueSerialize.
 * If you need add some another method of serialization like "JSON" or "gcompres".
 * Implement class child of OptionValueAbstract in same folder.
 *
 * Last used ID: 1.
 *
 * Values:
 * - 1 (`SERIALIZE_PROMPT_LIST`): Saved settings for confirmation modals.
 *   Check mark "Do not show this message again".
 */
class OptionSid
{
    /** Saved settings for confirmation modals. */
    public const SERIALIZE_PROMPT_LIST = 1;
}
