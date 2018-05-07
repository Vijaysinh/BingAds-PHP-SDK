<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible age range values that you can use to target ads to People.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/agerange?view=bingads-12 AgeRange Value Set
     * 
     * @used-by AgeCriterion
     */
    final class AgeRange
    {
        /** Reserved. */
        const Unknown = 'Unknown';

        /** People from the ages of 18 through 24 years. */
        const EighteenToTwentyFour = 'EighteenToTwentyFour';

        /** People from the ages of 25 through 34 years. */
        const TwentyFiveToThirtyFour = 'TwentyFiveToThirtyFour';

        /** People from the ages of 35 through 49 years. */
        const ThirtyFiveToFourtyNine = 'ThirtyFiveToFourtyNine';

        /** People from the ages of 50 through 64 years. */
        const FiftyToSixtyFour = 'FiftyToSixtyFour';

        /** People 65 years of age and older. */
        const SixtyFiveAndAbove = 'SixtyFiveAndAbove';
    }

}