<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

// Auth routes
$routes->post('login', 'Auth::login');
$routes->post('register', 'Auth::register');
$routes->get('logout', 'Auth::logout');

// Service routes
$routes->get('services', 'ServicesController::index');
$routes->get('services/(:num)', 'ServicesController::details/$1');

// About route
$routes->get('about', 'AboutController::index');

// Pricing routes
$routes->get('pricing', 'PricingController::index');

// Subscription routes
$routes->get('subscribe/(:num)', 'SubscribeController::index/$1');
$routes->post('subscribe/process/(:num)', 'SubscribeController::process/$1');
$routes->get('subscribe/cancel', 'SubscribeController::cancel');

// Testimonials route
$routes->get('testimonials', 'TestimonialsController::index');