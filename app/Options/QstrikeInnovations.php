<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class QstrikeInnovations extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Qstrike Innovations';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Qstrike Innovations | Options';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('qstrike_innovations');
        //Home tab
        //Logo
        $fields->addtab('Home page');
        $fields
        ->addImage('site_logo', [
            'label' => 'Logo',
            'return_format' => 'id',  // returns the image ID
        ])
        //Hero qstrike logo
        ->addImage('hero_logobg', [
            'label' => 'Logo',
            'return_format' => 'id',  // returns the image ID
        ])
        //trusted brands
        ->addImage('trusted_brands', [
            'label' => 'brands',
            'return_format' => 'id',  // returns the image ID
        ])
        //Hero Video
        ->addFile('theme_video', [
            'label' => 'Theme Video',
            'return_format' => 'id', // Returns the attachment ID
            'mime_types' => 'mp4,webm,ogv', // Restrict file types
        ])
        //History
        ->addRepeater('history', [
            'label' => 'History',
            'layout' => 'table',
        ])
            ->addText('date', [
                'label' => 'Date',
            ])
            ->addText('happening', [
                'label' => 'Happening',
            ])
        ->endRepeater()
        //Partner factories
        ->addRepeater('partner_factories', [
            'label' => 'Partner Factories',
            'layout' => 'table',
        ])
            ->addImage('flag', [
                'label' => 'flag',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('country', [
                'label' => 'Country',
            ])
        ->endRepeater();

        //Our team page
        $fields->addtab('Our Team');
        $fields
        //Hero Background
        ->addImage('our_teambg', [
            'label' => 'Our team hero background',
            'return_format' => 'id',  // returns the image ID
        ])
        ->addRepeater('core_values', [
            'label' => 'Core Values',
            'layout' => 'table',
        ])
            ->addText('core_value', [
                'label' => 'Core value',
            ])
            ->addTextarea('description', [
                'label' => 'Description',
            ])
        ->endRepeater();

        //C-suite
        $fields->addtab('C-Suite');
        $fields
        ->addRepeater('c_suite', [
            'label' => 'C-Suite',
            'layout' => 'table',
        ])
            ->addImage('main_image', [
                'label' => 'Main image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addImage('hover_image', [
                'label' => 'Hover image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('full_name', [
                'label' => 'Full name',
            ])
            ->addText('position', [
                'label' => 'Position',
            ])
        ->endRepeater();
        //Admin
        $fields->addtab('Admin');
        $fields
        ->addRepeater('admin', [
            'label' => 'Admin',
            'layout' => 'table',
        ])
            ->addImage('main_image', [
                'label' => 'Main image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addImage('hover_image', [
                'label' => 'Hover image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('full_name', [
                'label' => 'Full name',
            ])
            ->addText('position', [
                'label' => 'Position',
            ])
        ->endRepeater();

        //Creative
        $fields->addtab('Creative');
        $fields
        ->addRepeater('creative', [
            'label' => 'Creative',
            'layout' => 'table',
        ])
            ->addImage('main_image', [
                'label' => 'Main image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addImage('hover_image', [
                'label' => 'Hover image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('full_name', [
                'label' => 'Full name',
            ])
            ->addText('position', [
                'label' => 'Position',
            ])
        ->endRepeater();

        //Engineering
        $fields->addtab('Engineering');
        $fields
        ->addRepeater('engineering', [
            'label' => 'Engineering',
            'layout' => 'table',
        ])
            ->addImage('main_image', [
                'label' => 'Main image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addImage('hover_image', [
                'label' => 'Hover image',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('full_name', [
                'label' => 'Full name',
            ])
            ->addText('position', [
                'label' => 'Position',
            ])
        ->endRepeater();

        //Careers
        $fields->addtab('Careers');
        $fields
        //Careers hero images
        ->addImage('career_herobg', [
            'label' => 'career_herobg',
            'return_format' => 'id',  // returns the image ID
        ])
        ->addImage('career_logobg', [
            'label' => 'career_logobg',
            'return_format' => 'id',  // returns the image ID
        ])
        //Regular Position
        ->addRepeater('regular_position', [
            'label' => 'Regular position',
            'layout' => 'table',
        ])
            ->addImage('icon', [
                'label' => 'Icon',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('position', [
                'label' => 'Position',
            ])
            ->addSelect('location', [
                'label' => 'Location',
                'choices' => [
                    'option1' => 'Work from home',
                    'option2' => 'On site',
                    // Add more options as needed
                ],
                'default_value' => 'option1', // Set a default option
                'allow_null' => false, // Whether to allow a blank option
                'multiple' => false, // Whether multiple options can be selected
            ])
            ->addTextarea('job_description', [
                'label' => 'Job Description'
            ])
        ->endRepeater()
        //Internship Position
        ->addRepeater('internship', [
            'label' => 'Internship',
            'layout' => 'table',
        ])
            ->addImage('icon', [
                'label' => 'Icon',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('position', [
                'label' => 'Position',
            ])
            ->addSelect('location', [
                'label' => 'Location',
                'choices' => [
                    'option1' => 'Work from home',
                    'option2' => 'On site',
                    // Add more options as needed
                ],
                'default_value' => 'option1', // Set a default option
                'allow_null' => false, // Whether to allow a blank option
                'multiple' => false, // Whether multiple options can be selected
            ])
            ->addTextarea('job_description', [
                'label' => 'Job Description'
            ])
        ->endRepeater()
        //Why Qstrike
        ->addRepeater('why_qstrike', [
            'label' => 'Why Qstrike',
            'layout' => 'table',
        ])
            ->addText('why', [
                'label' => 'Why',
            ])
            ->addTextarea('description', [
                'label' => 'Description'
            ])
        ->endRepeater();

        $fields->addtab('Misc DO NOT EDIT');
        $fields
        //Careers hero images
        ->addImage('error_404', [
            'label' => 'Error 404 background',
            'return_format' => 'id',  // returns the image ID
        ]);

        return $fields->build();
    }
}


