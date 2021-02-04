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

<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img class="fr-dii fr-fic" src="https://waqf-admin.softlex.pro/storage/images/news/coronavirus-image-(002).tmb-smallbanne.jpg" style="height:200px; margin:10px; width:400px" /><img class="fr-dii fr-fic" src="https://waqf-admin.softlex.pro/storage/images/news/brief-1-22-21-pic-dashboard.jpg" style="height:200px; margin:10px; width:400px" /></p>

<p>The Pfizer-BioNTech vaccine requires a priming dose followed by a booster shot with an interval of 21 days between each in order to achieve a 95 percent efficacy rate to prevent or decrease the symptomatic effects of a COVID-19 infection. At Sunday&rsquo;s press briefing the spokesman also noted the change in the rate of infections across the Kingdom&rsquo;s regions during the past two weeks. Six of the Kingdom&rsquo;s regions have shown some stability with a slight increase in numbers, up to 10 percent, whereas Riyadh, Qassim, Hail, Jazan and the Northern Borders have shown a 50 percent decrease in cases. &nbsp;</p>

<p>&nbsp;</p>',
                'publication_date' =>  '2021-01-01',
                'link' => 'G4TJmJokwRsLirU9HSyr',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => '5m perform rituals at Grand Mosque since resumption',
                'image' => '/images/news/2.jpg',
                'description' => 'JEDDAH: Saudi Arabia has received 5 million Umrah pilgrims and worshippers since the resumption of the rituals, said Minister of Hajj and Umrah Dr. Mohammed Saleh Benten.',
                'full_description'=> '<p>JEDDAH: Saudi Arabia has received 5 million Umrah pilgrims and worshippers since the resumption of the rituals, said Minister of Hajj and Umrah Dr. Mohammed Saleh Benten. He said that no cases of <img class="fr-dii fr-fic fr-fil" src="https://waqf-admin.softlex.pro/storage/images/news/Без названия.jpeg" style="float:left; height:190px; margin:10px; width:309px" />COVID-19 infections were reported among pilgrims and worshippers. The statement came during a meeting with Makkah Gov. Prince Khaled Al-Faisal in Jeddah on Wednesday. Saudi Arabia suspended Umrah in March and significantly downsized the Hajj pilgrimage in July by only allowing about 1,000 pilgrims, all in response to the COVID-19 pandemic.</p>

