<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified campaign criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getcampaigncriterionsbyids?view=bingads-11 GetCampaignCriterionsByIds Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsRequest
    {
        /**
         * A list of unique identifiers that identify the campaign criterions to get.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * The unique identifier of the campaign whose criterions you want to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * The type of criterion to get, for example Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }
}
