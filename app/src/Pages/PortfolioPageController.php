<?php

namespace App\Pages;

use App\Models\PortfolioEntry;
use PageController;
use SilverStripe\Control\HTTPRequest;

class PortfolioPageController extends PageController
{
    private static $allowed_actions = [
        "view",
    ];

    public function index(HTTPRequest $request)
    {
        return [];
    }

    public function view(HTTPRequest $request)
    {
        $id = $request->param('ID');
        if (!$id) {
            return $this->httpError(404, 'Portfolio item not found');
        }

        $portfolioEntry = PortfolioEntry::get()->byID($id);
        if (!$portfolioEntry) {
            return $this->httpError(404, 'Portfolio item not found');
        }

        return [
            'Entry' => $portfolioEntry,
            'Title' => $portfolioEntry->Title,
            'Content' => $portfolioEntry->Content,
        ];
    }
}
