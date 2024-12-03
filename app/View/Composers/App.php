<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'siteLogo' => get_field('logo', 'options'),
            'heroLogobg' => get_field('logo', 'options'),
            'trustedBrands' => get_field('brands', 'options'),
            'themeVideoId' => get_field('theme_video', 'options'),
            'history' => get_field('history', 'options'),
            'partnerFactories' => get_field('partner_factories', 'options'),
            'ourTeambg' => get_field('our_teambg', 'options'),
            'coreValues' => get_field('core_values', 'options'),
            'cSuite' => get_field('c_suite', 'options'),
            'admin' => get_field('admin', 'options'),
            'creative' => get_field('creative', 'options'),
            'engineering' => get_field('engineering', 'options'),
            'career_herobg' => get_field('career_herobg', 'options'),
            'career_logobg' => get_field('career_logobg', 'options'),
            'regularPosition' => get_field('regular_position', 'options'),
            'internship' => get_field('internship', 'options'),
            'whyQstrike' => get_field('why_qstrike', 'options'),
            'error404' => get_field('error_404', 'options'),
            //Positions
            'positionTitle' => get_field('title'), // Title field
            'responsibilities' => get_field('responsibilities'), // Repeater field for Responsibilities
            'requirements' => get_field('requirements'), // Repeater field for Requirements
            'location' => get_field('location'), // Location field

        ];
    }
    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
}
