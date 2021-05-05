<?php get_header(); ?>

<section class="error-page" style="background-image: url(<?= get_template_directory_uri();?>/assets/img/layout/404.png);">
    <div class="error-page__bg">
            <span>
                404
            </span>
        <img src="<?= get_template_directory_uri();?>/assets/img/layout/4041.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="h2">
                    Такой страницы <br>
                    не существует
                </div>
            </div>
            <div class="col-lg-4">
                <div class="h5">
                    Воспользуйтесь меню для
                    навигации, либо перейдите на
                    <a href="<?= home_url(); ?>">главную страницу</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>