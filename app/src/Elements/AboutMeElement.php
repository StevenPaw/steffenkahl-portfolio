<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\LinkField\Models\Link;
use SilverStripe\LinkField\Form\LinkField;
use SilverStripe\Forms\DropdownField;

class AboutMeElement extends BaseElement
{
    private static $db = [
        "Text" => "HTMLText",
        "LinkAnchor" => "Varchar(255)",
    ];

    private static $has_one = [
        "Image" => Image::class,
        "Button" => Link::class,
    ];

    private static $owns = [
        "Image",
        "Button",
    ];

    private static $field_labels = [];

    private static $table_name = 'AboutMeElement';
    private static $icon = 'font-icon-block-promo-3';

    public function getType()
    {
        return "Über mich-Element";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}
