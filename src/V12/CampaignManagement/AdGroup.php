<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adgroup?view=bingads-12 AdGroup Data Object
     * 
     * @uses AdRotation
     * @uses BiddingScheme
     * @uses Bid
     * @uses Date
     * @uses KeyValuePairOfstringstring
     * @uses Network
     * @uses AdGroupPrivacyStatus
     * @uses Setting
     * @uses AdGroupStatus
     * @uses CustomParameters
     * @used-by AddAdGroupsRequest
     * @used-by GetAdGroupsByCampaignIdResponse
     * @used-by GetAdGroupsByIdsResponse
     * @used-by UpdateAdGroupsRequest
     */
    final class AdGroup
    {
        /**
         * Determines how often you'd like the ads in your ad group to show in relation to one another.
         * @var AdRotation
         */
        public $AdRotation;

        /**
         * The percent amount by which to adjust your bid for intent ads above or below the base ad group or keyword bid.
         * @var integer
         */
        public $AudienceAdsBidAdjustment;

        /**
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The default bid to use when the user's query and the ad group's keywords match by using either a broad, exact, or phrase match comparison.
         * @var Bid
         */
        public $CpcBid;

        /**
         * The date that the ads in the ad group will expire.
         * @var Date
         */
        public $EndDate;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system generated identifier of the ad group.
         * @var integer
         */
        public $Id;

        /**
         * Your ad language setting determines the language you will use when you write your ads and should be the language of your customers.
         * @var string
         */
        public $Language;

        /**
         * The name of the ad group.
         * @var string
         */
        public $Name;

        /**
         * The search networks where you want your ads to display.
         * @var Network
         */
        public $Network;

        /**
         * Reserved.
         * @var AdGroupPrivacyStatus
         */
        public $PrivacyStatus;

        /**
         * The ad group settings for criterion type group targets.
         * @var Setting[]
         */
        public $Settings;

        /**
         * The date that the ads in the ad group can begin serving; otherwise, the service can begin serving the ads in the ad group the day that the ad group becomes active.
         * @var Date
         */
        public $StartDate;

        /**
         * The status of the ad group.
         * @var AdGroupStatus
         */
        public $Status;

        /**
         * The tracking template to use as a default for all URLs in your ad group.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}