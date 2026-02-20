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
 *  Built from scratch. No bloat. OOP Embedded.
 *
 *  @author: dawnl3ss (Alex') ©2026 — All rights reserved
 *  Source available • Commercial license required for redistribution
 *  → github.com/dawnl3ss/Aether-PHP
 *
*/
declare(strict_types=1);

namespace App\Controller;

use Aether\Modules\I18n\I18N;
use Aether\Router\Controller\Controller;


/**
 * [@base] => /{language}
 */
class AppController extends Controller {


    /**
     * [@method] => GET
     * [@route] => /
     */
    public function home($language){
        if (!I18N::_setLanguage($language))
            $this->_redirect("/en");

        $this->_render("home", [
            "lang" => I18N::_getCurrentLanguage()
        ]);
    }

    /**
     * [@method] => GET
     * [@route] => /modules
     */
    public function modules($language){
        if (!I18N::_setLanguage($language))
            $this->_redirect("/en/modules");

        $this->_render("home", [
            "lang" => I18N::_getCurrentLanguage()
        ]);
    }

}