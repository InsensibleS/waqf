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
            //Archiv//**
            [
                'country_id' => '1',
                'grant_id' => '1',
                'status_id' => '4',
                'customer_id' => '1',
                'grant_stage_id' => '1',
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
                'image1' => '/images/project/Afric1.jpg',
                'image2' => '/images/project/Afric2.png',
                'image3' => '/images/project/Afric3.jpg',
                'image4' => '/images/project/Afric4.jpg',
                'image5' => '/images/project/Afric5.jpg',

            ],
            [
                'country_id' => '187',
                'grant_id' => '1',
                'status_id' => '4',
                'customer_id' => '2',
                'grant_stage_id' => '1',
                'title' => 'Jasper Solar Farm',
                'description' => "The population of the African continent is expected to double by 2050, according to UN estimates. Business Insider presents ten large-scale projects to create all the necessary infrastructure-railways, dams and power plants that should meet the needs of developing countries.",
                'publication_date' => '2020-12-05',
                'disposal_date' => '2020-12-07',
                'image1' => '/images/project/Jasper.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
            [
                'country_id' => '187',
                'grant_id' => '1',
                'status_id' => '4',
                'customer_id' => '2',
                'grant_stage_id' => '1',
                'title' => 'New Suez Canal',
                'description' => "The continuation of the Suez Canal for another 35 km began to be dug in 2014. The new Suez Canal is expected to double the annual turnover from cargo ships.
According to forecasts of the International Renewable Energy Agency (IRENA), as a result of the decline in prices for photovoltaic cell production technologies and investment in this industry, Africa is expecting a boom in solar panels.",
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' => '/images/project/JasperSolarFarm.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
            ],
        ]);
    }
}
