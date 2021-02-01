<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'More than 400,000 register for vaccine in Saudi Arabia',
                'image' => '/images/news/1.jpg',
                'description' => 'Number of virus cases dip below 50 in all regions',
                'full_description' => '<p>&nbsp;</p>

<p>Number of virus cases dip below 50 in all regions JEDDAH: More than 400,000 people from Saudi Arabia&rsquo;s high-risk group have registered to receive the coronavirus disease (COVID-19) vaccine through the Sehaty app, according to the Ministry of Health. &ldquo;Participants who received the first dose of the vaccine are in stable condition with no issues arising,&rdquo; said the Ministry of Health spokesman Dr. Mohammed Al-Abd Al-Aly. &ldquo;We remind all that it&rsquo;s vital that everyone receives their second dose (booster shots) in order to ensure full immunity against the virus.&rdquo; He said healthcare workers would maintain contact and follow up on the status of people who have had the first dose and give them appointments to receive the second, according to the schedule provided by the vaccination&rsquo;s manufacturers.&nbsp;</p>

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img class="fr-dii fr-fic" src="http://127.0.0.1:8000/storage/images/news/coronavirus-image-(002).tmb-smallbanne.jpg" style="height:200px; width:400px" /><img class="fr-dii fr-fic" src="http://127.0.0.1:8000/storage/images/news/brief-1-22-21-pic-dashboard.jpg" style="height:200px; width:400px" /></p>

<p>The Pfizer-BioNTech vaccine requires a priming dose followed by a booster shot with an interval of 21 days between each in order to achieve a 95 percent efficacy rate to prevent or decrease the symptomatic effects of a COVID-19 infection. At Sunday&rsquo;s press briefing the spokesman also noted the change in the rate of infections across the Kingdom&rsquo;s regions during the past two weeks. Six of the Kingdom&rsquo;s regions have shown some stability with a slight increase in numbers, up to 10 percent, whereas Riyadh, Qassim, Hail, Jazan and the Northern Borders have shown a 50 percent decrease in cases. &nbsp;</p>

