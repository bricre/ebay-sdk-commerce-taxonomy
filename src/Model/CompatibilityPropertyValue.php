<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type is used by the <strong>compatibilityPropertyValues</strong> array that
 * is returned in the <strong>getCompatibilityPropertyValues</strong> response. The
 * <strong>compatibilityPropertyValues</strong> array contains all compatible
 * vehicle property values that match the specified eBay marketplace, specified
 * eBay category, and filters in the request. If the
 * <strong>compatibility_property</strong> parameter value in the request is
 * 'Trim', each value returned in each <strong>value</strong> field will be a
 * different vehicle trim, applicable to any filters that are set in the
 * <string>filter</string> query parameter of the request, and also based on the
 * eBay marketplace and category specified in the call request.
 */
class CompatibilityPropertyValue extends AbstractModel
{
    /**
     * Each <strong>value</strong> field shows one applicable compatible vehicle
     * property value. The values that are returned will depend on the specified eBay
     * marketplace, specified eBay category, and filters in the request.
     *
     * @var string
     */
    public $value = null;
}
