<?php

/*
 *
 *      █████╗ ███████╗████████╗██╗  ██╗███████╗██████╗         ██████╗ ██╗  ██╗██████╗
 *     ██╔══██╗██╔════╝╚══██╔══╝██║  ██║██╔════╝██╔══██╗        ██╔══██╗██║  ██║██╔══██╗
 *     ███████║█████╗     ██║   ███████║█████╗  ██████╔╝ █████╗ ██████╔╝███████║██████╔╝
 *     ██╔══██║██╔══╝     ██║   ██╔══██║██╔══╝  ██╔══██╗ ╚════╝ ██╔═══╝ ██╔══██║██╔═══╝
 *     ██║  ██║███████╗   ██║   ██║  ██║███████╗██║  ██║        ██║     ██║  ██║██║
 *     ╚═╝  ╚═╝╚══════╝   ╚═╝   ╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝        ╚═╝     ╚═╝  ╚═╝╚═╝
 *
 *                      The divine lightweight PHP framework
 *                  < 1 Mo • Zero dependencies • Pure PHP 8.3+
 *
 *  Built from scratch. No bloat. POO Embedded.
 *
 *  @author: dawnl3ss (Alex') ©2025 — All rights reserved
 *  Source available • Commercial license required for redistribution
 *  → github.com/dawnl3ss/Aether-PHP
 *
*/
declare(strict_types=1);

namespace Aether\Modules\I18n;

use Aether\Modules\AetherModule;
use Aether\Modules\I18n\Lang\LangHandler;


final class I18N extends AetherModule {


    public function __construct(){
        parent::__construct("I18n Module", 1.0, "Permits you to translate text in multiple languages");
    }


    /**
     * Translate a given key in the correct language
     *
     * @param string $_identifier
     * @param array|null $_params
     * @param string|null $_language
     *
     * @return string
     */
    public static function __(string $_identifier, ?array $_params = null, string $_language = null) : string {
        if (!is_null($_language))
            LangHandler::_loadLangFile($_language);

        return LangHandler::_get($_identifier, $_params);
    }

    /**
     * Set current language
     *
     * @param string $_language
     *
     * @return bool
     */
    public static function _setLanguage(string $_language) : bool {
        $new = array_map(function ($langPath){
            return substr($langPath, 7);
        }, Aether()->_io()->_folder("./lang/")->_listFiles("*"));

        if (!in_array($_language, $new))
            return false;

        LangHandler::_loadLangFile($_language);
        return true;
    }

    /**
     * @return string
     */
    public static function _getCurrentLanguage() : string {
        return LangHandler::$_current;
    }


    public function _onLoad(){
        self::_setLanguage(LangHandler::$_default);
        include __DIR__ . "/I18nFunctionHelper.php";
    }

    /**
     * @return AetherModule
     */
    public static function _make() : AetherModule {
        return new self();
    }
}