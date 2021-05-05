<section class="jumbotron">
    <div class="jumbotron-nav">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'side-menu',
        ) );
        ?>
    </div>
    <?php
    $first_block = get_field('first_block');
    if( !empty($first_block) ) : ?>
        <div class="section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="jumbotron-title h2">
                            <?= $first_block['title']; ?>
                        </div>
                        <div class="jumbotron-description h5">
                            <?= $first_block['subject']; ?>
                        </div>
                        <div class="materials-list">
                            <div class="materials-list__title">
                                Материалы для скачивания
                            </div>
                            <ul>
                                <?php foreach ($first_block['download'] as $document) : ?>
                                <li>
                                    <a href="<?= $document['document']; ?>" target="_blank">
                                        <?= $document['text']; ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 jumbotron-image">
                        <img src="<?= $first_block['image']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<section class="belcom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 belcom-content">
                <?php
                $honor_roll = get_field('honor_roll');
                if( !empty($honor_roll) ) : ?>
                <div class="honor-desk">
                    <div class="h4">
                        Доска почета
                    </div>
                    <div class="row">

                        <?php
                            foreach ($honor_roll as $employee) : ?>

                        <div class="col-lg-4 honor-desk__item">
                            <div class="honor-desk__image">
                                <img src="<?= $employee['image'] ?>" alt="">
                            </div>
                            <div class="honor-desk__info">
                                <div class="honor-desk__name">
                                    <?= $employee['name'] ?>
                                </div>
                                <div class="honor-desk__role">
                                    <?= $employee['post'] ?>
                                </div>
                            </div>
                        </div>

                        <?php
                            endforeach; ?>
                    </div>
                <?php endif; ?>
                </div>

                <?php
                $block_inf = get_field('block_inf');
                if( !empty($block_inf) ) :
                    foreach ($block_inf as $post) : ?>
                        <div class="h4">
                            <?= $post['title']; ?>
                        </div>
                        <p>
                            <?= $post['text']; ?>
                        </p>
                <?php
                    endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section>
