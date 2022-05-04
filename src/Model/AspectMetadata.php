<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is the container type for the response payload of the
 * <b>getItemAspectsForCategory</b> call.
 */
class AspectMetadata extends AbstractModel
{
    /**
     * A list of item aspects (for example, color) that are appropriate or necessary
     * for accurately describing items in a particular leaf category. Each category has
     * a different set of aspects and different requirements for aspect values. Sellers
     * are required or encouraged to provide one or more acceptable values for each
     * aspect when offering an item in that category on eBay.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\Aspect[]
     */
    public $aspects = null;
}
