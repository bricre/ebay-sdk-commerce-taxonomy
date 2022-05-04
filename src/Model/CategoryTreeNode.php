<?php

namespace Ebay\Commerce\Taxonomy\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type contains information about all nodes of a category tree or subtree
 * hierarchy, including and below the specified <b>Category</b>, down to the leaf
 * nodes. It is a recursive structure.
 */
class CategoryTreeNode extends AbstractModel
{
    /**
     * Contains details about the current category tree node.
     *
     * @var \Ebay\Commerce\Taxonomy\Model\Category
     */
    public $category = null;

    /**
     * The absolute level of the current category tree node in the hierarchy of its
     * category tree.    <br /><br />          <span class="tablenote">
     * <strong>Note:</strong> The root node of any full category tree is always at
     * level <code><b>0</b></code>. </span>.
     *
     * @var int
     */
    public $categoryTreeNodeLevel = null;

    /**
     * An array of one or more category tree nodes that are the immediate children of
     * the current category tree node, as well as their children, recursively down to
     * the leaf nodes.    <br /><br /><i>Returned only if</i> the current category tree
     * node is not a leaf node (the value of <b>leafCategoryTreeNode</b> is
     * <code>false</code>).
     *
     * @var \Ebay\Commerce\Taxonomy\Model\CategoryTreeNode[]
     */
    public $childCategoryTreeNodes = null;

    /**
     * A value of <code>true</code> indicates that the current category tree node is a
     * leaf node (it has no child nodes). A value of <code>false</code> indicates that
     * the current node has one or more child nodes, which are identified by the
     * <b>childCategoryTreeNodes</b> array.    <br /><br />          <i>Returned only
     * if</i> the value of this field is <code>true</code>.
     *
     * @var bool
     */
    public $leafCategoryTreeNode = null;

    /**
     * The href portion of the <b>getCategorySubtree</b> call that retrieves the
     * subtree below the parent of this category tree node.    <br /><br />
     * <i>Not returned if</i> the current category tree node is the root node of its
     * tree.
     *
     * @var string
     */
    public $parentCategoryTreeNodeHref = null;
}
