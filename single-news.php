<?php
/*
Template Name: News
Template Post Type: news
*/
?>

<?php
get_header();

while ( have_posts() ) : the_post();
	?>
  <header class="header header-news">
	  <?php Parts::getHeader( true ) ?>
    <div class="body">
      <h1>News</h1>
      <h2 class="news-title"><?php the_title() ?></h2>
      <h3 class="news-date"><?php the_date( 'Y/m/d' ) ?></h3>
    </div>
  </header>
  <section class="section-body">
    <div class="news-wrapper">
		<?php the_content() ?>
    </div>
    <div class="news-bg-1"></div>
    <div class="news-bg-2"></div>
    <div class="news-bg-3"></div>
    <div class="news-bg-4"></div>
  </section>
	<?php
    $news = News::getNews( 9 );
    if ( count($news) > 3 ):
        ?>
    <div class="list-news-slider">
      <div class="news-slider-prev">
        <img src="<?=Media::iconURI('prev.svg')?>" alt="prev">
      </div>
      <div class="news-slider">
        <div class="owl-carousel">
		<?php foreach ($news as $item): ?>
          <div class="news-slider-item">
            <div class="slider-date"><?=$item['date'] ?></div>
            <p><?=$item['title'] ?></p>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
      <div class="news-slider-next">
        <img src="<?=Media::iconURI('next.svg')?>" alt="next">
      </div>
    </div>
	<?php endif; ?>
    <?php
endwhile;
get_footer();
?>
