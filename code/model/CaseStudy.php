<?php

class CaseStudy extends GalleryPage {
    private static $icon = "casestudy/images/casestudy.png";

    private static $description = "Display a case study";

    private static $singular_name = 'Case Study';

    private static $plural_name = 'Case Study';

    private static $has_one = array(
        "SummaryImage" => "Image"
    );

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        if(!$image_field = $fields->dataFieldByName("SummaryImage")) {
            $image_field = UploadField::create("SummaryImage", "Image to use")
                ->setFolderName("casestudies");

            $fields->addFieldToTab("Root.Main", $image_field, "Content");
        } else {
            $image_field->setFolderName("casestudies");
        }

        return $fields;
    }
}
