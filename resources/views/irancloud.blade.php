<!doctype html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>
    </head>
    <body onload="initIrancloud()">
        <main class="irancloud">
            <section class="whatis">
                <div class="container">
                    <div class="whatis__title">ابر ایران چیست؟ </div>
                    <div class="whatis__content">
                    ابر ایران قراردادی میان سازمان فناوری اطلاعات ایران و دو کنسرسیوم با نام‌های اپراتور اول ابری (آسیاتک، ژرف‌نگر، ابرزس) و اپراتور دوم ابری (فناپ و ابرآروان) است که در زمستان سال ۱۳۹۹و به منظور توسعه، تجهیز و راه‌اندازی تعدادی رک در ۱۰ دیتاسنتر مختلف کشور منعقد شد. به‌دلیل تجمیع بیش‌تر دیتاسنترهای ایران در پایتخت، دسترسی‌پذیری کسب‌وکارهایی که در شهرستان‌ها فعال هستند به زیرساخت ابری با سختی همراه بود. از این رو سازمان فناوری اطلاعات تصمیم گرفت طی مزایده‌ای پروژه ابر ایران که ایده آن در سال ۹۶ شکل گرفته بود را به‌منظور تسریع توزیع محتوا میان مناطق مختلف ایران، افزایش ابرزی کردن کسب‌وکارهای محلی و هم‌چنین تقویت دولت الکترونیک به بخش خصوصی واگذار کند. در پروژه ابر ایران دیتاسنترهایی که در شهرهای تبریز، مشهد، قم، همدان و اصفهان قرار داشت ابر شمالی نام گرفت و دیتاسنترهایی که در شهرهای شیراز، اصفهان، اهواز،‌ کرج و تبریز مستقر بود ابر جنوبی نامیده شد.
                    <br>
                    <br>
                    بنا به مفاد قرارداد تمامی زیرساخت‌های مراکز داده‌ی سازمان فاوا به‌وسیله بخش خصوصی بازسازی و آماده‌ی بهره‌برداری دوباره می‌شوند و خدمات ابری در سطح کشور توزیع خواهند شد
                    </div>
                    <div class="whatis__tab">
                        <ul class="whatis__tab-lists">
                            <li class="whatis__tab-list whatis__tab-list--active" data-bodyId="whatis-tab-project-target">اهداف پروژه</li>
                            <li class="whatis__tab-list" data-bodyId="whatis-tab-project-history">تاریخچه پروژه</li>
                            <li class="whatis__tab-list" data-bodyId="whatis-tab-project-details">جزییات مالی پروژه</li>
                            <li class="whatis__tab-list" data-bodyId="whatis-tab-project-tech">ابعاد فنی پروژه</li>
                            <li class="whatis__tab-list" data-bodyId="whatis-tab-project-benefits">مزایای پروژه</li>
                        </ul>
                        <div class="whatis__tab-bodys">
                            <div class="whatis__tab-body whatis__tab-body--active" id="whatis-tab-project-target">
                                <div class="whatis__tab-body-title">اهداف پروژه</div>
                                <div class="whatis__tab-body-subtitle">
                                این پروژه دو هدف اصلی را دنبال می‌کند. افزایش بهره‌مندی سایت‌ها و سامانه‌های دولتی از محصولات ابری در قالب دولت الکترونیک و یکپارچه‌سازی این سامانه‌ها و ابری‌زی و دسترس‌پذیرتر کردن کسب‌وکارهای آنلاین که در شهرستان‌ها مشغول فعالیت هستند. 
                                <br>
                                <br>
                                به‌دلیل تمرکز ارتباطات محتوا در تهران، بسیاری از استارت‌آپ‌ها و کسب‌وکارهای آنلاین که در شهرها و استا‌ن‌های دور از پایتخت مشغول فعالیت هستند امکان بهره‌مندی کامل و گاه فعال‌سازی برخی سرویس‌های ابری را نخواهند داشت. راه‌اندازی پروژه ابر ایران بهبود کیفیت و افزایش سرعت توزیع محتوا، امکان بکا‌پ‌گیری دیتاها در چند منطقه جغرافیایی و کاهش هزینه‌های استفاده از زیرساخت ابری را برای این کسب‌وکارها به ارمغان بیاورد.
                                <br>
                                <br>
                                از دیگر اهداف این پروژه‌ می‌توان به موارد زیر اشاره کرد:
                                </div>
                                <div class="whatis__tab-target-boxes">
                                <div class="whatis__tab-target-box">امکان بکا‌پ‌گیری دیتاها در چند منطقه‌ی جغرافیایی</div>
                                <div class="whatis__tab-target-box">خصوصی‌سازی و تمرکززدایی دولتی و منطقه‌ای در حوزه‌‌ی خدمات ابری </div>
                                <div class="whatis__tab-target-box">تجهیز، ابری‌سازی و افزایش پایداری دیتاسنترهای قدیمی در استان‌ها</div>
                                <div class="whatis__tab-target-box">توزیع ترافیک داده‌‌ای کشور در سایر مناطق ایران </div>
                                <div class="whatis__tab-target-box">ارایه‌ی خدمات ابری ارزان‌تر به شرکت‌های دانش‌بنیان و کسب‌وکارهای نوپا </div>
                                <div class="whatis__tab-target-box">کاهش Latency و افزایش سرعت توزیع محتوا در کسب‌وکارهای محلی </div>
                                    <!-- <div class="whatis__tab-target-box">خصوصی‌سازی و تمرکززدایی دولتی و منطقه‌ای در حوزه‌ خدمات ابری </div>
                                    <div class="whatis__tab-target-box">تجهیز، ابری‌سازی و افزایش پایداری دیتاسنترهای قدیمی</div>
                                    <div class="whatis__tab-target-box">توزیع ترافیک داده‌‌ای کشور در سایر مناطق ایران </div>
                                    <div class="whatis__tab-target-box">ارایه خدمات ابری به شرکت‌های دولتی و دانش‌بنیان و کسب‌وکارهای نوپا</div>
                                    <div class="whatis__tab-target-box">صرفه‌جویی اقتصادی و جلوگیری از خروج ارز </div>
                                    <div class="whatis__tab-target-box">ارتقا، بهینه‌سازی و یکپارچه‌سازی مراکز داده دولتی در استان‌ها</div>
                                    <div class="whatis__tab-target-box">افزایش توان سرویس‌دهی سامانه‌های دولتی و عمومی به مردم </div>
                                    <div class="whatis__tab-target-box">کاهش Latency و افزایش سرعت توزیع محتوا در کسب‌وکارهای محلی</div> -->
                                </div>
                            </div>

                            <div class="whatis__tab-body" id="whatis-tab-project-history">
                                <div class="whatis__tab-body-title">تاریخچه پروژه</div>
                                <div class="whatis__tab-body-subtitle">
                                    ازسال ۱۳۹۶ رییس سابق سازمان فناوری اطلاعات تلاش‌هایی را برای واگذاری دیتاسنترهای نیمه‌فعال و ورشکسته‌ی استانی دولت آغاز کرد که زمان‌بر بودن این فرآیند، کمبود شرکت‌های واجد شرایط و نبود سازوکارهای مربوطه این کار را با کندی مواجه کرده بود. پس از تغییر ریاست سازمان فناوری اطلاعات و پی‌گیری‌های شرکت ارتباطات زیرساخت، این پروژه نام‌ تازه‌ای به خود گرفت و «ابر ایران» نامیده شد. طی یک فراخوان عمومی در ۳۰ مهر ۱۳۹۸ از طرف سازمان فناوری اطلاعات مزایده پروژه ابر ایران کلید خورد و پس از آن اسناد مزایده در دی ماه ۹۸ منتشر شد. پس از تجمیع دیتاسنتر‌های قابل واگذاری در دو منطقه‌ی شمالی و جنوبی، مزایده‌هایی برای واگذاری به بخش خصوصی برگزار شد که بیش از ۲۰ شرکت در آن حضور داشتند.
                                    <br>
                                    <br>
                                    پس از چند بار برگزاری مزایده‌های مختلف و درنهایت عبور از سه مرحله‌ی ارزیابی توان اجرایی، ارزیابی توان مالی و ارزیابی پیشنهادات فنی و تجاری، ۵ شرکت با کسب بالاترین امتیاز، برای مرحله‌ی نهایی انتخاب و درنهایت دو کنسرسیوم «ابر آروان-فناپ» و «آسیاتک-ژرف‌نگر و زس» برنده این مزایده شدند.
                                    <br> 
                                    <br>
                                    در پروژه ابر ایران دو منطقه برای توسعه‌‎ی مراکز داده‌ی دولت به‌وسیله‌ی بخش خصوصی در نظر گرفته شده که با نام‌های منطقه‌ی ابری ۱ یا ابر شمالی و منطقه‌ی ابری ۲ یا ابر جنوبی شناخته می‌شوند. منطقه ابری ۱یا منطقه‌ی شمالی که کنسرسیوم «آسیاتک-ژرف‌نگر و زس» واگذار شد شامل دیتاسنترهایی در شهرهای تبریز، مشهد، قم، همدان و اصفهان و منطقه‌ی ابری ۲ یا ابر جنوبی که در اختیار کنسرسیوم «ابر آروان-فناپ» قرار گرفت شامل دیتاسنترهایی در شهرهای شیراز، اصفهان، اهواز،‌ کرج و هم‌مکانی تبریز می‌شود. 
                                    <br>
                                    <br> 
                                    توسعه و آغاز به کار پروژه ابر ایران از زمستان ۱۳۹۹ آغاز شده است و امید آن می‌رود که در زمستان ۱۴۰۰ تعداد بسیاری از این دیتاسنترها به بهره‌برداری برسند. 
                                </div>
                                <div class="whatis__tab-project-history-image-container">
                                    <img class="whatis__tab-project-history-image" src="{{ asset('images/project-history.png') }}">
                                    <!-- <div class="whatis__tab-project-history-items">
                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--1">
                                            <div class="whatis__tab-project-history-item-title">ایده‌ابتدایی</div>
                                            <div class="whatis__tab-project-history-item-content">تلاش‌ها ناموفق برای واگذاری دیتاسنترهای نیمه فعال در سال ۹۶</div>
                                        </div>

                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--2">
                                            <div class="whatis__tab-project-history-item-title">تعریف پروژه</div>
                                            <div class="whatis__tab-project-history-item-content">سازماندهی و نام‌گذاری پروژه به ابر ایران برای انتشار فراخوان عمومی در سال ۹۸</div>
                                        </div>

                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--3">
                                            <div class="whatis__tab-project-history-item-title">برگزاری مزایده</div>
                                            <div class="whatis__tab-project-history-item-content">برگزاری چند مرحله‌ای مزایده با حضور ۲۰ شرکت ارایه‌کننده‌ی زیرساخت ابری</div>
                                        </div>

                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--4">
                                            <div class="whatis__tab-project-history-item-title">ارزیابی شرکت‌کنندگان</div>
                                            <div class="whatis__tab-project-history-item-content">سه مرحله‌ی ارزیابی برای سنجش توان اجرایی، مالی و فنی و تجاری</div>
                                        </div>

                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--5">
                                            <div class="whatis__tab-project-history-item-title">برندگان مزایده</div>
                                            <div class="whatis__tab-project-history-item-content">تعیین ۵ شرکت ابر آروان، فناپ، آسیاتک، ژرف‌نگر و زس به‌عنوان برنده مزایده</div>
                                        </div>

                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--6">
                                            <div class="whatis__tab-project-history-item-title">واگذاری پروژه</div>
                                            <div class="whatis__tab-project-history-item-content">به دو کنسرسیوم ابرشمالی شامل «آسیاتک-ژرف‌نگر و زس» و ابرجنوبی «ابر آروان-فناپ» </div>
                                        </div>

                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--7">
                                            <div class="whatis__tab-project-history-item-title">آغاز به کار</div>
                                            <div class="whatis__tab-project-history-item-content">توسعه و آغاز اقدامات فنی و اجرایی برای راه‌اندازی و بازسازی دیتاسنترها</div>
                                        </div>

                                        <div class="whatis__tab-project-history-item whatis__tab-project-history-item--8">
                                            <div class="whatis__tab-project-history-item-title">بهره برداری</div>
                                            <div class="whatis__tab-project-history-item-content">زمان بهره‌برداری هر دیتاسنتر بنا به عوامل مختلف متفاوت است</div>
                                        </div>
                                    </div> -->
                                    
                                </div>
                            </div>
                            <div class="whatis__tab-body" id="whatis-tab-project-details">
                                <div class="whatis__tab-body-title">جزییات مالی پروژه</div>
                                <div class="whatis__tab-body-subtitle">
                                ابر ایران یک قرارداد از نوع BOT (Build Operation Transfer) است که مالکیت اصلی دیتاسنترهای آن در اختیار دولت به عنوان طرف اول قرارداد خواهد بود و سود تضمین شده‌ی حاصل از تجاری‌سازی این دیتاسنترها به‌وسیله‌ی بخش خصوصی به دولت پرداخت می‌شود و در پایان قرارداد یعنی پس از ۷ سال، دیتاسنترهای تجهیز شده به سازمان فناوری اطلاعات ایران یا همان طرف اول قرارداد تحویل داده خواهد شد. 
                                <br>
                                <br>
                                دولت در این پروژه سرمایه‌گذاری نقدی نخواهد کرد و تنها زیرساخت‌های مراکز داده خود را برای توسعه در اختیار بخش خصوصی خواهد گذاشت. دو کنسرسیوم ابری اول و دوم برای راه‌اندازی و ابری‌سازی این ۱۰ دیتاسنتر لازم است مبلغی حدود ۲۴۰ میلیارد تومان سرمایه‌گذاری کنند که ۸۵ میلیارد تومان از این مبلغ از طرف دولت به‌شکل وام تامین و بقیه‌ی آن به‌شکل مستقیم از طرف شرکت‌های طرف قرارداد پرداخت خواهد شد. در ازای این سرمایه‌گذاری کنسرسیوم‌های «ابر آروان-فناپ» و «آسیاتک-ژرف‌نگر و زس» می‌توانند از زیرساخت این دیتاسنترها به‌مدت ۷ سال برای ارایه‌ی خدمات به مشتریان خود استفاده کنند. 
                                <br>
                                <br>
                                طبق قرارداد ابر ایران، مجموع سرمایه‌گذاری «ابر آروان-فناپ» در این دیتاسنترها در فاز اول ۶۰ میلیارد تومان است که تا پایان پروژه نیز افزایش پیدا خواهد کرد. هم‌چنین ۵درصد از سود این پروژه با حداقل میزان تضمین‌شده‌ی ۳۳ میلیارد تومان، به سازمان فناوری اطلاعات پرداخت خواهد شد. 
                                </div>
                            </div>
                            <div class="whatis__tab-body" id="whatis-tab-project-tech">
                                <div class="whatis__tab-body-title">ابعاد فنی پروژه</div>
                                <div class="whatis__tab-body-subtitle">
                                پیش از آن‌که به بررسی ابعاد پروژه بپردازیم لازم است تا اطلاعاتی از ظرفیت فعلی دیتاسنترهای عمومی کشور به‌دست آوریم. در حال حاضر، ظرفیت فیزیکی میزبانی محتوا در کشور به‌شکل عمومی حدود ۲ تا ۳هزار رک تخمین زده می‌شود که این میزان بدون در نظر گرفتن تعداد رک‌های موجود به‌شکل خصوصی و مراکز بانکی و سازمانی است. بزرگ‌ترین دیتاسنتر‌های فعال کشور بیش از ۴۰۸ رک ظرفیت در اختیار ندارند که نمونه‌هایی از آن را می‌توانید در جدول زیر ببینید: 
                                </div>
                                <div class="whatis__tab-project-tech-table">
                                    <div class="whatis__tab-project-tech-table-head">
                                        <div class="whatis__tab-project-tech-table-head-item">شرکت</div>
                                        <div class="whatis__tab-project-tech-table-head-item">شهر</div>
                                        <div class="whatis__tab-project-tech-table-head-item">نام‌دیتاسنتر</div>
                                        <div class="whatis__tab-project-tech-table-head-item">ظرفیت رک</div>
                                    </div>
                                    <div class="whatis__tab-project-tech-table-body">
                                    </div>
                                </div>
                                <div class="whatis__tab-project-tech-capacity">
                                    <div class="whatis__tab-project-tech-capacity-dropdown">
                                        <ul class="whatis__tab-project-tech-capacity-items" id="irancloud-project-tech-capacity">
                                            <li class="whatis__tab-project-tech-capacity-item--header">نام شرکت را انتخاب کنید</li>
                                            <li class="whatis__tab-project-tech-capacity-item" id="asiatech-capacity">اسیاتک</li>
                                            <li class="whatis__tab-project-tech-capacity-item" id="parsonline-capacity">پارس آنلاین</li>
                                            <li class="whatis__tab-project-tech-capacity-item" id="afranet-capacity">افرانت</li>
                                            <li class="whatis__tab-project-tech-capacity-item" id="tebian-capacity">تبیان</li>
                                            <li class="whatis__tab-project-tech-capacity-item" id="irancell-capacity">ایرانسل</li>
                                            <li class="whatis__tab-project-tech-capacity-item" id="hamrahaval1-capacity">همراه‌اول</li>
                                            <li class="whatis__tab-project-tech-capacity-item" id="hamrahaval2-capacity">همراه‌اول</li>
                                        </ul>
                                    </div>
                                    <div class="whatis__tab-project-tech-capacity-fields">
                                        <div class="whatis__tab-project-tech-capacity-label">شهر</div>
                                        <div class="whatis__tab-project-tech-capacity-field" id="irancloud-project-tech-capacity-name"></div>
                                        <div class="whatis__tab-project-tech-capacity-label">نام دیتاسنتر</div>
                                        <div class="whatis__tab-project-tech-capacity-field" id="irancloud-project-tech-capacity-datacenter"></div>
                                        <div class="whatis__tab-project-tech-capacity-label">ظرفیت رک</div>
                                        <div class="whatis__tab-project-tech-capacity-field" id="irancloud-project-tech-capacity-rack"></div>
                                    </div>
                                </div>
                                <div class="whatis__tab-project-tech-map-subtitle">
                                    با توجه به اطلاعات ذکر شده کل تجهیزات واگذار شده در قرارداد ابر ایران به کنسرسیوم ابری «ابر آروان-فناپ»، شامل ۲۱۶ سرور، ۱۳ پتابایت فضای ذخیره‌سازی و ۱۰۴ رک خواهد بود که این میزان با رسیدن به ظرفیت کامل، کم‌تر از ۳ تا ۵درصد از ظرفیت دیتاسنترهای عمومی کل کشور به شمار می‌آید.
                                    <br>
                                    <br>
                                    در نقشه‌ی زیر می‌توانید تعداد رک‌های منطقه‌ی دوم پروژه‌ی ابر ایران را به تفکیک هر شهر مشاهده کنید: 
                                </div>
                                <div class="whatis__tab-project-tech-latency">
                                    <div class="whatis__tab-project-tech-latency-dropdown">
                                        <ul class="whatis__tab-project-tech-latency-items" id="irancloud-project-tech-latency">
                                            <li class="whatis__tab-project-tech-latency-item--header">یک شهر را اﻧﺘﺨﺎب ﮐﻨﯿﺪ</li>
                                            <li class="whatis__tab-project-tech-latency-item" id="tabriz-latency">تبریز</li>
                                            <li class="whatis__tab-project-tech-latency-item" id="shiraz-latency">شیراز</li>
                                            <li class="whatis__tab-project-tech-latency-item" id="isfahan-latency">اصفهان</li>
                                            <li class="whatis__tab-project-tech-latency-item" id="karaj-latency">کرج</li>
                                            <li class="whatis__tab-project-tech-latency-item" id="ahvaz-latency">اهواز</li>
                                        </ul>
                                    </div>
                                    <div class="whatis__tab-project-tech-latency-fields">
                                        <div class="whatis__tab-project-tech-latency-label">تعداد رک</div>
                                        <div class="whatis__tab-project-tech-latency-field" id="irancloud-project-tech-latency-rack"></div>    
                                        <div class="whatis__tab-project-tech-latency-label">Latency از تهران</div>
                                        <div class="whatis__tab-project-tech-latency-field" id="irancloud-project-tech-latency-latency"></div>
                                    </div>
                                    <div class="whatis__tab-project-tech-latency-footer">رک‌های تبریز با رک‌های منطقه یک Co-Location یا هم‌مکان است.</div>
                                </div>
                                <div class="whatis__tab-project-tech-map">
                                    @svg('svg/irancloud/map.svg')
                                    <div class="whatis__tab-project-tech-map-footer">
                                        <div class="whatis__tab-project-tech-map-footer-inner">رک‌های تبریز با رک‌های منطقه یک Co-Location یا هم‌مکان است.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="whatis__tab-body" id="whatis-tab-project-benefits">
                                <div class="whatis__tab-body-title">مزایای پروژه</div>
                                <div class="whatis__tab-body-subtitle">
                                با تکمیل پروژه ابر ایران و راه‌اندازی کامل دیتاسنترهای قدیمی و ناکارآمد که در شهرهای مختلف کشور قرار دارند، کسب‌وکارها و شرکت‌های خصوصی و دولتی می‌توانند از مزایای زیر بهره‌مند شوند: 
                                </div>
                                <div class="whatis__tab-project-benefits-boxes">
                                    <div class="whatis__tab-project-benefits-box">بهره‌برداری سریع و استفاده‌ی بهینه‌تر از منابع ابری </div>
                                    <div class="whatis__tab-project-benefits-box">برطرف‌سازی نیازمندی‌های رو به توسعه‌ی زیرساختی کسب‌وکارهای آنلاین </div>
                                    <div class="whatis__tab-project-benefits-box">ظرفیت‌سازی برای شرکت‌های خصوصی و دانش‌بنیان در حوزه‌ی ابری</div>
                                    <div class="whatis__tab-project-benefits-box">صرفه‌جویی در هزینه‌های زیرساختی کسب‌وکارهای آنلاین</div>
                                    <div class="whatis__tab-project-benefits-box">رفع نگرانی‌های دولت در امنیت و ذخیره‌سازی داده‌های دولتی </div>
                                    <div class="whatis__tab-project-benefits-box">افزایش نقاط دسترسی و بهبود توزیع محتوا در شهرستان‌ها</div>
                                    <div class="whatis__tab-project-benefits-box">افزایش کیفیت دسترسی کاربران به خدمات و سرویس‌های ابری </div>
                                    <div class="whatis__tab-project-benefits-box">ارایه‌ی زیرساخت ابری به کسب‌وکارها و وب‌سایت‌های محلی</div>
                                    <div class="whatis__tab-project-benefits-box">افزایش سرعت و کیفیت توزیع محتوا برای کسب‌وکارهای محلی </div>
                                    <div class="whatis__tab-project-benefits-box">امکان ارایه‌ی سرویس‌های ویدیویی و استریمینگ لحظه‌ای در نقاط مختلف کشور</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="commitments">
                <div class="container">
                    <div class="commitments__title">تعهدات کنسرسیوم «ابر آروان-فناپ» در این پروژه </div>
                    <div class="commitments__subtitle">مطابق با قرارداد ابر ایران، ابرآروان-فناپ متعهد خواهند شد تا موارد زیر را به‌عهده گیرند: </div>
                    <div class="commitments__items">
                        <div class="commitments__item">طراحی و مهندسی دیتاسنترها </div>
                        <div class="commitments__item">تامین مالی و سرمایه‌گذاری لازم برای سرورها</div>
                        <div class="commitments__item">تامین نیروی انسانی برای اجرای پروژه و پرداخت حقوق و دستمزد آنان </div>
                        <div class="commitments__item">بیمه، تامین، تدارک و حمل تجهیزات</div>
                        <div class="commitments__item">بهره‌برداری، نگهداری و تعمیر تجهیزات </div>
                        <div class="commitments__item">ایجاد، تکمیل، آزمایش و راه‌اندازی به‌موقع پروژه مطابق با استانداردهای بین‌المللی </div>
                    </div>
                </div>
            </section>
            <section class="project">
                <div class="container">
                    <div class="project__title">پروژه ابر ایران و اینترنت ملی </div>
                    <div class="project__content">
                    پروژه‌ی ابر ایران هیچ ارتباطی با ایجاد پدیده‌ی ناموزون و نامیمون اینترنت ملی ندارد. تمام اینترنت ایران به‌شکل انحصاری به‌وسیله‌ی شرکت ارتباطات زیرساخت و در لایه‌ی بعدی اپراتورهای موبایل و FCP تهیه می‌شود و هیچ یک از زیرساخت‌های ابری ایران، مسیری برای دسترسی به اینترنت، خارج از این محدوده ندارند. . اینترنت بین‌الملل از طریق ۹ درگاه مختلف در نقاط مرزی کشور وارد ایران می‌شود و پس از آن به‌وسیله‌ی این شرکت بین FCPها یا شرکت‌های ارایه‌ی خدمات ثابت تقسیم می‌شود که آن‌ها اینترنت دریافت‌شده را به‌شکل تجاری بین مشتریان خود توزیع می‌کنند. دیتاسنترها و شرکت‌های ارایه‌دهنده‌ی خدمات ابری دریافت‌کننده‌ی خدمات از این شرکت‌ها هستند و در هیچ‌یک از نقاط مسیر تحویل اینترنت به مشتری قرار ندارند. ابر ایران پروژه‌ای برای ارتقا، تجهیز و ابری‌سازی تعداد محدودی از دیتاسنترهای موجود در کشور است که از نظر فنی، خدمات ابری ارایه‌شده به‌وسیله‌ی این دیتاسنترها، هیچ نقشی در زیرساخت اینترنت کشور ایفا نمی‌کنند و خود از مصرف‌کنندگان خدمات اینترنت به‌شمار می‌آیند. از سوی دیگر، همان‌طور که پیش‌تر نیز گفته شد، قرارداد ابر ایران تنها محدود به ابری‌سازی و استفاده‌ی تجاری از ۵ دیتاسنتر در شهرهای مختلف کشور با ظرفیتی معادل ۳ تا ۵درصد ظرفیت کل دیتاسنترهای عمومی ایران است که در مجموع تفاوت چشم‌گیری در زیرساخت رایانش ابری ایجاد نخواهد کرد. 
                    <br>
                    <br>
                    براین اساس ابر آروان به عنوان یکی از طرفین قرارداد ابر ایران هیچ اقدام و تلاشی برای مشارکت یا ورود به پروژه‌هایی که هدف آن‌ها قطع دسترسی مردم ایران به اینترنت است نداشته و نخواهد داشت و همواره از طریق اقداماتی مانند راه‌اندازی سامانه‌ی رادار و صفحه‌ی گزارش شفافیت از دسترسی بدون محدودیت همه‌ی مردم ایران به اینترنت و حفظ حریم خصوصی کاربران حمایت کرده و می‌کند. 
                    </div>
                </div>
            </section>
            <section class="questions">
                <div class="container">
                    <div class="questions__box">
                        <div class="questions__title">پاسخ به پرسش‌های متداول درباره‌ی پروژه </div>
                        <div class="questions__items">
                            <div class="questions__item questions__item--active">
                                <div class="questions__item-title"><span class="questions__item-title-text">ابر آروان چگونه برای انجام پروژه‌ی ابر ایران انتخاب شده است؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>

                                <div class="questions__item-content">
                                سازمان فناوری اطلاعات ایران طی فراخوانی عمومی در زمستان ۹۸ مزایده‌ای BOT با عنوان «شبکه‌ی ابری یکپارچه توزیع شده سازمان فناوری اطلاعات ایران (ابر ایران)» میان ۲۰ شرکت زیرساختی برگزار کرد که ابر آروان به عنوان یکی از شرکت‌کنندگان در این مزایده، پس از گذراندن سه مرحله‌ی ارزیابی توان اجرایی، توان مالی و ارزیابی پیشنهادات فنی و تجاری با کسب امتیاز بالاتر به همراه هلدینگ فناپ برنده مزایده‌ی منطقه دو شد. اسناد این ارزیابی در متن قرارداد دردسترس است. 
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>
                            

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">مبلغ سرمایه‌گذاری ابر آروان در پروژه‌ی ابر ایران به چه میزان است؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                برندگان مزایده ابر ایران در دو منطقه ۱ و ۲ مبلغ ۲۴۰ میلیارد تومان در این پروژه سرمایه‌گذاری خواهند کرد که ۸۵ میلیارد تومان از این مبلغ از طرف دولت به‌شکل وام تامین می‌شود. مجموع سرمایه‌گذاری کنسرسیوم «ابر آروان-فناپ در این دیتاسنترها در فاز اول ۶۰ میلیارد است که تا پایان پروژه افزایش نیز پیدا خواهد کرد.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">آیا ابر آروان در این پروژه از رانت یا انحصاری برخوردار است؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                ابر آروان به عنوان یکی از طرفین قرارداد ابر ایران هیچ رانت و انحصاری برای انتخاب در این پروژه دریافت نکرده و پس از طی مراحل مختلف مزایده و ارزیابی‌های متعدد به‌عنوان سرمایه‌گذار انتخاب شده است.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">آیا پروژه‌ ابر ایران به محدودسازی و قطع اینترنت کمک می‌کند؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                خیر. این پروژه تجهیز و راه‌اندازی تعداد محدودی دیتاسنتر قدیمی و بدون استفاده در ۵ شهر تبریز، اهواز، کرج، اصفهان و شیراز است که به‌منظور ابری‌سازی و ارایه‌ی خدمات زیرساخت ابری یا توزیع محتوا به‌وسیله‌ی سازمان‌ها و شرکت‌های مختلف بازسازی خواهند شد. تمام اینترنت ایران به‌شکل انحصاری به‌وسیله‌ی شرکت ارتباطات زیرساخت و در لایه‌ی بعدی اپراتورهای موبایل و FCP تهیه می‌شود. دیتاسنترها و شرکت‌های ارایه‌دهنده‌ی خدمات ابری مانند ابر آروان دریافت‌کننده‌ی خدمات از این شرکت‌ها هستند و از نظر فنی نمی‌توانند هیچ نقشی در قطعی اینترنت ایفا کنند.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>
                            
                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">بند شنود قانونی در قرارداد ابر ایران به چه معناست؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                <a href="https://en.wikipedia.org/wiki/Lawful_interception">شنود قانونی</a> (LI) مفهومی در قوانین جهانی است که به پلیس و مراجع قضایی داخلی یا بین‌المللی، با داشتن دستور قضایی اجازه درخواست برای دسترسی به اطلاعات کاربرانی را می‌دهد که مرتکب جرایم سایبری مانند تراکنش‌های کلاه‌بردارانه، دسترسی‌های نامعتبر به سرویس‌ها و سایر فعالیت‌های غیرقانونی مانند فیشینگ یا هرزه‌نگاری کودکان می‌شوند. تمام اپراتورها و سرویس‌دهندگان در تمام دنیا، ملزم به رعایت این قانون (LI) هستند. 
