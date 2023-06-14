<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Modules\Breadcrumbs\Breadcrumbs;
use Amol\ReactiveCi4\Reactive;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session;

    public $lang;
    public $breadcrumbs;
    public $activity;
    public $view_data;
    public $admin_user_data;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // Load Session and Authentication Data
        $this->session = \Config\Services::session();

        if (isset($this->session->isLoggedIn)) {
            $this->admin_user_data = model('UserModel')->find($this->session->user_id);

            $this->view_data['session_data'] = [
                'user_id' => $this->session->user_id,
                'employee_id' => $this->session->employee_id,
                'name' => $this->admin_user_data->name,
                'email' => $this->admin_user_data->email,
                'status' => $this->admin_user_data->status,
            ];
        }

        // Load Language Default
        $this->lang = include(APPPATH . '/Language/' .  $this->request->getLocale() . '/Default.php');
        
        // Load Breadcrumbs
        $BreadcrumbsInit = new Breadcrumbs();
        $this->breadcrumbs = $BreadcrumbsInit->buildAuto();
        $this->view_data['breadcrumbs'] = $this->breadcrumbs;

        // Load Reactive
        $this->activity = new Reactive();
    }
}
