<?
	if (count($_POST)!=0) {
		$msg = 'Новая заявка с лендинга Sofalini #1<br>';
		if (isset($_POST['phone'])) {
			$msg .= 'Телефон: '.$_POST['phone'].'<br>';
		}
		if (isset($_POST['email'])) {
			$msg .= 'E-mail: '.$_POST['email'].'<br>';
		}
		if (isset($_POST['message'])) {
			$msg .= 'Хочу: '.$_POST['message'].'<br>';
		}
		$title = 'Заявка с лендинга Sofalini #1';
		if (!empty($_POST['msg'])) $msg .= '<br>'.$_POST['msg'];
    $to = 'pavlova@blackstonekeeping.com,sofalini.mebel@yandex.ru';
		$header = 'MIME-Version: 1.0' . "\n" .
			'Content-type: text/html; charset=UTF-8'. "\n" .
			"From: Sofalini <hi@sofalini.ru>\n";
    if (@mail($to, $title, $msg, $header))
    	die('1');
	}
	if (count($_POST)!=0) die('0');
?>
<!DOCTYPE html>
<html lang="ru">
  <head><!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NK2XGFG');</script>
<!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width">
    <title>Sofalini</title>
  </head>
  <body><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NK2XGFG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <header class="header">
      <div class="logo">Sofalini</div>
      <div class="contacts"><a href="tel:+74956450018">+7 495 645 00 18</a>
        <button class="callback">Обратный звонок</button>
        <form action="" method="post" data-form class="callback-form">
          <div class="text-input">
            <input type="text" placeholder="Телефон" name="phone">
          </div>
          <button type="submit">Перезвоните мне</button>
        </form>
      </div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-promo">
            <h1>До&nbsp;25&nbsp;ноября <br>до&nbsp;-30%&nbsp;на&nbsp;диваны</h1><a href="#discount" data-scroll-to="#discount" class="pickup">Получить промокод</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="header-content">
            <h1>Поможем подобрать диван под&nbsp;ваши предпочтения</h1><a href="#options" data-scroll-to="#options" class="pickup">Подобрать</a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide-master">
            <h1>Ведущие мастера<br>и дизайнеры интерьера</h1><a href="#transformers" data-scroll-to="#transformers" class="pickup">Смотреть модели</a>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-arrow swiper-button-prev"></div>
      <div class="swiper-arrow swiper-button-next"></div>
    </header>
    <section class="features">
      <div class="choice">
        <h3>Большой выбор</h3>
        <p>Более 580 вариантов качественной мебели</p>
      </div>
      <div class="credit">
        <h3>Лёгкая рассрочка</h3>
        <p>Предоставляем беспроцентную рассрочку</p>
      </div>
      <div class="delivery">
        <h3>Доставка</h3>
        <p> Работаем по всей России</p>
      </div>
    </section>
    <section id="discount" class="discount-banner discount-offer"><span>до&nbsp;-30% на диваны</span>
      <h3>до&nbsp;25&nbsp;ноября </h3>
      <form action="" method="post" data-form class="get-promo">
        <label for="get-promo">Получите промокод на электронную почту:</label>
        <div class="text-input">
          <input type="email" placeholder="E-mail" name="email">
        </div>
        <button type="submit">Получить промокод</button>
      </form>
    </section>
    <section id="transformers" class="transformers slider">
      <h2 class="caption">Трансформеры</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide mini_best_big"><img src="img/transformers/mini_best_big.jpg">
            <div class="information">
              <h3>Альфа-Мини</h3>
              <p class="about">Особый комфорт отдыхающему на&nbsp;диван-кровати «Mini Best»</p>
              <p class="cost">от 70 145 ₽</p>
            </div>
          </div>
          <div class="swiper-slide alfa-mini"><img src="img/transformers/alfa-mini.jpg">
            <div class="information">
              <h3>Альфа-мини</h3>
              <p class="about">Простое и&nbsp;одновременно элегантное решение</p>
              <p class="cost">от 70 145 ₽</p>
            </div>
          </div>
          <div class="swiper-slide malta"><img src="img/transformers/malta.jpg">
            <div class="information">
              <h3>Мальта</h3>
              <p class="about">Прекрасно впишется в&nbsp;пространство, подчеркнув ваш стиль и&nbsp;характер</p>
              <p class="cost">от 80 389 ₽</p>
            </div>
          </div>
          <div class="swiper-slide morfei-1"><img src="img/transformers/morfei-1.jpg">
            <div class="information">
              <h3>Альфа</h3>
              <p class="about">Максимум удобства и&nbsp;комфорта, пользуется высоким спросом</p>
              <p class="cost">от 86 133 ₽</p>
            </div>
          </div>
          <div class="swiper-slide polo"><img src="img/transformers/polo.jpg">
            <div class="information">
              <h3>Поло</h3>
              <p class="about">Сев на&nbsp;«Поло», вставать с&nbsp;него вам точно не&nbsp;захочется</p>
              <p class="cost">от 105 980 ₽</p>
            </div>
          </div>
          <div class="swiper-slide chelsi"><img src="img/transformers/chelsi.jpg">
            <div class="information">
              <h3>Флеш</h3>
              <p class="about">Символ уюта и&nbsp;комфорта, создающий особую атмосферу в&nbsp;гостиной</p>
              <p class="cost">от 116 059 ₽</p>
            </div>
          </div>
          <div class="swiper-slide stenford"><img src="img/transformers/stenford.jpg">
            <div class="information">
              <h3>Стенфорд</h3>
              <p class="about">Минималистичный модульный диван-кровать</p>
              <p class="cost">от 124 460 ₽</p>
            </div>
          </div>
          <div class="swiper-slide randevu"><img src="img/transformers/randevu.jpg">
            <div class="information">
              <h3>Рандеву</h3>
              <p class="about">«Рандеву» станет местом встречи всех ваших друзей и&nbsp;родных</p>
              <p class="cost">от 142 000 ₽</p>
            </div>
          </div>
          <div class="swiper-slide city"><img src="img/transformers/city.jpg">
            <div class="information">
              <h3>Сити</h3>
              <p class="about">Элегантный и оригинальный дизайн и&nbsp;небольшие габариты</p>
              <p class="cost">от 159 600 ₽</p>
            </div>
          </div>
          <div class="swiper-slide hardy_middle"><img src="img/transformers/hardy_middle.jpg">
            <div class="information">
              <h3>Монако-2</h3>
              <p class="about">Открытая форма, единая легкая конструкция — лидер мягкой мебели в&nbsp;стиле лофт</p>
              <p class="cost">от 169 003 ₽</p>
            </div>
          </div>
        </div>
        <div class="swiper-arrow swiper-button-prev"></div>
        <div class="swiper-arrow swiper-button-next"></div>
      </div>
    </section>
    <section class="eco slider">
      <h2 class="caption">Дышите свободно</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide promo">
            <div class="eco-promo">
              <h3>Эко-мебель в вашем доме — это здоровье вас и вашей семьи</h3>
              <p>Мы используем материалы, безопасные для окружающей среды и человека.</p>
            </div>
          </div>
          <div class="swiper-slide adel"><img src="img/eco/adel.jpg">
            <div class="information">
              <h3>Адель</h3>
              <p class="about">Позволит вам принять самое комфортное положение и&nbsp;насладиться отдыхом</p>
              <p class="cost">от 29 070 ₽</p>
            </div>
          </div>
          <div class="swiper-slide milly"><img src="img/eco/milly.jpg">
            <div class="information">
              <h3>Milly</h3>
              <p class="about">Идеальное и&nbsp;неожиданное сочетание цены и&nbsp;качества</p>
              <p class="cost">от 42 699 ₽</p>
            </div>
          </div>
          <div class="swiper-slide conti"><img src="img/eco/conti.jpg">
            <div class="information">
              <h3>Conti</h3>
              <p class="about">Лаконичность и&nbsp;изящество линий</p>
              <p class="cost">от 44 732 ₽</p>
            </div>
          </div>
          <div class="swiper-slide torino"><img src="img/eco/torino.jpg">
            <div class="information">
              <h3>Торино</h3>
              <p class="about">Простое и&nbsp;элегантное решение для&nbsp;тех, кто&nbsp;любит комфорт и&nbsp;современный дизайн</p>
              <p class="cost">от 70 000 ₽</p>
            </div>
          </div>
          <div class="swiper-slide morfei-2"><img src="img/eco/morfei-2.jpg">
            <div class="information">
              <h3>Альфа-Лайн Мини</h3>
              <p class="about">Уникальное конструкторское решение повышения комфортности спального места</p>
              <p class="cost">от 71 390 ₽</p>
            </div>
          </div>
          <div class="swiper-slide malta"><img src="img/eco/malta.jpg">
            <div class="information">
              <h3>Мальта</h3>
              <p class="about">Такой диван обязательно станет свидетельством вашего безупречного вкуса</p>
              <p class="cost">от 80 389 ₽</p>
            </div>
          </div>
          <div class="swiper-slide fabio"><img src="img/eco/fabio.jpg">
            <div class="information">
              <h3>Фабио</h3>
              <p class="about">Диван в&nbsp;лаконичном рестро-стиле станет изюменкой вашей гостинной</p>
              <p class="cost">от 90 720 ₽</p>
            </div>
          </div>
          <div class="swiper-slide manolo_02"><img src="img/eco/manolo_02.jpg">
            <div class="information">
              <h3>Manolo</h3>
              <p class="about">Современный модульный диван для&nbsp;ценителей комфорта экстра-класса</p>
              <p class="cost">от 116 071 ₽</p>
            </div>
          </div>
          <div class="swiper-slide manolo_01"><img src="img/eco/manolo_01.jpg">
            <div class="information">
              <h3>Manolo</h3>
              <p class="about">Manolo — это&nbsp;удобство со&nbsp;знаком бесконечности</p>
              <p class="cost">от 132 087 ₽</p>
            </div>
          </div>
        </div>
        <div class="swiper-arrow swiper-button-prev"></div>
        <div class="swiper-arrow swiper-button-next"></div>
      </div>
    </section>
    <section class="single slider">
      <h2 class="caption">Для одного</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide barcelona"><img src="img/single/barcelona.jpg">
            <div class="information">
              <h3>Barcelona</h3>
              <p class="about">Итальянская технология изготовления мебели повышенной комфортности</p>
              <p class="cost">от 33 817 ₽</p>
            </div>
          </div>
          <div class="swiper-slide keddi"><img src="img/single/keddi.jpg">
            <div class="information">
              <h3>Кедди</h3>
              <p class="about">Рациональная роскошь в&nbsp;стиле арт-деко</p>
              <p class="cost">от 35 786 ₽</p>
            </div>
          </div>
          <div class="swiper-slide mini_best-2"><img src="img/single/mini_best-2.jpg">
            <div class="information">
              <h3>Mini Best-2</h3>
              <p class="about">Комфортное просторное кресло</p>
              <p class="cost">от 45 331 ₽</p>
            </div>
          </div>
          <div class="swiper-slide uyout"><img src="img/single/uyout.jpg">
            <div class="information">
              <h3>Уют</h3>
              <p class="about">Модель «Уют» можно идеально подстраивать к&nbsp;интерьеру</p>
              <p class="cost">от 45 818 ₽</p>
            </div>
          </div>
          <div class="swiper-slide molli"><img src="img/single/molli.jpg">
            <div class="information">
              <h3>Молли</h3>
              <p class="about">Современный диван в&nbsp;скандинавском стиле подарит вам уют и&nbsp;комфорт</p>
              <p class="cost">от 47 040 ₽</p>
            </div>
          </div>
          <div class="swiper-slide mini_best_01"><img src="img/single/mini_best_01.jpg">
            <div class="information">
              <h3>Альфа Мини</h3>
              <p class="about">Велюровое раскладное кресло-кровать</p>
              <p class="cost">от 60 842 ₽</p>
            </div>
          </div>
        </div>
        <div class="swiper-arrow swiper-button-prev"></div>
        <div class="swiper-arrow swiper-button-next"></div>
      </div>
    </section>
    <section class="premium slider">
      <h2 class="caption">Премиум-класс</h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide promo">
            <div class="premium-promo">
              <h3>Выбирайте самое лучшее</h3>
              <ul>
                <li>Ведущие итальянские мастера и дизайнеры интерьера</li>
                <li>Диваны по индивидуальному заказу</li>
                <li>Широкая палитра цветов</li>
              </ul>
            </div>
          </div>
          <div class="swiper-slide royal"><img src="img/premium/royal.jpg">
            <div class="information">
              <h3>Роял</h3>
              <p class="about">Шикарный дизайн дивана покорит ваших гостей</p>
              <p class="cost">от 127 680 ₽</p>
            </div>
          </div>
          <div class="swiper-slide hardy_red"><img src="img/premium/hardy_red.jpg">
            <div class="information">
              <h3>Монако-1</h3>
              <p class="about">Диван «Монако-1» — возможность не&nbsp;подстраиваться под&nbsp;ситуацию, а&nbsp;владеть ею</p>
              <p class="cost">от 149 445 ₽</p>
            </div>
          </div>
          <div class="swiper-slide mini_best_big"><img src="img/premium/mini_best_big.jpg">
            <div class="information">
              <h3>Альфа Мини</h3>
              <p class="about">«Альфа Мини» способен подстраиваться под&nbsp;индивидуальные особенности людей</p>
              <p class="cost">от 210 532 ₽</p>
            </div>
          </div>
          <div class="swiper-slide jeneva"><img src="img/premium/jeneva.jpg">
            <div class="information">
              <h3>Женева</h3>
              <p class="about">Необычайно мягкие формы и&nbsp;идеально рассчитанная эргономика</p>
              <p class="cost">от 220 745 ₽</p>
            </div>
          </div>
          <div class="swiper-slide best"><img src="img/premium/best.jpg">
            <div class="information">
              <h3>Альфа Про</h3>
              <p class="about">Многоплановая модульная система, позволяющая формировать конфигурацию</p>
              <p class="cost">от 318 283 ₽</p>
            </div>
          </div>
          <div class="swiper-slide lozanna"><img src="img/premium/lozanna.jpg">
            <div class="information">
              <h3>Лозанна</h3>
              <p class="about">Модель «Лозанна» прекрасно сочетает в&nbsp;себе функциональность и&nbsp;удобство</p>
              <p class="cost">от 361 700 ₽</p>
            </div>
          </div>
        </div>
        <div class="swiper-arrow swiper-button-prev"></div>
        <div class="swiper-arrow swiper-button-next"></div>
      </div>
    </section>
    <section id="options" class="discount-banner options options-opened">
      <div class="options-left"><span>?</span>
        <h3>Затрудняетесь в&nbsp;выборе?</h3>
        <p class="options-describe">Опишите диван, который вы хотите и наши специалисты подберут вам наиболее подходящий вариант.</p>
      </div>
      <div class="options-right">
        <div class="options-invite">
          <p>Поможем вам подобрать диван под&nbsp;ваши предпочтения. Это&nbsp;бесплатно!</p>
          <button>Подобрать</button>
        </div>
        <form action="" method="post" data-form class="options-form">
          <div class="text-input">
            <textarea placeholder="Ваши предпочтения" name="message"></textarea>
          </div>
          <div class="text-input">
            <input type="email" placeholder="E-mail" name="email">
          </div>
          <button type="submit">Отправить</button>
        </form>
      </div>
    </section>
    <footer class="main-footer">
      <div class="top-footer">
        <div class="top-footer-content">
          <h2 class="caption">Больше моделей в&nbsp;наших магазинах</h2>
          <div class="address-list">
            <div class="address">
              <div class="info">
                <h3>ТК&nbsp;Никольский Парк</h3>
                <p>г.&nbsp;Балашиха, Носовихинское&nbsp;ш., вл.&nbsp;4, 2&nbsp;этаж</p>
                <p>с&nbsp;10.00 по&nbsp;20.00 ежедневно</p>
              </div><a target="_blank" href="https://2gis.ru/moscow/search/никольский%20парк/firm/4504127914707271/tab/firms?queryState=center%2F37.882395%2C55.750313%2Fzoom%2F16" class="show-map">Показать на карте</a>
            </div>
            <div class="address">
              <div class="info">
                <h3>БП&nbsp;Румянцево</h3>
                <p>22&nbsp;км. Киевского шоссе,&nbsp;4, корпус&nbsp;Б, 5&nbsp;подъезд, этаж&nbsp;2, сектор&nbsp;В-4</p>
                <p>с&nbsp;10.00 по&nbsp;21.00 ежедневно</p>
              </div><a target="_blank" href="https://2gis.ru/moscow/search/бп%20румянцево/geo/4504286833934441/tab/geo?queryState=center%2F37.431839%2C55.635452%2Fzoom%2F16" class="show-map">Показать на карте</a>
            </div>
            <div class="address">
              <div class="info">
                <h3>ТК&nbsp;Каширский двор</h3>
                <p>Каширское шоссе, д.19, корп&nbsp;2, 1&nbsp;этаж</p>
                <p>с&nbsp;10.00 по&nbsp;21.00 ежедневно</p>
              </div><a target="_blank" href="https://2gis.ru/moscow/search/ТК%20Каширский%20двор/firm/4504127908456917/tab/geo?queryState=center%2F37.629357%2C55.664927%2Fzoom%2F16" class="show-map">Показать на карте</a>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom-footer">
        <div class="left"><a href="tel:+74956450018">+7 495 645 00 18</a><a href="privacy-policy.html">Политика конфиденциальности</a></div>
        <div class="payment"></div>
      </div>
    </footer>
    <div data-popup="closed" class="popup">
      <div data-popup-window="model" class="popup-window">
        <button data-popup-close class="popup-close">Закрыть</button>
        <h2>Узнать подробнее</h2>
        <p class="description">Мы свяжемся с вами, чтобы рассказать о доступности и опциях этой модели.</p>
        <div class="model"></div>
        <form action="" method="post" data-form class="model-form">
          <div class="text-input hidden">
            <input type="text" name="message">
          </div>
          <div class="text-input">
            <input type="text" placeholder="Телефон" name="phone">
          </div>
          <button type="submit">Отправить</button>
        </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="js/main.js"></script><script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/106898/script.js');
</script>

  </body>
</html>