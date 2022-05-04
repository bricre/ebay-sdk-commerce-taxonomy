<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The relevance of this aspect. This field is returned if eBay has data on how
 * many searches have been performed for listings in the category using this item
 * aspect.<br /><br /><span class="tablenote"> <strong>Note:</strong> This
 * container is restricted to applications that have been granted permission to
 * access this feature. You must submit an <a
 * href="https://developer.ebay.com/my/support/tickets?tab=app-check">App Check
 * ticket</a> to request this access. In the App Check form, add a note to the
 * <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that
 * you want access to 'Buyer Demand Data' in the Taxonomy API.</span>.
 */
class RelevanceIndicator extends AbstractModel
{
    /**
     * The number of recent searches (based on 30 days of data) for the aspect.
     *
     * @var int
     */
    public $searchCount = null;
}
