<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the keyword and the estimated position in the search results for each match type.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/keywordestimatedposition?view=bingads-11 KeywordEstimatedPosition Data Object
     * 
     * @uses EstimatedPositionAndTraffic
     * @used-by KeywordIdEstimatedPosition
     * @used-by GetEstimatedPositionByKeywordsResponse
     */
    final class KeywordEstimatedPosition
    {
        /**
         * The keyword to which the estimates apply.
         * @var string
         */
        public $Keyword;

        /**
         * An array of EstimatedPositionAndTraffic data objects that contains the position in the search results corresponding to the specified maximum bid.
         * @var EstimatedPositionAndTraffic[]
         */
        public $EstimatedPositions;
    }

}
