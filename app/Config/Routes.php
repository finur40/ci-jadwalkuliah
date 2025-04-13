<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('courses', 'CourseController::index');
$routes->get('courses/create', 'CourseController::create');
$routes->post('courses/store', 'CourseController::store');

$routes->get('programs', 'ProgramController::index');
$routes->get('programs/create', 'ProgramController::create');
$routes->post('programs/store', 'ProgramController::store');

$routes->get('classrooms', 'ClassroomController::index');
$routes->get('classrooms/create', 'ClassroomController::create');
$routes->post('classrooms/store', 'ClassroomController::store');

$routes->get('schedules', 'ScheduleController::index');
$routes->get('schedules/create', 'ScheduleController::create');
$routes->post('schedules/store', 'ScheduleController::store');

