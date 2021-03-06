<?php

/*
 * This file is part of Handcrafted in the Alps - Rest Routing Bundle Project.
 *
 * (c) 2011-2020 FriendsOfSymfony <http://friendsofsymfony.github.com/>
 * (c) 2020 Sulu GmbH <hello@sulu.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HandcraftedInTheAlps\RestRoutingBundle\Tests\Fixtures\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use HandcraftedInTheAlps\RestRoutingBundle\Controller\Annotations\RouteResource;

/**
 *  @RouteResource("Article", pluralize=false)
 */
class AnnotatedNonPluralizedArticleController extends AbstractFOSRestController
{
    /**
     * [GET] /article.
     */
    public function cgetAction()
    {
    }

    /**
     * [GET] /article/{slug}.
     *
     * @param $slug
     */
    public function getAction($slug)
    {
    }

    /**
     * [GET] /article/{slug}/comment.
     *
     * @param $slug
     */
    public function cgetCommentAction($slug)
    {
    }

    /**
     * [GET] /article/{slug}/comment/{slug}.
     *
     * @param $slug
     * @param $comment
     */
    public function getCommentAction($slug, $comment)
    {
    }
}
