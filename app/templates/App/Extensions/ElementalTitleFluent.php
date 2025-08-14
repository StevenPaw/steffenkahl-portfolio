<?php

namespace App\Extensions;

use DNADesign\Elemental\Models\BaseElement;
use Dynamic\BaseObject\Model\BaseElementObject;
use DNADesign\Elemental\Forms\TextCheckboxGroupField;
use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use TractorCow\Fluent\Extension\FluentExtension;

class ElementalTitleFluent extends Extension
{
    public function updateCMSFields(FieldList $fields): void
    {
        if (!$this->getOwner()->hasExtension(FluentExtension::class)) {
            return;
        }

        $titleField = $fields->fieldByName('Root.Main.Title');

        if ($titleField instanceof TextCheckboxGroupField) {
            $this->getOwner()->updateFluentCMSField($titleField);
        }
    }
}
