<?php

namespace BinshopsBlog\Requests;

abstract class BaseBinshopsBlogCategoryRequest extends BaseRequest
{
    /**
     * Shared rules for categories
     * @return array
     */
    protected function baseCategoryRules()
    {
        $return = [
            'category_name' => ['required', 'string', 'min:1', 'max:65'],
            'slug' => ['required', 'alpha_dash', 'max:100', 'min:1'],
            'category_description' => ['nullable', 'string', 'min:1', 'max:5000'],
            'page_title' => ['required', 'string', 'min:1', 'max:65'],
            'page_description' => ['required', 'string', 'min:1', 'max:160'],
            'parent_id' => ['required', 'int']
        ];
        return $return;
    }
}
