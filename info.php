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

      <div class="accordion py-3" id="accordion">

        <div class="card">
          <div class="card-header brass text-center" id="headingOne">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='rolesBtn' type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              ROLE PLAYING
            </button>
          </div>

          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

                <p class='tab'>
                  The Aftermath is a computer assisted Role Playing Game (RPG) platform.  All the "Rules" listed here are simply <strong>GUIDELINES</strong> as to how to make the most of this framework, they are <strong>NOT</strong> designed to be "Carved in Stone" as the rule of law and therefore constantly referenced during play!  It is a reasonably complex system, built that way to address all aspects of life and death in the post-apocalypse, and intended to be "Loosely Guided" by whoever plays the role of the <strong>Storyteller</strong>.  What is a Storyteller?  I'm glad you asked!  
                </p>

                <p class='tab'>
                  First off, it is highly recommended that you read the content under "The Apocalypse" tab on the home page.  This sets the world stage, and hopefully gives any potential Storyteller plenty to work with.  The beauty of this system is that it can be used in nearly any frame of reference.  If you decide you don't like the idea of the end of the world as we know it (TEOTWAWKI) and want to run a game that is more like Grand Theft Auto, you are free to do so.  Want some zombies?  Go for it.  Aliens?  No problem.  Midieval Fantasy?  Just use the Pistols & Rifles Skills for crossbows and leave magic out of it for now (unless you decide to integrate your own system, this is mostly open source and personally I would love to hear about it!)...There will be many addendums & spin-off's in the future, but as of this moment post-apocalyptic is the focus.
                </p>

                <p class='tab'>
                  Back to the topic at hand though.  <strong>A Storyteller is absolutely critical to playing the game</strong>.  It is up to them to manifest the plot of their tale, the characters involved in the quest (other than the <strong>Players</strong>), the environments, the Areas of Operation (AO's), the dialogue for any non-player characters (NPC's), understand and enforce the "Rules", and when the time comes fight against the <strong>Players</strong> as the predetermined resistance to their objectives.  <strong>Storytellers are the entire world and everything in it!</strong>  They assemble it all together in order to provide epic or tragic tales of survival during the Aftermath.  It is up to them to provide the players enough detail to make informed and rational decisions in order to continue the plot of the story.  It is a monumental role, and takes considerable effort and forethought!  As we advance through this user manual, there will be many tips included to help the Storytellers develop a stronger voice and sharper wit in order to accomplish this task.
                </p>

                <p class='tab'>
                  <strong>Players</strong> on the other hand are merely actors on the Storyteller's stage.  They are only responsible to play the role of their characters, and interact with the world that the Storyteller presents them.  They are the <strong>ONE</strong> whereas the <strong>Storyteller is the MANY</strong>.  More often than not, several players will form a "party" to progress through the Storyteller's script, and should at least attempt to learn how to work together to do so in order for there to be unity and cohesion for the sake of the game!  The Whisper feature is included so that the Players and Storytellers can communicate secretly though, in order to allow as much freedom as possible in the field of play.  People will not always agree, and sometimes a character may need to stand alone, but such is life!  With that established, lets get down to the mechanics of actually playing the game!
                </p>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingTwo">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='traitsBtn' type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              TRAITS & CHECKS
            </button>
          </div>

          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              
              <p class='tab'>
                The first thing that both the Players and Storytellers need to understand is character Traits.  Traits represent a characters natural and developed physical and mental attributes and are directly related to their initial Skill Ratings.  Skills represent a characters inherent knowledge, experience, and familiarity when performing complex tasks, whereas Traits embody a characters physical and mental prowess and ability for more generalized acts.  Other RPG's refer to Traits as either Attributes or Stats, so those familiar with them will understand their implied meaning.  There are a few things to note:
              </p>

              <ul>
                <li>Traits are determined at character creation by Rolling two Ten-Sided Die (2D10) and combining the result</li>
                <ul>
                  <li>
                    The maximum Trait Value is 20, and should be compared to olympic level athletes or people who stand a chance of being included in "The Guinness Book of World Records".  A value of 20 indicates peak ability and performance, and any Trait near this mark should be considered extraordinary
                  </li>
                  <li>
                    The "average" Trait Value is 8 to 12, with the median being a solid 10. Anything within that range should be considered "normal", give or take a few points
                  </li>
                  <li>
                    The minimum Trait Value is 2, and this represents the bare minimum to sustain life.  Any value lower than ~ 8 should be considered evidence of some sort of handicap, disability, or outright weakness
                  </li>
                </ul>
                <br>

                <li>
                  Every character is bound to be unique in their own way (just like everyone else in the real world), so it makes sense that they will possess certain strengths & weaknesses.  Not to worry though, a character can always improve their Traits through their experience and willfull training of their body and mind
                </li>
                <ul>
                  <li>It also stands to reason that some deficient Traits might be aided by technology or items like as glasses, hearing aids, etc.
                    <br>(covered in further detail under the Tactical Gear Section of this page)
                  </li>
                </ul>
              </ul>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>TRAIT</th>
                      <th scope="col" class='text-center'>DEFINITION</th>
                      <th scope="col" class='text-center'>EXAMPLES</th>
                      <th scope="col" class='text-center'>COMMON USE</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <th scope="row" class='align-middle'>MEMORY</th>
                      <td class='align-middle'>The faculty by which the mind stores and remembers information</td>
                      <td class='align-middle'>
                        Do you need to recall someones face?  Something they said?  Maybe the formula for calculating the circumference of a sphere? Righty tighty or lefty loosy?  That's memory
                      </td>
                      <td class='align-middle'>
                        -Remembering specific details of past conversations or experiences
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>LOGIC</th>
                      <td class='align-middle'>Reasoning conducted or assessed according to strict principles of validity</td>
                      <td class='align-middle'>
                        Playing chess in the park?  Trying to determine someone's motives?  Figuring out what went or could go wrong based on certain evidence?  That's Logic
                      </td>
                      <td class='align-middle'>
                        -Finding alternative solutions to solve problems when you lack the skills required<br>
                        -Figuring out what is going on, how, and why
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>PERCEPTION</th>
                      <td class='align-middle'>The ability to see, hear, or become aware of something through the senses</td>
                      <td class='align-middle'>
                        Do you need to know how many people are on the other side of a doorway while you listen in?  Maybe you are trying to make sense of what your friend is screaming at you after the gunfire erupts?  Need to assess the situation quickly?  That's Perception
                      </td>
                      <td class='align-middle'>
                        -Using the senses to gather information
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>WILLPOWER</th>
                      <td class='align-middle'>Control or mental fortitude exerted in order to do something difficult or restrain impulses</td>
                      <td class='align-middle'>
                        You know those days when you just dont want to get out of bed?  Got hurt yesterday so now you get to work with a broken thumb? Trying to quit smoking or workout every morning? Fighting pain, emotions, and rash decisions?  That is Willpower
                      </td>
                      <td class='align-middle'>
                        -Facing fear<br>
                        -Pushing through pain<br>
                        -Exerting self control or discipline<br>
                        -Resisting the urge to rest<br>
                        -Keeping conscious 
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>CHARISMA</th>
                      <td class='align-middle'>Compelling social ability or charm that can inspire devotion in others.</td>
                      <td class='align-middle'>
                        See, charisma is tricky.  My personal interpretation is “the ability to persuade others to both see and agree with your line of thinking”.  That is basically the entire goal of communication. That is charisma
                      </td>
                      <td class='align-middle'>
                        -Persuading, befriending, or otherwise manipulating others
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>STRENGTH</th>
                      <td class='align-middle'>The quality or state of being strong; bodily or muscular power; vigor</td>
                      <td class='align-middle'>
                        Lifting, pushing, pulling, carrying, or otherwise affecting the physical world with ones own body.  That is strength.Lifting, pushing, pulling, carrying, or otherwise affecting the physical world with ones own body.  That is strength
                      </td>
                      <td class='align-middle'>
                        -Determining effectiveness of strikes in Melee combat<br>
                        -Climbing<br>
                        -Lifting or carrying heavy objects<br>
                        -Forcing things to move<br> 
                        (objects, cars, animals, other people)<br>
                        -Forcing things open<br> 
                        (doors, locks, containers)
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>ENDURANCE</th>
                      <td class='align-middle'>The ability to withstand hardship or adversity and / or  sustain a prolonged stressful effort or activity</td>
                      <td class='align-middle'>
                        Keeping pace while running?  Trying to fight off illness or infection?  Maintain functionality after considerable blood loss?  Carry a heavy pack long distances?  Continue doing almost anything once it becomes difficult?  That is endurance
                      </td>
                      <td class='align-middle'>
                        -Keeping pace with intense activity<br>                        
                        -Healing or recovery from illness<br>
                        -Resisting infection or poisons<br>
                        -Maintaining body function while weak or wounded<br>
                        -Holding ones breath<br>
                        -Determining the rate at which one heals
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>AGILITY</th>
                      <td class='align-middle'>The ability to move, change direction or body position both quickly and easily.  Body awareness, flexibility, and balance in a nutshell</td>
                      <td class='align-middle'>
                        Need to jump over an obstacle?  How about scramble up a retaining wall or fence?  Catch something thrown at you?  Keep your balance?  Jump out of a second story window without hurting yourself?  That is agility
                      </td>
                      <td class='align-middle'>
                        -Keeping balance<br>
                        -Climbing<br>
                        -Jumping<br>
                        -Using hand eye coordination or body awareness<br>
                        -Moving efficiently in general
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>SPEED</th>
                      <td class='align-middle'>The rate at which someone or something is able to move or operate</td>
                      <td class='align-middle'>
                        Need to haul ass towards or away from danger?  Working on something that needed to be finished yesterday?  In a standoff and want to be the first to make a move?  That is speed
                      </td>
                      <td class='align-middle'>
                        -Combat actions<br> 
                        -Running<br>
                        -Movement rate or frequency in general<br>
                        -Setting the pace for physical activity
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='align-middle'>BEAUTY</th>
                      <td class='align-middle'>A combination of qualities, such as shape, color or form that pleases the aesthetic senses of the beholder</td>
                      <td class='align-middle'>
                        This is your base aesthetic and physical attractiveness, plain and simple<br>
                        <strong>Beauty as a trait cannot be improved, only masked or modified</strong>
                      </td>
                      <td class='align-middle'>
                        -Seduction or bolstering charisma if possible
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <br>
              <ul>
                <li>
                  Trait Checks are handled by rolling 2D10 and adding the result together.  If the roll is under the Trait Value then it is Successful
                </li>
                
                <li>
                  Modifiers can be positive or negative.  For instance say you need to perform an Agility Check to climb into a window without making a ruckus or hurting yourself (Failure):
                </li>
                <ul>
                  <li>
                    If the window is low to the ground so its easy to keep balance and position yourself you might receive a significant bonus
                  </li>
                  
                  <li>
                    If the windowsill is at about hip height or lower so you dont have to pull yourself up, you only move in and down you may get a small bonus
                  </li>
                  
                  <li>
                    If the windowsill is about shoulder height that seems about average, just requires a little effort.  No modifier
                  </li>
                  
                  <li>
                    If the windowsill is within arms length but you have to scale the wall a bit, you may have a small negative
                  </li>
                  
                  <li>
                    If the windowsill is at the end of your reach but you can pull yourself up with a little foot planting, you should probably get a significant negative
                  </li>
                  
                  <li>
                    If you have to jump as high as you can, latch onto the ledge, and then scramble up and open the window, hell yes negatives apply heavily!
                  </li>
                  
                  <li>
                    Now factor in things like injury, exhaustion, or malnutrition
                  </li>
                  
                  <li>
                    Add in environmental details like light level, movement speed, distance, or weather conditions and you get the idea.  <strong>As a Storyteller just giving time of day, current weather, crowd size and noise, whatever information is pertinent based on the situation does wonders for players to make informed decisions.</strong>  The Environmental Awareness Skill (covered in Skills) or Perception Trait are there for a reason!
                  </li>

                  <li>
                    <strong>As a Storyteller, I recommend just having them roll their checks and not get bogged down in the math beforehand.</strong> If you know its going to be really difficult but they have an above average score then just see what happens.  
                  </li>
                  <ul>
                    <li>
                      IE: Player has an Agility Score of 14, and trying to do an exceptionally difficult window entry. Roll is 10 or above its a failure, the higher the roll the worse the results of trying. If you rolled really high you probably twisted your ankle painfully when you came crashing down. If the roll is around 8 you succeed but make some noise, if the roll is around a 5 then you're good, if its below a 4 you make it look easy and keep it clean and quiet.  Let the dice speak for themselves and then try to interpret it.  That by no means play loose with your assessment though, just figure out how to keep it a game.  <strong>I highly recommend as a storyteller that you never, ever pause the game to figure out what exact number is needed to be successful.  Just roll and interpret the results, argue if you must but the storyteller always has the final say in the matter.</strong>  Its called Aftermath for multiple reasons!
                    </li>
                  </ul>

                </ul>
                <br>

                <li>
                  Sometimes it makes sense to chain Trait Checks together.  For instance, these are just a few possible circumstances:
                </li>
                <ul>
                  <li>
                    Having to jump long distances.  IE: From one rooftop to another across a narrow alley
                  </li>
                  <ul>
                    <li>
                      Speed Check to build up speed & then an Agility Check to make the jump
                    </li>
                    <li>
                      Maybe the Speed Check provides bonuses (low roll Success) or negatives (high roll Failures) to the Agility Check
                    </li>
                    <li>
                      If you barely fail Agility, maybe then use a Strength Check to see if you catch yourself
                    </li>
                    <li>
                      If you clearly fail, guess what?  You fall and probably injure yourself in the process
                    </li>
                  </ul> 

                  <li>
                    Climbing things.  IE: Rock climbing or clearing a high fence or wall
                  </li>
                  <ul>
                    <li>
                      Agility Check to reach the needed grip then a Strength Check to make use of it
                    </li>
                    <li>
                      Bonuses or negatives from the first apply to second
                    </li>
                  </ul>

                  <li>
                    Carrying heavy objects quickly.  IE: Get your wounded friend to safety
                  </li>
                  <ul>
                    <li>
                      Strength Check to pick them up and position them properly and then a Speed Check to move as fast as possible
                    </li>
                    <li>
                      Bonuses or negatives
                    </li>
                  </ul>

                  <li>
                    Moving large or heavy objects long distances.  IE: Get your car out of the mud and back onto the road
                  </li>
                  <ul>
                    <li>
                      Strength Check to see if you can actually move it then an Endurance Check to push until it happens
                    </li>
                    <li>
                      Bonuses or negatives
                    </li>
                  </ul>

                  <li>
                    Smooth Talk.  IE: Seduce or manipulate someone or talk your way out of a ticket
                  </li>
                  <ul>
                    <li>
                      Beauty / Logic Check to verify you are discussing the same thing and then a Charisma Check to pull it off
                    </li>
                    <li>
                      Modifiers
                    </li>
                  </ul>

                </ul>

              </ul> <!--ALL BULLETS-->

              <p class='text-center'><u><strong>INTOXICATION, PERFORMANCE ENHANCING DRUGS, & OTHER TRAIT MODIFIERS</strong></u></p>

              <p class='tab'>
                People have their vices, sometimes it makes sense to strike when you know your target(s) will be inebriated.  Sometimes it makes sense to be under the influence yourself, and sometimes the characters are just likely to need   to find a way to cope or celebrate a victory.  The truth is that partaking in mind altering substances is usually a   social endeavor, and after so much loss and pain its likely that the characters in the Aftermath may pick up some bad habits.  These things tend to affect the body in multiple ways:
              </p>

              <ul>
                <li>
                  The amount consumed and refinement process drastically alter the effects.  Consider the following:
                </li>
                <ul>
                  <li>
                    Having a decent alcohol buzz is less impairing than being hammered drunk
                  </li>

                  <li>
                    Low dose amphetamines might make the person feel sharper, though reduce appetite and feel a little jittery whereas smoking crystal meth will provide an entirely different experience
                  </li>

                  <li>
                    Prescription opiates might make help a character manage pain, but using heroin is an entirely different beast 
                  </li>
                </ul>

                <li>
                  Generally speaking, the more a character uses the less they will be able to function properly 
                </li>

                <li>
                  Different substances vary in the amount of time that the character may be inebriated
                </li>

                <li>
                  Tolerance, frequency of use, and addiction could easily apply as well
                </li>

                <li>
                  Every substance on planet earth affects individuals differently, the following is simply a broad assessment:
                </li>
                <br>

                <ul>
                  <li>
                    <strong>PAIN & INJURY</strong>
                  </li>
                  <ul>
                    <li>
                      <strong>Storytellers need to use thier best judgement with this one.</strong>  When considering pain or injury try to keep it isolated to the location and the acts that the character is trying to perform
                    </li>

                    <li>
                      Torso and leg injuries can affect strenuous activity as well as general movement, arm injury can affect skills that require both hands, etc.
                    </li>
                  </ul>

                  <li>
                    <strong>EXCESSIVE CAFFIENE</strong>
                  </li>
                  <ul>
                    <li>
                      Increased Endurance when Checking to stay awake
                    </li>

                    <li>
                      Slight increase to Perception
                    </li>

                    <li>
                      Being jittery can have a slight Skill decrease due to interfering with fine motor function
                    </li>
                  </ul>

                  <li>
                    <strong>ALCOHOL</strong>
                  </li>
                  <ul>
                    <li>
                      Can make people incredibly willful, increases Willpower (especially regarding Pain)
                    </li>

                    <li>
                      Inspires confidence and reduces hesitation, may convince character that they are more attractive than they actually are
                    </li>
                    <ul>
                      <li>
                        Low level consumption might increase Actions by One
                      </li>
                    </ul>

                    <li>
                      Slight increase to Strength as the character loses ability to notice strain
                    </li>

                    <li>
                      Decreases Memory, Logic, Perception, Endurance, and especially Agility
                    </li>

                    <li>
                      Can seriously impact Skills & Skill Checks!
                    </li>

                    <li>
                      Also causes increased Blood Loss (covered later)
                    </li>
                  </ul>

                  <li>
                    <strong>MARIJUANA</strong>
                  </li>
                  <ul>
                    <li>
                      Slight decrease to Perception
                    </li>

                    <li>
                      Alters thought paths, slight increase to Logic but might make a character talk stupid
                    </li>

                    <li>
                      Slight decrease to Willpower in certain scenarios
                    </li>
                  </ul>

                  <li>
                    <strong>OPIATES</strong>
                  </li>
                  <ul>
                    <li>
                      Tends to make a fair amount of the population sick, or at minimum reduces appetite
                    </li>

                    <li>
                      Makes people drowsy, reduces Endurance for trying to stay awake
                    </li>

                    <li>
                      Mild decrease to Perception
                    </li>

                    <li>
                      Large increase to Willpower for the purposes of pain, can make an injured part of the body more managable thus reducing any negative Skill or Trait Modifiers
                    </li>
                  </ul>

                  <li>
                    <strong>HALLUCINOGENS</strong>
                  </li>
                  <ul>
                    <li>
                      <strong>Storytellers choice, have fun with this one!</strong>
                    </li>
                  </ul>

                  <li>
                    <strong>AMPHETAMINES</strong>
                  </li>
                  <ul>
                    <li>
                      Can make people shaky or twitchy, which reduces fine motor skills and Agility
                    </li>

                    <li>
                      Heightened alertness meaning a slight increase to Perception
                    </li>

                    <li>
                      Reduces hesitation, therefore increasing Speed and Actions
                    </li>

                    <li>
                      Can make it seem impossible to fall asleep
                    </li>

                    <li>
                      Elevated heart rate reduces Endurance, increases Blood Loss
                    </li>
                  </ul>

                  <li>
                    <strong>COCAINE</strong>
                  </li>
                  <ul>
                    <li>
                      Inspires confidence, increasing Willpower (especially in relation to Pain from numbing effects)
                    </li>

                    <li>
                      Can make people shaky, which in turn reduces fine motor skills and Agility
                    </li>

                    <li>
                      Elevated heart rate reduces Endurance, increasing Blood Loss
                    </li>

                    <li>
                      Can make falling asleep incredibly difficult
                    </li>

                    <li>
                      Reduces hesitation, increasing Speed and Action Points
                    </li>
                  </ul>

                  <li>
                    <strong>STEROIDS</strong>
                  </li>
                  <ul>
                    <li>
                      Significant increase to Strength and Endurance
                    </li>

                    <li>
                      Slight increase to Speed and Actions
                    </li>

                    <li>
                      Reduces Willpower regarding rash decision making (Roid Rage)
                    </li>
                  </ul>

                </ul>

              </ul>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingThree">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='skillsBtn' type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              SKILLS & CHECKS
            </button>
          </div>

          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              
              <p class='tab'>
              Alright, so first off there are two main types of Skill Checks.  These checks are handled by rolling Percentile Dice.  Again you roll 2D10 but one dice serves as the 10's digit, and one dice serves as the 1's digit.  00 means 100, the absolute worst, snake eyes!  Modifiers work exactly like they do above in the Traits Section but instead of changing Trait Score, they alter Skill Rating.  The main types of Skill Checks consist of General Skill Checks and Risky Skill Checks.  There is also Critical Skill Rolls which are a sub sect of these two.
              </p>

              <ul>
                <li>
                  <strong>General Skill Checks –</strong> the dice roll determines both the speed and efficiency of the task at hand.  Given that with enough time anything can be accomplished, the purpose of general skill checks is to tell you how long till the goal is accomplished, and then how well the player performed the task 
                </li>
                <ul>
                  <li>
                    Prime example here is crafting, which is supposed to represent the time and effort you put into anything that you create:
                  </li>
                  <ul>
                    <li>
                      If you fail you fail.  You waste a lot of time and have to try again.  There's no risk other than meeting the deadline
                    </li>

                    <li>
                      Modifiers are based entirely on what you are trying to do.  If you are trying to stitch a patch on your jeans, no problem.  Roll well and you have pretty threadwork.  Maybe you never stitched anything before so you get some kind of negative.  If you were trying to embroider a dragon onto a suit cuff and never threaded a needle in your life, you know you are going to have some problems.  Just roll and interpret.
                    </li>

                    <li>
                      Unfamiliar crafts can have significant penalties based on what they are.  For instance if you are just trying to fashion a spear out of a broom stick and a kitchen knife, your roll represents you using what you have available as efficiently as possible.  If you barely succeed you managed to fashion a series of knots to tie the knife to the stick all hodge podge.  If you rolled somewhere in the middle maybe you took the handle off the blade and made it more efficient.  If you rolled well you probably found a way to fuze the blade to the staff itself.  If you did really well you reinforced the fusion points to make a quality design.  That is simple enough, but now what happens if you have no background with any kind of metalwork and you are trying to weld armor to your car?  You have no fucking idea how to weld properly or even what a quality weld looks like!  <strong>Storytellers should act accordingly, there are weird little nuances to every craft!</strong>
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>Risky Skill Checks –</strong> This particular attempt needs to be done right the first time or there will be consequences, time is NOT on your side here and you need to succeed now.  Almost all of the aforementioned Trait Checks in the tab above qualify as "Risky"
                </li>
                <ul>
                  <li>
                    A good example of the difference between a General Skill Check and a Risky Skill Check would be trying to fashion homemade explosives or mixing volatile chemical compounds vs the spear illustration above.  A better example is to address all of the transportation skills.
                  </li>
                  <ul>
                    <li>
                      A General Skill Check on a Transportation Skill evaluates how long it took to reach the destination, knowing when to idle to conserve fuel, avoiding damage from potholes in neglected roadways, whether or not your horse needs to rest or if you need to make an Endurance Check on your bike, so on and so forth.
                    </li>

                    <li>
                      A Risky Skill Check on a Transportation Skill would be like trying to perform a PIT manuever against another car, make a horse jump a fence, roll down some stairs on a bycicle, or perform some kind of trick or risky manuever.  Again, it is highly recommended that you don't let yourself get tied up in the math.  Just roll and interpret!
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>Critical Skill Rolls –</strong> Critical skill rolls occur when the percentile results are doubled.  IE: 33 or 66 or 99.  They can be successes or failures but they always have awesome outcomes. Maybe you barely fail a Vehicle Check. Now you have a flat tire.  Maybe you get yourself an 11, the best possible critical roll on that same vehicle Check.  You make awesome time, burn minimal fuel, and your long dead RPM meter came back to life!  You even managed to make the meeting early and received a bonus for making things easy with time to spare.  Or maybe another player was badly injured, everyone was failing their First Aid Checks to stabilize him, but that 11 guaranteed his survival by getting them somewhere that could provide a fighting chance.  <strong>Storytellers act accordingly!</strong>
                </li>
                <br>

                <li>
                  Chaining Skill Checks work just like chaining Trait Checks:
                </li>
                <ul>
                  <li>
                    SKILL TO SKILL - Trying to make a bomb?  Chemistry Check to make the compounds, Risky Explosives Check to assemble the weapon.
                  </li>

                  <li>
                    SKILL TO TRAIT – Haggling prices on canned goods without labels?  Negotiation Check to make the sale, Charisma Check to see if they are happy about it. Maybe in their mind it felt like they got a good deal and are eager to do business in the future; maybe they felt like you forced their hand but can respect your professionalism...at least to your face...this time
                  </li>

                  <li>
                    <strong>Storytellers don't forget that this sets up the possibility for stacking modifiers on modifiers.</strong>  Again, I highly suggest rolling first, then interpreting the results.  If you have to argue and the players convince you that the odds are in their favor, so be it.  Just keep the story moving.  In the end the storyteller always has the final say, but for the love of everything that is gaming, keep the story moving!  Roll then interpret! Forget the math unless you have to face it for the sake of group cohesion!
                  </li>
                </ul>
                <br>

                <li>
                  The Off-Hand Skill is simply the modifier you receive when you have to use your non dominant hand due to injury or loss of limb function.
                </li>
                <br>

                <li>
                  <strong>MODIFIERS:</strong> For simplicities sake, the following table should be used to calculate the modifiers for Trait Checks, General Skill Checks, or Risky Skill Checks
                </li>
              </ul>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>GENERAL COMPLEXITY</th>
                      <th scope="col" class='text-center'>SKILL MODIFIER</th>
                      <th scope="col" class='text-center'>TRAIT MODIFIER</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class='text-center'>Simple</td>
                      <td class='text-center'>75</td>
                      <td class='text-center'>6</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Easy</td>
                      <td class='text-center'>50</td>
                      <td class='text-center'>4</td>
                    </tr>

                    <tr>
                      <td class='text-center'>High</td>
                      <td class='text-center'>25</td>
                      <td class='text-center'>2</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Likely</td>
                      <td class='text-center'>10</td>
                      <td class='text-center'>1</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Reasonable</td>
                      <td class='text-center'>0</td>
                      <td class='text-center'>0</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Unlikely</td>
                      <td class='text-center'>-10</td>
                      <td class='text-center'>-1</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Low</td>
                      <td class='text-center'>-25</td>
                      <td class='text-center'>-2</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Difficult</td>
                      <td class='text-center'>-50</td>
                      <td class='text-center'>-4</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Convoluted or Complicated</td>
                      <td class='text-center'>-75</td>
                      <td class='text-center'>-6</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Unrealistic or Exceptionally Challenging</td>
                      <td class='text-center'>-100</td>
                      <td class='text-center'>-8</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Comical or Relying on Luck</td>
                      <td class='text-center'>-125 or more</td>
                      <td class='text-center'>-10</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <br>

              <ul>
                <li>
                  <strong>STORYTELLERS: It is of the utmost importance that you provide the players with as much information as is relevant so that they can make an informed decision.  Simple things like these go a long way:</strong>
                </li>
                <ul>
                  <li>
                    Time of day for determining light level
                  </li>

                  <li>
                    Weather, ground conditions, and any other enviornmental factors
                  </li>
                  <ul>
                    <li>
                      Is it raining and muddy?
                    </li>

                    <li>
                      Icy and slick?  Are you shivering?
                    </li>
                    
                    <li>
                      Smokey as hell?
                    </li>
                  </ul>

                  <li>
                    Ambient interference
                  </li>
                  <ul>
                    <li>
                      Trying to make a Perception Check for hearing in a crowded, noisy place?
                    </li>

                    <li>
                      Suspect the character you are trying to communicate with already likes you or finds you attractive?
                    </li>

                    <li>
                      Are you trying to lift and carry something incredibly heavy at the end of a hard days work, or at the beginning?
                    </li>

                    <li>
                      Have you been baking in the sun all day and having trouble staying awake thanks to your sunburn?
                    </li>

                    <li>
                      Maybe your Agility Check is going to be difficult thanks to an injury?
                    </li>

                    <li>
                      Are you drunk?  Speed Checks might be complicated by needing to keep your balance 
                    </li>

                    <li>
                      Do you have the right tools needed for the job? What about the materials? 
                    </li>
                  </ul>
                  
                </ul>
              </ul>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingFour">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='roundsBtn' type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              ROUNDS & ACTIONS
            </button>
          </div>

          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
              <p class='tab'>
                Now we are in to the thick of it, the “Do or Die”, everything in combat is a High Risk Skill or Trait Check.  Now or never.  Each <strong>Round</strong> of combat is approximately <strong>three seconds</strong>.  For those of you reading this with no real life experience, violence is crazy and quick, period.  Every move matters and this is what they mean when they talk about “The Quick and the Dead”.  Everything changes right here, right now.  The first thing you need to understand is everyone gets One <strong>Turn</strong> per Combat <strong>Round</strong> (but they can <strong>Save Actions</strong> to interrupt someone elses turn later in the <strong>Sequence</strong>!)
              </p>

              <p class='text-center'><u><strong>ORDER OF COMBAT</strong></u></p>

              <p class='text-center'>
                There are generally only two combat scenarios for determining character turn order.  The <strong>Ambush</strong> Scenario (Surprise Attack) and the <strong>Ready</strong> Scenario
              </p>

              <ul>
                <li>
                  <strong>AMBUSH SCENARIO:</strong> This is where one party (Offense) makes the first move in attacking an unsuspecting and unprepared party (Defense).
                </li>
                <ul>
                  <li>
                    Surgical syncronized ambushes are common with small teams (3-6 characters).  The idea is “When I give the signal, ATTACK!”.  When this is the case, all characters of the Offense group get to perform their turns first, in order of the HIGHEST SEQUENCE amongst themselves once the OPENING MOVE is made or the "signal" is given by the character initializing the assault
                  </li>

                  <li>
                    Large ambushes are also common, but work a bit differently.  If there are more than 6 people involved in the Offense, then once the OPENING MOVE is declared, the ORDER consists of the next HIGHEST SEQUENCE.  If the character that meets that criteria is in the Defense group, they have to pass a Sequence Check with modifiers in order to get their turn.  The Offense group does NOT have to do this.  If a Defense character fails their Sequence Check they get their turn after the last of the Offense group has theirs in ORDER of highest to lowest.
                  </li>

                  <li>
                    After the first round of initial combat, both Offense and Defense are considered Ready
                  </li>
                </ul>
                <br>

                <li>
                  <strong>READY SCENARIO:</strong> This is where all parties are on high alert and ready to fight.  Sometimes this happens after an ambush, other times there might have been a standoff and words failed, alarms may have been raised, etc.  No matter which way it went, all characters are ready to engage their enemies and opposition immediately.
                </li>
                <ul>
                  <li>
                    In this scenario the Order of Combat is determined by the HIGHEST SEQUENCE first and the next character that gets their turn is in descending order.  If there was a standoff, whoever decided to move first should probably make a Speed Check to guarantee they get the OPENING MOVE
                  </li>
                </ul>

              </ul>
              <br>

              <p class='text-center'><u><strong>TURNS & ACTIONS</strong></u></p>

              <p class='tab'>
                When each round of combat is only three seconds you begin to  understand the value of the Speed Trait.  Your Speed divided by two (rounded down) is the number of Actions that you have on  your turn.  There are several things you can do with them, but they all revolve around MOVEMENT of some sort.  On the Macro level, there are four very general ways to spend Action Points:
              </p>

              <ul>
                <li>
                  Movement & Manuevering
                </li>

                <li>
                  Attacking & Attempting to <strong>Strike</strong> a target
                </li>

                <li>
                  <strong>Saving Actions</strong> to interrupt another characters turn (lasts until the end of the Combat Round)
                </li>

                <li>
                  Ignoring combat altogether and trying to perform another Act as quickly as humanly possible
                </li>
              </ul>
              <br>

              <ul>
                <li>
                  <strong>MOVEMENT & MANUEVERS:</strong> The core concept is that your characters turn is everything that they get to do in 3 seconds!  Every move counts!  General  movement is one step at a time, though this idea lays the foundation of how Combat should theoretically function in almost every scenario.  
                </li>
                <ul>
                  <li>
                    Running? Left foot = One Action, Right Foot = One more Action, Left again = Another One...so on and so forth (One Action per stride)
                  </li>

                  <li>
                    Ducking? Hitting the Dirt?  One Action
                  </li>

                  <li>
                    Drawing your weapon? Need to chamber a round? One, Two
                  </li>

                  <li>
                    Taking cover?  Peeking out to get a look or readying your weapon? One, Two, Three
                  </li>

                  <li>
                    Jumping over something?  Agility Check to see if you have to spend an Action planting your hand first or if you can just clear it.  Maybe you do but dont stick the landing.
                  </li>

                  <li>
                    Getting up from the ground?  Agility Check, maybe you need to plant your hand, then get your footing, then spring up rather than just springing to your feet
                  </li>

                  <li>
                    Readying an item on your person?  Agility Check, maybe you need to pop a button or use velcro.  Is it in your backpack?  You have to remove your pack – One (if its just slung over your shoulder) Two (if both arms are through the straps), then open it -Two more (grab & zip, or grab and loosen pull tie), so on and so forth. Certain ABILITIES help with this, and will be discussed later.  Reloading in particular can be tricky and is addressed in RANGED COMBAT below.
                  </li>

                  <li>
                    Communicating takes <strong>Concentration</strong> (which will come up again later), and thus Action Point use as well!  It takes One Action to bark out any information due to the fact you have to choose your wording in order to relay the message effectively
                  </li>
                  <ul>
                    <li>
                      Gunfire and hearing protection go hand in hand.  It seems reasonable that the characters nearby might need to make a Perception Check to hear what was said!
                    </li>
                  </ul>

                  <li>
                    Taking and manipulating <strong>COVER</strong> will be covered later in the RANGED COMBAT section of this tab.  You need to understand Actions first!
                  </li>

                  <li>
                    Every move counts! Each and every physical motion.  Sometimes things are done in tandem like a two handed shove, tackle, or a pull up.  <strong>Storytellers act accordingly!</strong>
                  </li>
                </ul>
                <br>

                <li>
                  <strong>MELEE COMBAT:</strong> Now that we understand general Movements and Manuevers during a three second timeline, we  can rationally  discuss Melee Attacks.  There are generally two types of Melee Manuevers, the <strong>Strike</strong> (covered here) and the <strong>Grapple</strong> (covered later).  Each one relies on a Combat Skill Check for the appropriate weapon type:
                </li>
                <ul>
                  <li>
                    Unarmed – Bare handed or using the fists and feet as a striking surface
                  </li>

                  <li>
                    Grappling – Grabbing with the hands or wrestling.  This is completely different from Striking (aside from the initial <strong>Grab</strong>) and will be discussed in detail within its own section.
                  </li>

                  <li>
                    Short Weapons – Small one handed weapons like knives, hammers, flashlights.  Anything about 2' long or less.
                  </li>

                  <li>
                    Long Weapons – One handed weapons that have considerable reach.  Usually anywhere between 2.5' to 4' long approximately 
                  </li>

                  <li>
                    Two Handed Weapons – Two handed weapons that have extensive reach or using both hands on a Long(er) Weapon to increase damage or effectiveness through a process known as <strong>Reinforcing their Grip</strong> (multiplies characters Strength with the weapon by 1.5x)
                  </li>

                  <li>
                    Chain Weapons – Chain weapons use momentum to increase damage.  Chains, nunchucks, flails, rope weapons, etc.
                  </li>

                  <li>
                    Shield -  Effectively striking someone with a shield or large bulky object like a chair or bar stool. 
                  </li>
                  <br>

                  <li>
                    <strong>MELEE ATTACKS:</strong> are essentially attempting to hit or <strong>Strike</strong> your target.  Usually there are only two types of Melee Attacks,   Thrusts and Swings.  Determining the LOCATION of a successful Strike will be presented later:
                  </li>
                  <br>
                  <ul>
                    <li>
                      <strong>THRUSTS -</strong> are forward, direct attacks like jabs, pokes, and stabs.  They cost One Action when the weapon is ready, though when successful it may take another Action to remove the weapon from the target.  This is all contingent on weapon size and the effectiveness of the strike  
                    </li>
                    <ul>
                      <li>
                        On a poor Combat Skill Check (<strong>Direct Failure</strong>, covered in Strike Effects Section), a Thrust may require an Agility Check to maintain balance based on the weight of the weapon or especially if it was a kick or knee
                      </li>

                      <li>
                        You might also need to spend an action to remove and ready your weapon after a stab, particularly if the target is armored or character barely succeeds in the strike (<strong>Minor Strike</strong>, covered later).  Maybe on a <strong>Direct Strike</strong> (later...) it gets stuck in their skull or ribs.
                      </li>
                    </ul>
                    <br>

                    <li>
                      <strong>SWINGS -</strong> are indirect, circular attacks that generally have an arc of trajectory such as slashes, chops, swats, hooks, sweeping or roundhouse kicks.  They also cost One Action when the weapon is ready and the attack is successful
                    </li>
                    <ul>
                      <li>
                        On a poor Combat Skill Check (<strong>Direct Failure</strong>, covered later), a Swing may require an Agility Check to maintain balance based on the weight of the weapon or especially with a sweeping kick.  Two Handed Weapons may require a Strength to Agility Chain
                      </li>

                      <li>
                        On a particularly bad Combat Skill Check (<strong>Major Failure</strong>, again covered later), your weapon might get stuck in something requiring an additional Action to perform a Strength Check to ready it again.
                      </li>
                    </ul>

                  </ul>

                </ul>
                <br>

                <li>  
                  <strong>RANGED COMBAT:</strong> Throwing, firing, or shooting is the general idea behind Ranged Combat.  Once again use the appropriate Ranged  Combat Skill Check for the weapon type.  A good rule of thumb is to think about the old addage “Ready, Aim, Fire!”.  You spend One Action to Ready your weapon initially, then you Aim, and when the timing is right you Fire.  Nice, easy Chain of events!  These are the Ranged Weapon types:
                </li>
                <br>
                <ul>
                  <li>
                    Throwing Weapons – Any time you throw something, but modifiers apply to different features of the weapon type.  A Ball is standard, a spear is a little different, a frisbee is way different
                  </li>

                  <li>
                    Archery Weapons – Specifically Bows and Arrows.  Crossbows make use of a trigger which effectively makes them a “gun”.  It is a specific style, vastly distinct from the methods of using a Bow
                  </li>

                  <li>
                    Pistols – A small, one handed weapon that uses a trigger to fire.  Crossbow pistols just have increased long range modifiers
                  </li>

                  <li>
                    Rifles – A reasonably long, but easy to use, two handed weapon using a trigger to fire.  Crossbows also have increased long range penalties
                  </li>

                  <li>
                    Burst Fire Weapons – This is the skill you use when you have to control the recoil of a weapon in order to hit your mark.  A fully automatic barrage of bullets that needs to be guided to its target
                  </li>

                  <li>
                    Special Weapons -  These are non traditional weapons that usually have a triggering system but need to account for things like “arc of trajectory” or a similar concept.  Flamethrowers, grenade launchers, rocket launchers or RPG's, etc.  You get the idea, it takes some thought to use them effectively
                  </li>

                  <li>
                    Weapon Systems – These are the digital and siege weapons of old.  Things like heavy guns, cannons, mortars or artillery, digital or analog targeting systems, trebuchets or catapults, ballista, so on and so forth
                  </li>
                  <br>

                  <li>
                    <strong>RANGED COMBAT MANUEVERING:</strong> There are some specialized Movements and Manuevers that are specific to Ranged Combat and   need to be  addressed first.  These concepts revolve around making yourself more difficult to hit seeing as noone alive can actually dodge a bullet once the trigger has been pulled, at least not consistently
                  </li>
                  <br>
                  <ul>
                    <li>
                      <strong>SITUATIONAL AWARENESS –</strong> Combat can easily become one of the most chaotic events anyone could possibly experience.  It is fast!  Usually it makes sense to assess the situation fairly frequently as the dynamics change
                    </li>
                    <ul>
                      <li>
                        Characters may spend One Action to evaluate the battlefield and gather information
                      </li>
                      <ul>
                        <li>
                          Perform an Environmental Awareness Skill Check, a Perception Check, or a Chain of the two to convince the Storyteller to elaborate on the situation
                        </li>

                        <li>
                          Failure of these Checks reveals no new information for the character
                        </li>
                      </ul>
                    </ul>
                    <br>

                    <li>
                      <strong>SERPENTINE MOTION –</strong> While Serpentine is a little slower than a full sprint or direct route, it can definitely reduce the likelihood of being struck by a projectile by advancing in an erratic and unpredictable manner
                    </li>
                    <ul>
                      <li>
                        Serpentine Motion must be declared at the start of manuevering (first step)
                      </li>
                      <ul>
                        <li>
                          Perform an Agility Check with Modifiers
                        </li>

                        <li>
                          If passed the Serpentine Modifier applies against striking the character, reducing an attackers likelihood to hit.  The Modifier Section will extrapolate on this
                        </li>

                        <li>
                          If failed, the character must spend an Additional Action at the start of manuevering in order to CONCENTRATE to achieve the desired effect
                        </li>
                        <ul>
                          <li>
                            If a character is going to spend several turns in motion, without pause of any kind, then only the initial Concentration Action need apply
                          </li>

                          <li>
                            Concentration is a concept that will also apply to Vehicular and Mounted Combat and will be covered later
                          </li>
                        </ul>

                      </ul>
                    </ul>
                    <br>

                    <li>
                      <strong>TAKING COVER -</strong> Cover will save your life if you find yourself in a firefight!  Cover Modifiers will be explained in the Modifiers section more thoroughly but the basic idea is that you hide or obscure your body behind substantially dense material in order to reduce exposure and thus visibility.  On the surface, the theory is that you cannot shoot what you can't see. Realistically there is a massive difference between Cover and Concealment.  Bullets easily penetrate objects like most doors, drywall, and siding
                    </li>
                    <ul>
                      <li>
                        When a character is near an obstacle, barricade, or any dense material they may spend One Action to Take Cover
                      </li>

                      <li>
                        Once in Cover, they can spend an additional Action to <strong>OPTIMIZE</strong> their position.  What this means is they effectively reduce their <strong>Body Exposure</strong> to the minimal amount necessary to continue Firing their weapon
                      </li>
                      <ul>
                        <li>
                          With Pistols this means only the Head, Neck, Shoulder(s), and Arm(s) are Exposed but varies on a case by case basis
                        </li>
                        <ul>
                          <li>
                            For instance Firing over an vehicles engine block means that both Shoulders are exposed, whereas if Firing from the edge of a wall only one Shoulder might be (as well as the non-dominant hand stabilizing for Recoil potentially)
                          </li>
                        </ul>

                        <li>
                          Rifles would work the same way except that the character may only be exposing one Shoulder, one Arm, their Head, Face, and Neck by being a little further away and resting their stabilizing hand just behind the surface
                        </li>
                      </ul>

                      <li>
                        <strong>Storytellers use your best judgement!</strong>  This could be an excellent chance for the Logic Trait to come into play!
                      </li>
                    </ul>
                    <br>

                    <li>
                      <strong>USING A WEAPON:</strong> Any manuever during a Three Second Combat Round costs Action Points, and actually using a weapon is no different.  While Melee Combat is fairly straightforward, Ranged Combat requires a certain level of attention to detail and finesse.  This is also why properly utilizing Cover is so important!
                    </li>
                    <br>
                    <ul>
                      <li>
                        <strong>READYING THE WEAPON:</strong> If caught unprepared, a character may need to "Ready" their weapon, which usually means drawing and loading it.  Usually if a character knows they are moving into a potentially hostile situation though, they can state that they want to do so before combat ever actually begins
                      </li>
                      <br>
                      <ul>
                        <li>
                          Firearms are generally pretty easy to handle
                        </li>
                        <ul>
                          <li>
                            Draw your weapon
                          </li>

                          <li>
                            Chamber a round if necessary (these first two are usually done beforehand)
                          </li>

                          <li>
                            Ready firing position (shoulder your rifle, proper pistol stance, etc)
                          </li>

                          <li>
                            Aim
                          </li>

                          <li>
                            Fire!
                          </li>
                        </ul>
                        <br>

                        <li>
                          Bows and Arrows can take significantly more time
                        </li>
                        <ul>
                          <li>
                            Draw the bow (Assumes the bow is already "threaded")
                          </li>

                          <li>
                            Draw the arrow
                          </li>

                          <li>
                            “Nock” the arrow (This can usually be done beforehand)
                          </li>

                          <li>
                            Draw the bow (Assumes the bow is already "threaded")
                          </li>

                          <li>
                            Ready firing position by pulling the drawstring (“Drawing the Bow”)
                          </li>

                          <li>
                            Aim
                          </li>

                          <li>
                            Fire!
                          </li>

                          <li>
                            Skilled Archers can learn Abilities that speed up this process!
                          </li>
                        </ul>
                        <br>

                        <li>
                          Crossbows, Special Weapons, and Weapon Systems can be incredibly complicated or surprisingly easy, <strong>Storytellers act accordingly, but you should get the general idea at this point</strong>
                        </li>
                      </ul>
                      <br>

                      <li>
                        <strong>RELOADING THE WEAPON:</strong> Every weapon has its own process.  Bows and crossbows are generally single shot items which require frequent reloading.  Pump-action, lever-action, or bolt-action firearms require the cartridge to be loaded manually, though hold a small reserve of ammunition.  Revolvers hold 6 rounds, and semi-automatics or assault weapons use magazines. <strong>Storytellers should keep this in mind, and it is terribly important that the players are familiar with their weapons before Combat begins so they know what to anticipate when all hell breaks loose!</strong>
                      </li>
                      <br>

                      <ul>
                        <li>
                          Semi-Automatic Weapons are usually fairly simple:
                        </li>
                        <ul>
                          <li>
                            Eject empty magazine
                          </li>

                          <li>
                            Grab full magazine
                          </li>

                          <li>
                            Insert magazine
                          </li>

                          <li>
                            Chamber round by releasing slide
                          </li>

                          <li>
                            Ready firing position
                          </li>
                          <ul>
                            <li>
                              A severely reduced Agility Check could negate the need to return to firing position
                            </li>
                          </ul>

                          <li>
                            Again certain abilities speed this process up once the character is skilled enough with this particular type of weapon
                          </li>
                        </ul>
                        <br>

                        <li>
                          Revolvers can be particularly difficult for an unskilled hand
                        </li>
                        <ul>
                          <li>
                            Empty the cylinder
                          </li>

                          <li>
                            Chamber round one
                          </li>

                          <li>
                            Chamber round two
                          </li>

                          <li>
                            Chamber round three
                          </li>

                          <li>
                            Chamber round four
                          </li>

                          <li>
                            Chamber round five
                          </li>

                          <li>
                            Chamber round six
                          </li>

                          <li>
                            Close cylinder
                          </li>

                          <li>
                            Ready firing position
                          </li>

                          <li>
                            Abilities or Tactical Gear (speedloaders) can help
                          </li>
                        </ul>
                        <br>

                        <li>
                          Pump-action, Lever-action, or Bolt-action rifles
                        </li>
                        <ul>
                          <li>
                            Grab action (Pumps ignore this)
                          </li>

                          <li>
                            Use action to chamber round after each one fired
                          </li>
                          <ul>
                            <li>
                              Agility Check can ensure the weapon remains Ready at the Shoulder
                            </li>
                          </ul>

                          <li>
                            Switch grip back to "Ready" on the Trigger
                          </li>

                          <li>
                            Once empty, you either follow Semi-Automatic Weapon Reloads or Manual Loading into a feed or tube like so:
                          </li>
                          <ul>
                            <li>
                              Insert one round at a time until capacity is reached or you decide to stop 
                            </li>
                          </ul>

                          <li>
                            Chamber the round
                          </li>

                          <li>
                            Ready firing position
                          </li>

                          <li>
                            Abilities can help!
                          </li>
                        </ul>
                        <br>

                        <li>
                          Crossbows: Do not load quickly but its infinitely easier to teach someone to just point and shoot rather than training to become an effective archer
                        </li>
                        <ul>
                          <li>
                            Pull drawstring 
                          </li>
                          <ul>
                            <li>
                              Lever / Crank / or Pump action
                            </li>
                            <ul>
                              <li>
                                Grab action mechanism (Pumps ignore this)
                              </li>

                              <li>
                                Activate triggering mechanism by drawing string with the action
                              </li>

                              <li>
                                Switch hands back to Ready
                              </li>
                            </ul>

                            <li>
                              Foothold
                            </li>
                            <ul>
                              <li>
                                Plant weapon
                              </li>

                              <li>
                                Plant Foot
                              </li>

                              <li>
                                Pull string
                              </li>
                            </ul>
                          </ul><!--END CROSSBOW RELOADING TYPE-->

                          <li>
                            Ready firing position
                          </li>

                          <li>
                            Abilities and design specifics can help 
                          </li>
                        </ul><!--END CROSSBOWS-->
                        <br>

                        <li>
                          Bow and Arrow
                        </li>
                        <ul>
                          <li>
                            Grab arrow
                          </li>

                          <li>
                            Nock arrow
                          </li>

                          <li>
                            Pull drawstring to become Ready
                          </li>

                          <li>
                            Abilities and design specifics help
                          </li>
                        </ul>
                        <br>

                        <li>
                          Special Weapons, Machine Guns, and Weapon systems can be incredibly complicated or stupidly simple.  <strong>Storytellers act accordingly!</strong>
                        </li>
                      </ul><!--END RELOADING WEAPON TYPES-->
                      <br>

                      <li>
                        <strong>FIRING THE WEAPON:</strong> Need we discuss this further? Yes!
                      </li>
                      <ul>
                        <li>
                          Depending on character strength, munition caliber or type, and design specifics the firing party may need to pass a Strength Check to maintain balance against the weapons recoil.  If they fail, an additional Action must be spent to return to the Aim position
                        </li>

                        <li>
                          If firing on the same target multiple times and Recoil or Reloading is not a factor, the Aim position is maintained until the character decides to switch targets
                        </li>
                      </ul>
                      <br>

                      <li>
                        <strong>SUSTAINED FIRE:</strong> Sustained Fire only applies to Burst Fire Weapons, and thus the Burst Fire Skill Check.  Modifiers will be covered in greater detail in the Modifiers Section, but as far as Action Point Spending is concerned only the following needs to be understood:
                      </li>
                      <ul>
                        <li>
                          Firing a single shot with a fully-automatic weapon uses the appropriate skill type represented by either the Pistols (if one handed) or Rifles (if two handed, carbines and SMG's included) Skill
                        </li>

                        <li>
                          Once a character decides to Fire a Fully Automatic Weapon as a Burst, they use the Burst Fire Skill and for the sake of simplicity, each Action fires Three rounds per attack.  This includes the First “Opening” Action, and each sequential Action afterwords as Sustained Fire
                        </li>

                        <li>
                          Recoil can be a major issue in controlling Sustained Fire and Strength Checks should be common, though Modifiers and Tactical Gear can help
                        </li>
                      </ul>
                    </ul>
                  </ul>
                </ul><!--END RANGED COMBAT SECTION-->
                <br>

                <li>
                  <strong>TYPES OF ATTACKS:</strong> Both Melee and Ranged Combat Manuevers have two types of strikes which are highly  important to both declare when spending Actions, and understand the difference now that general mechanics have been covered
                </li>
                <br>
                <ul>
                  <li>
                    <strong>QUICK / FAST ATTACKS –</strong> A Quick or Fast strike is a general strike where the character is not concerned with where exactly they hit their mark, but need to do it fast and / or often. Essentially this means striking as soon as possible.  When a quick strike is successful, the character then rolls Percentile again on the Random Hit Chart to determine where the strike lands.  The Random Hit Chart is listed below, if the target is struck in the back then simply mirror the results as appropriate (Already programmed in, just use the RANDOM HIT button):
                  </li>
                  <br>

                  <li>
                    <strong>TARGETED / FOCUSED ATTACKS –</strong> A Targeted or Focused Strike must be declared beforehand to specify EXACTLY what the character is aiming for.  This costs an Additional Action to hold the attack until the best possible moment or simply focus their aim.  The MODIFIER section will cover the Targeted Strike with considerably more detail
                  </li>
                </ul>
                <br>
                
              <li>
                <strong>SAVING ACTIONS:</strong> Finally, there is Saving Actions for use outside of your own Turn but still within the three second Combat Round.  These are used to “interrupt” another characters Action Point spending during their regular turn.  This is how you Block, Dodge, open fire when a target breaks cover, or simply perform any other actions once the timing makes sense.
              </li>
              <br>

              <ul>
                <li>
                  <strong>BLOCKING ATTACKS:</strong> If a character Saves an Action during their turn, and then another character SUCCESSFULLY Strikes them, the targeted character may attempt a Block Manuever.  In order to successfully perform the Block, the Defending Character adds their Block Rating to the Attacking characters Successful Roll to Strike.  If their Percentile Roll is under the Modified Successful Attack Roll, then the Attack is <strong>Deflected</strong> and ignored or transfered to the blocking utensil.  For example, consider the following scenario:
                </li>
                <ul>
                  <li>
                    Attacking character performs a successful Targeted Swing at the Defending characters head with a roll of a 44
                  </li>

                  <li>
                   Defending character had Saved Two Actions on their turn, anticipating this possibility
                  </li>

                  <li>
                    Defending character Spends One of the Two Saved Actions to attempt to perform a block
                  </li>

                  <li>
                    This means to successfully Block, the Defending character must roll under 61 to deflect the blow
                  </li>
                  <ul>
                    <li>
                      If the Defending character fails, the Attacking characters strike lands uninhibited
                    </li>

                    <li>
                      If the Defending character barely succeeds, the Attacking character performs a Strength Check as usual, but rather than the Effect (Damage) of the Strike (covered later) being applied to the intended target, it is applied to the blocking utensil such as one of the following:
                    </li>
                    <br>

                    <ul>
                      <li>
                        <strong>Defender's Shield:</strong>
                      </li>
                      <ul>
                        <li>
                          <strong>Storytellers: Defender may need to make a successful Strength Check with Modifiers (usually a significant bonus unless the Attacker is using a Weighted or Heavy Two Handed Weapon) to prevent the shield from being knocked from their hands</strong>
                        </li>

                        <li>
                          If Attacker is using an appropriate weapon and rolls well with their own Strength Check they may damage the shield itself
                        </li>
                      </ul>
                      <br>

                      <li>
                        <strong>Defenders Weapon:</strong>
                      </li>
                      <ul>
                        <li>
                          Defender must make a successful Weapon Skill Check with Modifiers from the Attackers Strength Check to prevent being disarmed from the force of the attack
                        </li>

                        <li>
                          For every 2 that the Attacking character rolls under their Strength Check the Defending character suffers a -10 to their Weapon Skill Check for the purpose of being Disarmed by the Attack
                        </li>
                      </ul>
                      <br>

                      <li>
                        <strong>Defenders Hand / Foot or Forearm / Shin:</strong> Still better than getting nailed in the dome...The forearm and shins seem almost designed to take impact reasonably well and heal a little quicker than the Upper Arm or Thigh
                      </li>
                      <ul>
                        <li>
                          If the roll is particularly bad the dominant Hand or Foot are struck and recieves the Damage
                        </li>
                        <ul>
                          <li>
                            These are used more regularly with considerably more finesse, and injury can be more significant to the combat outcome
                          </li>
                        </ul>

                        <li>
                          If the roll is only reasonably bad, but still successful the non-dominant Shin or Forearm receive the damage
                        </li>
                      </ul>
                    </ul>
                  </ul>
                  <br>

                  <li>
                    If the Defending character clearly succeeds then the Strike is deflected without incident
                  </li>
                  <ul>
                    <li>
                      It is important to note that attempting to block a Melee Weapon Strike or Incoming Fire with your bare hands, you may save your life by preventing the blow to the Head but unless something amazing happens you are going to end up severely injured!
                    </li>

                    <li>
                      Since the Defending character saved Two Actions and only spent One to successfully Block, they can now spend their last Saved Action to perform a Fast Counter Attack!
                    </li>
                  </ul>

                </ul><!--END BLOCKING SUBCATEGORY-->
                <br>

                <li>
                  <strong>DODGING ATTACKS:</strong> Similarly, Dodging Attacks functions in the exact same way.  Sometimes it makes more sense to simply avoid an attack altogether instead of trying to deflect it.  The tactical choice between Blocking and Dodging have obvious implications, especially when engaged with a particularly strong enemy in Melee Combat or attempting to avoid an incoming projectile
                </li>
                <ul>
                  <li>
                    It is of the utmost importance that you understand that no character can consistently Dodge bullets or gunfire, that is what the Serpentine Motion mentioned previously is for!
                  </li>

                  <li>
                    A character CAN Dodge both Melee and Thrown Weapons Strikes 
                  </li>

                  <li>
                    A character CAN Dodge Arrows from Archery Weapons and Crossbow Bolts if they are fired from Long Range (which will be explained in the Modifier Section)
                  </li>

                  <li>
                    If the Defending character saves an Action, they may attempt a Dodge against a Successful Strike
                  </li>
                  <ul>
                    <li>
                      Add the characters Dodge Rating to the Strike Roll, this determines the odds of success for the Dodge Check.  For example:
                    </li>
                    <ul>
                      <li>
                        Attacking character successfully passes their Modified Weapon Check with a roll of 22
                      </li>

                      <li>
                        Defending character has a Dodge Rating of 10, making their odds of success 32
                      </li>
                    </ul>
                  </ul>

                  <li>
                    On Success the Attacker's Strike is avoided entirely
                  </li>

                  <li>
                    On Failure the Strike lands as normal on its intended target
                  </li>

                </ul><!--END DODGE SUBCATEGORY-->

              </ul>

            </ul>

            <p class='text-center'><u><strong>VEHICULAR & MOUNTED COMBAT</strong></u></p>
            <p class='tab'>
              As the driver, operator, or pilot of any vehicle or animal, Combat Manuevers and Action Point spending can be tricky.  A lot of your time will be spent “Waiting” until opportune moments, or adjusting speed or direction to attempt to manifest these moments altogether.  <strong>Storytellers act accordingly, and always, always, always remember a Combat Round is only Three Seconds!</strong> Acceleration and “Catching up” to another vehicle might take significant amounts of time.  Points to note are as follows: 
            </p>

            <ul>
              <li>
                One Action will always be spent <strong>Concentrating</strong> on whatever is necessary to maintain control of the vehicle, steadily assessing the situation
              </li>

              <li>
                Hand and Foot coordination are going to be the primary Action Point use
              </li>

              <li>
                Maintaining course (<strong>HOLDING COURSE</strong>) OR turning the wheel or guiding the Vehicle (<strong>CHANGING COURSE</strong>) cost One Action
              </li>

              <li>
                Accelerating or Decelerating (Braking) will cost One Action to begin the process
              </li>

              <li>
                Changes between these things are often, any change uses a Vehicle Skill or Horsemanship Check with Modifiers to determine effectiveness
              </li>
              <ul>
                <li>
                  Critical Success' (Low Rolls) enhance the rate that opportunity occurs, or success of a Risky Skill Check
                </li>

                <li>
                  Moderate Success' (Medium Success Rolls) guarantee gradual increase in opportunity
                </li>

                <li>
                  Low Success' probably means you need to spend another Action to Recover control of the ride, vehicle, or animal
                </li>

                <li>
                  Failure means you lose control!  Depending on circumstances you might crash, be thrown from the animal or vehicle, or have a chance to Recover.  <strong>Storytellers act accordingly!</strong>
                </li>
              </ul>
              <br>

              <li>
                As long as you can spend an Action to Concentrate on maintaining control of your Ride, you may spend Actions as needed.  Keep in mind:
              </li>
              <ul>
                <li>
                  Concentration is key, and has a MANDATORY single Action Point Cost.
                </li>

                <li>
                  Hand Position is critical to both <strong>Holding & Changing Course</strong> costing an additional Action Point unless you are certain of your ability to Regain Control once Failure occurs
                </li>
              </ul>

              <li>
                Melee attacks from vehicles might lead to the character overextending themselves and losing their balance on poor rolls, an Agility Check might make sense to see if they are thrown overboard!
              </li>

              <li>
                Everything in Combat is a High Risk Manuever, Vehicular or Mounted Skill Checks are not any different!
              </li>

              <li>
                High speed collisions can ruin your day!  <strong>Storytellers act appropriately!</strong>  Wear a seatbelt or suffer grievous injury!
              </li>
            </ul>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingFive">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='strikesBtn' type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              STRIKES & L.O.S
            </button>
          </div>

          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
              
              <p class='tab'>
                Now that we know HOW we interact with the world, we can rationally discuss WHAT we are actually doing in game.  Skill Checks should be understood at this point, but Combat Skill Checks operate a little bit differently.  For one they are much more complex and specific compared to the aforementioned General or Risky Skill Checks.  What you actually accomplish in such extreme haste is represented here.  The following applies to attempting to Strike a target by using a <strong>Combat Skill Check</strong>, the <strong>RECOMMENDED (and thus PROGRAMMED so you just need to understand HOW to use it!)</strong> Order of Operations is as follows:
              </p>

              <ul>
                <li>
                  Once Action Point cost is determined it is time for the character to Roll a <strong>Combat Skill Check</strong> in order to successfully strike the target
                </li>

                <li>
                  The result of this role is intended to speak for itself, though in order to do that we have to cover a few key concepts first.  The Modifiers here work exactly like the Modifiers mentioned previously, there is just more specific patterns with the main idea being that all of the following information about the target ALWAYS intermix to determine the <strong>Likelihood of Success:</strong>
                </li>
                <br>
                <ul>
                  <li>
                    <strong>SIZE:</strong> Target Size should be pretty self explanatory.  It's obviously easier to hit a beach ball than an apple, no matter what tool you are using to attempt your strike, be it your fist or a firearm
                  </li>
                  <br>

                  <li>
                    <strong>SPEED:</strong> Both the Attacker's and Defender's movement speed affect the likelihood of success.
                  </li>
                  <ul>
                    <li>
                      Line of Sight is highly important when calculating this modifier.  For instance if a target is moving high speeds perpendicular (across) to the Attackers Line of Sight the negative modifier will be much higher than if the target is moving high speeds towards or away from the target
                    </li>

                    <li>
                      f the Attacker is moving at high speeds and trying to strike a stationary target they will have more trouble than if the target is moving in the same direction near the same rate of motion
                    </li>

                    <li>
                      If both the Attacker and Defender are moving, parallel vs. perpendicular is definitely a major factor as well as whether or not they are moving towards or away from one another
                    </li>
                  </ul>
                  <br>

                  <li>
                    <strong>VISIBILITY:</strong> Visibility refers primarily to light level and the presence of dust, smoke, fog, or inclement weather
                  </li>
                  <ul>
                    <li>
                      Cover and concealment have their own effects which will be addressed shortly
                    </li>
                  </ul>
                  <br>

                  <li>
                    <strong>RANGE (Distance):</strong> Range is also fairly self evident and only applies to Ranged Combat.  The idea is that if a target is exceptionally close the character may receive a bonus to strike, whereas if they are far away the Attacker recieves a negative Modifier
                  </li>
                  <ul>
                    <li>
                      Range is highly pertinent to thrown or archery weapons!  This is mainly due to the necessity of the missiles Arc of Trajectory
                    </li>
                  </ul>
                  <br>

                  <li>
                    <strong>ENVIRONMENTAL EFFECTS:</strong> Environmental Effects consist mostly of high winds, unusual circumstances like sprinkler systems, and poor weather conditions
                  </li>

                </ul><!--END MODIFIER LIST-->
                <br>

                <li>
                  Once the die is cast and the Roll to Skill Check is made, record the results and determine the applicable Modifiers to the Characters Combat Skill. Based on these modifiers the Roll to Strike will either be a Success or a Failure.  Now we need to determine the <strong>ROLL TYPE:</strong>
                </li>
                <br>

                <ul>
                  <li>
                    If the Roll is a Success, divide the <strong>Likelihood of Success</strong> (Result needed after Modifiers) by Three.  IE: Characters Combat Skill is 94 but their Likelihood of Success is 64 after Modifiers.  Divided by three, the Roll Type will be as follows in increments of 21:
                  </li>
                  <br>

                  <ul>
                    <li>
                      <strong>MINOR (GLANCING) HIT –</strong> The character barely Strikes the target, Damage and Effects of the Strike will probably be negligible though still causing pain
                    </li>
                    <ul>
                      <li>
                        Following the example above, this would be a Roll of: ~ 43 - 64
                      </li>
                    </ul>
                    <br>

                    <li>
                      <strong>DIRECT HIT –</strong> The character lands a solid hit on the target, Damage and Effects are going to have serious implications, including severe injury or death.
                    </li>
                    <ul>
                      <li>
                        For example above, this would be a Roll of: ~ 22 – 42
                      </li>
                    </ul>
                    <br>

                    <li>
                      <strong>MAJOR (DECISIVE) HIT –</strong> This is a devastating attack that strike their target, and often have the capacity to disable or remove opponents.  Interpretations may vary on a case by case basis but this is where mortal wounds are inflicted, broken bones occur, gaps in the targets armor are found, entry and exit wounds happen, etc.
                    </li>
                    <ul>
                      <li>
                        For the given example, this would be a Roll of: 01 – 21
                      </li>
                    </ul>
                    <br>

                  </ul><!--END HIT TYPES-->

                  <li>
                    If the Roll is a Failure, divide the <strong>Likelihood of Failure</strong> (100 minus the <strong>Likelihood of Success</strong>) by Three.  Most times it makes more sense to just treat any Failure as just that, nothing more than a missed opportunity.  Sometimes though, it may make more sense for the Storyteller to actually address them!  In the given example, the Likelihood of Failure would be 36, so the Failure Types occur in increments of 12
                  </li>
                  <br>

                  <ul>
                    <li>
                      <strong>MINOR (SLIGHT) FAILURE –</strong> The character barely misses.  In the case of Ranged Combat or a mass Melee, the character may strike a party near the intended target instead
                    </li>
                    <ul>
                      <li>
                        <strong>If the Storyteller decides this is appropriate, use the Random Hit Chart for the receiving party</strong>
                      </li>

                      <li>
                        In the same example, this would be a Roll of: ~ 65 - 76
                      </li>
                    </ul>
                    <br>

                    <li>
                      <strong>DIRECT FAILURE –</strong> The character definitely missed their mark
                    </li>
                    <ul>
                      <li>
                       In Melee Combat it may be appropriate to have the Attacking Character perform an Agility Check to maintain balance if they are trying to strike from a vehicle or horseback, were running full speed when they attempted the strike, or any other similar excursion
                      </li>

                      <li>
                        In the example, this would be a Roll of: ~ 77 - 88
                      </li>
                    </ul>
                    <br>
                    
                    <li>
                      <strong>MAJOR (DECISIVE) FAILURE –</strong> Not only did the character miss their target, but they did so in a horrible fashion
                    </li>
                    <ul>
                      <li>
                       Melee Attackers must make an Agility Check to maintain their balance, or additional Actions might need to be spent to recover from overextending their reach
                      </li>

                      <li>
                        Ranged Attackers are impacted significantly less but might need to make a Strength Check to manage Recoil or something along those lines
                      </li>

                      <li>
                        For this example, the Roll would be: ~ 89 - 100
                      </li>
                    </ul>
                  </ul><!--END LIKELIHOOD OF FAILURE-->
                </ul>
              </ul>

              <h5 class='text-center'><strong>COMPLEX STRIKING MODIFIERS</strong></h5>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>SIZE</th>
                      <th scope="col" class='text-center'>DISTANCE</th>
                      <th scope="col" class='text-center'>SPEED</th>
                      <th scope="col" class='text-center'>VISIBILITY</th>
                      <th scope="col" class='text-center'>ENVIRONS</th>
                      <th scope="col" class='text-center'>MODIFIER</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class='text-center'>5+ ft diameter<br>-Cow<br>-Horse or larger</td>
                      <td class='text-center'>Point Blank</td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'>75</td>
                    </tr>

                    <tr>
                      <td class='text-center'>4 ft diameter<br>-Deer</td>
                      <td class='text-center'>Nearby</td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'>50</td>
                    </tr>
                    
                    <tr>
                      <td class='text-center'>3 ft diameter<br>-Large Shield<br>-Large Dog<br>-Small Deer</td>
                      <td class='text-center'>Close Range</td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'>25</td>
                    </tr>
                    
                    <tr>
                      <td class='text-center'>2.5 ft diameter<br>-Small Shield<br>-Medium dog</td>
                      <td class='text-center'>Short Range</td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                      <td class='text-center'>10</td>
                    </tr>

                    <tr>
                      <td class='text-center'>2 ft diameter<br>-Shoulder Width</td>
                      <td class='text-center'>Reasonable Range</td>
                      <td class='text-center'>Still or liesurely</td>
                      <td class='text-center'>Ample</td>
                      <td class='text-center'>Clear</td>
                      <td class='text-center'>0</td>
                    </tr>
                    
                    <tr>
                      <td class='text-center'>1.5 ft diameter<br>-Center Mass<br>-Small Dog</td>
                      <td class='text-center'>Long Range</td>
                      <td class='text-center'>Jogging</td>
                      <td class='text-center'>Dusk / Dawn<br>Low Light</td>
                      <td class='text-center'>Heavy rain</td>
                      <td class='text-center'>-10</td>
                    </tr>

                    <tr>
                      <td class='text-center'>1 ft diameter<br>-Head</td>
                      <td class='text-center'>Down Range</td>
                      <td class='text-center'>-Sprinting<br>-15 MPH or less</td>
                      <td class='text-center'>-Dark<br>-Camoflauge<br>-Heavy rain / Sprinkler system</td>
                      <td class='text-center'>Heavy winds & rain / dust</td>
                      <td class='text-center'>-25</td>
                    </tr>
                    
                    <tr>
                      <td class='text-center'>6” diameter<br>-Face<br>-Leg<br>-Arm</td>
                      <td class='text-center'>Far away</td>
                      <td class='text-center'>15 – 40 MPH</td>
                      <td class='text-center'>-Very Dark<br>-Heavy smoke / dust</td>
                      <td class='text-center'>High winds rain / dust / hail</td>
                      <td class='text-center'>-50</td>
                    </tr>

                    <tr>
                      <td class='text-center'>3” diameter<br>-Groin<br>-Joint<br>-Hand<br>-Foot</td>
                      <td class='text-center'>Extreme Range</td>
                      <td class='text-center'>40 – 60 MPH</td>
                      <td class='text-center'>-Barely visible<br>-Strobes</td>
                      <td class='text-center'>Extreme winds & debris</td>
                      <td class='text-center'>-75</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Less than 3” diameter<br>-Eyeball<br>-Nose</td>
                      <td class='text-center'>Barely Visible</td>
                      <td class='text-center'>60+ MPH</td>
                      <td class='text-center'>Blind</td>
                      <td class='text-center'>Gale force winds & debris</td>
                      <td class='text-center'>-100</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <ul>
                <li>
                  <strong>EXAMPLE ONE:</strong> A sharpshooter is hunting a large brown bear in the forest and declares a Targeted Strike (costing an additional action) for the animals Head from approximately 200 yards as clouds are forming while the sun sets
                </li>
                <br>
                <ul>
                  <li>
                    With fortune on their side, the character Rolls a 19
                  </li>
                  <ul>
                    <li>
                      Size : 1.5' diameter = -10
                    </li>

                    <li>
                      Range : Long Range = -50
                    </li>

                    <li>
                      Speed : Still or Liesurely, the animal has no idea whats about to happen = 0 
                    </li>

                    <li>
                      Visibility : Low Light = -10
                    </li>

                    <li>
                      Environs : Clear = 0
                    </li>

                    <li>
                      Total Modifiers = -70
                    </li>

                    <li>
                      Characters Rifles Skill is 104 so the <strong>Likelihood of Success</strong> = 34
                    </li>
                    <ul>
                      <li>
                        34 divided by 3 is approximately 11
                      </li>
                      <ul>
                        <li>
                          Major Hit is 01 – 11
                        </li>
                        
                        <li>
                          Direct Hit is 12 – 22
                        </li>

                        <li>
                          Minor Hit is 23 – 34
                        </li>
                      </ul>
                    </ul>
                  </ul>

                  <li>
                    Character lands a Direct Hit (Rolled a 19) to the animal's Head with a high velocity, large caliber Hunting Rifle. The Bear is almost certainly killed instantly and it really is that simple!
                  </li>
                </ul>
                <br>

                <li>
                  <strong>EXAMPLE TWO:</strong> It's a dark and stormy night, and the characters are chasing their target through the city streets.  Two characters are in a car moving to intercept, the driver is maintaining control of the vehicle, the passenger has Saved all of their Actions until the target becomes visible. They finally sprint out of the alley at the end of the block, the driver accelerates, and the passenger makes a Targeted Strike for the leg with a pistol because they need them alive
                </li>
                <br>
                <ul>
                  <li>
                    Character Rolls 31 with their Pistols Skill at 126
                  </li>
                  <ul>
                    <li>
                      Size : 6” diameter = -50
                    </li>

                    <li>
                      Range : Long Range (for a pistol) = -10
                    </li>

                    <li>
                      Speed : Target is sprinting and reasonably quick = -25
                    </li>

                    <li>
                      Visibility : Dark = -25
                    </li>

                    <li>
                      Environs : Heavy Rain = -10
                    </li>

                    <li>
                      Total Modifiers = -115
                    </li>
                  </ul>

                  <li>
                    Characters Pistols Skill is 126 which means the <strong>Likelihood of Success</strong> is going to be 11. They inevitably miss and waste their ammunition with a Major Failure, but pass their Strength Check for Recoil and the driver is accelerating quickly
                  </li>

                  <li>
                    Character decides to try again once the vehicle is a little closer, this time for Center Mass and Rolls 25
                  </li>
                  <ul>
                    <li>
                      Size : 1.5' diameter = -10
                    </li>

                    <li>
                      Range : Reasonable = 0
                    </li>

                    <li>
                      Speed : Target is still sprinting = -25
                    </li>

                    <li>
                      Visibility : Still Dark = -25
                    </li>

                    <li>
                      Environs : Heavy Rain = -10
                    </li>

                    <li>
                      Total Modifiers = -70
                    </li>

                    <li>
                      126 – 70 = 56 for the <strong>Likelihood of Success</strong>
                    </li>
                    <ul>
                      <li>
                        Major Hit : ~ 01 – 18
                      </li>

                      <li>
                        Direct Hit : ~ 19 – 37
                      </li>

                      <li>
                        Minor Hit : ~ 38 – 56
                      </li>
                    </ul>  
                  </ul>

                  <li>
                    Target takes a Direct Hit to Center Mass so likely the Lower Ribs or Stomach (covered in further detail in Strike Effects), but they pass their Willpower Check and keep running! However now they are going to be suffering serious blood loss, which is bound to slow them down eventually.  Hopefully the players can catch him in time to stabilize him!
                  </li>

                </ul><!--END EXAMPLE TWO-->
                <br>

                <li>
                  <strong>EXAMPLE THREE:</strong> Following the scenario in example two, a third character has already moved into the alley that the now wounded target is running into and has hidden themselves behind a dumpster. This character has Successfully passed a Concealment Skill Check so they can see the target continuing their adrenaline fueled rush to escape without revealing themselves.  This character saves his Actions until they know the target is bottlenecked in between the dumpster with the overflowing piles of garbage and the building wall, and will make their Action use One to manuever to block the choke point, and Two to attempt a Grab (Grappling has not been covered in detail yet, but for all intents and purposes a Grab starts a chain of events and is essentially the first "Strike" to serve as the catalyst)
                </li>
                <br>
                <ul>
                  <li>
                    Character has a Grappling Skill of 94 and Rolls 82, obviously this is a Failure but for arguments sake consider the following:
                  </li>
                  <ul>
                    <li>
                      Size: The choke point is approximately 2.5' wide, and characters armspan can easily cover this area = 10
                    </li>

                    <li>
                      Range: No effect in Melee = 0
                    </li>

                    <li>
                      Speed: Negated by the choke point = 0
                    </li>

                    <li>
                      Visibility: Very Dark (no lights in alley) = -50
                    </li>

                    <li>
                      Environs: Heavy Rain (slippery footing) =  -10
                    </li>

                    <li>
                      Total Modifiers = -50
                    </li>
                    <ul>
                      <li>
                        <strong>Likelihood of Success:</strong> 94 – 50 = 44 thus the <strong>Likelihood of Failure</strong> = 56
                      </li>

                      <li>
                        56 divided by 3 = ~ 18
                      </li>
                      <ul>
                        <li>
                          Minor Failure : Likelihood of Success + 18 = ~ 45 – 62
                        </li>

                        <li>
                          Direct Failure : ~ 63 - 81
                        </li>

                        <li>
                          Major Failure : ~ 82 – 00
                        </li>
                      </ul>
                    </ul>
                  </ul>

                  <li>
                    This character likely slipped on some wet garbage they weren't aware of in the dark but they definitely missed the tackle, and now needs to pass an Agility Check to maintain their footing.  The target shoulders past them and the chase continues!
                  </li>
                </ul><!--END EXAMPLE THREE-->

              </ul>

              <p class='tab'>
                For the sake of simplicity it is highly recommended that the <strong>Storytellers use the General Skills Modifier Table from earlier just to keep the game going!</strong>  If there is an argument about the <strong>Likelihood of Success (Storyteller has the LoS CALC button)</strong> afterwards then you can refer to the Complex Striking Modifier Table, but <strong>ALWAYS remember the Storyteller ALWAYS has final say</strong>.  Weird shit happens all the time!  If a Player can convince the Storyteller to change their position, then just consider that Fate at work!
              </p> 

              <p class='text-center'>
              <strong>Storytellers for continuities sake, just try to complete the following sentence</strong> with the understanding you have after learning the "Hard Way" of doing things:
              <br> 
              <strong>REMEMBER THESE "RULES" ARE MERELY GUIDELINES, NOT LAW!</strong>
              </p>

              <p class='text-center'>
                <strong>
                  “Based on what the player has told me they are trying to do and the conditions in which they are trying to do it, I would say their Likelihood of Success is ____________”
                </strong>
              </p>

              <h5 class='text-center'><strong>SIMPLE STRIKING MODIFIERS</strong></h5>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>GENERAL COMPLEXITY</th>
                      <th scope="col" class='text-center'>MODIFIER</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class='text-center'>Simple</td>
                      <td class='text-center'>75</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Easy</td>
                      <td class='text-center'>50</td>
                    </tr>

                    <tr>
                      <td class='text-center'>High</td>
                      <td class='text-center'>25</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Likely</td>
                      <td class='text-center'>10</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Reasonable</td>
                      <td class='text-center'>0</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Unlikely</td>
                      <td class='text-center'>-10</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Low</td>
                      <td class='text-center'>-25</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Difficult</td>
                      <td class='text-center'>-50</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Convoluted or Complicated</td>
                      <td class='text-center'>-75</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Unrealistic or Exceptionally Challenging</td>
                      <td class='text-center'>-100</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Comical or Relying on Luck</td>
                      <td class='text-center'>-125 or more</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <h5 class='text-center'><u><strong>SPECIALIZED ATTACKS</strong></u></h5>

              <ul>
                <li>
                  <strong>BURST FIRE:</strong> Have special implications which are determined by the Roll Type, but this is entirely focused on the fact that <strong>each Burst Attack fires at least three rounds</strong>.  Special Rules apply to these scenarios:
                </li>
                <br>

                <ul>
                  <li>
                    <strong>MAJOR HITS –</strong> mean that all three rounds hit their target
                  </li>
                  <ul>
                    <li>
                      Due to Recoil and for the sake of simplicity each round should consult the RANDOM HIT button to determine Hit Location
                    </li>
                    <ul>
                      <li>
                        Just because all three rounds strike, this doesn't mean they all strike as a Major Hit! Getting hit three times in succession is bad enough as it is
                      </li>

                      <li>
                        Once the Location of the Strike is determined by the RANDOM HIT button, the Attacking character should Roll Percentile again and consult the RANDOM HIT SEVERITY TABLE below
                      </li>
                    </ul>
                  </ul>

                  <li>
                    <strong>DIRECT HITS –</strong> mean that two of the three rounds fired hit their mark
                  </li>
                  <ul>
                    <li>
                      Again the Attacking character should Roll the RANDOM HIT button for each successful hit
                    </li>

                    <li>
                      After determining the Hit Location the Attacking character should consult the Random Hit Severity Table for each successful Strike
                    </li>
                  </ul>

                  <li>
                    <strong>MINOR HITS –</strong> mean that only one of the three rounds fired hit their mark
                  </li>
                  <ul>
                    <li>
                      RANDOM HIT button for the Strike
                    </li>

                    <li>
                      Random Hit Severity Table for effectiveness 
                    </li>
                  </ul>
                </ul><!--END BURST FIRE-->
                <br>

                <li>
                  <strong>EXPLOSIVE ATTACKS:</strong> Weapons like grenades, bombs, rockets, traps, artillery, and potentially Shotguns with scattershot shells at long range also follow their own subset of rules.  These operate much like the Burst Fire rules mentioned above:
                </li>
                <br>
                <ul>
                  <li>
                    The Attacking character Rolls the <strong>Combat Skill Check</strong> for the appropriate skill type as usual
                  </li>
                  <ul>
                    <li>
                      Thrown Weapons for grenades, bombs, or molotov cocktails
                    </li>

                    <li>
                      Special Weapons for gear like Rocket or Grenade Launchers
                    </li>

                    <li>
                      Weapon Systems for Ordinance or things like pre-set, manually or remote detonated traps
                    </li>
                  </ul>
                  <br>

                  <li>
                    <strong>MAJOR HITS –</strong> Means that the targets within the immediate vicinity are dead, horribly wounded, or outright incapacitated and out of the fight (unless exceptionally heavily armored, in which case the Storyteller takes control)
                  </li>
                  <ul>
                    <li>
                      Any additional targets within the Effective Radius of the Blast (<strong>Storyteller's choice</strong>) treat the Strike as though it was a Direct Hit.  See below
                    </li>
                  </ul>
                  <br>

                  <li>
                    <strong>DIRECT HITS –</strong> Means that the Attacking character gets to Roll Percentile to determine the number of threatening fragments from the blast that successfully Strike all characters within the Effective Radius of the Blast (<strong>Storyteller's choice</strong>).  Personally I approve of the “Rule of Threes” but <strong>if the Storyteller decides they want more or less just Divide the Percentile Roll as appropriate</strong>
                  </li>
                  <ul>
                    <li>
                      Storyteller decides the character has potential to receive 5 hits means Percentile is based by 20
                    </li>
                    <ul>
                      <li>
                        01 – 20 = 5 Strikes
                      </li>

                      <li>
                        21 – 40 = 4 Strikes
                      </li>

                      <li>
                        41 – 60 = 3 Strikes
                      </li>

                      <li>
                        61 – 80 = 2 Strikes
                      </li>

                      <li>
                        81 – 100 = 1 Strikes
                      </li>
                    </ul>

                    <li>
                      <strong>Storytellers adjust as necessary!</strong>  Other areas are likely “peppered” but aren't threatening to character survival or functionality.  Also keep in mind that the concussion of the blast is likely to put the character into Shock...
                    </li>

                    <li>
                      <strong>Storytellers please note that it may just be easier to declare a successful explosion wreaks havoc on its victims</strong> and that should be enough said...but in the case where the players get caught in a blast, they will probably want to argue for their own survival.  Try to keep it a game or at least give them a heroic death!  
                    </li>
                  </ul><!--END DIRECT HITS-->
                  <br>

                  <li>
                    <strong>MINOR HITS –</strong> Mean that only one area for this particular character is struck. Again, multiple areas are likely “peppered” or “fragged” but won't threaten target operability
                  </li>
                </ul>
                <br>

                <li>
                  <strong>FOR EACH SUCCESSFUL STRIKE:</strong>
                </li>
                <ul>
                  <li>
                    Roll on the Random Hit Chart to determine Hit Location
                  </li>

                  <li>
                    Then Roll on the Severity Table to determine the Hit Type
                  </li>

                  <li>
                    Consult the Ballistics section under the Strike Effects & Damage tab
                  </li>
                </ul>
              </ul><!--END SPECIALIZED ATTACKS-->

              <h5 class='text-center'><strong>RANDOM HIT SEVERITY</strong></h5>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>PERCENTILE ROLL</th>
                      <th scope="col" class='text-center'>RESULT</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class='text-center'>01 - 33</td>
                      <td class='text-center'>Major Hit</td>
                    </tr>

                    <tr>
                      <td class='text-center'>34 - 66</td>
                      <td class='text-center'>Direct Hit</td>
                    </tr>

                    <tr>
                      <td class='text-center'>67 - 100</td>
                      <td class='text-center'>Minor Hit</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingSix">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='effectsBtn' type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              EFFECTS & DAMAGE
            </button>
          </div>

          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">

              <p class='tab'>
                Now that we understand what needs to happen in order to be successful, we can now discuss what success actually means.  In many cases it should prove to be relatively simple, but there are some factors that can definitely change the outcome of the situation.  
              </p>

              <ul>
                <li>
                  <strong>COVER – TARGETED STRIKES:</strong> Often when a target is behind cover, the character will make attempt a Targeted Strike against the exposed area.  In many circumstances there will be multiple parts of the body which are NOT in cover, so a successful Strike should speak for itself.  Consider the following example:
                </li>
                <ul>
                  <li>
                    A character successfully fires on a target behind cover where only their chest, shoulders, arms and head are exposed.  Rather than get bogged down in where is actually struck (which you CAN do by dividing up the exposed areas using the Percentile Roll), the <strong>Storyteller should consider making full use of the Major, Direct, and Minor Hit methods</strong> described earlier:
                  </li>
                  <br>

                  <ul>
                    <li>
                      A <strong>LOW MAJOR HIT</strong> could easily be interpreted that the target is struck in the head, neck, or face likely leading to instantaneous death or defeat
                    </li>
                    <li>
                      A <strong>HIGH MAJOR HIT</strong> probably means that they delivered a life threatening Strike to the chest and all of its vital organs
                    </li>
                    <li>
                      A <strong>LOW DIRECT HIT</strong> may mean that the character still landed a potentially mortal Strike on the chest or shoulders, but it might take some time for them to succumb to blood loss
                    </li>
                    <li>
                      A <strong>HIGH DIRECT HIT</strong> likely represents a bone shattering wound to the shoulders, effectively disabling their ability to wield their own weapon effectively
                    <li>
                      A <strong>LOW MINOR HIT</strong> could mean that the target is hit in the arm or shoulder, still suffers severe pain and blood loss from the injury, but in the end its just a flesh wound
                    </li>
                    <li>
                      A <strong>HIGH MINOR HIT</strong> hurts like hell, still bleeds, but the target can definitely still operate if they fight through the pain
                    </li>
                    <br>

                    <li>
                      ALTERNATIVELY you <strong>COULD</strong> do something along the following, but all its going to do is slow everything down while you are determining what the Rolls mean since the situation varies from shot to shot and cover to cover.  It might be better to just use another Percentile Roll on the Random Hit Severity Table and let the dice speak for themselves!
                    </li>
                  </ul><!--END ITEM ONE-->
                </ul><!--END COVER: TARGETED STRIKES-->
                <br>
                
                <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>ROLL</th>
                      <th scope="col" class='text-center'>LOCATION</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class='text-center'>01 - 05</td>
                      <td class='text-center'>Neck</td>
                    </tr>


                    <tr>
                      <td class='text-center'>06 - 10</td>
                      <td class='text-center'>Face</td>
                    </tr>

                    <tr>
                      <td class='text-center'>11 - 20</td>
                      <td class='text-center'>Head</td>
                    </tr>

                    <tr>
                      <td class='text-center'>21 - 30</td>
                      <td class='text-center'>Left Ribs (Heart)</td>
                    </tr>

                    <tr>
                      <td class='text-center'>31 - 40</td>
                      <td class='text-center'>Right Ribs</td>
                    </tr>

                    <tr>
                      <td class='text-center'>41 - 50</td>
                      <td class='text-center'>Left Shoulder</td>
                    </tr>

                    <tr>
                      <td class='text-center'>51 - 60</td>
                      <td class='text-center'>Right Shoulder</td>
                    </tr>

                    <tr>
                      <td class='text-center'>61 - 70</td>
                      <td class='text-center'>Left Upper Arm</td>
                    </tr>

                    <tr>
                      <td class='text-center'>71 - 80</td>
                      <td class='text-center'>Right Upper Arm</td>
                    </tr>

                    <tr>
                      <td class='text-center'>81 - 90</td>
                      <td class='text-center'>Left Hand</td>
                    </tr>

                    <tr>
                      <td class='text-center'>91 - 100</td>
                      <td class='text-center'>Right Hand</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <li>
                <strong>COVER – RANDOM HIT CHART:</strong> In the event a character is simply trying to lay suppressive fire on a target in cover and hope for the best, use the Random Hit button as usual
              </li>
              <ul>
                <li>
                  If the area struck is behind dense or hard Cover, then the Strike is most likely ignored entirely!
                </li>
              </ul>
              <br>

              <li>
                <strong>COVER – SHIELDS:</strong> Even when a shield is not used to successfully Block an attack, it still provides some interference for striking certain areas depending on its size
              </li>
              <ul>
                <li>
                  When held, a shield will always interfere with strikes to the Hand & Forearm, and depending on size and conditions of the attempted Strike this may extend to cover additional areas such as the Thigh, Pelvic Area, and Midsection.  If it is on a characters back, then clearly the Back Shoulders, Upper Body, Midsection, and possibly Pelvic Area will be covered.  <strong>Storytellers act appropriately!</strong>
                </li>
              </ul>
              <br>

              <li>
                <strong>COVER – PENETRATION:</strong> While a wooden door might stop an arrow or a baseball bat, it will NOT stop a bullet unless it is a very small round.  Soft cover like drywall, wooden doors, fiberglass car doors, wooden shields, so on and so forth, can easily be penetrated by gunfire! <strong>Storytellers keep this in mind at all times!</strong>
              </li>
              <br>

            </ul><!--END FACTOR LIST-->

            <h5 class='text-center'><strong><u>CRITICAL HITS & FAILURES</u></strong></h5>

            <p class='text-center'>
              Don't forget about Criticals (double rolls IE: 11, 22, 66, 99)!  These are meant to reflect awesome and unpredictable outcomes on Combat Rolls.  Generally speaking:
            </p>

            <ul>
              <li>
                11 and 22 are the best possible criticals, and the Storyteller should represent these accordingly
              </li>

              <li>
                99 and 00 are the worst possible outcomes, again Storytellers keep this in mind
              </li>
            </ul>

            <h5 class='text-center'><strong><u>DAMAGE & IMMEDIATE EFFECTS</u></strong></h5>

            <p class='tab'>
              Damage is primarily determined by the type of Strike, be it Major, Direct, or Minor but there are also Damage Types consisting of the following (It is important to note that thrown weapons vary wildly, but will generally fall into the Melee categories and NOT Ballistic):
            </p>

            <h5 class='text-center'><strong>BLUNT ATTACKS</strong></h5>

            <p class='text-center'>
              These are strikes that are not intended to penetrate the targets skin, but deliver a lot of force over a reasonably small surface area
            </p>

              <ul>
                <li>
                  <strong>MAJOR BLUNT ATTACKS –</strong> These will break bones, inflict significant pain, and potentially knock the wind out of a target reducing their Endurance, Speed, Agility, and thus Actions
                </li>
                <ul>
                  <li>
                    <strong>Head Strikes –</strong> Have the capacity to knock a target unconscious or crush their skull
                  </li>
                  <ul>
                    <li>
                      Attacker performs a Strength Check to render target unconscious immediately (Unarmed)
                    </li>
                    <ul>
                      <li>
                        If using a weapon, a low roll could mean a fatal blow
                      </li>
                    </ul>

                    <li>
                      If Attackers Strength Check fails target still performs a Willpower Check to remain conscious
                    </li>

                    <li>
                      Even if successful all Mental Traits and Actions reduced by One (or more)
                    </li>

                    <li>
                      Target is Shocked (stunned) [ ½ Actions rounded down ]
                    </li>
                  </ul><!--END HEAD STRIKES-->

                  <li>
                    <strong>Body Strikes –</strong> Will definitely break bones, knock the wind out of the target and damage organs
                  </li>
                  <ul>
                    <li>
                      Willpower Check to test against Shock (½ Actions rounded down)
                    </li>

                    <li>
                      Physical Traits and Action Points reduced by One (or more) even if successful
                    </li>

                    <li>
                      Willpower Check against Pain anytime the Defender moves or else another Action is necessary to Force the move (serious negative Modifiers apply)
                    </li>
                  </ul>

                  <li>  
                    <strong>Limb Strikes –</strong> Broken bones or nerve damage and inhibit movement efficiency
                  </li>
                  <ul>
                    <li>
                      Willpower Check to test against Shock
                    </li>

                    <li>
                      Willpower Check against Pain when using the damaged limb determines if the move needs to be Forced (serious negative Modifiers apply)
                    </li>
                  </ul>
                </ul><!--END MAJOR BLUNT ATTACKS-->
                <br>

                <li>
                  <strong>DIRECT BLUNT ATTACKS –</strong> Might break bones or debilitate the limb based upon the Strength of the Attacker and the weapon used
                </li>
                <ul>
                  <li>
                    <strong>Head Strikes –</strong> Will at least stun the target, and may fracture the skull
                  </li>
                  <ul>
                    <li>
                      Target is Shocked (half actions)
                    </li>

                    <li>
                      In Melee the Attacker makes a Strength Check to induce a Willpower Check on the target to remain conscious
                    </li>

                    <li>
                      Even if the Attackers Strength Check Fails or Defenders Will Check Succeeds all Mental Traits and Actions are reduced by One (or more)
                    </li>
                  </ul>

                  <li>
                    <strong>Body Strikes –</strong> Certainly knock wind out of target, may break bones or damage organs
                  </li>
                  <ul>
                    <li>
                      Physical Traits and Actions reduced by One (or more)
                    </li>

                    <li>
                      Attacker makes Strength Check to determine bone / organ damage
                    </li>
                    <ul>
                      <li>
                        If successful target must make a Willpower Check against Shock (½ Actions)
                      </li>

                      <li>
                        Willpower Check against Pain to Force future moves (serious negative Modifiers apply)
                      </li>
                    </ul>
                  </ul>

                  <li>
                    <strong>Limb Strikes –</strong> Potentially break bones or cause nerve damage
                  </li>
                  <ul>
                    <li>
                      Attacker performs Strength Check to determine fracture or nerve damage
                    </li>
                    <ul>
                      <li>
                        If successful target must pass Willpower Check against Shock
                      </li>
                    </ul>

                    <li>
                      Target must test against Pain for Forcing future moves (serious negative Modifiers apply)
                    </li>
                  </ul>
                </ul><!--END DIRECT BLUNT ATTACKS-->
                <br>

                <li>
                  <strong>MINOR BLUNT ATTACKS –</strong> The attack causes significant bruising, but otherwise is simply painful
                </li>
                <ul>
                  <li>
                    Willpower Check against Pain for Forcing future moves (mild negative Modifiers apply)
                  </li>
                </ul>
              </ul><!--END BLUNT ATTACKS-->

              <h5 class='text-center'><strong>EDGED ATTACKS</strong></h5>
              <p class='text-center'>
                Consist of any weapon or attack intended to cut, slice, slash, chop, or otherwise open up the target causing blood loss and significant bone or organ damage
              </p>  

              <ul>
                <li>
                  <strong>MAJOR EDGED ATTACKS –</strong> These are often fatal or severly debilitating, rendering limbs inoperable or severing them entirely
                </li>

                <ul>
                  <li>
                    <strong>Head Strikes –</strong> Cleave or fracture the skull or remove the targets head entirely!
                  </li>
                  <ul>
                    <li>
                      Attacker makes a Strength Check to confirm the kill
                    </li>
                    <ul>
                      <li>
                        Knives probably wont kill or render the target unconscious, but may blind them or cause significant blood loss.  <strong>Storytellers shine on!</strong>
                      </li>
                    </ul>

                    <li>
                      If Attackers Strength Check fails target still performs a Willpower Check to remain conscious
                    </li>

                    <li>
                      Even if successful all Mental Traits and Actions reduced by One (or more)
                    </li>

                    <li>
                      Target is Shocked (stunned) [ ½ Actions rounded down ]
                    </li>

                    <li>
                      Significant Blood Loss occurs
                    </li>
                  </ul>

                  <li>
                    <strong>Body Strikes –</strong> Cut into or past bones to inflict mortal wounds to underlying organs!
                  </li>
                  <ul>
                    <li>
                      Attacker makes a Strength Check to determine severity based on target location
                    </li>
                    <ul>
                      <li>
                        Knives may only be effective against the targets underbelly for mortal wounds
                      </li>

                      <li>
                        For anything else this could easily be a kill, Storytellers act appropriately!
                      </li>
                    </ul>

                    <li>
                      Willpower Check to test against Shock (½ Actions rounded down)
                    </li>

                    <li>
                      Physical Traits and Action Points reduced by One even if successful
                    </li>

                    <li>
                      Willpower Check against Pain anytime the Defender moves or else another Action is necessary to Force the move (serious negative Modifiers apply)
                    </li>

                    <li>
                      Significant Blood Loss occurs
                    </li>
                  </ul>

                  <li>
                    <strong>Limb Strikes –</strong> Render the limb inoperable or may remove it entirely causing extreme blood loss!
                  </li>
                  <ul>
                    <li>
                      Attacker makes Strength Check to determine severity
                    </li>
                    <ul>
                      <li>
                        If successful target must make a Willpower Check to test against Shock
                      </li>

                      <li>
                        If failed target must perform a Willpower Check against Pain when using the damaged limb to determine if the move needs to be Forced (serious negative Modifiers apply)
                      </li>

                      <li>
                        Significant Blood Loss 
                      </li>
                    </ul>
                  </ul>
                </ul><!--END MAJOR EDGED-->
                <br>

                <li>
                  <strong>DIRECT EDGED ATTACKS –</strong> These attacks could cause vital or crippling wounds, the Attackers Strength Checks determine effectiveness
                </li>
                <ul>
                  <li>
                    <strong>Head Strikes –</strong> will at a minimum Shock the target, may prove fatal
                  </li>
                  <ul>
                    <li>
                      Attacker makes a Strength Check to determine effectiveness and whether or not its an immediate kill
                    </li>
                    <ul>
                      <li>
                        Again with the knives, may only blind or mangle the target but won't render them unconscious or out of the fight
                      </li>
                    </ul>

                    <li>
                      Target is Shocked (half actions) 
                    </li>

                    <li>
                      If the Attackers Strength Check fails, the target must perform a Willpower Check to remain conscious
                    </li>

                    <li>
                      Even if the Attackers Strength Check Fails or Defenders Will Check Succeeds all Mental Traits and Actions are reduced by One (or more)
                    </li>
                  </ul>

                  <li>
                    <strong>Body Strikes –</strong> Can certainly cause significant organ damage
                  </li>
                  <ul>
                    <li>
                      Attacker makes Strength Check to determine bone / organ damage and possibility of being an immediate kill
                    </li>
                    <ul>
                      <li>
                        If successful target must make a Willpower Check against Shock (½ Actions)
                      </li>
                      <ul>
                        <li>
                          Wound may be fatal but could take a little time to render target inoperable either from blood loss or organ damage
                        </li>

                        <li>
                          Again, knives are likely to only be this effective when targeting the midsection
                        </li>

                        <li>
                          Physical Traits and Actions reduced by One (or more)
                        </li>
                      </ul>

                      <li>
                        Significant Blood Loss occurs
                      </li>

                      <li>
                        Willpower Check against Pain to Force future moves (serious negative Modifiers apply)
                      </li>
                    </ul>
                  </ul>

                  <li>
                    <strong>Limb Strikes –</strong> Could easily cripple or remove the limb
                  </li>
                  <ul>
                    <li>
                      Attacker makes Strength Check to determine effectiveness
                    </li>
                    <ul>
                      <li>
                        If successful, the limb is inoperable
                      </li>

                      <li>
                        If highly successful the limb is severed (though not with knives)
                      </li>

                      <li>
                        Significant Blood Loss
                      </li>

                      <li>
                        Willpower Check against Pain to Force future moves (serious negative Modifiers apply)
                      </li>
                    </ul>
                  </ul>
                </ul><!--END DIRECT EDGED-->
                <br>

                <li>
                  <strong>MINOR EDGED ATTACKS –</strong> Are going to bleed and hurt, but probably will not kill the target outright
                </li>
                <ul>
                  <li>  
                    Willpower Check against Pain for Forcing future moves (mild negative Modifiers apply)
                  </li>

                  <li>
                    Moderate Blood Loss
                  </li>
                </ul>
              </ul><!--END EDGED ATTACKS-->

              <h5 class='text-center'><strong>PIERCING ATTACKS</strong></h5>
              <p class='text-center'>
                Stabbing manuevers, plain and simple.  Be it a knife, sword, spear, or anything with a point.  This also includes spiked weapons attached to a heavier base object, like a mace or baseball bat.  Remember the focus here is on the Type of Damage. Ballistics are projectile piercing attacks and are covered immediately after this
              </p>  

              <ul>
                <li>
                  <strong>MAJOR PIERCING ATTACKS –</strong> Usually fatal or crippling and cause severe blood loss and organ damage
                </li>
                <ul>
                  <li>
                    <strong>Head Strikes –</strong> Inflict fatal brain and neurological damage, and thus death
                  </li>

                  <li>
                    <strong>Body Strikes –</strong> Will cause life threatening organ damage and blood loss, often inflicting both an entrance and exit wound doubling the rate of hemorrhaging
                  </li>
                  <ul>
                    <li>
                      Attacker makes a Strength Check to determine severity based on target location and whether or not the attack is a killing manuever
                    </li>
                    <ul>
                      <li>
                        If not, target performs a Willpower Check to test against Shock (½ Actions)
                      </li>

                      <li>
                        Physical Traits and Action Points reduced by One even if successful
                      </li>

                      <li>
                        Willpower Check against Pain anytime the Defender moves or else another Action is necessary to Force the move (serious negative Modifiers apply)
                      </li>

                      <li>
                        Extreme Blood Loss occurs
                      </li>
                    </ul>
                  </ul>

                  <li>
                    <strong>Limb Strikes –</strong> Cause significant blood loss and may render the limb inoperable
                  </li>
                  <ul>
                    <li>
                      Attacker makes Strength Check to determine severity 
                    </li>
                    <ul>
                      <li>
                        If successful target must make a Willpower Check to test against Shock (½ Actions) and the limb is unusable
                      </li>

                      <li>
                        If failed target must perform a Willpower Check against Pain when using the damaged limb to determine if the move needs to be Forced (serious negative Modifiers apply)
                      </li>
                    </ul>

                    <li>
                      Significant Blood Loss
                    </li>
                  </ul>
                </ul><!--END MAJOR PIERCING-->
                <br>

                <li>
                  <strong>DIRECT PIERCING ATTACKS –</strong> Can easily prove fatal to their targets or cripple limbs
                </li>
                <ul>
                  <li>
                    <strong>Head Strikes –</strong> May penetrate or fracture the skull depending on the circumstances
                  </li>
                  <ul>
                    <li>
                      Attacker makes a Strength Check to determine fatality
                    </li>
                    <ul>
                      <li>
                        If not the target must make a Willpower Check to remain conscious
                      </li>

                      <li>
                        Even if successful all Mental Traits and Actions reduced by One (or more)
                      </li>

                      <li>
                        Target is Shocked (stunned) [ ½ Actions rounded down ]
                      </li>

                      <li>
                        Moderate Blood Loss occurs
                      </li>
                    </ul>
                  </ul>

                  <li>
                    <strong>Body Strikes –</strong> May penetrate the rib cage or stomach to cause mortal wounds
                  </li>
                  <ul>
                    <li>
                      Attacker makes a Strength Check to determine fatality
                    </li>
                    <ul>
                      <li>
                        If not, target performs a Willpower Check to test against Shock (½ Actions)
                      </li>

                      <li>
                        Physical Traits and Action Points reduced by One even if successful
                      </li>

                      <li>
                        Willpower Check against Pain anytime the Defender moves or else another Action is necessary to Force the move (serious negative Modifiers apply)
                      </li>
                    </ul>

                    <li>
                      Significant Blood Loss occurs
                    </li>
                  </ul>

                  <li>
                    <strong>Limb Strikes –</strong> Could render the limb inoperable and cause significant blood loss
                  </li>
                  <ul>
                    <li>
                      Attacker makes Strength Check to determine severity 
                    </li>
                    <ul>
                      <li>
                        If successful target must make a Willpower Check to test against Shock (½ Actions) and the limb is unusable
                      </li>

                      <li>
                        If failed target must perform a Willpower Check against Pain when using the damaged limb to determine if the move needs to be Forced (serious negative Modifiers apply)
                      </li>
                    </ul>

                    <li>
                      Moderate Blood Loss
                    </li>
                  </ul>
                </ul><!--END DIRECT PIERCING-->
                <br>

                <li>
                  <strong>MINOR PIERCING ATTACKS –</strong> Are painful and cause reasonable blood loss but aren't likely to prove fatal
                </li>
                <ul>
                  <li>
                    Willpower Check against Pain for Forcing future moves (mild negative Modifiers apply)
                  </li>

                  <li>
                    Reasonable Blood Loss
                  </li>
                </ul>
              </ul><!--END PIERCING ATTACKS-->

              <h5 class='text-center'><strong>BALLISTIC ATTACKS</strong></h5>
              <p class='text-center'>
                Consist of gunfire, arrows, and crossbow bolts.  Strength of the attack remains consistent with caliber size, bullet velocity based on the amount of powder in the round, arrowhead type, and / or the archery weapon itself.  Strength Checks do not apply here though an exception could be made for the Short Bow potentially.  Effects are very similar to Piercing Attacks.  
                <strong>Storytellers, as always, do what you do best!</strong>
              </p>  

              <ul>
                <li>
                  Range always influences Ballistic Attacks effectiveness!
                </li>
                <ul>
                  <li>
                    Targets struck at Point Blank or Short Range always receive more damage than they do at Long or Extreme Range except in the cases of Rifle Fire
                  </li>
                  <ul>
                    <li>
                      Rifles at shorter ranges are infinitely more likely to penetrate their intended targets, creating an Entry and Exit wound and effectively just punching a hole through them
                    </li>

                    <li>
                      The force of the blow doesn't have time to manifest as the kinetic energy is simply moving forward too fast, however this can create severe consequences if the target is hit multiple times in succession due to pressure changes in their bodily fluids!
                    </li>
                  </ul>
                </ul><!--END BALLISTIC NOTES-->
                <br>

                <li>
                  <strong>MAJOR BALLISTIC ATTACKS -</strong> Usually fatal or crippling and cause severe blood loss and organ damage
                </li>
                <ul>
                  <li>
                    <strong>Head Strikes –</strong> Inflict fatal brain and neurological damage, and thus death
                  </li>

                  <li>
                    <strong>Body Strikes –</strong> Will cause life threatening organ damage and blood loss, often inflicting both an entrance and exit wound doubling the rate of hemorrhaging
                  </li>
                  <ul>
                    <li>
                      Target performs an Endurance Check to prevent instantaneous death
                    </li>

                    <li>
                      Target performs a Willpower Check to test against Shock (½ Actions)
                    </li>

                    <li>
                      Physical Traits and Action Points reduced by One even if successful
                    </li>

                    <li>
                      Willpower Check against Pain anytime the Defender moves or else another Action is necessary to Force the move (serious negative Modifiers apply)
                    </li>

                    <li>
                      Extreme Blood Loss occurs
                    </li>
                  </ul>

                  <li>
                    <strong>Limb Strikes –</strong> Cause significant blood loss and may render the limb inoperable
                  </li>
                  <ul>
                    <li>
                      Target must make a Willpower Check to test against Shock (½ Actions) and the limb is unusable
                    </li>
                    
                    <li>
                      Target must perform a Willpower Check against Pain when using the damaged limb to determine if the move needs to be Forced (serious negative Modifiers apply)
                    </li>
                    
                    <li>
                      Significant Blood Loss 
                    </li>
                  </ul>
                </ul><!--END MAJOR BALLISTICS-->
                <br>

                <li>
                  <strong>DIRECT BALLISTIC ATTACKS –</strong> Can easily prove fatal to their targets or cripple limbs
                </li>
                <ul>
                  <li>
                    <strong>Head Strikes –</strong> Inflict fatal damage and death
                  </li>

                  <li>
                    <strong>Body Strikes –</strong> May penetrate the rib cage or stomach to cause mortal wounds
                  <ul>
                    <li>
                      Target performs a Willpower Check to test against Shock (½ Actions)
                    </li>

                    <li>
                      Physical Traits and Action Points reduced by One even if successful
                    </li>

                    <li>
                      Willpower Check against Pain anytime the Defender moves or else another Action is necessary to Force the move (serious negative Modifiers apply)
                    </li>

                    <li>
                      Significant Blood Loss occurs
                    </li>
                  </ul>

                  <li>
                    <strong>Limb Strikes –</strong> Could render the limb inoperable and cause significant blood loss
                  </li>
                  <ul>
                    <li>
                      Target must make a Willpower Check to test against Shock (½ Actions) and the limb is unusable
                    </li>

                    <li>
                      Target must perform a Willpower Check against Pain when using the damaged limb to determine if the move needs to be Forced (serious negative Modifiers apply)
                    </li>

                    <li>
                      Moderate Blood Loss 
                    </li>
                  </ul>
                </ul><!--END DIRECT BALLISTICS-->
                <br>

                <li>
                  <strong>MINOR BALLISTIC ATTACKS –</strong> Are painful and cause reasonable blood loss but are less likely to prove fatal
                </li>
                <ul>
                  <li>
                    <strong>Head strikes –</strong> Can cause significant brain damage or disfigurement but could be survivable
                  </li>
                  <ul>
                    <li>
                      Target must make a Willpower Check to remain conscious
                    </li>

                    <li>
                      Even if successful all Mental Traits and Actions reduced by One (or more)
                    </li>

                    <li>
                      Target is Shocked (stunned) [ ½ Actions rounded down ]
                    </li>

                    <li>
                      Significant Blood Loss occurs
                    </li>
                  </ul>

                  <li>
                    <strong>Body / Limb Strikes –</strong> Hurt like hell and bleed a lot but the capacity for survival is high
                  </li>
                  <ul>
                    <li>
                      Willpower Check against Pain for Forcing future moves (mild negative Modifiers apply)
                    </li>

                    <li>
                      Reasonable Blood Loss
                    </li>
                  </ul>
                </ul><!--END MINOR BALLISTICS-->
              </ul><!--END BALLISTIC ATTACKS-->
            </ul><!--END ALL ATTACKS & DAMAGE-->


            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingSeven">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='meleeBtn' type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              MELEE & ARMOR
            </button>
          </div>

          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">

              <h5 class='text-center'><strong><u>STRENGTH CHECK CHAINS ON MELEE DAMAGE</u></strong></h5>

              <p class='tab'>
                If a character lands a Strike in Melee Combat, they still need to drive the force of the blow in order to be effective. It seems safe to assume that the Defender will be bobbing and weaving to avoid or reduce the efficiency of the  attack, and once you factor in the possibility of armor, weapon type, and quality the implications should be  apparent.  This factors in more when you include armor, but for the sake of the story it should always be included!
              </p>

              <ul>
                <li>
                  Theoretically this should be a simple Pass / Fail matter, with a focus on how well the Roll was made ( Low / High )
                </li>
                <ul>
                  <li>
                    A Low Successful Strength Check Roll that proves to be a Success means that the attack was highly effective
                  </li>
                  <ul>
                    <li>
                      Consider a Low Strength Check Roll on a Minor Hit with an Edged Weapon to the targets Head
                    </li>
                    <ul>
                      <li>
                        While not necessarily fatal, it could easily prove incredibly damaging.  This might mean the target loses their nose, ear, entire cheek, or suffers substantial damage to their jaw.  <strong>Storyteller's interpretation as usual!</strong>
                      </li>
                    </ul>
                  </ul>

                  <li>
                    A High Successful Strength Check Roll means that the Strike proves to be effective and deliver its intent as described beforehand
                  </li>

                  <li>
                    A Low Failure Roll means that the Successful Strike still proves effective, though damage is moderately reduced
                  </li>

                  <li>
                    A High Failure Roll means that the Successful Strike is reduced in its Roll Type but proves to be of the highest caliber.  This process is called a <strong>HIT DOWNGRADE</strong>
                  </li>
                  <ul>
                    <li>
                      A Major Hit becomes a Direct Hit
                    </li>

                    <li>
                      A Direct Hit becomes a Minor Hit
                    </li>

                    <li>
                      A Minor Hit is essentially “shrugged off” or ignored though Blood Loss and Bruising still may apply
                    </li>
                  </ul>
                </ul>
              </ul>

              <h5 class='text-center'><strong><u>MELEE WEAPON MODIFIERS</u></strong></h5>

              <p class='tab'>
                Melee weapons come in all different shapes and sizes, and certain weapons adopt specific tactics and striking   methods.  This section attempts to address that.  For instance:
              </p>

              <ul>
                <li>
                  Two-Handed Weapons are unique in that using both hands provides leverage and torque with their Swings and Thrusts
                </li>
                <ul>
                  <li>
                    This means that wielding a Two-Handed Weapon with BOTH hands is the same as <strong>Reinforcing the Grip</strong> on a Long Weapon (1.5x Strength rounded down)
                  </li>

                  <li>
                    Alternatively a character COULD tuck a Two-Handed Weapon under their arm for single handed thrusts or move their grip higher for single handed swings (Agility Checks make sense with this scenario)
                  </li>
                </ul>

                <li>
                  Weapon weight plays a large part in its ability to penetrate armor or bones with Swings, but not as much with Thrusts
                </li>

                <li>
                  Tactically, this can have serious implications with a fighters ease of movement.  This is especially true when they are also wearing cumbersome armor and trying to perform high risk manuevers within an exceptionally brief timeframe
                </li>

                <li>
                  Additionally characters with low a low Strength Trait might have difficulty effectively weilding heavy weapons at all!  Consider the idea of a Strength 6 character picking up a sledgehammer and trying to swing it at their target.  Given the three second timeline this could easily impose significant negative Modifiers to their ability to strike as well as the necessity to Force the manuever costing the character an additional Action
                </li>
                <ul>
                  <li>
                    In instances where the <strong>Storyteller doubts that a character possesses the physical Strength to weild a weapon</strong>, it probably makes sense that:
                  </li>
                  <ul>
                    <li>
                      With every attempt, the Attacker must make a Strength Check in order to weild the weapon effectively
                    </li>

                    <li>
                      If they succeed then a slight penalty to strike may apply.  Their stamina may also deteriorate rapidly so increased Endurance Checks against Fatigue likely make sense
                    </li>

                    <li>
                      If they fail then they probably need to Force the Action (costing an additional Action Point), much like operating when trying to manuever in spite of severe Pain 
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>WEAPON WEIGHTS, TYPES & QUALITY:</strong> Modifiers also apply to several factors when regarding weaponry.   The most prevalent is weapon weight, but this section will also address the difference in type or quality in relation to the Strength Checks of Melee Combat
                </li>
                <br>
                
                <ul>
                  <li>
                    <strong>WEIGHT & QUALITY:</strong> Heavier weapons inflict more damage, plain and simple.  Consider the following:
                  </li>
                  <ul>
                    <li>
                      <strong>DELICATE WEAPONRY –</strong> Would be things like fencing swords (Foils), rope darts, small chain weapons, or things like empty beer bottles and rotten sticks.  They are considerably lighter than many of their counterparts, and as such more likely to break after a single or improper use against a target
                    </li>
                    <ul>
                      <li>
                        Strength Check -2 for Damage, but Agility Check if a Major Failure occurs is +2
                      </li>
                    </ul>

                    <li>
                      <strong>LIGHT WEAPONRY –</strong> These are things that are intended to be lighter and quicker than their counterparts, though considerably more flimsy, fragile, or malleable.  Think about machetes, weapons made of lighter wood cores, butchers knives, empty liquor bottles, or fragile / lighter deadwood sticks used as clubs
                    </li>
                    <ul>
                      <li>
                        Strength Check -1 for Damage, but Agility Check if a Major Failure occurs is +1
                      </li>
                    </ul>

                    <li>
                      <strong>STANDARD WEAPONRY –</strong> Are heavy enough to not bend or break, reasonably balanced, but light enough to be used quickly and efficiently.  These are things like quality swords, combat knives, spears, staves, or clubs
                    </li>
                    <ul>
                      <li>
                        No Strength or Agility Modifiers apply
                      </li>
                    </ul>

                    <li>
                      <strong>WEIGHTED WEAPONRY –</strong> These are weapons that rely on their weight in order to inflict maximum damage.  Weighted weapons are things such as hammers, axes, broad swords, gurkas or scimitars, or things like full liquor bottles with thick glass
                    </li>
                    <ul>
                      <li>
                        Strength Check +1 for Damage, but Agility Checks will suffer -1
                      </li>
                    </ul>

                    <li>
                      <strong>HEAVY WEAPONRY –</strong> Exceptionally heavy weaponry that inflict their damage by heft and momentum. These include items like bastard swords, maces, pikes, battle axes, or sledgehammers
                    </li>
                    <ul>
                      <li>
                        Strength Check +2 for Damage, but Agility Checks are -2
                      </li>
                    </ul>
                  </ul><!--END WEIGHT-->
                  <br>

                  <li>
                    <strong>WEAPON TYPE:</strong> Weapon types play a role in their attack styles and efficiencies
                  </li>
                  <ul>
                    <li>
                      <strong>KNIVES –</strong> Will never sever a limb in one attack, and as such should always be considered Slash Attacks (weak against bone and armor) rather than Chop Attacks (standard Edged Attacks)
                    </li>
                    <ul>
                      <li>
                        Slash Attacks are always easier to Deflect and Resist Damage with armor
                      </li>

                      <li>
                        Always considered Blades for Piercing Attacks (which are the baseline for Stabs & Thrusts)
                      </li>
                    </ul>

                    <li>
                      <strong>BLADES vs. SPIKES –</strong> Surface area is highly important in determining success of Piercing Attacks
                    </li>
                    <ul>
                      <li>
                        BLADES set the standard
                      </li>

                      <li>
                        SPIKES gain bonuses to Strength Checks on Piercing Attacks regarding Armor Penetration and Damage
                      </li>
                      <ul>
                        <li>
                          Large Spikes like the point at the end of a pole arm, axe, or well crafted spear gain +2 to Strength Checks, and are considered durable enough to not dull
                        </li>

                        <li>
                          Small Spikes would be relatively thin and long like heavy duty nails or pins, gain +4 to Strength Checks but are likely to break or bend thus reducing this bonus by 1 for each hit
                        </li>
                      </ul>
                    </ul>
                </ul><!--END WEAPON WEIGHTS, TYPES, QUALITY-->
              </ul><!--END MELEE MODIFIERS-->
            </ul>

              <h5 class='text-center'><u><strong>ARMOR & DAMAGE MODIFIERS</strong></u></h5>

              <p class='tab'>
                Armor is a relatively tricky thing to account for in combat as so many variables exist for the possibility of     defense from incoming attacks.  Craftsmanship, durability, materials used, material quality, thickness of material,   prior strikes reducing effectiveness, and maintenance all factor into armor efficiency and because of this Armor in   the Aftermath assumes a very generalized role.  Ordinarily Armor protects its user via three methods:
              </p>

              <ul>
                <li>
                  <strong>DEFLECTION:</strong> Effectively means to ignore the damage, and usually occurs with Armor Plates
                </li>

                <li>
                  <strong>DISPLACEMENT:</strong> Generally means to disperse the force of the blow amongst a much larger surface area, thereby <strong>CONVERTING</strong> the Damage Type to Blunt rather than Ballistic.  The hope is that the round never penetrates the armor, but if it does Blood Loss is significantly reduced.  Displacement typically occurs with fiberous, padded, or maille style armor.
                </li>

                <li>
                  <strong>RESISTANCE:</strong> Usually armors can Resist some of the Damage inflicted upon the wearer even when it is penetrated.  Damage Resistance has three generalized types:
                </li>
                <ul>
                  <li>
                    <strong>LIGHT RESISTANCE:</strong> A small amount of the inflicted Damage is absorbed, but can make the difference between whether or not a Limb is Severed or determining the Blood Loss Rate
                  </li>

                  <li>
                    <strong>MEDIUM RESISTANCE:</strong> A reasonable amount of the Damage is absorbed, meaning that this could potentially prevent multiple organs from significant threat or seriously reduce Blood Loss
                  </li>

                  <li>
                    <strong>HEAVY RESISTANCE:</strong> Means the majority of the Damage is absorbed and substantially reduces Blood Loss
                  </li>
                </ul>
                <br>

                <li>
                  <strong>MATERIAL THICKNESS:</strong> Describes density and weight of the material and applies to nearly every component imaginable.  Thickness directly correlates to effectiveness in protection from damage for ALL types of protection, be it Deflection, Displacement, or Resistance
                </li>
                <ul>
                  <li>
                    <strong>LIGHT –</strong> The thinnest of material quality and exceptionally light and flexible
                  </li>
                  <ul>
                    <li>
                      Minimal Protection
                    </li>
                  </ul>

                  <li>
                    <strong>THIN –</strong> Thin, light, and flexible but still reasonably protective
                  </li>
                  <ul>
                    <li>
                      Less Protection
                    </li>
                  </ul>

                  <li>
                    <strong>AVERAGE –</strong> Thick and dense enough to be effective
                  </li>
                  <ul>
                    <li>
                      Average Protection (Matches listing in Armor Materials Table)
                    </li>
                  </ul>

                  <li>
                    <strong>THICK –</strong> Thicker and more durable than average, and thus heavier
                  </li>
                  <ul>
                    <li>
                      More Protection
                    </li>
                  </ul>

                  <li>
                    <strong>HEAVY –</strong> Considerably effective, thick, and cumbersome
                  </li>
                  <ul>
                    <li>
                      Maximum Protection
                    </li>
                  </ul>
                </ul><!--END MATERIAL THICKNESS-->
                <br>

                <li>
                  <strong>LAYERED ARMOR:</strong>  Armor will often consist of many different layers to accomplish maximum protection
                </li>
                <ul>
                  <li>
                    For Example: Midieval Heavy Plate Mail was often comprised of thick steel plates overtop chain mail that rested on a cuirasse of thick cloth padding
                  </li>
                  <ul>
                    <li>
                      The Plates would Deflect damage
                    </li>

                    <li>
                      The Mail would displace any piercing attacks that penetrated or landed between the plates
                    </li>

                    <li>
                      The Padding would reduce the effects of the displaced force of the blow
                    </li>

                    <li>
                      This was highly effective until humanity reached the age of the gun, but also significantly restricted the wearers Agility and Speed
                    </li>
                  </ul>

                  <li>
                    Modern Armors usually consist of thick ballistic fiber with many harnesses or attachments for tactical gear and are designed with pockets for Ballistic Plates consisting of steel, ceramic, or treated metallurgic alloys
                  </li>
                  <ul>
                    <li>
                      The Plate Deflects most lower velocity rounds and Fragmentation, and provide significant Resistance against those that may still bore through
                    </li>

                    <li>
                      The Ballistic Fiber material then Displaces the remaining damage or provides additional Resistance against the hit 
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>BALLISTIC WEAPON TYPES:</strong> Since firearms and other Ranged Combat Weapons rely primarily on  craftsmanship and types of munitions fired, they NEVER require Strength Checks since the resulting Damage remains logically consistent with Range and Munition type (Hollowpoint, Armor Piercing, etc) being the only variables.  Unfortunately this means each type of munition must be addressed for every Armor Material (covered  below).  <strong>Storyteller's need to really pay attention here!</strong>  The following munitions are examples of the most conventional weaponry your characters are likely to encounter:
                </li>
                <br>

                <ul>
                  <li>
                    <strong>MISSILES =</strong> Arrows and crossbow bolts
                  </li>

                  <li>
                    <strong>FRAGMENTATION (Frag) =</strong> .22 caliber firearms, scattershot shotgun rounds (Bird, Buck), explosives and debris
                  </li>
                  <ul>
                    <li>
                      Remember that Range always factors into effectiveness
                    </li>
                    <ul>
                      <li>
                        IE: Point Blank Buckshot will almost certainly shatter a targets Ribs when Displaced, but from afar the pellets can easily be Deflected or Displaced
                      </li>
                    </ul>
                  </ul>

                  <li>
                    <strong>SMALL PISTOL ROUNDS =</strong> Low velocity, Small caliber (.32, .380, 9mm) 
                  </li>

                  <li>
                    <strong>LARGE PISTOL ROUNDS =</strong> Low velocity, Large caliber (10mm, .38 SPL, .44, .357, .45 )
                  </li>

                  <li>
                    <strong>SMALL RIFLE ROUNDS =</strong> High velocity, Small caliber [.30 carbine / BLK, 5.56x45mm(.223)]
                  </li>
                  <ul>
                    <li>
                      Only Thick Ballistic or Heavy Steel Plates are known to stop these rounds
                    </li>
                  </ul>

                  <li>
                    <strong>LARGE RIFLE ROUNDS =</strong> High velocity, Large caliber [7.62x39mm, 7.62x51/54mm(.308), .30-06]
                  </li>
                  <ul>
                    <li>
                      Only Average Ballistic or Thick Steel Plates are known to stop these rounds
                    </li>
                  </ul>
                </ul><!--END BALLISTIC WEAPON TYPES-->
                <br>

                <li>
                  <strong>SPECIALIZED MUNITIONS:</strong> Use the right tool for the job!  There are a wide variety of munition types  available in the world today, and most were already available well before the Aftermath.  Here are a few samples:
                </li>
                <br>

                <ul>
                  <li>
                    <strong>SHOTGUN SHELLS:</strong>
                  </li>
                  <ul>
                    <li>
                      BIRDSHOT – Fires a large volume of small, soft pellets
                    </li>
                    <ul>
                      <li>
                        Only “effective” at short range
                      </li>

                      <li>
                        Very weak against armor and bone, but highly effective against soft targets
                      </li>
                    </ul>

                    <li>
                      BUCKSHOT – Fires a reasonable number of small, hard pellets.  The most reasonable case for declaring scattershot ammunition as Fragmentation weaponry
                    </li>
                    <ul>
                      <li>
                        Only “effective” at short range
                      </li>

                      <li>
                        Weaker against armor, though still very forceful
                      </li>
                    </ul>

                    <li>
                      SLUG – Fires a large caliber bullet with impressive force, the word “Cannon” comes to mind
                    </li>
                    <ul>
                      <li>
                        Though not necessarily more likely to penetrate armor, the effects of Displacing the round are significantly reduced.  Bones will break!
                      </li>
                    </ul>

                    <li>
                      FLECHETTE – Fires multiple sharp steel barbs or darts, intending to cause massive damage to a targets flesh and increased blood loss
                    </li>
                    <ul>
                      <li>
                        Only “effective” at short range
                      </li>

                      <li>
                        Very weak against armor, but even more damaging than Birdshot against unarmored targets
                      </li>
                    </ul>

                    <li>
                      INCENDIARY – Fires a chemical composite intended to set a target ablaze
                    </li>
                    <ul>
                      <li>
                        Only “effective” at short range
                      </li>

                      <li>
                        Very weak against armor, not intended to penetrate for the most part
                      </li>

                      <li>
                        Fire!
                      </li>
                    </ul>                   
                  </ul><!--END SHOTGUN-->

                  <li>
                    <strong>SHOTSHELL ROUNDS –</strong> Typically Pistol rounds that fire Birdshot, though the volume of pellets is considerably less than its shotgun counterpart
                  </li>
                  <ul>
                    <li>
                      Only “effective” at short range
                    </li>

                    <li>
                      Very weak against armor and bone, but highly effective against soft targets and small game
                    </li>
                  </ul>

                  <li>
                    <strong>HOLLOWPOINT ROUNDS (EXPANDING) –</strong> These are rounds that sacrifice penetration power in order to spread and effectively “mushroom” causing a larger injury.  Are available in nearly every shape and size of caliber
                  </li>
                  <ul>
                    <li>
                      Less effective against armor
                    </li>

                    <li>
                      Causes more physical damage, and an incredibly large exit wound, thus more blood loss
                    </li>
                  </ul>

                  <li>
                    <strong>ARMOR PIERCING ROUNDS –</strong> Fire a chemically treated or specifically designed alloy round with the sole purpose of penetrating armor and thus negating Damage Displacement.  Also are available in nearly every shape and size
                  </li>
                  <ul>
                    <li>
                      Negates armor
                    </li>
                  </ul>

                  <li>
                    <strong>FRANGIBLE ROUNDS –</strong> Fires a “soft” round designed to disintegrate into tiny particles upon impact to minimize their penetration but cause exhorbitant internal damage to a target 
                  </li>
                  <ul>
                    <li>
                      Incredibly ineffective against armor
                    </li>

                    <li>
                      Causes exceptional physical damage and internal bleeding
                    </li>
                  </ul>

                  <li>
                    <strong>TRACER ROUNDS –</strong> Fires a bullet coated in a chemical compound that allows the flight path of the round to become visible 
                  </li>
                  <ul>
                    <li>
                      Increases accuracy with Sustained Fire
                    </li>

                    <li>
                      Reveals both the shooters and their targets position
                    </li>
                  </ul>

                  <li>
                    <strong>EXPLOSIVE ROUNDS –</strong> Fires a bullet that encases a small amount of explosives that detonate on impact
                  </li>
                  <ul>
                    <li>
                      Intended to be highly effective against soft targets, inflicting maximum damage
                    </li>

                    <li>
                      Can shred armor, reducing its effectiveness significantly
                    </li>

                    <li>
                      Often used against aircraft and vehicles in hopes of disabling manuevering components and machinery
                    </li>
                  </ul>

                  <li>
                    <strong>NON-LETHAL ROUNDS –</strong> Fires projectiles intended to cause significant pain or injury, but not death
                  </li>
                  <ul>
                    <li>
                      Rocksalt
                    </li>

                    <li>
                      Rubber or Plastic
                    </li>

                    <li>
                      Chalk
                    </li>
                  </ul>
                </ul><!--END SPECIALIZED MUNITIONS-->
              </ul><!--END ARMOR & DAMAGE MODIFIERS-->

              <h5 class='text-center'><u><strong>ARMOR MATERIALS & BASELINE PROTECTION</strong></u></h5>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>MATERIAL</th>
                      <th scope="col" class='text-center'>BLUNT</th>
                      <th scope="col" class='text-center'>EDGED</th>
                      <th scope="col" class='text-center'>PIERCING</th>
                      <th scope="col" class='text-center'>BALLISTIC</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <th scope="row" class='text-center'>PROTECTIVE CLOTHING</th>
                      <td class='text-center'></td>
                      <td class='text-center'>Light Resistance</td>
                      <td class='text-center'></td>
                      <td class='text-center'></td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>CLOTH PADDING</th>
                      <td class='text-center'>Light Resistance</td>
                      <td class='text-center'>Medium Resistance</td>
                      <td class='text-center'>Light Resistance</td>
                      <td class='text-center'>Light Resistance<br>(Missiles & Frag)</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>TREATED LEATHER</th>
                      <td class='text-center'>Light Resistance</td>
                      <td class='text-center'>Medium Resistance</td>
                      <td class='text-center'>Light Resistance</td>
                      <td class='text-center'>Medium Resistance<br>(Missiles & Frag)</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>BALLISTIC FIBER</th>
                      <td class='text-center'>Medium Resistance</td>
                      <td class='text-center'>Displacement</td>
                      <td class='text-center'>Light Resistance</td>
                      <td class='text-center'>-Displacement<br>(Missiles, Frag, Small / Large Pistols)<br>
                        -Light Resistance<br>(Large Rifles)
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>MAILLE<br>(Riveted, Chain, Scale, etc.)</th>
                      <td class='text-center'>Light Resistance</td>
                      <td class='text-center'>-Displacement<br>-Deflects Minor Hits</td>
                      <td class='text-center'>Medium Resistance</td>
                      <td class='text-center'>Displacement<br>(Missiles & Frag)</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>POLYMER PLATES<br>(Plastic, Composites, Fiberglass, etc.)</th>
                      <td class='text-center'>-Heavy Resistance<br>-Deflects Minor Hits</td>
                      <td class='text-center'>-Heavy Resistance<br>-Deflects Minor Hits</td>
                      <td class='text-center'>-Heavy Resistance<br>-Deflects Minor Hits</td>
                      <td class='text-center'>Deflects Minor Hits<br>(Missiles & Frag)</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>METAL PLATES</th>
                      <td class='text-center'>-Heavy Resistance<br>-Deflects Minor Hits</td>
                      <td class='text-center'>Deflects Direct Hits</td>
                      <td class='text-center'>-Medium Resistance<br>-Deflects Minor Hits</td>
                      <td class='text-center'>-Deflects Minor Hits<br>(Missiles & Frag)<br>
                        -Heavy Resistance Direct Hits<br>(Missiles & Frag)
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>BALLISTIC PLATES</th>
                      <td class='text-center'>-Heavy Resistance<br>-Deflects Minor Hits</td>
                      <td class='text-center'>Deflects Direct Hits</td>
                      <td class='text-center'>-Heavy Resistance<br>-Deflects Minor Hits</td>
                      <td class='text-center'>-Deflects Direct Hits<br>(Missiles, Frag, Small / Large Pistols)<br>
                        -Heavy Resistance<br>(Small / Large Rifles)
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p class='text-center'>
                This is where Material Thickness, Material Type, and Layering really comes into play! Consider the following:
              </p>

              <ul>
                <li>
                  Heavy Steel Plates likely provide the following additional protection:
                </li>
                <ul>
                  <li>
                    Deflect Blunt Direct Hits
                  </li>

                  <li>
                    Displacement of Edged Major Hits
                  </li>

                  <li>
                    Deflect Direct hits from Small & Large Pistols, Missiles, and Frag
                  </li>

                  <li>
                    Medium Resistance to Small & Large Rifles
                  </li>
                </ul>

                <li>
                  Whereas Thin Steel Plates over Average Treated Leather probably only provide:
                </li>
                <ul>
                  <li>
                    Light Resistance to Blunt Attacks
                  </li>

                  <li>
                    Displacement of Direct Edged Attacks
                  </li>

                  <li>
                    Deflection of Minor Edged Attacks
                  </li>

                  <li>
                    Heavy Resistance to Missiles
                  </li>

                  <li>
                    Medium Resistance to Frag
                  </li>
                </ul>

                <li>
                  Then a Thick Treated Leather Jacket with Average Cloth Padding might allow:
                </li>
                <ul>
                  <li>
                    Medium Resistance to Blunt Attacks
                  </li>

                  <li>
                    Deflection of Minor Edged Attacks
                  </li>

                  <li>
                    Heavy Resistanct to Direct Edged Attacks
                  </li>

                  <li>
                    Light Resistance to Direct Piercing Attacks
                  </li>

                  <li>
                    Deflection of Minor Piercing Attacks
                  </li>

                  <li>
                    Displacement of Missiles, Frag, Small Pistols
                  </li>
                </ul>
                <br>

                <li>
                  <strong>MAJOR (DECISIVE) HITS</strong> are called so for a reason!  These are usually the ones that find a gap in the armor or capitalize on some sort of weakness, but the bottom line is that they have the ability to turn the tides of battle!
                </li>

                <li>
                  <strong>As always, the Storyteller has the final say!</strong>  Don't get too wrapped up in overcomplicating your reasoning, just think it through and tell the tale!  <strong>Rules are guidelines, not set in stone!</strong>
                </li>

                <h5 class='text-center'><u><strong>SHIELDS: MATERIAL, THICKNESS, & EFFECTIVENESS</strong></u></h5>

                <p class='tab'>
                  Much like armor, shield effectiveness relies heavily upon the material, thickness, and craftsmanship of the equipment.  Shields can definitely shatter from Major Hits, effectively wielding Two Handed weapons like battle axes, and bullets still punch through softer materials not designed to withstand ballistic impacts. <strong>Storyteller's use your best judgment!</strong>
                </p>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingEight">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='grapplingBtn' type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              GRAPPLING & HOLDS
            </button>
          </div>

          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
            <div class="card-body">

              <p class='tab'>
                Grabbing or wrestling with your opponent. If you are trying to get a grip using your hands, then use a Grappling Skill Check.  Some weapons like axes, hammers, glaives, pikes and spears provide an edge or hook that can be used against limbs or shields as well.  In these instances use the appropriate Combat Skill Check!  The severity of grapples really depends on how far you want to take it.  Sometimes you need to tackle and wrestle somebody on the ground, sometimes you might  just try to grab their weapon arm so they can't use it against you, or maybe you just want to put someone on their ass and keep running!  Maybe once you grab them you pull them into your own weapon, providing a positive modifier for a strike as described above.  <strong>Storytellers act accordingly, but remember it always starts with One Action, the first GRAB</strong>
              </p>

              <ul>
                <li>
                  As always, a character can perform a <strong>Fast Grab</strong> which determines the Location with the Random Hit Button or a <strong>Targeted Grab</strong> by spending another Action
                </li>

                <li>
                  When you successfully Grab an opponent the Location is rendered inoperable as long as the character maintains their <strong>GRIP</strong>.  Each successful Grab transforms into a Grip, and in order to maintain it on the next turn the character spends One Action there as well.  This also costs the target character One Action while any Grip is held
                </li>

                <li>
                  While standing, a character can only grab with each hand, assuming its free.  You may have to holster a weapon or drop it first in order to do this but that means that when the characters are on foot only <strong>Two Grips</strong> can be held at a given time
                </li>

                <li>
                  Once on the ground, the character can begin to use their legs to perform additional Grabs and / or Grips. Again, its One Action per limb.<strong>The maximum is Four per character</strong>, given that human beings have two arms and two legs
                </li>
                <br>

                <li>
                  <strong>DOMINANCE MANUEVERS -</strong> are single Action moves that attempt to re-position their targets entire body by Chaining a Grapple Skill Check with a Strength Check.  A few examples:
                </li>
                <ul>
                  <li>
                    Once you have a reasonable Grip, you can spend another Action and pass Grapple Skill Chain to a Strength Check to make the <strong>Takedown</strong>.  Tackles should probably consist of a Speed Check to Grapple Chain to see if its going to be One Action or Two.  A good roll on the Strength Check means the Takedown was probably painful, possibly knocking the wind out of the target
                  </li>

                  <li>
                    Taking them to the Ground as mentioned before, but not intending to continue the Grapple.  This would be an example of a <strong>SLAM MANUEVER</strong>.  A character can also Slam a target into any opportune object or surface, such as a rough corner, furniture edges or an allies Ready weapon! The character is going to perform a Strength Check to ensure that the target doesnt "hold on" and pulls the attacker with them.  Slams consist of the following considerations on the Strength Check:
                  </li>
                  <ul>
                    <li>
                      Remember the Major, Direct, and Minor Rolls?  Same applies here with the attackers Grappling Skill Check except for a few things:
                    </li>
                    <ul>
                      <li>
                        The type of Attack depends on what the attacker Slams their target into.  Most times it will be Blunt, but if they successfully Slam them onto a Spike or someone elses weapon it can become a Piercing or Edged Attack
                      </li>

                      <li>
                        The <strong>Random Hit Button</strong> is used to determine where the Slam Effects are located
                      </li>

                      <li>
                        <strong>Major Slam Rolls will always Downgrade to Direct Hits</strong>
                      </li>
                    </ul>
                  </ul>

                  <li>
                    Simply "throwing" their target thereby just moving them out of the way, again Strength Checks determine effectiveness and distance
                  </li>
                </ul><!--END DOMINANCE MANUEVERS-->
                <br>

                <li>
                  <strong>CONTORTION MANUEVERS -</strong> are moves that attempt to use the characters Agility Trait to "writhe" or "squirm" into position rather than using brute force by Chaining an Agility Check to lead to the Grapple Skill Check
                </li>
                <br>

                <li>
                  <strong>BREAKING A GRIP -</strong> requires a successful Grappling Check while spending an Action.  Strength is a key factor here, so for simplicities sake its recommended using a <strong>2:10 Modifier Ratio</strong> (for every 2 Strength the character is above / below their opponent give them plus / minus 10 Modifier to their Grapple Skill Check)  
                </li>
                <ul>
                  <li>
                    Even if the defending character has Zero Actions thanks to multiple Grips on their person, they <strong>always get One attempt to Break a Grip</strong>
                  </li>

                  <li>
                    Much like Strikes, the Roll is broken down into the three categories previously listed:
                  </li>
                  <ul>
                    <li>
                      <strong>MAJOR ROLLS:</strong> Indicate that the Grip is actually Reversed, with the character Breaking the Grip now having a Grip on the limb previously used to hold them
                    </li>

                    <li>
                      <strong>DIRECT ROLLS:</strong> Show that the character successfully Breaks the Grip
                    </li>

                    <li>
                      <strong>MINOR ROLLS:</strong> Mean that the character still needs to Force the Manuever (costing an Additional Action)
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>REINFORCING A GRIP -</strong> requires that you use another limb to Grab onto your existing Grip, thus another Action to ensure that the Modifier is altered by effectively multiplying your Strength!  This can seriously help you in dealing with a stronger opponent!
                </li>
                <ul>
                  <li>
                    A Reinforced Grip grants the Holder 1.5x their Strength Trait for Strength Checks, rounded down just like when used on a Long or Two Handed Weapon (If a character with a Strength of 11 Locks their Grip, future Strength Checks are performed as if their Strength is 16)
                  </li>
                </ul>
                <br>

                <li>
                  <strong>RELEASING A GRIP -</strong> in some cases a player may decide that they have enough Grips on their opposition and want to Strike a now "open" target.  Simple enough, all the character has to do is declare another Action with the Limb maintaining the Grip
                </li>
                <ul>
                  <li>
                    IE: The character isn't worried about the Grip they have on their Targets Midsection anymore, and decides they want to start Punching instead.  The Grip is Released, and the character is free to Roll to Strike as usual!
                  </li>
                </ul>
                <br>

                <li>
                  <strong>CHOKING</strong> someone takes a long time and proves fairly difficult!  If an attacker got the jump on someone and are trying to be quiet then that first Grip on the Neck Location is crucial.  Usually it makes more sense to stab them or cut their throat but if thats not what your trying to do then this is how Choking works
                </li>
                <ul>
                  <li>
                    If the attacker manages to get a Grip on the target's NECK then Choking begins, with the Target having to make Endurance Checks every turn after 10 rounds (<strong>UNLESS the attacker performs a Strangle Manuever</strong>) until the Grip Breaks or they pass out
                  </li>
                  <ul>
                    <li>
                      Each round that the Grip is in effect the Grip Holder gets a chance to <strong>“Strangle”</strong> their target by crushing their windpipe with a Strength Check.  This is done by using another Action after maintaining the Grip.  Modifiers still apply for the Holder, and an attacker can only Strangle ONCE PER ROUND!
                    </li>
                    <ul>
                      <li>
                        A successful Strength Check from the Holder hastens the process by forcing the Targets Endurance Check immediately
                      </li>

                      <li>
                        A failed Strength Check just means that they hold their Grip for another of the 10 rounds it takes before Endurance Checks are automatically required
                      </li>
                    </ul>

                    <li>
                      Each failed Endurance Check reduces the Targets current Endurance by One
                    </li>

                    <li>
                      If the Target manages to Break the Grip / Lock at this point, Endurance to Strength / Skill Chains are expected
                    </li>

                    <li>
                      If the Target reaches Zero Endurance, then they have to make Willpower Checks to remain conscious.  Even if successful, the Targets Willpower reduces by One
                    </li>

                    <li>
                      Once unconscious, the character has to continue Choking the Target as their Willpower deteriorates
                    </li>

                    <li>
                      If Willpower reaches Zero after Endurance reaches Zero, the Target is effectively "Strangled" and likely dead or very near death.  CPR is their only hope and must occur immediately!
                    </li>       
                  </ul>               
                </ul><!--END CHOKING-->
                <br>

                <li>
                  <strong>LIMB LOCKS / BARS –</strong> A character may also attempt to injure a joint by performing specialized manuevers that leverage one section of a limb in opposition to the other.  These manuevers are exceptionally painful, and can lead to dislocation, fractures, and tears in the ligaments
                </li>
                <ul>
                  <li>
                    If the attacker has control of both “sides” of the joint (Forearm & Bicep, Thigh & Calf, Bicep & Shoulder) OR can position their body so that their own shoulders or legs can be used as a leverage point, they may attempt a Lock / Bar Manuever with Modifiers
                  </li>
                  <ul>
                    <li>
                      <strong>MAJOR ROLLS:</strong> Can cause immediate fractures if the character so chooses, crippling the limb and causing the target to perform a Willpower Check against Shock
                    </li>

                    <li>
                      <strong>DIRECT ROLLS:</strong> Can inflict immediate dislocations if the Attacker decides to do so, crippling the limb in a less damaging fashion but still cause the target to perform a Willpower Check against Shock and cripples the limb until it can be relocated
                    </li>

                    <li>
                      <strong>MINOR ROLLS:</strong> Do not cripple the joint, but are exceptionally painful and a good way to force submission of a target.  Defender must make a Willpower Check against Pain
                    </li>
                  </ul>

                  <li>
                    It is important to note that in Do or Die scenarios, a character can always attempt to break a targets Neck or Back to remove them from the fight!
                  </li>
                </ul>
                <br>

                <li>
                  Wrestling is a great way to burn a lot of energy very quickly and accomplish little real damage. A particularly good or even a Critical Grappling Check might break a bone or dislocate a joint but its mostly about restraining the target.  Endurance to Strength Chains should start to occur after about 10 rounds
                </li>
              </ul>

              <h5 class='text-center'><u><strong>A FEW EXAMPLES</strong></u></h5>

              <p class='tab'>
                We should probably run through a couple of examples to demonstrate exactly how this system of play is intended to function.  These will be randomly determined Rolls used in pre-determined scenarios to represent the reality of the situation.  Lets begin:
              </p>

              <ul>
                <li>
                  <strong>EXAMPLE ONE:</strong> An unarmed player has been attacked by a lone gunman who missed thier initial shot.  The player has been running for a few turns now but the gunman is only slightly slower than they are, so they have decided that the next time an opportunity presents itself they are going to attempt to Ambush the gunman.  The player spends two actions on their next turn to turn into a narrow alley, and then hold position behind the wall and Save their remaining 4 Actions till the gunman rounds the corner and attempt their ambush
                </li>
                <ul>
                  <li>
                    The gunman steps into the alleyway.  Player declares his first "Interrupt" Action is to Grab the gunmans pistol wielding wrist.  This is a Targeted Grab so it costs 2 of their 4 Actions, and their Grappling Skill is a 96
                  </li>
                  <ul>
                    <li>
                      Player rolls a 58.  Storyteller determines that Grabbing the wrist / forearm falls somewhere between the 3" and 6" target size, so imposes a negative 60.  96 - 60 means the Likelihood of Success is 36 (Player swears they will upgrade their Grappling Skill if they survive this). 58 proves to be the highest possible Minor Failure, so the Storyteller says there is no consequence. 
                    </li>

                    <li>
                      Player decides they are going to just Tackle the gunman.  Rolls a 92, obviously a Minor Success.  Storyteller tells them to Chain a Strength Check.  Player has a Strength of 13 and Rolls a 14.  Storyteller decides that they don't make the full Takedown, and only get one Random Hit Button Roll to determine where they have a Grip.
                    </li>
                    <ul>
                      <li>
                        The Random Hit Button determines that the Player has a Grip on the gunmans Left Calf with their Right Hand (dominant)!  The player is definitely in big trouble here but has been proven to be faster than the gunman, so maybe his Sequence is high enough that they will get the first Turn next Combat Round!
                      </li>
                    </ul>

                    <li>
                      The Player decides they are going to try to Takedown the gunman again.  Percentile Roll this time is a 67, clearly a Minor Takedown but successful none the less.  Storyteller decides they should Strength Check again.  This time the Player Rolls a 9!  A solid Slam occurs and the Storyteller Rolls an Agility Check to see if the gunman (Agility of 10) drops the weapon, and the 2D10 roll is a 12!  Now its Mano-y-Mano and the Storyteller informs the player that they have an additional Grip from the successful Takedown.  Use the Random Hit Button
                    </li>
                    <ul>
                      <li>
                        The Players Random Hit Result turns out to be a newfound Grip (with their Left Hand) on the gunmans Pelvis (Groin / Rear).  He has him by the balls now!
                      </li>
                    </ul>
                  </ul>
                  <br>

                  <li>
                    <strong>Next Combat Round:</strong>The Player has a Sequence of 13 whereas the gunman has one of 10, so the Player gets the first Turn
                  </li>
                  <ul>
                    <li>
                      Maintaining his Grip on the gunmans balls, hes down to 5 Actions.  First he twists and pulls.  Storyteller says Strength Check: Player rolls 8 (of his 13).  Clearly a Direct (and thus decisive*) Strength Check!  This puts the gunman into Shock (1/2 Actions rounded down, of his 5 that means he has 2 now) and he screams in agony
                    </li>
                    
                    <li>
                      The Player then Grapples with his Left Leg, says he doesnt really care where.  Percentile Roll is 68, pretty close to a Direct Hit.  Random Hit proves to be the Left Ribs.  Now the gunman is pinned down with a knee on his chest and the Player still has him by the balls
                    </li>

                    <li>
                      The Player decides to Grapple with his Right Leg, again doesn't care where.  This will be his 3rd of 5 Actions.  Percentile says 51, definitely a Direct Hit.  Random determines the Pelvis again!  Now the character could really pull!
                    </li>

                    <li>
                      The Player decides to do just that.  Storyteller, laughing at his poor subjects misfortune, tells the Player to perform a Strength Check.  Player's 2D10 reveals that they have Rolled a 14, which is just outside their Strength BUT their pinning the target down at the Pelvic Bone means its still just as painful as the first time!  Storyteller makes a Willpower Check (gunman has a Willpower of 13) for the gunman to see if he still wants to fight (not mentioning this to the player really, just doing it) and Rolls a 9...<strong>This is where being a Storyteller gets a little personal on the vendictive level</strong>
                    </li>

                    <li>
                      Knowing that the gunman is severely hurting, and only going to have one Action to Break one of his Grips, the Player decides with their last Action they are going to raise their right fist and tell the gunman "I could rip your jewels right off and wear 'em around my neck if I wanted to! I've got no beef with you!  Why the FUCK are you trying to kill me?!?".  Everyone laughs, and the story continues!
                    </li>
                  </ul>
                  <br>

                  <li>
                    <strong>This was definitely one of those cases where the Player was in some serious trouble, and the Random Hit Button ended up saving their life!  Proper Action management and being tactically fluid is how you survive the Aftermath!</strong>
                  </li>
                </ul><!--END EXAMPLE ONE-->
                <br>

                <li>
                  <strong>EXAMPLE TWO:</strong> This time a Player has been engaged with an Opponent for a few rounds in Melee Combat, but the last time they Blocked the Attackers Two Handed Axe Swing they became Disarmed from the blow.  Fortunately this Player is very familiar with Grappling (Grappling Skill of 113) and always carries a Combat Knife on their belt.  In this instance, both the Player and the NPC have 5 Actions...
                </li>
                <ul>
                  <li>
                    First, the Player declares that they will spend one Action to draw their knife.  Then they will spend another Action to step up to the Axeman.  Third they will attempt a Tackle Manuever.  All well and good...The Storyteller declares that since it is a Short Weapon they can do so, but they will only be able to successfully Grab a single Location on their target if successful.  Percentile Roll is 07, clearly a Major Hit with the Tackle Manuever.  Strength Check for the possibility of additional Damage proves to be an 11, which is just under the Players Strength of 12.  
                  </li>
                  <ul>
                    <li>
                      Storyteller says that the Major Hit drives the Axeman down hard, but doesn't do much more than superficial damage.  However they certainly dropped their axe, and the success of the Tackle lets the Player roll twice with the Random Hit Button.  First for their Left Hand, and second for their Right Leg.
                    </li>
                    <ul>
                      <li>
                        First Roll reveals that the Players Left Hand has control over the Axemans Left Calf?  Strange but alright.  Second Roll shows that the Players Right Leg is pinning the Axeman's Right Thigh to the ground.  Clearly the Player lifted the Axeman into the air before coming down on top of them, and then took them to ground by pinning the legs and still has a knife in their dominant hand.  Not bad for 3 Actions!
                      </li>
                    </ul>
                  </ul>

                  <li>
                    With two Actions remaining the Player decides its time to start Thrusting the blade into their opposition and declares a Fast Stab with a Short Weapons Skill of 92.  Percentile says 52, which is a Direct Success.  Random Hit reveals that the Strike lands in the Right Shoulder.  Unfortunately for the Player the Axeman is wearing a Thick Leather Pauldron, so they get some negatives to the Strength Check.  2D10 turns out to be 13, so it just glances off the Armor.
                  </li>

                  <li>
                    With their last Action the Player "Stabs" again, this time the Roll is 14 and a Major Hit.  Random Hit tells us it lands in the Midsection, so right in the belly.  Strength Check shows an 18, well above the Players Strength, so it is Downgraded to a Direct Hit.  Still gets under or through the armor though, so thats acceptable.  It isn't going under the Ribs to the Heart, but they still have to test against Shock and suffer Significant Blood Loss
                  </li>
                  <ul>
                    <li>
                      Axeman performs their Willpower Check against Shock, with a 2D10 Roll of 10 which still passes.  No Shock, but they do lose an Action and the Storyteller decides his adrenaline is high so only one to their Physical Traits
                    </li>
                  </ul>
                  <br>

                  <li>
                    The Axeman lost one Action from the stab to their gut, one from the Left Calf being pinned, and one from the Right Thigh, meaning 3 of their 5 Actions are gone.  With only Two left, the Storyteller says that they are going to make a Targeted Grab for the Knife Arm of the Player.  Percentile shows 45, and with the -50 Modifier for the Arm the Storyteller decides that it is a successful Minor Grab for someone clearly conditioned to Melee Combat.  The struggle is real!
                  </li>
                  <br>

                  <li>
                    <strong>Next Combat Round:</strong>  The Player Maintains their Grip on both Legs, costing 2 Actions.  They are also under the Axemans Grip for their Right Arm, costing an additional Action.  This means now the Player has 2 Actions themself.  The Player decides that they want to try to Break the Grip on their Right Arm with their Left Hand.  Storyteller says that the Axeman has a Strength of 14 and the Player has 12 so thats a difference of two...Roll Percentile.  Dice show that the Player rolls 80.  With the -10 from the Strength difference and the -38 for the Off Hand its a definite Failure.
                  </li>

                  <li>
                    The Player decides that they know if the Axeman holds his Grip on his Knife Arm they will only have One Action to use against him.  The decision is clearly to Reinforce their Grip on the Knife and try to force it down with both hands.
                  </li>

                  <li>
                    The NPC only has one Action, so his answer is also clear.  He decides to Reinforce his Grip on the Knife Arm.  Now the Strength for the NPC is 21 and the Strength of the Player is 18, but the Axeman is still bleeding and the need for Willpower Checks is bound to catch up to him eventually
                  </li>
                  <br>

                  <li>
                    <strong>Next Round:</strong> In a moment of clarity, the Player decides to Release the Grip on both Legs and the Reinforced Knife Hand to switch the Knife to the Off Hand.  This gives him back 3 of the Actions, meaning that only his Right Arm is Gripped which costs them only One of their Five Actions! First move is the switch itself, followed by an Off Handed Fast Stab.  Percentile says 56, Likelihood of Success is 92 (Short Weapons) - 38 (Off Hand) = 54.  Barely a miss!
                  </li>

                  <li>
                    Player tries again and Rolls a 92, terrible miss!
                  </li>

                  <li>
                    Now or never!  Last Roll is an 84?!?  It was a clever idea, but it didn't work.  The Axeman now has only One Action missing from the Stab Wound, and can choose to Maintain or Release his Grip with both hands on the Players dominant arm.  The fight goes on!  Here would be an excellent opportunity for the Axeman to attempt to make a Targeted Grab with one of his legs for the Upper Arm or Shoulder and attempt an Arm Lock Manuever...
                  </li>
                </ul><!--END EXAMPLE TWO-->
              </ul><!--END ALL EXAMPLES-->

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingNine">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='woundsBtn' type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
              WOUNDS & BLOOD LOSS
            </button>
          </div>

          <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
            <div class="card-body">
              
              <p class='tab'>
                Surviving Combat can prove exceptionally challenging once a character has become seriously injured.  Even if they manage to pull through there is always a chance that they may succumb to their wounds later.  This section will address how to deal with situations involving pain, blood loss, shock, being short-winded from trauma, broken bones, burns, panic, and everything in between.
              </p>

              <ul>
                <li>
                  <strong>Storytellers: When a Player is Wounded it is important that you update the ID Marks of the Character by clicking the Blue ID Marks Button on their character Row!</strong>
                </li>
                <ul>
                  <li>
                    Fill in any pertinent information for the Location of the Hit
                  </li>
                  <ul>
                    <li>
                      Short abbreviations are highly recommended.  Things like "GSW" for Gun Shot Wound, or simply "Stab", "Cut", "Bruise" 
                    </li>

                    <li>
                      To signify old injuries, once they heal just leave "scar".  Old injuries can definitely hinder future performance!
                    </li>

                    <li>
                      This is also how you give a character a haircut or tattoo!
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>BLOOD LOSS:</strong> A character suffering blood loss will lose an Endurance Point according to the rate listed below until they are "stabilized" with First Aid treatment.  In the case of <strong>INTERNAL BLEEDING</strong> thanks to organ damage they may need either professional medical treatment and / or surgery
                </li>
                <ul>
                  <li>
                    Once a characters Endurance reaches 4 they will have to make Willpower Checks to remain conscious
                  </li>

                  <li>
                    If the character fails one of these Willpower Checks or their Endurance Trait reaches Zero, they will become <strong>UNCONSCIOUS</strong> and unable to treat their own injuries
                  </li>
                  <ul>
                    <li>
                      Once Unconscious, the deterioration of the Endurance Trait shifts to the Willpower Trait much like "Choking" under the Combat: Grappling & Holds tab
                    </li>

                    <li>
                      If both Endurance and Willpower reach Zero, the character has "Bled Out" and dies
                    </li>

                    <li>
                      It is important to note that multiple injuries can speed up Blood Loss exponentially
                    </li>

                    <li>
                      The severity of the wound should be noted in order to determine the Modifiers for the use of the First Aid Skill when trying to Stabilize the wounded character
                    </li>
                    <ul>
                      <li>
                        Once a character is Stabilized they are no longer at risk of bleeding to death, but they will still need significant medical attention and ample time in order to begin the healing and recovery process!
                      </li>
                    </ul>
                  </ul>
                </ul><!--END BLOOD LOSS LISTING-->
              </ul>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>TERM</th>
                      <th scope="col" class='text-center'>ENDURANCE LOSS RATE</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <td class='text-center'>Reasonable</td>
                      <td class='text-center'>1 Endurance : Every 20 Minutes</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Moderate</td>
                      <td class='text-center'>1 Endurance : Every 10 Minutes</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Significant</td>
                      <td class='text-center'>1 Endurance : Every 5 Minutes</td>
                    </tr>

                    <tr>
                      <td class='text-center'>Extreme</td>
                      <td class='text-center'>1 Endurance : Every Minute</td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <ul>
                <li>
                  <strong>RECOVERY: SHOCK -</strong> A character that falls into Shock (see Strikes: Effects & Damage) remains in Shock until they pass a Willpower Check
                </li>
                <ul>
                  <li>
                    Action Points remain at Half of their normal Rating (rounded down)
                  </li>

                  <li>
                    Mental Traits are significantly impaired, along with their Associated Skills
                  </li>
                  <ul>
                    <li>
                      <strong>Storytellers use your best judgment here!</strong>
                    </li>
                  </ul>

                  <li>
                    Every failed Shock Check further reduces Willpower by One
                  </li>
                  <ul>
                    <li>
                      A Major Failure on the Willpower Check may cause the character to Panic!
                    </li>
                  </ul>

                  <li>
                    If Willpower reaches Zero, the character is rendered Unconscious
                  </li>

                  <li>
                    If the character is receiving help or medical attention, the administering party can keep them from slipping further into Shock as they try to Stabilize them.  Often just keeping the wounded talking is enough!
                  </li>
                </ul><!--END SHOCK-->
                <br>

                <li>
                  <strong>RECOVERY: CONCUSSION -</strong> A character that suffers a Concussion (any Attack that results in the reduction of Mental Traits and Actions in the Strikes: Effects & Damage Tab) from a Head Wound will suffer these negatives until they pass a Willpower Check to regain "Focus"
                </li>
                <ul>
                  <li>
                    Concussions are essentially a watered down version of Shock
                  </li>

                  <li>
                    Every failed Concussion Check further reduces Willpower by One
                  </li>

                  <li>
                    If Willpower reaches Zero, the character is rendered Unconscious
                  </li>

                  <li>
                    If the character is receiving help or medical attention, the administering party can keep them conscious preventing further injury or systemic failure.  Often just keeping them talking and alert is all that needs to happen!  After enough time, the confusion will pass and they will eventually "snap out of it"
                  </li>
                </ul>
                <br>

                <li>
                  <strong>RECOVERY: WINDED -</strong> A character that becomes Winded (any Attack that results in the reduction of their Physical Traits and Actions in the Strikes: Effects & Damage Tab) from a Body Wound will suffer those negatives until they pass an Endurance Check to "Catch their breath" or they stop ALL strenuous physical activity to do so
                </li>
                <ul>
                  <li>
                    Traumatic injury to the Lungs from Strikes to the Ribs or Chest (and potentially upward strikes to the Midsection) may make this impossible until they recieve proper medical care
                  </li>

                  <li>
                    If a character continues exerting themselves, each failed Endurance Check will result in an additional reductions to their Physical Traits (including Speed, which directly translates to Actions at a 2:1 Rate!)
                  </li>

                  <li>
                    If Endurance reaches Zero the character becomes <strong>IMMOBILE</strong> for a brief period of time, focusing all of their effort just to maintain critical body function. Severe negatives to Willpower begin to occur once this happens!
                  </li>
                  <ul>
                    <li>
                      <strong>Storytellers, this is where Boxers and Professional Fighters get "Knocked Out" after fighting several rounds!</strong>  
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>PAIN:</strong> As a general rule of thumb, Pain only affects its body Location when the injury is "fresh" or when it is used while still damaged or early in the Healing process.  
                </li>
                <ul>
                  <li>
                    Pain will cause significant Physical Trait penalties on the affected area
                  </li>
                  <ul>
                    <li>
                      For instance: If a character has an injured Right Arm, their Strength, Endurance, Speed, and Agility <strong>with that Limb</strong> will be severely reduced.  However, if they are Running their Speed and Endurance aren't going to be affected
                    </li>

                    <li>
                      <strong>This can be really problematic when the Storyteller factors in circumstances like Leg or Body wounds!</strong>
                    </li>
                    <ul>
                      <li>
                        Damage to the Torso will likely impact any lifting, twisting, or general weight shifting
                      </li>

                      <li>
                        Leg injuries can affect Upper Body manuevers like Swinging or Thrusting a weapon as balance and footwork play a major role in performing effectively
                      </li>
                    </ul>
                  </ul>

                  <li>
                    The same is true for Skill Checks as well, but only when they make sense
                  </li>
                  <ul>
                    <li>
                      IE: A character with a leg injury may suffer Penalties to their Melee Weapons Skills when fighting on foot, but not any if they are Striking from a vehicle or on Horseback
                    </li>

                    <li>
                      Another Example: If a character has bloodied up and bruised their knuckles by fighting Unarmed they may suffer significant penalties trying to Pick Locks, but it wont really affect their Computers Skill unless they are testing to find out how many Words Per Minute they can type!
                    </li>
                  </ul>

                  <li>
                    As mentioned before, some manuevers can require that the character pass a Willpower Check to fight through the Pain in order to do whatever it is that they actually need to.  If they Fail the Willpower Check it will cost them an additional Action to "Force the Move"
                  </li>
                </ul>
                <br> 

                <li>
                  <strong>FEAR & PANIC:</strong> If a character finds themselves in a situation where they doubt their ability to survive, it makes sense that on a General Overview of their situation "Adrenaline" can come to life in an all consuming "Fight or Flight" response. <strong>This is particularly true when a person is in Shock</strong>
                </li>
                <ul>
                  <li>
                    If a character Fails a Willpower Check for Shock particularly horribly, the "Flight Response" takes over.  They will spend all of their Actions attempting to either <strong>Run or Hide</strong> until they pass a Willpower Check to Recover from Panic
                  </li>

                  <li>
                    Additionally, whenever the <strong>Storyteller deems Necessary</strong> the character may have to Pass a Willpower Check in order to maintain the "Fight Response" 
                  </li>
                  <ul>
                    <li>
                      The basic idea is that the character has to reflect on the idea that if they want to live they have to decide whether or not it makes more sense to just GTFO <strong>PERIOD</strong>
                    </li>

                    <li>
                      This will vary from character to character.  One person may freak out and try to find a tree to climb if they are surrounded by 6 dogs when they are all alone, another might decide they can take them with their baseball bat and their wits at the cost of a few dozen stitches (six dogs will feed six families...)
                    </li>

                    <li>
                      Being pinned down by Sustained Fire might make some people curl up into a little ball and pray, while others might keep their heads and low crawl away
                    </li>

                    <li>
                      Being engulfed and physically <strong>ON FIRE</strong> is likely to cause most people to Panic and try to put themselves out or strip their clothing off; some might stop, drop, and roll; while some deranged few might decide its more important to keep shooting!  For a lot of people just being inside of a burning building is enough to inspire the "Flight Response".  <strong>Fire is a marvelous tool for inspiring fear in people and animals alike</strong>
                    </li>

                    <li>
                      <strong>Storytellers be advised: cases may vary but Shock can easily lead to irrational decisions!</strong>
                    </li>
                  </ul>
                </ul>
                <br>

                <li>
                  <strong>OTHER STATUS EFFECTS:</strong> There are about a thousand other possible Status Effects</strong> that the characters might find themselves experiencing.  Here are just a few:
                </li>
                <ul>
                  <li>
                    Blinded
                  </li>

                  <li>
                    Choking on Tear Gas or Smoke
                  </li>

                  <li>
                    Deafened
                  </li>

                  <li>
                    Off Balance or Dizzy
                  </li>

                  <li>
                    Enraged
                  </li>

                  <li>
                    Shaky, Shivering or Twitchy
                  </li>

                  <li>
                    etc. etc.
                  </li>

                  <li>
                    <strong>Storytellers should have a decent grasp of how to accomodate for these things at this point, if not you can just omit them.  Tell your Story!</strong>
                  </li>
                  <br>

                  <ul>
                    <li>
                      <strong>A "Black Out" can be particularly useful when a character is clearly doomed and the Storyteller decides to spare them.</strong> Instead of dying it's always possible to have them wake up with grievous injuries and a serious gap in their memory...<strong>some sort of "Miracle", if you will.</strong>  Even if they are obviously too far gone to save, it still gives the Player a chance to have their last words, and share any information that the others in the group aren't aware of before succumbing to their injuries
                    </li>
                  </ul>
                </ul>
              </ul><!--END STATUS EFFECTS-->

              <h5 class='text-center'><u><strong>HEALING, REHABILITATION, & RECOVERY TIMES</strong></u></h5>

              <p class='text-center'>
                Healing takes time!  This time might be sped up with proper medical care, or slowed down with inadequate supply and expertise.  The severity of injury determines the amount of time it takes.  Some points to note:
              </p>

              <ul>
                <li>
                  <strong>BRUISING AND MINOR INJURY –</strong> Likely only take about a week (at most) to recover to full functionality
                </li>

                <li>
                  <strong>SERIOUS FLESH WOUNDS, DEEP CUTS, MUSCLE INJURY, AND HAIRLINE FRACTURES –</strong> Take a little more time, but usually less than a month.  Two weeks should be about standard for a character with Average Endurance
                </li>

                <li>
                  <strong>SERIOUS FRACTURES, SEVERE BONE DAMAGE, AND MINOR ORGAN DAMAGE -</strong> Can take several weeks and even months to heal properly
                </li>

                <li>
                  <strong>COMPOUND FRACTURES, EXTENSIVE TRAUMA, AND SERIOUS ORGAN DAMAGE –</strong> Usually take months to heal properly and require extensive rehabilitation to return to full functionality
                </li>
                <br>

                <ul>
                  <li>
                    <strong>Endurance Checks can be performed daily</strong> to represent the potential for a speedy recovery and Pain reduction
                  </li>

                  <li>
                    <strong>Storytellers may consider “Fast Forwarding” through the healing process</strong> for the players at SIGNIFICANT opportunity cost for "Time-Sensitive" windows.  If necessary, the characters can still operate with injury though, and this could afford some unique scenarios for the plot line and frequent use of the Pain examples set earlier...<strong>Dealers choice!</strong>
                  </li>

                  <li>
                    <strong>Seriously injured characters can always be substituted out for new characters (ideally with the same Total Experience and unused Experience Pool)</strong> to represent friends, like-minded allies, or at least interested parties that the character has made along the way!  The new character takes the injured characters place in the storyline (at least until the first one heals, or the new one gets their turn to rest)
                  </li>
                  <ul>
                    <li>
                      <strong>Depending on the level of "Realism" that the Storyteller decides to use, it is reasonable to expect that a Player may <u>NEED</u> to rotate out Two or Three individuals with the First One setting the baseline for TOTAL EXPERIENCE before suffering "Serious Injury or Death"</strong>
                    </li>
                  </ul>
                </ul>
              </ul>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingTen">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='experienceBtn' type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
              EXPERIENCE
            </button>
          </div>

          <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
            <div class="card-body">
              
              <p class='tab'>
                Experience (EXP) is the currency of character development.  The Aftermath does not use a leveling system, and <strong>spending experience points can be performed whenever the Storyteller sees fit</strong>, but should generally occur whenever the players are at rest, healing, have some post operation downtime or are simply preparing for future endeavors.  Overall, experience is used to increase a characters Traits, Skills, learn new Skills (including languages), and develop new Abilities <strong>(Abilities vary far and wide, so it is best to just check out the Abilities section under Character Management)</strong>
              </p>

              <ul>
                <li>
                  Any Experience earned is added to BOTH the Total Experience of the character as well as their "remaining" Experience Pool
                </li>

                <li>
                  <strong>Spending Experience is subtracted from the Experience Pool only</strong>
                </li>

                <li>
                  <strong>Total Experience is used to establish the Highest Point that a character reaches to allow the Storyteller to assess the proficiencies of Future Characters that the Player might build</strong>
                </li>
                <br>

                <li>
                  <strong>EARNING EXPERIENCE: The Storyteller is responsible for distributing all Experience as it is earned.</strong>  They do this by filling in a numeric value in the characters row under the Earned Exp column and then pressing UPDATE. As usual they always have the final say in how much is earned and why.  The following table is provided to give a point of reference as to how this system is intended to be used:
                </li> 
              </ul>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>EVENT</th>
                      <th scope="col" class='text-center'>DESCRIPTION</th>
                      <th scope="col" class='text-center'>EXP REWARD</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <th scope="row" class='text-center'>CRITICAL SKILL USE</th>
                      <td class='text-center'>
                        Successfully performing a Skill Check that either directly advances the Plot of the Story or saves a characters life (including their own)
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>MAJOR SKILL USE</th>
                      <td class='text-center'>
                        Successfully performing a Skill Check that grants a significant advantage or opportunity to advance the plot
                      </td>
                      <th scope="row" class='text-center'>250</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>DIRECT (RISKY) SKILL USE</th>
                      <td class='text-center'>
                        Successfully performing a Skill Check that grants a small advantage or opportunity to the player.  This also includes effective Combat Manuevers!
                      </td>
                      <th scope="row" class='text-center'>100</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>MINOR SKILL USE</th>
                      <td class='text-center'>
                        Successfully performing a Skill Check that is neither mission critical nor time sensitive
                      </td>
                      <th scope="row" class='text-center'>50</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>DEFEATING DANGEROUS OPPOSITION</th>
                      <td class='text-center'>
                        Eliminating a major threat that is a combination of better trained, better equipped, or proves themselves highly capable.  This is not limited to Combat!
                      </td>
                      <th scope="row" class='text-center'>1000</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>DEFEATING SUPERIOR OPPOSITION</th>
                      <td class='text-center'>
                        Eliminating a significant threat that is either better trained, better equipped, or highly capable but not all three.  Also not limited to Combat.  <strong>Storytellers, it is important to note that as a character becomes more capable, the gap between Dangerous Opposition and Trivial Opposition will grow ever tighter.</strong>  IE: A highly capable character will be more likely to encounter Inferior Opposition than Superior Opposition
                      </td>
                      <th scope="row" class='text-center'>750</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>DEFEATING "EQUAL" OPPOSITION</th>
                      <td class='text-center'>
                        Eliminating a threat that could be considered relatively “equal” to the characters own prowess or ability.  Again not limited to combat!
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>DEFEATING INFERIOR OPPOSITION</th>
                      <td class='text-center'>
                        Eliminating a threat that is clearly inferior to the character, but still poses a significant threat.  As usual, this is not limited to Combat alone
                      </td>
                      <th scope="row" class='text-center'>250</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>DEFEATING TRIVIAL OPPOSITION</th>
                      <td class='text-center'>
                        Eliminating a threat that doesn't pose a serious risk, but is more just in the way of the characters goals.  Not limited to Combat
                      </td>
                      <th scope="row" class='text-center'>100</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>ADVANCING THE STORY OR PLOT</th>
                      <td class='text-center'>
                        Anything that moves the plot line forward.  <strong>Intended to include accomplishing major milestones for the story</strong>
                      </td>
                      <th scope="row" class='text-center'>STORYTELLERS CHOICE</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>GOOD JUDGEMENT OR IDEA</th>
                      <td class='text-center'>
                        A reward for putting considerable thought or effort in solving problems that the character may face
                      </td>
                      <th scope="row" class='text-center'>STORYTELLERS CHOICE</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>BRAVERY, COURAGE, OR HEROISM</th>
                      <td class='text-center'>
                        Performing risky behavior for the good of others or self, <strong>successful or not</strong>
                      </td>
                      <th scope="row" class='text-center'>STORYTELLERS CHOICE</td>
                    </tr>

                    <tr>
                      <th scope="row" class='text-center'>ENTERTAINING THE PLAYERS</th>
                      <td class='text-center'>
                        A reward for keeping the other players happy and engaged.  <strong>Usually the "Comedians" reward</strong>
                      </td>
                      <th scope="row" class='text-center'>STORYTELLERS CHOICE</td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <ul>
                <ul>
                  <li>
                    <strong>TRAINING: PRACTICE & EXERCISE -</strong> If a Player has some free time, and knows they need to prepare for future engagements it makes sense that they may "Exercise" or "Practice" certain Skills.  This should be treated as a <strong>Good Idea</strong> and reward some Experience for them to spend later!  <strong>As usual it is the Storytellers Choice on how much to Reward</strong>, but it should be noted that improving these things takes significant time and effort!
                  </li>
                  <ul>
                    <li>
                      It is recommended that when a Player decides to do this they perform a Willpower Check to determine how much effort and mindfulness they put forth to improve these things.  A particularly low Success Roll might mean they put forth a lot of effort, so the Experience Reward should be higher.  If they barely succeed, a Moderate Reward.  If they Fail, then they are just "Going through the Motions" and recieve nothing!
                    </li>

                    <li>
                      <strong>It is also important to note that Bullets are incredibly expensive at this point, so Practicing these Skills is incredibly costly and supply may not even be available to achieve significant reward!</strong>
                    </li>

                    <li>
                      This may also present unusual "Target Opportunities" for the characters enemies.  For instance if they learn that the Player goes jogging every morning to work on their Endurance Trait, it might give them a chance to ambush the Player while they are away from the party!
                    </li>
                  </ul>
                </ul>
              </ul>
              <br>

              <ul>
                <li>
                  <strong>SPENDING EXPERIENCE:</strong> When deemed appropriate, a Player can spend their Experience by hitting the Character Management Button either "In Game" or from the Home Screen.  From there the Player can spend their Experience Points however they see fit, although some Skills & Abilities have "Pre-Requisites" that the system will force the Player to achieve before granting their request.  Generally speaking though, the Experience Point Cost follows the following guidelines to increase by <strong>ONE</strong>:
                </li>
              </ul>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>CHARACTER STATISTIC</th>
                      <th scope="col" class='text-center'>CURRENT VALUE RANGE</th>
                      <th scope="col" class='text-center'>EXP COST</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Less than 5
                      </td>
                      <th scope="row" class='text-center'>5000</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>TRAITS (Blue [ + ] Buttons)</th>
                      <td class='text-center'>
                        Between 5 and 15
                      </td>
                      <th scope="row" class='text-center'>2500</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 16 and 20 (20 is the Maximum)
                      </td>
                      <th scope="row" class='text-center'>5000</td>
                    </tr>
                    <!--STANDARD SKILLS-->
                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Less than 25
                      </td>
                      <th scope="row" class='text-center'>250</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 25 and 74
                      </td>
                      <th scope="row" class='text-center'>100</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'>STANDARD SKILLS (Yellow [ + ] Buttons)</th>
                      <td class='text-center'>
                        Between 75 and 100
                      </td>
                      <th scope="row" class='text-center'>250</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 101 and 124
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 125 and 150 (150 is Maximum)
                      </td>
                      <th scope="row" class='text-center'>750</td>
                    </tr>
                    <!--ADVANCED SKILLS-->
                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Less than 25
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 25 and 74
                      </td>
                      <th scope="row" class='text-center'>250</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>ADVANCED SKILLS (Green [ + ] Buttons)</th>
                      <td class='text-center'>
                        Between 75 and 100
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 101 and 124
                      </td>
                      <th scope="row" class='text-center'>1000</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 125 and 150 (150 is Maximum)
                      </td>
                      <th scope="row" class='text-center'>1500</td>
                    </tr>
                    <!--BLOCK-->
                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Less than 10
                      </td>
                      <th scope="row" class='text-center'>100</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 10 and 19
                      </td>
                      <th scope="row" class='text-center'>200</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'>BLOCK (Dark [ + ] Button)</th>
                      <td class='text-center'>
                        Between 20 and 29
                      </td>
                      <th scope="row" class='text-center'>250</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 30 and 39
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 40 and 50 (50 is Maximum)
                      </td>
                      <th scope="row" class='text-center'>750</td>
                    </tr>
                    <!--DODGE-->
                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Less than 10
                      </td>
                      <th scope="row" class='text-center'>200</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 10 and 19
                      </td>
                      <th scope="row" class='text-center'>400</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>DODGE (Dark [ + ] Button)</th>
                      <td class='text-center'>
                        Between 20 and 29
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 30 and 39
                      </td>
                      <th scope="row" class='text-center'>1000</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between 40 and 50 (50 is Maximum)
                      </td>
                      <th scope="row" class='text-center'>1500</td>
                    </tr>
                    <!--OFF HAND-->
                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Less than -51
                      </td>
                      <th scope="row" class='text-center'>100</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between -50 and 41
                      </td>
                      <th scope="row" class='text-center'>200</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'>OFF HAND (Dark [ + ] Button)</th>
                      <td class='text-center'>
                        Between -40 and -31
                      </td>
                      <th scope="row" class='text-center'>400</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between -30 and -21
                      </td>
                      <th scope="row" class='text-center'>500</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between -20 and -11 
                      </td>
                      <th scope="row" class='text-center'>1000</td>
                    </tr>

                    <tr class='table-secondary'>
                      <th scope="row" class='text-center'></th>
                      <td class='text-center'>
                        Between -10 and 0<br>(Zero equals "Ambidexterous" and the Off Hand no longer suffers any penalty) 
                      </td>
                      <th scope="row" class='text-center'>1500</td>
                    </tr>

                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingEleven">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='animalsBtn' type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
              ANIMALS & NPC'S
            </button>
          </div>

          <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
            <div class="card-body">
              
              <p class='tab'>
                This section is prominently for the Storytellers, though Players should understand that "Knowledge is Power".  As the actor for All Roles in the world, it is up to you to define every character that the Players will encounter in your Story.  Often it makes sense to develop a few "Key" characters in your minds eye (Maybe even build them) and have them operate as either Protagonists or Antagonists in your Tale.  Thats all well and good, but there will be times that various "Generic" Henchmen or aggressors come into play.  This Table is here to help you create enemies and opposition on the fly:
              </p>

              <div class='table-responsive'>
                <table class="table">
                  <thead class='thead-dark'>
                    <tr>
                      <th scope="col" class='text-center'>PERCENTILE<br>ROLL</th>
                      <th scope="col" class='text-center'>NPC<br>ASSESSMENT</th>
                      <th scope="col" class='text-center'>ACTIONS</th>
                      <th scope="col" class='text-center'>SKILL<br>RATING</th>
                      <th scope="col" class='text-center'>TRAITS</th>
                      <th scope="col" class='text-center'>BASELINE<br>CLASSIFICATION</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class='table-light'>
                      <th scope="row" class='text-center'>01 - 10</th>
                      <td class='text-center'>SMART, FAST, AND CAPABLE</td>
                      <td class='text-center'>8</td>
                      <td class='text-center'>125<br>CUNNING</td>
                      <td class='text-center'>20 - D10<br>(Divide 2D10 Roll by 2)<br>~14</td>
                      <td class='text-center'>DANGEROUS OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>11 - 20</th>
                      <td class='text-center'>SMART & FAST</td>
                      <td class='text-center'>8</td>
                      <td class='text-center'>85<br>CUNNING</td>
                      <td class='text-center'>20 - 2D10<br>~10 - 12</td>
                      <td class='text-center'>SUPERIOR OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>21 - 30</th>
                      <td class='text-center'>FAST & CAPABLE</td>
                      <td class='text-center'>8</td>
                      <td class='text-center'>125</td>
                      <td class='text-center'>20 - D10<br>(Divide 2D10 Roll by 2)<br>~14</td>
                      <td class='text-center'>SUPERIOR OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>31 - 40</th>
                      <td class='text-center'>SMART & CAPABLE</td>
                      <td class='text-center'>6</td>
                      <td class='text-center'>125<br>CUNNING</td>
                      <td class='text-center'>20 - D10<br>(Divide 2D10 Roll by 2)<br>~14</td>
                      <td class='text-center'>SUPERIOR OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>41 - 50</th>
                      <td class='text-center'>ABOVE AVERAGE</td>
                      <td class='text-center'>6</td>
                      <td class='text-center'>100</td>
                      <td class='text-center'>2D10<br>~12</td>
                      <td class='text-center'>"EQUAL" OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>51 - 60</th>
                      <td class='text-center'>AVERAGE</td>
                      <td class='text-center'>5</td>
                      <td class='text-center'>100</td>
                      <td class='text-center'>2D10<br>~10 - 12</td>
                      <td class='text-center'>"EQUAL" OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>61 - 70</th>
                      <td class='text-center'>BELOW AVERAGE</td>
                      <td class='text-center'>4</td>
                      <td class='text-center'>85</td>
                      <td class='text-center'>2D10<br>~8 - 10</td>
                      <td class='text-center'>INFERIOR OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>71 - 80</th>
                      <td class='text-center'>SLOW BUT SMART</td>
                      <td class='text-center'>4</td>
                      <td class='text-center'>85<br>CUNNING</td>
                      <td class='text-center'>2D10 - 2<br>~8 - 10</td>
                      <td class='text-center'>"EQUAL" OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>81 - 90</th>
                      <td class='text-center'>SLOW BUT CAPABLE</td>
                      <td class='text-center'>4</td>
                      <td class='text-center'>100</td>
                      <td class='text-center'>20 - D10<br>(Divide 2D10 Roll by 2)<br>~12 - 14</td>
                      <td class='text-center'>INFERIOR OPPOSITION</td>
                    </tr>

                    <tr class='table-light'>
                      <th scope="row" class='text-center'>91 - 100</th>
                      <td class='text-center'>INEPT</td>
                      <td class='text-center'>3</td>
                      <td class='text-center'>85</td>
                      <td class='text-center'>~6 - 8</td>
                      <td class='text-center'>TRIVIAL OPPOSITION</td>
                    </tr>

                  </tbody>
                </table>
              </div>

              <ul>
                <li>
                  <strong>CUNNING:</strong> means that the Storyteller should "Actively" try to both harm and outsmart the Players as much as possible (as if they were Playing themselves).  <strong>Bottom line is that "Cunning" enemies are dangerous whereas others are relatively predictable!</strong>
                </li>
              </ul>

              <h5 class='text-center'><u><strong>ANIMALS & DANGEROUS WILDLIFE</strong></u></h5>

              <p class='tab'>
                There are many forms of dangerous wildlife that exist in North America that pose significant risk to human life, especially now that the majority of the population has become centralized and humanities "Infinite Growth Model" no longer inhibits Natures "Darwinism" and unfettered population growth and thrival.  From predatory species like bears, wolves, dogs, coyotes, cougars, and mountain lions to herbivores like cattle, goats, deer, elk, moose, horses, and even large gangs of vicious wild turkeys (known fact on both the East and West Coast!); each one has developed means to either Attack or Defend itself.  This section addresses some of the differences between man and animal, primarily the following things to consider: 
              </p>

              <ul>
                <li>
                  <strong>ANIMAL SIZE:</strong> Animal size is the first consideration Storytellers need to take into account.  Larger creatures such as bears, horses, and cattle will be considerably easier to Strike than a human being or a small dog or raccoon.  Smaller creatures like medium sized dogs, cats, oppossums, snakes, birds, and rodents will obviously be more difficult to hit.  Storytellers act accordingly!
                </li>
                <br>

                <li>
                  <strong>RANDOM HIT CONSIDERATIONS:</strong> Throughout the ages, animals have learned that their necks and their bellies are the "Soft Spots" that they need to protect.  Aside from Apes who could follow the given Random Hit Results, Storytellers should just do their best to relate the Random Hit Result to the part of the animals body 
                </li>
                <ul>
                  <li>
                    It seems pertinent to point out that most of the creatures the Players might encounter will likely walk on all four legs unless they "Stand Tall" in order to kick or come crashing down on their opponent.  This means that the Arms will be the Front Legs, and the Legs will be the Back legs.  It also means that more often than not Strikes to the Ribs can also damage the animals Shoulder Blades
                  </li>

                  <li>
                    Additionally there is a lot of marine life that have tails rather than legs, and creatures like alligators have both.  For creatures like the shark, dolphin, whale, seal, or sea lion it may make more sense to treat the Upper Arm and Forearm Strikes shots to the Ribs, and the Hands as the creatures Fins.  In the case of the alligator it might make more sense to consider the Tail the "Legs", and their actual Legs the "Pelvic Region" given body proportions...
                  </li>
                </ul>
                <br>

                <li>
                  <strong>TRAIT VARIANCE:</strong>  Many animals are considerably faster, stronger, and more enduring than the typical human being.  In the wild they NEED to be in order to survive.  This means that the <strong>Maximum of 20 for Traits does not apply to them!</strong>  However, for realities sake <strong>Trait Checks should NOT be forfeited either</strong>, just give them significant bonuses and use the dice to determine the creatures effectiveness.  For simplicities sake <strong>no creature should ever have more than 10 Actions when attacking, though they may run considerably faster than the typical rules allow!</strong>
                </li>
                <br>

                <li>
                  <strong>ATTACK ADAPTATIONS:</strong> Most wildlife has evolved specialized attack and self defense adaptations to make them efficient killers. Be it tooth, claw, horn, tusk, or powerful limbs; they can definitely inflict a lot of damage to a human being.  Most animals will attempt to take their target to the ground, increasing their ability to cause further injury
                </li>
                <ul>
                  <li>
                    <strong>TOOTH & CLAW:</strong> These are most prevalent in predatory species, though even omnivores and herbivores are known to bite their attackers.  Its important to note that most animals weilding these survival tools possess impressive jaw strength
                  </li>
                  <ul>
                    <li>
                      <strong>BITING vs. MAULING -</strong>  An animal is usually known to either "Snap" at a target with quick strikes to break the skin and cause blood loss, or "Lock" onto their target and then shake their heads back and forth to break bones, rip the flesh from their target effectively crippling movement, or perform a "Death Roll" to accomplish the same feat.  This can cause exceptional Blood Loss! In the instance of Mauling a target in this way, Action spending should be used every time the creature changes direction of the pull
                    </li>

                    <li>
                      <strong>CLAWING vs. GRABBING -</strong>  Many creatures also have claws that they will either Slash (treated as an Edged Swing) or Grab onto their target to either Pin or Pull them into their Jaws to make Biting Attacks more effective.  In the case of Grabs, just treat it as Grappling Attacks that can cause Blood Loss
                    </li>
                  </ul>

                  <li>
                    <strong>HORNS & TUSKS:</strong> These types of attacks can either be used as Piercing or Blunt Strikes depending on the animal
                  </li>
                  <ul>
                    <li>
                      <strong>THRUSTS vs. SWINGS -</strong> These creatures will either use their horns to attempt to impale their target or knock them away in order to create enough range to attack again or maximize the effectiveness of kicking or stomping their target
                    </li>

                    <li>
                      <strong>KICKING & TRAMPLING:</strong> Many hooved animals have the ability to either kick or stomp the ever lasting hell out of their opposition, shattering bone so they can either make the kill themselves or run for their lives
                    </li>
                  </ul>

                  <li>
                    <strong>VENOM & POISONS:</strong> There are also many forms of reptile or insect in North America that use chemical means to incapacitate, kill, inflict incredible amounts of pain, or make their target incredibly sick.  This should be considered a direct assault on a characters Endurance Trait, and can easily prove fatal with a dramatic reduction of anti-venom being produced in the Aftermath!
                  </li>
                </ul>
                <br>

                <li>
                  <strong>DEFENSE ADAPTATIONS:</strong>  Many species have evolved natural "armor" against their predators.  For instance thick fur and loose skin is present on lots of dogs, wolves, and bears; whereas the alligator or crocodile has incredibly tough scales, the shark has thick sandpaper like skin, and cattle, buffalo, bears, whales, seals, and sea-lions have a dense protective layer of "blubber" protecting many parts of their body.  All of these things should be considered ARMOR 
                </li>
                <ul>
                  <li>
                    <strong>THICK FUR, LEATHERY SKIN, & BODY FAT:</strong> Can easily protect against most Minor or Glancing Hits, with extra defense against Edged or Blunt attacks
                  </li>

                  <li>
                    <strong>BONE DENSITY:</strong> Many larger creatures possess the benefit of greater bone density.  Bears, horses, and cattle have been known to have small caliber rounds be deflected by their skulls and ribs frequently!  In these cases, repeated Strikes on the same target area may be necessary to fracture the bone enough to allow penetration to the vital organs underneath
                  </li>
                </ul>
                <br>

                <li>
                  <strong>UNIQUE PERSONALITIES:</strong> Every life is "unique" in how they approach and tackle survival issues.  With this in consideration, its recommended that <strong>Storytellers use the aforementioned NPC Generation Table when contemplating animals!</strong>
                  It makes sense that maybe some of the Inferior Opposition might be interpreted as malnourished or starved creatures
                </li>
                <br>

                <li>
                  <strong>OTHER CONSIDERATIONS:</strong> Most animals don't care much for anything other than the survival of themselves and their offspring, and can easily be persuaded to just leave to find easier prey.  Bottom line is that no human being can "reliably" predict animal behavior, just look at how many times Steve Irwin was bitten or attacked on camera!
                </li>
                <ul>
                  <li>
                    <strong>MANUEVERABILITY:</strong> Most creatures are exceptionally limited by their evolution on what they can or cannot do given their absence of thumbs and the ability to grip things.  For instance: many species are incapable of climbing trees, only birds can fly, and alligators, crocodiles, and sharks can't effectively swim backwards (though the reptiles technically CAN using their feet, just not very fast)!  Some animals will almost never "Rear Up" or "Stand Tall" because of the risk of exposing their underbelly.  Knowing these things can save your life!
                  </li>

                  <li>
                    <strong>FIRE -</strong> Nearly every creature on the planet (other than those with specific training and exposure) is absolutely terrified of fire.  Smoke hurts their heightened sense of smell, it is incredibly painful, fur catches easily, and generally they just don't seem to understand anything more than the fact that it's a threat.  Players can use this to their advantage!
                  </li>

                  <li>
                    <strong>GUNFIRE -</strong> Like the flame, most creatures have enhanced sense of hearing and gunfire can be exceptionally painful to their ears.  Without specific exposure and training, most animals will simply flee from the noise itself!  This is a prime example of when animals would take a Willpower Check when humans would not need to
                  </li>
                </ul>
              </ul>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingTwelve">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='tacticalBtn' type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
              TACTICAL GEAR
            </button>
          </div>

          <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
            <div class="card-body">
              
              <p class='tab'>
                Since the dawn of human history people have used both tools and communication to establish dominance over nature and other man-made threats.  These tools have allowed us collectively to tackle all manner of problems and obstacles with the mentality of it being better to "Work smarter, not harder".  That said, there is near infinite amounts of tactical gear present in the world to handle nearly every situation.  Hundreds of years ago mankind discovered simple things like belt hooks to speed up reload times on crossbows, hooks on melee weapons to rip the shields from their enemies hands, all armor is effectively tactical gear.  Camoflauge clothing serves to increase stealth and concealability of both hunters and warfighters alike.  <strong>By this point, the Storytellers should understand the system well enough to make use of nearly any tool</strong> but for the sake of consistency here are a few items that can give an idea on how to accomplish the process: 
              </p>

              <ul>
                <li>
                  <strong>Scopes -</strong> Scopes are designed to sacrifice short range firing bonuses in order to reduce or eliminate long range penalties
                </li>

                <li>
                  <strong>Laser & Reflex Sights</strong> Grant a small bonus to strike (assuming the laser is still visible to the Shooter)
                </li>

                <li>
                  <strong>High Capacity Magazines, Ammunition Drums, & Belt Feeds -</strong> Obviously reduce the frequency of having to Reload a weapon
                </li>

                <li>
                  <strong>Silencers -</strong> Muffle and reduce the noise made from firing a weapon
                </li>

                <li>
                  <strong>Revolver Speed Loads -</strong> Effectively serve as "Magazines" for classic hand guns
                </li>

                <li>
                  <strong>Bipods -</strong> Stabilize a weapon when resting on a stable surface, reducing interference from having to hold a Rifle and manage breathing
                </li>

                <li>
                  <strong>Ported Barrels, Recoil Compensators, & Gas Vents -</strong> Reduce the impact of Recoil when considering high caliber or sustained fire
                </li>

                <li>
                  <strong>Bayonets -</strong> Enable a Rifle to be used as a Spear
                </li>

                <li>
                  <strong>Shell Catchers -</strong> Attach to the shell ejection port to prevent spent ammunition cartridges from being left at the scene
                </li>

                <li>
                  <strong>Quick Release Pouches & Holsters -</strong> Speed up retrieval of items from ones person
                </li>

                <li>
                  <strong>Belt Hooks -</strong> Can speed up Drawing a Crossbow by allowing the shooter to nock the hook and simply push down to re-cock the trigger mechanism
                </li>

                <li>
                  <strong>Slings -</strong> Let a Rifle or Long Arm remain at rest on the users shoulder rather than remaining in hand at all times 
                </li>

                <li>
                  <strong>Thermal & Night Vision Imaging Headsets -</strong> Eliminate light penalties (though night vision can be blinded by exceptionally bright lights)
                </li>

                <li>
                  <strong>Hand Free Radios -</strong> Let teams effectively communicate while operating across the entire AO
                </li>

                <li>
                  <strong>Range Detectors -</strong> Are designed to designate distance, wind speed, and arc of trajectory at exceptionally long ranges to mitigate the "Coriolis Effect"
                </li>

                <li>
                  <strong>Smoke Grenades -</strong> Have the capacity to both signal and conceal operatives at range
                </li>

                <li>
                  <strong>Strobing Light Attachments -</strong> Can both Blind and Reveal enemies in extreme darkness
                </li>

                <li>
                  <strong>Archery: Ranged Sights -</strong> Are used to assist a familiar Bowman with the Arc of Trajectory needed to hit a target at increased distance
                </li>

                <li>
                  <strong>Sharpening Sheathes / Scabbards -</strong> Hone the weapons edge every time it is drawn or returned
                </li>

                <li>
                  <strong>Blades: Grooved Spines -</strong> Can hold poisons or chemicals to increase lethality and effectiveness
                </li>

                <li>
                  <strong>Arrow Attaches -</strong> Reduce the amount of manuevering needed to re-nock an arrow before Drawing the Bow
                </li>
                <br>

                <li>
                  Etc. etc.  The list goes on and on.  <strong>Storytellers do your thing!  If you aren't familiar with what a Player is talking about have them explain it to you!</strong>  Hell, let them teach you! Get links to research! As far as Tactical Gear goes it will usually Modify a Skill, Enhance the senses, or Reduce Action usage but every tool has its uses.  Any item that helps a character move faster, hit harder, protect themselves better, or generally fight stronger can be considered Tactical Gear.  This is another case of where <strong>Good Ideas come into play!</strong>
                </li>

                <li>
                  This also seems like a good opportunity to cover <strong>CARRY WEIGHT</strong>.  Many games love to just determine a characters Carry Weight from their Strength or Endurance Attributes and leave it there, never factoring in Agility or Speed Penalties, or even explaining HOW EXACTLY one carries an exhorbitant amount of junk for trade or sale later.  This is <strong>NOT</strong> the case in the Aftermath.  Every Player is expected to understand that they need to <strong>explain to the Storyteller what they are bringing with them on their person and how they intend to accomplish this!</strong>  If you have an empty Duffel bag you might be able to carry 6 Rifles, but otherwise a Player better have a plan on distributing the weight and bulk of items in order for the Storytellers to be able to adjust your Agility and Speed appropriately!
                </li>
              </ul>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header brass text-center" id="headingThirteen">
            <button class="btn btn-dark btn-lg btn-block border px-0" id='firstCharBtn' type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
              FIRST CHARACTER
            </button>
          </div>

          <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
            <div class="card-body">
              
              <p class='tab'>
                The Aftermath is intended to be a group oriented Role Playing Game whose central theme revolves around Survival, Realistic Combat (and its associated horrors), while also exemplifying the absolute best and worst of humanity.  The bottom line is that a "Starving America is a Dangerous America".  After intense research and countless hours of study, it is my personal opinion that should this country find itself unable to meet its "On Demand" Freight requirements, untold terror could easily sweep the nation.  Combine that with the fact that rather than ever spending the time or effort to develop any sort of "Civil Defense" strategy and instead rely on exhorbitant military spending to ensure that any enemy of the state has to contend with the concept of "Mutually Assured Destruction"; it seems to me that it may only be a matter of time before someone develops the technological advances to challenge this theory.  It is my hope that this game might teach others to learn some measure of self-reliance, how to keep calm when shit hits the fan, pick up a few survival skills, appreciate time-sensitive windows of opportunity, and discover the ability to realistically assess their own strengths and weaknesses to both survive and thrive should the supposedly impossible occur.
              </p>

              <p class='tab'>
                That said, there are many things to take into account when operating on the stage of The Aftermath.  First and foremost...<strong>SURVIVE!</strong> It is highly imperative that Players understand that <strong>the threat of Death or Dismemberment are very real</strong> in this game.  You are not going to have epic adventures against unparalleled odds and walk away unscathed.  The minute any man, woman, or child decides to embark on a journey of Violence the rest of their lives are almost certainly going to be "Brief and full of excitement"!  <strong>You will have beloved characters die because dice are cruel! Best to just get that out of the way now!</strong> Each characters "purpose" is to ensure that their lives, sacrifices, and suffering mean something!  Now that that is established, here are a few tips for keeping your first character alive:
              </p>

              <ul>
                <li>
                  <strong>A NEW CHARACTER'S SKILLS ARE DETERMINED BY THEIR TRAITS:</strong>  You will notice that the first page of creating a new character only has Traits, Background, Age, and Ethnicity listed.  This is because every skill that you AUTOMATICALLY start with, as well as those you CHOOSE are entirely reliant upon these Traits!
                </li>
                <ul>
                  <li>
                    <strong>Academic Skills -</strong> are highly reliant upon Perception, Logic, and Memory; with minor ties to other Traits
                  </li>

                  <li>
                    <strong>Melee Combat Skills -</strong> are generally a melting pot of Agility, Strength, and Speed
                  </li>

                  <li>
                    <strong>Ranged Combat Skills -</strong> are primarily determined by Perception and Agility
                  </li>

                  <li>
                    <strong>Vehicle Skills -</strong> are mostly focused on Perception and Speed (reaction times)
                  </li>

                  <li>
                    <strong>Survival Skills -</strong> vary widely but tend to revolve around Perception and Logic
                  </li>

                  <li>
                    <strong>Every skill available directly reflects on how the Traits determine the initial values!</strong>  Use your head!  If you score really low on Charisma you likely wont be very persuasive or manipulative.  Low Agility means low physical prowess and body awareness.  Low Perception means a distinct lack of alertness.  Etc etc...
                  </li>
                </ul>
                <br>

                <li>
                  <strong>SPEED is basically the God Stat for combat effectiveness!</strong>  Hesitation means failure, and Fear is the Mind-Killer!
                </li>
                <br>

                <li>
                  It is absolutely imperative that if you intend to survive long, a Player should <strong>get at least one Ranged Combat Skill and one Melee Combat Skill above 100 ASAP</strong>.  You will also find yourself Grappling and Wrestling with your enemies often if the Storyteller decides they are realistically trying to fight for their lives, mostly because it is a great way to make sure your opponents can't hit you! With this in mind, you either need to be so formidable up close that they never get the chance, or you need to spend a fair amount of Experience rounding out your characters abilities to react to a variety of engagements!
                </li>
                <br>

                <li>
                  <strong>Bullets and Food are the new currency of this America</strong>.  They are both exceptionally difficult to acquire because the demand is incredibly high now, especially after learning that the government can only do so much to meet their needs.  Winter is difficult no matter where you are in the US thanks to rapidly advancing climate change.  Because of this, protecting your food supply (or hunting) is critical to everyones likelihood of survival.  With this in mind, it is infinitely easier to fashion arrows than make chemical compounds, but archery weapons are definitely less concealable than firearms.  That said, you should <strong>either prepare to make every single round count (100 or more on the Skill) or learn not to rely on the "Way of the Gun"</strong> quite so heavily.  There are about a thousand ways to solve most problems, violence "theoretically" should be the last resort!  Remember that most of your "enemies" are only doing what they are doing because they are starving as well or just trying to feed their families
                </li>
                <br>

                <li>
                  <strong>TAKE COVER!</strong> You are much more likely to survive if you never get hit at all!  Keep calm and take your time, save that last action to hide behind the cover entirely and then the first action to pop out via Maximizing!  As long as you dont let yourself get "Flanked" or Overrun this is your safest bet!
                </li>
                <br>

                <li>
                  When questing for violence, <strong>you should absolutely expect to recieve injury yourself!</strong>  The First Aid Skill is how you can ensure your first character will live to fight another day.  You have seen how the Modifiers work!  Get this life saving skill above 100 ASAP so Blood Loss is less likely to claim their life!
                </li>
                <br>

                <li>
                  <strong>Learn to pick your battles, and only strike when the time is right!</strong>  Gather information, learn strengths and weaknesses, habits, tools, thoughts, and methods!  Knowledge is power, and if given the chance you don't want to reveal your intent too early.  <strong>Use the NOTES section of the Game Page often and WHISPER with your other Players.</strong> When you need to operate independently from the group you can <strong>WHISPER to the Storyteller too!</strong>
                </li>
                <br>

                <li>
                  Which leads to the next point: <strong>Learn to work together!</strong>  Every character varies significantly from one to the next, and well rounded units are much more adaptable.  Also <strong>try to recruit NPC support from the Storyteller when discretion isn't really necessary in the gameplan!</strong>  Help enough people, and they will to help you, especially if you achieve any measure of success.  Morale takes care of itself once you prove you get results, and every advantage helps!
                </li>
                <br>

                <li>
                  <strong>A Jack of all Trades is better than a Master of One:</strong> You have no idea what the Storyteller might be planning to put you and the team through.  Your team mates may make rash decisions and get themselves killed.  <strong>If you can remain reasonably self sufficient, you are much more likely to accomplish your own objectives; which frees you up to help others!</strong>  You will not make it long if you do not learn to take care of yourself first.  The chain (team) is only as strong as its weakest link!
                </li>
                <br>

                <li>
                  <strong>Learn to save Actions!</strong> Saving Actions to Interrupt your enemies WILL save your life!  <strong>Remember that each Combat Round is only 3 seconds!</strong>  Most of it will be over in 2 minutes or less!  Take your time to ensure your success unless you know you will be overwhelmed and outnumbered in the IMMEDIATE future!  Risking grievous injury to close out combat to save yourself 3 seconds almost NEVER makes sense!
                </li>
                <br>

                <li>
                  The most concrete way to ensure you Survive any conflict is to <strong>eliminate or disable those who means you harm as quickly as possible!</strong>  Given that you were just told to SAVE actions to protect your own neck, the real trick is finding the best "balance" between the two, but this is where <strong>spending additional actions for Targeted Strikes establish their importance</strong>. 
                </li>
                <br>

                <li>
                  Good luck, and Good Hunting!
                </li> 
              </ul>

            </div>
          </div>
        </div>

      </div>
      
      <script src='js/instantMessage.js'></script>
      <script src='node_modules/socket.io-client/dist/socket.io.js'></script>
      <?php include('footer.php'); ?>
    </div> 
  </body>
</html>