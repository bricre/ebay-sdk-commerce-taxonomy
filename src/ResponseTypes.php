<?php

namespace Ebay\Commerce\Taxonomy;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'fetchItemAspects' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCategoriesAspectResponse',
        ],
        'getDefaultCategoryTreeId' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\BaseCategoryTree',
        ],
        'getCategoryTree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategoryTree',
        ],
        'getCategorySubtree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySubtree',
        ],
        'getCategorySuggestions' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySuggestionResponse',
        ],
        'getItemAspectsForCategory' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\AspectMetadata',
        ],
        'getCompatibilityProperties' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityMetadataResponse',
        ],
        'getCompatibilityPropertyValues' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityPropertyValuesResponse',
        ],
    ];
}
