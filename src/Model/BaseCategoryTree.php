<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains identifying information for the category tree associated with
 * a particular eBay marketplace.
 */
class BaseCategoryTree extends AbstractModel
{
    /**
     * The unique identifier of the eBay category tree for the specified marketplace.
     *
     * @var string
     */
    public $categoryTreeId = null;

    /**
     * The version of the category tree identified by <b>categoryTreeId</b>. It's a
     * good idea to cache this value for comparison so you can determine if this
     * category tree has been modified in subsequent calls.
     *
     * @var string
     */
    public $categoryTreeVersion = null;
}
