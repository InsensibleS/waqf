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
                'image1' => 'images/projects/Mask.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => 'G4TJmJokwRsLirU9HSyr',
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
                'image1' => 'images/projects/Sept.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => 'RQACxyTUioGpCGai73ud',
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
                'image1' => 'images/projects/Lamp.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => 'ei7KSfJoYynOsw8Efk8i',
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
                'image1' => 'images/projects/all.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => 'ARZ8jBdrEeBAbWubXAC0',
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
                'image1' => 'images/projects/city.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => '6IAf2dBfkvjBWrYC3WS4',
            ],
            [
                'country_id' => 13,
                'grant_id' => 2,
                'status_id' => 1,
                'customer_id' => 1,
                'grant_stage_id' => 2,
                'title' => 'COVID-19. Measures to combat coronavirus infection',
                'description' => "Meeting of the Presidium of the Coordination Council on the fight against coronavirus.
The New Year holidays are over.  The Russian health care system worked in difficult conditions.  At this time, as a rule, the number of requests for medical care is growing.  Despite this, patients, including those with coronavirus, received the necessary treatment.
Meeting participants
List of participants in the meeting of the Coordination Council under the Government to combat the spread of the new coronavirus infection in the Russian Federation, January 12, 2021
Now people are returning from New Year's holidays.  There was a large passenger flow at airports and train stations.  Many met with friends, relatives and did not always take precautions.  It is necessary to closely monitor the development of events and, if necessary, take prompt action.  This concerns the reserve of the bed fund, drugs for the treatment of people - all this must be available.
Coronavirus vaccination continues throughout the country.  She went on non-working days.  In some regions, the second stage has already started.  The list of those who have the opportunity to get vaccinated is gradually expanding.
There is one more question to which I would like to draw your attention.  The coronavirus has shown that additional measures are needed to minimize the risk of dangerous infections entering our country, and a clear plan to combat them.  The President signed the federal law On biological safety in the Russian Federation.  It provides comprehensive regulation in this area and involves a number of measures that are aimed at protecting citizens.  Now the Government defines a unified state policy in the field of biological safety, as well as coordinates the work of federal departments, regions, organizes their interaction on all related issues.  A state information system in this area will also be created.  Colleagues, we need to prepare all the necessary regulatory framework for the law to work in full force.",
                'publication_date' => '2021-01-16',
                'disposal_date' => '2020-01-23',
                'image1' => 'images/projects/flag.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => 'dc2PZKGPeXaKUwZw',
            ],
            //Archive//
            //***************///
            ////*****/////
            [
                'country_id' => 1,
                'grant_id' => 1,
                'status_id' => 4,
                'customer_id' => 1,
                'grant_stage_id' => 4,
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
                'image1' => 'images/projects/Afric1.jpg',
                'image2' => 'images/projects/Afric2.png',
                'image3' => 'images/projects/Afric3.jpg',
                'image4' => 'images/projects/Afric4.jpg',
                'image5' => 'images/projects/Afric5.jpg',
                'link' => 'pnW5eXk9FnKdA4jj',
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
                'image1' => 'images/projects/Jasper.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => 'JzLGRR2BqJtSZR2v',
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
                'image1' => 'images/projects/JasperSolarFarm.jpg',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'link' => 'tJXbnS5rd4MTyc53',
            ],
            [
                'country_id' => 10 ,
                'grant_id' => 1 ,
                'status_id' => 4,
                'customer_id' => 3,
                'grant_stage_id'=> 4,
                'title' => 'Reducing meat consumption',
                'description' => 'Nowadays, many people can not imagine life without the consumption of products associated with animal origin. Billions of animals are kept for further consumption in food or their derivatives. Most of the food niche is occupied with cattle, which in turn, due to the specifics of digestion, emit a lot of carbon dioxide, which adversely affects our atmosphere as a whole. The essence of my project is to increase the production of plant crops, to motivate people to switch to plant-based food, thereby reducing the number of cattle',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/Cou.png',
                'image2' =>'images/projects/Cou2.jpg',
                'image3' =>'images/projects/Cou3.jpg',
                'image4' =>'images/projects/Cou4.jpeg',
                'image5' =>'',
                'link' =>'5CiOuDrEPYMKECpv',
            ],
            [
                'country_id' => 164,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>1,
                'grant_stage_id'=>4,
                'title' =>'Effects of fossil fuels. Hydrogen analog',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed bibendum ac ligula sed pulvinar. Nunc pharetra mi quis quam vestibulum, hendrerit facilisis dolor lacinia. Donec eget nulla nec mi malesuada imperdiet a in arcu. Pellentesque tincidunt nec metus a ullamcorper. Pellentesque maximus sem mauris, et sodales augue tristique blandit. Suspendisse nulla nibh, pellentesque ac mauris in, faucibus vestibulum tortor. Curabitur dictum ac arcu ultrices suscipit. Nam lobortis non sapien quis pharetra. Aenean augue velit, interdum eu blandit ac, fringilla sit amet quam.

Nulla sollicitudin et ante vel tincidunt. Aenean dapibus scelerisque metus. Donec varius rutrum ullamcorper. Integer maximus nibh velit, in porttitor nunc condimentum et. Suspendisse a leo a justo egestas venenatis in sed tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis semper ligula orci, sit amet dictum lacus consequat in. Sed mattis, metus sed consequat posuere, ipsum ligula gravida nulla, ac bibendum eros felis consequat nisi. Curabitur sed convallis felis. Vestibulum ac volutpat orci. Vivamus efficitur erat at porta luctus. Maecenas sapien orci, cursus vitae mauris in, aliquam ornare ex.

Aenean fermentum sit amet mi ornare ornare. Quisque vehicula mattis euismod. Etiam mattis purus sed quam placerat, eu egestas risus sollicitudin. Vivamus pulvinar euismod augue, et finibus turpis cursus ut. Duis in fringilla libero, nec porta libero. Maecenas vehicula ex sit amet lacus iaculis porta. Nulla rhoncus, dolor sed consequat mattis, risus est molestie libero, vitae maximus sapien diam nec mi. Nullam a accumsan dui. In pulvinar odio quis lorem facilisis iaculis sed eu lorem. Phasellus a efficitur ligula. Suspendisse tincidunt lacinia neque, nec dapibus lacus malesuada fringilla. Nam ultricies dolor felis. Aliquam erat volutpat. Suspendisse nec mattis turpis, semper placerat neque. Suspendisse vestibulum, neque in facilisis posuere, tellus massa posuere ex, et suscipit enim eros vel dolor.

Nullam bibendum cursus eros, a pretium arcu maximus id. Phasellus vel nunc nec turpis fringilla aliquet. Mauris a dictum purus. Duis molestie laoreet porttitor. Duis sagittis metus quis orci blandit, dignissim laoreet metus venenatis. Morbi tincidunt quis nulla in elementum. Praesent ut sapien a sapien molestie hendrerit.

Integer commodo sapien ut lectus accumsan tincidunt id eget lorem. Quisque neque arcu, dictum sit amet molestie sed, suscipit in justo. Donec quis purus sit amet turpis dictum varius sed id sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam porttitor nisl eget placerat egestas. Nunc in lorem sed ante congue hendrerit. Vivamus vestibulum quam non elit convallis consectetur. Morbi posuere convallis risus nec convallis. Vivamus iaculis, felis placerat luctus malesuada, nulla eros aliquam sapien, a scelerisque ipsum ligula vitae dui. Maecenas porta nisl rutrum rutrum dapibus. Morbi non cursus tellus, eget bibendum purus. In hac habitasse platea dictumst. Sed nec ornare purus. Curabitur scelerisque fermentum diam, eget consequat ipsum consectetur in. Sed faucibus convallis urna a elementum. Nam est nisl, varius vel efficitur et, ultrices et dui. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/hyd1.png',
                'image2' =>'images/projects/hyd2.jpg',
                'image3' =>'images/projects/Ugl1.jpg',
                'image4' =>'images/projects/Ugl2.jpg',
                'image5' =>'images/projects/Ugl3.jpg',
                'link' =>'sJO0utOHcVEr5qzS',
            ],
            [
                'country_id' =>8,
                'grant_id' =>2,
                'status_id' =>4,
                'customer_id' =>3,
                'grant_stage_id'=>4,
                'title' =>'The impact of fireworks',
                'description' =>'According to figures provided by the Office of the Ontario Fire Marshal, fireworks were blamed for 129 fires and almost $2.5 million in damage in Ontario between 2009 and 2013. In addition to property damage, research studies show that the loud sounds of fireworks can cause a great amount of fear, stress and anxiety in wild animals. Animals such as birds and other small mammals are often reported abandoning their nests leaving their defenceless babies behind due to the trauma that they experience from the loud bangs of combustion. The panic of the ordeal can cause disorientation, decreasing the ability for wildlife to locate their homes.

In addition to noise, fireworks can also expose both humans and animals to toxic chemicals from the smoke upon combustion. Scientists from the Meteorological Service of Canada concluded that “studies are needed to document exposure to species of the elements emitted by fireworks and to assess the toxicity of particles of various chemical compositions in inhaled fireworks smoke” (Atmospheric Environment, 2010). Upon combustion, many chemicals and small minerals are released into the air. Leftover particles that fall to the ground can pollute waterways and pose as a risk to both wildlife and humans.

Places around the world are taking action to reduce the negative impacts of fireworks. Beijing, China has outlawed the use of fireworks completely, as the risk of air pollution is too high. Collecchio, Italy has switched to silent fireworks to reduce anxiety among animals. Similarly, Banff, Alberta has cut out the use of fireworks for large celebrations all together due to the adverse effects on local wildlife. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/fire.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'j96XgYxdF4s3GJkg',
            ],
            [
                'country_id' =>7,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>3,
                'grant_stage_id'=>4,
                'title' =>'Eco-friendly tires',
                'description' =>'The first key component to an eco-friendly tire is the raw material used. Companies are attempting to replace rubber with a synthetic blend, often incorporating silica. Silica can not only help replace rubber in the treads, but reduces road friction – which we’ll come back to in a moment.

The construction of the tire, from treads to sidewalls, is also important in keeping the tire green. Stiffer sidewall construction reduces the heat generated by the tire, which contributes to the tire’s longevity.

Aside from rubber, companies are also investigating ways to reduce the amount of petroleum used in creating a tire. Between 5 and 10 gallons of petroleum oil are used to make a single tire, which the industry has been trying to cut back or eliminate for more than 20 years. Making synthetic rubber is also hard on the environment, leading manufacturers to try to cut synthetic rubber usage in half. Carbon black is used as filler for treads, though as mentioned, silica is more and more prevalent as a replacement.

More sustainable plant-derived materials are making headway as substitutes for a variety of tire components,, such as sunflower oil in lieu of petroleum and flora-derived latex replacing rubber. Even oil derived from orange peels has been used in place of more toxic chemicals.',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/Shin.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'v35YqCVcnOY1zmN4',
            ],
            [
                'country_id' =>145,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>3,
                'grant_stage_id'=>4,
                'title' =>'New cleaning screens',
                'description' =>'Nulla mattis massa id luctus pulvinar. Cras lobortis nisl odio, sagittis facilisis urna pretium eu. Donec faucibus commodo mattis. Suspendisse sollicitudin porttitor dignissim. Quisque vitae pulvinar mi. Curabitur volutpat, dolor varius mattis elementum, felis sapien maximus urna, vel ullamcorper justo purus id dui. Duis scelerisque auctor viverra. Maecenas nec leo condimentum, auctor risus et, auctor neque. In aliquet, urna in gravida efficitur, urna lectus lacinia nulla, eu sodales leo velit id eros. Sed euismod velit sed scelerisque ultricies. Proin a ante magna. In vitae massa mi. Sed elit lectus, scelerisque luctus dui sit amet, accumsan euismod nulla. Quisque quis nunc sed velit auctor rutrum. Ut quis massa vitae orci maximus auctor id a elit.',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/zav.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'Iuc185Ex5kTEN5eY',
            ],
            [
                'country_id' =>11,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>1,
                'grant_stage_id'=>4,
                'title' =>'Processing of ore slag',
                'description' =>'Donec eu ornare tellus, eu accumsan ipsum. Nam efficitur ultricies lobortis. Proin at arcu dui. Suspendisse ullamcorper a erat sed lacinia. Aliquam sed eleifend ligula. Duis congue at lectus ac malesuada. Sed dolor mauris, laoreet vitae suscipit facilisis, tristique sit amet lectus. Quisque bibendum libero eu laoreet scelerisque. Nunc dignissim metus eget eros condimentum, nec tincidunt tortor efficitur. Fusce rhoncus ante non lorem bibendum, sit amet elementum justo feugiat. Quisque sodales sem et ex auctor, eu facilisis turpis ullamcorper. Vivamus pharetra, nibh sed facilisis blandit, quam odio elementum orci, ut ullamcorper nisl ipsum non justo.

Quisque semper diam at feugiat pharetra. Nunc facilisis pellentesque purus eget euismod. Fusce aliquet elementum dolor sit amet interdum. Quisque at porttitor dui. Ut interdum posuere ex, non gravida risus dignissim eu. In vulputate risus interdum, viverra ante at, suscipit nisi. Duis nec consequat ligula.

Donec dignissim nunc et libero pretium ultrices. Curabitur volutpat aliquet lacus, at fringilla orci efficitur ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. Sed commodo sem elit, sit amet ornare turpis sodales eu. Suspendisse non vestibulum ipsum. Fusce laoreet ullamcorper risus. Suspendisse ultricies varius blandit. Aenean auctor accumsan mauris, sit amet sodales magna tristique nec. Aliquam interdum tempus consequat. Nulla tincidunt porta sem at volutpat. Maecenas at metus quis ipsum sagittis egestas interdum vitae massa. Maecenas sodales ligula non venenatis imperdiet. Pellentesque sit amet aliquam erat. Fusce nibh nulla, sagittis ac quam in, molestie condimentum nisi.

Curabitur orci quam, ullamcorper non egestas ut, tincidunt quis nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus quis convallis felis, non mollis elit. Vivamus non ultricies leo, et rhoncus ipsum. Sed rutrum quam eu dui lobortis commodo. Nam vitae congue enim, at euismod purus. Sed maximus, magna in tristique aliquet, erat dui bibendum lectus, nec condimentum nibh metus eget eros. Proin consectetur scelerisque lorem in posuere. Maecenas viverra malesuada nisl non sagittis. Aenean ut pretium lacus. Nunc ornare tristique hendrerit. Vivamus tristique consectetur erat, vitae placerat lorem fringilla quis. Fusce sit amet iaculis ligula, quis tempus urna.

Quisque nulla ante, finibus quis ultrices ut, sagittis ut turpis. Aliquam sem quam, consequat tempor viverra mattis, congue at sapien. Nulla vestibulum sollicitudin arcu pharetra porta. Donec vehicula viverra quam non efficitur. Phasellus a est ut orci rhoncus molestie. Donec vulputate nunc ut aliquam imperdiet. Etiam sollicitudin eros quis massa sollicitudin interdum eu nec erat. Ut facilisis, enim id maximus condimentum, eros metus dictum nunc, commodo tristique magna eros eget dolor. Vivamus et semper sem, eu convallis sem. Pellentesque tincidunt lectus cursus pulvinar maximus. Aliquam commodo, diam sed lobortis egestas, nulla tortor bibendum tellus, ut consectetur mauris ante eget magna. Phasellus eu aliquet massa. Curabitur pretium, ligula tincidunt aliquam egestas, magna magna bibendum mauris, sed sagittis ipsum purus vitae dui. Curabitur sed metus eleifend, bibendum nisi a, viverra enim. Aenean maximus vestibulum est. Donec placerat lorem sit amet feugiat luctus.

Praesent urna tellus, hendrerit eu diam ac, blandit egestas risus. Maecenas feugiat urna ante, non varius libero luctus at. Suspendisse ut ipsum in nisl suscipit mattis vel et nibh. Morbi ut pellentesque magna, non mattis erat. Cras a velit sed dolor sodales pretium. Pellentesque et augue tincidunt, mattis est a, egestas ante. Vestibulum feugiat arcu vel lorem elementum, ac laoreet ligula porta. Integer sit amet hendrerit purus, ullamcorper imperdiet sapien. Donec nec consectetur felis, in aliquam sem. Maecenas eu nibh ullamcorper, convallis ex a, pellentesque eros. Pellentesque convallis odio sed efficitur dapibus. Cras sed lacus urna. Quisque ut turpis vestibulum, consequat nulla eget, tincidunt turpis. Curabitur quis magna eros. Duis mauris ante, vestibulum dictum massa vel, fermentum imperdiet ante. Pellentesque lobortis, velit eu convallis tempus, enim eros mollis diam, et pellentesque est nisl in lorem. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/Met.jpg',
                'image2' =>'images/projects/met2.jpg',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'Io2cCd61dox9tiSi',
            ],
            [
                'country_id' =>14,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>2,
                'grant_stage_id'=>4,
                'title' =>'Leaf paper',
                'description' =>'Donec volutpat efficitur felis. Mauris lacus arcu, sollicitudin id mauris vel, dapibus gravida diam. Etiam pulvinar leo non sem placerat pellentesque ut a magna. Sed ornare, eros eget mollis ultricies, nunc dui viverra augue, eget finibus enim justo a diam. Curabitur non lorem urna. Praesent rhoncus semper iaculis. Phasellus consequat cursus condimentum. Aliquam sed lectus dolor. Sed vel consectetur risus, in tristique nunc. Ut varius justo nisi, non condimentum purus vulputate nec. Proin posuere aliquet nisl nec ornare.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam ullamcorper purus at velit consequat, vel sagittis sapien egestas. Pellentesque efficitur, ipsum id ultricies ullamcorper, massa lacus placerat nisl, vel euismod massa elit at orci. Aliquam erat volutpat. Sed eget tortor nec dolor iaculis auctor. Aenean ornare mattis porttitor. Cras quis orci suscipit, ornare libero quis, tincidunt risus. Praesent turpis neque, feugiat eu euismod eu, posuere sed quam.

Donec pharetra, neque et porta rutrum, odio lacus dignissim quam, sit amet commodo quam sem sit amet est. Phasellus tempor, mauris interdum luctus auctor, est massa tincidunt felis, at aliquam nibh tortor sit amet dui. Aenean accumsan velit a sapien accumsan ullamcorper. Sed eu magna at tellus accumsan rhoncus nec ac dolor. Curabitur sagittis enim eget leo facilisis, ac condimentum velit ultricies. Maecenas tempus aliquet eros nec tempus. Sed vel quam vel augue rhoncus vehicula. Phasellus dui quam, rutrum ac vehicula et, fringilla vitae sapien. Pellentesque mollis mi purus, sed pulvinar augue sagittis porta. Aliquam erat volutpat.

Nulla imperdiet id dolor vel hendrerit. Nam vehicula vel leo eget fringilla. Nulla facilisi. Proin augue metus, fringilla sit amet porttitor et, aliquet sed leo. In hac habitasse platea dictumst. Nullam sed enim ante. Integer enim lectus, molestie nec lobortis a, rutrum quis odio. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/list.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'3s1otrdFgwjKKYJ3',
            ],
            [
                'country_id' =>1,
                'grant_id' =>2,
                'status_id' =>4,
                'customer_id' =>3,
                'grant_stage_id'=>4,
                'title' =>'Thorium reactors',
                'description' =>'Praesent imperdiet eros non felis tempor pharetra. Quisque molestie bibendum dolor eu pulvinar. Ut a maximus urna, sed malesuada urna. Donec euismod facilisis eros, in commodo quam faucibus sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus lorem est, mattis id volutpat ut, ultricies sodales metus. Cras mattis in sapien eu venenatis. Fusce eu cursus metus.

Duis ullamcorper dolor eu porta ullamcorper. Maecenas quis orci at urna facilisis porta at sed velit. Nulla suscipit porta nisl, ac sagittis velit mattis a. Sed euismod porta justo, nec vulputate arcu pellentesque quis. Nam semper pellentesque tellus vitae iaculis. Maecenas hendrerit eros felis, facilisis laoreet sapien commodo dictum. Praesent vestibulum felis eget lacus tincidunt malesuada. Ut fermentum porta felis, eget sodales sem feugiat at. Aenean commodo arcu elit, sit amet vehicula eros aliquam in. Suspendisse nec ultricies sem, ac dapibus nisi. Proin massa nisi, cursus vel nunc sit amet, fermentum auctor odio. In urna neque, tristique vel ornare eu, iaculis sed lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Curabitur lacus tellus, feugiat vel tempus ac, molestie sodales lectus. Proin ultrices fringilla velit nec iaculis. In facilisis, tellus at pretium sodales, felis magna volutpat elit, quis mollis odio mi eget turpis. Donec euismod egestas eros in vulputate. Aenean tempus luctus iaculis. Integer nisl eros, placerat ac turpis in, consequat maximus nisi. Phasellus ut ante sit amet velit tempus commodo. Pellentesque laoreet vel est feugiat iaculis. Cras a velit congue ligula rutrum porttitor cursus a nisl. Mauris eu pharetra neque.

Quisque ac elit fermentum turpis auctor egestas nec aliquam mauris. Fusce vel ligula enim. Phasellus aliquam ac tellus ac sagittis. Donec id cursus lacus. Praesent mattis ligula eget velit vestibulum, eget accumsan risus lacinia. Duis molestie rutrum odio. Integer pharetra sapien quis felis condimentum blandit. Ut varius nisl leo, a semper sapien porta vel. Proin nec elit nec dui porta bibendum eu sed tortor. Nulla efficitur dui scelerisque efficitur pharetra. Donec ipsum quam, aliquam ac est vel, facilisis blandit dui. Nunc turpis ipsum, consequat ac porttitor at, iaculis ut ante.

Vestibulum at odio magna. Nulla malesuada mauris a lorem pellentesque, et rutrum erat condimentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc hendrerit porta fermentum. Duis et est et mauris egestas luctus eget in arcu. Nulla commodo augue enim, vitae pellentesque leo dictum a. Morbi eget magna vel nibh hendrerit imperdiet ac et arcu. Cras rutrum vitae neque a ornare. Morbi at risus et libero feugiat venenatis. Sed non lobortis felis, eget scelerisque magna. Phasellus vehicula ante ut ipsum hendrerit gravida. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/Th.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'Ofxvz2ZydKesQr1z',
            ],
            [
                'country_id' =>17,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>2,
                'grant_stage_id'=>4,
                'title' =>'How to "repair" ozone holes?',
                'description' =>'We have rockets that can act as a needle. My idea is simple, fill the ozone holes with ozone threads',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/ozon.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'8GeoRyhdWbGQRIpR',

            ],
            [
                'country_id' =>18,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>1,
                'grant_stage_id'=>4,
                'title' =>'Equipping tankers in case of emergency',
                'description' => '

Ut vel augue a diam dapibus blandit. In sit amet venenatis ante, at feugiat massa. Pellentesque at sem quis risus posuere tincidunt. Nam porttitor faucibus tortor eget malesuada. Suspendisse ut accumsan libero, sit amet porta magna. Maecenas elementum sit amet turpis a accumsan. Nunc accumsan tristique lorem, vitae volutpat risus convallis eu. Nam maximus enim non arcu aliquet, eu facilisis dolor ullamcorper. Pellentesque euismod, urna a congue sollicitudin, nulla purus finibus nunc, vel faucibus eros odio sed eros. Duis ullamcorper enim et turpis lacinia gravida. Fusce leo orci, tempus sed enim eu, pulvinar ultrices lacus. Nam neque ante, consectetur vel justo nec, ultricies vehicula magna. Etiam lacinia eros risus, id blandit purus accumsan eget. In mollis massa ut tortor efficitur, venenatis pretium sapien pulvinar. Mauris commodo eu quam eu vulputate. Vestibulum in rutrum massa.

Ut nec ullamcorper neque. Nunc vestibulum velit eu diam gravida placerat. Nullam nec viverra purus. Maecenas auctor libero et justo congue, a bibendum quam tempor. Phasellus vitae eleifend purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam magna nunc, volutpat vitae ipsum ac, posuere gravida ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. In tempus suscipit pellentesque. Vivamus ac gravida urna. Morbi suscipit ante id dolor hendrerit vestibulum. Vivamus interdum auctor scelerisque. Quisque magna justo, luctus id elit eu, luctus varius sem. Donec ut metus accumsan, vulputate libero et, laoreet mi. Curabitur semper, diam at pretium accumsan, lacus ligula viverra ante, ut semper dolor ligula a massa.

Etiam et purus eget libero faucibus sodales in in lorem. Aliquam congue sagittis mi, sed ultricies nisl tristique in. Ut hendrerit volutpat sollicitudin. Etiam eros mi, laoreet eu blandit et, maximus nec augue. Aenean commodo ipsum vel diam pretium, in vestibulum sapien ullamcorper. Vivamus cursus posuere urna, at facilisis metus consequat eu. Nam vitae velit tortor. Integer egestas ac quam nec aliquet. Donec porttitor erat id hendrerit lacinia. Nam viverra libero enim, quis aliquet lectus viverra vitae. Vivamus aliquet sagittis pretium. Maecenas faucibus leo eget neque tincidunt pretium. Pellentesque eget feugiat erat, sit amet fermentum augue. Aenean scelerisque sem massa, sit amet lobortis orci euismod ac. Cras lobortis dui eu tincidunt commodo. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/tank.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'6NfTvAAxob01hBek',
            ],
            [
                'country_id' =>13,
                'grant_id' =>1,
                'status_id' =>4,
                'customer_id' =>3,
                'grant_stage_id'=>4,
                'title' =>'Biological disasters. Tightening measures',
                'description' =>'
Donec quam ligula, dignissim eget pretium sed, ullamcorper et ex. Quisque nec elit vitae libero porta tincidunt quis cursus nibh. Aenean dapibus egestas tempor. Nulla facilisi. Phasellus elit metus, elementum nec tortor vel, blandit finibus tellus. Nulla convallis porta cursus. Pellentesque non tellus dapibus, vehicula erat mollis, dapibus est. Nam accumsan leo quis rutrum molestie. Nam a quam et nibh facilisis hendrerit. Integer laoreet ante ante, eget ullamcorper augue ultrices vitae. Integer hendrerit ac nibh ac efficitur.

Nunc vel ipsum ligula. Nam ligula justo, fringilla ac molestie finibus, accumsan id magna. Phasellus vitae sagittis turpis. Maecenas quam risus, pharetra dignissim massa vel, dapibus sollicitudin quam. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/bio.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'EjMW0CSzbQ1cwZOv',
            ],
            [
                'country_id' =>4,
                'grant_id' =>1,
                'status_id' => 4,
                'customer_id' =>2,
                'grant_stage_id'=>4,
                'title' =>'A new method of plastic processing',
                'description' => '

Suspendisse eros lacus, porttitor vel faucibus id, consectetur sit amet velit. Donec efficitur luctus nisl et semper. Nulla semper non risus vitae elementum. Sed suscipit vitae lectus gravida sodales. Donec tincidunt magna magna, a ultrices neque aliquet ut. Nam ac molestie purus, quis blandit eros. Suspendisse at arcu in ex lacinia accumsan ac tempus velit. Quisque nec neque purus. Ut non laoreet lorem, quis placerat lectus. Nunc sit amet risus erat. Nunc cursus mi eget arcu tempor rutrum quis quis ante. Suspendisse non imperdiet eros, eu pellentesque ex. Nunc tristique feugiat elit. Mauris a feugiat nunc, eget aliquet quam. Fusce quis tempor elit. Aliquam ut ex interdum, facilisis velit ut, feugiat purus.

In sodales ultrices vestibulum. Pellentesque sed finibus felis, sed egestas arcu. In sit amet nisi vitae lorem eleifend maximus. Donec et orci ante. Mauris posuere nulla ultricies tempor interdum. Phasellus porttitor dignissim eros nec pulvinar. Phasellus a lorem sed sapien volutpat iaculis. Morbi et arcu quis dolor ultricies maximus. Ut elementum interdum metus, et lacinia massa pulvinar non. Praesent placerat sapien ac purus ullamcorper tincidunt. Pellentesque efficitur tempus neque et viverra. Donec nec auctor lacus. Curabitur vel sodales eros. Duis hendrerit sed augue id efficitur. Ut elementum eros vitae posuere porta.

Pellentesque a gravida nibh, vitae pharetra risus. Cras tempus nulla ante, eget vestibulum libero lacinia sit amet. Cras sed nibh elit. Duis vel nunc quis libero commodo varius eu ut mauris. Curabitur elementum ligula ut enim efficitur, a volutpat metus elementum. Duis vel porttitor libero. Nunc et leo lectus. Nullam dictum iaculis metus vel elementum. Suspendisse aliquet erat sit amet ligula rhoncus accumsan. Morbi ut magna nunc. Duis vehicula ex quis lectus consequat venenatis et a libero. Suspendisse dignissim ullamcorper quam, id dapibus velit pretium id. Mauris lobortis risus non ligula tincidunt, eget laoreet nisi vehicula.

Aenean dictum nec urna in commodo. Morbi finibus odio sapien, at aliquet libero efficitur tempus. Vestibulum efficitur, tortor in rutrum pretium, metus ante placerat eros, sed lacinia enim eros ut augue. Sed tempor lectus vitae ornare facilisis. Maecenas non metus nec lectus commodo iaculis. Nullam euismod maximus orci, sed iaculis augue rutrum et. Donec nec enim velit. Fusce at velit augue. Aenean vehicula neque vel vestibulum venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut dignissim vulputate purus.

Nunc sit amet metus sed ipsum commodo semper vitae sed mi. Maecenas dictum elit et dolor laoreet pharetra. In dignissim id dui ut fringilla. Quisque ut dui vitae dolor cursus commodo sed ut ex. Proin aliquet velit volutpat maximus pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas vestibulum nunc justo, sed congue nisl laoreet in. Ut ut mi sit amet tortor porttitor mattis ac id erat. Nunc non augue ipsum.

Vestibulum convallis libero metus, volutpat malesuada ipsum imperdiet non. Aenean in est accumsan, rutrum odio et, ullamcorper orci. Nullam maximus sem ut odio finibus, vel eleifend magna porta. Nullam vitae feugiat odio. Sed nec eros enim. Vestibulum maximus ac turpis ac consectetur. Suspendisse a imperdiet arcu, scelerisque tincidunt sem. Cras vitae felis lectus. Pellentesque euismod, nibh et faucibus eleifend, mauris felis euismod odio, non bibendum arcu massa nec nisi. In iaculis lorem eu metus laoreet, nec imperdiet nisl mattis. Aenean felis arcu, vulputate eu nisl ut, tincidunt egestas augue. Aliquam ac porttitor tellus.

Phasellus porttitor ex dictum laoreet tincidunt. Praesent placerat ante odio, vel dictum nisl tristique in. Etiam euismod massa et metus accumsan scelerisque. Suspendisse hendrerit egestas tortor id bibendum. Quisque vehicula, turpis a vestibulum porta, ex eros dictum metus, a vulputate dui turpis eget metus. Suspendisse potenti. Duis a dolor eu felis feugiat dictum. Aenean arcu odio, facilisis eget elementum vitae, suscipit nec sem. Etiam vitae mattis nisl. Duis consequat nisl id massa tristique iaculis. Duis ut lectus non lectus consectetur placerat. Praesent et nisl vel diam tempor egestas.

Donec lobortis ultrices dolor feugiat ullamcorper. Duis nec feugiat nisl. Phasellus et nisi bibendum, dignissim sem non, consequat ligula. In a dui dui. Vivamus eget nunc tempor, laoreet sapien vel, ornare erat. Nulla cursus dolor metus, at gravida justo bibendum non. Mauris fermentum, nulla a dictum vulputate, eros elit vestibulum tellus, quis tincidunt ante tellus quis nunc. Aenean pellentesque urna sit amet facilisis auctor. Curabitur at blandit purus, eget pellentesque turpis. Donec consequat ipsum et augue condimentum, in posuere elit sagittis. Vestibulum et tellus justo. Ut imperdiet ligula eget ultricies lacinia. Nulla eget nisl et ipsum bibendum ornare in a velit. Nunc et odio et erat placerat consectetur ac rutrum elit. Integer elementum scelerisque tellus ut faucibus. Nulla in placerat justo, placerat vestibulum augue.

Ut a dictum sem. Vestibulum iaculis sapien et purus accumsan, id dictum dolor pulvinar. Aliquam in augue erat. Aliquam erat volutpat. Proin iaculis erat vitae velit pulvinar, at convallis enim elementum. Nullam sit amet urna sit amet diam semper sagittis ac a enim. Integer dignissim tincidunt dignissim.

Donec sed odio nibh. Mauris mollis ex id urna commodo, sit amet pretium augue euismod. Morbi ac ex tellus. Cras id est euismod, semper sem a, porta lacus. Quisque a lectus vel enim auctor pharetra ut eget ex. Morbi sed ipsum est. Aenean in venenatis diam, in pellentesque lectus. In quis tempus est. Maecenas ultricies malesuada euismod. Vestibulum rhoncus lacus ac quam convallis, interdum pulvinar ipsum tincidunt. Sed faucibus feugiat posuere.

Morbi pulvinar tellus sit amet ligula facilisis cursus. Praesent ultricies, ex sit amet ullamcorper pharetra, felis ex vulputate erat, in placerat felis magna et nibh. Morbi nec sem congue, egestas quam ac, commodo mauris. Pellentesque congue congue metus ut egestas. Donec at rhoncus arcu. Mauris vel turpis nulla. Suspendisse at massa ac odio vehicula dignissim. Etiam varius erat accumsan tellus facilisis, non efficitur neque fringilla. Proin sit amet molestie metus. Nam aliquam erat non maximus feugiat. Quisque malesuada, lorem a scelerisque convallis, ligula augue pellentesque lacus, fermentum faucibus libero purus sit amet odio. Donec ornare congue velit, a varius enim facilisis vitae.

Quisque ac faucibus augue. Aenean eget euismod tortor, eu finibus urna. Morbi convallis arcu at porta mattis. Ut dapibus quam lacus, in tincidunt. ',
                'publication_date' => '2020-12-04',
                'disposal_date' => '2020-12-07',
                'image1' =>'images/projects/pls.jpg',
                'image2' =>'',
                'image3' =>'',
                'image4' =>'',
                'image5' =>'',
                'link' =>'bGjY9W8rW3RxMEFd',
            ],
        ]);
    }
}
