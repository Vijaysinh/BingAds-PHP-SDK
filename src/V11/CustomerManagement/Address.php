<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a postal address.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/address?view=bingads-11 Address Data Object
     * 
     * @used-by AdvertiserAccount
     * @used-by ContactInfo
     * @used-by Customer
     */
    final class Address
    {
        /**
         * The city, which can contain a maximum of 35 characters.
         * @var string
         */
        public $City;

        /**
         * The country/region code.
         * @var string
         */
        public $CountryCode;

        /**
         * The system generated identifier of the address object.
         * @var integer
         */
        public $Id;

        /**
         * The first line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line1;

        /**
         * The second line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line2;

        /**
         * The third line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line3;

        /**
         * The fourth line of the address, which can contain a maximum of 35 characters.
         * @var string
         */
        public $Line4;

        /**
         * The Postal or ZIP Code, which can contain a maximum of 10 characters.
         * @var string
         */
        public $PostalCode;

        /**
         * The state or province.
         * @var string
         */
        public $StateOrProvince;

        /**
         * The date and time that the address was last updated.
         * @var base64Binary
         */
        public $TimeStamp;
    }

}
