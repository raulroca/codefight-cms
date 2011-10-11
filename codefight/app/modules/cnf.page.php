<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Package: Codefight CMS
 * Module: Page
 * Author: Damodar Bashyal
 * Date: 5/10/2011
 */
$cnf['page']['global'] = array(
			'status' => 1,
			'sort' => 50,
            'title' => 'Page',
            'void' => 0, /*1 = onclick="return false;"*/
			'parent' => 'top',
		);
$cnf['page']['admin'] = array(
			'child' => array(
					'page/page' => array(
                        'status' => 1,
						'title' => 'Static Page'
						),
					'page/blog' => array(
                        'status' => 1,
						'title' => 'Blog'
						),
				)
		);
$cnf['page']['frontend'] = array();/*to be included in future releases*/