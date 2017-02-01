<?php /* Template Name: Онлайн тренировки */ get_header(); ?>
    <div class="x-main full" role="main">
    <article id="post-9933" class="post-9933 page type-page status-publish has-post-thumbnail hentry">
        <div class="entry-content content">
            <div id="x-section-1" class="x-section hero-banner bg-image" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <h2 class="h-custom-headline h3">
                          <span>Индивидуальная Программа Тренировок + План Питания</span>
                        </h2>
                        <div class="x-text">
                            <p>“Опираясь на опыт, накопленный за время работы персональными тренерами, мы составим персонализированную программу тренировок, которая наилучшим образом подойдет для достижения Ваших целей”
                                <br> – Евгений
                            </p>
                        </div>
                        <a class="x-btn lets-go-btn bright-blue x-btn-transparent x-btn-square x-btn-regular" style="margin-bottom:0em;" href="#" data-options="thumbnail: ''">Я ГОТОВ, ВПЕРЕД!</a>
                    </div>
                </div>
            </div>

            <div id="x-section-3" class="x-section center-text ask-scott-section bg-image"  data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
                <div class="x-container max width">
                    <div class="x-column x-sm left-text  x-1-2">
                        <h2 class="h-custom-headline left-text  h3"><span>Задай нам<b> вопрос</b></span></h2>
                        <div class="x-text left-text">
                           <p>Расскажите нам о самых больших фитнес-проблемах с которыми Вам пришлось столкнутся и мы ответим Вам в личном сообщении по е-мейл.</p>
                        </div>
                        <div class="x-raw-content grid-form">
                           <?php echo do_shortcode('[contact-form-7 id="238" title="top form"]'); ?>
                        </div>
                    </div>
              </div>
          </div><!-- x-section-3 -->

            <div id="x-section-4" class="x-section how-it-works">
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <h2 class="h-custom-headline left-text  h3"><span>Внутри <b>Вашей программы</b></span></h2>
                    </div>
                </div>
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-2">
                        <div class="x-text">
                            <p>Каждый человек индивидуален, что работает для одних, абсолютно не эффективно для других, поэтому мы не верим в одинаковый для всех подход к тренировкам. Ваша Онлайн программа тренировок и Планировщик питания созданы конкретно для Вас, а это значит, что Вы сэкономите кучу времени пытаясь найти «золотую середину» в тренировках и достигнете результатов значительно быстрее чем Вы делали это прежде.</p>
                        </div>
                    </div>
                    <div class="x-column x-sm x-1-2">
                      <img class="x-img x-img-none" src="<?php echo get_template_directory_uri(); ?>/img/training-plan-mockup.jpg">
                    </div>
                </div>
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <div class="x-raw-content">
                            <blockquote class="x-blockquote">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/owain-150x150.jpg">“I have worked with a number of personal trainers during my 8 years in Los Angeles and none have proved more effective or knowledgeable than Scott – I have lost weight and gained lean muscle mass”
                                <cite class="x-cite">Owain Yeoman, CBS's The Mentalist</cite>
                                <div style="clear: both;"></div>
                            </blockquote>
                        </div>
                        <h2 class="h-custom-headline h3">
                          <span>Как Это <b>Работает?</b></span>
                        </h2>
                        <ul class="x-feature-list" data-x-element="feature_list" data-x-params="{&quot;animationOffset&quot;:&quot;50&quot;,&quot;animationDelayInitial&quot;:&quot;0&quot;,&quot;animationDelayBetween&quot;:&quot;300&quot;}">

                        <?php if( have_rows('advantage_personal') ): while ( have_rows('advantage_personal') ) : the_row(); ?>
                            <li class="x-feature-box left-text top-text cf" data-x-element="feature_box" data-x-params="{&quot;child&quot;:true,&quot;graphicAnimation&quot;:&quot;none&quot;,&quot;connectorAnimation&quot;:&quot;none&quot;,&quot;alignH&quot;:&quot;left&quot;,&quot;alignV&quot;:&quot;top&quot;}">
                          <span class="x-feature-box-connector full">
                              <span class="visually-hidden">Connector.</span>
                            </span>
                                <div class="x-feature-box-graphic hexagon">
                                    <div class="x-feature-box-graphic-outer hexagon">
                                        <div class="x-feature-box-graphic-inner hexagon">
                                          <i class="x-icon-edit hexagon" data-x-icon=""></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="x-feature-box-content">
                                    <h4 class="x-feature-box-title"><?php the_sub_field('adv_name'); ?></h4>
                                    <p class="x-feature-box-text"><?php the_sub_field('adv_desc'); ?></p>
                                </div>
                            </li>
                            <?php endwhile; endif; ?>
                        </ul>
                        <div class="x-raw-content">
                            <blockquote class="x-blockquote" style="border-color:#bbb;">
                            <img src="http://scottlaidler.com/wp-content/uploads/2016/04/kierston-150x150.jpg?503b89">“Since meeting Scott, it’s the first time I’ve ever enjoyed training in a gym. Time passes quickly and the sessions are varied. He also provides a rounded service, focusing on nutrition as well as exercise so that I achieve my goals quicker. I’m definitely seeing a difference and getting more toned which is exactly what I wanted.”
                                <cite class="x-cite">Kierston Wareing: Eastenders, Luther, Top Boy</cite>
                                <div style="clear: both;"></div>
                            </blockquote>
                        </div>
                        <h3 class="h-custom-headline h3" style="margin-top:1.5em;"><span>Ваша программа <b>везде</b></span></h3>
                        <div class="x-text" style="color: #333">
                            <p>Ваша программа, библиотека упражнений, и служба поддержки будет доступна на любом устройстве, где бы вы ни находились.</p>
                        </div>
                      <a class="x-btn lets-go-btn blue x-btn-transparent x-btn-square x-btn-regular" href="#" data-options="thumbnail: ''">I’M READY, LET’S GO</a>
                      <img class="x-img responsive-devices x-img-none" style="margin-bottom:0px; display:block" src="http://scottlaidler.com/wp-content/uploads/2016/04/responsive-sales-page1.jpg?503b89">
                  </div>
                </div>
            </div><!-- x-section-4 -->

            <div id="x-section-6" class="x-section">
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-1">
                        <h2 class="h-custom-headline h3"><span>Some <b>previous transformations</b></span></h2></div>
                </div>
                <div class="x-container max width">
                    <div class="x-column x-sm x-1-3">
                      <img class="x-img x-img-none" src="<?php echo get_template_directory_uri(); ?>/img/Rich-v2.jpg">
                    </div>
                    <div class="x-column x-sm x-1-3">
                    <img class="x-img x-img-none" src="<?php echo get_template_directory_uri(); ?>/img/Natalie-slater-king.jpg">

                    </div>
                    <div class="x-column x-sm x-1-3">
                      <img class="x-img x-img-none" src="<?php echo get_template_directory_uri(); ?>/img/Dave-v2.jpg">
                    </div>
                     <blockquote class="x-blockquote">
                        “I am over the moon with the results, this has actually changed the way I see food and how much I enjoy exercising.”
                            <cite class="x-cite">Natalie</cite>
                        </blockquote>
                </div>
            </div><!-- x-section-6 -->

            <div id="x-section-7" class="x-section center-text purchase-section">
                <div class="x-container max width">
                    <div class="x-column x-sm left-text  x-1-1"">
                        <h2 class="h-custom-headline left-text  h3"><span>Начни Онлайн Тренировки  <b>Сейчас</b></span></h2>
                        <h3 class="h-custom-headline h4">
                          <span><i class="x-icon x-icon-globe" data-x-icon="" aria-hidden="true"></i> При оформлении заказа принимаются все валюты</span>
                        </h3>
                        <div class="x-pricing-table cf three-columns">
                            <div class="x-pricing-column">
                                <h2 class="man">Split4fit LITE </h2>
                                <div class="x-pricing-column-info">
                                    <h3 class="x-price">19,95$/1500руб./500грн.</h3><span></span>
                                    <ul class="x-ul-icons">
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Индивидуальная программа тренировок на 8 недель </li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>План Питания Без Куратора</li>
                                    </ul>
                                    <a class="x-btn blue x-btn-transparent x-btn-square x-btn-regular" href="#" title="Example" data-options="thumbnail: ''"><i class="x-icon x-icon-credit-card" data-x-icon="" aria-hidden="true"></i>Купить сейчас</a></div>
                            </div>
                            <div class="x-pricing-column featured">
                                <h2 class="man">Split4fit 6 недель</h2>
                                <div class="x-pricing-column-info">
                                    <h3 class="x-price">49,95$/3000руб./1370грн.</h3>
                                    <ul class="x-ul-icons">
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Индивидуальный план тренировок</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>План питания</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Вводная Скайп конференция</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Доступ к библиотеке упражнений и  закрытой группе</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Еженедельный контроль тренером по емейл</li>
                                    </ul>
                                    <a class="x-btn blue x-btn-transparent x-btn-square x-btn-regular" href="#" title="Example" data-options="thumbnail: ''"><i class="x-icon x-icon-credit-card" data-x-icon="" aria-hidden="true"></i>Купить сейчас</a>
                                </div>
                            </div>
                            <div class="x-pricing-column">
                                <h2 class="man">Split4fit 12 недель (ТОП курс)</h2>
                                <div class="x-pricing-column-info">
                                    <h3 class="x-price">90$/5300руб./2400грн.</h3><span></span>
                                    <ul class="x-ul-icons">
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Индивидуальный план тренировок</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>План питания</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Вводная Скайп конференция+3 скайп конференции на протяжении курса</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Доступ к библиотеке упражнений и  закрытой группе</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Еженедельный контроль по е-мейл</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Постоянная Онлайн поддержка тренером в мессенджере или соц. сети</li>
                                        <li class="x-li-icon"><i class="x-icon-check" data-x-icon="" aria-hidden="true"></i>Коррекция тренировочного плана после 6ти недельного отчета </li>
                                    </ul>
                                    <a class="x-btn blue x-btn-transparent x-btn-square x-btn-regular" href="#" title="Example" data-options="thumbnail: ''"><i class="x-icon x-icon-credit-card" data-x-icon="" aria-hidden="true"></i>Купить сейчас</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>

<?php get_footer(); ?>
