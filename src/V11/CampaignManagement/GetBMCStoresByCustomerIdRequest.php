<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the Bing Merchant Center stores for the specified customer.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getbmcstoresbycustomerid?view=bingads-11 GetBMCStoresByCustomerId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdRequest
    {
        /**
         * The Bing Merchant Center stores with SubType set to CoOp are not returned at all unless you set ReturnCoOpStores true.
         * @var boolean
         */
        public $ReturnCoOpStores;
    }
}
