@extends('layouts.head')

@section('title')Налогооблажение
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="flex w-full min-h-screen justify-center">
        <div class="flex flex-col items-center mt-10 px-2 sm:px-5 w-full md:w-4/5">
            <div class="text-xl sm:text-2xl text-center p-1 sm:p-5 my-5 rounded-lg shadow-lg border-2 border-violet-400 text-violet-400 dark:border-2 dark:border-violet-400">
                <h1 class="font-semibold">Специальный налоговый режим для самозанятых граждан</h1>
                <p class="font-bold">НАЛОГ НА ПРОФЕССИОНАЛЬНЫЙ ДОХОД</p>
            </div>
            <div class="flex flex-col mt-8 px-2 sm:px-5 w-full rounded-lg bg-base-200 dark:bg-slate-700 border-t-violet-400 border-t-8 shadow-lg">
                <h2 class="text-xl font-semibold mb-5 mt-2">Что такое «Налог на профессиональный доход»</h2>
                <p class="mb-2">Налог на профессиональный доход — это специальный налоговый режим для самозанятых граждан, который можно применять с 2019 года. Действовать этот режим будет в течение 10 лет.</p>
                <p class="mb-2">Эксперимент по установлению специального налогового режима проводится на всей территории РФ.</p>
                <p class="mb-2">Переход на специальный налоговый режим осуществляется добровольно. У налогоплательщиков, которые не перейдут на этот налоговый режим, остается обязанность платить налоги с учетом других систем налогообложения, которые они применяют в обычном порядке.</p>
                <p class="mb-2">Физические лица и индивидуальные предприниматели, перешедшие на специальный налоговый режим (самозанятые), могут платить с доходов от самостоятельной деятельности налог по льготной ставке — 4 или 6%. Это позволяет легально вести бизнес и получать доход от подработок без рисков получения штрафа за незаконную предпринимательскую деятельность.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 my-3">
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">НЕТ ОТЧЕТОВ И ДЕКЛАРАЦИЙ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Декларацию представлять не нужно. Учет доходов ведется автоматически в мобильном приложении.</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">ЧЕК ФОРМИРУЕТСЯ В ПРИЛОЖЕНИИ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Не надо покупать ККТ. Чек можно сформировать в мобильном приложении «Мой налог».</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">МОЖНО НЕ ПЛАТИТЬ СТРАХОВЫЕ ВЗНОСЫ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Отсутствует обязанность по уплате фиксированных взносов на пенсионное страхование. Пенсионное страхование осуществляется в добровольном порядке.</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">ЛЕГАЛЬНАЯ РАБОТА БЕЗ СТАТУСА ИП</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Можно работать без регистрации в качестве ИП. Доход подтверждается справкой из приложения.</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">ПРЕДОСТАВЛЯЕТСЯ НАЛОГОВЫЙ ВЫЧЕТ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Сумма вычета — 10 000 рублей. Ставка 4% уменьшается до 3%, ставка 6% уменьшается до 4%. Расчет автоматический.</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">НЕ НУЖНО СЧИТАТЬ НАЛОГ К УПЛАТЕ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Налог начисляется автоматически в приложении. Уплата — не позднее 28 числа следующего месяца.</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">ВЫГОДНЫЕ НАЛОГОВЫЕ СТАВКИ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>4% — с доходов от физических лиц. 6% — с доходов от юридических лиц и ИП. Других обязательных платежей нет.</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">ПРОСТАЯ РЕГИСТРАЦИЯ ЧЕРЕЗ ИНТЕРНЕТ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Регистрация без визита в инспекцию: в мобильном приложении, на сайте ФНС России, через банк или портал Госуслуг.</p>
                    </div>
                    <div class="flex flex-col text-center items-center">
                        <p class="font-semibold">СОВМЕЩЕНИЕ С РАБОТОЙ ПО ТРУДОВОМУ ДОГОВОРУ</p>
                        <span class="rounded-full border-t-4 border-violet-400 w-1/2 my-2"></span>
                        <p>Зарплата не учитывается при расчете налога. Трудовой стаж по месту работы не прерывается.</p>
                    </div>
                </div>

                <h2 class="text-xl font-semibold mb-5 mt-2">Кому подходит этот налоговый режим</h2>
                <p class="mb-2">Специальный налоговый режим могут применять физлица и индивидуальные предприниматели (самозанятые), у которых одновременно соблюдаются следующие условия.</p>
                <p class="mb-2 flex flex-row items-center"><i class="fa-solid fa-arrow-right text-violet-400 mr-2"></i><span>Они получают доход от самостоятельного ведения деятельности или использования имущества.</span></p>
                <p class="mb-2 flex flex-row items-center"><i class="fa-solid fa-arrow-right text-violet-400 mr-2"></i><span>При ведении этой деятельности не имеют работодателя, с которым заключен трудовой договор.</span></p>
                <p class="mb-2 flex flex-row items-center"><i class="fa-solid fa-arrow-right text-violet-400 mr-2"></i><span>Не привлекают для этой деятельности наемных работников по трудовым договорам.</span></p>
                <p class="mb-2 flex flex-row items-center"><i class="fa-solid fa-arrow-right text-violet-400 mr-2"></i><span>Вид деятельности, условия ее осуществления или сумма дохода не попадают в перечень исключений, указанных в статьях 4 и 6 Федерального закона от 27.11.2018 № 422-ФЗ.</span></p>
                <p class="mb-2">Налог на профессиональный доход можно платить и при осуществлении других видов деятельности, если соблюдаются все условия, предусмотренные Федеральным законом от 27.11.2018 № 422-ФЗ.</p>

                <h2 class="text-xl font-semibold mb-5 mt-2">Ограничение по сумме дохода</h2>
                <p class="mb-2">Налог на профессиональный доход можно платить, только пока сумма дохода нарастающим итогом в течение года не превысит <strong>2,4 млн рублей.</strong></p>
                <p class="mb-2">Ограничений по сумме месячного дохода нет. Сумма дохода контролируется в приложении «Мой налог». После того, как доход превысит указанный лимит, налогоплательщик должен будет платить налоги, предусмотренные другими системами налогообложения.</p>

                <h2 class="text-xl font-semibold mb-5 mt-2">Налоговые ставки</h2>
                <p class="mb-2"><strong>4%</strong> при расчетах с физическими лицами.</p>
                <p class="mb-2"><strong>6%</strong> при расчетах с ИП и организациями.</p>
                <p class="mb-2">Покупателя нужно указать при формировании чека в приложении «Мой налог». Учет налоговых ставок и расчет суммы налога к уплате происходит автоматически. Все произведенные начисления и предварительную сумму налога к уплате можно увидеть в приложении в любое время в течение месяца.</p>
                <p class="mb-2">Налоговый режим будет действовать в течение 10 лет. В этот период ставки налога не изменятся.</p>

                <h2 class="text-xl font-semibold mb-5 mt-2">Как стать налогоплательщиком налога на профессиональный доход</h2>
                <p class="mb-2">Чтобы использовать специальный налоговый режим, нужно пройти регистрацию и получить подтверждение. Без регистрации применение налогового режима и формирование чеков невозможно.</p>
                <p class="mb-2">Регистрация в приложении "Мой налог" занимает несколько минут. Заполнять заявление на бумаге и посещать инспекцию не нужно. Доступны несколько способов:</p>
                <p class="mb-2 flex flex-row items-center"><i class="fa-solid fa-arrow-right text-violet-400 mr-2"></i><span>с использованием паспорта для сканирования и проверки, а также фотографии, которую можно сделать прямо на камеру смартфона;</span></p>
                <p class="mb-2 flex flex-row items-center"><i class="fa-solid fa-arrow-right text-violet-400 mr-2"></i><span>c использованием ИНН и пароля, которые используются для доступа в Личный кабинет налогоплательщика – физического лица на сайте nalog.ru;</span></p>
                <p class="mb-2 flex flex-row items-center"><i class="fa-solid fa-arrow-right text-violet-400 mr-2"></i><span>с помощью учетной записи Единого портала государственных и муниципальных услуг.</span></p>
                <p class="mb-2">Также налогоплательщик может зарегистрироваться, обратившись в уполномоченные банки, а при отсутствии смартфона - работать через веб-версию приложения «Мой налог».</p>

                <h2 class="text-xl font-semibold mb-5 mt-2">Как рассчитать сумму налога к уплате</h2>
                <p class="mb-2">Самостоятельно ничего считать не нужно. Применение налогового вычета, контроль над ограничением по сумме дохода и другие особенности расчета полностью автоматизированы.</p>
                <p class="mb-2">От налогоплательщика требуется только формирование чека по каждому поступлению от того вида деятельности, которая облагается налогом на профессиональный доход.</p>


                <div class="px-1 py-5 flex-wrap">
                    <div class="flex flex-wrap w-full max-w-xl">
                        <div class="flex relative pb-12">
                            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-violet-200"></div>
                            </div>
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-violet-400 inline-flex items-center justify-center text-white relative z-10">
                                <p class="text-xl">1</p>
                            </div>
                            <div class="flex flex-col justify-center pl-4">
                                <p class="font-semibold tracking-wider">Сформируйте чек по каждому поступлению</p>
                            </div>
                        </div>
                        <div class="flex relative pb-12">
                            <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                                <div class="h-full w-1 bg-violet-200"></div>
                            </div>
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-violet-400 inline-flex items-center justify-center text-white relative z-10">
                                <p class="text-xl">2</p>
                            </div>
                            <div class="flex flex-col justify-center pl-4">
                                <p class="font-semibold tracking-wider">Укажите плательщика и сумму дохода</p>
                            </div>
                        </div>
                        <div class="flex relative">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-violet-400 inline-flex items-center justify-center text-white relative z-10">
                                <p class="text-xl">3</p>
                            </div>
                            <div class="flex-grow pl-4">
                                <p class="font-semibold tracking-wider">Отправьте чек покупателю или распечатайте на бумаге</p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
