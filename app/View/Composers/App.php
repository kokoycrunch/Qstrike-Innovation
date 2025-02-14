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
            'siteLogo' => get_field('site_logo', 'options'),
            'aboutOurCompany' => get_field('about_our_company', 'options'),
            'heroLogobg' => get_field('hero_logo', 'options'),
            'themeVideoId' => get_field('theme_video', 'options'),
            'historyVideoId' => get_field('history_video', 'options'),
            'socialMediaIcons' => get_field('social_media', 'options'),
            'ourTeambg' => get_field('our_teambg', 'options'),
            'facesBehindQstrike' => get_field('faces_behind_qstrike', 'options'),
            'career_herobg' => get_field('career_herobg', 'options'),
            'career_logobg' => get_field('career_logobg', 'options'),
            'error404' => get_field('error_404', 'options'),
            //Home page
            'homePageHeroHeader1' => get_field('home_page_hero_header_1'),
            'homePageHeroHeader2' => get_field('home_page_hero_header_2'),
            'homePageHeroSubheadline' => get_field('home_page_hero_subheadline'),
            'aboutHeader' => get_field('about_header'),
            'aboutSubheadline' => get_field('about_subheadline'),
            'ourHistoryHeader' => get_field('our_history_header'),
            'ourHistorySubheadline' => get_field('our_history_subheadline'),
            'ourHistoryTimeline' => get_field('our_history_timeline'),
            'missioniVissionHeader' => get_field('mission_and_vission_header'),
            'missionSubHeader' => get_field('mission_subheader'),
            'missionVissionSubheader' => get_field('mission_and_vission_subheader'),
            'workedWith' => get_field('worked_with'),
            'partnerFactoriesHeadline' => get_field('partner_factories_headline'),
            'countries' => get_field('countries'),
            //Our team
            'ourTeamHeader1' => get_field('our_team_header_1'),
            'ourTeamHeader2' => get_field('our_team_header_2'),
            'ourTeamSubheadline' => get_field('our_team_subheadline'),
            'ourTeamSubheadlineEmphasized' => get_field('our_team_subheadline_emphasized'),
            'coreValuesHeading' => get_field('core_values_heading'),
            'coreValues' => get_field('core_values'),
            'behindQstrikeHeading1' => get_field('behind_qstrike_heading_1'),
            'behindQstrikeHeading2' => get_field('behind_qstrike_heading_2'),
            'behindQstrikeSubheading' => get_field('behind_qstrike_subheading'),
            //Careers
            'careersHeroHeading1' => get_field('careers_hero_heading_1'),
            'careersHeroHeading2' => get_field('careers_hero_heading_2'),
            'careersSubheading' => get_field('careers_subheading'),
            'openPositionHeading' => get_field('open_position_heading'),
            'accordionTitle1' => get_field('accordion_title_1'),
            'accordionTitle2' => get_field('accordion_title_2'),
            'whyQstrike' => get_field('why_qstrike'),
            'whyQstrikeInnovations' => get_field('why_qstrike_innovations'),
            //Contact us
            'contactHeading1' => get_field('contact_heading_1'),
            'contactHeading2' => get_field('contact_heading_2'),
            'contactSubheading' => get_field('contact_subheading'),
            'formHeading' => get_field('form_heading'),
            'visitUsHeading' => get_field('visit_us_heading'),
            'visitUsSubheading' => get_field('visit_us_subheading'),
            //Latest news
            'latestNewsHeroHeading' => get_field('latest_news_hero_heading'),
            'latestNewsHeroSubheading' => get_field('latest_news_hero_subheading'),
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