بر پایه گزارش شفافیت آروان، هیچ نرم‌افزار یا تجهیزاتی وابسته به مراجع امنیتی یا قضایی، با هدف ذخیره‌سازی یا شنود اطلاعات به‌شکل کلی یا جزیی در هیچ نقطه از شبکه‌ی ابرآروان وجود نداشته و ندارد.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">آیا ابر آروان داده‌های مشتریان را شنود می‌کند؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                خیر. طبق سیاست حفظ حریم خصوصی که مورد تایید سازمان فناوری اطلاعات به‌عنوان طرف اول این قرارداد نیز قرار گرفته است، ابر آروان در هیچ زمانی ترافیک مشتریان و کاربرانش را به‌شکل غیرقانونی و غیرمجاز شنود نخواهد کرد و هیچ نرم‌افزار یا تجهیزاتی وابسته به مراجع امنیتی یا قضایی، با هدف ذخیره‌سازی یا شنود اطلاعات به‌شکل کلی یا جزیی در هیچ نقطه از شبکه‌ی ابرآروان وجود نداشته و ندارد. این شرکت کلید رمزنگاری و تایید هویت خود یا مشتریان خود را به‌شکل غیرقانونی در اختیار هیچ شخص یا نهادی نمی‌گذارد وهمواره مشتریان را به استفاده از رمزنگاری داده‌ها و ارتباطات رمزنگاری شده تشویق می‌کند.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">آیا طرف اول قرارداد ابر ایران (دولت) می‌توان دستور قطع یا محدودیت در ارایه خدمات دیتاسنترها را بدهد؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                مطابق با قرارداد ابر ایران و با توجه به این‌که این دیتاسنترها در مالکیت سازمان فناوری اطلاعات ایران قرار دارد، طرف اول قرارداد می‌تواند ابر آروان و سایر شرکت‌های برنده در مزایده را ملزم به قطع یا محدودیت در سرویس‌دهی کند. این موضوع ارتباطی با قطع اینترنت نخواهد داشت و تنها دسترسی مشتریان به خدمات ابری در دیتاسنترهای مذکور را محدود خواهد کرد.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">چه زمانی دیتاسنترهای ابر آروان در پروژه ابر ایران بهره‌برداری می‌شوند؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                ابر آروان تلاش خواهد کرد که تا پایان سال ۱۴۰۰ دیتاسنترهای دو شهر اصفهان و تبریز را راه‌اندازی کند و در سال ۱۴۰۱ نیز دیتاسنتر شیراز را به بهره‌برداری برساند. به دلیل ناکارآمدی و آسیب‌های جدی موجود در دیتاسنترهای اهواز و کرج، زمان راه‌اندازی این سرویس‌ها را در حال حاضر نمی‌توان برآورد کرد.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">آیا قیمت سرویس‌های رایانش ابری پروژه ابر ایران نسبت به سایر دیتاسنترهای آروان متفاوت است؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                پس از تجهیز و راه‌اندازی کامل دیتاسنترهای ابر ایران و میزان هزینه‌های صرف شده برای این آماده‌سازی، می‌توان در زمینه‌ی قیمت نهایی سرویس‌هایی که در این دیتاسنترها ارایه خواهد شد، تصمیم‌گیری کرد. با این حال در تلاشیم به‌منظور تشویق کسب‌وکارهای آنلاین حاضر در شهرستان‌ها به ابرزی شدن و افزایش صرفه‌ی اقتصادی برای استارت‌آپ‌های محلی، خدمات ابری این دیتاسنترها را با قیمت کم‌تری عرضه کنیم.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title"><span class="questions__item-title-text">آیا سایر دیتاسنترهای ابر آروان تحت پروژه ابر ایران قرار خواهند گرفت؟</span><span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content">
                                خیر. ابر آروان در دو منطقه&zwnj;ی تهران مرکز (فروغ و سیمین)، یک منطقه در غرب تهران (بامداد)، یک منطقه در شرق تهران (نیما) و یک منطقه در هلند (هرمان) دیتاسنترهای مستقلی دارد که از مفاد این قرارداد به&zwnj;شکل کامل جدا هستند و قوانین حاکم بر پروژه&zwnj;ی ابر ایران ارتباطی به این دیتاسنترها نخواهد داشت. علاوه&zwnj;بر این، سازمان فناوری اطلاعات ایران به&zwnj;عنوان طرف اول قرارداد، اعمال مفاد <a href="https://www.arvancloud.com/fa/privacy"> سیاست حفظ حریم خصوصی </a>، <a href="https://www.arvancloud.com/fa/terms"> شرایط استفاده از خدمات</a> و سند <a href="https://www.arvancloud.com/fa/sla">سطح کیفیت خدمات</a> را نیز در زمینه&zwnj;ی همه&zwnj;ی محصولات ارایه شده در دیتاسنترهای پروژه ابر ایران پذیرفته است.
                                </div>
                                <div class="questions__item-spacer"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
