<?php

namespace App\Elements;

use App\Models\SocialMediaLink;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\LinkField\Models\Link;
use SilverStripe\LinkField\Form\LinkField;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class ContactElement extends BaseElement
{
    private static $db = [
        "Text" => "HTMLText",
        "LinkAnchor" => "Varchar(255)",
    ];

    private static $has_many = [
        "Buttons" => Link::class,
        "SocialMediaLinks" => SocialMediaLink::class,
    ];

    private static $owns = [
        "Buttons",
    ];

    private static $inline_editable = false;

    private static $field_labels = [];

    private static $table_name = 'ContactElement';
    private static $icon = 'font-icon-block-promo-3';

    public function getType()
    {
        return "Kontakt-Element";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $gridfield = $fields->dataFieldByName('SocialMediaLinks');
        if ($gridfield) {
            $gridfield->getConfig()->addComponent(GridFieldOrderableRows::create('SortOrder'));
        }
        return $fields;
    }
}
