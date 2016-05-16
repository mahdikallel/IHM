<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'butmarque' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/butmarque/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'butmarque_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/butmarque/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'butmarque_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/butmarque/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'butmarque_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/butmarque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'butmarque_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/butmarque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'butmarque_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/butmarque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'butmarque_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ButmarqueController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/butmarque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/classement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/classement/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/classement/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/classement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/classement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/classement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'classement_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ClassementController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/classement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contrat/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contrat_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\ContratController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contrat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\EquipeController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/joueur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/joueur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/joueur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JoueurController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'journee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/journee/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'journee_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/journee/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'journee_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/journee/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'journee_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/journee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'journee_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/journee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'journee_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/journee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'journee_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\JourneeController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/journee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ligue' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ligue/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ligue_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ligue/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ligue_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ligue/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ligue_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ligue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ligue_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ligue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ligue_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ligue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ligue_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\LigueController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ligue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matche_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matche_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matche/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matche_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/matche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matche_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/matche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matche_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/matche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'matche_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\MatcheController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/matche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saison' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/saison/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saison_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/saison/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saison_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/saison/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saison_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/saison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saison_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/saison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saison_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/saison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'saison_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\ChampionatBundle\\Controller\\SaisonController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/saison',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
