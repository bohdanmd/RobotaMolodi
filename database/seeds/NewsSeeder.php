<?php

use Illuminate\Database\Seeder;
use App\Models\News;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('news')->insert(
        [
            [   'name'=>"Як Google непомітно підслуховує вас через мікрофон",
                'description'=>    "<p><strong>Фактрум повідомляє, що Гугл не тільки записує розмови, але і зберігає їх на власних серверах. Причому робот &laquo;підслуховує&raquo; вас не тільки, коли смартфон включений, але і коли він просто лежить собі поруч з вами, наприклад, на робочому столі.</strong></p>

                                    <p>Навіщо це потрібно Google? У компанії пояснюють підслуховування необхідністю збору і аналізу інформації, яка згодом допоможе алгоритмом підібрати для вас рекламу відповідно інтересам. Звучить не так вже й страшно, але!</p>

                                    <p>По-перше, особиста інформація може потрапити в чужі руки, якщо хтось зламає ваш обліковий запис;</p>

                                    <p>По-друге, якби у вас який-небудь конфлікт або просто непорозуміння з владою, ваші розмови компанія зобов&rsquo;язана передати у відповідні органи;</p>

                                    <p>По-третє, відверто кажучи, &laquo;підігнана&raquo; під інтереси користувачів реклама часто зовсім не потрапляє під ці самі інтереси і тільки даремно дратує користувача. В цьому випадку збір інформації стає просто безглуздим.</p>

                                    <p>Втім, до честі компанії, Гугл не приховує факт збору особистих даних, тому кожен може авторизуватися на своєму акаунті і почистити зібрану там інформацію.</p>

                                    <p>Тут зберігаються всі дані з мікрофона вашого телефону. Якщо тут поки що нічого немає, значить, ви ще не користувалися голосовим помічником, тобто ніколи не говорили: &laquo;ОК, Google&raquo;.</p>

                                    <p>А от повне досьє, яке на вас зібрав Google, грунтуючись на тому, що ви робите в інтернеті.</p>

                                    <p>Серед іншого, тут є інформація, де і коли ви були (точніше, ваш телефон); все, що ви шукали в інтернеті; всі сторінки, які ви завантажували. На щастя, зручна навігація дозволяє швидко і без сліду все видалити.</p>

                                    <p><a href=\"http://from-ua.com/obzor-pressi/395859-gugl-nezametno-podslushivaet-vas-cherez-mikrofon-vot-kak-naiti-zapis.html\">Джерело</a></p>",
                'img'=>"google.jpg",

            ],
            [   'name'=>"У Китаї заступив на службу перший робокоп",
                'description'=>"    <p>У китайській провінції Хенань на службу заступив перший робот-поліцейський. Він займається патрулюванням залу очікування залізничного вокзалу у місті Чженчжоу.</p>

                                   <p>Про це повідомляє gbtimes, передає&nbsp;<a href=\"https://lenta.ru/news/2017/02/18/robotpolice/\" target=\"_blank\">Лента.ру</a>.</p>

                                   <p>&quot;Робот пересувається на колесах, на його корпусі розташовані сенсорні датчики, а заввишки не перевищує зросту людини. Він може самостійно проводити патрулювання території, сканувати і розпізнавати обличчя людей і відповідати на запитання пасажирів. Також він здатний визначати температуру повітря і попереджати про загрозу пожежі&quot;, - зазначається в публікації.</p>

                                   <p><strong>Читайте також:&nbsp;</strong><a href=\"https://www.ukrinform.ua/rubric-technology/2178363-ilon-mask-pokazav-pidgotovku-do-persogo-startu-spacex-z-apollo-11.html\" target=\"_blank\">Ілон Маск показав підготовку до першого старту SpaceX з Apollo 11</a></p>

                                   <p>Наразі&nbsp;<a href=\"https://www.ukrinform.ru/tag-kitaj\" target=\"_blank\">китайський&nbsp;</a>робот чергує в тестовому режимі. Планується, що скоро він почне працювати в нічний час, коли в залах очікування найбільше пасажирів.</p>",
                'img'=>"robocop.jpg",

            ],
            [   'name'=>"iPhone 7 Plus лідирує в рейтингу продуктивності AnTuTu протягом останніх шести місяців",
                'description'=>   "<p>Творці бенчмарка AnTuTu щомісяця складають рейтинг найбільш продуктивних смартфонів на світовому ринку. Для багатьох користувачів швидкодія в синтетичних тестах є важливим параметром при виборі мобільного пристрою. Згідно зі свіжим звітом, лідером AnTuTu протягом останніх шести місяців залишається iPhone 7 Plus.</p>

                                   <p>Розробники опублікували свіжі дані про найпродуктивніші смартфони&nbsp;за лютий цього року. Згідно з цим рейтингом, найкращими продовжують залишатися флагманські рішення Apple. Найбільш продуктивним виявився iPhone 7 Plus на базі однокристальної платформи Apple A10 Fusion, який набрав 184 981 балів. На другому місці &ndash; смартфон iPhone 7 з результатом 175 805 балів. Увійшов до трійки лідерів &laquo;вбивця&raquo; флагманів OnePlus 3T з 163 044 балів.</p>

                                   <p>На четвертому місці опинився LeEco Le Pro 3 (159 163 бали), п&rsquo;яте місце дісталося Smartisan M1L, який продемонстрував 154 559 балів. Продовжується&nbsp;історія, що в рейтингу найбільш продуктивних пристроїв відсутні продукти південнокорейської компанії Samsung і китайських Huawei і Meizu.</p>",
                'img'=>"iPhone.jpg",

            ],
            [   'name'=>"Сьогодні Apple запатентувала нове покоління клавіатур з підтримкою 3D Touch",
                'description'=>"   <p>Патентне бюро США сьогодні видало Apple патент на новий пристрій введення. У документі йде мова про нове покоління клавіатур, в яких кожна клавіша являє собою датчик<a href=\"http://ua-format.com/2015/10/ifixit-pokazali-vse-shho-prixovano-v-3d-touch/\" target=\"_blank\">&nbsp;3D Touch</a>.</p>

                                   <p>Патент, звучить як &laquo;Клавіатура з ультрамалим ходом клавіш&raquo;, та був виданий компанії у вівторок, 3 листопада. Відповідну заявку Apple подала 28 вересня 2012. Фахівці компанії задокументували винахід клавіатури, головна особливість якої &ndash; клавіші, що враховують силу натиснення.</p>

                                   <p>Кожна клавіша на такій клавіатурі являє собою невелику тач-панель. Ця особливість дозволяє їй розпізнавати звичні для трекпада жести&nbsp;<a href=\"http://ua-format.com/2015/10/oglyad-onovlenogo-trekpada-magic-trackpad-2-z-texnologiyeyu-force-touch/\">Force Touch</a>. Причому, кнопки на клавіатурі можуть фіксувати кілька рівнів натискання. Таким чином, реалізується технологія, використовувана в пристроях Apple випуску 2015 року &ndash; Apple Watch, MacBook, iPhone 6s і iPhone 6s Plus.</p>

                                   <p>За задумом Apple більш сильне натискання на кнопки може бути використано для &laquo;Введення спеціальних символів, асоційованих з кожною клавішею&raquo;. Що ховається за протокольним описом, можна тільки гадати. Перше, що спадає на думку &ndash; малі та великі літери. Така клавіатура дозволила б вводити великі літери, натисканням на кнопки з невеликим зусиллям.</p>

                                   <p>Крім введення &laquo;альтернативних символів&raquo; технологія 3D Touch дозволить створити ультратонку клавіатуру. Невеликий хід клавіш буде компенсуватися тактильним зворотним зв&rsquo;язком. Дана технологія знайшла застосування в MacBook: сенсорний трекпад портативних комп&rsquo;ютерів повністю позбавлений кнопок, але забезпечує чітке відчуття кліка в будь-якій точці.</p>

                                   <p>Про терміни практичної реалізації нової клавіатури Apple не повідомляється.</p>
                                   <p><br />
                                   <br />
                                   &nbsp;</p>",
                'img'=>"keyboard.jpg",

            ],
            [   'name'=>"Газове питання: які зміни чекають споживачів?",
                'description'=>    "<p><strong>Видання &laquo;БизнесЦензор&raquo; провело дослідження найактуальніших питань щодо газопостачання: навіщо потрібно враховувати теплові одиниці, а також знати фізико-хімічні показники газу.</strong></p>

                                    <p>Відповідно до нової постанови національної комісії з регулювання енергетики і комунальних послуг &quot;Про затвердження Змін до деяких постанов НКРЕКП про введення на ринку природного газу використання одиниць енергії&quot;, тепер у платіжках будуть вказувати не лише обсяг, а й кількість спожитої енергії (у кВт/год, Гкал і, МДж).</p>

                                    <p>Завдяки цьому споживачі зможуть бачити показники якості газу, який отримують. Такі інновації були введені у зв&rsquo;язку з Європейськими стандартами купівлі газу. Там товаром є енергетичні одиниці &ndash; теплота, що виділяється при згорянні газу, або теплотворність\калорійність.</p>

                                    <p>Ціна газу тепер повинна визначатися відповідно до даних Platts European Gas Daily про ціну газу на порталі NetConnect Germany (NCG). Вона публікуватиметься в енергетичних одиницях, а не в кубометрах. До кінця цього місяця оператори ГРС також зобов&rsquo;язані почати публікувати фізико-хімічні показники газу.</p>

                                    <p>На сайті &laquo;Укртрансгазу&raquo; наразі вже знаходиться інформація про ФХП газу за 285 маршрутами прямування. Також він ще з 2014 року публікує там відомості щодо якості газу у кожній з областей.</p>

                                    <p>Щоб контролювати якість газу, в УТГ працюють 65 хіміко-аналітичних лабораторій. Проби газу беруть в усіх точках входу і виходу не рідше, ніж раз на тиждень. Окрім цього, оператори можуть визначати ФХП газу в реальному часі за допомогою 47 діючих автоматичних потокових хромографов.</p>

                                    <p>Як регламентує якість газу ГОСТ 5542 &quot;Гази горючі природні для промислового і комунально-побутового призначення. Технічні умови&quot;, мінімальне значення нижчої теплоти згорання газу має бути7,6 Мкал/м3 (31,8 МДж/м3 або 8,8 кВт*год/м3). Допускається відхилення в 5%.&nbsp;<br />
                                    Щоб визначити якість газу у споживача, користуються числом Воббе.</p>

                                    <p>&nbsp;</p>

                                   <p><img src=\"http://energolife.info/get_img?ImageWidth=115&amp;ImageHeight=83&amp;ImageId=3882\" /></p>

                                   <p>&nbsp;</p>

                                   <p>Де &quot;Q&quot; &ndash; об&#39;ємна теплота згоряння, p &ndash; відносна густина газу, &quot;В&quot; - число Воббе.&nbsp;<br />
                                   У разі, коли число Воббе вище стандартного, кисень у повітрі не встигає реагувати з усім обсягом газу і відбувається утворення оксиду вуглецю та сажі, а коли нижче &ndash; газові прилади не працюють у належній потужності і може статися відрив полум&rsquo;я.</p>

                                   <p>Також в матеріалі йдеться про дражливе питання: а чи не розбавляють газ повітрям або азотом. На обидва питання відповідь негативна: у випадку з повітрям його вміст від 5 до 15 відсотків робитиме суміш вибухонебезпечною. Азот, в свою чергу, коштує до 41 гривні за куб, в той час як найбільша ціна на природний газ &ndash; 10 грн.</p>",
                'img'=>"price.jpg",

            ],
            [   'name'=>"Нова мала планета Сонячної системи отримала назву",
                'description'=>    "<p>Науковці назвали нову малу планету Сонячної системи Бернардбоуеном.</p>

                                   <p>Про це повідомляє видання про науку&nbsp;<a href=\"https://www.eurekalert.org/pub_releases/2017-02/icfr-mpn021717.php\" target=\"_blank\">EurekAlert</a>.</p>

                                   <p>Раніше вчені вважали малі планети астероїдами, проте у 2006 році термін &quot;планета&quot; уточнили. Таким чином до категорії малих планет зарахували також Цереру, Еріду і Плутон. Тепер до них приєднався і Бернардбоуен.</p>

                                   <p>Назва обрана Міжнародним центром радіоастрономічних досліджень, засновником якого був астрофізик Бернард Боуен.</p>

                                   <p>Вчені відкрили малу планету в 1991 році. Проте науковці наразі не знають з чого вона складається, оскільки вона регулярно ховається за Марсом або Юпітером, між якими вона і розташована.</p>

                                   <p>Зазначається, що на Бернардбоуен планують направити пілотований апарат в рамках місії ICRAR, яка запланована на 2025 рік.</p>

                                   <p>Раніше повідомлялося, що&nbsp;астрономи із США звернулися за допомогою до добровольців і попросили волонтерів, щоб ті разом з ними&nbsp;<a href=\"http://nv.ua/ukr/world/countries/astronomi-ssha-poprosili-dobrovoltsiv-dopomogti-znajti-dev-jatu-planetu-667709.html\">займалися пошуками Дев&#39;ятої планети</a>.</p>",
                'img'=>"Not picture",
            ],
            [   'name'=>"Японія запланувала на 2020 рік пошуки води на Марсі",
                'description'=>    "<p>Японські вчені створюють надмалий супутник для відправки на орбіту Марса в найближчі роки.</p>

                                    <p>Апарат буде оснащений датчиком для виявлення вологи і кисню на поверхні марсіанського грунту, повідомляє японська газета&nbsp;<a href=\"http://www.asahi.com/articles/ASK3F4TH3K3FULBJ00D.html?iref=comtop_list_sci_n02\" target=\"_blank\">The Asahi Shimbun</a>.</p>

                                    <p>Графік японської програми дослідження Марса затвердили після наради експертів Міністерства внутрішніх справ і комунікацій. Згідно з планом, уряд Японії прийняв рішення почати запуски надмалих супутників до 2020 року. Якщо запуск пройде успішно, Японія вперше виведе свій супутник на марсіанську орбіту.</p>

                                    <p>Вага апарату складе близько ста кілограмів, а вартість його створення, за даними японських ЗМІ, варіюється від декількох сотень мільйонів до двох мільярдів ієн, тобто не більше 17 мільйонів доларів. Створенням супутника займаються фахівці Національного інституту комунікаційних технологій, Токійського університету та Університету Осака.</p>

                                    <p>Додамо, в 1998 році Японія стала третьою країною після СРСР і США, яка відправила апарат до Марсу. Однак місія станції Нодзоми завершилася невдачею - після кількох років польоту з низкою нештатних ситуацій апарат не зміг вийти на орбіту Марса.</p>

                                   <p>Раніше&nbsp;<strong>НВ</strong>&nbsp;повідомляло, що дослідники з Університету Уейк-Форест в США виявили, що&nbsp;<a href=\"http://nv.ua/ukr/techno/science/vcheni-nazvali-novu-nebezpeku-polotiv-na-mars-778811.html\">тривалий вплив космічного випромінювання підвищує ризик лейкемії</a>.</p>",
                'img' => "mars.jpg",
            ]
        ]
        );
    }
}