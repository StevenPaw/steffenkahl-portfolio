<?php

namespace App\Elements;

use App\Models\Skill;
use App\Models\SkillCategory;
use DNADesign\Elemental\Models\BaseElement;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class SkillElement extends BaseElement
{
    private static $db = [
        "Text" => "HTMLText",
        "LinkAnchor" => "Varchar(255)",
    ];

    private static $has_many = [
        "Skills" => Skill::class,
        "SkillCategories" => SkillCategory::class,
    ];

    private static $owns = [
        "Skills",
        "SkillCategories",
    ];

    private static $field_labels = [];

    private static $inline_editable = false;
    private static $table_name = 'SkillElement';
    private static $icon = 'font-icon-block-promo-3';

    public function getType()
    {
        return "Fähigkeiten-Element";
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $gridfield = $fields->dataFieldByName('SkillCategories');
        if ($gridfield) {
            $gridfield->getConfig()->addComponent(GridFieldOrderableRows::create('SortOrder'));
        }
        return $fields;
    }
}
