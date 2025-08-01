<?php

namespace App\Admins;

use App\Models\PortfolioCategory;
use App\Models\PortfolioEntry;
use App\Models\PortfolioSkillset;
use SilverStripe\Admin\ModelAdmin;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class PortfolioAdmin extends ModelAdmin
{
    private static $managed_models = array(
        PortfolioCategory::class,
        PortfolioEntry::class,
        PortfolioSkillset::class,
    );

    private static $url_segment = "portfolio";

    private static $menu_title = "Portfolio";

    private static $menu_icon = "app/client/icons/portfolio_admin.svg";

    public function init()
    {
        parent::init();
    }

    public function getEditForm($id = null, $fields = null)
    {
        $form = parent::getEditForm($id, $fields);

        // This check is simply to ensure you are on the managed model you want adjust accordingly
        $categoryGridField = $form->Fields()->dataFieldByName($this->sanitiseClassName(PortfolioCategory::class));
        if ($categoryGridField) {
            $config = $categoryGridField->getConfig();
            $config->addComponent(GridFieldOrderableRows::create('SortOrder'));
        }

        return $form;
    }
}
