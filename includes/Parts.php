<?php

class Parts
{
  private static function getNavMenu()
  {
    ?>
    <ul class="menu">
      <li><a href="/">HOME</a></li>
      <li><a href="/about">企業概要</a></li>
      <li><a href="/services">サービス</a></li>
      <li><a href="/cases">事例紹介</a></li>
    </ul>
    <?php
  }

  public static function getHeader( $inverse = false )
  {
    $nav_class = $inverse ? 'nav-inverse' : 'nav';
    $nav_mobile = $inverse ? 'mobile-header-inverse' : 'mobile-header';
    $nav_logo = $inverse ? 'logo-inverse.svg' : 'logo.svg';
    ?>
    <nav class="<?=$nav_class?>">
      <a class="logotype" href="/">
        <img src="<?=Media::iconURI( $nav_logo )?>" alt="logo">
      </a>
	    <?php self::getNavMenu(); ?>
      <div class="contact-btn-container">
        <a href="/about#form">お問い合わせ</a>
      </div>
      <div class="close"></div>
    </nav>

    <div class="<?=$nav_mobile?>">
      <h6>BlockTechJapan</h6>
      <div class="button-nav">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <?php
  }
}