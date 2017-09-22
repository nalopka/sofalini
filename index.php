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
		$title = 'Заявка с лендинга sofalini-progress';
		if (!empty($_POST['msg'])) $msg .= '<br>'.$_POST['msg'];
    $from = 'pavlova@blackstonekeeping.com';
		$header = 'MIME-Version: 1.0' . "\n" .
			'Content-type: text/html; charset=UTF-8'. "\n" .
			'From: ColorEvent <' . $from . ">\n";
    $to = 'pavlova@blackstonekeeping.com';
    if (mail($to, $title, $msg, $header))
    	die('1');
	}
	if (count($_POST)!=0) die('0');
?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width">
  <title>Sofalini</title>
</head>
<body>
  <header class="header">
    <div class="logo">Sofalini</div>
    <div class="contacts"><a href="tel:+7 990 888 3992">+7 990 888 3992</a>
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
        <div class="header-content">
          <h1>Поможем подобрать диван под&nbsp;ваши предпочтения</h1><a href="#options" class="pickup">Подобрать</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-master">
          <h1>Ведущие мастера и дизайнеры интерьера</h1><a href="#transformers" class="pickup">Смотреть модели</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-promo">
          <h1>До конца сентября -30% на диваны</h1><a href="#discount" class="pickup">Получить промокод</a>
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
  <section id="discount" class="discount-banner discount-offer"><span>-30%</span>
    <h3>до конца сентября </h3>
    <form action="" method="post" data-form class="get-promo">
      <label for="get-promo">Получите промокод на электронную почту:</label>
      <div class="text-input">
        <input type="email" id="get-promo" placeholder="E-mail" name="email">
      </div>
      <button type="submit">Получить промокод</button>
    </form>
  </section>
  <section id="transformers" class="transformers slider">
    <h2 class="caption">Трансформеры</h2>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide hardy_middle"><img src="img/transformers/hardy_middle.jpg">
          <div class="information">
            <h3>Hardy</h3>
            <p class="about">Открытая форма, единая легкая конструкция — лидер мягкой мебели в&nbsp;стиле лофты</p>
            <p class="cost">от 162 822 ₽</p>
          </div>
        </div>
        <div class="swiper-slide stenford"><img src="img/transformers/stenford.jpg">
          <div class="information">
            <h3>Стенфорд</h3>
            <p class="about">Минималистичный модульный диван-кровать</p>
            <p class="cost">от 56 463 ₽</p>
          </div>
        </div>
        <div class="swiper-slide city"><img src="img/transformers/city.jpg">
          <div class="information">
            <h3>Сити</h3>
            <p class="about">Элегантный и оригинальный дизайн и&nbsp;небольшие габариты</p>
            <p class="cost">от 65 990 ₽</p>
          </div>
        </div>
        <div class="swiper-slide mini_best_big"><img src="img/transformers/mini_best_big.jpg">
          <div class="information">
            <h3>Mini Best</h3>
            <p class="about">Особый комфорт отдыхающему на&nbsp;диван-кровати «Mini Best»</p>
            <p class="cost">от 100 100 ₽</p>
          </div>
        </div>
        <div class="swiper-slide morfei-1"><img src="img/transformers/morfei-1.jpg">
          <div class="information">
            <h3>Морфей-1</h3>
            <p class="about">Максимум удобства и&nbsp;комфорта, пользующийся огромным спросом у&nbsp;покупателей</p>
            <p class="cost">от 77 335 ₽</p>
          </div>
        </div>
        <div class="swiper-slide chelsi"><img src="img/transformers/chelsi.jpg">
          <div class="information">
            <h3>Челси</h3>
            <p class="about">Символ уюта и&nbsp;комфорта, создающий особую атмосферу в&nbsp;гостиной</p>
            <p class="cost">от 110 540 ₽</p>
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
        <div class="swiper-slide manolo_01"><img src="img/eco/manolo_01.jpg">
          <div class="information">
            <h3>Manolo</h3>
            <p class="about">Manolo — это&nbsp;удобство со&nbsp;знаком бесконечности</p>
            <p class="cost">от 132 087 ₽</p>
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
            <h3>Морфей-2</h3>
            <p class="about">Уникальное конструкторское решение повышения комфортности спального места</p>
            <p class="cost">от 64 991 ₽</p>
          </div>
        </div>
        <div class="swiper-slide manolo_02"><img src="img/eco/manolo_02.jpg">
          <div class="information">
            <h3>Manolo</h3>
            <p class="about">Современный модульный диван для&nbsp;ценителей комфорта экстра-класса</p>
            <p class="cost">от 116 071 ₽</p>
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
        <div class="swiper-slide mini_best-2"><img src="img/single/mini_best-2.jpg">
          <div class="information">
            <h3>Mini Best-2</h3>
            <p class="about">Комфортное просторное кресло</p>
            <p class="cost">от 45 331 ₽</p>
          </div>
        </div>
        <div class="swiper-slide keddi"><img src="img/single/keddi.jpg">
          <div class="information">
            <h3>Кедди</h3>
            <p class="about">Рациональная роскошь в&nbsp;стиле арт-деко</p>
            <p class="cost">от 35 786 ₽</p>
          </div>
        </div>
        <div class="swiper-slide uyout"><img src="img/single/uyout.jpg">
          <div class="information">
            <h3>Уют</h3>
            <p class="about">Модель «Уют» можно идеально подстраивать к&nbsp;имеющемуся интерьеру</p>
            <p class="cost">от 41 653 ₽</p>
          </div>
        </div>
        <div class="swiper-slide klaus-7"><img src="img/single/klaus-7.jpg">
          <div class="information">
            <h3>Клаус-7</h3>
            <p class="about">Максимальный комфорт отдыхающему человеку</p>
            <p class="cost">от 29 371 ₽</p>
          </div>
        </div>
        <div class="swiper-slide mini_best_01"><img src="img/single/mini_best_01.jpg">
          <div class="information">
            <h3>Mini Best</h3>
            <p class="about">Велюровое раскладное кресло-кравать</p>
            <p class="cost">от 62 991 ₽</p>
          </div>
        </div>
        <div class="swiper-slide mini_best_02"><img src="img/single/mini_best_02.jpg">
          <div class="information">
            <h3>Mini Best</h3>
            <p class="about">Отличный вариант ещё&nbsp;одного посадочного места в&nbsp;вашей гостинной</p>
            <p class="cost">от 28 869 ₽</p>
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
        <div class="swiper-slide mini_best_big"><img src="img/premium/mini_best_big.jpg">
          <div class="information">
            <h3>Mini Best</h3>
            <p class="about">«Mini Best» пособен подстраиваться под&nbsp;индивидуальные особенности людей</p>
            <p class="cost">от 212 805 ₽</p>
          </div>
        </div>
        <div class="swiper-slide royal"><img src="img/premium/royal.jpg">
          <div class="information">
            <h3>Роял</h3>
            <p class="about">Шикарный дизайн дивана покорит ваших гостей</p>
            <p class="cost">от 195 859 ₽</p>
          </div>
        </div>
        <div class="swiper-slide best"><img src="img/premium/best.jpg">
          <div class="information">
            <h3>Best</h3>
            <p class="about">Многоплановая модульная система, позволяющая формировать конфигурацию</p>
            <p class="cost">от 318 283 ₽</p>
          </div>
        </div>
        <div class="swiper-slide jeneva"><img src="img/premium/jeneva.jpg">
          <div class="information">
            <h3>Женева</h3>
            <p class="about">Необычайно мягкие формы и&nbsp;идеально рассчитанная эргономика</p>
            <p class="cost">от 220 7450 ₽</p>
          </div>
        </div>
        <div class="swiper-slide lozanna"><img src="img/premium/lozanna.jpg">
          <div class="information">
            <h3>Лозанна</h3>
            <p class="about">Модель «Лозанна» прекрасно сочетает в&nbsp;себе функциональность и&nbsp;удобство</p>
            <p class="cost">от 361 700 ₽</p>
          </div>
        </div>
        <div class="swiper-slide hardy_red"><img src="img/premium/hardy_red.jpg">
          <div class="information">
            <h3>Hardy</h3>
            <p class="about">Диван «Hardy» — возможность не&nbsp;подстраиваться под&nbsp;ситуацию, а&nbsp;владеть ею</p>
            <p class="cost">от 236 664 ₽</p>
          </div>
        </div>
      </div>
      <div class="swiper-arrow swiper-button-prev"></div>
      <div class="swiper-arrow swiper-button-next"></div>
    </div>
  </section>
  <section id="options" class="discount-banner options">
    <div class="options-left"><span>?</span>
      <h3>Затрудняетесь в&nbsp;выборе?</h3>
      <p class="options-describe">Опишите диван, который вы хотите и наши специалисту подберут вам наиболее подходящий вариант.</p>
    </div>
    <div class="options-right">
      <div class="options-invite">
        <p>Поможем вам подобрать диван<br>под&nbsp;ваши предпочтения. Это&nbsp;бесплатно!</p>
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
            <h3>ТК&nbsp;Никольский Парк</h3>
            <p>г.&nbsp;Балашиха, Носовихинское&nbsp;ш., вл.&nbsp;4, 2&nbsp;этаж</p>
            <p>с&nbsp;10.00 по&nbsp;20.00 ежедневно</p><a target="_blank" href="https://2gis.ru/moscow/search/никольский%20парк/firm/4504127914707271/tab/firms?queryState=center%2F37.882395%2C55.750313%2Fzoom%2F16" class="show-map">Показать на карте</a>
          </div>
          <div class="address">
            <h3>БП&nbsp;Румянцево</h3>
            <p>22&nbsp;км. Киевского шоссе,&nbsp;4, корпус&nbsp;Б, 5&nbsp;подъезд, этаж&nbsp;2, сектор&nbsp;В-4</p>
            <p>с&nbsp;10.00 по&nbsp;21.00 ежедневно</p><a target="_blank" href="https://2gis.ru/moscow/search/бп%20румянцево/geo/4504286833934441/tab/geo?queryState=center%2F37.431839%2C55.635452%2Fzoom%2F16" class="show-map">Показать на карте</a>
          </div>
          <div class="address">
            <h3>ТК&nbsp;Каширский двор</h3>
            <p>Каширское шоссе, д.19, корп&nbsp;2, 1&nbsp;этаж</p>
            <p>с&nbsp;10.00 по&nbsp;21.00 ежедневно</p><a target="_blank" href="https://2gis.ru/moscow/search/ТК%20Каширский%20двор/firm/4504127908456917/tab/geo?queryState=center%2F37.629357%2C55.664927%2Fzoom%2F16" class="show-map">Показать на карте</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-footer"><a href="tel: +7 990 888 3992">+7 990 888 3992</a>
      <div class="payment"></div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
  <script src="script/slider.js"></script>
  <script src="script/forms.js"></script>
</body>