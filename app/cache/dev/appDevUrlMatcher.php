<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // imd_user_profile_show_id
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_user_profile_show_id')), array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\ProfileController::showByIdAction',));
        }

        // imd_registration_imd_role
        if ($pathinfo === '/imd/register') {
            return array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\RegistrationController::registerImdAction',  '_route' => 'imd_registration_imd_role',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Imd\\MyFosUserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/login/service') && preg_match('#^/login/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/login/registration') && preg_match('#^/login/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

            // hwi_oauth_service_redirect
            if (preg_match('#^/login/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            if (0 === strpos($pathinfo, '/login/check-')) {
                // facebook_login
                if ($pathinfo === '/login/check-facebook') {
                    return array('_route' => 'facebook_login');
                }

                // google_login
                if ($pathinfo === '/login/check-google') {
                    return array('_route' => 'google_login');
                }

                // twitter_login
                if ($pathinfo === '/login/check-twitter') {
                    return array('_route' => 'twitter_login');
                }

                // github_login
                if ($pathinfo === '/login/check-github') {
                    return array('_route' => 'github_login');
                }

            }

        }

        // imd_app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'imd_app_homepage');
            }

            return array (  '_controller' => 'Imd\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'imd_app_homepage',);
        }

        // imd_guest_login
        if ($pathinfo === '/guest/login') {
            return array (  '_controller' => 'Imd\\AppBundle\\Controller\\GuestController::loginAction',  '_route' => 'imd_guest_login',);
        }

        if (0 === strpos($pathinfo, '/book')) {
            // imd_app_guide_booking_date
            if ($pathinfo === '/book') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\GuideController::chooseDateAction',  '_route' => 'imd_app_guide_booking_date',);
            }

            // imd_app_guide_list
            if (preg_match('#^/book/(?P<eventID>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_app_guide_list')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\GuideController::listGuidesAction',));
            }

            // imd_app_guide_booking_confirm
            if (preg_match('#^/book/(?P<eventID>[^/]++)/(?P<guideID>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_imd_app_guide_booking_confirm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_app_guide_booking_confirm')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\GuideController::confirmAction',));
            }
            not_imd_app_guide_booking_confirm:

            // imd_app_guide_booking_handle_confirm
            if (preg_match('#^/book/(?P<eventID>[^/]++)/(?P<guideID>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_imd_app_guide_booking_handle_confirm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_app_guide_booking_handle_confirm')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\GuideController::handleConfirmAction',));
            }
            not_imd_app_guide_booking_handle_confirm:

            if (0 === strpos($pathinfo, '/booking')) {
                // imd_app_guide_booking_rate
                if (preg_match('#^/booking/(?P<id>[^/]++)/rate$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imd_app_guide_booking_rate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_app_guide_booking_rate')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\BookingController::rateBookingAction',));
                }
                not_imd_app_guide_booking_rate:

                // imd_app_guide_booking_handle_rate
                if (preg_match('#^/booking/(?P<id>[^/]++)/rate$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_imd_app_guide_booking_handle_rate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_app_guide_booking_handle_rate')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\BookingController::handleRateBookingAction',));
                }
                not_imd_app_guide_booking_handle_rate:

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/booking')) {
                // imd_app_guide_booking_admin_feedback_answer
                if (preg_match('#^/admin/booking/(?P<id>[^/]++)/rate$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_imd_app_guide_booking_admin_feedback_answer;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_app_guide_booking_admin_feedback_answer')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\BookingController::handleFeedbackAnswerAction',));
                }
                not_imd_app_guide_booking_admin_feedback_answer:

                // imd_app_guide_booking_feedback_mail
                if ($pathinfo === '/admin/booking/mail') {
                    return array (  '_controller' => 'Imd\\AppBundle\\Controller\\BookingController::askFeedbackMailAction',  '_route' => 'imd_app_guide_booking_feedback_mail',);
                }

            }

            // imd_app_adminhomepage
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'imd_app_adminhomepage',);
            }

            // imd_app_admin_userlist
            if ($pathinfo === '/admin/users') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\UsersController::listUsersAction',  '_route' => 'imd_app_admin_userlist',);
            }

            // imd_app_admin_finduser
            if ($pathinfo === '/admin/find-user') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\UsersController::findUserAction',  '_route' => 'imd_app_admin_finduser',);
            }

            // imd_app_admin_deleteuser
            if ($pathinfo === '/admin/delete-user') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\UsersController::deleteUserAction',  '_route' => 'imd_app_admin_deleteuser',);
            }

            // imd_app_admin_make_imd
            if ($pathinfo === '/admin/make-imd') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\UsersController::makeImdAction',  '_route' => 'imd_app_admin_make_imd',);
            }

            // imd_app_admin_list
            if ($pathinfo === '/admin/admins') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\AdminController::adminListAction',  '_route' => 'imd_app_admin_list',);
            }

            if (0 === strpos($pathinfo, '/admin/ma')) {
                // imd_app_admin_make_admin
                if ($pathinfo === '/admin/make-admin') {
                    return array (  '_controller' => 'Imd\\AppBundle\\Controller\\AdminController::makeAdminAction',  '_route' => 'imd_app_admin_make_admin',);
                }

                // imd_app_manage
                if ($pathinfo === '/admin/manage') {
                    return array (  '_controller' => 'Imd\\AppBundle\\Controller\\AdminController::adminaddAction',  '_route' => 'imd_app_manage',);
                }

            }

            // imd_app_adminlogin
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\AdminController::adminloginAction',  '_route' => 'imd_app_adminlogin',);
            }

            // imd_app_adminlistbookings
            if ($pathinfo === '/admin/bookings') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\AdminController::adminlistbookingsAction',  '_route' => 'imd_app_adminlistbookings',);
            }

        }

        if (0 === strpos($pathinfo, '/event')) {
            // imd_app_admin_create_event
            if ($pathinfo === '/event/create') {
                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\EventController::createEventAction',  '_route' => 'imd_app_admin_create_event',);
            }

            // imd_event_by_id
            if (preg_match('#^/event/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_event_by_id')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\EventController::getEventByIdAction',));
            }

        }

        if (0 === strpos($pathinfo, '/message')) {
            if (0 === strpos($pathinfo, '/messages')) {
                // imd_app_messages_messagelist
                if ($pathinfo === '/messages/list') {
                    return array (  '_controller' => 'Imd\\AppBundle\\Controller\\MessageController::listMessagesAction',  '_route' => 'imd_app_messages_messagelist',);
                }

                // imd_app_messages_searchpartner
                if ($pathinfo === '/messages/search-partner') {
                    return array (  '_controller' => 'Imd\\AppBundle\\Controller\\MessageController::searchPartnerAction',  '_route' => 'imd_app_messages_searchpartner',);
                }

                // imd_app_messages_conversation
                if (0 === strpos($pathinfo, '/messages/conversation') && preg_match('#^/messages/conversation/(?P<partnerId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_imd_app_messages_conversation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imd_app_messages_conversation')), array (  '_controller' => 'Imd\\AppBundle\\Controller\\MessageController::showConversationAction',));
                }
                not_imd_app_messages_conversation:

            }

            // imd_app_message_add_message
            if ($pathinfo === '/message/addmessage') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_imd_app_message_add_message;
                }

                return array (  '_controller' => 'Imd\\AppBundle\\Controller\\MessageController::addMessageAction',  '_route' => 'imd_app_message_add_message',);
            }
            not_imd_app_message_add_message:

        }

        // imd_app_booking_list
        if ($pathinfo === '/booking/list') {
            return array (  '_controller' => 'Imd\\AppBundle\\Controller\\BookingController::listBookingAction',  '_route' => 'imd_app_booking_list',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
