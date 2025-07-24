<?php

namespace App\Models;

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\LinkField\Models\Link;

class PortfolioEntry extends DataObject
{
    private static $db = [
        "Year" => "Int",
        "Title" => "Varchar(255)",
        "Description" => "HTMLText",
    ];

    private static $has_one = [
        "Image" => Image::class,
        "Button" => Link::class,
        "Category" => PortfolioCategory::class,
    ];

    private static $owns = [
        "Image",
        "Button",
    ];

    private static $field_labels = [];

    private static $default_sort = 'Year ASC, ID ASC';

    private static $inline_editable = false;

    private static $summary_fields = [
        'Image.CMSThumbnail' => 'Vorschaubild',
        'Year' => 'Jahr',
        'Title' => 'Titel',
        'Description.Summary' => 'Beschreibung',
        'Category.Title' => 'Kategorie',
    ];

    private static $searchable_fields = [
        "Year",
        "Title",
        "Description",
    ];

    private static $table_name = "PortfolioEntry";

    private static $singular_name = "Portfolio-Eintrag";
    private static $plural_name = "Portfolio-Einträge";


    // tidy up the CMS by not showing these fields
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function canView($member = null)
    {
        return true;
    }

    public function canEdit($member = null)
    {
        return Permission::check('CMS_ACCESS_NewsAdmin', 'any', $member);
    }

    public function canDelete($member = null)
    {
        return Permission::check('CMS_ACCESS_NewsAdmin', 'any', $member);
    }

    public function canCreate($member = null, $context = [])
    {
        return Permission::check('CMS_ACCESS_NewsAdmin', 'any', $member);
    }
}
