<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://ronmarasigan.github.io)
 * @since Version 1
 * @link https://lavalust.pinoywap.org
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
|
|
*/
$router->get('/', 'homeview::getStart');
$router->match('/main', 'homeview::main', 'GET|POST');
$router->get('/home', 'homeview::home');


$router->get('/home', 'homeview::home');
$router->get('/about', 'homeview::about');
$router->get('/service', 'homeview::service');
$router->get('/event', 'homeview::event');
$router->get('/menu', 'homeview::menu');
$router->get('/book', 'homeview::book');
$router->get('/blog', 'homeview::blog');
$router->get('/team', 'homeview::team');
$router->get('/testimonial', 'homeview::testimonial');
$router->get('/contact', 'homeview::contact');
$router->get('/login', 'homeview::login');
$router->get('/logout', 'homeview::logout');
$router->get('/register', 'homeview::register');


$router->match('/mainview', 'Welcome::mainview', 'GET|POST');
$router->post('/save', 'Welcome::save');
$router->post('/save1', 'Welcome::save1');
$router->match('/editview/(:any)', 'Welcome::editview', 'GET|POST');
$router->get('/delete/(:any)', 'Welcome::delete');
$router->get('/deleteUser/(:any)', 'homeview::deleteUser');
$router->get('/mail', 'Welcome::mail');

$router->get('/home', 'homeview::home');
$router->get('/contacts', 'homeview::contacts');
$router->get('/packages', 'homeview::packages');
$router->get('/crew', 'homeview::crew');
$router->get('/login', 'homeview::login');
$router->get('/userAdmin', 'homeview::userAdmin');


//para sa login at register
$router->match('/signup', 'homeview::signup', 'GET|POST');
$router->match('/signup1', 'homeview::signup1', 'GET|POST');
$router->match('/signin', 'homeview::signin', 'GET|POST');


