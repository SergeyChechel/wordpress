<div class="question">
            <div class="question__text">
                Есть вопросы? Напишите нам!
            </div>
            <div id="reply" class="minibutton">Написать</div>
            <div class="question__close">&times</div>
        </div>
        
        <div class="reply">
            <div class="reply__body">
                <div class="reply__title">
                    Оставьте ваш вопрос здесь
                </div>
                <?= do_shortcode('[contact-form-7 id="183" title="Форма отзывов - модальное окно"]'); ?>
                <!-- <form action="#">
                    <div class="reply__wrapper">
                        <div>
                            <label for="_name">Ваше имя <span>*</span></label>
                            <input name="_name" id="_name" type="text" required>
                        </div>
                    </div>
                    <div class="reply__wrapper">
                        <div>
                            <label for="mail">Email</label>
                            <input name="mail" id="mail" type="email">
                        </div>
                        <div>
                            <label for="phone">Ваш телефон <span>*</span></label>
                            <input name="phone" id="phone" type="tel" required>
                        </div>
                    </div>

                    <label for="text">Ваш вопрос <span>*</span></label>
                    <textarea required name="text" id="text"></textarea>
                    <button class="minibutton">Отправить</button>
                    <svg class="lds-spinner" width="65px"  height="65px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><g transform="rotate(0 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(30 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(60 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(90 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(120 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(150 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(180 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(210 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(240 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(270 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(300 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                        </rect>
                      </g><g transform="rotate(330 50 50)">
                        <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#013476">
                          <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                        </rect>
                      </g>
                    </svg>
        
                    <svg class="confirm ldt-bounce-in" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="38px" height="38px" viewBox="0 0 448.8 448.8" style="enable-background:new 0 0 448.8 448.8; color: green" xml:space="preserve"
                    ><g><g>
                        <polygon fill="green" points="142.8,323.85 35.7,216.75 0,252.45 142.8,395.25 448.8,89.25 413.1,53.55 		"/>
                    </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                    </svg>
               
        
                    <svg class="reject ldt-bounce-in " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" viewBox="0 0 100 100" style="transform-origin: 50px 50px 0px; width: 40px;" xml:space="preserve"><g style="transform-origin: 50px 50px 0px;"><g style="transform-origin: 50px 50px 0px; transform: scale(1);"><g class="ld ldt-bounce-in" style="transform-origin: 50px 50px 0px; animation-duration: 1.7s; animation-delay: 0s; animation-direction: normal;"><g><style type="text/css" style="transform-origin: 50px 50px 0px;">.st0{fill:#333333;} .st1{fill:#FFFFFF;} .st2{fill:#849B87;} .st3{fill:#FFFFFF;stroke:#333333;stroke-width:6;stroke-miterlimit:10;} .st4{fill:#CCCCCC;} .st5{fill:#ABBD81;} .st6{fill:#E0E0E0;} .st7{fill:#77A4BD;} .st8{fill:#E15B64;} .st9{fill:#FFFFFF;stroke:#333333;stroke-width:12;stroke-miterlimit:10;} .st10{fill:#666666;} .st11{fill-rule:evenodd;clip-rule:evenodd;fill:#666666;} .st12{fill:none;stroke:#E15B64;stroke-width:16;stroke-miterlimit:10;} .st13{fill:none;stroke:#849B87;stroke-width:16;stroke-miterlimit:10;} .st14{fill:none;stroke:#E15B64;stroke-width:22;stroke-miterlimit:10;} .st15{fill:none;stroke:#849B87;stroke-width:22;stroke-miterlimit:10;} .st16{fill:#A0C8D7;} .st17{fill:none;stroke:#E0E0E0;stroke-width:6;stroke-miterlimit:10;} .st18{fill:none;stroke:#E0E0E0;stroke-width:6;stroke-miterlimit:10;stroke-dasharray:7.5147,8.5882;} .st19{fill:#FFFFFF;stroke:#E15B64;stroke-width:6;stroke-miterlimit:10;} .st20{fill:#FFFFFF;stroke:#ABBD81;stroke-width:6;stroke-miterlimit:10;} .st21{fill:#E0E0E0;stroke:#B3B3B3;stroke-width:4;stroke-miterlimit:10;} .st22{fill:#E0E0E0;stroke:#ABBD81;stroke-width:4;stroke-miterlimit:10;} .st23{fill:#E0E0E0;stroke:#E15B64;stroke-width:4;stroke-miterlimit:10;} .st24{fill:none;stroke:#B3B3B3;stroke-width:4;stroke-linecap:round;stroke-miterlimit:10;} .st25{fill:#FFFFFF;stroke:#666666;stroke-width:6;stroke-miterlimit:10;} .st26{fill:#FFFFFF;stroke:#666666;stroke-width:8;stroke-miterlimit:10;} .st27{fill:none;stroke:#F47E60;stroke-width:19;stroke-linecap:round;stroke-miterlimit:10;} .st28{fill:none;stroke:#F47E60;stroke-width:9;stroke-linecap:round;stroke-miterlimit:10;} .st29{fill:none;stroke:#F47E60;stroke-width:14;stroke-linecap:round;stroke-miterlimit:10;} .st30{fill:none;stroke:#F47E60;stroke-width:10.2857;stroke-linecap:round;stroke-miterlimit:10;} .st31{fill:url(#SVGID_1_);} .st32{fill:url(#SVGID_2_);}</style><g style="transform-origin: 50px 50px 0px;"><path class="st8" d="M69.863,19.947L50,39.81L30.137,19.946c-2.809-2.809-7.379-2.809-10.189,0s-2.809,7.38,0,10.189l19.863,19.863 L19.948,69.862c-2.809,2.809-2.809,7.38,0,10.189s7.379,2.809,10.189,0L50,60.188l19.863,19.863c2.809,2.809,7.379,2.809,10.189,0 s2.809-7.38,0-10.189L60.189,49.998l19.863-19.863c2.809-2.809,2.809-7.38,0-10.189S72.673,17.138,69.863,19.947z" fill="rgb(225, 91, 100)" style="fill: rgb(225, 91, 100);"/></g><metadata xmlns:d="https://loading.io/stock/" style="transform-origin: 50px 50px 0px;">
                        <d:name style="transform-origin: 50px 50px 0px;">cross</d:name>
                        <d:tags style="transform-origin: 50px 50px 0px;">times,delete,clear,remove,error,forbid,deny,negative,drop,refuse,reject,cross,form</d:tags>
                        <d:license style="transform-origin: 50px 50px 0px;">cc0</d:license>
                        <d:slug style="transform-origin: 50px 50px 0px;">gsd528</d:slug>
                        </metadata></g></g></g></g><style type="text/css" style="transform-origin: 50px 50px 0px;">
                        </style>
                    </svg>
                    
                    <div class="reply__close">&times</div>
                </form> -->
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="footer__logo">
                            <!-- <img src="<?=bloginfo('template_url');?>/assets/img/icons/svg/logo.svg" alt="мир детства" class="footer__logo-img">
                            <div class="footer__logo-text">мир детства</div> -->
                            <?php the_custom_logo();?>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="footer__social">
                            <div class="footer__social-item">
                                Мы в соцсетях:
                            </div>
                            <?php the_field('social1_', 2);?>
                            <?php the_field('social2_', 2);?>
                            <?php the_field('social3_', 2);?>
                        </div>
                    </div>
                    <div class="col-md-8 offset-md-0 col-lg-6 col-xl-5 offset-xl-1">
                        <div class="footer__contacts">
                            <div class="footer__contacts-item">
                                <img src="<?=bloginfo('template_url');?>/assets/img/icons/svg/phone.svg" alt="телефон" class="footer__contacts-logo">
                                <div class="footer__contacts-tel">
                                    <a href="tel:<?php the_field('phone1', 2);?>"><?php the_field('phone1', 2);?></a>
                                    <a href="tel:<?php the_field('phone1', 2);?>"><?php the_field('phone2', 2);?></a>
                                </div>
                            </div>
                            <div class="footer__contacts-item">
                                <img src="<?=bloginfo('template_url');?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="footer__contacts-logo">
                                <address>ул. Василисы Кожиной, 1<br>
                                    Москва, Россия, 121096</address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="footer__policy">Политика конфиденциальности</a>
                    </div>
                </div>
            </div>
        </footer>
    <?php
        wp_footer();
    ?>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlZbPBZkVMc71sFeSnSf7TcS_Z9Cdge1o"></script> // Ваш ключ Google API 
      <script type="text/javascript">
      (function($) {

      /*
      *  new_map
      *
      *  Эта функция рендерит Google карту внутри выбранного jQuery элемента
      *
      *  @type	function
      *  @date	8/11/2013
      *  @since	4.3.0
      *
      *  @param	$el (jQuery элемент)
      *  @return	n/a
      */

      function new_map( $el ) {
        
        // Переменные
        var $markers = $el.find('.marker');
        
        
        // Переменные
        var args = {
          zoom		: 16,
          center		: new google.maps.LatLng(0, 0),
          mapTypeId	: google.maps.MapTypeId.ROADMAP
        };
        
        
        // Создаем карту	        	
        var map = new google.maps.Map( $el[0], args);
        
        
        // Создаем заготовку массива маркеров
        map.markers = [];
        
        
        // Добавляем маркеры
        $markers.each(function(){
          
            add_marker( $(this), map );
          
        });
        
        
        // Центрируем карту
        center_map( map );
        
        
        // Возвращаем данные
        return map;
        
      }

      /*
      *  add_marker
      *
      *  Эта функция добавляет маркер на Google карту
      *
      *  @type	function
      *  @date	8/11/2013
      *  @since	4.3.0
      *
      *  @param	$marker (jQuery элемент)
      *  @param	map (Google Map object)
      *  @return	n/a
      */

      function add_marker( $marker, map ) {

        // Переменные
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

        // Создаем маркер
        var marker = new google.maps.Marker({
          position	: latlng,
          map			: map
        });

        // Добавляем маркер в массив
        map.markers.push( marker );

        // Если маркер содержит HTML, добавим его в infoWindow
        if( $marker.html() )
        {
          // оздаем info window
          var infowindow = new google.maps.InfoWindow({
            content		: $marker.html()
          });

          // Показываем info window при нажатии на маркер
          google.maps.event.addListener(marker, 'click', function() {

            infowindow.open( map, marker );

          });
        }

      }

      /*
      *  center_map
      *
      *  Эта функция центрирует карту и показывает все маркеры, прикрепленные к карте
      *
      *  @type	function
      *  @date	8/11/2013
      *  @since	4.3.0
      *
      *  @param	map (Google Map object)
      *  @return	n/a
      */

      function center_map( map ) {

        // Переменные
        var bounds = new google.maps.LatLngBounds();

        // Перебираем все маркеры и создаем bounds
        $.each( map.markers, function( i, marker ){

          var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

          bounds.extend( latlng );

        });

        // Только 1 маркер?
        if( map.markers.length == 1 )
        {
          // Центрируем карту
            map.setCenter( bounds.getCenter() );
            map.setZoom( 16 );
        }
        else
        {
          // fit to bounds
          map.fitBounds( bounds );
        }

      }

      /*
      *  document ready
      *
      *  Эта функция рендерит каждую карту когда страница загружена
      *
      *  @type	function
      *  @date	8/11/2013
      *  @since	5.0.0
      *
      *  @param	n/a
      *  @return	n/a
      */
      // global var
      var map = null;

      $(document).ready(function(){

        $('.acf-map').each(function(){

          // Создаем карту
          map = new_map( $(this) );

        });

      });

      })(jQuery);
      </script>

    </body>
</html>

