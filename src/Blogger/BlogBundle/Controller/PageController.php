<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;*/

class PageController extends Controller
{
    public function indexAction()
    {
        /*$em = $this->getDoctrine()
            ->getManager();*/

        /*$blogs = $em->getRepository('BloggerBlogBundle:Blog')
            ->getLatestBlogs();*/

        /*return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            'blogs' => $blogs
        ));*/

        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }
}