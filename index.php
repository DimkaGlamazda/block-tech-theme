<?php get_header() ?>
<div class="h-header-bg">
  <img data-is-loaded="false" src="<?=Media::contentURI( 'lection-mobile.png' )?>" alt="Heder Lection">
  <video id="home-video" class="h-header-media" data-js="h-header-bg" autoplay muted loop>
    <source id="mp4" src="<?=Media::contentURI( 'bg-video.mp4' )?>">
  </video>
</div>
<header class="header home-header" data-js="h-header-section">

    <?php Parts::getHeader() ?>

  <div class="wrapper">
    <h2><span>making</span><span>blockchain</span><span>innovation</span>
      <p>ブロックチェーン・イノベーションの創造へ。</p></h2>
    <div class="h-h-jump-down-container">
      <div class="icon-scroll">
        <div class="icon-scroll-screen"></div>
      </div>
    </div>
  </div>
</header>
<section class="h-section-1">
  <h3 class="section-title">Feature</h3>
  <div class="section-body">
    <div class="dots"></div>
    <div class="home-slider">
      <div>
        <img src="<?=Media::contentURI( 'digital-background.png' )?>" alt="Digital background">
        <div class="slider-item-overlay">
          <div class="content-1">
            <h4>DBIC x BlockTechJapan</h4>
            <h5>DBICブロックチェーン導入検討会プログラム</h5>
            <p>
              <span>世界を代表するブロックチェーン先駆者が語る、</span>
              <span>ブロックチェーンの最新事例とビジネスに実装する方法。</span>
            </p>
            <a href="/news/京都工芸繊維大学との「働き方改革」ソリューシ/">詳細はこちら</a>
          </div>
          <div class="slide-number">01</div>
        </div>
        <div class="home-slider-next">
          <img src="<?=Media::iconURI( 'next.svg' )?>" alt="next">
        </div>
        <div class="home-slider-prev">
          <img src="<?=Media::iconURI( 'prev.svg' )?>" alt="prev">
        </div>
        <span class="slider-progres-bar"></span>
      </div>
      <div>
        <img src="<?=Media::contentURI( 'bronze-wallpaper.png' )?>" alt="Bronze wallpaper">
        <div class="slider-item-overlay">
          <a href="/finance" class="content-2">
            <h3>金融業向けブロックチェーン応用事例</h3>
            <p>分散型台帳技術とも呼ばれているブロックチェーンが起こすデータベース革命。最もホットな金融分野における10の事例をご紹介します。</p>
          </a>
          <div class="slide-number">02</div>
        </div>
        <div class="home-slider-next">
          <img src="<?=Media::iconURI( 'next.svg' )?>" alt="next">
        </div>
        <div class="home-slider-prev">
          <img src="<?=Media::iconURI( 'prev.svg' )?>" alt="prev">
        </div>
        <span class="slider-progres-bar"></span>
      </div>
      <div>
        <img src="<?=Media::contentURI( 'pour-travailler-autrement.png' )?>" alt="Pour travailler autrement">
        <div class="slider-item-overlay">
          <a href="#" class="content-3">
            <div class="first">
              <div>BlockTechJapan CEO</div>
              サーシャ・コフマン
            </div>
            <div class="second">BlockTechJapan が 目指す将来とは</div>
          </a>
          <div class="slide-number">03</div>
        </div>
        <div class="home-slider-next">
          <img src="<?=Media::iconURI( 'next.svg' )?>" alt="next">
        </div>
        <div class="home-slider-prev">
          <img src="<?=Media::iconURI( 'prev.svg' )?>" alt="prev">
        </div>
        <span class="slider-progres-bar"></span>
      </div>
    </div>
    <div class="home-representative-message-section">
      <div class="representative-message-section-bg">
        <div class="representative-message-bg-layer layer-1">
          <div></div>
        </div>
        <div class="representative-message-bg-layer layer-2">
          <div></div>
        </div>
        <div class="representative-message-bg-layer layer-3">
          <div></div>
        </div>
      </div>
      <div class="representative-message-man-layer">
        <div class="representative-message-text">
          <h4>BlockTechJapanは、</h4>
          <p>日本のビジネスに特化した、</p>
          <p>世界最高峰のテクノロジーサービスを提供します。</p>
          <div>
            <ul>
              <li class="before-triangle"><a href="/about#about-section-3">代表メッセージ</a></li>
              <li class="before-triangle"><a href="/about">BlockTechJapanとは</a></li>
            </ul>
            <ul>
              <li>BlockTechJapan CEO</li>
              <li class="color-blue">サーシャ・コフマン</li>
            </ul>
          </div>
        </div>
        <img src="<?=Media::contentURI( 'home-alex.png' )?>" alt="BlockTechJapan CEO">
      </div>
    </div>
  </div>
