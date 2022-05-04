<?php

namespace Ebay\Commerce\Taxonomy;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'fetchItemAspects' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCategoriesAspectResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDefaultCategoryTreeId' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\BaseCategoryTree',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategoryTree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategoryTree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySubtree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySubtree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySuggestions' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySuggestionResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemAspectsForCategory' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\AspectMetadata',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityProperties' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityMetadataResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityPropertyValues' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityPropertyValuesResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
    ];
}
