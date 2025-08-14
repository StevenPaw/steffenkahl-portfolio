<?php

namespace App\Elements;

use App\Models\PortfolioCategory;
use DNADesign\Elemental\Models\BaseElement;

class IntroductionElement extends BaseElement
{
    private static $db = [];

    private static $has_one = [];

    private static $owns = [];

    private static $field_labels = [];

    private static $table_name = 'IntroductionElement';
    private static $icon = 'font-icon-block-promo-3';

    public function getType()
    {
        return "Einführungs-Element";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getCategories()
    {
        $categories = PortfolioCategory::get();
        return $categories;
    }
}
