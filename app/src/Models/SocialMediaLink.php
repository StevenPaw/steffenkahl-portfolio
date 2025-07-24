<?php

namespace App\Models;

use App\Elements\ContactElement;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Security\Permission;
use SilverStripe\LinkField\Models\Link;
use SilverStripe\LinkField\Form\LinkField;
use SilverStripe\ORM\DataObject;

class SocialMediaLink extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "SortOrder" => "Int",
        "Plattform" => "Varchar(255)",
    ];

    private static $has_one = [
        "Parent" => ContactElement::class,
        "SocialLink" => Link::class,
    ];

    private static $owns = [
        "SocialLink",
    ];

    private static $field_labels = [
        "Title" => "Titel",
        "Plattform" => "Plattform",
        "SocialLink" => "Link",
    ];

    private static $default_sort = 'SortOrder ASC, ID ASC';

    private static $inline_editable = false;

    private static $summary_fields = [
        'Title' => 'Titel',
    ];

    private static $searchable_fields = [
        "Title",
        "Plattform",
    ];

    private static $table_name = "SocialMediaLink";

    private static $singular_name = "Social Media Link";
    private static $plural_name = "Social Media Links";


    // tidy up the CMS by not showing these fields
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->replaceField('Plattform', DropdownField::create('Plattform', 'Plattform', [
            "website" => "Website",
            "mail" => "Mail",
            "youtube" => "Youtube",
            "twitch" => "Twitch",
            "twitter" => "Twitter",
            "instagram" => "Instagram",
            "linkedin" => "LinkedIn",
            "behance" => "Behance",
            "github" => "Github",
            "facebook" => "Facebook",
            "flickr" => "Flickr",
            "spotify" => "Spotify",
            "soundcloud" => "Soundcloud",
            "telegram" => "Telegram",
            "discord" => "Discord",
            "itchio" => "Itch.io",
            "reddit" => "Reddit",
            "tiktok" => "TikTok",
        ]));
        $fields->removeByName('SortOrder');
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
