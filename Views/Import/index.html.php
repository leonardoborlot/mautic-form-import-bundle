<?php

/*
 * @copyright   2020 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('mauticContent', $mauticContent);
$view['slots']->set('headerTitle', $view['translator']->trans('mautic.lead.import.list'));
$view['slots']->set(
    'actions',
    $view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => $permissions[$permissionBase.':create'],
            ],
            'routeBase' => 'import',
            'langVar'   => $translationBase,
            'query'     => [
                    'object' => $view['request']->getParameter('object'),
            ],
        ]
    )
);

?>

<div class="panel panel-default bdr-t-wdh-0 mb-0">
    <?php // todo
    // echo $view->render(
    //     'MauticCoreBundle:Helper:list_toolbar.html.php',
    //     [
    //         'searchValue'   => $searchValue,
    //         'searchHelp'    => 'mautic.lead.lead.help.searchcommands',
    //         'action'        => $currentRoute,
    //     ]
    // );
    ?>
    <div class="page-list">
        <?php $view['slots']->output('_content'); ?>
    </div>
</div>
