<?php

namespace App\Models;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;

class PortfolioSkillset extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
    ];

    private static $belongs_many = [
        "PortfolioEntries" => PortfolioEntry::class,
    ];

    private static $field_labels = [];

    private static $default_sort = 'Title ASC, ID ASC';

    private static $inline_editable = false;

    private static $summary_fields = [
        'Title' => 'Titel',
    ];

    private static $searchable_fields = [
        "Title",
    ];

    private static $table_name = "PortfolioSkillset";

    private static $singular_name = "Portfolio-Fähigkeit";
    private static $plural_name = "Portfolio-Fähigkeiten";


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
