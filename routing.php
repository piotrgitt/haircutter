<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('show_front_page'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('show_front_page', 'FrontPageCtrl');
Utils::addRoute('services', 'ServicesCtrl');
Utils::addRoute('gallery', 'GalleryCtrl');
Utils::addRoute('pricing', 'PricingCtrl');
Utils::addRoute('contact', 'ContactCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('reservation', 'ReservationCtrl');
Utils::addRoute('my_reservations', 'MyReservationsCtrl');
Utils::addRoute('process', 'ReservationCtrl');
Utils::addRoute('thanks', 'ThanksCtrl');


//Utils::addRoute('action_name', 'controller_class_name');