<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more ad group criterions.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateadgroupcriterions?view=bingads-11 UpdateAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses AdGroupCriterionType
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsRequest
    {
        /**
         * The list of criterions to update.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;

        /**
         * The type of criterion to update, for example Webpage.
         * @var AdGroupCriterionType
         */
        public $CriterionType;
    }
}
