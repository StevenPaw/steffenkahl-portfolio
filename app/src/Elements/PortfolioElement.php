<?php

namespace App\Elements;

use App\Models\PortfolioCategory;
use SilverStripe\LinkField\Models\Link;
use DNADesign\Elemental\Models\BaseElement;

class PortfolioElement extends BaseElement
{
    private static $db = [
        "Text" => "HTMLText",
        "LinkAnchor" => "Varchar(255)",
        "CardsPerPage" => "Int",
    ];

    private static $has_one = [
        "Button" => Link::class,
        "Category" => PortfolioCategory::class,
    ];

    private static $owns = [
        "Button",
    ];

    private static $field_labels = [];

    private static $table_name = 'PortfolioElement';
    private static $icon = 'font-icon-block-promo-3';

    public function getType()
    {
        return "Portfolio-Element";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getPortfolioEntries()
    {
        if (!$this->CategoryID) {
            return [];
        }
        return $this->Category()->Entries()->sort('Year DESC, ID DESC');
    }
}
