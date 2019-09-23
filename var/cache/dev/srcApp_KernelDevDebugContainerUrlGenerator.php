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
        'admin_main_page' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::index'], [], [['text', '/admin/']], [], []],
        'delete_account' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::deleteAccount'], [], [['text', '/admin/delete-account']], [], []],
        'cancel_plan' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::cancelPlan'], [], [['text', '/admin/cancel-plan']], [], []],
        'videos' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::videos'], [], [['text', '/admin/videos']], [], []],
        'categories' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoriesController::categories'], [], [['text', '/admin/su/categories']], [], []],
        'edit_category' => [['id'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoriesController::editCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/su/edit-category']], [], []],
        'delete_category' => [['id'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\CategoriesController::deleteCategory'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/su/delete-category']], [], []],
        'upload_video_locally' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::uploadVideoLocally'], [], [['text', '/admin/su/upload-video-locally']], [], []],
        'delete_video' => [['video', 'path'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteVideo'], ['path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'video', true], ['text', '/admin/su/delete-video']], [], []],
        'update_video_category' => [['video'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::updateVideoCategory'], [], [['variable', '/', '[^/]++', 'video', true], ['text', '/admin/su/update-video-category']], [], []],
        'users' => [[], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::users'], [], [['text', '/admin/su/users']], [], []],
        'delete_user' => [['user'], ['_controller' => 'App\\Controller\\Admin\\Superadmin\\SuperAdminController::deleteUser'], [], [['variable', '/', '[^/]++', 'user', true], ['text', '/admin/su/delete-user']], [], []],
        'main_page' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/']], [], []],
        'video_list' => [['categoryname', 'id', 'page'], ['page' => '1', '_controller' => 'App\\Controller\\FrontController::videoList'], [], [['variable', '/', '[^/]++', 'page', true], ['variable', ',', '[^/]++', 'id', true], ['variable', '/', '[^/,]++', 'categoryname', true], ['text', '/video-list/category']], [], []],
        'video_details' => [['video'], ['_controller' => 'App\\Controller\\FrontController::videoDetails'], [], [['variable', '/', '[^/]++', 'video', true], ['text', '/video-details']], [], []],
        'new_comment' => [['video'], ['_controller' => 'App\\Controller\\FrontController::newComment'], [], [['variable', '/', '[^/]++', 'video', true], ['text', '/new-comment']], [], []],
        'search_results' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\FrontController::searchResults'], [], [['variable', '/', '[^/]++', 'page', true], ['text', '/search-results']], [], []],
        'like_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/like'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
        'dislike_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/dislike'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
        'undo_like_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/unlike'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
        'undo_dislike_video' => [['video'], ['_controller' => 'App\\Controller\\FrontController::toggleLikesAjax'], [], [['text', '/undodislike'], ['variable', '/', '[^/]++', 'video', true], ['text', '/video-list']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'register' => [['plan'], ['plan' => null, '_controller' => 'App\\Controller\\SecurityController::register'], [], [['variable', '/', '[^/]++', 'plan', true], ['text', '/register']], [], []],
        'pricing' => [[], ['_controller' => 'App\\Controller\\SubscriptionController::pricing'], [], [['text', '/pricing']], [], []],
        'payment' => [['paypal'], ['paypal' => false, '_controller' => 'App\\Controller\\SubscriptionController::payment'], [], [['variable', '/', '[^/]++', 'paypal', true], ['text', '/payment']], [], []],
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
