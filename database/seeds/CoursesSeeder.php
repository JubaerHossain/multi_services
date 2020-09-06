<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::find(3);
        $role2 = Role::find(4);
       $trainer = App\User::create([
            'name' => 'Trainer',
            'first_name' => 'Trainer',
            'last_name' => "Trainer",
            'email' => 'trainer@gmail.com',
            'title' => 'Software Enigineer',
            'designation' => 'Software Enigineer',
            'password' => Hash::make(12345678),
            'avatar' =>'public/uploads/profile/trainer.jpg',
            'token' => ''
        ]);
        $trainer->assignRole($role1);
       $mentor = App\User::create([
            'name' => 'Mentor',
            'first_name' => 'Mentor',
            'last_name' => "Mentor",
            'email' => 'mentor@gmail.com',
            'title' => 'Software Enigineer',
            'designation' => 'Software Enigineer',
            'password' => Hash::make(12345678),
            'avatar' =>'public/uploads/profile/mentor.jpg',
            'token' => ''
        ]);
        $mentor->assignRole($role2);
       $outline ='<h3>DAY&nbsp;-01:</h3>

       <ol>
           <li>Objective:&nbsp;Getting&nbsp;familiar&nbsp;with&nbsp;tools&nbsp;and&nbsp;web&nbsp;server.</li>
           <li>Introduction&nbsp;to&nbsp;web&nbsp;development.</li>
           <li>Understanding&nbsp;web&nbsp;server.</li>
           <li>Setting-up&nbsp;development&nbsp;environment.</li>
           <li>Opening&nbsp;necessary&nbsp;online&nbsp;accounts.</li>
           <li>Getting&nbsp;a&nbsp;free&nbsp;online&nbsp;hosting.</li>
       </ol>
       
       <h3>DAY&nbsp;-02:</h3>
       
       <ol>
           <li>Objective:&nbsp;Getting&nbsp;started&nbsp;with&nbsp;front-end&nbsp;web&nbsp;development&nbsp;and&nbsp;HTML5.</li>
           <li>Understanding&nbsp;front-end&nbsp;structure.</li>
           <li>Getting&nbsp;started&nbsp;with&nbsp;HTML5.</li>
           <li>Creating&nbsp;static&nbsp;web&nbsp;pages.</li>
           <li>Hosting&nbsp;the&nbsp;web&nbsp;pages.</li>
           <li>Making&nbsp;a&nbsp;multi-page&nbsp;static&nbsp;site.</li>
       </ol>
       
       <h3>DAY&nbsp;-03:</h3>
       
       <ol>
           <li>Objective:&nbsp;Learning&nbsp;about&nbsp;page&nbsp;styling&nbsp;and&nbsp;CSS.</li>
           <li>Introduction&nbsp;to&nbsp;Cascading&nbsp;Style&nbsp;Sheets&nbsp;(CSS).</li>
           <li>Understanding&nbsp;Classes&nbsp;and&nbsp;IDs.</li>
           <li>Learning&nbsp;common&nbsp;selectors.</li>
           <li>3&nbsp;kinds&nbsp;of&nbsp;styling&nbsp;and&nbsp;their&nbsp;applications.</li>
           <li>Understanding&nbsp;CSS&nbsp;logic.</li>
           <li>Stylizing&nbsp;the&nbsp;web&nbsp;page&nbsp;made&nbsp;in&nbsp;DAY&nbsp;1.</li>
       </ol>
       
       <h3>DAY&nbsp;-04:</h3>
       
       <ol>
           <li>Objective:&nbsp;Learning&nbsp;basic&nbsp;UI/UX&nbsp;design.</li>
           <li>Typography.</li>
           <li>Color&nbsp;theory.</li>
           <li>Effective&nbsp;use&nbsp;of&nbsp;images.</li>
           <li>Online&nbsp;helper&nbsp;tools.</li>
           <li>MATERIAL:&nbsp;Trainees&nbsp;will&nbsp;get&nbsp;an&nbsp;UI/UX&nbsp;design&nbsp;cheat-sheetfor&nbsp;rapid&nbsp;designing</li>
       </ol>
       
       <h3>DAY&nbsp;-05:</h3>
       
       <ol>
           <li>Objective:&nbsp;Introduction&nbsp;to&nbsp;Bootstrap&nbsp;and&nbsp;Responsive&nbsp;Web&nbsp;Design</li>
           <li>Getting&nbsp;familiar&nbsp;with&nbsp;world&rsquo;s&nbsp;#1&nbsp;CSS&nbsp;framework.</li>
           <li>Mobile-first&nbsp;design.</li>
           <li>Upgrading&nbsp;our&nbsp;DAY&nbsp;3&nbsp;project&nbsp;with&nbsp;Bootstrap&nbsp;4.</li>
           <li>Introduction&nbsp;to&nbsp;Bootstrap&nbsp;themes.</li>
           <li>MATERIAL:&nbsp;Trainees&nbsp;will&nbsp;get&nbsp;3&nbsp;official&nbsp;Bootstrap&nbsp;themes&nbsp;(99$&nbsp;each)&nbsp;for&nbsp;free.</li>
       </ol>
       
       <h3>DAY&nbsp;-06:</h3>
       
       <ol>
           <li>Objective:&nbsp;Making&nbsp;a&nbsp;professional&nbsp;looking&nbsp;complete&nbsp;website&nbsp;with&nbsp;HTML,&nbsp;CSS,&nbsp;Bootstrap.</li>
           <li>Introduction&nbsp;to&nbsp;project&nbsp;management.</li>
           <li>Making&nbsp;a&nbsp;skeleton&nbsp;site&nbsp;with&nbsp;HTML5.</li>
           <li>Positioning&nbsp;elements&nbsp;with&nbsp;CSS3.</li>
           <li>Making&nbsp;it&nbsp;pop&nbsp;with&nbsp;Bootstrap&nbsp;4.</li>
           <li>Publishing&nbsp;our&nbsp;site&nbsp;for&nbsp;free.</li>
           <li>Project&nbsp;Preview:&nbsp;https://farhanhasinc.github.io/static-site-template-3/</li>
       </ol>
       
       <h3>DAY&nbsp;-07:</h3>
       
       <ol>
           <li>Objective:&nbsp;Getting&nbsp;started&nbsp;with&nbsp;dynamic&nbsp;web&nbsp;programming&nbsp;with&nbsp;JavaScript.</li>
           <li>Introduction&nbsp;to&nbsp;computer&nbsp;programming.</li>
           <li>Hello&nbsp;World&nbsp;in&nbsp;JavaScript.</li>
           <li>Variables&nbsp;and&nbsp;Arrays.</li>
           <li>Operators.</li>
           <li>Control&nbsp;flow.</li>
           <li>Iterators.</li>
       </ol>
       
       <h3>DAY&nbsp;-8:</h3>
       
       <ol>
           <li>Objective:&nbsp;Learning&nbsp;rest&nbsp;ofthe&nbsp;JavaScript&nbsp;programming&nbsp;language.</li>
           <li>Functions.</li>
           <li>JavaScript&nbsp;objects.</li>
           <li>JSON.</li>
           <li>Document&nbsp;Object&nbsp;Model&nbsp;(DOM)</li>
           <li>Manipulating&nbsp;web-pages&nbsp;with&nbsp;JavaScript.</li>
           <li>JavaScript&nbsp;Exercises.</li>
       </ol>
       
       <h3>DAY&nbsp;-09:</h3>
       
       <ol>
           <li>Objective:&nbsp;Write&nbsp;less&nbsp;code,&nbsp;get&nbsp;more&nbsp;done&nbsp;with&nbsp;jQuery.</li>
           <li>What&nbsp;are&nbsp;JavaScript&nbsp;libraries.</li>
           <li>Introduction&nbsp;to&nbsp;world&rsquo;s&nbsp;most&nbsp;popular&nbsp;JavaScript&nbsp;Library.</li>
           <li>Manipulating&nbsp;web-pages&nbsp;with&nbsp;jQuery.</li>
           <li>AJAX.</li>
           <li>Fun&nbsp;uses&nbsp;of&nbsp;jQuery.</li>
       </ol>
       
       <h3>DAY&nbsp;-10:</h3>
       
       <ol>
           <li>Objective:&nbsp;Learning&nbsp;to&nbsp;use&nbsp;WordPress.</li>
           <li>Introduction&nbsp;to&nbsp;CMS&nbsp;or&nbsp;Content&nbsp;Management&nbsp;System.</li>
           <li>Say&nbsp;hello&nbsp;to&nbsp;WordPress.</li>
           <li>Making&nbsp;websites&nbsp;with&nbsp;WordPress.</li>
           <li>Make&nbsp;sites&nbsp;beautiful&nbsp;with&nbsp;themes.</li>
           <li>Get&nbsp;complex&nbsp;features&nbsp;with&nbsp;plugins.</li>
       </ol>
       
       <h3>DAY&nbsp;-11:</h3>
       
       <ol>
           <li>Objective:&nbsp;Diving&nbsp;deeper&nbsp;into&nbsp;WordPress.</li>
           <li>Making&nbsp;a&nbsp;beautiful&nbsp;portfolio&nbsp;site.</li>
           <li>Introduction&nbsp;to&nbsp;premium&nbsp;themes.</li>
           <li>Making&nbsp;an&nbsp;e-commerce&nbsp;site&nbsp;with&nbsp;WooCommerce.</li>
           <li>Create&nbsp;a&nbsp;business&nbsp;site&nbsp;with&nbsp;WordPress.</li>
           <li>Site&nbsp;optimization.</li>
           <li>SEO.</li>
       </ol>
       
       <h3>DAY&nbsp;-12:</h3>
       
       <ol>
           <li>Objective:&nbsp;Starting&nbsp;your&nbsp;freelancer&nbsp;journey.</li>
           <li>Introduction&nbsp;to&nbsp;Upwork&nbsp;and&nbsp;Fiverr.</li>
           <li>Making&nbsp;a&nbsp;convincing&nbsp;appearance.</li>
           <li>Crating&nbsp;gigs&nbsp;in&nbsp;fiverr&nbsp;and&nbsp;bidding&nbsp;in&nbsp;upwork.</li>
           <li>Setting&nbsp;up&nbsp;payment&nbsp;methods.</li>
           <li>Tips&nbsp;on&nbsp;job&nbsp;handling.</li>
       </ol>
       
       <h3>DAY&nbsp;-13:</h3>
       
       <ol>
           <li>Objective:&nbsp;Getting&nbsp;started&nbsp;with&nbsp;back-end&nbsp;web&nbsp;development.</li>
           <li>Understanding&nbsp;client-side&nbsp;vs&nbsp;server-side.</li>
           <li>Hello&nbsp;World&nbsp;in&nbsp;PHP.</li>
           <li>Variables.</li>
           <li>Arrays.</li>
           <li>Control&nbsp;flow.</li>
           <li>Iterators.</li>
       </ol>
       
       <h3>DAY&nbsp;-14:</h3>
       
       <ol>
           <li>Objective:&nbsp;Diving&nbsp;deeper&nbsp;into&nbsp;server-side&nbsp;programming.</li>
           <li>GET&nbsp;request.</li>
           <li>POST&nbsp;request.</li>
           <li>Exercise:&nbsp;Email&nbsp;Forwarding&nbsp;System.</li>
           <li>Mini&nbsp;Project:&nbsp;Opinion&nbsp;Collection&nbsp;System</li>
       </ol>
       
       <h3>DAY&nbsp;-15:</h3>
       
       <ol>
           <li>Objective:&nbsp;Making&nbsp;an&nbsp;weather&nbsp;forecast&nbsp;website&nbsp;from&nbsp;where&nbsp;we&nbsp;can&nbsp;collect&nbsp;weather&nbsp;data&nbsp;of</li>
           <li>particular&nbsp;cities&nbsp;by&nbsp;submiting&nbsp;their&nbsp;name&nbsp;using&nbsp;a&nbsp;inputform.</li>
           <li>Collecting&nbsp;data&nbsp;from&nbsp;already&nbsp;existing&nbsp;systems.</li>
           <li>Project&nbsp;planning&nbsp;and&nbsp;prototyping.</li>
           <li>Accessing&nbsp;foreign&nbsp;scripts.</li>
           <li>Making&nbsp;the&nbsp;complete&nbsp;project.</li>
       </ol>
       
       <h3>DAY&nbsp;-16:</h3>
       
       <ol>
           <li>Objective:&nbsp;Learning&nbsp;relational&nbsp;database&nbsp;system&nbsp;and&nbsp;sequential&nbsp;query&nbsp;language.</li>
           <li>Introduction&nbsp;to&nbsp;databases.</li>
           <li>Getting&nbsp;familiar&nbsp;with&nbsp;MySQL.</li>
           <li>Connecting&nbsp;to&nbsp;a&nbsp;database.</li>
           <li>Retrieving&nbsp;data&nbsp;from&nbsp;database.</li>
           <li>Manipulating&nbsp;data.</li>
           <li>Iterating&nbsp;through&nbsp;data.</li>
       </ol>
       
       <h3>DAY&nbsp;-17:</h3>
       
       <ol>
           <li>Objective:&nbsp;Going&nbsp;further&nbsp;in&nbsp;our&nbsp;database&nbsp;journey.</li>
           <li>Sessions.</li>
           <li>Cookies.</li>
           <li>Encryption.</li>
           <li>Hashing.</li>
       </ol>
       
       <h3>DAY&nbsp;-18:</h3>
       
       <ol>
           <li>Objective:&nbsp;Making&nbsp;a&nbsp;complete&nbsp;digital&nbsp;diary&nbsp;system&nbsp;with&nbsp;advanced&nbsp;authentication&nbsp;system.</li>
           <li>Collecting&nbsp;idea&nbsp;by&nbsp;judging&nbsp;already&nbsp;present&nbsp;systems.</li>
           <li>Prototyping&nbsp;the&nbsp;project.</li>
           <li>Laying&nbsp;out&nbsp;the&nbsp;base&nbsp;database&nbsp;model.</li>
           <li>Setting&nbsp;up&nbsp;authentication&nbsp;system.</li>
           <li>Completing&nbsp;saving&nbsp;part.</li>
           <li>Polishing&nbsp;the&nbsp;project.</li>
       </ol>
       
       <h3>DAY&nbsp;-19:</h3>
       
       <ol>
           <li>Objective:&nbsp;Getting&nbsp;familiar&nbsp;with&nbsp;application&nbsp;programming&nbsp;interfaces.</li>
           <li>Open&nbsp;WeatherMap&nbsp;API.</li>
           <li>Google&nbsp;Maps&nbsp;API.</li>
           <li>GeoCoding&nbsp;with&nbsp;google&nbsp;maps&nbsp;api.</li>
           <li>Mini&nbsp;Project:&nbsp;Postcode&nbsp;Locator</li>
       </ol>
       
       <h3>DAY&nbsp;-20:</h3>
       
       <ol>
           <li>Objective:&nbsp;Making&nbsp;a&nbsp;twitter&nbsp;clientthat&nbsp;can&nbsp;posttweet&nbsp;withoutlogging&nbsp;into&nbsp;our&nbsp;twitter&nbsp;account.</li>
           <li>Introduction&nbsp;to&nbsp;Twitter&rsquo;s&nbsp;REST&nbsp;API.</li>
           <li>Building&nbsp;the&nbsp;Twitter&nbsp;client.</li>
       </ol>
       
       <h3>DAY&nbsp;-21:</h3>
       
       <ol>
           <li>Objective:&nbsp;Learning&nbsp;relational&nbsp;database&nbsp;system&nbsp;and&nbsp;sequential&nbsp;query&nbsp;language.</li>
           <li>Introduction&nbsp;to&nbsp;databases.</li>
           <li>Getting&nbsp;familiar&nbsp;with&nbsp;MySQL.</li>
           <li>Connecting&nbsp;to&nbsp;a&nbsp;database.</li>
           <li>Retrieving&nbsp;data&nbsp;from&nbsp;database.</li>
           <li>Manipulating&nbsp;data.Iterating&nbsp;through&nbsp;data.</li>
       </ol>
       
       <h3>DAY&nbsp;-22:</h3>
       
       <ol>
           <li>Objective:&nbsp;Learning&nbsp;to&nbsp;make&nbsp;mobile&nbsp;applications&nbsp;with&nbsp;HTML,&nbsp;CSS&nbsp;JavaScript.</li>
           <li>Getting&nbsp;started&nbsp;with&nbsp;HTML&nbsp;based&nbsp;mobile&nbsp;applications.</li>
           <li>Understanding&nbsp;App.js.</li>
           <li>Understanding&nbsp;Zepto.js.</li>
           <li>Learning&nbsp;about&nbsp;permanent&nbsp;storage.</li>
       </ol>
       
       <h3>DAY&nbsp;-23:</h3>
       
       <ol>
           <li>Objective:&nbsp;Creating&nbsp;a&nbsp;mobile&nbsp;application&nbsp;like&nbsp;Gmailthat&nbsp;can&nbsp;send&nbsp;and&nbsp;receive&nbsp;mails.</li>
           <li>Getting&nbsp;general&nbsp;idea&nbsp;of&nbsp;an&nbsp;email&nbsp;client&nbsp;from&nbsp;currently&nbsp;available&nbsp;products.</li>
           <li>Prototyping&nbsp;the&nbsp;project.</li>
           <li>Developing&nbsp;the&nbsp;project.</li>
           <li>Using&nbsp;PhoneGap&nbsp;to&nbsp;convert&nbsp;the&nbsp;web&nbsp;app&nbsp;to&nbsp;a&nbsp;mobile&nbsp;app.</li>
           <li>Distributing&nbsp;the&nbsp;project.</li>
       </ol>
       
       <h3>DAY&nbsp;-24:</h3>
       
       <ol>
           <li>Objective:&nbsp;Reviewing&nbsp;what&nbsp;we&rsquo;ve&nbsp;learned&nbsp;and&nbsp;what&nbsp;to&nbsp;do&nbsp;next.</li>
           <li>It&nbsp;will&nbsp;be&nbsp;a&nbsp;review&nbsp;class&nbsp;where&nbsp;we&rsquo;ll&nbsp;talk&nbsp;about&nbsp;how&nbsp;far&nbsp;we&rsquo;ve&nbsp;come&nbsp;and&nbsp;where&nbsp;we&nbsp;should&nbsp;go&nbsp;from&nbsp;here</li>
       </ol>';
        DB::table('courses')->insert([
            [
                'title' => 'Web Design',
                'slug' => 'web_design',
                'no_of_class' => 20,
                'total_hour' => 60,
                'venue' =>  'Dhaka',
                'price' => 15000,
                'image' => 'public/front/assets/img/resources/1.jpg',
                'seat_available'=>30,
                'trainer_id' => $trainer->id,
                'outline' => $outline,
                'mentor_id' => $mentor->id,
                'class_schedule' => 'Monday and Wednesday',
                'duration' => '10:00 am to 1:00 pm',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
            [
                'title' => 'Web Development',
                'slug' => 'web_development',
                'venue' =>  'Dhaka',
                'no_of_class' => 30,
                'total_hour' => 90,
                'seat_available'=>30,
                'outline' => $outline,
                'trainer_id' => $trainer->id,
                'mentor_id' => $mentor->id,
                'image' => 'public/front/assets/img/resources/1.jpg',
                'class_schedule' => 'Saturday and Tuesday',
                'duration' => '6:00 am to 9:00 pm',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'price' => 25000,
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
            [
                'title' => 'Graphic Design',
                'slug' => 'graphic_design',
                'no_of_class' => 35,
                'total_hour' => 105,
                'price' => 12500,
                'seat_available'=>30,
                'outline' => $outline,
                'trainer_id' => $trainer->id,
                'mentor_id' => $mentor->id,
                'image' => 'public/front/assets/img/resources/1.jpg',
                'class_schedule' => 'Monday and Wednesday',
                'duration' => '10:00 am to 1:00 pm',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'venue' =>  'Dhaka',
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
            [
                'slug' => 'digital_marketing',
                'title' => 'Digital Marketing',
                'no_of_class' => 35,
                'total_hour' => 105,
                'price' => 10000,
                'venue' =>  'Dhaka',
                'seat_available'=>30,
                'outline' => $outline,
                'trainer_id' => $trainer->id,
                'mentor_id' => $mentor->id,
                'class_schedule' => 'Saturday and Tuesday',
                'duration' => '6:00 am to 9:00 pm',
                'image' => 'public/front/assets/img/resources/1.jpg',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
        ]);
    }
}
