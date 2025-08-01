<?php

namespace App\Models;

use SilverStripe\Security\Permission;
use SilverStripe\ORM\DataObject;

class PortfolioCategory extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "SortOrder" => "Int",
    ];

    private static $has_many = [
        "Entries" => PortfolioEntry::class,
    ];

    private static $field_labels = [
        "Title" => "Titel",
        "SortOrder" => "Sortierreihenfolge",
    ];

    private static $default_sort = 'SortOrder ASC, ID ASC';

    private static $inline_editable = false;

    private static $summary_fields = [
        'Title' => 'Titel',
    ];

    private static $searchable_fields = [
        "Title",
    ];

    private static $table_name = "PortfolioCategory";

    private static $singular_name = "Portfolio Kategorie";
    private static $plural_name = "Portfolio Kategorien";


    // tidy up the CMS by not showing these fields
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('SortOrder');
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
