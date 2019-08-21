<?php

namespace ilateral\SilverStripe\CaseStudy\Model;

use Page;
use ilateral\SilverStripe\CaseStudy\Model\CaseStudy;

class CaseStudyHub extends Page
{
    private static $table_name = 'CaseStudyHubPage';

    private static $icon = "casestudy/images/casestudyhub.png";

    private static $description = "Display a list of case study pages";

    private static $singular_name = 'Case Study Hub';

    private static $plural_name = 'Case Study Hub';

    private static $allowed_children = array(
        CaseStudy::class
    );
}
