<?php

namespace ilateral\SilverStripe\CaseStudy\Model;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use ilateral\SilverStripe\Gallery\Model\GalleryPage;

class CaseStudy extends GalleryPage
{
    private static $table_name = 'CaseStudyPage';

    private static $icon = "casestudy/images/casestudy.png";

    private static $description = "Display a case study";

    private static $singular_name = 'Case Study';

    private static $plural_name = 'Case Study';

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        if (!$image_field = $fields->dataFieldByName("FeaturedImage")) {
            $image_field = UploadField::create("FeaturedImage", "Image to use")
                ->setFolderName("casestudies");

            $fields->addFieldToTab("Root.Main", $image_field, "Metadata");
        } else {
            $image_field->setFolderName("casestudies");
        }

        return $fields;
    }
}
