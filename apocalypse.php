<?php
	include('inc/config.php');
	session_start();

  if(isset($_SESSION['gameID'])){

    $ID = $_SESSION['ID'];
    $gameID = $_SESSION['gameID'];
     
    $GPUpdateSQL =
      "UPDATE game_participants
      SET PlayerActive = 0
      WHERE GameID = '$gameID' AND UserID = '$ID'
      ";

    $result1 = mysqli_query($conn, $GPUpdateSQL) or die(mysqli_error($conn));

    $gamesUpdateSQL =
      "UPDATE games
      SET StorytellerActive = 0,
          Locked = 0
      WHERE ID = '$gameID' AND StorytellerID = '$ID'
      ";

    $result2 = mysqli_query($conn, $gamesUpdateSQL) or die(mysqli_error($conn));
  }
  
    unset($_SESSION['gameID']);
    unset($_SESSION['gameName']);
?>

<!doctype html>
<html lang='en' dir='ltr'>
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<title>First Time?</title>
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    	<link rel="stylesheet" type="text/css" href="css/styles.css" />

      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
  	</head>

	<body class='px-0'>
		<div class="container-fluid black" id='contentWrap'>
  		<?php 
        include('header.php');
      ?>

      <div class="row metal">
        <div class="col">
          <br />
          <br />
          <br />
        </div>
      </div>

      <div class='row' id='start'>
        <div class='col bg-light mx-3 my-3 py-3'>
          <p class='tab'>
            Before we begin, I feel the need to say that I'm no expert.  I'm just another Jack-of-all-Trades no-name survivor who happened to endure The End Of The World As We Know It (TEOTWAWKI).  Given the fact that I've personally witnessed a critical moment in human history and I've been officially “unemployed” for many years now; it seems to me that someone, anyone, should probably try to document the apocalypse and its horrific aftermath...so where should we begin?  I should probably warn you that this is simply a factual, historical overview.  A general summary if you will.  If you want more details, links to the “Short Stories” section will be available soon.
          </p>
          
          <p class='text-center'><u><strong>DECEMBER 23rd 2012: THE MAYAN APOCALYPSE</strong></u></p>
          
          <p class='tab'>
            It all started with an earthquake, no... not just AN earthquake, but THE earthquake.  The one they always said would rend California from the continent and rock Japan.  On this date, fitting to the Mayan Prophecy it finally happened, but noone expected it to just be the catalyst for what came next.  If you look above you will see what the old  Geologists affectionately refer to as "The Ring of Fire".  They call it that not only because its a hotspot for tectonic activity, but also because said activity usually causes volcanic eruptions.  Not only was the west coast ravaged by mother earths epic siezure but it was so violent, so awe-inspiringly powerful, that it not only spawned some of the largest Tsunami's ever recorded in human history but it simultaneously erupted several of our little blue planets supervolcanoes.  The devastation was unparalleled. In an instant Iceland, Hawaii, mainland Japan, and nearly all of the Southeast Asian Archipelagoes went dark.  The west coast of North America, South America, and Mexico was slammed by enormous tidal waves created from the tremors on faults of the ocean floor.  Entire naval fleets, both military and commercial, were either thrown inland like toys or now rest at the bottom of the sea thanks to the undertow and swells.  The nuclear reactors in San Diego and Los Angeles still pour radiation into the Pacific along with the Japanese Fukushima, even to this day. “Fire and Brimstone choked the skies”...The volcanic eruptions consisted of the following:
          </p>

          <ul>
            <li>Katla of Iceland</li>
            <li>Kilauea of Hawaii</li>
            <li>Lake Toba & Taupo of the southeast asian archipelagos</li>
            <li>Yellowstone, Valles & Long Valley Calderas of the US</li>
            <li>Campi Flegrei of Italy</li>
            <li>Aira & Akan Calderas of Japan</li>
          </ul>

          <div class='row'>
            <div class='col-12 col-md-6 py-2'>
              <img src="img/apocalypse/TectonicPlates.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>

            <div class='col-12 col-md-6 py-2'>
              <img src="img/apocalypse/Supervolcanoes.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/supereruption.jpg" class="rounded img-fluid h-100 mx-auto d-block border">              
            </div>
          </div>

          <p class='tab'>
            The weather changes were almost instantaneous.  It has long been speculated that the initial hole in the ozone layer was caused by Mt. Saint Helens eruption in 1980.  With multiple blasts of the same magnitude the results were catastrophic.  The sudden emergence of new warm fronts during the dead of winter caused the polar vortex to lash out.  The Midwest and Northeast turned frigid immediately.  We're talking frostbite within 3-5 minutes here, and many were caught severely underprepared.  The Pacific Northwest, as well as the Southeast experienced one of its rainiest seasons ever recorded, and flooding and landslides were common, causing immense property damage and wiping roadways off the maps.  West Virginia, Oregon and Pennsylvania were hit unquestionably hard.  Not only did many bridges collapse, but the power grid was hammered by the sheer number of downed powerlines from fallen trees.  Everything just south of the freeze line was being pounded by inconceivable amounts of rain.  New York City had several feet of water in the streets and electrical systems were failing left and right.  Brown outs were occuring daily.  New Jersey and Philadelphia got it even worse, with many of their eastern townships being evacuated. It just got more terrible the further south you went for the east coast.  From Norfolk to New Orleans the population of the shores were being forced inland and the eastern half of the Mississippi swelled.  Naturally, at its height in mid january, President Obama declared a “State of Emergency”, and recalled all non-essential overseas personnel to aid in evacuations, perform asset preservation or recovery missions, enact emergency supply logistics, formulate plans for assisting the grid recovery process, and attempt to mitigate the extreme environmental damage that was devastating the continental United States.  “40 days and 40 nights” would have been a mercy.  The rain would not relent.
          </p>

          <p class='text-center'><u><strong>JANUARY 21st 2013: ONE TWENTY ONE / ONE TWO ONE</strong></u></p>

          <p class='tab'>
            A highly orchestrated, syncronized assault on the United States and its allies is the opening manuever for World War III...”The war to end all wars”.  Just after 9 AM EST coordinated cyberwarfare interferes with the majority of key satellites long enough for guided missiles to blast them out of orbit with the initial volley. This effectively crippled global telecommunication and cellular systems, digital currency exchange, and more importantly our advanced warfare systems reliant upon laser designation and GPS.  Simultaneously, the second barrage was a series of Inter-Continental Ballistic Missiles (ICBM's) and Submarine Launched Cruise Missiles (SLCM's) armed with both tactical and strategic nuclear payloads.  Hydrogen warheads (H-Bombs) strike the following targets thanks to the guaranteed failure of our missile defense network:
          </p>

          <div class='row'>
            <div class='col-12 col-md-6'>
              <strong>Domestic Targets:</strong>

              <ul>
                <li>Bangor, Maine</li>
                <li>Boston, Massachusetts</li>
                <li>New York City, New York</li>
                <li>Philadelphia and Pittsburg, Pennsylvania</li>
                <li>Washington DC, District of Columbia</li>
                <li>Baltimore, Maryland</li>
                <li>Norfolk, Virginia</li>
                <li>Charleston, South Carolina</li>
                <li>Jacksonville, Tampa Bay, and Pensacola Florida</li>
                <li>Atlanta, Georgia</li>
                <li>Chicago, Illinois</li>
                <li>Cleveland, Columbus, and Cincinnati Ohio</li>
                <li>Oklahoma City, Oklahoma</li>
                <li>Dallas / Fort Worth, Amarillo, Austin, San Antonio, and Houston Texas</li>
                <li>Colorado Springs and Denver Colorado</li>
                <li>Los Angeles, San Francisco, and San Diego California</li>
              </ul>
            </div>

            <div class='col-12  col-md-6'>
              <strong>Known Foreign Targets:</strong>

              <ul>
                <li>London, Glasgow, and Liverpool England</li>
                <li>Paris and Marseille France</li>
                <li>Berlin, Nuremberg, and Munich Germany</li>
                <li>Madrid, Barcelona, and Valencia Spain</li>
                <li>Rome, Italy</li>
                <li>Jerusalem and Tel-Aviv Israel</li>
              </ul>
            </div>
          </div>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/nukeMap.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            Retaliatory strikes were issued immediately in accordance to the concept of Mutually Assured Destruction (MAD), though as far as the average civilian is concerned their effectiveness is unknown.  Anchorage, Alaska found itself immediately beseiged by Soviet forces.  The Russian military also began advancing into Eastern Europe, and details are sketchy but in the Middle East all hell broke loose before contact was severed.  With most major ports on the eastern seaboard out of commission, invasion imminent for America, Japanese industry demolished, and World War III in full swing for Europe global markets were in a free fall.  Over the course of the next few days the nuclear onslaught continued sporadically for the eastern United States and Texas in an obvious effort to wreak havoc on the American Oil Industry.  The western Appalacian Oil Basin and the majority of Texas was reduced to little more than an ashen wasteland.  With the majority of government leadership, international exchange professionals, and top corporate executives dead or MIA Uncle Sam was effectively beheaded in the first hour.  The once indomitable United States of America was removed as a powerhouse from the global playing field as the opening move.
          </p>

          <p class='tab'>
            The majority of the nuclear Weapons of Mass Destruction (WMD's) were detonated as ground-bursts with a select few as low altitude air-bursts.  The tactic was exceptionally apparent.  Throw as much irradiated debris and ash into the incoming torrential rains, delivering the fallout as a rainout instead and maximizing the concept of “Nuclear Winter”.  Not only would the ashen clouds darken the sky, significantly decreasing ambient temperatures to unprecedented levels but this also ensured that the radioactive particles would sufficiently contaminate both the soil and the ground water.  This would dramatically impede recovery efforts, render water from public sources unconsumable and hinder future crops and thus the jeapordize the survivability of the surviving population.  It would take months to effectively decontaminate these providers of life, and the vast majority of americans had no idea how to cope with either extreme food or water shortages.  A regional “lockdown” was issued for the entirety of the east coast, and instructed the people to take shelter from radioactive rains until an “All Clear” order was declared.
          </p>

          <p class='tab'>
            The shadowy organization that comes into power during a situation such as this is known simply as those in charge of the “Continuance of Government”, hereby referred to as the COG.  Their orders rang out like a gunshot, and the race was on.  The COG was well aware of what would happen next, so their objectives were clear.  Secure critical supplies and installations as quickly as humanly possible.  For those outside the reach of the threat of radiation poisoning, the clock was ticking.  Every “body in uniform” was told to sieze and fortify all airports & airfields, train stations & yards, any remaining docks & harbors, key distribution centers, Federal Reserve buildings & banks, hospitals, military and police facilities. Secondary priority being the dispatch of relief efforts to the blast epicenters.  Tertiary objectives were to collect as much food, fuel, pharmaceuticals, medical supplies, weapons and ammunition. This was both for the war effort and to limit access to potential dissidents during the inevitable riots that were about to ensue.  The COG knew that decades of the prison industrial complex, mass incarceration, government corruption, police brutality, failures in prior disaster response, a complete lack of any sort of civil defense strategy, and a long history of racist bigotry, spanning multiple generations were about to have severe consequences.  They bought themselves as much time as possible by refusing to address the public until 5 PM no matter the timezone.  Remember that the internet was down and this is late January, the sun sets early.  After the State of the Union the inescapable panic set in and people took to the streets, but riot response didn't give a damn about public safety or property damage.  The only concern was to acquire as much essential supplies as possible, primarily firearms, fuel and food and then prevent the fires from spreading.  Building preservation was of no concern, only containment.  As long as you didn't advance on a location that they were “extracting” from, they didn't budge.  For the most part they let the looters take whatever they wanted until objectives were nearly complete and they decided enough was enough. Eventually they kettled everyone up and then blasted them with ice cold water from firehoses, in January, and let them walk home or simply executed them in cold blood depending on the region or circumstances.  They needed all hands on deck for supply acquisition and inventory management, not central booking.  From that day forward a new political rift was present.  The days of Republican vs. Democrat, Left vs. Right were long gone. The age of Anarchys “Survival of the Fittest” vs. Orders “Strength in Numbers” new discourse had only just begun.
          </p>

          <p class='text-center'><u><strong>NUCLEAR WINTER 2012: NUKE DUB</strong></u></p>

          <p class='tab'>
            For most of the midwest it was just an exceptionally frigid winter following 121, panic kept most indoors.  For those that found themselves within range of the freezing rains, it was devastating.  Residents were instructed to move to the iterior of their buildings and turn off their central heating following protocol for fallout, with the idea being is your heating or AC can pull ash and dust in from the outside.  It was better to be safe than sorry.  It was absolutely miserable and many of the sick, elderly, and exceptionally young died without access to necessary medications.  The groundwater was being contaminated so you could not drink from any public water source, rationing safe water was of the utmost importance.  As the heavy rains continued, more and more people found themselves without power thanks to fallen trees in the power lines.  Huddled up in the dark, trying not to freeze, desperately thirsty.  All creature comforts vanished.  The radiation falling from the sky was almost certainly negligible after the first week, but with no civil defense strategy in place, uncertainty held back the “All Clear” just to be sure.  The COG made good use of this time, securing all the supplies and facilities described previously but without the race against the public.  The lockdown lasted two weeks, then the refugees began to pour into their nearest metropolitan area during the blistering cold, sleet, and hail.
          </p>

          <p class='tab'>
            First, all the hotels that still had power filled up.  Then the large public facilities like indoor sports stadiums, convention centers, museums and libraries.  Churches opened their doors.  Classes were cancelled indefinitely, so college campuses, public and private schools were next.  The volume was intense, large corporate office buildings were came afterwards.  Bus stations, freight centers, train depots and the airports were off limits, so warehouses and non-critical government facilities like DMV's,  Employment Commissions, and Public Outreach Centers were the last on the list.  Those who had the means often found themselves sleeping in their cars.  Parking decks quickly turned into makeshift nomad camps.  Any buildings damaged during the previous riots were cleared out and turned into housing.  Anywhere that still had power put on a show of force in order to keep people calm, cops and national guard worked round the clock to prevent rioting.  Even though cellular coverage was down, radios still worked so they managed their goals fairly efficiently.  All gasoline was collected and moved to highly defensible and isolated positions held by the military.  Fueling centers were mostly places with large parking lots and pumps away from the store.  Think Sams Club, Kroger Gas, trucking stations, places like that.  Nice and open, plenty of space for fuel trucks to be stationed, clear lines of sight.  Leaving gas at the little corner store Citgo or 711 just wasnt going to cut it.  They wanted control of this resource, and to remove accelerants from the area of operation if things got ugly.  Extensive disaster relief efforts swept the nation to aid those who just lost everything.  Food drives, clothing and blanket donations, you know the drill.  Freight poured into the cities.  Private business remained closed for the most part aside from grocery stores which were heavily patrolled and protected, restaurants and bars who figured they could make a killing off the influx of people, hardware stores selling space heaters and generators and such, and of course everyone trying to sell disaster preparedness and relief gear.  Digital exchange was down for the count, so cash was king.  For locals it was pretty much business as usual in the city centers with a new focus on critical aid for the needy.  This was just the calm before the storm. Around Valentines day, all hell broke loose.
          </p>

          <p class='tab'>
            You see after the radiation stopped raining down on us but before the all clear was given, it was open season for every KGB operative, terrorist sleeper cell, Russian Mafia member, infiltration expert and Soldier of Fortune within the continental US.   While everything east of the Rockies was bunkered down from the cold or the rainouts they were busy assassinating every supreme court justice, senator, surviving congressman, governor, and critical government official they could find.  Then they were told to gather supplies from the countryside, go dark, and wait until conditions were ripe in the soon to be massively overpopulated urban areas. Once they received their green light, they were to sow chaos and fear.  The idea was that if they incited enough riots and spread fire and anarchy amongst the last remaining bastions of organization they could mask their true objectives of establishing a swift and brutal guerrilla warfare campaign inland while their military pushed towards their own objectives.  Combat ready troops were being funneled into British Columbia to bolster defense and prepare for invasion, fierce fighting was already occuring to take Juneau, and the vast majority of their supplies was moving through these exchange hubs.  They wanted to tear us apart from the inside out, have those “guns behind every blade of grass” turn against each other, and keep the population divided and afraid.  I hate to say it, but it worked in spades.  The “Age of Anarchy” was upon us with the Valentines Day Riots, and the outcome was grim for those who saw the wisdom in the Order for Survival camp of the new political schism.  Once the chaos was in full swing, the sleepers concentrated on a massive jailbreak campaign over the course of the next few weeks to ensure the worst of the worst were free to wreak havoc in their homeland while they harrassed supply lines and snatched up necessary assets.  This also served as a sound recruitment strategy to bolster their ranks for the upcoming hit-and-run offensive.  The penetentiaries were hard targets, but local detention centers were easy pickings.
          </p>

          <p class='text-center'><u><strong>SPRING 2013: MARTIAL LAW & "THE MATTIS INITIATIVE"</strong></u></p>

          <p class='tab'>
            After a couple of weeks, the Anarchists and criminal elements were either dead, in jail, or forced to flee from the city centers.  Their wanton destruction forced even more refugees into the now ravaged metropolis' as they fled the carnage being pushed outwards.  Ebbs and flows.  Regional military bases did everything in their power to stem the disarray but without cellular coverage to call for help, they were operating with limited intel.  The urban centers were now heavily patrolled and fortified, if you thought america was a police state before you hadn't seen anything yet.  All fuel sales ceased immediately, if you remained in the metropolitan area you were now trapped there.  Everything inside the immediate vicinity of them was locked down tight, the civilian population effectively cowed and terrified.  On the east coast everyone was taught how to distill water to remove irradiated particles.  The tension was palpable.  Then on the Ides of March, the now secretary of defense James “Mad Dog” Mattis addressed the nation.  I can't remember what he said word for word, but I do remember the general gist of what he told us.
          </p>

          <p class='tab'>
            In his opening statement, he declared that for the first time since the Civil War, nationwide “Martial Law” had been invoked.  This placed him in charge of the COG.  He told us that he was no politician, and was well aware of the irony in that statement because he had no delusions about the position he currently held.  He said that after careful consideration and a heavy heart he authorized the use of our remaining nuclear arsenal to strike both Anchorage and Juneau shortly after issuing a full retreat.  He told us that the Red's seemed convinced that we would not use WMD's on our own soil, and so they were fortifying their positions there with their most advanced weapons of war.  He said he bought us some time, but the Battle for British Columbia would be inherently vicious with their new objectives to seize the shipyards of Vancouver and Seattle.  He said we would be definitely be prepared this time.  Then he did something I had never seen in my near 30 years on this planet.  He leveled with us, full transparency, no punches pulled.
          </p>

          <p class='tab'>
            Apparently since the start of the war to end all wars, the COG knew that fuel would be a major issue with the refineries and reserves of Texas being glassed by WMD's.  With the Russian advance in Alaska, the pipelines there were compromised.  Severe weather and the major harbors obliterated in the Gulf of Mexico and the eastern seaboard meant that imports from Brazil and Venezuela would prove difficult, but not impossible.  With WWIII raging overseas, relief from NATO and our allies was slim to nil.  Canada could still supply us, and they were the third largest crude oil producer in the world so that was the only thing going for us.  The COG knew that in order to recover from the initial attack, we had to bring our “On Demand” freight system back online as soon as possible.  They reached out to the Saudi's and Iran, seeing as they were not directly involved in the current conflict, but were stonewalled immediately.  Their claim was that they would sell fuel to anyone who could afford it but as it sits the American Dollar was “unstable” and thus unacceptable as form of payment.  The next step was to hold talks with Brazil in order to fill the void the Saudi's left us.  Again, same story.  There would be no aid for America in the near future.  Thats when the puzzle started to come together for the COG, and now this career military man had to deliver the news.
          </p>

          <p class='tab'>
            We had long known that the BRIC: thats Brazil, Russia, India, and China; had sought to replace the dollar as the cornerstone of international exchange.  This was particularly true after the financial crash of 2008.  This war was just business as usual for those greedy few in power.  With Japan's technological prowess removed, and then the opportunity to fell another superpower presented itself they saw their chance and took it.  China and India orchestrated the initial cyber attack, and then shot down the satellites they couldn't gain control of.  It was surprisingly easy for them to throw our communication systems in disarray as the chinese made a lot of the hardware used, and India had been running tech support for over a decade.  China would then help keep the Russian war engine supplied, and kick their manufacturing and agriculture centers into overdrive to “relieve” the recently conquered and bring them to heel.  India was prepared to take control of the digital markets and international financial exchange.  Russia had the might to make it happen if they could seize the oil fields in Canada and keep Europe on the defense.  The Saudi's, Iran, and Brazil would simply have to sit pretty and ensure that the supply of crude to the US was disrupted, and within a few years the world would be theirs.  With the anticipated climate change, Russia and Canada would be incredibly fertile landscapes in approximately a decade or two.  Power would shift, and they would be the four that enjoyed the harvest.  They just had to be the four horsemen now...so thats exactly what they did.
          </p>

          <p class='tab'>
            Mattis then released an audible sigh.  He declared the primary objective was to ensure that we could hold the Canadian oil fields in order to fuel our own war machines and bolster logistics for the relief effort.  He said this would be tricky as most of Canada imported its food from other nations until fall harvest, which made the secondary objective to reclaim the heartland and ramp up agricultural production as quickly as possible.  His first executive order was to make use of the long stagnate and underutilized prison system.  Anyone who had prior military service or could pass the physical was to be conscripted immediately.  The remainder of the offenders would serve the rest of their sentence as farm labor once the surrounding areas of the penetentiaries was converted to this purpose.  That these goals would be an uphill battle and we had to make the most of what we had available to us.  Adapt and overcome.  He expressed that even now, after so much devastation, the Russians didn't dare take us on in a stand up fight.  The cowards were clearly going to just push east in order to capture the oil, and then try to choke us out before they moved in and mopped up any resistance.  That Vancouver and Seattle would be the primary forward operation centers to harass our armed forces while they accomplished this goal.  The Battle for British Columbia would set the stage, and it was imperative that we come out on top.
          </p>

          <p class='tab'>
            He then paused for a long time, carefully considering his words.  He told us that since mother earths violent outlash at its human population, the civilian death toll is estimated at well over a billion and counting.  Thats a billion with a “B”.  That centuries of human greed and selfishness is what had brought us to this crucial moment, and that in spite of it all we currently had a unique opportunity to change the course of human history.  With the majority of the greedy, corrupt politicians on our side of the fence dead or missing we had a real chance of righting the wrongs we ourselves had committed in the past.  It's no secret that despite of our grand ideals, the United States had a long and troubling foundation on which these concepts were built.  He again iterated that he was no politician, that he had been a marine since his 18th birthday and he was in his 60's now.  Claimed that he had been studying history his entire adult life, and the story is always the same no matter where you go.  He knows exactly how cruel the world has been to its people, and that we were no different in that aspect than anywhere else.  He declared that he had been helping impoverished marines, who would never have enlisted if not for the benefits, find their footing in the apathetic “business as usual” world for a long, long time.  As it stands, our dollar is worthless anywhere other than here which means money is no longer an object.  We have the chance, possibly our only chance, to change the way we operate now by putting people and resources above profit and prevent this level of carnage from ever happening again.  This blatant disregard for life on the quest for power was pure evil, plain and simple.  It would be incredibly difficult, but he and his brave men and women were willing to fight to the last man to give us this opportunity.  He damn sure wasn't going to surrender and let Russia and China play good cop, bad cop with us until the next time they decide to do this to one another!  This was where humanity had to draw the line.  You could hear people clapping in the conference room.
          </p>

          <p class='tab'>
            If you have the means, I highly recommend that you pack your essentials and move to the nearest metropolitan area.  These are the only places that will receive freight shipments for the indeterminable future.  Your small town grocery story will no longer be stocked.  If you are stuck in the countryside, you need to band together, secure as many resources as possible, live off the land, and restore order by any means necessary.  Frontier law is now in effect, if anyone comes to threaten your way of life or steal from you do not hesitate to put a bullet in them.  No questions asked.  It may take some time but I assure you the cavalry is coming, though unfortunately there is a lot to tackle in the coming weeks.  If you see anything suspicious try to simply observe and document it, our troops will handle the rest when they arrive.  Consolidate your supplies, keep in constant contact with one another, and work together until that day comes.   For those of you in the metros, you should also fan out and collect essentials and people from the local suburbs.  Every american citizen, foreign national, and anyone within our borders at this moment, I can make you this promise.  If you enlist today, I can personally guarantee that you and your family will have food, water, and shelter.  Electricity and showers will come soon.  Even if you don't think you can pass the physical, believe me we have plenty of work and we will find an MOS to fit your skills.  We need as much help as we can get!
          </p>

          <p class='tab'>
            His next words were exceptionally pointed, and his voice grew cold and frosty.  He let his inner killer show.  He said that the chaos of criminal activity has severely disrupted the efforts to secure a better future for all people of this nation, from sea to shining sea and potentially the world at large.  That we need as many bodies in uniform as possible to accomplish this goal, and if you felt the need to exact vengeance for past wrongs make sure you do it against the right people.  Most of the ones who enacted and enforced the policies that made you suffer so terribly were already dead.  If you are not willing to spill blood for a better tomorrow, at least cease and desist so those that possess the courage can do so on your behalf.  From here on out, any violent offender is considered an enemy of the state and thus a domestic combatant and will be dealt with accordingly.  There will be no trial, no judge, no jury.  If captured you are hereby a prisoner of war, and he would make sure that the rest of your days are spent repaying your debt to society in the most horrendous conditions imaginable.  This is your first and final warning.  If you find you have a knack for criminal enterprise, we can put you to work against the Bratva.  Do NOT waste your lives for cheap thrills and small, selfish ambitions.  We must become united against our true enemies, the exceptionally greedy “Men of Always” as Escobar put it.  For those of you Vory v Zakone's that are listening to this broadcast, he just had one thing to say.  Run.  You made a most grievous error in following your orders to clean out the rest of our cabinet.  Now you have me to deal with, and I'm hungry for one thing only...your blood.  I promise you that I am coming to get my fill, you can expect no mercy, you will receive no quarter.  Your remaining days on planet Earth are going to be both brief and full of excitement.  Now I can't speak for everyone, but I know I fucking believed him.  
          </p>

          <p class='tab'>
            Within days police and military recruitment swelled.  The Youth Corps was established and took over the duties of primary education for anyone between 10 – 18 years old.  They were teaching basic survival skills, water purification, home economics, and machine maintenance in addition to the preliminary math, literacy, and science requirements.  Everything else was forfeit.  Any corporate restaurants still intact were transformed into 24/7 food preparation and soup kitchens for the refugees and to stockpile for the war effort.  The good news was that we were no longer shipping foreign aid out of our borders.  The bad news is that most of the crops coming in were soy that first year, and theres only so much edamame you could stand.  Neighborhood watch leaders were appointed block by block.  New recruits would perform their daily PT in the open, weapons ready.  Their daily marches and runs were along the major thoroughfares of the concrete jungle.  There was still no cellular coverage, but response to gunfire was almost immediate by the nearest unit in earshot.  No knock raids were performed regularly against any known dwindling criminal operatives.  Power crews worked round the clock to restore the grid, and were provided with armed escorts.  The name of the game was securing the cities once and for all, with the riots still fresh in mind.  Anywhere outside of this were dubbed the “Badlands” or the “Outlands” where chaos still reigned supreme.  No matter where you were, the old addage “think global, act local” had a whole new meaning and the public localized its focus.
          </p>

          <p class='text-center'><u><strong>SPRING 2013: TORNADO ALLEYS EXPANSION TO CYCLONE BOULEVARD</strong></u></p>

          <p class='tab'>
            You have heard of “Tornado Alley” in the heartland of the continental US right?  While the elements of earth and water were the primary catalysts for the extreme changes taking place, wind got its turn to  punish mother earth's children in late spring.  Rising temperatures created significant dry warm fronts in the midwest, and when it collided with the storm surges in the east the heavens opened up their wrath.  Tornado alley rapidly expanded to evolve into Cyclone boulevard.  From Dallas to Oklahoma City, on to Wichita Kansas and then Lincoln and Omaha Nebraska the twisters wrought their destruction.  With Dallas and OKC still irradiated, the contamination spread with it even detrimented as it was. What little remaining freight moving through the area was thrown asunder like rag dolls during an environmental temper tantrum.   Massive hail storms rained like buckshot against the structures and vehicles along their path.  Dozens upon dozens of tornadoes tore the land apart by late April.
          </p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/cycloneBlvd.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            The livestock and farmlands were heavily damaged or destroyed, several interstates and railways uprooted from the earth.  Urban death tolls and property damage reached unprecedented levels, never before seen on such a scale.  Murphy's law marched stoicly forward, greatly reducing any chance of a swift recovery and yet again the displaced population bolstered the scores of homeless now flooding into the city centers across the country.  The gap between the surviving haves and the have-nots was quickly becoming a insurmountable chasm, hopes beyond bleak.  The United States of America was paying an enormous toll for its role as a superpower in the old world.
          </p>

          <p class='text-center'><u><strong>SUMMER 2013: THE FIRST WAVE</strong></u></p>

          <p class='tab'>
            By early May the rains had ceased entirely and it grew incredibly hot and dry for the duration of the summer.  Water shortages were a serious problem.  The power grid restoration continued to creep outward from the downtown areas of the cities of order.  The Battle for BC was raging but reports for the civilian population were almost non-existant.  The chaos in the Outlands was much the same.  Guerrilla warfare from the Sleepers was often and awful, it seemed that they were doing everything they could to intimidate and terrorize the small and medium sized towns in order to keep them on defense while they ran sabotage on agricultural infrastructure.  The irrigation systems, heavy machinery, and harvesting equipment and processing centers were the target.  They were doing everything in their power to ensure we would end up too hungry to fight once our already processed reserves ran out.  The nomadic bandit gangs and highwaymen were making things easy for them by robbing their local supply depots and killing indiscriminately.  
          </p>

          <p class='tab'>
            In mid June the first wave of new recruits finished basic training, and were deployed to the nearest surrounding counties to regain control and further reinforce the sanctuary of the metropolitan hubs.  This also meant more refugees, and thus labor for the city centers.  After some fearsome engagements the bandits had to wise up quickly.  Their days of just rolling in force, guns blazing were suddenly challenged by better equipped and disciplined fighters.  They began learning guerrilla tactics as well, keeping their heads down until they were ready to strike, hiding out in derelict buildings or taking holdout homes and their occupants hostage, or simply going nomadic altogether.  The lack of fuel to feed their appetites slowly began to quell their bloodlust.  Grab and hold, reinforce and fan out. Things were actually starting to look up for the law abiding.  The burgeoning police force began reducing their reliance on patrol vehicles, and reinstated the concept of the “Beat Cop”.  They would travel on foot in squads of three to five, and actively serve as a real deterrent force rather than just hiding out and issuing speeding tickets solo like the old days.  The fact that the radio was unaffected by everything that happened so far was what made all of this possible.
          </p>

          <p class='tab'>
            Independence day was the quietest one I had ever experienced.  No private party dared launch fireworks of their own, after growing so used to relying on listening for gunshots.  It was still a massive party for most, and the military decided that launching fireworks from the largest rooftops to let everyone see things were on the uptick would be huge for morale.  The sleepers and bandits undoubtably took advantage of this in some areas, but where I was it was nice to have some semblence of normalcy, even if only for a moment.  Word around the campfire is that in Las Vegas this enabled some of the old world criminals to mask massive gun battles, using the confusion to make the most of the time afforded to them.  I've heard a lot of rumors that the sleepers used this national past time to hit some of the more hardened targets like the airports or train stations as well.  I can't say for certain what happened elsewhere, but all I know is that for the first time in a long time people seemed to be able to break a smile.  It was a good day for most.
          </p>

          <p class='text-center'><u><strong>JULY 14th 2013: HELL'S GATE & THE FIREWALKERS</strong></u></p>

          <p class='tab'>
            Mid July California caught fire.  Enormous fires spanning miles and miles.  It finally looked like it was going to rain during one of the hottest summers of Californian history.  People were well aware of fire season.  Clouds were on the horizon, big puffy white ones that got a little wispy once they rolled into the hills.  It really looked like it would finally rain, but it didn't.  Instead heat lightning struck all over the place, and the flames roared to life. We're talking about all of:
          </p>

          <ul>
            <li>The Redwood Forest</li>
            <li>Mendocino</li>
            <li>Shasta-Trinity</li>
            <li>Klamath</li>
            <li>Six Rivers</li>
            <li>Lassen</li>
            <li>Northern California. Period.</li>
          </ul>

          <p class='tab'>
            It was the fire to end all fires. With the entire surviving airforce heavily engaged in British Columbia (BC) this was the worst possible thing that could happen to the west coast at this pivotal moment in the recovery effort.  Nuclear Winter for the east coast fortunately meant El Nino for the west, so the rivers were running heavy. The lakes and dams were full.  With LA and San Francisco simply a mass grave after getting rocked by the worst earthquake in human history, and then shortly after being targeted by H-bombs the COG knew water was the unquestionable the “Giver of life” and that the east would get contaminated.  They prepared for this scenario long ago with insane “if -> then” logic chains with early AI and supercomputers.  The nuclear response for California was to divert water to be collected and stored elsewhere for this exact reason.  Lady Luck smiled on California with the fallout from the bombs being pushed WSW and back out to sea.  Redding, Lake Oroville, and Sacramento were cups overflowing with water and had already begun setting up industry to bottle it for the relief effort.  Parts were only showing up piecemeal though, and progress was slow.  The simulator actually expected the bombs themselves to ignite a lot more of an inferno than what ended up happening thanks to the winds being so high.  Now its almost universally accepted theory that the massive heat surge and pressure change from the East Coast (EC) epicenters had “unique” effects on weather patterns.  Too bad all of our satellites were shot down.
          </p>

          <p class='tab'>
            A heavy El Nino over the remainder of Nuke Dub did cause significant landslides statewide, but it was all primarily personal property damage.  Victims were just another refugee, join the line.  The power loss was severe in some areas but critical infrastructure was never actually threatened.  The sleepers had attempted to deploy a chemical weapon at Oroville shortly after 121, but failed.  Thank you surviving COG Central Intelligence!  First order of business (since orbital surveillance is a big negative) was fire mapping.  No problem, we had done it this way before.  Ground lines were still up, communication was possible just nowhere near as efficient. Send out the call, the few aircraft not deployed to BC get to check it out.  This is where we learned that anyone with private aircraft was either enlisted, or had it purchased in cash.  There were no exceptions, you either signed up, took a generous cash offer, or would be imprisoned as a traitor.  It was that simple all across the country.  Everyone was happy to comply, and those that wouldn't be had plenty of time to use it to GTFO anyway.  That was a major reason COG locked down the airports and airfields.  In modern warfare, the skies are key.  The spark was lit, let the race begin!
          </p>

          <p class='tab'>
            Now this is where the final element of fire got its turn to wreak havoc on the american public, and it was a most dismal failure of foresight that it was an “undeclared variable” for the people of the west coast.  The summer was scorching hot for northern california, were talking 118 plus often.  Before the blaze, the record high was set at 128 degrees in Redding and .  Much like the frostbite in the midwest during Nuke W, you couldn't be outside for very long.  The thing was, unlike usual, that there was always a breeze to keep the parking lots from turning into frying pans.  Some days it was unbearable, it was always uncomfortable, but when the wind picked up it was nothing they weren't used to.  The winds would start slow, gradually build up until it could knock your hat off, and then casually taper off.  When the heat lightning touched down around 11 AM, the winds were in a lull, but last gust was headed SSW at a steady 10 mph.  Eyes in the sky scrambled, though very few and far between.  Under the “Mattis Initiative” prison fire response was assembled within the hour.  New recruits for the COG fire dept, no matter how much training, and their senior instructers were ready.  The COG knew it was only a matter of time, which is exactly why they were so lenient with their rioters on 121.  Go time kiddos, time to shine.
          </p>

          <p class='text-center'><u><strong>INTERMISSION: A BRIEF OVERVIEW OF WEST COAST ORGANIZED CRIME POST 121</strong></u></p>

          <p class='tab'>
            First you have to understand that California has always had a significant underworld, and they had been making the most of the “Can't call for help” issue for months now.  They had a very real opportunity to carve out entire regions of the state, snatch up insane amounts of cash, and then play “white knight” if the whole state fell into true anarchy.  Which by the way, they were actively balancing.  Trafficking was all but unchecked with everyone focused on the refugees, the Black Market was thriving!  Panicked people unsure of whats next were buying every substance under the sun to help them cope, they were buying guns and really weren't picky, they were spending their loot like any day could be their last.  Hell there was even a commerce swell just for alcohol.  With no phones, the market manipulators had free roam.  The Bratva releasing a lot of their recent losses in the local jails was a great gift to the criminal underworld.  An invitation to participate in the truly free market.  They told everyone they freed as much.  That there was no need to fight amongst ourselves anymore, and that the public was free game and good hunting!  I'm sure there were some old grudges that met their inevitable end, but an open season on California was an amazing opportunity as far as they were concerned.  After LA, San Diego, and San Fran fell this was an amazing chance to climb the syndicate ladder incredibly fast after the fall of their own leadership.  The Russian Mob had their own objectives, and said they would stand aside for the most part.  The competition wasted no time diving headfirst into the money pool.  With the gun grab long over, the players in this match were:
          </p>

          <ul>
            <li><strong>The COG –</strong> Already working overtime, had most of the goods, seemed content to just hold whatever they had</li>
            <li><strong>The Holdouts –</strong> The armed citizens with the means to defend themselves remaining on private property</li>
            <li><strong>The Unaffiliated -</strong> Small to medium sized criminals and their loose knit operations</li>
            <li><strong>The Clientelle –</strong> The purchasers, and thus the money flow</li>
            <li><strong>The Unprepared –</strong> Unarmed Civilians</li>
            <li><strong>The Organized –</strong> The big fish with structure, financing, private arsenals, and a mean streak a mile wide</li>
          </ul>

          <p class='tab'>
            Human trafficking was big in the early refugee days, still is now actually.  Sex sells, sometimes unfortunately.  Arms were steady.  Narcotics and marijuana were booming.  Money laundering was on hiatus.  Alcohol came back somehow? And all the cops were in the cities, noone could call anyone, and now some of their surviving criminal operators were released?  Happy fucking Valentine's Day!  While the refugees huddled up in the centers, the cash grab was on everywhere else.  Once they stopped killing each other over the chemical labs and production facilities, armed robbery of the unprepared was all too common.  You could get robbed blind, have everything in your house smashed or stolen, and then they load up your car and leave.  This made it easier to hit the unaffiliated, and get their entire score.  Opportunities multiplied as they were seized.  The weed farmers were done a lot like the COG did those with planes.  The hippie types were easily scared off, spend a few days harrassing them with gunfire and they left.  The ones who shot back were left alone, briefly while they moved to the next one they could run off.  Have someone stop their car, a crooked cop if you got one and take all of winter surplus.  Wash, rinse, repeat.  Then come back and buy the ones who would resist with the money you just stole from their friends, saves manpower and they work for you now.  Just like the Romans used to do.  You play outside and grab everything you can and force everybody else from the countryside into the fortified cities.  Before you lay siege you move your markets into it, lay the groundwork for future exchange and gather intelligence.  Now all thats left outside is you, your associates, and your recently procured slave labor and you restore production.  Let the markets grow as panic increases, then you move in to lay siege.  Surround the city.  For smaller cities you can just strong arm the remaining guard and officials into submission, force their surrender.  They are yours now.  For the big, walled cities you make it clear nothing comes in or out without your permission.  Choke them out for as long as possible.  The National Guard (hereby ING's, I for in) and the cops wouldn't dare risk leaving their “walls” to face you head on after hearing what happened to the previous resistance outside.  Their real troops were focused on engaging the enemy in BC.  You squeeze and squeeze, milking finances to feed your own army, and then when you are ready you attack and take over.  Simple in theory, difficult in practice, but it has always proven tried and true.  There was a massive following in the Anarchy camp, a hard line drawn by the “walls” of Order inside the prize cities.  As long as you were pulling profit out of there while you collected everything else there was no reason to risk upsetting the market until you were good and ready.  You can invade according to your own timetable.  The reason I mention this now is because you need to fully comprehend the fact that California, at this point had all of its surviving public in one of a small handful of organized groups.  The population map was as follows:
          </p>

          <ul>
            <li>
              <strong>Order Camp –</strong> Held Redding, everything along I-5, Chico, Santa Rosa & San Jose, Santa Maria & Santa Barbara, Fresno, and Bakersfield.  Military installations were uncontested
            </li>
            <li><strong>Holdout Camp –</strong> Disorganized and dispersed resistance to the criminal advance</li>
            <li><strong>Unprepared Camp –</strong> Scattered and hiding if not already in the Order Camp</li>
            <li>
              <strong>Anarchy Camp –</strong> Active and successful as hell everywhere else.  A few choice murders, frequent shakedowns, and slick bribes made sure everything ran smoothly.  Most of the small town cops were already bought and paid for, even taking a cut on the action in most instances
            </li>
          </ul>

          <p class='text-center'><u><strong>END INTERMISSION: BACK TO HELL'S GATE - SUMMER 2013</strong></u></p>

          <p class='tab'>
            The aerial fire map established what I already told you, all of northern california forests had small fires at the moment but they were spreading rapidly.  Official emergency response slammed into gear.  Sacramento crews flooded to Mendocino and Redding.  The Sac-Redding Response Team was almost there when the next big gust came.  High winds now rolling WSW, the fire spreads wherever the wind carries it.  The gale subsides.  Teams are moving all along the windy mountain roads trying to establish firelines, perimeters that slow and hopefully stop spread.  Then another burst of wind, everything that had been baking in the sun since El Nino rains ended in early March would catch like dryer lint.  In a few hours its a full fledged complex, racing across the landscape and converging with whatever was already ablaze to the west.  The smoke fills up the sky.  Then another short recedence, the teams know its a bum-rush to establish some sort of perimeter.  The veterans knew exactly how bad this could get.  After several frantic hours the smoke and ash begin to condense into the clouds, I've heard on multiple occasions that everyone familiar with fire season was praying that it would thicken up the sparse clouds and force rain.  Instead, they just added more particles creating more friction, and thus more energy.  This meant more lightning, then more wind and even more lightning.  It was the perfect storm, the thunder the rumble of the gates, as Hell on Earth emerged from its depths. 
          </p>

          <p class='tab'>
            The crews fought valiantly for days against the initial inferno.  Each mapping mission just showed more and more being enveloped by scorched earth.  The fires converging on one another and spreading at an alarming rate.  The wind stopped carrying clouds with them eventually, but never any rain, and they certainly didn't stop.  They only fluctuated.  After a week with almost zero aerial support other than watching everything burn, the call was clear.  Lift the gas ban to evacuate everyone possible and pull back to clear cut unaffected areas.  Only problem was there was zero cell phone coverage, landlines, radio, and messengers were the only way to handle it.  The “Emerald Triangle” was lost.  Those windy mountain roads took a long time to navigate.  The Holdouts and Unprepared resisted some at first, being veterans of fire season and all, but once they understood what was happening they were on board.  The smoke itself was the greatest influence.  They say you had about 6 ft of visibility by the end of it.  The sun was just a tiny drop of blood in the sky.  Gangland CA had other ideas.  They would scoop up everything the Holdouts left behind.  BC airforce sent absolutely nothing to assist.  Fire crews would blast their loudspeakers on their final patrols ”This is a full evacuation now! We're pulling out! We're not going to die here!”.  They desperately tried to convince anyone too stubborn to leave to listen to reason.  Anyone who didn't was swallowed up by hells maw.  Have you ever seen a fire tornado?  Look that one up. Also, refugees.  Get to the Five or the 101!
          </p>

          <p class='tab'>
            The battle for Redding lasted weeks, and all the while Modoc National Forest was being swallowed whole and then Lassen kept pushing south. Meanwhile Trinity spread into and converged with Klamath.  Medford was now threatened, and the Oregonian's race begins.  Mendocino keeps getting blown SSW, stopped only by Clear Lake.  At week 5, Redding roasts.  The ING's were issued one final order before retreating, blow the damn's to flood and effectively save Sacramento.  Evacuation centers consisted of these locations after the Fall of Redding:
          </p>

          <ul>
            <li>Mt. Shasta, California</li>
            <li>Medford to Eugene, Oregon or straight up the 101</li>
            <li>Sacramento, California</li>
            <li>Reno, Nevada</li>
          </ul>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/hellsGate.png" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            But no, it didn't stop there.  Modoc spread to Winema, Lassen to Plumas.  Then the entire Sierra Nevadas burned down to Sequoia at Bakersfield over the next few 30 days.  In southern Oregon, the Winema spread into Umpqua before it finally began to slow.  Nearly all of the agricultural lands in central California were little more than soot.  Eventually the smoke created enough shade from the sun to create cold fronts and thus water vapor.  The rain finally came in the last 10 days of August.  The survivors are called “Firewalkers” because many of them ran out of gas trying to run after being trapped in the hills with no fuel sales.  Running back and forth to get the most people possible, namely those without transportation.  Busses ran non stop from Sac to Redding.  Even still, many did not survive.  People were pushing cars with their own vehicles, creating miniature multiple engine trains.  A lot of people ended up on foot, following the rivers to Sacramento, just a few miles ahead of the blaze.  Medford was badly damaged, but held firm.  Fresno was still alive, though barely.  Bakersfield wasn't that big to begin with.  Remember all that organized crime I mentioned before?  They were holding all the cards, stocked up with guns and product to meet the publics vices, and were filthy rich compared to everyone else coming in. They suddenly found themselves all cozied up together in:
          </p>

          <ul>
            <li>Sacramento, California</li>
            <li>Reno, Nevada</li>
            <li>Las Vegas, Nevada</li>
            <li>Medford, Oregon</li>
            <li>Eugene, Oregon</li>
            <li>Portland, Oregon</li>
            <li>Seattle, Washington</li>
          </ul>

          <p class='tab'>
            It didn't take long for the “Old Families” of Vegas to welcome the displaced underworld into the fray.  The connections to the West Coast network were already established long ago and the bounty was rich at the moment.  It was unfortunate production could not continue, but C'est la Vie.  This is where the new “Anarchy Hubs” took root and will become increasingly important in the next few years.  They would have free run of I-5 and the 101 in the not too distant future, but only after successfully leveraging the return of Habeas Corpus for their regions in exchange for financing the war effort in addition to drawing arms and medical supplies from their South American sister cartels.
          </p>

          <p class='text-center'><u><strong>LATE HURRICANE SEASON 2013: ISLAND EXODUS</strong></u></p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/islandExodus.png" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            While California was being consumed by infernal hellfire, the eastern seaboard was getting ravaged by incessant tropical storms and hurricanes.  The island nations of Cuba, Haiti, and the Bahamas got it the worst.  After getting rocked again by the quakes so soon after their catastrophe in 2010, it became apparent to all but the most deluded of the Haitian people that their nation would never recover.  Their infrastructure was absolutely demolished by the end of July.  The unending deluge that summer forced their hand, and only the exceptionally brave or ridiculously foolish tried to weather the storm.  At first many of the Haitian people tried to just hop the channel and take sanctuary with their Cuban neighbors on their high ground.  What many didn't realize was that the quakes had shook loose much of the old stone, and landslides claimed hundreds of thousands of lives.  Scores of people made their frantic attempt to cross the sea seeking asylum.  Untold numbers of makeshift vessels never made port, and the stories of those that did were the stuff of legend.  The Atlantic's fury was unimaginable, and the vast majority failed miserably in their panicked attempt.  An estimated 20 million people, with two trains of mind, tried their luck against the sea.  Some realized that it would be wiser to head south and try to get clear of the neverending storms path of destruction.  We currently have no idea how many made it to Venezuela or Columbia, but survivors say that the majority of the population seemed to be about equally divided on which way to go. Of the supposed 10 million that set sail to Florida, current estimates state that a little over 6 actually made it.  4 million panicked souls now occupy their watery grave on the sea floor, and thats not counting those who sailed south.  Needless to say, tensions were immensely high and violence was all too common in Florida as everyone decided to make their mad dash inland. 
          </p>

          <p class='text-center'><u><strong>AUGUST 29th 2013: AMERICA ONLINE & THE WATERS OF LIFE</strong></u></p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/americaOnline.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            At the end of August, something incredible happened.  Not only were the majority of the public water systems gurgling back to life, but the COG figured out that they could use the old cell phone towers and existing cable lines connected to wireless routers to establish a wide-area network (WAN) if you bounced the signals off of all connected devices.  Internet connection was still basically worthless, but all the sudden you could make phone calls using google voice in the central hubs!  They were only local for the moment, but they assured us that soon every major city could be connected again.  It was still unbearably hot, groundwater was still contaminated, but you could get a fucking network again!  This was truly a gift and everyone made use of it quickly, for good or ill.  Not long after that, the hubs established Federal Credit Unions to spur the economic engines once more.  Your phone was your wallet, you filled out some forms, took a selfie, set up a new email and text account.  It operated a lot like Paypal in the beginning.  You could transfer to an account referenced by your new email or phone number, and most people even got to keep their old digits.  For private transfer you simply opened the program, it had a send or receive button, the recievers screen would generate an encrypted QR code and the sender would snap a picture.  Cash was still king for a lot of reasons, everyones old money was effectively frozen, but for the first time in a long time you were actually getting paid for your work.  Including back pay!  Finally, slowly but surely we began to tip toe back into the 21st century and it was not a moment too soon.
          </p>

          <p class='text-center'><u><strong>FALL 2013: PRISON REFORM WITH THE MATTIS INITIATIVE</strong></u></p>

          <p class='tab'>
            This is where we learned what was going on in the surviving United States Penetentiary systems.  First and foremost, any suspected big wig's and their underbosses in the organized crime world were relocated for intelligence gathering and interrogation.  Nobody really knows what happened to them.   Next was determining who was useful and likely to comply, and those who would likely resist until the bitter end, even in the face of this new world where america was the underdog.  The revolving door prison system would take far too many resources now that the Badlands had been established, the chaos of the detention centers cut loose was still a major issue.  As far as the Mattis Initiative was concerned, the only option was reform with focus on rehabilitation rather than a punitive methodology.  Those who refused to change would basically remain slave labor.  This was going to be a long, drawn out process.
          </p>

          <p class='tab'>
            Any inmate that had prior military history was welcomed back into the fray, no questions asked.  They were heavily watched and scrutinized by traditioinal military discipline, but in the end most received a healthy re-enlistment bonus.  For them, this was their chance to atone for wherever they went wrong before our most desperate “hour” and were often in charge of training other inmates.  Knowing both military and civilian prison culture put them in a unique position for this role.  Those with a propensity towards violence or rape were conscripted immediately afterwards, and ruled with an iron fist during their training.  They were to serve the remainder of their sentence as the vanguard for the public and particularly the regular troops.  If they performed valiantly, they were guaranteed parole at the end of the war.  They were almost always used to take “Point” in the coming conflict, perpetually the first in the line of fire, but if they paid attention they would survive and have the chance to begin anew.  Mostly they were considered “Disposable Assets”.  Under no circumstances would they serve as peacekeepers or be involved in the reclamation of the Outlands.  They were strictly front line assault operatives,  non-compliance led to summary execution once they got there.  Their commanding officer's were told to separate the whey from the chaff early on.  Most of them were used as diversionary cannon fodder to reduce losses for the regular forces.
          </p>

          <p class='tab'>
            With so many non-violent drug offenders available, it was simply a matter of who could pass the now reasonably lenient physical requirements as the need for manpower was pressing.  Being that they primarily consisted of people who committed victimless crimes, they were treated a little differently.  They were the focus of the rehabilitation effort, promises were made that the COG would contact their next of kin and they would be allowed visitation during their training.  They were second rate only to regular enlistees.  Probation and parole was guaranteed at the end of their first tour for the vast majority, and you would instantly become a regular enlistee enjoying all of the bonuses of those from the civilian population.  The idea was their criminal experience would be useful in both the Badlands and BC.  In the beginning nearly all went to BC first, again as “Disposable Assets” only considerably less likely to be assigned to “Suicide Squads” like the depraved killers and rapists. Those who couldn't pass the physical, washed out of boot camp, or flat out refused were essentially conscripted labor for the farms, railways, and any other grunt work needed regionally.  Much to the bulk of the old corrections officer's dismay, they were suddenly treated as “citizens who made a mistake” and they had the chance to fully redeem themselves at this moment and actively pay their debt to society.  Each inmate was personally assessed by a military officer passing judgement and assigning them accordingly.  This process alone took several weeks, but they worked around the clock.  If you were to be assessed at 3:30 in the morning, so be it.  The particularly unruly were told that they were officially “state property” straight to their face, they had no rights anymore under martial law.  By regulation, even under Habeas Corpus, any felon could be executed immediately.  If they would not cooperate, they would not be fed.  Theres plenty of hungry refugees happy to take their tray.
          </p>

          <p class='tab'>
            The first thing you have to understand here is that they didn't just rally convicts up, divide the prison population, and then put them to work or into basic.  They took a long, long time educating and indoctrinating them.  Recognizing them as an integral part of american history that led up to the shit storm we all had to face now.  They were reinvigorating what it meant to be an American, a nation born of rebellion.  I met a guy that was a young construction worker.  One day he decided he would make a little extra money on the side selling weed and pain pills to his co-workers.  He was just helping them self medicate after job related injuries because “This is America”.  One day one of his clients robbed him, noone got hurt but he decided to carry a gun afterwards.  He gets pulled over on his way to work thanks to a tail light being out and because he was in possession of a firearm while in the possession of narcotics he got 12 years mandatory.  He told me his assessment officer explained to him that he was exactly what they needed, what we were looking for.  He took a calculated gamble, never harmed anyone, but unfortunately got caught and thrown in with all the other riff raff.  Those days were over.  The prison industrial complex was done.  We needed mindful risk takers now more than ever.
          </p>

          <p class='tab'>
            Many of the east coast prisoners thought that being assigned to water scrubbing detail was a veritable death sentence.  They didn't know any better, but the pens held classes on radiation dissipation and assured them that they just had to filter the now negligible contaminated particulate matter from the water supply.  They used the loss we all shared to unify everyone.  They knew the inmates were concerned for their families on the outside.  They made a significant effort to contact them and report their findings back.  They needed the farms and armed forces up and running and at full efficiency and they spared no effort, though definitely not expense, to ensure its success.  It was truly amazing to watch this occur like the flip of a switch.
          </p>

          <p class='text-center'><u><strong>FALL 2013: THE BATTLE FOR BRITISH COLUMBIA</strong></u></p>

          <p class='tab'>
            The fighting to maintain airspace, hold their ground, and make sure the Reds didn't get a port on the west coast was beyond intense.  Our forces were severely outgunned without satellite coverage or guidance for tactical missile systems or the surviving air force.  At first the Canadians weren't much help at all.  They weren't war hardened like our veterans were.  They hadn't learned the hard lessons yet.  Removing Anchorage and Juneau took the spearpoint of the Russian invaders out, but they had plenty of fuel, tech, and advanced weaponry at their disposal whereas we did not.  Period.  If Vancouver or Seattle fell, the floodgates would open and there would be nothing we could do about it afterwards.  The remaining airforce was crucial here.  The prison suicide squads were just as important, the battle for the northern rockies was absolutely heroic, and we were still losing.  Naval support continuously turned the tide in Russian favor.  With another unpredictable winter fast approaching, the ferocity of engagement to gain as much ground as possible for both sides was unparalleled.  Much to the Russians surprise, especially when they clearly had the upper hand, US forces simply refused to retreat.  They would fight to the last man in face of impossible odds and still never surrender.  In a bizarre, reverse kamikaze fashion, we would not quit even when there was no hope of victory.  “Liberty or Death”.  This is where the value of those degenerate violent offenders and conscripted forces came in to play, the real military was fully mobilized behind the shield wall of the damned.  In the end, it was all just to buy time.
          </p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/battle4BC.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            Before winter struck, Highway 16 of the Yellowhead was where the front line was established.  The rationale was simple.  If we didn't hold the advance there then their goal of seizing the oil fields surrounding Edmonton in the east would be realized sooner rather than later.  If we didn't hold them there they could also move south and take Vancouver and Seattle and begin their landfall on American soil.  It was imperative we did not allow either to happen.  An absurd amount of resources and manpower were dispatched to hold that line.  Every available reserve was exhausted to make it so.  But it was hard fought with uncontested russian naval forces battering the coastline and aiding in establishing air superiority for the region.  It was beyond desperate.  The entirety of our joint armed forces and supply chain was committed to this endeavor, and we were still losing.  Still we dug in, and held the line.  Guerrilla warfare and surgical strikes threatened it all, the russian forces were conditioned to the extreme cold while the first snows fell.  Even after significant casualties, Joint Forces held the line and a stalemate hit once those unique weather anomalies began to take shape.
          </p>

          <!--PLACE FALL 2013 WAR MAP HERE-->

          <p class='text-center'><u><strong>WINTER 2013: HOT & COLD</strong></u></p>

          <p class='tab'>
            It was an unusually mild winter for everything south of I-70, with temperatures upwards of 60 degrees until late December.  For everything north of the US Canada border the polar vortex seemed to be bottled up, white outs and blizzards being commonplace.  This brought the war effort to a stand still, much to our benefit.  The loss of California and the majority of midwestern agriculture was crippling to our food supply now that we had to feed the Canadian population as well.  Portions in the cities bread lines and soup kitchens grew meager by the time the cold fronts swept in, and decreased exponentially from there on out.  The COG wasted no opportunity in expanding the power grid ever outward from the Order Hubs, large plots of suburbia were restored.  Heavy rains still hindered progress, but the priority was clear and restoration crews worked round the clock to make it possible.  Infrastructure was still heavily impaired, but progress was certainly being made slowly and steadily.
          </p>

          <p class='tab'>
            When the cold fronts finally broke through, they came in force.  From early January until March the conditions weren't much better than they had been during Nuke W.  With so much of the roadways damaged and then adding snow and ice on top of it, the overburdened freight system struggled to meet public demand.  The surge also caused a lot of freezing rain once again in the southeast, and severe winter conditions in the areas that typically received snowfall.  Terrorist attacks, banditry, and criminal activity spiked once the remaining supplies began to dwindle.  Several Russian generated atrocities occurred on christmas eve in an apparent effort to break american morale even further.  Knives suddenly made a big comeback in the dark alleys of the Order Hubs since the guard were trained to listen for gunfire.  They are small, concealable, and most importantly quiet.  I remember people used to say America would fall in the same fashion as Rome when the time came.  I wonder how many of them could appreciate the irony when they found a blade in their belly over a few coins or scraps of bread to feed the homeless and the hungry.  The WAN phone network helped stifle some of the more brazen acts of theft and violence, but there was a lot that slipped through the cracks of our crumbling foundation of order and control.  For many, it was a long and brutal winter.
          </p>

          <p class='text-center'><u><strong>SPRING 2014: HIGH VOLUME ON CYCLONE BOULEVARD & THE STRUGGLE CONTINUES</strong></u></p>

          <p class='tab'>
            The skies revolted once again in Cyclone Boulevard, although this time the people were a little more prepared.  In the most active areas, the now immobilized populace decided that this seemed to be becoming a pattern and made an exodus the twister's paths of destruction.  Yet more influx of refugees and homeless fled to the already strained city centers or holdout settlements.  I'm sure the Anarchy camps saw a significant increase as well.  In the southeast, the tempest storms drove even more of the remaining communities inland as well.  Try as we might, the climate changes we were facing were terrible and fearsome and without steady supplies or significant relief efforts the only choice for most civilians was to flee.  Rebuilding and recovery simply weren't possible at the moment and only the most hardened or stubborn souls and gangs of anarchists, raiders, and rebels remained on the exterior of the Appalacians to weather the storms.
          </p>

          <p class='tab'>
            The Russian offensive after the cold snap was formidable, the northern forests and plains the stage of the conflict.  Joint allied troops were holding fast, but found themselves severely outgunned and outmatched.  Soviet marines were making landfall all along BC's rocky coastline.  One by one the towns along the 16 from the merge at the 37 began to fall into soviet occupation.  Resistance forces retreated into the wilds, performing guerrilla operations, sabotage, and surgical strikes against their new found conquerors.  This is where the battlefield was established for the duration of the spring, “The Alamo” being Prince George where the 97 met the 16.  In spite of severe losses on both sides, we seemed to be holding back their advance through untold amounts of blood, sweat, adrenaline, and conventional ammunition.  Our air force was being decimated, but our ground forces were still highly operational and effective.  We thought we were doing well enough holding the line, but the fog of war kept us blinded until it was too late.
          </p>

          <p class='tab'>
            Apparently while the fighting was going strong in BC last fall, soviet forces continued making landfall in Alaska.  They then used the confusion to penetrate the northernmost Rocky Mountains, and advance southeast from the Yukon Territories.  It wasn't until the assault on Fort Liard and Nelson that Central Intelligence had any idea that the bulk of their forces weren't already engaged.  Their target was always the oil fields of Alberta, but they had taken a pronged approach and now we found ourselves severely outmanned to deal with a multifaceted offensive.  Air raids began bombarding our armed forces from northeastern BC, while their armor and mobile infantry initiated their blitzkrieg towards Edmonton and the prize crude along the way.  The situation was suddenly beyond grim, but Mattis held true to his word.  He did not surrender, he seemed absolutely prepared to fight to the last man.  Rumor had it he stationed himself at Fort St. John to oversee the defense strategy personally.
          </p>

          <p class='text-center'><u><strong>SPRING 2014: THE SQUATTER'S ENTERPRISE & THE URBAN FARMING INITIATIVE</strong></u></p>

          <p class='tab'>
            Sensing that the feeble grip of maintaining control of the now exhorbitant homeless population was slipping, localized COG decided to try to release some of its burden back into the wild.  One by one, more and more of the Order Hubs communications systems were becoming interconnected.  CCTV surveillance systems and security networks were being integrated at blinding speeds, but criminal activity was still on the rise.  Fuel scarcity led to more and more police and ING units operating on foot patrols in order to maintain supply for the war effort.  Finally, in order to rectify this issue, the COG declared that “Squatter Law” be declared nationwide.  If any citizen can prove that they have held a domicile for 365 days, the property becomes theirs.  This was a godsend to the overcrowded homeless in the FEMA camps and city streets.  Thousands of displaced peoples pushed outwards into the suburbs to stake their claims, and with the COG already having secured most of the critical inventory there was nothing left to lose.
          </p>

          <p class='tab'>
            Simultaneously, to tackle the food issues and relieve some of the weight placed on the logistics engine the COG began its “Urban Farming Initiative”.  Every city park, outdoor stadium or playing field, and undeveloped plot of land was to be turned into a community garden center.  Citizens were encouraged to develop their own personal property for the relief effort as well.  Nearly everyone fell in line with this idea.  Metropolitan gardens could easily be the answer to the drastically dwindling stock of nutritional sustenance.  The scramble for seeds had begun.  Monsanto's greed for market control in selling only sterile seeds was a major concern, but the people knew where there was a will there was always a way.  A hungry america is a dangerous, desperate behemoth and it only made sense to do everything possible to prevent it from being awakened.  Anyone who didn't have gainful employment with the armed services, public utilities, freight or rail systems, telecommunications, or any other concurrent relief effort suddenly had the opportunity to feed themselves considerably more than the slim portions in the feeding centers, and their efforts to realize this objective possessed a fervent zeal.
          </p>

          <p class='tab'>
            In conjunction, ING forces began to patrol the major highways to their nearest holdout towns and settlements along the way, funneling refugees looking for a new start and trade goods along with them.  In many of the larger towns, a skeleton crew remained on site to help train militia forces in the area in hopes of deterring the rampant bandit activity that had been steadily building up.  Any towns along the steadily reconstructed rail lines received the same boon.  Radio relays were being established to aid in the communication effort and help lift the veil of darkness that had been present in the Outlands since 121.  Civilization began to creep outwards, even at a snails pace it was a significant improvement.  Tensions gradually began to subside, and with these ambitious people left in charge of their own defense, police and guard forces were able to begin hunting down the most problematic bandit gangs in their respective regions.  The reclamation exploits were off to a promising start.
          </p>

          <p class='text-center'><u><strong>SUMMER 2014: THE SCAVENGER'S PARADISE, SOUTH AMERICAN CARTELS, AND RESTORING THE RAILROAD</strong></u></p>

          <p class='tab'>
            The newfound farmers both in the Badlands as well as in the Hubs quickly made an entire industry out of scavenging abandoned properties.  The demand for tools for both home repair and soil tilling was enormous.  In the Hubs massive flea markets emerged selling all sorts of foraged goods, from clothing and food to scrap electronics and tools.  The peer to peer digital currency system was jump started by this expansion, and so the intelligence and data engine roared to life.  Cash was still king for most illicit items.  Food, seasonings, and bullets rapidly became the new unofficial currency of the land.  In order to quell the massive underground black market emerging, the COG decided that its Credit Union's branch offices would offer an exchange rate of double digital to paper currency and would pay top dollar for any scavenged firearms or munitions.  Prostitution and gambling run rampant.  Needless to say it didn't take long for corruption to rear its ugly head again within the police force, and shopkeepers frequently found themselves shook down or incarcerated if they refused to pay them “recovery fees”.  Ironically the now profiteering scavenger gangs were also just as happy to demand protection money with additional donations accepted to harass the crooked cops.  Just like that, it was basically “business as usual” all over again.
          </p>

          <p class='tab'>
            The west coast's illegal enterprise had begun to ascend to great heights particularly in Sacramento, Reno, and Las Vegas and word spread fast of the “Criminal Councils” taking over in the region.  It wasn't long before the message travelled south and every major South American, Mexican and Columbian cartel learned that the western US was an open market, ripe for the picking with almost zero rules or regulations and an enormous vice demand for people to self medicate.  Venezuelan and Brazilian gas prices soared, but were still affordable to the organized and structured heirarchy of gangland syndicates. Criminal immigration exploded into Arizona and New Mexico.  Texas and Southern California were avoided like the plague as the radiation was an unknown variable to them, but hundreds if not thousands of underworld operatives moved in to claim their piece of the american pie.
          </p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/railRestore.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            In mid September, the rail system became fully online and expansive from the surviving Hubs on the east coast to the Missouri River and everything just outside of the widening “Tornado Alley”.  With several coal mines still operational this was a milestone achievement for the recovery effort.  As long as the military could keep them intact and free of sabotage the freight system stood a decent chance of healing and replenishing itself.  Railways could carry refined oil from Canada southbound as needed, food and livestock could be hauled from the newly reformed city centers and farmlands, relief supplies could once again pour out of the few remaining production centers.  Commerce could flow anew, though not nearly on the level of excess as it had before.  This was a crucial accomplishment with fuel suffering such a harsh recoil after being taken for granted for so long.
          </p>

          <p class='text-center'><u><strong>FALL 2014: EXCESSIVE DROUGHT & HURRICANE SEASON</strong></u></p>

          <p class='tab'>
            In spite of widespread approval of the Urban Farming Initiative (UFI) Mother Earth yet again had other plans for her suffering children.  Across the nation severe heatwaves and arid conditions all summer long lead to a horrendous drought for the public.  Most of the rookie farming population had no idea how to handle such a problem, and jury rigged irrigation systems were commonplace but yielded little results.  Then at the end of August the hurricanes rolled in, beating the weak and fragile crops down and flooding the earth.  Needless to say amatuer crop yields were especially low, and the burgeoning Outlands suddenly saw enormous swaths of its best and brightest fall into the Anarchy Camp by late October.  Gang warfare between newly established farming communities erupted with an extreme “Do or Die” mentality to stockpile food and supplies for the next harsh winter.  With cellular coverage only available in the most urbanized of the city centers, it was essentially a free for all for those outside of the coverage area.  The ING's were tied up chasing and rooting out the worst of the now nomadic bandits and raiders, and hadn't anticipated this issue from those it considered “friendly”.  Gangs, militias, and neighborhood watch swiftly became synonomous.  Frontier law was truly uninhibited.
          </p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/mississippiTrade.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            The only good news from this period was that excessive storming and floods lead to unusually high waters for the vast majority of the Mississippi River Basin.  Suddenly boating and ferrying upstream proved substantially easier than before, and with the lack of fuel making resupply for the city centers this was a welcome blessing.  Over the course of the next few months a burgeoning riverboat frieght line and transportation system emerged along all major associated rivers tied to the network.  Canoes and Rafts made an impressive and swift comeback by late November as more and more people rushed south to evade the harsh winter months.  St. Loius, Memphis, and especially New Orleans bolstered in both manpower and displaced population during this time, and many made their claim in spite of the intense flooding.  New Orleans found itself doubly burdened with so many of the Holdout evacuees being force flushed from Florida, Cuba, and Haiti.  Criminal desperation and unchecked enterprise rapidly took hold along the Mississippi and its connected estuaries from St. Louis and below, and the National Guard moved quickly to establish a patrol network to secure this forgotten trade circuit.  Amphibious piracy rose as rapidly as the as the ebbs and flows waterways.     
          </p>

          <p class='text-center'><u><strong>WINTER 2014: THE CLASH OF TITANS & STARVATION IN THE FAT OF THE LAND</strong></u></p>

          <p class='tab'>
            In November Prince George fell to the Soviet onslaught and the Seige of Edmonton commenced.  Our armed forces pulled back into the forests of Jasper and Banff National parks to stage counterstrikes and establish new command centers.  Russian forces were hauling ass down the 97 towards Vancouver and our now nearly obliterated air force was powerless to stop them.  Artillery rained hell on the roadways, but their numbers were substantial.  In an unprecedented panic, the draft was immediately reinstated and the recruitment age lowered to 16 with widespread regret for rushing the reclamation of the Badlands.  Female fighters were rapidly shifted into combat roles rather than simply support personnel.  With the primary oil fields of the north challenged we were unquestionably facing our final hour as a “free” nation.  All available manpower, resources, and supplies were shipped to the war front. The non-combat civilians be damned and were left to fend for themselves.
          </p>

          <p class='tab'>
            Amidst the reserved celebrations of New Years in Vancouver and Seattle, a high altitude airburst was detonated above each city simply for the electro magnetic pulse.  By February both cities were heavily occupied by Russian forces and rigorously supplied by the Chinese Navy.  The war had finally spilled over into the american mainland, and irrevocable fear swept the entire nation.  Word around the campfire was that some of the criminal elements in Seattle did their best to curry favor with their new overlords by selling secrets and trying to seed corruption, but they were promptly executed or imprisoned by the soviet military and their assets seized.  The Bratva apparently had a field day torturing and humiliating their former competition there.  This managed to invigorate a newfound sense of patriotism for our own underworld operatives, and black flag exercises have spiked against the Bratva nationwide ever since.  The soviets now controlled two major ports on the west coast, floodgates to supply their forces for their mainland advance while they assert their dominance in Alberta and continue to push east into Saskatchewan.  Resistance operations jolted to life almost immediately, as the COG knew that this day would be unavoidable.  Portland quickly braced for their turn to defend themselves being the next obvious target for the Russian war machine.
          </p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/battle4Ed.png" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            For the first time since the Industrial Revolution america was famished.  Thousands became malnourished, thousands more starved to death.  Pets went missing, people were tricking for food, I've even heard talk of some resorting to cannibalism across the country.  The winter again suffered both extremes, first being exceptionally mild and then followed by extraordinary cold.    Darwinism's “Survival of the Fittest” proved true in the end, and absolute lawlessness surged to reach epic proportions.  Only the Order Hubs and their connected Holdouts remained firm in their purpose, everyone else seemed content to do whatever was necessary to endure another day.  The vast majority of the remaining young, sick, and elderly simply failed in this endeavor.  If you meet anyone older than 70 today, by no means ever underestimate them.  The future of this once great country is now beyond bleak, and those lucky few seniors are either incredibly tough or have powerful friends.  “Or die trying” and “A man's got to eat” suddenly became the mantra of the nation.
          </p>

          <p class='text-center'><u><strong>SPRING 2015: THE HUSTLE FOR HIGH YIELD CROPS & RETURN TO THE EPICENTERS</strong></u></p>

          <p class='tab'>
            With the people rapidly coming to grips with the fact that the COG was clearly unable to meet the publics basic survival needs, self sufficiency was our only chance to persevere.  While Cyclone Boulevard was raging in the mid-west and large corporate office buildings were effectively being turned into climate controlled green houses, the rush to find survivable seeds and root vegetation was underway.  Traditional garden varieties like tomatoes and cucumbers simply weren't going to cut it in most regions anymore, the weather was becoming too unpredictable.  Nearly everyone was hunting for the means to make homemade hoop houses.  The good news was that without constant traffic on the freeways and roads, natures bounty was on the upswing.  Over the course of two years deer proliferated like crazy.  Wild turkeys roamed in impressively large gangs of scavenging fowl.  Scores of wild dogs forged from unchecked breeding amongst the abandoned pets were also common.  Heavy rains were promoting the fish, crab, and sea life by washing away a centuries worth of pollution. Wildlife was rapidly reclaiming the now abandoned and overgrown properties from sea to shining sea.  Life always finds a way.
          </p>

          <p class='tab'>
            With the rail network renovated, gasoline became available to the public again for a flat fee of 100 dollars per gallon though was still highly rationed.  The masses pooled their resources and embarked on their own journeys to stake claims further from the metropolis' than they had even considered since 121.  Some brave few pioneers even began to move in to scavenge and restore the ruins of the targets of that fateful day, now that the radiation had plenty of time to subside.  The goal was self-evident, forage, rebuild, and live to fight another day.  After all the chaos, ammunition was in short supply for the civilian population so engagements with one another had to be carefully considered rather than fast and loose.  Home made black powder munitions and weaponry were returning to regular use.  Archery suddenly saw a resurgence.  This was a major reason why so many thought it would be a good idea to see what they could find in the ruins of the old metros.  This is also where we learned that those devastating hurricanes forced untold numbers to flee Cuba, Puerto Rico, and the Dominican Republic to transplant into Florida and Georgia, moving ever inward.  Apparently over the course of just two years sea levels had risen an astounding seven feet and showed no signs of slowing down.  The Arctic ice caps were melting at an alarming rate.
          </p>

          <p class='text-center'><u><strong>SPRING 2015: THE NORTHWESTERN FRONT</strong></u></p>

          <p class='tab'>
            The bloodshed in BC and Alberta was not going well for our joint forces at all.  The oil in the north was clearly contested in spite of severe opposition.  The captured piers of Vancouver and Seattle led to brutal engagements in Washington state and Oregon.  Resistance still in these cities lived in constant fear of nuclear retaliation by the COG, ever awaiting the evacuation order and wondering if they would even get one after Anchorage and Juneau.  The possibility of surrender was on the tip of everyones tongues, though noone dared speak of it openly.  Air superiority barraged our ground forces relentlessly, facilitating the soviet encroachment inland and making it look easy.  This was truly a nightmare scenario for the active military ranks.  Every effort was focused on holding back the advance here, ING's were pulled from everywhere that was still available.  The Badlands were of no concern anymore.  With grim determination, they fought on in the northern Rockies.  At the apex of this most harrowing hour, Mattis finally addressed the public from the Canadian front line.
          </p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/NWFront.png" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            He told us that he meant what he said, he would lead our troops to fight tooth and nail to defend this great nation of ours and afford us the opportunity to rebuild a better tomorrow.  He said we still had a few tricks up our sleeve, several aces in the hole and that he actually got some amazing news that morning.  They needed to play their cards very close to their chest in order to make it happen, but in the not too distant future there would be a grand opportunity to turn the tables for the continental United States.  As executive chief he assured the rebels remaining in Vancouver and Seattle that the nuclear option absolutely would NOT be exercised against them unless absolutely necessary, that they needed to focus their efforts on as much intelligence gathering as they possibly could and that if they held out just a little longer the tide would begin to turn.  The career military man commended all of us for our patience and valiant efforts in the face of impossible odds, and declared that this war was far from over.  Although inspiring as it was, many began to openly question his sanity.  The war rages on...
          </p>

          <p class='text-center'><u><strong>SUMMER 2015: WARFARE, FAMINE, AND FLAME</strong></u></p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/BCFireMap.png" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            While the combat grew more intense on the battlefront and the people migrated out of the hubs to reclaim what was once lost, the pattern of drought continued marching forward during the summertime.  When the dry lightning struck the west coast again, it was the soviets turn to battle the inferno.  California was already razed by flame for the most part, and in the end they just let the wildfires burn.  From the Umpqua to the Okanogan and Olympic forests the blaze engulfed the land.  Vancouver island and the entire west coast north of there caught as well, all the way up to Alaska.  In the contested terrain, COG forces launched extensive napalm assaults, utilizing a scorched earth policy to slow the soviet advance as much as possible.  While expertly conditioned to the cold, they seemed to have little experience dealing with wildfire.  The Fire Walkers, enlisted troops, and the militias made use of the dense smokescreen and were able to force their retreat to Seattle and Vancouver.  This also allowed critical supplies to be smuggled into these cities for resistance operatives.  Noone dared to attempt to fight the flames in a warzone, and this bought our men and women time to gain much needed rest and resupply for the coming days.  Mother Nature didn't care which arbitrary line was drawn in the sand, her fury affects everyone.  When all was said and done, only Medford & Bend Oregon needed to flee the carnage.
          </p>

          <p class='text-center'><u><strong>FALL 2015: BONDS FORGED IN BLOOD - NATO TO THE RESCUE</strong></u></p>

          <p class='tab'>
            While the rainy season began early this year, much to the dismay of our troops in the northwest, the Day of Relief decisively emerged for the exhausted and distraught COG forces.  It turns out that the war on multiple fronts decidedly drained the wind out of soviet sails, particularly after the loss of their main spearhead in Anchorage and Juneau.  This turned the tables for the European and Middle Eastern front in the “War to end all wars” and after extended engagement their defense was able to hold.  The conflict still rages, but the reprieve allowed NATO to reorganize and evaluate the long game.  True to the Washington Treaty of 1949, allied forces came to aid the now tattered frayed Canadian and US of A's military.  British, Irish, Norwegian, and Danish soldiers arrived en masse in the remaining wharfs of Providence, Portland ME, New Haven, Saint John, and Quebec.  Aerial transport swept into Montreal and Quebec as well, and air drops were swiftly deployed to assist in recovering the harbors of New York City, Boston, Philadelphia, and Baltimore.  Relief materials and goods were flown around the clock to the now vital railyards at Pittsburg and Cleveland. 
          </p>

          <p class='tab'>
            The Nordic infantry along with British and Irish regulars were immediately dispatched to the areas of operations, and quickly spread the word that they were only the first wave.  France, Germany, and Italy were focusing their efforts on the counter-attack but Spanish and Portugese warriors would join the party in the spring, and even the long pacifist and historically neutral Swedes were working on our behalf.  Their espionage agents were gaining vast amounts of intelligence on Russian operations, and over the last 6 months had been using their long accumulated wealth to contract African and South American mercenary groups to apply extreme pressure on the Brazilian Government in an attempt to open up the possibility of Venezuelan oil imports returning to America.  They also financed an agreement with Mexico to provide armed escorts for emergency supply lines in conjunction with its southern neighbors to run freight from all of its western harbors extending from the Panama canal to El Paso and Tucson.  Columbia was all set to hold their own territory sovereign in order to prevent any land or air assaults from reaching Panama City. Australia was already highly in agreement with this plan, and preparing to deal with any Chinese naval interference in the days to come.  Evidently disrupting the entire world economic system made the BRIC many enemies, as every nation suddenly had to deal with all of the issues facing their own poor with zero external support.
          </p>

          <p class='text-center'><u><strong>CONCLUSION: SURVIVING THE APOCALYPSE</strong></u></p>

          <p class='tab'>
            Although America and the EU were blindsided and savagely beaten in the beginning, their fighting spirit is far from broken.  International finances are still in ruin, and orbital superiority has kept the BRIC holding a distinct advantage in the conflicts to come.  World War III is still raging worldwide.  Criminal activity runs rampant in the continental United States, and the average citizen barely has any means to defend themselves.  Ammunition is a key commodity, and gasoline is insanely expensive.  Most people were severely let down by the government response efforts, and find themselves self reliant for their own continued existence.  Many feel that we would never had been put into this situation in the first place if it wasn't for the politics and greed of the old world, and are terrified that once we actually get a chance to rebuild Mattis will reneg on his promise of a better tomorrow.  This is especially true now that the US government is in direct control of all telecommunications and financial exchange, and the reinitiation of the draft and conscription of prison forces could very easily become corrupted or abused.
          </p>

          <p class='tab'>
            The global stage basically consists of Russia at a standstill on the eastern European front, its focus now on ensuring that we will never be able to retaliate any further than our initial nuclear response.  NATO forces now have the opportunity to support their gladiator nation of the USA and give it a chance to recover from grievous injury.  China appears to be happy to play “white knight” and consolidate power and influence by aiding in relief for southeast asia, Korea, Papau New Guinea, Malaysia, Indonesia, and the Phillipines.  India seems content with their new digital drive of becoming a global financing powerhouse once the war reaches its conclusion, and is doing its best to assimilate Pakistan, Afghanistan, and any other remaining “stan” without existing soviet ties.  The Arabian nations are pleased to just sit tight and let the war unfurl as long as they can gain uncontested access to the Mediterranean Sea.  The big players in Africa seem to be glad to simply be recognized as a participant by contracting out their militaries to the highest bidders.  The nations of South America seems to be sitting on the fence, waiting to see how the war pans out for Brazil but black ops to regain Venezuela as a fuel supplier for North America are steady, often, and frequent.  Australia is extremely concerned with what a unified Asia might mean for them, and is definitely down to support any chance of recovery for its American and EU allies to at a bare minimum maintain its trade options.
          </p>

          <div class='row'>
            <div class='col-12 py-2'>
              <img src="img/apocalypse/apocalypseNow.jpg" class="rounded img-fluid h-100 mx-auto d-block border">
            </div>
          </div>

          <p class='tab'>
            Concurrently, climate change is accelerating rapidly.  Weather extremes are growing longer in duration and considerably more dangerous.  Tornado Alley is a maelstrom in the late spring as temperatures rise steadily from about mid March.  Droughts occur during the long summer months, and desertification and fires are bound to continue.  The heat waves continue through until about November, and hurricane season is unpredictable and particularly destructive as tornadoes frequently "spin off" of the storms.  When the cold snaps finally do come they are frigid and where snow wont fall, more rain hammers the ground causing flooding and landslides.  Sea levels are rising at a frightening pace, meaning that the weather changes are bound to continue.  In the US, wildlife is thriving with the drastic reduction of industry, consistent traffic, and continuance of the infinite growth model.  Nature always finds a way, and cares little for the ambitions of its human inhabitants.  This is the Aftermath of the Mayan Apocalypse.  Anything you might imagine happening, either during or after this synopsis, probably did in fact occur somewhere at some point.  That is now your story to tell...
          </p>

        </div>
      </div>
      <script src='js/instantMessage.js'></script>
      <script src='node_modules/socket.io-client/dist/socket.io.js'></script>
      <?php include('footer.php'); ?>
    </div> 
  </body>
</html>