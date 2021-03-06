<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadsbyeditorialstatus?view=bingads-11 GetAdsByEditorialStatus Request Object
     * 
     * @uses AdEditorialStatus
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusRequest
    {
        /**
         * The identifier of the ad group to retrieve the ads from.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The editorial review status that the ads must have to be returned.
         * @var AdEditorialStatus
         */
        public $EditorialStatus;

        /**
         * One or more types of ads to return.
         * @var AdType[]
         */
        public $AdTypes;
    }
}
