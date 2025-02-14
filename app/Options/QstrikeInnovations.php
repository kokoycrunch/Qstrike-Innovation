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
            'label' => 'Hero logo',
            'return_format' => 'id',  // returns the image ID
        ])
        //About our company
        ->addImage('about_our_company', [
            'label' => 'About our company',
            'return_format' => 'id',  // returns the image ID
        ])
        //Hero Video
        ->addFile('theme_video', [
            'label' => 'Theme Video',
            'return_format' => 'id', // Returns the attachment ID
            'mime_types' => 'mp4,webm,ogv', // Restrict file types
        ])
        //History Video
        ->addFile('history_video', [
            'label' => 'History Video',
            'return_format' => 'id', // Returns the attachment ID
            'mime_types' => 'mp4,webm,ogv', // Restrict file types
        ])
        //Social Media
        ->addRepeater('social_media', [
            'label' => 'Social Media',
            'layout' => 'table',
        ])
            ->addImage('social_media_icons', [
                'label' => 'Social Media Icons',
                'return_format' => 'id',  // returns the image ID
            ])
            ->addText('link', [
                'label' => 'Link',
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
        // Faces behind qstrike
        ->addRepeater('faces_behind_qstrike', [
            'label' => 'Faces behind qstrike',
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
        ]);

        //404 bg
        $fields->addtab('Misc DO NOT EDIT');
        $fields
        ->addImage('error_404', [
            'label' => 'Error 404 background',
            'return_format' => 'id',  // returns the image ID
        ]);

        return $fields->build();
    }
}


