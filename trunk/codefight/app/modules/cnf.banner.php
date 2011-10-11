<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Package: Codefight CMS
 * Module: Banner
 * Author: Damodar Bashyal
 * Date: 5/10/2011
 */
$cnf['banner']['global'] = array(
			'status' => 1,
			'sort' => 100,
			'title' => 'Banner',
			'parent' => 'top',
		);
$cnf['banner']['admin'] = array(
			'child' => array(
					'banner/manage' => array(
                        'status' => 1,
						'title' => 'Manage'
						),
					'banner/create' => array(
                        'status' => 1,
						'title' => 'Create New Banner'
						),
				)
		);
$cnf['banner']['frontend'] = array();/*to be included in future releases*/