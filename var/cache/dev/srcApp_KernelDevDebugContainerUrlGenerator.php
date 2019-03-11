<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'admin_users' => [[], ['_controller' => 'App\\Controller\\AdminController::adminUsers'], [], [['text', '/admin']], [], []],
        'admin_roles' => [['id'], ['_controller' => 'App\\Controller\\AdminController::adminRoles'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'crypto_home' => [[], ['_controller' => 'App\\Controller\\CryptoController::index'], [], [['text', '/']], [], []],
        'crypto_one' => [['id'], ['_controller' => 'App\\Controller\\CryptoController::showOne'], ['id' => '\\d+'], [['variable', '', '\\d+', 'id', true], ['text', '/crypto']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'login_check' => [[], ['_controller' => 'App\\Controller\\SecurityController::login_check'], [], [['text', '/login_check']], [], []],
        'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/registration']], [], []],
        'admin_transactions_show' => [[], ['_controller' => 'App\\Controller\\TransactionController::adminTransactionsShow'], [], [['text', '/adminTransactionsShow']], [], []],
        'user_transactions_show' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::transactionsShow'], ['id' => '\\d+'], [['variable', '', '\\d+', 'id', true], ['text', '/transactionsShow']], [], []],
        'crypto_buy' => [[], ['_controller' => 'App\\Controller\\TransactionController::cryptoBuy'], [], [['text', '/cryptoBuy']], [], []],
        'crypto_sell' => [[], ['_controller' => 'App\\Controller\\TransactionController::cryptoSell'], [], [['text', '/cryptoSell']], [], []],
        'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::userShow'], ['id' => '\\d+'], [['variable', '', '\\d+', 'id', true], ['text', '/userShow']], [], []],
        'increase_solde' => [['id'], ['_controller' => 'App\\Controller\\UserController::increaseSolde'], ['id' => '\\d+'], [['variable', '', '\\d+', 'id', true], ['text', '/increaseSolde']], [], []],
        'user_create' => [[], ['_controller' => 'App\\Controller\\UserController::userCreate'], [], [['text', '/userCreate']], [], []],
        'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::userEdit'], ['id' => '\\d+'], [['variable', '', '\\d+', 'id', true], ['text', '/userEdit']], [], []],
        'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::userDelete'], ['id' => '\\d+'], [['variable', '', '\\d+', 'id', true], ['text', '/userDelete']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
