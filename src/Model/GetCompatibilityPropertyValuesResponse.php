<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The base response type of the <strong>getCompatibilityPropertyValues</strong>
 * method.
 */
class GetCompatibilityPropertyValuesResponse extends AbstractModel
{
    /**
     * This array contains all compatible vehicle property values that match the
     * specified eBay marketplace, specified eBay category, and filters in the request.
     * If the <strong>compatibility_property</strong> parameter value in the request is
     * 'Trim', each value returned in each <strong>value</strong> field will be a
     * different vehicle trim, applicable to any filters that are set in the
     * <string>filter</string> query parameter of the request, and also based on the
     * eBay marketplace and category specified in the call request.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\CompatibilityPropertyValue[]
     */
    public $compatibilityPropertyValues = null;
}
