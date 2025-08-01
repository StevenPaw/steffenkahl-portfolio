<?php

namespace App\Pages;

use Page;
use App\Models\PortfolioEntry;

class PortfolioPage extends Page
{
    private static $table_name = 'PortfolioPage';

    //private static $icon = "app/client/icons/portfolio.svg";

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getEntries()
    {
        return PortfolioEntry::get();
    }
}
