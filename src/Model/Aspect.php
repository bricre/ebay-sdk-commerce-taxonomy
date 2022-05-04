<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about an item attribute (for example, color) that
 * is appropriate or necessary for accurately describing items in a particular leaf
 * category. Sellers are required or encouraged to provide one or more values of
 * this aspect when offering an item in that category on eBay.
 */
class Aspect extends AbstractModel
{
    /**
     * Information about the formatting, occurrence, and support of this aspect.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\AspectConstraint
     */
    public $aspectConstraint = null;

    /**
     * A list of valid values for this aspect (for example: <code>Red</code>,
     * <code>Green</code>, and <code>Blue</code>), along with any constraints on those
     * values.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\AspectValue[]
     */
    public $aspectValues = null;

    /**
     * The localized name of this aspect (for example: <code>Colour</code> on the eBay
     * UK site). <br /><br /><span class="tablenote"> <strong>Note:</strong> This name
     * is always localized for the specified marketplace. </span>.
     *
     * @var string
     */
    public $localizedAspectName = null;

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
     *
     * @var \Ebay\Commerce\Taxonomy\Model\RelevanceIndicator
     */
    public $relevanceIndicator = null;
}
