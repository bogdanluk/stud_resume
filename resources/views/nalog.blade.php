@extends('layouts.head')

@section('title')Налогооблажение
@endsection

@section('content')
    @include('layouts.navbar')

    <div class="flex flex-col min-h-screen">
        <div class="flex flex-col p-2 sm:p-10">
            <div class="flex flex-col items-center">
                <h1 class="mt-10 p-5 text-2xl text-center border-2 rounded-lg border-violet-400 text-violet-400 shadow-lg">Что такое «Налог на профессиональный доход»</h1>
                <div class="mt-10 rounded-lg shadow-lg border-t-8 border-violet-400 bg-base-200 dark:bg-slate-700">
                    <p class="p-5">
                        Налог на профессиональный доход — это специальный налоговый режим для самозанятых граждан, который можно применять с 2019 года. Действовать этот режим будет в течение 10 лет.
                        <br>
                        <br>
                        Эксперимент по установлению специального налогового режима проводится на всей территории РФ.
                        <br>
                        <br>
                        Переход на специальный налоговый режим осуществляется добровольно. У налогоплательщиков, которые не перейдут на этот налоговый режим, остается обязанность платить налоги с учетом других систем налогообложения, которые они применяют в обычном порядке.
                        <br>
                        <br>
                        Физические лица и индивидуальные предприниматели, перешедшие на специальный налоговый режим (самозанятые), могут платить с доходов от самостоятельной деятельности налог по льготной ставке — 4 или 6%. Это позволяет легально вести бизнес и получать доход от подработок без рисков получения штрафа за незаконную предпринимательскую деятельность.</p>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-center flex-wrap mt-10">
                <div tabindex="0" class="collapse bg-violet-400 text-white rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                    <div class="collapse-title text-center text-xl font-medium p-3">
                        Нет отчётов и деклараций
                    </div>
                    <div class="collapse-content">
                        <p class="p-5 text-center">Декларацию представлять не нужно. <br> Учет доходов ведется автоматически в мобильном приложении.</p>
                    </div>
                </div>
                <div tabindex="0" class="collapse bg-violet-400 text-white rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                    <div class="collapse-title text-xl text-center font-medium p-3">
                        Можно не платить страховые взносы
                    </div>
                    <div class="collapse-content">
                        <p class="p-5 text-center">Отсутствует обязанность по уплате фиксированных <br> взносов на пенсионное страхование. <br> Пенсионное страхование осуществляется в добровольном порядке.</p>
                    </div>
                </div>
                <div tabindex="0" class="collapse bg-violet-400 text-white rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                    <div class="collapse-title text-xl text-center font-medium p-3">
                        Легальная работа без статуса ИП
                    </div>
                    <div class="collapse-content">
                        <p class="p-5 text-center">Можно работать без регистрации в качестве ИП. <br> Доход подтверждается справкой из приложения.</p>
                    </div>
                </div>
                <div tabindex="0" class="collapse bg-violet-400 text-white rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                    <div class="collapse-title text-xl text-center font-medium p-3">
                        Предоставляется налоговый вычет
                    </div>
                    <div class="collapse-content">
                        <p class="p-5 text-center">Сумма вычета — 10 000 рублей. <br> Ставка 4% уменьшается до 3%, ставка 6% уменьшается до 4%. <br> Расчет автоматический.</p>
                    </div>
                </div>
                <div tabindex="0" class="collapse bg-violet-400 text-white rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                    <div class="collapse-title text-xl text-center font-medium p-3">
                        Не нужно считать налог к уплате
                    </div>
                    <div class="collapse-content">
                        <p class="p-5 text-center">Налог начисляется автоматически в приложении. <br> Уплата — не позднее 28 числа следующего месяца.</p>
                    </div>
                </div>
                <div tabindex="0" class="collapse bg-violet-400 text-white rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                    <div class="collapse-title text-xl text-center font-medium p-3">
                        Выгодные налоговые ставки
                    </div>
                    <div class="collapse-content">
                        <p class="p-5 text-center">4% — с доходов от физических лиц. <br> 6% — с доходов от юридических лиц и ИП. <br> Других обязательных платежей нет.</p>
                    </div>
                </div>
                <div tabindex="0" class="collapse bg-violet-400 text-white rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                    <div class="collapse-title text-xl text-center font-medium p-3">
                        Совмещение с работой по трудовому договору
                    </div>
                    <div class="collapse-content">
                        <p class="p-5 text-center">Зарплата не учитывается при расчете налога. <br> Трудовой стаж по месту работы не прерывается.</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <h1 class="mt-10 p-5 text-2xl text-center border-2 rounded-lg border-violet-400 text-violet-400 shadow-lg">Кому подходит этот налоговый режим</h1>
                <div class="mt-10 rounded-lg shadow-lg border-t-8 border-violet-400 bg-base-200 dark:bg-slate-700">
                    <p class="p-5">Специальный налоговый режим могут применять физлица и индивидуальные предприниматели (самозанятые), у которых одновременно соблюдаются следующие условия.</p>
                    <ul class="pb-5 px-5">
                        <li class="mb-5"><i class="fa-solid fa-circle-dot fa-xs pr-2 text-violet-400"></i>Они получают доход от самостоятельного ведения деятельности или использования имущества.</li>
                        <li class="mb-5"><i class="fa-solid fa-circle-dot fa-xs pr-2 text-violet-400"></i>При ведении этой деятельности не имеют работодателя, с которым заключен трудовой договор.</li>
                        <li class="mb-5"><i class="fa-solid fa-circle-dot fa-xs pr-2 text-violet-400"></i>Не привлекают для этой деятельности наемных работников по трудовым договорам.</li>
                        <li><i class="fa-solid fa-circle-dot fa-xs pr-2 text-violet-400"></i>Вид деятельности, условия ее осуществления или сумма дохода не попадают в перечень исключений, указанных в статьях 4 и 6 Федерального закона от 27.11.2018 № 422-ФЗ.</li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <h1 class="mt-10 mx-5 p-5 text-2xl text-center border-2 rounded-lg border-violet-400 text-violet-400 shadow-lg">Ограничение по сумме дохода</h1>
                <div class="mt-10 rounded-lg shadow-lg border-t-8 border-violet-400 bg-base-200 dark:bg-slate-700">
                    <p class="p-5">Налог на профессиональный доход можно платить, только пока сумма дохода нарастающим итогом в течение года не превысит <span class="p-1 rounded-lg bg-violet-400 text-white whitespace-nowrap">2,4 млн рублей.</span><br>Ограничений по сумме месячного дохода нет. После того, как доход превысит указанный лимит, налогоплательщик должен будет платить налоги, предусмотренные другими системами налогообложения.</p>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <h1 class="mt-10 mx-5 p-5 text-2xl text-center border-2 rounded-lg border-violet-400 text-violet-400 shadow-lg">Налоговые ставки</h1>
                <div class="mt-10 rounded-lg shadow-lg border-t-8 border-violet-400 bg-base-200 dark:bg-slate-700">
                    <p class="p-5">Налоговые ставки зависят от источника дохода налогоплательщика.</p>
                </div>
                <div class="flex flex-col md:flex-row justify-center flex-wrap mt-10">
                    <div tabindex="0" class="collapse bg-violet-400 rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all h-max mx-2 my-3">
                        <div class="collapse-title text-xl text-center font-medium p-3">
                            <p class="text-white"><span class="text-4xl">4%</span><br>при расчётах с физическими лицами</p>
                        </div>
                        <div class="collapse-content bg-white bg-base-200 dark:bg-slate-700">
                            <p class="p-5 text-center font-medium">Зарплата не учитывается при расчете налога. <br> Трудовой стаж по месту работы не прерывается.</p>
                        </div>
                    </div>
                    <div tabindex="0" class="collapse group bg-violet-400 rounded-box hover:cursor-pointer hover:bg-violet-600 focus:bg-violet-600 shadow-lg transition-all ease-in-out h-max mx-2 my-3">
                        <div class="collapse-title text-xl text-center font-medium p-3">
                            <p class="text-white"><span class="text-4xl">6%</span><br>при расчётах с ИП организациями</p>
                        </div>
                        <div class="collapse-content bg-white bg-base-200 dark:bg-slate-700">
                            <p class="p-5 text-center font-medium">Ставка 6% используется, если поступление от <br> юридического лица или индивидуального <br> предпринимателя</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <h1 class="mt-10 mx-5 p-5 text-2xl text-center border-2 rounded-lg border-violet-400 text-violet-400 shadow-lg">Какие платежи заменяет налог на профессиональный доход</h1>
                <div class="mt-10 rounded-lg shadow-lg border-t-8 border-violet-400 bg-base-200 dark:bg-slate-700">
                    <p class="p-5">Особенности применения специального налогового режима:</p>
                    <ul class="px-5">
                        <li class="mb-5"><i class="fa-solid fa-1 pr-2 text-violet-400"></i>Физические лица не уплачивают налог на доходы физических лиц с тех доходов, которые облагаются налогом на профессиональный доход.</li>
                        <li class="mb-5"><i class="fa-solid fa-2 pr-2 text-violet-400"></i>Индивидуальные предприниматели не уплачивают:
                            <ul class="pt-3 px-5">
                                <li class="mb-5"><i class="fa-solid fa-circle-dot fa-xs pr-2 text-violet-400"></i>налог на доходы физических лиц с тех доходов, которые облагаются налогом на профессиональный доход;</li>
                                <li class="mb-5"><i class="fa-solid fa-circle-dot fa-xs pr-2 text-violet-400"></i>налог на добавленную стоимость, за исключением НДС при ввозе товаров на территорию России;</li>
                                <li><i class="fa-solid fa-circle-dot fa-xs pr-2 text-violet-400"></i>фиксированные страховые взносы.</li>
                            </ul>
                        </li>
                    </ul>
                    <p class="pb-5 px-5">Индивидуальные предприниматели, которые зарегистрировались в качестве налогоплательщиков налога на профессиональный доход, не уплачивают фиксированные страховые взносы. На других специальных налоговых режимах страховые взносы нужно платить даже при отсутствии дохода.
                        <br><br>При отсутствии дохода в течение налогового периода нет никаких обязательных, минимальных или фиксированных платежей. При этом самозанятые являются участниками системы обязательного медицинского страхования и могут получать бесплатную медицинскую помощь.</p>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
