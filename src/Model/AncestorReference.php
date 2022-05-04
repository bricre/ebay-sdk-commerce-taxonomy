<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains information about one of the ancestors of a suggested
 * category. An ordered list of these references describes the path from the
 * suggested category to the root of the category tree it belongs to.
 */
class AncestorReference extends AbstractModel
{
    /**
     * The unique identifier of the eBay ancestor category.      <br /><br />     <span
     * class="tablenote"> <strong>Note:</strong> The root node of a full default
     * category tree includes the <b>categoryId</b> field, but its value should not be
     * relied upon. It provides no useful information for application development.
     * </span>.
     *
     * @var string
     */
    public $categoryId = null;

    /**
     * The name of the ancestor category identified by <b>categoryId</b>.
     *
     * @var string
     */
    public $categoryName = null;

    /**
     * The href portion of the <b>getCategorySubtree</b> call that retrieves the
     * subtree below the ancestor category node.
     *
     * @var string
     */
    public $categorySubtreeNodeHref = null;

    /**
     * The absolute level of the ancestor category node in the hierarchy of its
     * category tree.<br /><br /><span class="tablenote"> <strong>Note:</strong> The
     * root node of any full category tree is always at level <code><b>0</b></code>.
     * </span>.
     *
     * @var int
     */
    public $categoryTreeNodeLevel = null;
}
