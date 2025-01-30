<?php
/**
 * Регистрация пакетов ресурсов темы Impact.
 * 
 * Тема Impact.
 * 
 * @copyright Copyright (c) 2015-2024 GearMagic Web-студия
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

use Gm\View\ClientScript;

/**
 * Класс регистрация пакетов ресурсов темы.
 * 
 * @package Theme
 * @subpackage Impact
 * @version 1.0
 */
class Asset extends \Gm\Theme\ThemeAsset
{
    /**
     * Формирует метаданные документа для основной страницы.
     * 
     * @return void
     */
    public function main()
    {
        // регистрация JS и CSS пакетов
        $this->script
            ->appendPackage('vendors', [
                'css' => [
                    'bootstrap.min.css'     => ['/vendors/bootstrap/css/bootstrap.min.css', ClientScript::POS_HEAD],
                    'bootstrap-icons.css'   => ['/vendors/bootstrap-icons/bootstrap-icons.css', ClientScript::POS_HEAD],
                    'aos.css'               => ['/vendors/aos/aos.css', ClientScript::POS_HEAD],
                    'glightbox.min.css'     => ['/vendors/glightbox/css/glightbox.min.css', ClientScript::POS_HEAD],
                    'swiper-bundle.min.css' => ['/vendors/swiper/swiper-bundle.min.css', ClientScript::POS_HEAD],
                    'main.css'              => ['/assets/css/main.css', ClientScript::POS_HEAD]
                ],
                'js'  => [
                    'bootstrap.bundle.min.js' => ['/vendors/bootstrap/js/bootstrap.bundle.min.js', ClientScript::POS_END],
                    'aos.js'                  => ['/vendors/aos/aos.js', ClientScript::POS_END],
                    'glightbox.min.js'        => [ '/vendors/glightbox/js/glightbox.min.js', ClientScript::POS_END],
                    'purecounter_vanilla.js'  => ['/vendors/purecounter/purecounter_vanilla.js', ClientScript::POS_END],
                    'swiper-bundle.min.js'    => ['/vendors/swiper/swiper-bundle.min.js', ClientScript::POS_END],
                    'isotope.pkgd.min.js'     => ['/vendors/isotope-layout/isotope.pkgd.min.js', ClientScript::POS_END],
                    'validate.js'             => ['/vendors/php-email-form/validate.js', ClientScript::POS_END],
                    'main.js'                 => ['/assets/js/main.js', ClientScript::POS_END]
                ]
            ])
            ->registerPackages('vendors', 'gm');
    }
}
