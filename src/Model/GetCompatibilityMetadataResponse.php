<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base response of the
 * <strong>getCompatibilityProperties</strong> method.
 */
class GetCompatibilityMetadataResponse extends AbstractModel
{
    /**
     * This container consists of an array of all compatible vehicle properties
     * applicable to the specified eBay marketplace and eBay category ID.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\CompatibilityProperty[]
     */
    public $compatibilityProperties = null;
}
