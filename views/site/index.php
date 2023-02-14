<?php

/** @var yii\web\View $this */

use app\assets\IndexAsset;

IndexAsset::register($this);

?>
<div class="container main-page__container">
    <section class="sidebar">
        <ul class="sidebar__list">
            <h2 class="sidebar__title">Категории</h2>
            <li class="sidebar__item active">
                <a href="">Lorem</a>
            </li>
            <li class="sidebar__item">
                <a href="">Lorem</a>
            </li>
            <li class="sidebar__item">
                <a href="">Lorem</a>
            </li>
            <li class="sidebar__item">
                <a href="">Lorem</a>
            </li>
            <li class="sidebar__item">
                <a href="">Lorem</a>
            </li>
            <li class="sidebar__item">
                <a href="">Lorem</a>
            </li>
            <li class="sidebar__item">
                <a href="">Lorem</a>
            </li>
            <li class="sidebar__item">
                <a href="">Lorem</a>
            </li>
        </ul>
        <ul class="sidebar__list">
            <h3>Сортировка</h3>
            <li class="sidebar__item active"><a href="">По лайкам</a></li>
            <li class="sidebar__item"><a href="">Сначала новые</a></li>
            <li class="sidebar__item"><a href="">Сначала старые</a></li>
        </ul>
    </section>
    <section>
        <h2 class="video__title">Видео</h2>
        <div class="video__wrapper">
            <a href="" class="video__item">
                <div class="video__image">
                    <img src="" alt="Превью видео" class="preview">
                </div>
                <p class="video__name">Название видеоролика</p>
                <p class="video__chanel">Канал</p>
                <div class="video__likes-counter">
                    <span>33</span>
                    <svg viewBox="0 0 131 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.2141 130.499L31.2807 55.3521L77.2725 2.33404C78.0964 1.44732 79.3867 0.965547 81.0163 0.723189C82.644 0.481109 84.5212 0.489334 86.4436 0.508853L86.4486 0.00887909L86.4436 0.508854C88.2425 0.527038 89.4437 1.13604 90.2428 2.10805C91.059 3.10087 91.5054 4.53275 91.6512 6.27764C91.9432 9.77142 91.0126 14.2806 89.846 18.2817L89.8432 18.2914L89.8407 18.3012L80.1982 57.159L80.0442 57.7797L80.6837 57.7794L117.237 57.761C117.237 57.761 117.237 57.761 117.237 57.761C122.281 57.761 125.945 59.4168 128.119 62.1683C130.296 64.9229 131.053 68.8684 130.087 73.5965C130.087 73.5973 130.087 73.598 130.087 73.5987L120.535 118.535L120.535 118.536C119.769 122.19 118.833 125.156 117.182 127.212C115.561 129.229 113.209 130.42 109.459 130.42H109.459L31.2141 130.499Z"/>
                        <path d="M0.536243 130.435L0.500247 57.7783L30.2937 57.7129L30.2103 130.495L0.536243 130.435Z"/>
                    </svg>
                </div>
            </a>
            <a href="" class="video__item">
                <div class="video__image">
                    <img src="" alt="Превью видео" class="preview">
                </div>
                <p class="video__name">Название видеоролика</p>
                <p class="video__chanel">Канал</p>
                <div class="video__likes-counter active">
                    <span>33</span>
                    <svg viewBox="0 0 131 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M31.2141 130.499L31.2807 55.3521L77.2725 2.33404C78.0964 1.44732 79.3867 0.965547 81.0163 0.723189C82.644 0.481109 84.5212 0.489334 86.4436 0.508853L86.4486 0.00887909L86.4436 0.508854C88.2425 0.527038 89.4437 1.13604 90.2428 2.10805C91.059 3.10087 91.5054 4.53275 91.6512 6.27764C91.9432 9.77142 91.0126 14.2806 89.846 18.2817L89.8432 18.2914L89.8407 18.3012L80.1982 57.159L80.0442 57.7797L80.6837 57.7794L117.237 57.761C117.237 57.761 117.237 57.761 117.237 57.761C122.281 57.761 125.945 59.4168 128.119 62.1683C130.296 64.9229 131.053 68.8684 130.087 73.5965C130.087 73.5973 130.087 73.598 130.087 73.5987L120.535 118.535L120.535 118.536C119.769 122.19 118.833 125.156 117.182 127.212C115.561 129.229 113.209 130.42 109.459 130.42H109.459L31.2141 130.499Z"/>
                        <path d="M0.536243 130.435L0.500247 57.7783L30.2937 57.7129L30.2103 130.495L0.536243 130.435Z"/>
                    </svg>
                </div>
            </a>
        </div>
    </section>
</div>
