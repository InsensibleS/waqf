<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'country_id' => 13,
                'grant_id' => 2,
                'status_id' => 2,
                'customer_id' => 3,
                'grant_stage_id' => 2,
                'title' => 'Masks for everyone!',
                'description' => " Masks are an integral part of our lives. Modern industry is not able to provide the whole world with masks that could protect people from COVID-19, I have developed a business plan for the concern for the production of masks to provide the whole world with masks, the concern will include a scientific bureau, factories that produce masks. The outline of the plan is attached below.",
                'publication_date' => '2021-01-16',
                'disposal_date' => '2020-01-23',
                'image1' => '/images/projects/Mask.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            [
                'country_id' => 13,
                'grant_id' => 2,
                'status_id' => 3,
                'customer_id' => 2,
                'grant_stage_id' => 2,
                'title' => 'Antiseptic for everyone!',
                'description' => " Antiseptic are an integral part of our lives. Modern industry is not able to provide the whole world with antiseptic that could protect people from COVID-19, I have developed a business plan for the concern for the production of antiseptic to provide the whole world with masks, the concern will include a scientific bureau, factories that produce antiseptic. The outline of the plan is attached below.",
                'publication_date' => '2021-01-16',
                'disposal_date' => '2020-01-23',
                'image1' => '/images/projects/Sept.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            [
                'country_id' => 13,
                'grant_id' => 2,
                'status_id' => 2,
                'customer_id' => 1,
                'grant_stage_id' => 2,
                'title' => 'Development of an outdoor disinfectant',
                'description' => "The fight against viruses is important. Especially now, when a pandemic of a deadly disease has been raging for a year. Our project consists in the development and installation of disinfection lamps on the streets. We want to base the lamps on quartz lamps that can be turned on at night. It is the night that is the time when the life of big cities stops. Based on our calculations, one such lug cleans 1,000,000 m³ per day.",
                'publication_date' => '2021-01-16',
                'disposal_date' => '2020-01-23',
                'image1' => '/images/projects/Lamp.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            [
                'country_id' => 17,
                'grant_id' => 2,
                'status_id' => 1,
                'customer_id' => 3,
                'grant_stage_id' => 2,
                'title' => "The fight against coronavirus is everyone's business",
                'description' => "Why do we care?
 All of humanity is under stress, the social fabric of society is disrupted.  People are suffering, they are sick, they are afraid.  Our world is facing a common enemy.  We are at war with the virus.

What measures are needed?
 More than ever, we need solidarity, hope and political will to get through this crisis together.

The Secretary General has identified the necessary actions in three key areas:


 - Preparedness for health emergencies
 We must move immediately from a situation where each country is implementing its own health strategies and adopt a strategy that is fully transparent and is backed by a coordinated global response that includes helping countries least prepared to confront this crisis.


 - Targeting social change, economic response and recovery
 Most importantly, we must focus on the interests of the people - the interests of the most vulnerable, low-paid workers, small and medium-sized enterprises.  This means guaranteeing wages, insurance and social security, as well as preventing bankruptcies and layoffs.  It also underscores the need to develop financial and monetary responses to ensure that the burden of responsibility is not placed on the most vulnerable - those who definitely cannot afford it.


 - Global responsibility for sustainable recovery
 We must ensure that lessons are learned and that this crisis is a watershed moment that will force all nations to take more seriously the issues of preparedness for health emergencies, investment in critical public services of the 21st century and effective delivery of global public goods.  We have a framework for action - the 2030 Agenda for Sustainable Development and the Paris Agreement on Climate Change.  We must keep our promises to humans and planets",
                'publication_date' => '2021-01-16',
                'disposal_date' => '2020-01-23',
                'image1' => '/images/projects/all.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            [
                'country_id' => 13,
                'grant_id' => 2,
                'status_id' => 1,
                'customer_id' => 2,
                'grant_stage_id' => 2,
                'title' => 'UAE makes home stretch against COVID-19',
                'description' => "Dubai, UAE.  The United Arab Emirates is planning a definitive recovery from COVID-19, said Dr. Seif Al Dhaheri, spokesman for the UAE's National Emergency, Crisis and Disaster Administration.

At an official briefing, a representative of the department clarified that the country is fully prepared to overcome the pandemic and urged local residents to cooperate with the authorities to further improve the epidemiological situation.

