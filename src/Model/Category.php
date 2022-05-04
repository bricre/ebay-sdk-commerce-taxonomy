<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This type contains information about a particular eBay category.
 */
class Category extends AbstractModel
{
    /**
     * The unique identifier of the eBay category within its category tree.<br /><br
     * /><span class="tablenote"> <strong>Note:</strong> The root node of a full
     * default category tree includes the <b>categoryId</b> field, but its value should
     * not be relied upon. It provides no useful information for application
     * development. </span>.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * The name of the category identified by <b>categoryId</b>.
     *
     * @var string
     */
    public $categoryName = null;
}
