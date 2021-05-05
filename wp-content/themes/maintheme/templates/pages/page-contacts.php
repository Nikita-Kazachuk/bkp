<?php
$contacts = get_field('contacts');
if( !empty($contacts) ) : ?>
    <section class="contact-hero" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/img/content/contact-header.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-hero__title h2">
                        Контакты
                    </div>
                </div>
                <div class="col-lg-6 contact-col">
                    <div class="contact-col__title h7">
                        Адрес
                    </div>
                    <div class="contact-col__info h5">
                        <?= $contacts['address']; ?>
                    </div>
                </div>

                <?php foreach ($contacts['phone'] as $phone) : ?>
                    <div class="col-lg-2 contact-col">
                        <div class="contact-col__title h7">
                            Телефон
                        </div>
                        <div class="contact-col__info h5">
                            <a href="tel:+37517 347-34-42">
                                <?= $phone['number']; ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="col-lg-2 contact-col">
                    <div class="contact-col__title h7">
                        Skype
                    </div>
                    <div class="contact-col__info h5">
                        <?= $contacts['skype']; ?>
                    </div>
                </div>
                <div class="col-lg-6 contact-col">
                    <div class="contact-col__title h7">
                        Режим работы
                    </div>
                    <div class="contact-col__info h5">
                        <?= $contacts['time_of_work']; ?>
                    </div>
                </div>
                <div class="col-lg-4 contact-col">
                    <ul class="contact-col__list">
                        <?php foreach ($contacts['social_netwokr'] as $social_network) : ?>
                            <li>
                                <a href="<?= $social_network['link']; ?>">
                                    <img src="<?= $social_network['icon']; ?>" alt="">
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-2 contact-col">
                    <a href="#contact" class="main-btn">
                        Консультация
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
        <?php the_content(); ?>
<?php get_template_part('templates/contact-form'); ?>