<p>&nbsp;</p>',
                'publication_date' =>  date('Y-m-d H:i:s'),
            ],
            [
                'title' => '5m perform rituals at Grand Mosque since resumption',
                'image' => '/images/news/2.jpg',
                'description' => 'JEDDAH: Saudi Arabia has received 5 million Umrah pilgrims and worshippers since the resumption of the rituals, said Minister of Hajj and Umrah Dr. Mohammed Saleh Benten.',
                'full_description'=> '<p>JEDDAH: Saudi Arabia has received 5 million Umrah pilgrims and worshippers since the resumption of the rituals, said Minister of Hajj and Umrah Dr. Mohammed Saleh Benten. He said that no cases of COVID-19 infections were reported among pilgrims and worshippers. The statement came during a meeting with Makkah Gov. Prince Khaled Al-Faisal in Jeddah on Wednesday. Saudi Arabia suspended Umrah in March and significantly downsized the Hajj pilgrimage in July by only allowing about 1,000 pilgrims, all in response to the COVID-19 pandemic.</p>

<p><img class="fr-dii fr-fic fr-fil" src="http://127.0.0.1:8000/storage/images/news/Без названия.jpeg" style="height:190px; margin-left:500px; margin-right:500px; width:309px" /></p>

<p>The Kingdom is getting back on track after earlier lockdowns while adhering to strict health protocols. On Sept. 22, the Kingdom announced a gradual resumption of Umrah pilgrimage in four phases. Tourist offices abroad are following their contracts with the Ministry of Hajj and Umrah so that pilgrims can come to perform Umrah rituals. In the first phase, which lasted for 14 days, 84,000 pilgrims were received &mdash; 6,000 people per day. A total of 210,000 pilgrims performed Umrah rituals during the second phase. The third phase, which started on Nov. 1, permitted pilgrims from abroad to perform the ritual alongside residents of the Kingdom.</p>',
                'publication_date' =>  date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Saudi national archives foundation Darah uncovering past with oral history tradition',
                'image' => '/images/news/3.jpg',
                'description' => 'RIYADH: From one generation to another, history is told and retold.',
                'full_description'=> '<p><img class="fr-dii fr-fic fr-fil" src="http://127.0.0.1:8000/storage/images/news/whatsapp_image_2020-12-23_at_6.19.32_pm.jpg" style="float:right; height:391px; width:663px" /><span style="font-size:16px">RIYADH: From one generation to another, history is told and retold. But with time, large fragments are lost, so a Riyadh-based research center is helping preserve some of Saudi Arabia&rsquo;s most important historical facts. The earliest forms of storytelling for many cultures were primarily oral, combined with gestures and expressions, and at times, even drawings and paintings. With time these stories differ, their essence forgotten and countless tales lost through time. In recognition of the beauty of this dying art, the King Abdul Aziz Foundation for Research and Archives (Darah) has upgraded its work to record and preserve oral accounts of Saudi Arabian history and make them accessible to researchers. Speaking to Arab News, Darah spokesman Sultan Alawairdhi said the center&rsquo;s founding is in line with the government&rsquo;s policy to preserve its history. He added that it is of vital importance to ensure that historical narratives are accessible to all by using knowledge and historical facts told by the elderly who lived through major historical events that shaped the Kingdom.</span></p>',
                'publication_date' =>  date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Saudi Arabia’s giftedness foundation Mawhiba signs deal to protect intellectual property rights',
                'image' => '/images/news/4.png',
                'description' => 'RIYADH: The King Abdul Aziz and His Companions Foundation for Giftedness and Creativity (Mawhiba) on Tuesday signed an agreement with the Saudi Authority for Intellectual Property (SAIP) joining the National Network of Technology and Innovation Support Centers (TISC).',
                'full_description' => '<h4><span style="font-size:14px">RIYADH: The King Abdul Aziz and His Companions Foundation for Giftedness and Creativity (Mawhiba) on Tuesday signed an agreement with the Saudi Authority for Intellectual Property (SAIP) joining the National Network of Technology and Innovation Support Centers (TISC). The TISC enables innovators to protect and manage their intellectual property rights. The deputy secretary-general of Mawhiba, Basil Al-Sadhan, said the foundation seeks to create an environment that motivates talent and&nbsp;<img class="fr-dii fr-fic fr-fil" src="http://127.0.0.1:8000/storage/images/news/pic04578_lw.jpg" style="float:right; width:271px" />encourages the youth to pursue their passion for science and become future leaders.</span></h4>

<p><span style="font-size:14px"><img class="fr-dii fr-fic fr-fir" src="http://127.0.0.1:8000/storage/images/news/151228-saudi-king-salman.jpg" style="float:left; width:275px" /><br />
Al-Sadhan said Mawhiba found the TISC initiative launched by the SAIP helpful in achieving its core mission. &ldquo;TISC allows Mawhiba to access and employ technical and scientific expertise, provide assistance in searching and analyzing intellectual and technical property databases and obtain information on patents.&rdquo; By signing the deal, Mawhiba has bec</span></p>

<div>
<p>&nbsp;</p>
</div>

<p><span style="font-size:14px">ome one of the 26 entities that are part of SAIP&rsquo;s national network. SAIP aims to organize, support, sponsor, protect and promote intellectual property in the Kingdom in accordance with global best practices. Al-Sadhan said by joining the network Mawhiba has now gained access to other support services that suit the needs of its students and employees. &ldquo;The most important of these services is providing guidance on intellectual property rights such as the use of patents, industrial designs, trademarks, and copyrights,&rdquo; he said. SAIP Vice President Sami Al-Sudais welcomed Mawhiba aboard TISC, which enables users to acquire the technical skills needed to search intellectual property databases.</span></p>',
                'publication_date' =>  date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Jeddah streets and bridges embellished with Arabic calligraphy',
                'image' => '/images/news/5.png',
                'description' => 'JEDDAH: Jeddah municipality, in partnership with the Oyoun Jeddah Charitable Association (OJCA)',
                'full_description' =>'<p>JEDDAH: Jeddah municipality, in partnership with the Oyoun Jeddah Charitable Association (OJCA), has launched an initiative to install 50 Arabic calligraphy murals across the city, including on some of its main flyovers. The initiative, which coincides with the UN&rsquo;s Arabic Language Day, aims to add an aesthetic touch to the city with Arabic calligraphy paintings and murals, some of which are more than 70 meters long and 3 meters high. The UN General Assembly approved Arabic as an official UN language in 1997. The day is meant to promote the equal use of all six of the UN&rsquo;s official working languages throughout the organization. In January, the Saudi Ministry of Culture announced 2020 as the Year of Arabic Calligraphy to highlight its importance in reflecting the richness of Arab culture. Jeddah Mayor Dr.</p>

<p><img class="fr-dii fr-fic fr-fil" src="http://127.0.0.1:8000/storage/images/news/eng._anas_mohammed_seirafi_copy.png" style="float:left; width:215px" /></p>

<p>&nbsp;Saleh Al-Turki said that the municipality has signed agreements with OJCA and other government, private and charitable organizations to artistically improve Jeddah&rsquo;s landscapes for its residents and visitors. He said that these initiatives were being implemented by the municipality on the city&rsquo;s main roads, sidewalks, buildings and public squares. He also noted that the partnership with OJCA was in line with the Kingdom&rsquo;s Vision 2030. With its more than 12 million words, Arabic is spoken by more 500 million people around the world. It is also the second-fastest-spreading language. It has enriched many languages &mdash; including Turkish, Persian, Spanish, Kurdish, French and Urdu &mdash; with its vocabulary.</p>

<p>&nbsp;</p>

<p>The chairman of OJCA, Anas Mohamed Serafi, told Arab News that the idea of the initiative began when the municipality held a contest under the title &ldquo;Municipality Award for Visual Arts&rdquo; in 2019.&nbsp;</p>

<p>&nbsp;</p>

<p>&ldquo;There were three themes in that contest &mdash; Arabic calligraphy, painting and photography. Today we are collaborating with the municipality to modernize, humanize and make our beautiful city more humane and civilized. The contest was all related to these themes,&rdquo; Serafi said.</p>

<p>He added that OJCA had signed two initiatives with Jeddah municipality, both aimed at making the city look better.</p>

<p>&ldquo;We believe that visitors to the Bride of the Red Sea should see nothing but beauty wherever they go in the city. The genuine artworks that won awards in the contest have been replicated on walls. These works were reprinted and posted on the walls; they are not graffitied&rdquo; he said.&nbsp;</p>

<p>&nbsp;</p>

<p>The other initiative, the Corniche of Colors, is also part of the municipality&rsquo;s efforts to humanize the city. &ldquo;We have turned the sidewalks at the corniche into places full of life and fun. These zones have attracted many walking enthusiasts of both genders and age groups, and even cyclists,&rdquo; Serafi said.</p>

<p>&ldquo;Works on the Arabic calligraphy initiative is being implemented under the direct supervision of the founder and CEO of Tasami Creative Lab, Musaed Al-Hulis, while the Corniche of Colors initiative is being administered by Dr. Adel Al-Zahrani, professor of architecture at King Abdul Aziz University. Both initiatives are supported by the Jeddah municipality,&rdquo; Serafi said.</p>

<p>The OJCA chairman said that Jeddah had long been known as a city of art and beauty.</p>

<p>&ldquo;(This is) since the time of the late former mayor of Jeddah, Mohammed Saeed Farsi, who had invited prominent artists to beautify Jeddah with their works. The city has the largest open museum in the world, located on the Jeddah Corniche, where invaluable art pieces are found. What is taking place nowadays is an extension to that artistic revolution,&rdquo; Serafi said.</p>

<p>The deputy mayor for community services, A&rsquo;idh Al-Zahrani, said that the initiative was part of the UN Arabic Language Day, which is observed annually on Dec. 18.</p>',
                'publication_date' =>  date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
