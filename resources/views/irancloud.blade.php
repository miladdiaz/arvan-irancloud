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
                                    <div class="whatis__tab-target-box">خصوصی‌سازی و تمرکززدایی دولتی و منطقه‌ای در حوزه‌ خدمات ابری </div>
                                    <div class="whatis__tab-target-box">تجهیز، ابری‌سازی و افزایش پایداری دیتاسنترهای قدیمی</div>
                                    <div class="whatis__tab-target-box">توزیع ترافیک داده‌‌ای کشور در سایر مناطق ایران </div>
                                    <div class="whatis__tab-target-box">ارایه خدمات ابری به شرکت‌های دولتی و دانش‌بنیان و کسب‌وکارهای نوپا</div>
                                    <div class="whatis__tab-target-box">صرفه‌جویی اقتصادی و جلوگیری از خروج ارز </div>
                                    <div class="whatis__tab-target-box">ارتقا، بهینه‌سازی و یکپارچه‌سازی مراکز داده دولتی در استان‌ها</div>
                                    <div class="whatis__tab-target-box">افزایش توان سرویس‌دهی سامانه‌های دولتی و عمومی به مردم </div>
                                    <div class="whatis__tab-target-box">کاهش Latency و افزایش سرعت توزیع محتوا در کسب‌وکارهای محلی</div>
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
                                <div class="whatis__tab-project-history-image">
                                    @svg('svg/irancloud/project-history.svg')
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
                                <div class="whatis__tab-project-tech-map-subtitle">
                                    با توجه به اطلاعات ذکر شده کل تجهیزات واگذار شده در قرارداد ابر ایران به کنسرسیوم ابری «ابر آروان-فناپ»، شامل ۲۱۶ سرور، ۱۳ پتابایت فضای ذخیره‌سازی و ۱۰۴ رک خواهد بود که این میزان با رسیدن به ظرفیت کامل، کم‌تر از ۳ تا ۵درصد از ظرفیت دیتاسنترهای عمومی کل کشور به شمار می‌آید.
                                    <br>
                                    <br>
                                    در نقشه‌ی زیر می‌توانید تعداد رک‌های منطقه‌ی دوم پروژه‌ی ابر ایران را به تفکیک هر شهر مشاهده کنید: 
                                </div>
                                <div class="whatis__tab-project-tech-map">
                                    @svg('svg/irancloud/map.svg')
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
                    <div class="commitments__row">
                        <div class="commitments__right">
                            <div class="commitments__items">
                                <div class="commitments__item">طراحی و مهندسی دیتاسنترها </div>
                                <div class="commitments__item">تامین مالی و سرمایه‌گذاری لازم برای سرورها</div>
                                <div class="commitments__item">تامین نیروی انسانی برای اجرای پروژه و پرداخت حقوق و دستمزد آنان </div>
                                <div class="commitments__item">بیمه، تامین، تدارک و حمل تجهیزات</div>
                                <div class="commitments__item">بهره‌برداری، نگهداری و تعمیر تجهیزات </div>
                                <div class="commitments__item">ایجاد، تکمیل، آزمایش و راه‌اندازی به‌موقع پروژه مطابق با استانداردهای بین‌المللی </div>
                            </div>
                        </div>
                        <div class="commitments__left">
                            <div class="commitments__motion-box">
                                @svg('svg/irancloud/commitment-motion.svg')
                            </div>
                        </div>
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
                            <div class="questions__item">
                                <div class="questions__item-title">ابر آروان چگونه برای انجام پروژه‌ی ابر ایران انتخاب شده است؟ <span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>

                                <div class="questions__item-content">
                                سازمان فناوری اطلاعات ایران طی فراخوانی عمومی در زمستان ۹۸ مزایده‌ای BOT با عنوان «شبکه‌ی ابری یکپارچه توزیع شده سازمان فناوری اطلاعات ایران (ابر ایران)» میان ۲۰ شرکت زیرساختی برگزار کرد که ابر آروان به عنوان یکی از شرکت‌کنندگان در این مزایده، پس از گذراندن سه مرحله‌ی ارزیابی توان اجرایی، توان مالی و ارزیابی پیشنهادات فنی و تجاری با کسب امتیاز بالاتر به همراه هلدینگ فناپ برنده مزایده‌ی منطقه دو شد. اسناد این ارزیابی در متن قرارداد دردسترس است. 
                                </div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">مبلغ سرمایه‌گذاری ابر آروان در پروژه‌ی ابر ایران به چه میزان است؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">آیا ابر آروان در این پروژه از رانت یا انحصاری برخوردار است؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">آیا پروژه‌ ابر ایران به محدودسازی و قطع اینترنت کمک می‌کند؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>
                            
                            <div class="questions__item">
                                <div class="questions__item-title">بند شنود قانونی در قرارداد ابر ایران به چه معناست؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">آیا ابر آروان داده‌های مشتریان را شنود می‌کند؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">آیا طرف اول قرارداد ابر ایران (دولت) می‌توان دستور قطع یا محدودیت در ارایه خدمات دیتاسنترها را بدهد؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">چه زمانی دیتاسنترهای ابر آروان در پروژه ابر ایران بهره‌برداری می‌شوند؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">آیا قیمت سرویس‌های رایانش ابری پروژه ابر ایران نسبت به سایر دیتاسنترهای آروان متفاوت است؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                            <div class="questions__item">
                                <div class="questions__item-title">آیا سایر دیتاسنترهای ابر آروان تحت پروژه ابر ایران قرار خواهند گرفت؟<span class="questions__item-title-icon">@svg('svg/irancloud/arrow-bottom.svg')</span></div>
                                <div class="questions__item-content"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
