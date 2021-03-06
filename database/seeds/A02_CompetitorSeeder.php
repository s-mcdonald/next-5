<?php

use Illuminate\Database\Seeder;

class A02_CompetitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $thoroughbreds = 
        [
            'Abiding Star',
            'Active Management',
            'Adelberg',
            'Adios Reality',
            'Admiralty',
            'Adulator',
            'Adventist',
            'Air Force Blue',
            'Air Vice Marshal',
            'Airmans Creed',
            'Airoforce',
            'Algenon',
            'All World',
            'Allaboutaction',
            'Alpha Team',
            'American Dubai',
            'American Freedom',
            'American Pioneer',
            'American Promise',
            'Amis Gizmo',
            'Ample Sufficiency',
            'An Khe Pass',
            'Annals of Time',
            'Annual Report',
            'Arabian Leopard',
            'Arrogate',
            'Attraction',
            'Avast Matey',
            'Awesome Banner',
            'Awesome Gent',
            'Awesome Slew',
            'Awesome Speed',
            'Azar',
            'Aztec Sense',
            'Back Togetheragain',
            'Bar None',
            'Battery',
            'Battle Tap',
            'Benediction',
            'Big Red Rocket',
            'Big Squeeze',
            'Billys Kitten',
            'Bird of Trey',
            'Bird Song',
            'Bistraya',
            'Black Ops',
            'Blue Creek (GB)',
            'Boalt Hall',
            'Bodestar',
            'Bombard',
            'Bombs Away',
            'Brodys Cause',
            'Butler Field',
            'Cadeyrn',
            'Cant Remember',
            'Candy My Boy',
            'Cape Nelo',
            'Cards of Stone',
            'Caribbean',
            'Casigordo',
            'Catapult',
            'Charmed Victory',
            'Cherry Wine',
            'Classic Ride',
            'Classy Bird',
            'Clear the Way',
            'Coach Q',
            'Cocked and Loaded',
            'Cold Blood',
            'Collected',
            'Collective Wisdom',
            'Colonel Dan',
            'Commend',
            'Condominium',
            'Conquest Big E',
            'Conquest Daddyo',
            'Conquest Harlequin',
            'Conquest Streetwar',
            'Conquest Superstar',
            'Conquest Windycity',
            'Cotton Town',
            'Creator',
            'Crescent Drive',
            'Cupid',
            'Curlin Rules',
            'Cutacorner',
            'Danebury',
            'Danzing Candy',
            'Dazzling Gem',
            'Decorated Soldier',
            'Demonslayer',
            'Denmans Call',
            'Deserved',
            'Destin',
            'Diplodocus',
            'Direct Message',
            'Discreetly Firm',
            'Discreetness',
            'Divine Shift',
            'Dixie Runner',
            'Doctor Mounty',
            'Dolphus',
            'Dont Be So Salty',
            'Donegal Moon',
            'Drefong',
            'Dressed in Hermes',
            'Driven West',
            'Economic Model',
            'Eddie Haskell',
            'Ekati Wildcat',
            'El Charro',
            'Emoji Man',
            'Engram',
            'Enroute',
            'Eric the Trojan',
            'Esposito',
            'Eternal Bird',
            'Exaggerator',
            'Fashionable Freddy',
            'Fellowship',
            'Fetisov',
            'Fish Trappe Road',
            'Flexibility',
            'Flora Dora (f)',
            'Flying Bullet',
            'Forevamo',
            'Forever Bernardini',
            'Forever dOro',
            'Fort Smith',
            'Found Money',
            'Foxtrot Charlie',
            'Frank Conversation',
            'Freemark',
            'French Getaway',
            'Galileos Spear (FR)',
            'Ganges',
            'General Macarthur',
            'Get Jets',
            'Gettysburg',
            'Giant Trick',
            'Gift Box',
            'Gimlet',
            'Giopress',
            'Glenn Coco',
            'Goats Town',
            'Good for It',
            'Governor Malibu',
            'Grand Max',
            'Grand Nenuco',
            'Gray Sky',
            'Great Dane',
            'Greenpointcrusader',
            'Gulf of Mexico',
            'Gun Runner',
            'Gwynn Oak Park',
            'Hammers Vision',
            'Hand of Power',
            'Happy Match',
            'Hard Hitter',
            'Hard Study',
            'Hardly Home',
            'Harlan Punch',
            'Hatter',
            'Hawk',
            'Henry the King',
            'Highly Prized (GB)',
            'Hint of Roses',
            'Hit It a Bomb',
            'Hoffenheim',
            'Hollywood Strike',
            'Hot Item',
            'Huntintheholidays',
            'I Will Score',
            'I. M. Mighty',
            'Imalreadythere',
            'Ifyousnoozeyoulose',
            'Ima Monster',
            'In Equality',
            'Inside Straight',
            'Irish',
            'Is Trevor Clever',
            'Isofass',
            'Isotherm',
            'Its The Ice (GB)',
            'Its All Relevant',
            'Japhir',
            'Jays Way',
            'Jazzy Times',
            'Jess I Am',
            'John Q. Public',
            'Journey by Sea',
            'Judaman',
            'Justin Squared',
            'Kasseopia (GB)',
            'Kelly Tough',
            'Kenjis Giant',
            'King Kranz',
            'Kismets Heels',
            'Kiss Limit',
            'Knights Key',
            'Lani',
            'Laoban',
            'Latest Craze',
            'Let Me Go First',
            'Lets Meet in Rio',
            'Liam the Charmer',
            'Life Is a Trip',
            'Little Mo',
            'Lookin for a Kiss',
            'Lost Iron',
            'Lubsen',
            'Luna de Loco',
            'Mac Daddy Mac',
            'Made of Steel',
            'Magical Mystery',
            'Majesto',
            'Marengo Road',
            'Marqula',
            'Marty Montana',
            'Master Magician',
            'Matt King Coal',
            'Memories of Winter',
            'Mighty Moses',
            'Miles of Humor',
            'Mo for the Money',
            'Mo Power',
            'Mo Tom',
            'Mohaymen',
            'Molasses Brown',
            'Money Illusion',
            'Monte Man',
            'Moon Gate Warrior',
            'Moonlight Drive (ITY)',
            'Mooose',
            'Mor Spirit',
            'More Alex',
            'Mr. Coker',
            'Mr. Roary',
            'Mt Veeder',
            'My Chennai Xpress',
            'My Man Sam',
            'Name Changer',
            'Name for the Blame',
            'Never Gone South',
            'New York Candy',
            'Nominal Dollars',
            'Northwest Tale (f)',
            'Nyquist',
            'One More Orman',
            'Opportunistic',
            'Oregon',
            'Ossetra',
            'Outwork',
            'Path of David',
            'Patton Proud',
            'Percolator',
            'Perfect Parade',
            'Perfect Saint',
            'Picadilly Roadster',
            'Pinnacle Peak',
            'Pinson',
            'Pinstripe',
            'Prime Time Man',
            'Prospectus',
            'Quijote',
            'Ralis',
            'Rally Cry',
            'Rated R Superstar',
            'Ready Dancer',
            'Realm',
            'Remesses',
            'Richie the Bull',
            'Riddler',
            'Riker',
            'Rolling Tizway',
            'Royal Obsession (f)',
            'Safe Passage',
            'Sail Ahoy',
            'Saint Ignatius',
            'Saltini',
            'Sam Missile (IRE)',
            'Saratoga Mischief',
            'Sawyers Mickey',
            'Scholar Athlete',
            'Sea Wizard',
            'Seeking Blame',
            'Seeking the Soul',
            'Semper Fortis',
            'Sensational Ride',
            'Seymourdini',
            'Shagaf',
            'Shakhimat',
            'Siding Spring',
            'Sightforsoreeyes',
            'Singleton',
            'Smokey Image',
            'Snow Fighter',
            'Somesville',
            'Sorryaboutnothing',
            'Sound the Horns',
            'Southern Pharaoh',
            'Southside Warrior',
            'Southwest Trail',
            'Speed Check',
            'Spikes Shirl',
            'Star Hill',
            'Start a War',
            'Stone',
            'Stormin In',
            'Stradivari',
            'Street Vision',
            'Sudden Surprise',
            'Suddenbreakingnews',
            'Sunny Ridge',
            'Surgical Strike',
            'Swagger Jagger',
            'Swipe',
            'Synchrony',
            'Tale of Mist'
        ];

        $harness = [
            'Uncle Mo',
            'Bernardini',
            'Eskendereya',
            'Tapit',
            'Trappe Shot',
            'Flatter',
            'Any Given Saturday',
            'War Front',
            'War Front',
            'Distorted Humor',
            'Colonel John',
            'Aragorn (IRE)',
            'Curlin',
            'Candy Ride (ARG)',
            'Mineshaft',
            'E Dubai',
            'Pulpit',
            'Awesome Again',
            'American Lion',
            'Giant Gizmo',
            'English Channel',
            'Old Fashioned',
            'Temple City',
            'Harlans Holiday',
            'Scat Daddy',
            'Unbridleds Song',
            'Blame',
            'Birdstone',
            'Awesome of Course',
            'Awesome Again',
            'Awesome Again',
            'Awesome Again',
            'Scat Daddy',
            'Street Sense',
            'Eddington',
            'Candy Ride (ARG)',
            'Bernardini',
            'Smart Strike',
            'Pulpit',
            'Summer Bird',
            'Lemon Drop Kid',
            'Kittens Joy',
            'Birdstone',
            'Unbridleds Song',
            'Haynesfield',
            'Hard Spun',
            'Street Cry (IRE)',
            'Scat Daddy',
            'Exchange Rate',
            'War Front',
            'Smart Strike',
            'Giants Causeway',
            'Malibu Moon',
            'Malibu Moon',
            'Misremembered',
            'Candy Ride (ARG)',
            'Cape Blanco (IRE)',
            'Bustin Stones',
            'Harlans Holiday',
            'Arch',
            'Kittens Joy',
            'Flatter',
            'Paddy OPrado',
            'Fusaichi Pegasus',
            'Birdstone',
            'Fort Prado',
            'Super Saver',
            'Colonel John',
            'Flatter',
            'City Zip',
            'Quiet American',
            'Colonel John',
            'War Front',
            'Tiznow',
            'Tapit',
            'Scat Daddy',
            'Harlans Holiday',
            'Street Cry (IRE)',
            'Uncle Mo',
            'Tiznow',
            'Hat Trick (JPN)',
            'Tapit',
            'Flower Alley',
            'Tapit',
            'Curlin',
            'Even the Score',
            'Super Saver',
            'Twirling Candy',
            'Misremembered',
            'Proud Citizen',
            'Tale of the Cat',
            'Northern Afleet',
            'Flatter',
            'Giants Causeway',
            'Sky Mesa',
            'Bernardini',
            'Discreetly Mine',
            'Discreet Cat',
            'Harlans Holiday',
            'Flatter',
            'Street Sense',
            'Lookin At Lucky',
            'Tiz Wonderful',
            'Malibu Moon',
            'Gio Ponti',
            'Hat Trick (JPN)',
            'Awesome Again',
            'Flatter',
            'Square Eddie',
            'Tale of Ekati',
            'Put It Back',
            'Quality Road',
            'Street Hero',
            'Bernardini',
            'More Than Ready',
            'Ghostzapper',
            'Tiznow',
            'Curlin',
            'Tiznow',
            'Awesome of Course',
            'Smart Strike',
            'Trappe Shot',
            'Bluegrass Cat',
            'First Dude',
            'Smart Strike',
            'Uncle Mo',
            'Bernardini',
            'Scat Daddy',
            'Square Eddie',
            'English Channel',
            'Quality Road',
            'Smart Strike',
            'Giants Causeway',
            'Galileo (IRE)',
            'Gio Ponti',
            'War Front',
            'Scat Daddy',
            'Pioneerof the Nile',
            'Neko Bay',
            'Twirling Candy',
            'Lemon Drop Kid',
            'Gio Ponti',
            'Ghostzapper',
            'Dublin',
            'Neko Bay',
            'Malibu Moon',
            'War Front',
            'Lookin At Lucky',
            'Tapit',
            'Awesome Again',
            'Bernardini',
            'Bernardini',
            'Candy Ride (ARG)',
            'Candy Ride (ARG)',
            'Court Vision',
            'Candy Ride (ARG)',
            'Tiznow',
            'Flatter',
            'Big Brown',
            'Hard Spun',
            'Harlans Holiday',
            'Fusaichi Pegasus',
            'Henrythenavigator',
            'Manduro (GER)',
            'Tapit',
            'War Front',
            'Midnight Lute',
            'Smart Strike',
            'Tapit',
            'Jump Start',
            'Roman Ruler',
            'Saintly Prospect',
            'Crown of Thorns',
            'Wilburn',
            'Delaware Township',
            'Quality Road',
            'Super Saver',
            'Paddy OPrado',
            'Tale of the Cat',
            'Rodman',
            'Lonhro (AUS)',
            'Sakhees Secret (GB)',
            'Hard Spun',
            'Giants Causeway',
            'Gone Astray',
            'Discreetly Mine',
            'Eskendereya',
            'Proud Citizen',
            'J Ps Gusto',
            'Macho Uno',
            'Zensational',
            'Showcasing (GB)',
            'Quality Road',
            'Giants Causeway',
            'Munnings',
            'Tapit',
            'Sky Classic',
            'Giants Causeway',
            'Tapit',
            'Uncle Mo',
            'Super Saver',
            'Paddy OPrado',
            'Flatter',
            'Smart Strike',
            'Many Rivers',
            'Uncle Mo',
            'Lookin At Lucky',
            'Flatter',
            'Eskendereya',
            'Malibu Moon',
            'Put It Back',
            'Warriors Reward',
            'Unbridled Song',
            'Tiznow',
            'Quality Road',
            'Coast Guard',
            'Awesome Again',
            'Tiznow',
            'Cool Coal Man',
            'Hard Spun',
            'Candy Ride (ARG)',
            'Distorted Humor',
            'Uncle Mo',
            'Uncle Mo',
            'Uncle Mo',
            'Tapit',
            'Big Brown',
            'Big Drama',
            'Custom for Carlos',
            'Bernardini',
            'Red Rocks (IRE)',
            'Pleasantly Perfect',
            'Eskendereya',
            'More Than Ready',
            'Candy Ride (ARG)',
            'Scat Daddy',
            'Ghostzapper',
            'Hold Me Back',
            'Trappe Shot',
            'Uncle Mo',
            'Blame',
            'Munnings',
            'Sidneys Candy',
            'Northern Afleet',
            'Tale of Ekati',
            'Uncle Mo',
            'Istan',
            'Sky Mesa',
            'Mizzen Mast',
            'Into Mischief',
            'Uncle Mo',
            'Istan',
            'Eskendereya',
            'Flashy Bull',
            'Parading',
            'Pleasantly Perfect',
            'Ghostzapper',
            'Yes Its True',
            'Majestic Warrior',
            'High Cotton',
            'Zensational',
            'Uncle Mo',
            'Pomeroy',
            'Square Eddie',
            'Uncle Mo',
            'Kodiak Kowboy',
            'More Than Ready',
            'Haynesfield',
            'Pioneerof the Nile',
            'Benny the Bull',
            'Harlans Holiday',
            'Include',
            'Tizway',
            'Tapit',
            'Congrats',
            'Bernardini',
            'Macho Uno',
            'Bernardini',
            'Smart Strike',
            'Into Mischief',
            'Flatter',
            'Einstein (BRZ)',
            'Uncle Mo',
            'Blame',
            'Perfect Soul (IRE)',
            'Distorted Humor',
            'Dunkirk',
            'Bernardini',
            'Bernardini',
            'Lonhro (AUS)',
            'Warriors Reward',
            'Sightseeing',
            'Malibu Moon',
            'Southern Image',
            'Candy Ride (ARG)',
            'Malibu Moon',
            'Repent',
            'Include',
            'Pioneerof the Nile',
            'Warriors Reward',
            'Uncle Mo',
            'Point Given',
            'Speightstown',
            'Elusive Quality',
            'Grand Slam',
            'Quality Road',
            'Smart Strike',
            'Medaglia dOro',
            'Street Sense',
            'Giant Surprise',
            'Mineshaft',
            'Holy Bull',
            'Red Giant',
            'Crown of Thorns',
            'Birdstone',
            'Tapit',
        ];

        $greyhouds = [
            'Tenthill Doll',
            'Flying Amy',
            'Rapid Journey',
            'Highly Blessed',
            'Chief Havoc',
            'Zoom Top',
            'Macareena',
            'Rookie Rebel',
            'Sandis Me Mum',
            'Brett Lee',
            'Bold Trease',
            'National Lass',
            'Winifred Bale',
            'Temlee',
            'Black Top',
            'Bogie Leigh',
            'Lizrene',
            'Paua To Burn',
            'Sam Bladon',
            'M.A. “Arthur” Morgan',
            'William (Bill) Pearson',
            'Henry Harrison',
            'Ray Herbert',
            'Rod Deakin',
            'Paul Ambrosoli',
            'Howard Ashton',
            'Roy Maidment',
            'Osti Too',
            'Allen Wheeler',
            'Jim Coleman',
            'Dr. James (Jim) Gannon',
            'J.G. “Jack” Nelson',
            'Wee Sal',
            'Ned Bryant',
            'Stan Cleverley',
            'Victor Peters',
            'Frank Kennedy',
            'Vivian James Berresford',
            'Noel Banks',
            'Doug Payne',
            'Brian Johnstone',
            'Ken Carr',
            'Paul Cauchi',
            'Dr John Murray',
            'Albert Bunny Hewton',
            'Tony Zammit',
            'Ray Foley',
            'Brother Fox',
            'Byamee',
            'Tell You Why',
            'George Schofield',
            'Tumble Bug',
            'Miata',
            'Paul Wheeler'
        ];

        // ensure we dont have double ups
        // thoroughbreds
        $thoroughbreds = array_unique($thoroughbreds);

        foreach($thoroughbreds as $competitor)
        {
            DB::table('competitors')->insert(
                [
                    'name' => $competitor,
                    'type_char' => 't'
                ]
            );
        }


        // harness
        $harness = array_unique($harness);

        foreach($harness as $competitor)
        {
            DB::table('competitors')->insert(
                [
                    'name' => $competitor,
                    'type_char' => 'h'
                ]
            );
        }


        // greyhouds
        $greyhouds = array_unique($greyhouds);

        foreach($greyhouds as $competitor)
        {
            DB::table('competitors')->insert(
                [
                    'name' => $competitor,
                    'type_char' => 'g'
                ]
            );
        }
    }
}
