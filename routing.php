<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('show_front_page'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('show_front_page', 'FrontPageCtrl');
Utils::addRoute('services', 'ServicesCtrl');
Utils::addRoute('gallery', 'GalleryCtrl');
Utils::addRoute('pricing', 'PricingCtrl');
Utils::addRoute('contact', 'ContactCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('reservation', 'ReservationCtrl', ["user", "root"]);
Utils::addRoute('my_reservations', 'MyReservationsCtrl', ["user", "root"]);
Utils::addRoute('all_reservations', 'AllReservationsCtrl', ["root"]);
Utils::addRoute('all_reservations_table', 'AllReservationsCtrl', ["root"]);
Utils::addRoute('delete_reservation', 'MyReservationsCtrl', ["user", "root"]);
Utils::addRoute('delete_admin_reservation', 'AllReservationsCtrl', ["user", "root"]);
Utils::addRoute('process', 'ReservationCtrl', ["user", "root"]);
Utils::addRoute('thanks', 'ThanksCtrl');

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');