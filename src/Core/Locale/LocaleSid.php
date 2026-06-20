<?php
namespace WlSdk\Core\Locale;

/**
 * A list of locales.
 * 
 * Last used ID: 21
 * 
 * Values:
 * - 4 (`AUSTRALIA`): Australia.
 * - 20 (`BAHAMAS`): Bahamas.
 * - 19 (`BERMUDA`): Bermuda.
 * - 2 (`CANADA`): Canada.
 * - 5 (`CAYMAN`): Cayman Islands.
 * - 13 (`CYPRUS`): Cyprus.
 * - 8 (`EGYPT`): Egypt.
 * - 18 (`IRELAND`): Republic of Ireland.
 * - 14 (`KUWAIT`): Kuwait
 * - 16 (`MAURITIUS`): Republic of Mauritius.
 * - 9 (`NEVERLAND`): A special locale that can be used for testing or a business situated in an unknown region.
 * - 10 (`NEW_ZEALAND`): New Zealand.
 * - 12 (`PHILIPPINES`): Philippines.
 * - 15 (`SAUDI_ARABIA`): Saudi Arabia.
 * - 17 (`SENEGAL`): Senegal
 * - 21 (`SINGAPORE`): Singapore.
 * - 6 (`SOUTH_AFRICA`): South Africa.
 * - 11 (`UAE`): United Arab Emirates.
 * - 3 (`UK`): United Kingdom.
 * - 1 (`USA`): United States of America.
 */
enum LocaleSid: int
{
    case AUSTRALIA = 4;
    case BAHAMAS = 20;
    case BERMUDA = 19;
    case CANADA = 2;
    case CAYMAN = 5;
    case CYPRUS = 13;
    case EGYPT = 8;
    case IRELAND = 18;
    case KUWAIT = 14;
    case MAURITIUS = 16;
    case NEVERLAND = 9;
    case NEW_ZEALAND = 10;
    case PHILIPPINES = 12;
    case SAUDI_ARABIA = 15;
    case SENEGAL = 17;
    case SINGAPORE = 21;
    case SOUTH_AFRICA = 6;
    case UAE = 11;
    case UK = 3;
    case USA = 1;
}