<p>The Kingdom is getting back on track after earlier lockdowns while adhering to strict health protocols. On Sept. 22, the Kingdom announced a gradual resumption of Umrah pilgrimage in four phases. Tourist offices abroad are following their contracts with the Ministry of Hajj and Umrah so that pilgrims can come to perform Umrah rituals. In the first phase, which lasted for 14 days, 84,000 pilgrims were received &mdash; 6,000 people per day. A total of 210,000 pilgrims performed Umrah rituals during the second phase. The third phase, which started on Nov. 1, permitted pilgrims from abroad to perform the ritual alongside residents of the Kingdom.</p>',
                'publication_date' => '2020-01-8',
                'link' => 'RQACxyTUioGpCGai73ud',
                'is_main' => true,
                'is_second' => false,
            ],
            [
                'title' => 'Saudi national archives foundation Darah uncovering past with oral history tradition',
                'image' => '/images/news/3.jpg',
                'description' => 'RIYADH: From one generation to another, history is told and retold.',
                'full_description'=> '<p><img class="fr-dii fr-fic fr-fil" src="https://waqf-admin.softlex.pro/storage/images/news/whatsapp_image_2020-12-23_at_6.19.32_pm.jpg" style="float:right; height:391px; width:663px" /><span style="font-size:16px">RIYADH: From one generation to another, history is told and retold. But with time, large fragments are lost, so a Riyadh-based research center is helping preserve some of Saudi Arabia&rsquo;s most important historical facts. The earliest forms of storytelling for many cultures were primarily oral, combined with gestures and expressions, and at times, even drawings and paintings. With time these stories differ, their essence forgotten and countless tales lost through time. In recognition of the beauty of this dying art, the King Abdul Aziz Foundation for Research and Archives (Darah) has upgraded its work to record and preserve oral accounts of Saudi Arabian history and make them accessible to researchers. Speaking to Arab News, Darah spokesman Sultan Alawairdhi said the center&rsquo;s founding is in line with the government&rsquo;s policy to preserve its history. He added that it is of vital importance to ensure that historical narratives are accessible to all by using knowledge and historical facts told by the elderly who lived through major historical events that shaped the Kingdom.</span></p>',
                'publication_date' =>  '2021-01-08',
                'link' => 'ei7KSfJoYynOsw8Efk8i',
                'is_main' => true,
                'is_second' => false,
            ],
            [
                'title' => 'Saudi Arabia’s giftedness foundation Mawhiba signs deal to protect intellectual property rights',
                'image' => '/images/news/4.png',
                'description' => 'RIYADH: The King Abdul Aziz and His Companions Foundation for Giftedness and Creativity (Mawhiba) on Tuesday signed an agreement with the Saudi Authority for Intellectual Property (SAIP) joining the National Network of Technology and Innovation Support Centers (TISC).',
                'full_description' => '<h4><span style="font-size:14px">RIYADH: The King Abdul Aziz and His Companions Foundation for Giftedness and Creativity (Mawhiba) on Tuesday signed an agreement with the Saudi Authority for Intellectual Property (SAIP) joining the National Network of Technology and Innovation Support Centers (TISC). The TISC enables innovators to protect and manage their intellectual property rights. The deputy secretary-general of Mawhiba, Basil Al-Sadhan, said the foundation seeks to create an environment that motivates talent and&nbsp;<img class="fr-dii fr-fic fr-fil" src="https://waqf-admin.softlex.pro/storage/images/news/pic04578_lw.jpg" style="float:right; width:271px" />encourages the youth to pursue their passion for science and become future leaders.</span></h4>

<p><span style="font-size:14px"><img class="fr-dii fr-fic fr-fir" src="https://waqf-admin.softlex.pro/storage/images/news/151228-saudi-king-salman.jpg" style="float:left; margin:10px; width:275px" /><br />
Al-Sadhan said Mawhiba found the TISC initiative launched by the SAIP helpful in achieving its core mission. &ldquo;TISC allows Mawhiba to access and employ technical and scientific expertise, provide assistance in searching and analyzing intellectual and technical property databases and obtain information on patents.&rdquo; By signing the deal, Mawhiba has bec</span></p>

<div>
<p>&nbsp;</p>
</div>

<p><span style="font-size:14px">ome one of the 26 entities that are part of SAIP&rsquo;s national network. SAIP aims to organize, support, sponsor, protect and promote intellectual property in the Kingdom in accordance with global best practices. Al-Sadhan said by joining the network Mawhiba has now gained access to other support services that suit the needs of its students and employees. &ldquo;The most important of these services is providing guidance on intellectual property rights such as the use of patents, industrial designs, trademarks, and copyrights,&rdquo; he said. SAIP Vice President Sami Al-Sudais welcomed Mawhiba aboard TISC, which enables users to acquire the technical skills needed to search intellectual property databases.</span></p>',
                'publication_date' =>  '2021-01-09',
                'link' => 'ARZ8jBdrEeBAbWubXAC0',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Jeddah streets and bridges embellished with Arabic calligraphy',
                'image' => '/images/news/5.png',
                'description' => 'JEDDAH: Jeddah municipality, in partnership with the Oyoun Jeddah Charitable Association (OJCA)',
                'full_description' =>'<p>JEDDAH: Jeddah municipality, in partnership with the Oyoun Jeddah Charitable Association (OJCA), has launched an initiative to install 50 Arabic calligraphy murals across the city, including on some of its main flyovers. The initiative, which coincides with the UN&rsquo;s Arabic Language Day, aims to add an aesthetic touch to the city with Arabic calligraphy paintings and murals, some of which are more than 70 meters long and 3 meters high. The UN General Assembly approved Arabic as an official UN language in 1997. The day is meant to promote the equal use of all six of the UN&rsquo;s official working languages throughout the organization. In January, the Saudi Ministry of Culture announced 2020 as the Year of Arabic Calligraphy to highlight its importance in reflecting the richness of Arab culture. Jeddah Mayor Dr.</p>

<p><img class="fr-dii fr-fic fr-fil" src="https://waqf-admin.softlex.pro/storage/images/news/eng._anas_mohammed_seirafi_copy.png" style="float:left; margin:10px; width:215px" /></p>

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
                'publication_date' => '2021-01-09',
                'link' => '6IAf2dBfkvjBWrYC3WS4',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Trump’s “Big Lie” stirs a revolt and mars U.S. standing',
                'image' => '/images/news/6.jpg',
                'description' => 'Donald Trump’s “Big Lie” — that Joe Biden stole the U.S. presidential election — has stoked a domestic revolt and tarnished America’s global stature.',
                'full_description' =>'<p>&nbsp;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">With live images broadcast around the world, the attack on the Capitol in Washington on January 6 shocked Americans, dented their country&rsquo;s self-image as a beacon of democracy and highlighted the destructive power of a big lie repeated endlessly by a national leader.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Watching followers of Donald Trump smash windows and push their way past guards and police brought back memories to me of similar scenes while covering Latin America, Africa and the Middle East.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">The mayhem, which left five people dead, played out after Trump addressed a crowd estimated at 30,000 to once again repeat his contention that the 2020 election was stolen from him.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">&ldquo;This is the most corrupt election in history, maybe the world,&rdquo; he said, urging the crowd before him to go to the Capitol, the seat of Congress, to help &ldquo;take our country back.&rdquo;</p>

<blockquote>
<h3 style="margin-left:0px; margin-right:0px; text-align:left">A cross-section of U.S. society attacked the Capitol.</h3>
</blockquote>

<p style="margin-left:0px; margin-right:0px; text-align:left">It was not the first time a charismatic leader whipped a crowd into a frenzy, and it won&rsquo;t be the last.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">But it was the first time that a U.S. president urged fellow Americans to march on America&rsquo;s vaunted symbol of democracy to help overturn the result of an election that Trump lost by an uncontestable margin but claimed to have won by a landslide.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">There was another difference: In most countries, crowds attacking government buildings or taking to the streets in protest are often made up of young people trying to get rid of autocrats. Look back to the Arab Spring, Iran&rsquo;s Green Movement or the &ldquo;Color Revolutions&rdquo; in Georgia and Ukraine.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">In Washington, it was a cross-section of society, many middle-aged or older, trying to keep a would-be autocrat in power.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Those arrested for taking part in ransacking the Capitol were not only fringe radicals but a wide range of Trump supporters &mdash; Americans with jobs, families and previously unblemished reputations.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">They included a wealthy real estate agent, former military and police officers, municipal employees, the son of a New York judge, a school therapist, a two-time Olympic gold medalist swimmer and the chief executive of a data analytics company.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">So firm was their belief in Trump&rsquo;s unfounded claim of a stolen election that many proudly posted pictures and video of their participation in the storming of the Capitol on social media.</p>

<blockquote>
<h3 style="margin-left:0px; margin-right:0px; text-align:left">Extremists behind a veneer of regular lives.</h3>
</blockquote>

<p style="margin-left:0px; margin-right:0px; text-align:left">The assault prompted a flood of analyses on the need to crack down on right-wing violence as vigorously as successive U.S. governments have pursued Islamic extremists.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">&ldquo;We have to go after the people doing the incitement, the people who are very serious about doing these attacks with the same intensity that we did with al-Qaeda,&rdquo; said Elizabeth Neuman, a terrorism expert who served for three years in the Trump administration&rsquo;s Department of Homeland Security.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">But it is difficult to prevent attacks or discover threats when extremists hide behind the veneer of regular American lives.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">A week after the mob ransacked the Capitol, the House of Representatives impeached Trump for &ldquo; inciting violence against the government of the United States.&rdquo; The former president now faces a trial in the Senate. Conviction would require 17 of the 50 Republicans in the Senate to vote against their party &mdash; unlikely.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">To draw a line under the Trump era, the Washington Post newspaper published its final tally of the &ldquo;false or misleading claims,&rdquo; a polite phrase for lies, he made in his four years in office. The factcheck unit&rsquo;s total: 30,573.</p>

<blockquote>
<h3 style="margin-left:0px; margin-right:0px; text-align:left">Trump&rsquo;s &lsquo;Big Lie&rsquo; about the election will poison U.S. politics for a long time.</h3>
</blockquote>

<p style="margin-left:0px; margin-right:0px; text-align:left">Some lies are more durable than others, and many of those that the factcheckers listed will soon be forgotten. But the &ldquo;Big Lie&rdquo; of the stolen election (hashtag #stopthesteal) is likely to poison American politics for a long time to come.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">More than 74 million voted for Trump. And while estimates vary on how many of those voters are convinced Joe Biden won the 2020 election by fraud, it is worth noting that a poll of Republicans and Republican-leaning Independents taken before, during and after the assault on the Capitol found that 79% approved of him.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">How long such widespread support will last after Trump was barred from Twitter and Facebook after the storming of the Capitol is a matter of conjecture.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">But even if only half the Americans who voted for him &mdash; tantamount to the combined population of Belgium, the Netherlands and Sweden &mdash; President Biden&rsquo;s declared aim of bringing unity to the divided country will require near super-human skills.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">For another durable Big Lie promoted by Trump, look back to the &ldquo;birther&rdquo; myth he promoted between 2011 and 2016. According to this fabrication, Barack Obama was an illegitimate president because he was not born in the United States. His birth certificate from Hawaii, Trump insisted, was forged.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">After launching his presidential campaign, Trump finally admitted in 2016 that Obama was born in the United States. Still, a YouGov poll taken three years later found that fully one in three Americans still thought it &ldquo;probably true&rdquo; or &ldquo;definitely true&rdquo; that Obama was born in Kenya.</p>

<blockquote>
<h3 style="margin-left:0px; margin-right:0px; text-align:left">&lsquo;We all have a duty to defeat lies.&rsquo;</h3>
</blockquote>

<p style="margin-left:0px; margin-right:0px; text-align:left">Analysts and opinion writers tend to shy away from comparing contemporary U.S. politics with Nazi Germany. But there have been repeated references to Trump&rsquo;s &ldquo;Big Lie,&rdquo; a phrase historians attribute to Joseph Goebbels, Nazi Germany&rsquo;s propaganda minister, who said:</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">&ldquo;If you tell a lie big enough and keep repeating it, people will eventually come to believe it.&rdquo;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Trump began casting doubt over the fairness of his country&rsquo;s electoral system almost immediately after winning the 2016 election, claiming he lost the popular vote to Hillary Clinton because millions of illegal immigrants voted for her.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">More than a year before the 2020 elections, he began saying the only way he could lose would be by electoral fraud. After more than 150 million Americans had cast their votes on November 3, he repeated claims of fraud again and again.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Millions of Americans believe him &mdash; but not the courts who rejected an array of lawsuits, not the Supreme Court, not state election officials, not Trump&rsquo;s own attorney general.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">&ldquo;There is truth and there are lies,&rdquo; Biden said in&nbsp;his inaugural address. &ldquo;Lies told for profit and for power. And each of us has a duty and responsibility &hellip; to defend the truth and defeat the lies.&rdquo;</p>

<p>&nbsp;</p>',
                'publication_date' => '2021-01-15',
                'link' => 'dc2PZKGPeXaKUwZw',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'South Korea offers lessons for U.S. social movements',
                'image' => '/images/news/7.jpg',
                'description' => 'A pro-democracy movement in South Korea offers lessons to two U.S. social movements — against police brutality and for a defeated ex-president.',
                'full_description' =>'<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">What do protests in South Korea during a period of authoritarian rule last century have to do with American social movements today?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A social movement in the 1970s and 1980s that eventually brought down a dictatorial regime in the Asian nation adapted to changing circumstances and intensified as it was repressed, according to Harvard Sociology Professor Paul Chang. Much the same seems to be happening in the United States today.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">South Korea offers a lesson for anyone interested in where two diametrically opposed movements in the United States &mdash; against racial injustice and against Joe Biden&rsquo;s victory in the presidential election&nbsp;&mdash; might be headed.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Repression in South Korea helped shape pro-democracy protests.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Chang has written a book,&nbsp;&ldquo;Protest Dialectics: State Repression and South Korea&rsquo;s Democracy Movement, 1970-1979,&rdquo; that examines the roots of the 1980s democracy movement in the Asian nation and the formation of civil society today.&nbsp;The book&nbsp;focuses on the relationship between South Korean dissidents and the regime of dictator Park Chung-hee.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Park ruled with an iron fist between 1961 and 1979 while overseeing&nbsp;economic policies that brought rapid economic growth and industrialization and which became known as &ldquo;the&nbsp;Miracle on the Han River.&rdquo; As a result, South Korea became one of the fastest growing nations during the 1960s and 1970s.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A military general before becoming president, Park&nbsp;outlawed criticism of his regime and condemned some dissenters to death. During his 18-year regime, Park was continually confronted by dissent and social tumult until his assassination in 1979.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Chang and&nbsp;Gi-Wook Shin, director of Stanford&rsquo;s&nbsp;Shorenstein&nbsp;Asia-Pacific Research Center, together have studied the anti-Park movement,&nbsp;examining nearly 5,000 acts of protest and repression, and tracking movement diversity, protest tactics and intergroup solidarity.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Protests including at least two social groups &mdash; laborers, students, journalists, Christian activists and politicians &mdash; rose from around 3% of all demonstrations in 1970 to nearly 20% in 1977, despite an increasingly effective police crackdown, according to the two professors.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In 1974, half of all protest events issued some kind of intergroup solidarity statement &mdash; a show of support for other dissident communities.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Today, we might think about specific contemporary movements to see how they are being shaped by repression and how they are also shaping the repressive agents acting against them,&rdquo; Chang said in an email, commenting on current social movements in the United States.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The Black Lives Matter movement in U.S. has evolved&nbsp;&mdash; and sparked a backlash.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Just as protest movements in South Korea adapted, broadened and triggered backlash, the Black Lives Matter (BLM) movement has evolved, broadening its aims while motivating opponents, Chang noted.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;The expansion of BLM goals and frames motivated different conservative elements in American society &mdash; politicians, militia groups, general conservative public, etc. &mdash; to come together to push back on what is now the police reform movement,&rdquo; Chang said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;As police forces then went on to repress BLM protests, the movement began calling for fundamental reforms of the police industry as a whole. Thus, police repression of protests &mdash; and not just the police brutality against black persons &mdash; triggered the development of the movement&rsquo;s goals and frames.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Now, as then, increased repression has induced protesters to broaden their goals. In South Korea, student protesters initially opposed Park&rsquo;s normalization treaty with Japan in 1965. But after years of repression, the protest movement took aim at Park&rsquo;s reign.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Distinct from the protest cycles in the 1960s &hellip; the democracy movement that emerged in the 1970s targeted the authoritarian structure of Park&rsquo;s government,&rdquo; Chang writes in his book.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Social movements can evolve and adapt.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Chang and Shin concluded their project by noting that the success of a movement can be measured not only in numbers of people but in intergroup solidarity and tactical adaptation. &ldquo;There are various ways to measure &lsquo;intensity,&rsquo; and the number of participants and types of tactics employed are just two of the ways,&rdquo; they wrote.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">What about the insurrectionists who stormed the U.S. Capitol on January 6, hoping to overturn the election of Joe Biden to the presidency?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A crackdown by online platforms since the insurrection has spurred some militia groups to find new social media outlets for organizing. In South Korea, students put out covert publications as their movement moved underground. South Korean Christians and workers used underground networks to disseminate anti-government literature.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The patterns of protest in the Park Chung-hee era offer a word of caution for those attempting to suppress far-right extremism, but also some hope for activists: Social movements don&rsquo;t necessarily die, but can evolve and adapt.</span></p>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-16',
                'link' => 'pnW5eXk9FnKdA4jj',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Conflict in strategic Ethiopia rings global alarm bells',
                'image' => '/images/news/8.jpg',
                'description' => 'A military conflict has broken out in Ethiopia, raising fears of instability and a humanitarian crisis in the strategic Horn of Africa.',
                'full_description' =>'<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A military conflict in northern Ethiopia has raised fears of dangerous instability and a major humanitarian crisis in the Horn of Africa, one of the world&rsquo;s most strategic areas.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">It has also underlined the potential pitfalls after repressive regimes are overthrown in ethnically diverse countries and illustrates how winners of the Nobel Peace Prize can quickly lose their shine when reality strikes.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Ethiopian Prime Minister Abiy Ahmed, Africa&rsquo;s youngest leader at 44, announced last Saturday that federal forces had taken the rebel Tigrayan regional capital of Mekelle after three weeks of fighting in which thousands are reported to have died. He said the campaign had ended and his forces were searching for Tigrayan leaders.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">But analysts believe the conflict may be far from over and his army could yet become bogged down in a long guerrilla conflict in mountainous terrain against a formidable foe. Tigrayan leader Debretsion Gebremichael vowed to fight on and said there were still clashes near Mekelle, a city of 500,000 people.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Ethiopia is already one of the biggest hosts of refugees in Africa, but the Tigray fighting has sent more than 43,000 people fleeing into neighbouring Sudan. The United Nations believes this number could reach 200,000 and warns of a major emergency. The COVID-19 pandemic is worsening conditions for refugees.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Why is civil war in Ethiopia so dangerous?</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Critics say Abiy&rsquo;s action is rash and heavy-handed, risking a dangerous conflagration that could threaten not only the integrity of Ethiopia, Africa&rsquo;s second most populous country, but sow instability across a wide swathe of the continent. They say it tarnishes the Nobel he won only last year.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Despite the distractions of the global coronavirus pandemic and the U.S. election&rsquo;s messy aftermath, the conflict has raised deep concern within the United Nations and among world powers, including the United States, European Union and Britain.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Ethiopia, which is twice the size of France, is one of the world&rsquo;s oldest nations, with an impressive cultural history. It is proud of being one of only two African nations not to have been colonised in the European &ldquo;Scramble for Africa.&rdquo; Its orthodox Christianity dates from the 4th century, unlike most of the continent, where the faith was imported by colonial missionaries.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">However, Ethiopia is also extremely diverse, with 10 distinct regions and 80 ethnic groups with their own languages and culture. It has a very violent modern history.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Experts and diplomats fear that conflict in Tigray could unleash centrifugal forces as other regions try to break free. Several incidents of serious ethnic bloodshed have occurred recently in other regions. If Ethiopia spins apart or descends into civil war, it could create a &ldquo;black hole&rdquo; that draws in volatile neighbours.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Conflict against Ethiopia&rsquo;s previous rulers</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The conflict in Tigray pits Abiy, a modernising reformer who became prime minister two years ago, against the previous rulers from the Tigrayan Peoples Liberation Front (TPLF), who led the war to overthrow a brutal Marxist regime in 1991.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For three decades afterward, despite representing only 6% of the 115 million population, they dominated power and led a remarkable transformation of the economy, boasting some of the world&rsquo;s highest growth rates for two decades.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">But their rule was brutally repressive and provoked increasing opposition from larger ethnic groups, leading in 2018 to the appointment of Abiy, a former army intelligence officer, who is from the biggest group, the Oromo.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Abiy won plaudits for a wave of reform and liberalisation, including releasing thousands of political prisoners and making peace with Eritrea after two decades of hostility. He won the Nobel Prize last year. But as in other parts of the world, his relaxation of three decades of repression took the genie out of the bottle of regional demands for more power.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Intercommunal violence, coup attempt</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The Tigrayans accused him of discriminating unfairly against them and of trying to concentrate power in the centre. Abiy, who survived a coup and an assassination attempt, has imprisoned opposition leaders to combat challenges to his rule, and hundreds have died in intercommunal violence or clashes with police since he took over.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Abiy launched his assault on Tigray on November 4 after the TPLF attacked a key military base. They had previously held elections in defiance of the Addis government which postponed national polls because of COVID-19.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Critics accuse Abiy of trying to become another authoritarian ruler to implement his &ldquo;medemer&rdquo; philosophy of centralised strength through diversity, instead of regional autonomy.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Some experts suggest Ethiopia risks following the example of Yugoslavia, where the death of communist dictator Josip Tito led to the break-up of the country in a series of bloody ethnic wars in the 1990s.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Chaos and conflict also followed the Western removal of brutal dictators in Libya and Iraq, with little planning for the aftermath.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Why is the Horn of Africa so strategic?</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Ethiopia is situated in a highly unstable region and has been a long-standing linchpin of U.S. foreign policy.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">However, U.S. President-elect Joe Biden may need to do rapid repair work after Donald Trump enraged Addis in October by suggesting Cairo should &ldquo;blow up&rdquo; a huge new dam being built by Ethiopia on the Blue Nile, a $4-billion project that has caused tension with downstream Egypt and Sudan.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">China, the United States, the United Arab Emirates, France and several other nations have bases in the Horn, underlining its significance on the southern shores of the Red Sea, opposite Yemen, which itself is mired in civil war and a massive humanitarian crisis. Russia is reported to be eying a naval base in the Horn.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The area has also been drawn into a regional fight for influence between Qatar and Turkey on one hand and the UAE and Saudi Arabia on the other.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Ethiopia, which hosts the African Union (AU) headquarters, borders Sudan, South Sudan and Somalia, which are all fragile, especially the latter which has been in a state of semi-anarchy for decades. Ethiopia has 4,000 troops in an AU force fighting the Islamist al-Shabaab in support of the weak Mogadishu government.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Vacuum in Somalia</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">But Ethiopian troops have been withdrawn to join Abiy&rsquo;s offensive. A weakening of the AU force would strengthen Shabaab, which has launched several attacks into Kenya in the past. Trump is also reported to be planning to remove 700 U.S. special forces from Somalia in the dying months of his presidency.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The Tigray conflict has drawn in neighbouring Eritrea, a deeply repressive hermit state sometimes compared to North Korea. Isaias Afwerki, its leader, is a sworn enemy of the TPLF, which led a 1998-2000 border war between the two countries. Following Abiy&rsquo;s peace treaty with Eritrea, Isaias has emerged as his military ally against Tigray.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The TPLF accuses him of sending troops to support Abiy, and it has fired missiles at the Eritrean capital, Asmara.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Abiy&rsquo;s supporters say he had no alternative but to confront Tigray&rsquo;s leaders to curb a wave of rebellion and separatism, but his military offensive could have uncontrollable consequences with ramifications for a wide area of Africa and the Gulf.</span></p>

<p>&nbsp;</p>',
                'publication_date' => '2021-01-16',
                'link' => 'JzLGRR2BqJtSZR2v',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Decoder: Can we fix nature’s crisis and protect Earth?',
                'image' => '/images/news/9.jpg',
                'description' => 'Without a push to protect nature, Earth faces the worst extinction crisis since dinosaurs were wiped out. A summit next year offers a dwindling chance.',
                'full_description' =>'<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Among bleak scientific findings about nature, a million species of plants and animals are&nbsp;threatened with extinction&nbsp;because of human activities.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Tropical forests vanished at a rate of a&nbsp;football pitch every six seconds in 2019, often cleared to make way for farms.&nbsp;About 12 million tonnes of plastic pollution enter the oceans every year.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Perhaps even worse, governments will&nbsp;fail to fully meet any of the 2020 targets they set a decade ago&nbsp;to help protect life on Earth from the worst extinction crisis since the dinosaurs were wiped out 65 million years ago.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Alarmed by these failings, many governments are now rallying to set tougher targets to safeguard nature in coming years, including a goal of protecting 30% of all land and oceans by 2030 in national parks, no-fishing zones, wilderness areas or other conservation areas.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">This &ldquo;30&times;30&rdquo; goal, under consideration at a summit of world leaders due to be held in China next year, would mark a massive shift: currently only about&nbsp;9.6%&nbsp;of the planet is conserved. The summit of almost 200 nations had originally been due to be held this month, but the coronavirus pandemic forced a delay.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Life on Earth is in crisis.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Biodiversity &mdash; the web of life on Earth ranging from tiny algae to blue whales, from insects to elephants &mdash; is under siege from a rising population of 7.8 billion people and more cities, farms and roads. Pollution, deforestation, over-fishing and rising temperatures caused by man-made greenhouse gases are all harming nature, from coral reefs to rainforests.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;We&rsquo;re failing to take the biodiversity crisis seriously,&rdquo; said Stephen Woodley of the International Union for Conservation of Nature (IUCN), which groups governments, scientists and other organisations.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Governments wouldn&rsquo;t get a high score on a report card for this,&rdquo; Woodley, vice chair for science and biodiversity at the IUCN&rsquo;s World Commission on Protected Areas, told News Decoder.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A loss of just one species can cause massive harm. Declining bee numbers, for instance, can undercut pollination and production of food crops such as apples, strawberries or tomatoes. And plants are the source of 25% of&nbsp;modern pharmaceuticals.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Reacting to the worsening crisis, more than 30 nations have recently&nbsp;signed up for a goal&nbsp;to protect or effectively conserve at least 30% of the planet by 2030, in a &ldquo;high ambition coalition&ldquo;&nbsp;led by Costa Rica and France.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Canada, the second biggest nation by area after Russia, joined last month. But many other big nations &mdash; Russia, the United States, China, Brazil and Australia &mdash; have yet to sign up.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Britain leads another group, a &ldquo;Global Ocean Alliance,&rdquo; which now counts about 30 nations ranging from Belgium to Vanuatu and seeks protection for 30% of the oceans by 2030.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">We need to protect nature&nbsp;&mdash; and people.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Widening enthusiasm for these &ldquo;30&times;30&rdquo; goals may be reflected in the documents being prepared for the summit in China.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">An August&nbsp;draft UN document&nbsp;compiled by the experts chairing the negotiations says conservation areas should cover &ldquo;at least 30% of the planet&rdquo; by 2030.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That&rsquo;s a subtle shift from&nbsp;a negotiating text released in January&nbsp;that said conservation should cover &ldquo;at least [30%] of land and sea areas.&rdquo; In UN negotiations, square brackets show the number is disputed; a lack of brackets shows it&rsquo;s getting widely accepted.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">But&nbsp;scientists say&nbsp;setting up more conservation areas is only part of a massive puzzle to preserve biodiversity. We need to safeguard nature, but we also depend on using it &mdash; it provides everything from food to fresh water &mdash; and we have to ensure that the benefits are shared fairly.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For indigenous peoples, who are often already good environmental stewards, declarations of large protected areas can often sound like a government-sponsored land grab, said Trevor Sandwith, Director of IUCN&rsquo;s Global Protected Areas Programme.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;We need a totally refreshed global perspective&rdquo; for biodiversity, Sandwith told News Decoder. A 30&times;30 goal risks becoming &ldquo;like a red rag saying that we care about nature, not about people. There is no point in conserving nature if we don&rsquo;t help people.&rdquo;</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Wanted: A&nbsp;single eye-catching goal</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Another big problem is that many existing conservation areas don&rsquo;t work or are poorly enforced. &ldquo;We can&rsquo;t pretend that an industrial plantation is preserving nature or an industrial fishery is preserving the ocean,&rdquo; he said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The UN&rsquo;s latest&nbsp;report&nbsp;about biodiversity, published in September, catalogued how governments have failed to fully meet any of the 20 biodiversity targets for 2020 they set a decade ago, ranging from slowing the loss of tropical forests to raising public awareness of the risks of losing biodiversity.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">One of the targets set at the last major UN biodiversity summit,&nbsp;in Japan in 2010, was to protect 17% of the world&rsquo;s land and 10% of the oceans by 2020.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">By October 2020,&nbsp;the World Database on Protected Areas&nbsp;shows that only about 15% of the land and 7.5% of the seas were covered, for a total of 9.6% of the Earth&rsquo;s surface.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Part of the problem in mobilising action is that governments have struggled to come up with a single eye-catching goal for biodiversity other than an ambition of &ldquo;living in harmony with nature.&rdquo; For many campaigners, 30&times;30 at least sets one clear target and signals willingness to embrace tougher action on other fronts.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&lsquo;Humanity is waging war on nature.&rsquo;</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Illustrating the complexity of safeguarding nature, UN Secretary-General Antonio Guterres&nbsp;said last month&nbsp;that biodiversity spans economics, health, social justice and human rights. He noted that diseases such as coronavirus or Ebola may have jumped to humans because of our over-exploitation of the natural world.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Humanity is waging war on nature,&rdquo; Guterres said in a speech. &ldquo;And we need to rebuild our relationship with it.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Among solutions, he urged governments to embed biodiversity in green recovery plans to help create sustainable jobs after the coronavirus pandemic. Intact forests and wetlands, for instance, can help soak up greenhouse gas emissions to slow climate change.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">He called for bigger investments in nature, noting one estimate that between $300 and $400 billion dollars a year was needed.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Many scientists say the Earth is facing a sixth mass extinction because of human activities. Fossil records indicate there were five previous cataclysms, when vast numbers of species vanished, perhaps because of asteroid strikes or volcanic eruptions that poisoned the atmosphere.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;The ongoing sixth mass extinction may be the most serious environmental threat to the persistence of civilization, because it is irreversible,&rdquo; Gerardo Ceballos, of the Universidad Nacional Aut&oacute;noma de M&eacute;xico, wrote in a June&nbsp;scientific report.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">But it&rsquo;s not be too late to avoid the worst.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">David Attenborough, the veteran British naturalist and documentary maker, released a documentary this year titled &ldquo;A Life on Our Planet,&rdquo;&nbsp;saying everyone can make a difference to help nature.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Right now we have a window of opportunity that we can&rsquo;t afford to miss,&rdquo; he said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;What happens next is up to us.&rdquo;</span></p>

<p>&nbsp;</p>',
                'publication_date' => '2021-01-18',
                'link' => 'tJXbnS5rd4MTyc53',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Decoder: Why are election polls so often wrong?',
                'image' => '/images/news/10.jpg',
                'description' => 'Once again, polls forecasting the outcome of a U.S. election were way off target. Why are pollsters so often wrong? Can polls be made more accurate?',
                'full_description' =>'<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Four years ago, spectacular failures of gauging popular opinion and forecasting the outcome of a British referendum and American elections prompted questions on both sides of the Atlantic.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">What went wrong? Are polls useful? And can they be improved?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In the wake of the U.S. presidential elections in November, those questions are being raised once again.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In the British referendum in June 2016, voters were asked whether they wanted their country to remain in the European Union or leave it. Respected polling organizations, including YouGov and Ipso/Mori, predicted that a comfortable majority would vote to stay. The forecast: 52% for stay, 48% for leave.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The actual result of the Brexit vote was the exact opposite: 52% voted for leave, 48% for remain. The outcome came as a shock to millions of Britons and Europeans, not to mention the polling industry.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Pollsters and forecasters were way off base in the U.S. election.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In the United States, pollsters and forecasters were in near unanimous agreement that the Democratic candidate, Hillary Clinton, would become America&rsquo;s next president in elections five months after Brexit. Her Republican opponent, Donald Trump, was considered an extreme long shot. He won.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">This November, U.S. prognosticators got the most important race right: Trump lost to Democratic challenger Joe Biden. But they vastly underestimated support for Trump. On November 3, election day, the highly-regarded website FiveThirtyEight, which focuses on opinion poll analysis, saw Biden ahead by 8.4%. The actual result was less than half, 3.9%.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">An array of polls were equally wrong in projecting that Democrats would expand their majority in the House of Representatives by up to 15 seats. In fact, they lost 10.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In 2016, the American Association for Public Opinion Research described the elections as &ldquo;a jarring event for polling in the United States.&rdquo; A 104-page report, widely dubbed an autopsy, blamed bad state polls for the shocking upset while national polls were largely accurate. (While Clinton won the popular vote, Trump won in enough states to gain the presidency by way of the&nbsp;Electoral College.)</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Fewer people are answering pollsters&rsquo; questions.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Autopsies for the 2020 elections are still being written, but several problems complicating the work of pollsters, aggregators and forecasters have been obvious for years. (Pollsters interview people to get their opinions, aggregators draw conclusions from a variety of polls and forecasters make predictions).</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For polls on elections, the problem starts with the key question pollsters tend to ask: &ldquo;Who would you vote for if the elections were held tomorrow?&rdquo; The result is a snapshot in time, and minds can change with events.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Among several trends that make accurate surveys more difficult and explain wrong calls, one stands out:&nbsp;a steady and seemingly unstoppable decline in the number of people willing to answer the questions of pollsters. Cell phone users are particularly prone to ignore calls from pollsters.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The overall response rate, to use the technical term, dropped from 90% in the 1930s, when people saw it as a civic duty to participate in polls, to just 6% in 2018, according to the Washington-based Pew Research Center, a think tank.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">What does that mean in practice? Two weeks after the U.S. elections, David Hill, the director of a research firm, gave an example in an essay in the Washington Post. &ldquo;To complete 1,510 interviews over several weeks, we had to call 136,688 voters in &hellip; Florida. Only one in 90-odd voters would speak with our interviewers.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">This is a problem for which the polling industry has yet to find a solution. In 2020, there were 239 million Americans eligible to vote. To select 1,000 or 1,500 &mdash; typical samples &mdash; who are representative of the whole is difficult at the best of times, even more difficult if certain groups refuse to be interviewed.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">According to Hill, many of those who declined interviews fit the profile of likely Trump supporters.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Is internet polling better?</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In a post-election panel discussion, Lee Miringoff,&nbsp; the director of the Marist Institute for Public Opinion, explained the concept of a small sample to reflect the views of a country of 328 million this way:</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Intuitively, it doesn&rsquo;t feel that 1,000 people could tell you much of anything about what the country thinks. But imagine a huge vat of soup and you stir it all up and you want to know what that tastes like, one spoonful will work. And that&rsquo;s what we are doing. We are trying to get a flavor of the electorate.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The obvious question, not asked at the panel: How does that soup taste without salt, seasoning and other important ingredients?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The alternative method to traditional methods is internet polling, a subject of lively debate among experts unhappy with the deluge of criticism that usually follows wrong forecasts, of which there have been many apart from the 2016 shockers in Britain and the United States.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Election polls have been wrong in many countries.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Poll-based predictions were completely wrong on the Israeli election in 2015, the Greek bailout referendum the same year and Scotland&rsquo;s independence referendum in 2014. But botched polls have a history that goes back decades.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Take the U.S. presidential elections of 1948. Its unexpected outcome was captured in a now famous photograph that shows a widely smiling Harry Truman holding up the front page of the Chicago Daily Tribune newspaper with the banner headline, &ldquo;Dewey Defeats Truman.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><img alt="election,polls,wrong" class="aligncenter lazyloaded size-full wp-image-70801" src="https://news-decoder.com/wp-content/uploads/2020/11/Deweytruman12.jpg" style="background:transparent; border:0px; box-sizing:border-box; clear:both; display:block; font-size:16px; height:auto; margin:0px auto; max-width:100%; outline:0px; padding:0px; text-size-adjust:100%; vertical-align:baseline; width:360px" /></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:center"><span style="font-size:16px"><em>(AP photo via&nbsp;Wikipedia)</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Numerous polls and pundits had been so certain that the Republican candidate, Thomas Dewey, would win that the editors of the Tribune saw no need to wait for the official result.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Then and now, the relationship between polls and the media has been symbiotic. Polls are the basis of what is known as horse-race reporting. &ldquo;The news media see every poll like an addict sees a new fix,&rdquo; two respected political scientists, Norman Ornstein and Alan Abramowitz, complained in the wake of the 2016 U.S. elections.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">So, are there solutions to these long-standing problems? Among those under debate are online polls, but so far there is no secure way to ascertain that participants are registered to vote. One new idea is to text interview requests to a random sample of people on the voter rolls.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Will there be more accurate election polls in the future? Don&rsquo;t hold your breath.</span></p>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-19',
                'link' => 'RzHybqqz3AZL5VZP',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => "Jack Palladino: Private eye's photos used to track his suspected killers",
                'image' => '/images/news/11.jpg',
                'description' => 'A well-known private investigator whose clients included celebrities and presidents has died from injuries sustained during an attempted robbery.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Jack Palladino, 76, hit his head after a struggle with two alleged robbers who tried to grab his camera outside his home in San Francisco last week.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">The camera held images that led to the arrest of two suspects, police said.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Palladino was in a coma and died on Monday after he was taken off life support.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">In a career spanning decades, the private eye worked on an array of high-profile and controversial cases, ranging from sex scandals to murder allegations.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Former President Bill Clinton, musician Courtney Love, and disgraced Hollywood producer Harvey Weinstein were among the biggest names to solicit his detective services.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">&nbsp;</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">&quot;He was daunting and scrupulous in his profession,&quot;&nbsp;his lawyer Mel Honowitz told the San Francisco Chronicle newspaper. &quot;When the game was afoot, Jack led with intellect, experience and passion for the truth.&quot;</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<h2 style="margin-left:0px; margin-right:0px"><span style="font-size:16px">What happened to Jack Palladino?</span></h2>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Last Thursday, Palladino was outside his home when he was allegedly assaulted by two men.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Witnesses told local media that one of the men attempted to reach out from a car to snatch Palladino&#39;s camera from his hands.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">A struggle ensued before Palladino fell backwards and hit his head on the pavement, leaving him unconscious.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">At some point before the alleged robbers fled, Palladino took pictures of them on his camera, which police later used to track them down.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px"><span style="font-size:16px">IMAGE COPYRIGHTGETTY IMAGES</span></div>

<p><span style="font-size:16px">image captionPalladino started his career as an investigator in the 1970s</span></p>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">On Sunday, police said two men had been arrested in connection with the alleged robbery.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">&nbsp;</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">&quot;He would have loved knowing that,&quot;&nbsp;his wife, Sandra Sutherland, told the Associated Press news agency on Monday.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Lawrence Thomas, 24, and Tyjone Flournoy, 23, have been charged with attempted murder, attempted robbery and other crimes,&nbsp;according to the San Francisco Examiner newspaper.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">&quot;Those of us who knew Jack are mourning his death but chuckling that it is a fitting way for him to go,&quot; Mr Honowitz told the San Francisco Chronicle.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<h2 style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Private eye to the stars</span></h2>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Trained in law, Palladino started his career as an investigator in the 1970s, an era when private detectives were glamorised on TV and in Hollywood.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">In 1977, he founded a private detective agency with his wife, who spent decades living and working on cases together.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Their most famous cases involved prominent celebrities, many of whom hired them to quash negative stories or discredit allegations.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">&nbsp;</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px"><span style="font-size:16px">IMAGE COPYRIGHTGETTY IMAGES</span></div>

<p><span style="font-size:16px">image captionThe presidential campaign of Bill Clinton hired the private eye in 1992</span></p>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Courtney Love, for example, employed Palladino to handle media surrounding the death of her husband, grunge icon Kurt Cobain.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">But Palladino was perhaps best known for his involvement with the Clinton campaign, which hired him in 1992 to help quell rumours of the former president&#39;s extramarital affairs.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">In a 1999 profile, the San Francisco Examiner described Palladino as having &quot;built a reputation for aggressive investigations, an in-your-face style and the ability to neutralise adverse witnesses and spin hostile media&quot;.</span></p>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-19',
                'link' => 'UQctz4QqSJRdKBCg',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Marilyn Manson dropped by record label over abuse allegations',
                'image' => '/images/news/12.jpg',
                'description' => 'Marilyn Manson has been dropped by his record label following claims by actress Evan Rachel Wood that she was "horrifically abused" by the musician.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Loma Vista Recordings said it would&nbsp;no longer be working with Manson&nbsp;and would cease promoting his latest album &quot;effective immediately&quot;.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Manson has denied the allegations,&nbsp;saying they are &quot;horrible distortions of reality&quot;.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">His guest appearance in Starz drama American Gods will also be removed.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Manson was due to be seen in an upcoming episode but the US TV network Starz said in a statement: &quot;Due to the allegations made against Marilyn Manson, we have decided to remove his performance from the remaining episode he is in, scheduled to air later this season. Starz stands unequivocally with all victims and survivors of abuse.&quot;</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">The singer&#39;s most recent album released through Loma Vista was last year&#39;s We Are Chaos, which reached number seven in the UK charts and eight in the US.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">&nbsp;</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Manson began working with Loma Vista in 2015 for his record The Pale Emperor.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">On Monday, Wood claimed Manson had &quot;horrifically abused&quot; her during their three-year relationship in the late noughties.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Manson and Wood began dating in 2007 and got engaged in 2010, but broke up later that year.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Wood has previously said that she is a survivor of rape and domestic abuse, without naming the person accused.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px"><span style="font-size:16px">IMAGE COPYRIGHTGETTY IMAGES</span></div>

<p><span style="font-size:16px">image captionEvan Rachel Wood said she stood &quot;with the many victims who will no longer be silent&quot;.</span></p>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">In an Instagram post, she alleged: &quot;The name of my abuser is Brian Warner, also known to the world as Marilyn Manson.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">&quot;He started grooming me when I was a teenager and horrifically abused me for years. I was brainwashed and manipulated into submission.&quot;</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">She added: &quot;I am done living in fear of retaliation, slander, or blackmail. I am here to expose this dangerous man and call out the many industries that have enabled him, before he ruins any more lives. I stand with the many victims who will no longer be silent.&quot;</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Manson responded to the allegations&nbsp;in his own Instagram post on Monday evening, saying: &quot;Obviously, my art and my life have long been magnets for controversy, but these recent claims about me are horrible distortions of reality.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">&quot;My intimate relationships have always been entirely consensual with like-minded partners. Regardless of how - and why - others are now choosing to misrepresent the past, that is the truth,&quot; he added.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Several other women came forward via social media platforms on Monday to make similar statements accusing Manson of abuse.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">On Tuesday,&nbsp;Wood posted an image of a letter written by Californian senator Susan Rubio&nbsp;to Monty Wilkinson, the acting US Attorney General, requesting that &quot;the US Department of Justice meet with the alleged victims immediately and investigate these accusations&quot;.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<h2 style="margin-left:0px; margin-right:0px"><span style="font-size:16px">What are the allegations?</span></h2>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:1.5rem; margin-right:0px">
<ul style="margin-left:0px; margin-right:0px">
	<li><span style="font-size:16px">Ashley Walters says&nbsp;she worked for Manson full-time as a personal assistant. She claims that he &quot;frequently became violent&quot; and would throw glass plates and heavy objects. She alleges Manson offered her up for sexual encounters with collaborators and continued to harass her after their professional relationship ended. She says she now struggles with PTSD and depression.</span></li>
	<li><span style="font-size:16px">Gabriella, also known as the artist SourGirrrl, alleges&nbsp;Manson repeatedly tied her up and raped her. She claims that he forced her to take drugs with him and demanded she make a &quot;blood pact&quot; with him by cutting both their hands with broken glass. She says she spent one Christmas in hospital after trying to kill herself, and since breaking up with him has has been diagnosed with PTSD and still suffers nightmares.</span></li>
	<li><span style="font-size:16px">Sarah McNeilly claims that&nbsp;she was thrown against the wall and Manson &quot;threatened to bash my face in with a baseball bat&quot;. She alleges she was locked in rooms when she was &quot;bad&quot;, &quot;verbally berated for hours&quot; and made to feel worthless. She says she now suffers from PTSD and mental health issues.</span></li>
	<li><span style="font-size:16px">Ashley Lindsay Morgan alleges&nbsp;she &quot;wasn&#39;t allowed to eat, or sleep, or leave&quot; Manson&#39;s house. She claims Manson cut and burned her and asked her to bring him Nazi memorabilia. She says she has been left with PTSD, anxiety and night terrors.</span></li>
</ul>
</div>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Wood has&nbsp;previously referred to being raped and abused&nbsp;in interviews and on social media and in 2019 she created the Phoenix Act, which extends the statute of limitations on domestic violence from three years to five.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">&nbsp;</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">The bill was signed into law by California governor Gavin Newsom in October 2019, and took effect in January 2020.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">At the time,&nbsp;Wood testified to Congress&nbsp;that her abuser had hidden an addiction to drugs and alcohol from her, and &quot;had bouts of extreme jealousy, which would often result in him wrecking our home, cornering me in a room, and threatening me&quot;.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">A representative for Manson has previously said it would be &quot;inappropriate to comment&quot; on personal testimony.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Wood, 33, is known for roles in films such as The Wrestler and The Ides of March. She has voiced characters in films such as Frozen II and Asterix and the Vikings.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">She is best known for portraying sentient android Dolores Abernathy in the HBO series Westworld, a role she has played since 2016.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Manson, 52, has released 11 studio albums since 1994, three of which have reached the top 10 in the UK.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">His biggest hit single was a cover of Tainted Love, which reached number five in 2001.</span></p>
</div>
</div>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px">&nbsp;</p>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-23',
                'link' => 'kJT8kCk4s4gHLnZR',
                'is_main' => false,
                'is_second' => true,
            ],
            [
                'title' => 'Ancient mummies with golden tongues unearthed in Egypt
',
                'image' => '/images/news/13.jpg',
                'description' => 'Archaeologists have unearthed 2,000-year-old mummies with golden tongues placed inside their mouths in northern Egypt, the antiquities ministry says.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">An Egyptian-Dominican team working at Alexandria&#39;s Taposiris Magna temple discovered 16 burials in rock-cut tombs popular in the Greek and Roman eras.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Inside were poorly-preserved mummies.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">It is thought the dead were given gold foil amulets shaped like tongues so that they could speak before the court of the god Osiris in the afterlife.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">Ancient Egyptians believed that Osiris was lord of the underworld and judge of the dead.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:1.5rem; margin-right:0px">
<ul style="margin-left:0px; margin-right:0px">
	<li><span style="font-size:16px">Lost Egyptian artefact found in cigar box</span></li>
	<li><span style="font-size:16px">Egyptian mummified animals &#39;digitally unwrapped&#39;</span></li>
	<li><span style="font-size:16px">Egyptian mummification &#39;recipe&#39; revealed</span></li>
</ul>
</div>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">The god was also pictured in gilded decorations on the cartonnage - a material made of layers of plaster, linen and glue - that was partially encasing one of the mummies, lead archaeologist Kathleen Martinez of the University of Santo Domingo was&nbsp;cited by the antiquities ministry as saying.</span></p>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">&nbsp;</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">The gilded decorations on the cartonnage around a second mummy&#39;s head depicted a crown, horns and a cobra snake, she added. On the chest, the decorations depicted a necklace from which hung the head of a falcon - the symbol of the god Horus.</span></p>
</div>
</div>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px"><span style="font-size:16px">.</span></p>
</div>
</div>
</div>
</div>

<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px">&nbsp;</p>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-23',
                'link' => 'NYVUaB92zQ7dHZU4',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Newspaper run by prisoners offers a new chance to convicts',
                'image' => '/images/news/14.jpg',
                'description' => 'Prisoners run a newspaper from inside a California jail. The monthly raises awareness of social justice issues and offers a new chance to convicts.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">onathan Chiu was sentenced to 50 years in prison for first-degree murder in 2004.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In May, the governor of the U.S. state of California commuted Chiu&rsquo;s sentence, and Chiu was released on parole, 34 years early.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;I wouldn&rsquo;t be back out if it wasn&rsquo;t for the paper,&rdquo; Chiu said, referring to the San Quentin News, a monthly newspaper run by inmates in the state&rsquo;s oldest prison. &ldquo;I genuinely believe that.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">While behind bars, Chiu was the layout editor of the only prisoner-run newspaper in the United States, which employs 12-15 incarcerated men who are helped by seven professional advisers and a handful of volunteers.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A printed edition is distributed to the approximately 4,000 inmates at San Quentin, which is north of San Francisco, as well as to prison staff, volunteers and visitors. Another 18,000 copies are sent to California&rsquo;s 35 other prisons and to local communities. The total press run is about 30,000 copies.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;San Quentin News reports on rehabilitative efforts to increase public safety and achieve social justice,&rdquo; according to&nbsp;the newspaper&rsquo;s website, where the latest edition features articles on deaths in U.S. prisons due to COVID-19, a prison reform law in California and a measure granting the right to vote to former prisoners.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;The paper wants to prove that rehabilitation is there, and that given the opportunity, people can change,&rdquo; Chiu said in an interview.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Prison is rich with stories.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Each issue covers a range of topics, from the death penalty to criminal justice law and policy to art and sports. It even has a crossword puzzle, which Chiu coordinates.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;I started making the crosswords inside, using an old fashioned pen and paper, a dictionary and any information that I could retain in my mind,&rdquo; Chiu said, adding: &ldquo;We don&rsquo;t have access to the internet or Google inside.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">To help prisoners improve editing skills, the newspaper offers a class called the Journalism Guild, taught by a volunteer instructor like Yukari Iwatani Kane, a journalist, author and journalism school professor who ran the class from 2016 to 2018.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">When Kane first entered the prison, she knew nothing about prison life, criminal justice or mass incarceration. What struck her most was the talent, ambition and interest inside the walls &mdash; and her realization that it was being wasted.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;As a journalist, I&rsquo;m always seeing stories,&rdquo; said Kane, who currently is an adjunct lecturer at Northwestern University&rsquo;s Medill School of Journalism and still helps the paper as an advisor. Prison, she said, is rich with stories.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Hearing the stories, Kane became increasingly interested in learning more about criminal justice reform. &ldquo;It blew open a whole world that I didn&rsquo;t see before,&rdquo; she said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Kane said she was shocked to learn how extensive incarceration is in the United States. It affects the estimated 2.3 million people who are imprisoned or detained, but also the 115 million people who know them. What is more, information about prison life comes largely from &ldquo;the outside,&rdquo; she said.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Prisoners know what&rsquo;s going on inside.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In 2020, Kane co-founded the Prison Journalism Project, which helps prisoners and those in communities hard hit by incarceration to &ldquo;tell stories about their world using the tools of journalism.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Journalists outside prisons reporting on what goes on behind bars can be limited to what the public information office shares with them. Inmates really know what is going on.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Inmates don&rsquo;t need permission to interview another prisoner. Typically, they have the trust of other inmates, which allows them to tell a story with the kind of nuance that can escape an outside reporter. And an outside journalist may not know when to challenge a response that warrants skepticism.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;This doesn&rsquo;t mean that outside reporting isn&rsquo;t important,&rdquo; Kane said. &ldquo;It just means that there&rsquo;s a perspective missing that we think we can fill, and we want to help our writers fill it.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The Prison Journalism Project trains inmates to write stories &mdash; from straight reporting to opinion pieces &mdash; of publishable quality, about their communities or simply issues they care about.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;The only way to change things is by getting stories &mdash; getting good journalism &mdash; about what is really happening on the inside,&rdquo; said Kane.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Those working on the newspaper don&rsquo;t return to crime.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The stories that emerge from the Prison Journalism Project don&rsquo;t just serve a purpose beyond prison walls. They also play an important role inside.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Prisons deliberately cut inmates off from the outside world, including other prisons. The Project partners with publications on the inside to ensure the stories reach inmates. One of those &ldquo;inside&rdquo; organizations is The San Quentin News, which Kane now advises.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The recidivism rate among San Quentin News alumni is zero, according to Kane. Once staff reporters at the News get released from prison, they do not go back. Why? Because the newspaper empowers prison writers, teaches them important skills and provides them with a sense of community within San Quentin.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Although most alums don&rsquo;t continue to practice journalism, their work for the News gives them skills needed to be successful in the outside world. &ldquo;When you&rsquo;re a reporter, you are in situations where you get to interface with the outside world,&rdquo; explained Kane. &ldquo;Oftentimes, this means you end up with more support once you get out.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">By talking to people, a reporter develops empathy, observation and communication and socialization skills.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;And writing,&rdquo; Kane added. &ldquo;If you can write well, it doesn&rsquo;t matter what job you take. It&rsquo;s always going to help you.&rdquo;</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The newspaper gives a second chance to convicts.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Chiu credits his time on the paper with helping him gain confidence. Specifically, he thanks San Quentin&rsquo;s visitors. When they came through the newsroom on tours of San Quentin, the staff was tasked with talking to them about the paper and answering questions.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;It allowed me to learn how to open up and talk about who I am,&rdquo; said Chiu.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The San Quentin newsroom, according to Chiu, is &ldquo;organized and disorganized&rdquo; like any other and includes people of different races, cultures, religions and backgrounds. &ldquo;At the end of the day, we all have the same belief in each other and in the mission of the paper,&rdquo; he said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Returning to the outside world, which the prison system tried hard to cut off, was difficult, especially during the coronavirus pandemic, Chiu said. Continuing to work at the newspaper, which is being run with the help of alumni during the pandemic, and contributing to the Prison Journalism Project has helped, he said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;I felt like I needed to give back and make amends,&rdquo; said Chiu. &ldquo;And the paper is a way to help all of those people who are still incarcerated.&rdquo;</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-23',
                'link' => 'BVmn4hF4fUaSynq5',
                'is_main' => false,
                'is_second' => true,
            ],
            [
                'title' => 'Biden, Harris will not permit white supremacy, students told',
                'image' => '/images/news/15.png',
                'description' => 'In a shift from the Trump administration, Joe Biden and Kamala Harris will not tolerate white supremacy, two experts tell a News Decoder webinar.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px; text-align:left">Joe Biden and Kamala Harris will strive to restore respect for racial and ethnic diversity in the United States and not tolerate white supremacy after they assume power as president and vice president this week, two guest experts with deep experience in Washington politics told a News Decoder webinar on the U.S. presidency.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Gene Gibbons, who covered six presidents as a White House correspondent, and Mark Weinberg, a spokesman for former President Ronald Reagan, spoke with students from News Decoder&rsquo;s partner schools on January 15 at a virtual round table on &ldquo;The U.S. Presidency&nbsp;&mdash; Past and Future.&rdquo;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">The hour-long, exclusive event, broadcast to News Decoder&rsquo;s 19 partner schools in 14 countries, was the latest in the educational news service&rsquo;s series of webinars on topics of global import. It featured 19 students on camera who exchanged views with Gibbons and Weinberg, who together worked for decades in the U.S. capital.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Eugenia Rogers, a student at the&nbsp;African Leadership Academy&nbsp;in South Africa, asked what impact Harris, as the first Black and first South Asian vice president, will have on race relations.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">&ldquo;That&rsquo;s going to be very important, to have a person of color at the very highest level of government, representing the hopes and aspirations of people of color,&rdquo; said Gibbons,&nbsp;who recently published a memoir, &ldquo;<span style="font-size:16px">Breaking News: A Life in Journalism,&rdquo;&nbsp;that offers an inside look at modern American history and portraits of presidents, a queen and a pope.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left">Biden, Harris will not tolerate white supremacy.</h3>

<p style="margin-left:0px; margin-right:0px; text-align:left">Leela&nbsp;Rosaz Shariyf, a student at&nbsp;Miss Porter&rsquo;s School&nbsp;in the United States, spoke of the excitement among her Black schoolmates when Biden announced that Harris was his running mate. &ldquo;This is an exciting moment for us, having someone to look up to for any political ambitions we have or even non-political ones, just knowing that we have that representation at the very highest office in the country,&rdquo; she said.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Gibbons said: &ldquo;Kamala Harris&rsquo;s election and the position she&rsquo;s going to hold shows that for the majority of the American people, we don&rsquo;t have that feeling that this is a white country that should be preserved for white people. This is a pluralistic country, where we celebrate having incredible diversity. That signal is important to send.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Evan Wright, a Student Ambassador for News Decoder at&nbsp;Indiana University, asked how the United States could question the democratic credentials of autocratic regimes around the world while white supremacists were calling into question the legitimacy of Biden&rsquo;s election.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;</span>We are always going to have white supremacists, but we don&rsquo;t have to have a president who gives them daylight, who legitimizes them and who looks the other way,&rdquo; Weinberg said. &ldquo;I think it&rsquo;s very important that President Biden set a tone of intolerance of that.&rdquo;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Gibbons concurred, saying America still has a &ldquo;tremendous problem&rdquo; with white supremacy.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">&ldquo;I<span style="font-size:16px">&nbsp;think Joe Biden and Kamala Harris will not tolerate, they will not sanction, they will not wink at what has gone on for the past four years, which is a surge in hate speech, in hate thought and in hate action,&rdquo; the former White House correspondent for Reuters and United Press International said.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left">Clinton, Bush, Obama send a signal of continuity.</h3>

<p style="margin-left:0px; margin-right:0px; text-align:left">Asked if it was a problem that outgoing President Donald Trump would break with tradition and not attend Biden&rsquo;s inauguration, Weinberg said it was &ldquo;unfortunate&rdquo; but would not make a difference in the long run.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Gibbons noted that former Presidents Bill Clinton, George W. Bush and Barack Obama, representing different political parties, would attend the ceremony, ensuring in his view that Trump would eventually be &ldquo;an asterisk in American history.&rdquo;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Still, Gibbons said he feared Trump&rsquo;s absence and his refusal to concede defeat to Biden could have political consequences. &ldquo;Seventy-five million Americans voted for Donald Trump. A large percentage believe the lie he has spread, that it was a stolen election. The fact that he perpetuates that lie will hurt the country, at least a short time.&rdquo;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Charles Gorrivan of&nbsp;Friends Seminary&nbsp;school in New York asked the experts to assess the damage from the spread of misinformation under the Trump administration.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Gibbons said it was a national security problem as efforts to undermine American democracy ultimately play into the hands of foreign adversaries.</p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left">The press is not the enemy of the people.</h3>

<p style="margin-left:0px; margin-right:0px; text-align:left">The antidote to lies, Weinberg said, is the truth. &ldquo;I expect the&nbsp;Biden administration will be honest, and if he does tell the truth, it will have a tremendously positive effect very quickly.&rdquo;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Weinberg, who was special advisor and press secretary to the 40th U.S. president, has written a memoir, &ldquo;Movie Nights with the Reagans,&rdquo; that describes the weekly screening of movies at the Camp David presidential retreat during the California Republican&rsquo;s eight years as president.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Gibbons, who covered Presidents Nixon, Ford, Carter, Reagan, Bush Senior and Clinton, acknowledged that the media had played a role in polarizing the U.S. electorate by at times perpetrating false equivalencies. &ldquo;The media has too often fallen into the trap of trying to reflect the position of both sides when one side is not true, particularly in this past administration,&rdquo; he said.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Weinberg said one of the most damaging legacies of the outgoing administration was its depicting the mainstream press as fake news. &ldquo;Take with a huge grain of salt the Trump adminstration&rsquo;s suggestion that the press is the enemy of the people. Because that, they are not,&rdquo; he said.</p>

<p style="margin-left:0px; margin-right:0px; text-align:left">Gibbons urged the students to study history. &ldquo;<span style="font-size:16px">Really try to get a grasp of what has transpired because it&rsquo;s often a predictor of the future,&rdquo; he said, quoting writer and philosopher George Santayana, who wrote, &ldquo;Those who cannot remember the past are condemned to repeat it.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><em>(Nelson Graves is the founder of News Decoder.)</em></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-24',
                'link' => 'geLgnj6dmN2kERBq',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Deepfakes and AI spur disinformation and threaten democracy',
                'image' => '/images/news/16.jpg',
                'description' => 'Fake news is already eroding our shared sense of reality. Now, deepfakes and AI stand to fuel disinformation and imperil democracy.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The unprecedented mob assault on the U.S. Capitol on January 6 represents perhaps the most stunning collision yet between the world of online disinformation and reality.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The supporters of U.S. President Donald Trump who broke into Congress did so in the belief that the U.S. election was stolen from them after weeks of consuming unproven narratives about &ldquo;ballot dumps,&rdquo; manipulated voting machines and Democrat big-city corruption. Some &mdash; including the woman who was shot dead &mdash; were driven by the discredited QAnon conspiracy theory that represents Democratic Party elites as a pedophile ring and Trump as the savior.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">It&rsquo;s tempting to hope that disinformation and its corrosive effects on democracy may have reached a high-water mark with the events of January 6 and the end of Trump&rsquo;s presidency. But trends in technology and society&rsquo;s increasing separation into social media echo chambers suggest that worse may be to come.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Imagine for a moment if video of the Capitol riot had been manipulated to replace the faces of Trump supporters with those of known protestors for antifa, a left-wing, anti-fascist and anti-racist political movement. This would have bolstered the unproven story that has emerged about a &ldquo;false flag&rdquo; operation. Or imagine if thousands of different stories written by artificial intelligence software and pedaling that version of events had flooded social media and been picked up by news organizations in the hours after the assault.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That technology not only exists. It&rsquo;s getting more sophisticated and easier to access by the day.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Deepfakes, AI can erode our trust in democracy.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Deepfake, or synthetic, videos are starting to seep from pornography &mdash; where they&rsquo;ve mostly been concentrated &mdash; into the world of politics. A deepfake of former President Barack Obama using an expletive to describe Trump has garnered over eight million views on YouTube since it was released in 2018.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Most anyone familiar with Obama&rsquo;s appearance and speaking style can tell there&rsquo;s something amiss with that video. But two years is an eternity in AI-driven technology, and many experts believe it will soon be impossible for the human eye and ear to spot the best deepfakes.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A deepfake specialist was hailed early last year for using freely available software to &ldquo;de-age&rdquo;&nbsp;Robert DeNiro and Joe Pesci in the movie &ldquo;The Irishman,&rdquo; producing a result that&nbsp;many critics considered superior to the work of the visual-effects supervisor in the actual film.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In recent years, the sense of shared, objective reality and trust in institutions have already come under strain as social media bubbles hasten the spread of fake news and conspiracy theories. The worry is that deepfakes and other AI-generated content will supercharge this trend in coming years.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;This is disastrous to any liberal democratic model because in a world where anything can be faked, everyone becomes a target,&rdquo; Nina Schick, the author of &ldquo;Deepfakes &mdash; The Coming Infopocalypse,&rdquo; told U.S. author Sam Harris in a recent podcast.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;But even more than that, if anything can be faked &hellip; everything can also be denied. So the very basis of what is reality starts to become corroded.&rdquo;</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Governments are under pressure to do more to combat disinformation.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Illustrating her point is reaction to Trump&rsquo;s video statement released a day after the storming of Congress. While some of his followers online saw it as a betrayal, others reassured themselves by saying it was a deepfake.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">On the text side, the advent of GPT-3 &mdash; an AI program that can produce articles indistinguishable from those written by humans &mdash; has potentially powerful implications for disinformation. Writing bots could be programmed to produce fake articles or spew political and racial hatred at a volume that could overwhelm text based on facts and moderation.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Society has been grappling with written fake news for years, and photographs have long been easily manipulated through software. But convincingly faked videos and AI-generated stories seem to many to represent a deeper, more viral threat to reality-based discourse.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">It&rsquo;s clear that there&rsquo;s no silver-bullet solution to the disinformation problem. Social media platforms like Facebook have a major role to play and are developing their own AI technology to better detect fake content. While fakers are likely to keep evolving to stay ahead, stricter policing and quicker action by online platforms can at least limit the impact of false videos and stories.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Governments are coming under pressure to push Big Tech into taking a harder line against fake news, including through regulation. Authorities can devote more funding to digital media literacy programs in schools and elsewhere to help individuals become more alert and proficient in identifying suspect content.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">When it comes down to it, the real power of fake news hinges on those who believe it and spread it.</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-24',
                'link' => 'Nyw4dQTpxymqwKfP',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Even NGOs can have political leanings. So, follow the money.',
                'image' => '/images/news/17.jpg',
                'description' => 'Journalists and NGOs often rely on each other to inform the world. But beware vested interests. It’s best to follow the money trail to see the full picture.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A number of my friends from developing-world nations had a good chuckle at my expense before the November U.S. election after&nbsp;the International Crisis Group issued a warning about violence&nbsp;around the voting.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">One from Kenya sarcastically offered to arrange for peacekeepers and targeted sanctions. All I could do was laugh because, indeed, the worm had turned.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The United States, a beacon of democracy, was being chided for fomenting election violence on its own soil? While the United States has certainly been accused of stirring up election trouble on foreign soil, the criticism from ICG, as it is known, was a first.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For anyone who has spent time on a foreign desk or worked in the developing world as a newsperson, aid worker or diplomat, that kind of zinger from the ICG is a regular feature before nearly any election where there is a whiff of mischief or mayhem. I saw it in Kenya, Sri Lanka, Afghanistan, Congo and points in between.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">ICG&rsquo;s on-the-ground experts produce reports on global conflicts that often include calls for national leaders to refrain from armed conflict, election fraud and other dangerous national activities.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">NGOs and journalists can have a symbiotic relationship.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">As a non-governmental organization (NGO) involved in international affairs, ICG carries a certain authority because its leaders are almost always senior officials from western governments, such as former Australian Foreign Secretary Gareth Evans or Mark Malloch-Brown, who served as United Nations Deputy Secretary-General.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For journalists covering conflict-ridden countries, an ICG report is typically a welcome advent. The documents are often full of intriguing details and reporting from staffers who have access to information or areas off-limits for most journalists. The reports &mdash; supplemented by commentary from an ICG expert &mdash; can add heft to correspondents&rsquo; stories.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Journalists require outside commentary to add perspective to their reporting, and third-party, independent quotes are crucial. Capable journalists have many such sources at their fingertips, but the pithier and more quotable sources are always favorites, as are those who respond quickly. The ones who rush to get their names into print run the risk of becoming known as &ldquo;Rent-a-Quote.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">I know of few journalists who have resisted, from time to time, resorting to such overly serviceable sources.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Any NGO that advocates publicly needs to offer quotable experts and must publish reports that generate news or can be used as talking points for journalists. That&rsquo;s because NGOs are often &ldquo;non-profit, non-partisan&rdquo; and rely on fundraising to pay for operations, advocacy and advertising. Visibility is at a premium, and what better way to get it free than being featured in a story?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">So, it&rsquo;s easy to see why NGOs and journalists can have a symbiotic relationship. One has expertise or newsworthy information, while the other has a platform and an insatiable appetite for news and expertise.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&lsquo;Follow the money.&rsquo;</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That&rsquo;s where the rub is.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Good journalists obey the dictum &ldquo;follow the money.&rdquo; That axiom holds that the money trail leads invariably to the underlying interest of a company, person, nation or not-for-profit.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Wait, not-for-profit groups can be influenced by money? Surely not!</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That&rsquo;s what many people think when they read about &ldquo;an independent, non-partisan, not-for-profit&rdquo; organization, watchdog or interest group. We take it on faith that these groups are all of the above yet forget the older law about money and influence: He who has the gold, rules.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">It is true that many organizations work independently of their funders, but none can escape the fact that an unhappy donor will end up looking elsewhere. No donor who is, say,&nbsp;against abortion would join a group that favors a woman&rsquo;s right to choose.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">At most advocacy organizations, birds of a feather flock together.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Always ask, &lsquo;Who is paying their bills?&rsquo;</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Good journalists know who funds NGOs they cite and what the organizations&rsquo; political leanings are, and they tell their readers as much.&nbsp;In the case of the International Crisis Group, a quick bit of research shows that billionaire George Soros was one of the original funders and that nearly half of its funds come from government contributions.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A fair-handed news organization would identify ICG as a &ldquo;left-leaning conflict monitoring group funded by western governments such as the U.S., UK and Australia, philanthropic foundations and companies.&rdquo; That&rsquo;s easy to understand, and a reader can judge the ICG&rsquo;s perspective. It is not unfair to say that ICG has a distinctly western outlook. To some in the developing world, it smacks of colonialism.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A special note: To those on the political right, George Soros is what the Koch Brothers are to those on the U.S. left&nbsp;&mdash; a shorthand reference to demonize any opposing group as bought-and-paid-for stooges of evil billionaires. If you see &ldquo;Soros-funded&rdquo; or &ldquo;Koch Brothers-funded&rdquo; as a reference, that usually gives you a good idea of the political bent of the publication.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Climate coverage is fraught with such references. Environmental activist groups that advocate for solar and wind power will play the Koch card, to which opponents favoring fossil fuels will respond with a Soros card.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That&rsquo;s a diversion. Few journalists ask who funds environmental groups, but many receive funding from clean energy interests. That does not necessarily undercut what the groups say, but it is a reminder that some people will profit if fossil fuel production is replaced.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">When reading statements from organizations that describe themselves as non-profit, non-partisan and independent, we should always ask ourselves, &ldquo;Who is paying their bills?&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">By following the money, we can sort fact from opinion and gain a well-rounded understanding of issues.</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-27',
                'link' => 'JBtw3PJS9yaXBCFj',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Want to take news photos? Then always be prepared.',
                'image' => '/images/news/18.jpg',
                'description' => 'Technology has revolutionized news photos since I launched my career decades ago. But the maxim “always be prepared” still holds true.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Luck is when opportunity meets preparation.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">So said Manuel Le&oacute;n Lopez, my photojournalism professor at the University of Missouri-Columbia. I first heard him say it in 1982, and it is relevant even today, despite the technological revolution.&nbsp;Yes, sometimes sheer luck can place you in a special place at the right moment. But if you are not prepared, you won&rsquo;t take full advantage of it.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For a news photographer, being prepared means you need to understand what is going on, do your research and try to anticipate what is going to happen. Being alert will help you get the right photo &mdash; and help you avoid problems.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Preparedness doesn&rsquo;t happen magically. It requires a deliberate effort ahead of time, and it&rsquo;s a skill that evolves with experience. Obviously, the better you understand what is going on, the better the results. There may be occasions when you have to cover things that you know little about, but that is no excuse. You don&rsquo;t need to become an expert on everything you cover, but it helps to understand the basic &ldquo;Ws&rdquo; &ndash; What is happening, When, Where, Who and Why.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That is Journalism 101 and very relevant in photojournalism.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Sports is a great way to train for taking news photos.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Many years ago, I covered a lot of sports, soccer in particular. At the beginning, I didn&rsquo;t know the players and sometimes failed to get the key ones. Today, it is hard to imagine that a photo won&rsquo;t match the main story. For example, if you are looking at photos of a Barcelona match, you certainly expect to see at least one photo of Messi, perhaps even with their new coach. Having a nice image of lesser known players would not be of interest &mdash; meaning you need to know in advance what the story is.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In the analog era, it was much more challenging because we were shooting film, which needed to be processed, edited, copied and then transmitted over phone lines. It was a lengthy process that changed radically with digital technology. Nowadays, photographers cover an entire match and send the photos wirelessly from their cameras, often with remote editors accessing the pictures in real time so they can quickly distribute the key images.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">But in the film era, for a game starting late at night, very often you could shoot only during the first five minutes before you had to rush off to develop the film to make deadlines. If you didn&rsquo;t know the story and focus on the key players in those precious few moments, you would fail.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Sports coverage is a great way to train your reflexes. It doesn&rsquo;t need to be a top match. Any sport provides an opportunity to improve your technical skills, but you still need to know what the story is.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">My experience covering sports helped me to anticipate what might happen and to capture events even when they occurred unexpectedly. As examples of the benefits of preparation and anticipation, here are some photos I have taken as a News Decoder correspondent.</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-28',
                'link' => 'Nt9AqChcQzwm7sEE',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Our ‘zine’ offers a creative antidote for COVID-19',
                'image' => '/images/news/19.png',
                'description' => 'We were students seeking solace from COVID-19. Then, with a burst of artistic creativity, an online ‘zine’ was born.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">During the early days of the pandemic lockdown in Toronto, I found myself trying to pin down that vague feeling of listless unrest induced by the unprecedented uncertainty around me.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left">&nbsp;</p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">It felt like the aimless days between Christmas and New Year&rsquo;s, but substitute festivities with a barrage of disheartening news. An article I read identified the feeling as a kind of collective grief in the wake of COVID-19&rsquo;s ripples around the globe.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">As the pandemic spread,&nbsp;my best friend, Virginia Ling, sent me photos of bare grocery store shelves in the United Kingdom, where she was on exchange. She came home to Canada shortly after, not because of the pandemic but because she wanted to present her undergraduate thesis in person. Little did she know that her presentation would be cancelled and that she wouldn&rsquo;t get to finish her semester abroad.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">So, Virginia and I decided to seek solace in our extended communities. Together we created&nbsp;Distanziner&nbsp;&mdash; an online &ldquo;zine&rdquo; (pronouced &ldquo;zeen&rdquo;), or self-published work, featuring original drawings, poetry, music, listicles, recipes and photos by 18 contributors who plumbed their imaginations while in lockdown.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;This pandemic has affected us all in unique ways, and each of us have stories we want to share,&rdquo; Virginia said.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Taking a breather from COVID-19 with zine</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In the first issue, Laura Nguyen reflects on her increased appreciation of small things that have brought her joy while confined to her Toronto apartment.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Michelle Khuu expresses a twinge of hope with an illustrated tableau of bunnies reuniting after successfully flattening the curve.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Terese Mason Pierre offers an ode to the power of creativity in the face of adversity with a poem that reads,</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>&hellip; one day at a time is the mantra, it will</em><br />
<em>come back, the wings, the beating energy</em><br />
<em>against the back of our necks, the desire to run, to change</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Perhaps Anike Morrison&rsquo;s recipe for cocoa-nut butter energy balls will pick you up during quarantine.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">We had originally planned a dinky archive of quarantine creativity housed in an online document, but the zine quickly took on a life of its own. With the support of an interdisciplinary team of students from Canadian universities, we created something much bigger.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;I think what we&rsquo;ve created is a way to just take a breather from all the COVID-19 news and just unwind,&rdquo; said Irfan Hakim, a member of Distanziner&rsquo;s design team.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">To help raise money for local charities identified by the its editors, Distanziner dispatches postcards showcasing artwork from the first issue. Donors can have the postcards sent to themselves, friends or family, or Distanziner can send cards on their behalf to a healthcare worker or a resident in a long-term care home who could use the extra support and cheer right now.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Distanziner is accepting submissions for its second monthly issue, centered around adapting to change and physical isolation. Interested in submitting?&nbsp;Find details here.</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-01-31',
                'link' => 'XNWRrHHPA2rn4Qya',
                'is_main' => false,
                'is_second' => true,
            ],
            [
                'title' => 'Will U.S., under Biden, seek ‘primacy’ against rival China?',
                'image' => '/images/news/20.jpg',
                'description' => 'A top secret White House document, surprisingly declassified, says the U.S. should seek “primacy” against rival China and promote ties with India.',
                'full_description' =>'<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<div style="margin-left:0px; margin-right:0px; text-align:start">
<div style="margin-left:0px; margin-right:0px">
<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Top secret usually means top secret &mdash; except when a departing U.S. administration tries to box its successor in by releasing something to the public more than 21 years early.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Such a sudden declassification occurred on January 5, when Donald Trump&rsquo;s outgoing administration surprisingly revealed its U.S. Strategic Framework for the Indo-Pacific, something that was supposed to stay &ldquo;secret&rdquo; until the last day of 2042.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Marked &ldquo;Secret//NOFORN&rdquo; (meaning not to be seen by any &ldquo;foreign national&rdquo;),&nbsp;the 10-page document&nbsp;is a good mirror, showing how the United States sees its role in the world, how it looks at the other players in the region and how it sees China as a competitor, rival and even enemy.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Announcing the declassification of the strategy paper on January 13 &mdash; precisely one week before Joe Biden succeeded Trump as president &mdash; outgoing National Security Advisor Robert O&rsquo;Brien said &ldquo;the document is being released to communicate to the American people and to our allies and partners, the enduring commitment of the United States to keeping the Indo-Pacific region free and open long into the future.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">It&rsquo;s no use trying to find the document on the White House website, where it was posted before Biden took office on January 20. The document has been taken off the website but can be found in&nbsp;an archive.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">U.S. should keep its &lsquo;strategic primacy&rsquo; in Asia-Pacific, the document says.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The new Biden administration can craft its own course, although it is clear the preceding regime took the very unusual step of declassifying the&nbsp;document in an effort to keep American strategy consistent.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Biden will have to find his own measure of China, but in the early days his administration has set out tough lines on key issues, including China&rsquo;s treatment of the Uighur population of Xinjiang in the far west of China, and on the security of Taiwan, the self-governing island off China&rsquo;s southern coast that Beijing claims as its own.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Asia remains a key playground for the United States. In its first lines, the document declares that the United States should keep its &ldquo;strategic primacy&rdquo; in Asia-Pacific.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">This is in stark contrast to China&rsquo;s own view, which it repeatedly frames as being part of a historical pull to a multi-polar world, where there are not one or two superpowers vying for a crown, but many powerful nations each having its own influences.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Washington sees itself as the capital of an Asian-Pacific nation. Although it is thousands of miles from the Asian continent, its long Pacific coastline gives it a stake in the game.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">U.S. sees China as a rival.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The United States clearly wants to encircle China and promote India. It sees China as an economic, military and strategic rival.&nbsp;The report asserts an explicit objective to deter China from using military force against the United States and its allies, &ldquo;and develop the capabilities and concepts to defeat Chinese actions across the spectrum of conflict.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">With flashpoints in Taiwan, the South China Sea and in North Korea with its nuclear ambitions, the potential for skirmishes, if not outright conflict, is there. A key challenge for the Biden administration will be whether it can use diplomacy to advance its interests despite this bellicose strategic review putting down a strong marker.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Beijing&rsquo;s diplomats must surely wonder, however, how to deal with a country that declares it must &ldquo;maintain an intelligence advantage over China, and inoculate the United States, its allies and partners against Chinese intelligence activities&rdquo; &mdash; in other words, spy on China, but don&rsquo;t let China spy on us.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That means India has a chance to be Washington&rsquo;s new best friend.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The U.S. strategy spelled out in the declassified document wants to pit the world&rsquo;s two most populous nations against one another, stating, &ldquo;a strong India, in cooperation with like-minded countries, would act as a counterbalance to China,&rdquo; and pledging to &ldquo;accelerate India&rsquo;s rise and capacity to serve as a net provider of security and Major Defense Partner.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In the U.S. document&rsquo;s view, strengthened alliances with Australia, India and Japan would create a new &ldquo;quadrilateral security framework&rdquo; for the region and a counterweight to China.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&lsquo;It should rightly be thrown into the dustbin of history,&rsquo; China said.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">China, of course, has been busy making its own alliances. Its huge but troubled &ldquo;Belt and Road Initiative&rdquo; is trying to build vast infrastructure links with some 70 nations, starting in Asia and Central Asia and expanding as far as Africa.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In fact, through its targeted use of funds, China has become one of the largest sources of inward investment cash into India, raising the question of whether new American words can counter the financial moves China is already making.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The billions of dollars China is using for Belt and Road are not without strings and controversy, however, and some nations may well be grateful to have a U.S. alternative to explore, or at least to play off against Beijing. But even that will require the new strategy to be put into practice and not stay at the level of theory.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For its part,&nbsp;Beijing dismissed&nbsp;Washington&rsquo;s strategy.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;It highlights the Cold War mentality and military confrontation, which goes against the mutually-beneficial spirit of regional cooperation, runs counter to regional people&rsquo;s aspiration for peace, stability and development, and threatens regional prospects of peace and development,&rdquo; Chinese Foreign Ministry spokesman&nbsp;Zhao Lijian said on January 13.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;As such, it should rightly be thrown into the dustbin of history.&rdquo;</span></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' =>'2021-02-1',
                'link' => 'tsVgqvFrqpq24Nzs',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' => 'Will we exercise more at home after COVID-19?',
                'image' => '/images/news/21.jpg',
                'description' => 'Lockdowns under COVID-19 have kept many people away from gyms. But some are working out more. Is at-home exercise here to stay?',
                'full_description' => '<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">You&rsquo;d be excused for assuming that people have generally exercised less during the COVID-19 pandemic. After all, lockdowns to curb the spread of the coronavirus have kept people in many parts of the world close to home.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">But people may have trained more intensely. Data from fitness monitors, computer searches, sales of home exercise equipment and a surge in online workout videos suggest as much.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">If that is the case, then a key question is whether COVID-19 will have a long-term impact on how people exercise. Will people go less often to gyms to work out, preferring to exercise at home?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">And are more people convinced that exercise is good for their mental health?</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left">Interest in at-home exercise has soared during COVID-19.</h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Between mid-February and mid-March, when many lockdown orders started taking effect,&nbsp;</span><span style="font-size:16px">visits to gyms in the United States fell 45%</span><span style="font-size:16px">, according to location technology platform Foursquare.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;</span><span style="font-size:16px">This may indicate that people are finding new ways to stay fit while still maintaining social distance, such as running outside or online workout videos,&rdquo; it wrote on March 25, noting that foot traffic to gyms was down most in San Francisco.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Researchers studying search data gathered by Google determined that in three countries &mdash; Australia, the UK and the United States &mdash; &ldquo;</span><span style="font-size:16px">interest in exercise surged</span><span style="font-size:16px">&nbsp;immediately following lockdown, peaked within the first two weeks, then declined but remained at a higher level than before the lockdown.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Searches for &ldquo;high-intensity interval training&rdquo; and &ldquo;home-based exercise&rdquo; also increased, according to&nbsp;</span><span style="font-size:16px">a paper published by the British Journal of Sports Medicine</span><span style="font-size:16px">.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Sales of home exercise equipment rose five-fold, according to data gathered by Yelp.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">In Spain,&nbsp;</span><span style="font-size:16px">stair climbing soared by 900%</span><span style="font-size:16px">&nbsp;over a 2-&frac12; month period stretching from February through mid-April, according to U.S. technology multinational Garmin, which said there were large increases in general activity in Europe over the same period.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left">Most adults recognize the importance of exercise during COVID-19.</h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Many trainers who pre-record workouts and publish them on YouTube have seen a surge in interest during lockdowns. Fitness instructor and model&nbsp;</span><span style="font-size:16px">Pamela Reif of Germany</span><span style="font-size:16px">&nbsp;saw views of her videos soar to 12.7 million during the week of March 23-30, from 2.7 million two weeks earlier.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Some people have found it harder to be regularly active than others</span><span style="font-size:16px">, particularly older people, those on a low income and those in urban areas, according to Sport England. But a recognition that exercise is important is widespread.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;</span><span style="font-size:16px">Almost two thirds of adults consider exercise to be more important</span><span style="font-size:16px">&nbsp;than ever during the current coronavirus crisis,&rdquo; Sport England, a non-governmental public body under the aegis of the UK&rsquo;s Department for Culture, Media and Sport, said in a post in mid-April.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Many parents have been including their children in workouts, according to Sport England, which said&nbsp;</span><span style="font-size:16px">research it commissioned showed&nbsp;</span><span style="font-size:16px">that one in five adults doing home-based fitness online during lockdown were involving children in their household.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Cycling is also proving to be a popular family activity, with 18% of those who are cycling doing so with children in their household,&rdquo; Sport England said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Some fitness experts have targeted kids, with&nbsp;</span><span style="font-size:16px">Britain&rsquo;s Joe Wicks</span><span style="font-size:16px">&nbsp;devoting a special series of home workouts to children.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left">Is home exercise here to stay?</h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">When lockdown started in Britain,&nbsp;</span><span style="font-size:16px">fitness influencer and personal trainer Liam Cavanagh</span><span style="font-size:16px">, who runs his business through Instagram, switched from offering videos tailored for workouts at the gym to workouts people could do at home.&nbsp;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;</span><span style="font-size:16px">I have had a lot of people let me know that my posts have kept them active during the lockdown,&rdquo; Cavanagh said in an email. &ldquo;I think this is a really positive impact given the role exercise plays in mental health and the stress we&rsquo;ve all been put under during this time.&rdquo;&nbsp;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Cavanagh predicted that home exercise is here to stay. &ldquo;Having had to work out at home for so long, people have seen the value home workouts can have, and so if they can&rsquo;t get to the gym as frequently as they like, they&rsquo;ll be open to doing home workouts instead,&rdquo; he said.&nbsp;</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left">Exercise as a way to manage mental health</h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Almost one in five UK adults were likely to be experiencing some form of depression</span><span style="font-size:16px">&nbsp;during the COVID-19 pandemic in June, almost double the number before the pandemic, according to Britain&rsquo;s Office for National Statistics.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Amid signs that being confined to home was threatening some people&rsquo;s mental health, Sport England launched its&nbsp;</span><span style="font-size:16px">&ldquo;Join the Movement&rdquo; campaign</span><span style="font-size:16px">&nbsp;to encourage people to exercise to help keep their mental balance.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A survey by Sport England showed that&nbsp;</span><span style="font-size:16px">63% of those surveyed in the UK across the first six weeks of lockdown said exercise was important for their mental health.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;It has been great to see people finding ways to be active and that more and more people are talking about exercise being part of the approach to managing both their physical and mental health,&rdquo; said Lisa O&rsquo;Keefe, executive director of insight at Sport England.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Gyms have long had the advantage of bringing people together and facilitating competition. But with online workouts more common, at-home equipment widely available and lockdown restrictions easing in many places, it&rsquo;s anyone&rsquo;s guess whether people will continue working out at home or return to gyms.</span></p>

<p>&nbsp;</p>',
                'publication_date' =>'2021-02-01',
                'link' => '6NZgfkn8BB3r8Hu2',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' =>'Malik Figaro: From Student Ambassador to News Decoder intern',
                'image' =>'/images/news/22.jpg',
                'description' => 'A former Student Ambassador, Malik Figaro was News Decoder’s first intern from a partner school. Here are lessons he has drawn in his gap year.',
                'full_description' =>'<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Malik Figaro, News Decoder&rsquo;s most recent intern, was nervous before he decided to take a year off between high school and university. It would be his first year away from school since he was four years old, and how would he make good use of his time?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">After a four-month stint at News Decoder, Figaro has seen the inner workings of a not-for-profit startup, juggled myriad responsibilities and learned time-management skills that will serve him well when he starts college next year and beyond.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Given multiple projects at once, it can be difficult to determine how much time should be allocated to each project. I definitely struggled with this balance,&rdquo; said Figaro, News Decoder&rsquo;s eighth intern. &ldquo;I learned some valuable lessons about managing multiple projects at once, and I&rsquo;ll definitely take these reflections with me when I head to college next year.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Figaro was&nbsp;the first intern&nbsp;to come from one of News Decoder&rsquo;s partner schools, in his case Friends Seminary in New York, where he served as a Student Ambassador for our non-profit. Like two earlier interns,&nbsp;Jasmine Horsey&nbsp;and&nbsp;Dylan Carlson-Sirvent, Figaro has been accepted into Yale, where he intends to start his studies next year after his gap year.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Malik Figaro was a Student Ambassador before becoming an intern.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Like many young people, Figaro decided to take a gap-year due to COVID-19, which has disrupted studies at many schools and universities. &ldquo;I&rsquo;ve been attending school every year since I was 4, so when I made the difficult decision to take a gap year due to the pandemic, I worried about taking responsibility for all the time I&rsquo;d have,&rdquo; he said.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Working remotely from his home in the Bronx, a borough of New York City, Figaro designed pages for News Decoder&rsquo;s new website (learning some CSS coding in the process), created videos and graphics and identified potential academic partners for the educational news service around the world.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;Right now, I am writing an article on mutual aid funds in America which I hope to publish on the site,&rdquo; he said, touching on one of his key interests &mdash; income equality.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;I am always thinking about the ways low-income students face many disadvantages in school compared to wealthier students,&rdquo; he said. &ldquo;News Decoder could start a program that provides journalism education and opportunities to publish work for low-income students, and I would love to help facilitate that process to get them there.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That&rsquo;s the kind of thinking that sets News Decoder apart!</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Being a Student Ambassador whetted his appetite for News Decoder.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">I asked Figaro some questions about his time at News Decoder.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>ND: What led you to choose News Decoder for your internship?</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><strong>Figaro</strong>: I read the job description of News Decoder&rsquo;s intern position and instantly I was interested. This was a great opportunity to develop new skills in all areas, challenge myself in a new environment and, most importantly, enjoy the work I&rsquo;d be involved in. My experience with News Decoder as a Student Ambassador was also a really big component to my interest in the position. I remember very clearly how thoughtful and hard-working the staff had been when working with our webinar team. Although we were stressed about college and other school commitments, the News Decoder team led us every step of the way to make sure we&rsquo;d learn about the webinar process and make the most out of the experience. I really admired their ability to coordinate a webinar with schools around the world, and saw this internship as the perfect way to learn what it takes to run News Decoder.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>ND:&nbsp; What were your responsibilities as an intern?</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><strong>Figaro</strong>: I really got to experience a little bit of everything. I started out by creating visual content such as promotional videos and graphic designs for the new website. I designed pages and layouts for News Decoder&rsquo;s new website, which was interesting because I had to learn some CSS coding. I researched schools around the world that emphasized global education and could become potential partner schools with News Decoder. Right now, I am writing an article on mutual aid funds in America which I hope to publish on the site.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>ND: What was the best part of the work you were doing?</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><strong>Figaro</strong>:&nbsp;TV culture and social media frequently depict the workplace as an intense and dreadful place for employees. Although I was excited to join the News Decoder team, I was anxious because this would be my very first internship. All fears subsided when I came on the Zoom call the first day; the team welcomed me with very open arms. They always asked for my input and made sure I understood how to complete my tasks. Though I faced many challenges, there was always someone on the team who I could talk to for feedback and advice. Working with the News Decoder team has been one of my highlights. I&rsquo;ve learned so much from them, and I am really glad I got the chance to know each one of them.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">How about opportunities for low-income students?</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>ND: What would you have liked to do, or do you think could be done differently?</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><strong>Figaro</strong>:&nbsp;I wish I had approached my article differently. One of the things I quickly learned through this internship is that time management is crucial. Given multiple projects at once, it can be difficult to determine how much time should be allocated to each project. I definitely struggled with this balance, and didn&rsquo;t give my article much thought until the last few weeks. I learned some valuable lessons about managing multiple projects at once, and I&rsquo;ll definitely take these reflections with me when I head to college next year.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>ND:&nbsp;Would you consider coming back to News Decoder in the future, and in what capacity?</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><strong>Figaro</strong>: I would love to come back to News Decoder! With experience in social media, I could definitely see myself helping the team with outreach, building more relationships with schools around the world and creating more graphic designs for the website. One issue I am particularly passionate about is income equality, and I am always thinking about the ways low-income students face many disadvantages in school compared to wealthier students. News Decoder could start a program that provides journalism education and opportunities to publish work for low-income students, and I would love to help facilitate that process to get them there.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>ND: Do you see things differently now, having done the internship, than when you were a Student Ambassador? What should Student Ambassadors know that they might not know?</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><strong>Figaro</strong>:&nbsp;My whole perception of News Decoder has changed, switching roles from Student Ambassador to intern. As a high school student, I had to juggle many different activities, and News Decoder was always one of those many things I was interested in, so I didn&rsquo;t get to delve deep as I would have liked into the work and the mission. As an intern, I now truly understand News Decoder&rsquo;s role in a global context and their mission, and I regret not getting more involved as a Student Ambassador. If I had to give advice to Student Ambassadors, I would emphasize that Student Ambassadors are the bridge between News Decoder and the students at their school, and have a direct impact on student engagement. Get as many people from your school involved. If a topic is important for you and you have many people to talk to about it, don&rsquo;t be afraid to submit a pitch. Submit an entry to the yearly contests!</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>ND: What do you think people outside the News Decoder community should know about News Decoder?</em></span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><strong>Figaro</strong>:&nbsp;News Decoder puts a lot of thought into trustworthy reporting, and besides the many correspondents with many years of experience who have their stories published, News Decoder provides young students from around the world a chance to learn how to report and publish a story. Supporting News Decoder is also supporting the next generation of journalists. Get involved by subscribing to the newsletter or donating!</span></p>',
                'publication_date' =>'2021-02-02',
                'link' => 'jGXmRjY6vJgjAMGK',
                'is_main' => false,
                'is_second' => true,
            ],
            [
                'title' =>'International space station benefits those of us on Earth',
                'image' =>'/images/news/23.jpg',
                'description' => 'It’s hundreds of miles above Earth. But the International Space Station is a scientific laboratory that is bringing myriad benefits to humans far below.',
                'full_description' =>'<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">For scientist Kate Rubins, it&rsquo;s another day at the laboratory running experiments. But her lab is different. It&rsquo;s a workplace that travels at 17,500 miles per hour as it orbits 240 miles above the Earth. And it&rsquo;s located on the International Space Station (ISS), which has been orbiting our planet for 20 years, producing extraordinary science that can&rsquo;t be done on Earth.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The list of experiments done on the space station stretches to thousands and includes research into new drugs, sustainable technology, solar power, plant growth and water recycling.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Dr. Rubins, an American scientist and astronaut who arrived &ldquo;on station&rdquo; on October 14 for a six-month stint, knows this well. It&rsquo;s her second time working in zero gravity.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">On her first mission on the ISS in 2016, Rubins sequenced DNA in zero gravity and ran experiments in molecular and cellular biology, human physiology and physics. She performed two spacewalks around the ISS, which is the size of a football field.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Rubins clearly loves challenges. As a PhD in microbiology &amp; immunology, she helped hunt down viruses in the Democratic Republic of Congo. Rubins&rsquo; six crewmates from three countries are similarly talented. After all, the International Space Station is a joint project between the space agencies of Canada, Europe, Japan, Russia and the United States.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The International Space Station is a research platform.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">On this mission, they are researching life science experiments, testing technology to shield our bodies from radiation and carrying out advanced engineering work required on the ISS, a space craft the size of a six-bedroom house.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;The space station is first of all a research platform,&rdquo; said Samantha Cristoforetti, an Italian astronaut and veteran of the ISS.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">So why do research and experiments in space? The answers are many.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Away from gravity, researchers can gain a better understanding of the properties of certain cells, proteins and tissues. The results of treatments to combat diseases &mdash; from cancer to heart disease to Alzheimer&rsquo;s &mdash; can be seen more clearly.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Other vital technology, designed for astronauts, has provided huge benefits for us back on Earth.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Humans can&rsquo;t survive without water, wherever they are in the galaxy. Providing clean water in space has helped people who lack access to clean water on Earth because of scarcity or disasters. Thanks to the advanced water filtration and purification developed for the ISS, aid organisations have helped commercialise the water technology designed in space. So clean water on Earth is made possible by clean water in space &mdash; on the space station, 93% of all water is recycled. (Water still remains a scarce resource in space, and showers are out of the question. Pass the wet wipes&hellip;.)</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The space station is providing data for one of our most urgent needs, to limit climate change. The remote sensing tools onboard the ISS observe Earth in ways that can only be done from space.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The astronauts themselves are targets of research.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Two of the many tools for observing Earth include ECOSTRESS (Ecosystem Spaceborne Thermal Radiometer Experiment on Space Station), which records the temperature of plants on Earth and their water usage, and GEDI (Global Ecosystem Dynamics Investigation), which measures the extent of tropical and temperate forests. GEDI can map and track tree canopies to help determine their carbon storage &mdash; and what is lost from deforestation or gained when new trees are planted.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">(Space scientists are rather good as well at creating acronyms used to name these instruments.)</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Other devices on the space station check the carbon dioxide distribution on Earth. They provided fascinating data during the early stages of COVID-19, when emissions on the planet dipped dramatically.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The health of our upper atmosphere, which protects life on our planet from the more hazardous properties of the Sun&rsquo;s radiation, is monitored from the ISS.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The astronauts themselves are objects of research that helps us understand what living in space does to the human body. It may sound obvious, but as a species we have evolved to live within Earth&rsquo;s gravity. Microgravity, the minimal force in low Earth orbit, has negative effects on our bodies in similar ways to ageing. These effects include degenerative diseases caused by loss of bone mass. Up to 40% of muscle is also lost during several months in space.</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Knowledge gained from space is bringing benefits to those on Earth.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">To maintain their health, the astronauts must exercise more than two hours every day, but they still can take months to readjust to gravity when they return to Earth after their six-month missions. On their return, astronauts find that even maintaining balance and standing up can be difficult.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Once back on Earth, astronauts can suffer sight problems caused by increased cranial pressure in space. They are subjected to greater doses of radiation &mdash; never good for humans &mdash; because while in space, as they live and work outside of protective shelter of Earth&rsquo;s atmosphere. Nobody said being an astronaut was easy.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">So what does this mean for deep space missions?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">A trip to Mars will take at least eight months each way, not including the time on the red planet, which means the journey could be crippling for humans unless these studies can provide answers. Meanwhile, knowledge gained is helping older people combat bone loss that can lead to osteoporosis.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">None of the challenges have deterred Rubins. The U.S.&nbsp;National Aeronautics and Space Administration has&nbsp;announced that Rubins is a member of the team of astronauts who will return to the Moon later in the decade. And their first task will be to establish a research base, a lunar home for more extraordinary science.</span></p>',
                'publication_date' =>'2021-02-02',
                'link' => 'kaq4hF6GaRpnkNHt',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' =>'Listen: How is COVID-19 affecting youth climate activism?',
                'image' =>'/images/news/24.jpg',
                'description' => 'In our latest podcast episode, two students at Thacher School in California examine how COVID-19 is affecting youth climate change activism.',
                'full_description' =>'<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The&nbsp;coronavirus pandemic has forced many young people around the world to stay home. So how is COVID-19&nbsp;affecting young activists&rsquo; efforts to combat climate change?</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">That&rsquo;s the question that two students at&nbsp;The Thacher School&nbsp;in California&nbsp;&mdash;&nbsp;Skye Neulight and Saga Leslie&nbsp;&mdash; examine in this episode of News Decoder&rsquo;s podcast,&nbsp;<em>The Kids Are Alright</em>.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Neulight and Leslie, in their last year at the high school, interview two climate activists&nbsp;&mdash;&nbsp;Claire Donahue, also in her last year at Sequoyah School in Pasadena, and&nbsp;Sophie Arce, a graduate of the University of California Berkley and head of communications for&nbsp;Extinction Rebellion Ojai.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Arce acknowledges that the pandemic, by restricting people&rsquo;s movements, has made it more difficult for activists combating climate change to connect with one another.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;I think that has a really high emotional impact,&rdquo; Arce says.&nbsp;&ldquo;It has been hard for people to be as connected. I&rsquo;ve noticed that people aren&rsquo;t as responsive to the virtual events.&rdquo;</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Youth climate activism has moved online.</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Activists have had to move online for virtual strikes and rallies. &ldquo;There is a new challenge to make sure that virtual events aren&rsquo;t just something for show and that they really are making an impactful contribution to fighting climate change,&rdquo; Arce says.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Both Arce and Donahue say online educational resources have helped nurture the climate change movement, and activists are finding innovative ways to protest and engage communities.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Donahue,&nbsp;the hub coordinator for&nbsp;Sunrise LA Youth, a movement of young people under 35 who are lobbying&nbsp;policymakers, cites an attempted &ldquo;virtual takeover&rdquo; of the office of California Senator Diane Feinstein by activists who bombarded the Democratic lawmaker&rsquo;s office with email and phone calls.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The goal was to press Feinstein to support the Green New Deal,&nbsp;a proposed package of U.S. legislation that aims to address climate change and economic inequality.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;We&rsquo;re not ready to just play by the rules anymore,&rdquo; Donahue says, explaining that Sunrise advocates social disobedience. &ldquo;We&rsquo;re going to disrupt, and that was the idea of the office takeover. We have to disrupt business as usual and really change the narrative because they&rsquo;re not listening.&rdquo;</span></p>

<h3 style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Will activists be even more committed after COVID-19?</span></h3>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">Donahue hopes that when the pandemic wanes and life begins to get back to normal, activists will have renewed energy to&nbsp;participate and appreciate the opportunity to gather in person.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">&ldquo;What I am hoping is that once things more or less return back to normal, people are going to be able to engage in physical activism, maybe on an even deeper level than before,&rdquo; Donahue says. &ldquo;Maybe they&rsquo;ll appreciate it even more and turn out in bigger numbers because they are just so excited to be there.&rdquo;</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px">The Thacher School is one of 19 News Decoder&nbsp;partner schools&nbsp;in 14 countries. For more work by Thacher students on News Decoder, click&nbsp;here.</span></p>

<p style="margin-left:0px; margin-right:0px; text-align:left"><span style="font-size:16px"><em>The Kids Are Alright</em>&nbsp;is produced with News Decoder partner&nbsp;Podium.me. Charlie Duffield edited this episode.</span></p>',
                'publication_date' =>'2021-02-03',
                'link' => 'BEjnX7mnhevFJe2N',
                'is_main' => false,
                'is_second' => false,
            ],
            [
                'title' =>'Jeff Bezos to step down as Amazon chief executive',
                'image' =>'/images/news/25.jpg',
                'description' => 'Amazon founder Jeff Bezos is to step down as chief executive of the e-commerce giant that he started in his garage nearly 30 years ago.',
                'full_description' => '<div>
<div>
<p>He will become executive chairman, a move he said would give him &quot;time and energy&quot; to focus on his other ventures.</p>
</div>
</div>

<div>
<div>
<p>Mr Bezos, the world&#39;s richest man, will be replaced by Andy Jassy, who currently leads Amazon&#39;s cloud computing business.</p>
</div>
</div>

<div>
<div>
<p>The change will take place in the second half of 2021, the company said.</p>
</div>
</div>

<div>
<div>
<p>&quot;Being the CEO of Amazon is a deep responsibility, and it&#39;s consuming. When you have a responsibility like that, it&#39;s hard to put attention on anything else,&quot; Mr Bezos said in an letter to Amazon staff on Tuesday.</p>
</div>
</div>

<div>
<div>
<p>&quot;As Exec Chair I will stay engaged in important Amazon initiatives but also have the time and energy I need to focus on the Day 1 Fund, the Bezos Earth Fund, Blue Origin, The Washington Post, and my other passions.&quot;</p>
</div>
</div>

<div>
<div>
<p>&quot;I&#39;ve never had more energy, and this isn&#39;t about retiring. I&#39;m super passionate about the impact I think these organizations can have,&quot; he added.</p>
</div>
</div>

<p>&nbsp;</p>',
                'publication_date' => '2021-02-23',
                'link' =>'k3NnwhphSaucYC3E',
                'is_main' => false,
                'is_second' => false,
            ]

        ]);
    }
}
