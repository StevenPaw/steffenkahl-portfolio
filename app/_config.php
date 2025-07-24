<?php

use SilverStripe\Forms\HTMLEditor\HTMLEditorConfig;
use SilverStripe\i18n\i18n;

i18n::set_locale('de_DE');

HtmlEditorConfig::get('cms')->insertButtonsAfter('indent', ['|', 'undo', 'redo']);
HtmlEditorConfig::get('cms')->setOption('content_css', 'cms/css/editor.css, mysite/css/editor.css?v=2');
