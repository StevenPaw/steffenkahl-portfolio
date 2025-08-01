<?php

namespace App\Models;

use App\Models\SkillCategory;
use App\Elements\SkillElement;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Security\Permission;
use SilverStripe\LinkField\Models\Link;

class Skill extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "Value" => "Int",
        "ValueText" => "Varchar(255)",
    ];

    private static $has_one = [
        "Parent" => SkillElement::class,
        "Category" => SkillCategory::class,
    ];

    private static $field_labels = [
        "Title" => "Titel",
        "CategoryID" => "Kategorie",
    ];

    private static $default_sort = 'Value DESC, ID ASC';

    private static $inline_editable = false;

    private static $summary_fields = [
        'Title' => 'Titel',
        'Value' => 'Wert',
        'ValueText' => 'Wert Text',
    ];

    private static $searchable_fields = [
        "Title",
        "Value",
        "ValueText",
        "Category.Title",
    ];

    private static $table_name = "Skill";

    private static $singular_name = "Fähigkeit";
    private static $plural_name = "Fähigkeiten";


    // tidy up the CMS by not showing these fields
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('ParentID');
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
