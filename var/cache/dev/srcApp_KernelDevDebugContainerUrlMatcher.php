<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::adminUsers'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'crypto_home', '_controller' => 'App\\Controller\\CryptoController::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/login_check' => [[['_route' => 'login_check', '_controller' => 'App\\Controller\\SecurityController::login_check'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
            '/adminTransactionsShow' => [[['_route' => 'admin_transactions_show', '_controller' => 'App\\Controller\\TransactionController::adminTransactionsShow'], null, null, null, false, false, null]],
            '/cryptoBuy' => [[['_route' => 'crypto_buy', '_controller' => 'App\\Controller\\TransactionController::cryptoBuy'], null, null, null, false, false, null]],
            '/cryptoSell' => [[['_route' => 'crypto_sell', '_controller' => 'App\\Controller\\TransactionController::cryptoSell'], null, null, null, false, false, null]],
            '/userCreate' => [[['_route' => 'user_create', '_controller' => 'App\\Controller\\UserController::userCreate'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/admin/(\\d+)(*:19)'
                    .'|/crypto(\\d+)(*:38)'
                    .'|/transactionsShow(\\d+)(*:67)'
                    .'|/user(?'
                        .'|Show(\\d+)(*:91)'
                        .'|Edit(\\d+)(*:107)'
                        .'|Delete(\\d+)(*:126)'
                    .')'
                    .'|/increaseSolde(\\d+)(*:154)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:193)'
                        .'|wdt/([^/]++)(*:213)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:259)'
                                .'|router(*:273)'
                                .'|exception(?'
                                    .'|(*:293)'
                                    .'|\\.css(*:306)'
                                .')'
                            .')'
                            .'|(*:316)'
                        .')'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            19 => [[['_route' => 'admin_roles', '_controller' => 'App\\Controller\\AdminController::adminRoles'], ['id'], null, null, false, true, null]],
            38 => [[['_route' => 'crypto_one', '_controller' => 'App\\Controller\\CryptoController::showOne'], ['id'], null, null, false, true, null]],
            67 => [[['_route' => 'user_transactions_show', '_controller' => 'App\\Controller\\TransactionController::transactionsShow'], ['id'], null, null, false, true, null]],
            91 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::userShow'], ['id'], null, null, false, true, null]],
            107 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::userEdit'], ['id'], null, null, false, true, null]],
            126 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::userDelete'], ['id'], null, null, false, true, null]],
            154 => [[['_route' => 'increase_solde', '_controller' => 'App\\Controller\\UserController::increaseSolde'], ['id'], null, null, false, true, null]],
            193 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            213 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            259 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            273 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            293 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            306 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            316 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