He recalled that a number of sectors of the economy, such as tourism, aviation and education, have been seriously affected by the outbreak of the coronavirus and its aftermath, but the UAE's ability to adapt to changes, for example, quickly introduce technologies for remote work and learning, helped to smooth the situation",
                'publication_date' => '2021-01-16',
                'disposal_date' => '2020-01-23',
                'image1' => '/images/projects/city.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            [
                'country_id' => 13,
                'grant_id' => 2,
                'status_id' => 1,
                'customer_id' => 1,
                'grant_stage_id' => 2,
                'title' => 'COVID-19. Measures to combat coronavirus infection and support the economy',
                'description' => "Meeting of the Presidium of the Coordination Council on the fight against coronavirus.
The New Year holidays are over.  The Russian health care system worked in difficult conditions.  At this time, as a rule, the number of requests for medical care is growing.  Despite this, patients, including those with coronavirus, received the necessary treatment.
Meeting participants
List of participants in the meeting of the Coordination Council under the Government to combat the spread of the new coronavirus infection in the Russian Federation, January 12, 2021
Now people are returning from New Year's holidays.  There was a large passenger flow at airports and train stations.  Many met with friends, relatives and did not always take precautions.  It is necessary to closely monitor the development of events and, if necessary, take prompt action.  This concerns the reserve of the bed fund, drugs for the treatment of people - all this must be available.
Coronavirus vaccination continues throughout the country.  She went on non-working days.  In some regions, the second stage has already started.  The list of those who have the opportunity to get vaccinated is gradually expanding.
There is one more question to which I would like to draw your attention.  The coronavirus has shown that additional measures are needed to minimize the risk of dangerous infections entering our country, and a clear plan to combat them.  The President signed the federal law On biological safety in the Russian Federation.  It provides comprehensive regulation in this area and involves a number of measures that are aimed at protecting citizens.  Now the Government defines a unified state policy in the field of biological safety, as well as coordinates the work of federal departments, regions, organizes their interaction on all related issues.  A state information system in this area will also be created.  Colleagues, we need to prepare all the necessary regulatory framework for the law to work in full force.",
                'publication_date' => '2021-01-16',
                'disposal_date' => '2020-01-23',
                'image1' => '/images/projects/flag.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            //Archive//**
            [
                'country_id' => 1,
                'grant_id' => 1,
                'status_id' => 4,
                'customer_id' => 1,
                'grant_stage_id' => 3,
                'title' => 'Geoplast Residential Projects in South Africa',
                'description' => "Geoplast solutions have been selected for various residential projects in South Africa.  Our products have proven to be a guarantee of the development of modern and environmentally friendly buildings, always keeping up with new construction methods.  The benefits offered are superior to those of other traditional methods.  For these reasons, our solutions have received many preferences, and they always turn out to be executable for any type of project.
Below is a list of the latest luxury residential projects in South Africa to which we have contributed.
1. Foundations of Acorns Residences in Bloemfontein, naturally ventilated with Modulo
Acorns Residential Development is a brand new residential development located in prestigious Somerton, north of Bloemfontein.  Architect Johan Naud, a modern, green and sophisticated vision, consists of 11 independent two-storey houses that combine elegance and energy efficiency.  The module, Geoplast formwork for ventilated scanning spaces, prefers modular design.  In accordance with the principles of environmental sustainability, our product was selected because it provides complete protection against moisture and natural ventilation, guaranteeing quick installation and high structural performance.
2. Modulo for Link House in Centurion, South Africa
The module, a permanent bypass formwork, was chosen by Strey Architects in Pretoria to provide the foundation for Link House, one of his latest creations at Centurion, next to the administration of the South African capital of Pretoria.  Link House is an energy efficient “modern farmhouse” in cement-brick bricks, designed for the lowest possible environmental impact, yet functional and practical.  It is U-shaped, with a south wing consisting of an open-plan living and kitchen area and dining area, and a north wing that consists of bedrooms and bathrooms.  The house is built on the foundations of a raft, as there are craters in the square.  The module was particularly suitable for this type of foundation and allowed the entire floor to be insulated.
3. Form for St. John Penthouse, a new luxury establishment in Cape Town, South Africa
St John's is a luxury building located on St. John's Street in Sea Point, on Cape Town's Atlantic coastline.  It consists of a number of two and three bedroom apartments and an attic, which is the 17th uniquely designed apartment.  For the construction of the latter, Moroff & Khune engineers chose Module H3, H6, H9, H13, H30 and H35 to meet the client's request for a light and raised surface compared to the existing floor, reflecting differences in depth.After casting the concrete, outflow could continue  water during precipitation.  In fact, cuts were made around the perimeter to direct the flow of water below the Module.  Our solution replaced the conventional filler without adding weight to the existing structure;  the lightness of the element was actually the decisive element.  In particular, the smallest solution Minimodulo was very helpful in this project.  In fact, the range of heights of the product made it possible to intervene even with reduced thickness.
4. Drainroof for a new luxury residence in Bantry Bay, Cape Town
Drainroof Geoplast suspended gardens have been selected for a new luxury residence in Bantry Bay, Cape Town.  Drainroof installation was installed by landscaping, garden and home center and allowed to create a roof garden of 350 m².  Our eco-friendly solution offers a high drainage capacity for rainwater, preventing stagnation and protecting the waterproofing layer.  Due to its high lifting capacity, the Drainroof can be used to implement any type of garden, from the lightest to the most efficient use.  Two different panel heights, 6 cm and 2.5 cm, allow for increased ventilated airspace or maximum limitation of the coating thickness.",
                'publication_date' => '2020-12-03',
                'disposal_date' => '2020-12-07',
                'image1' => '/images/projects/Afric1.jpg',
                'image2' => '/images/projects/Afric2.png',
                'image3' => '/images/projects/Afric3.jpg',
                'image4' => '/images/projects/Afric4.jpg',
                'image5' => '/images/projects/Afric5.jpg',
            ],
            [
                'country_id' => 187,
                'grant_id' => 1,
                'status_id' => 4,
                'customer_id' => 2,
                'grant_stage_id' =>4,
                'title' => 'Jasper Solar Farm',
                'description' => "The population of the African continent is expected to double by 2050, according to UN estimates. Business Insider presents ten large-scale projects to create all the necessary infrastructure-railways, dams and power plants that should meet the needs of developing countries.",
                'publication_date' => '2020-12-05',
                'disposal_date' => '2020-12-07',
                'image1' => '/images/projects/Jasper.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            [
                'country_id' => 187,
                'grant_id' => 1,
                'status_id' => 4,
                'customer_id' => 2,
                'grant_stage_id' => 4,
                'title' => 'New Suez Canal',
                'description' => "The continuation of the Suez Canal for another 35 km began to be dug in 2014. The new Suez Canal is expected to double the annual turnover from cargo ships.
According to forecasts of the International Renewable Energy Agency (IRENA), as a result of the decline in prices for photovoltaic cell production technologies and investment in this industry, Africa is expecting a boom in solar panels.",
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' => '/images/projects/JasperSolarFarm.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
        ]);

        DB::table('hashtag_project')->insert([
            //The first Project(id)
            [
                'hashtag_id' => 1,
                'project_id' => 1
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 1
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 1
            ],
            //The second Project(id)
            [
                'hashtag_id' => 4,
                'project_id' => 2
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 2
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 2
            ],
            //The third Project(id)
            [
                'hashtag_id' => 2,
                'project_id' => 3
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 3
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 3
            ],
            //The fourth  Project(id)
            [
                'hashtag_id' => 5,
                'project_id' => 4
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 4
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 4
            ],
            //The fifth Project(id)
            [
                'hashtag_id' => 3,
                'project_id' => 5
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 5
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 5
            ],
            //The sixth Project(id)
            [
                'hashtag_id' => 1,
                'project_id' => 6
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 6
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 6
            ],
            //The seventh Project(id)
            [
                'hashtag_id' => 4,
                'project_id' => 7
            ],
            [
                'hashtag_id' => 5,
                'project_id' => 7
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 7
            ],
            //The eighth Project(id)
            [
                'hashtag_id' => 2,
                'project_id' => 8
            ],
            [
                'hashtag_id' => 3,
                'project_id' => 8
            ],
            [
                'hashtag_id' => 4,
                'project_id' => 8
            ],
            //The ninth Project(id)
            [
                'hashtag_id' => 5,
                'project_id' => 9
            ],
            [
                'hashtag_id' => 1,
                'project_id' => 9
            ],
            [
                'hashtag_id' => 2,
                'project_id' => 9
            ],
        ]);

    }
}