</section>
<section class="h-section-2">
  <h3 class="section-title">SERVICE LINES</h3>
  <div class="section-body">
    <div class="h-section-part-1">
      <div class="h-section-part-1-column">
        <img src="<?=Media::contentURI( 'conference.png' )?>" alt="Conference">
        <div class="stik"></div>
        <h4>BlockTechJapan <span>Seminars</span></h4>
        <h5>ビジネスパーソンのためのブロックチェーンセミナー</h5>
        <a href="/services#services-section-1">セミナーサービスについて詳しく</a>
        <p>ブロックチェーンプロジェクト関係者の技術力を向上させるためのオンライン・オフラインによるブロックチェーン学習サービスを提供し、お客様組織内の開発体制を強化します。</p>
        <span class="mobile-show-trigger"><span></span><span></span></span>
      </div>
      <div class="h-section-part-1-column">
        <img src="<?=Media::contentURI( 'library.png' )?>" alt="library">
        <div class="stik"></div>
        <h4>BlockTechJapan <span>Education</span></h4>
        <h5>法人向けブロックチェーン教育サービス</h5>
        <a href="/services#services-section-3">学習サービスについて詳しく</a>
        <p>ブロックチェーンプロジェクト関係者の技術力を向上させるためのオンライン・オフラインによるブロックチェーン学習サービスを提供し、お客様組織内の開発体制を強化します。</p>
        <span class="mobile-show-trigger"><span></span><span></span></span>
      </div>
      <div class="h-section-part-1-column">
        <img src="<?=Media::contentURI( 'engineer-person.png' )?>" alt="Engineer person">
        <div class="stik"></div>
        <h4>BlockTechJapan <span>Development</span></h4>
        <h5>ブロックチェーン開発サービス</h5>
        <a href="/services#service-section-5">開発サービスについて詳しく</a>
        <p>ブロックチェーンプロジェクト関係者の技術力を向上させるためのオンライン・オフラインによるブロックチェーン学習サービスを提供し、お客様組織内の開発体制を強化します。</p>
        <span class="mobile-show-trigger"><span></span><span></span></span>
      </div>
    </div>
    <div class="h-section-part-2">
      <div class="h-section-part-2-body">
        <div class="h-section-part-2-body-text">
          <h4>世界のあり方を根底から変える。<span>そんなブロックチェーンを、あなたのビジネスに。</span></h4>
          <p>ブロックチェーンは、組織や業界全体を変革する可能性を秘めています。私たちは、お客様のブロックチェーンへの取り組みをサポートするだけでなく、既存のビジネスプロセスを見直し、改善するためのサービスを提供しています。
            <a href="/services">さらに詳しく</a></p>
        </div>
        <div class="h-section-part-2-body-img">
          <img src="<?=Media::contentURI( 'office.jpg' )?>" alt="Office">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="h-section-3">
  <h3 class="section-title">USE CASES</h3>
  <div class="section-body">
    <div class="h-section-3-row">
      <div class="img-left">
        <img src="<?=Media::contentURI('montreal.png')?>" alt="Montreal">
        <div class="overlay"></div>
      </div>
      <div class="right-content">
        <div class="content-wrapper">
          <h5>1. Finance</h5>
          <h4><a href="/finance"><span>金融業における</span><span>ブロックチェーン活用事例</span></a></h4>
          <p>今、ブロックチェーンの導入が一番進んでいる金融業。世界最先端技術が既存のバンキングシステムを改革する１０の事例をご紹介します。</p>
        </div>
        <div class="bg-1"></div>
        <div class="bg-2"></div>
      </div>
    </div>
    <div class="h-section-3-row">
      <div class="img-right">
        <img src="<?=Media::contentURI('cafe.png')?>" alt="Cafe">
        <div class="overlay"></div>
      </div>
      <div class="left-content">
        <div class="content-wrapper">
          <h5>2. Logistics</h5>
          <h4><a href="/logistic"><span>物流を変え、コーヒー農家を守る</span><span>スターバックスとブロックチェーン</span></a></h4>
          <p>ブロックチェーンなら、コーヒー農家を貧困から救うことができます。ブロックチェーンを活用して、トレーサビリティ（追跡可能性）を向上させる方法をご紹介します。</p>
        </div>
        <div class="bg-1"></div>
        <div class="bg-2"></div>
      </div>
    </div>
  </div>
</section>

<?php
$news = News::getNews(5);

if( ! empty($news)):
    ?>
  <section class="h-section-4">
    <h3 class="section-title">news</h3>
    <div class="section-body">
        <?php foreach($news as $item): ?>
          <div class="h-news-item">
            <div class="img">
              <img src="<?=$item['img_src'] ?>" alt="<?=$item['title'] ?>">
            </div>
            <div class="date"><?=$item['date']?></div>
            <p class="description">
              <a href="<?=$item['link'] ?>"><?=$item['title']?></a>
            </p>
          </div>
        <?php endforeach; ?>
      <div class="button">
        <span></span>
        <span>以前のニュース</span>
      </div>
    </div>
  </section>

<?php endif; ?>

<?php get_footer() ?>

