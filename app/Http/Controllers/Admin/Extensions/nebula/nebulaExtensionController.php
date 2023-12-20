<?php

namespace Pterodactyl\Http\Controllers\Admin\Extensions\nebula;

use Illuminate\View\View;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;
use Pterodactyl\Http\Requests\Admin\AdminFormRequest;
use Illuminate\Http\RedirectResponse;

use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Admin\BlueprintAdminLibrary as BlueprintExtensionLibrary;

class nebulaExtensionController extends Controller
{
  public function __construct(
    private ViewFactory $view,
    private BlueprintExtensionLibrary $blueprint,
    private ConfigRepository $config,
    private SettingsRepositoryInterface $settings,
  ) {}
  
  public function index(): View
  {

    // GET DATABASE VALUES
    $sidebar_home = $this->blueprint->dbGet('nebula', 'sidebar_home');
    $sidebar_admin = $this->blueprint->dbGet('nebula', 'sidebar_admin');
    $sidebar_account = $this->blueprint->dbGet('nebula', 'sidebar_account');
    $sidebar_logout = $this->blueprint->dbGet('nebula', 'sidebar_logout');
    $sidebar_server_terminal = $this->blueprint->dbGet('nebula', 'sidebar_server_terminal');
    $sidebar_server_files = $this->blueprint->dbGet('nebula', 'sidebar_server_files');
    $sidebar_server_databases = $this->blueprint->dbGet('nebula', 'sidebar_server_databases');
    $sidebar_server_schedules = $this->blueprint->dbGet('nebula', 'sidebar_server_schedules');
    $sidebar_server_users = $this->blueprint->dbGet('nebula', 'sidebar_server_users');
    $sidebar_server_backups = $this->blueprint->dbGet('nebula', 'sidebar_server_backups');
    $sidebar_server_network = $this->blueprint->dbGet('nebula', 'sidebar_server_network');
    $sidebar_server_startup = $this->blueprint->dbGet('nebula', 'sidebar_server_startup');
    $sidebar_server_settings = $this->blueprint->dbGet('nebula', 'sidebar_server_settings');
    $sidebar_server_activity = $this->blueprint->dbGet('nebula', 'sidebar_server_activity');
    $sidebar_account_account = $this->blueprint->dbGet('nebula', 'sidebar_account_account');
    $sidebar_account_api = $this->blueprint->dbGet('nebula', 'sidebar_account_api');
    $sidebar_account_ssh = $this->blueprint->dbGet('nebula', 'sidebar_account_ssh');
    $sidebar_account_activity = $this->blueprint->dbGet('nebula', 'sidebar_account_activity');
    $icon_scale = $this->blueprint->dbGet('nebula', 'icon_scale');
    $watermark = $this->blueprint->dbGet('nebula', 'watermark');
    $initialized = $this->blueprint->dbGet('nebula', 'initialized');
    $background_image = $this->blueprint->dbGet('nebula', 'background_image');
    $sidebar_background = $this->blueprint->dbGet('nebula', 'sidebar_background');
    $background_appearance = $this->blueprint->dbGet('nebula', 'background_appearance');
    $auth_background_image = $this->blueprint->dbGet('nebula', 'auth_background_image');
    $auth_background_appearance = $this->blueprint->dbGet('nebula', 'auth_background_appearance');
    $palette_dashboard_1 = $this->blueprint->dbGet('nebula', 'palette_dashboard_1');
    $palette_dashboard_2 = $this->blueprint->dbGet('nebula', 'palette_dashboard_2');
    $palette_dashboard_3 = $this->blueprint->dbGet('nebula', 'palette_dashboard_3');
    $palette_dashboard_4 = $this->blueprint->dbGet('nebula', 'palette_dashboard_4');
    $palette_dashboard_5 = $this->blueprint->dbGet('nebula', 'palette_dashboard_5');
    $palette_dashboard_6 = $this->blueprint->dbGet('nebula', 'palette_dashboard_6');
    $palette_dashboard_7 = $this->blueprint->dbGet('nebula', 'palette_dashboard_7');
    $palette_dashboard_8 = $this->blueprint->dbGet('nebula', 'palette_dashboard_8');
    $palette_dashboard_9 = $this->blueprint->dbGet('nebula', 'palette_dashboard_9');
    $palette_sidebar_1 = $this->blueprint->dbGet('nebula', 'palette_sidebar_1');
    $palette_sidebar_2 = $this->blueprint->dbGet('nebula', 'palette_sidebar_2');
    $palette_sidebar_3 = $this->blueprint->dbGet('nebula', 'palette_sidebar_3');
    $palette_sidebar_4 = $this->blueprint->dbGet('nebula', 'palette_sidebar_4');
    $palette_sidebar_5 = $this->blueprint->dbGet('nebula', 'palette_sidebar_5');
    $palette_sidebar_6 = $this->blueprint->dbGet('nebula', 'palette_sidebar_6');
    $palette_sidebar_7 = $this->blueprint->dbGet('nebula', 'palette_sidebar_7');
    $palette_sidebar_8 = $this->blueprint->dbGet('nebula', 'palette_sidebar_8');
    $keyboard_shortcuts = $this->blueprint->dbGet('nebula', 'keyboard_shortcuts');
    $keybind_icons = $this->blueprint->dbGet('nebula', 'keybind_icons');
    $sidebar_hover_tooltip = $this->blueprint->dbGet('nebula', 'sidebar_hover_tooltip');
    $server_overview_graphs = $this->blueprint->dbGet('nebula', 'server_overview_graphs');
    $server_colored_power = $this->blueprint->dbGet('nebula', 'server_colored_power');

    // SET DEFAULT DATABASE VALUES
    $defaultSidebar_home = "";
    $defaultSidebar_admin = "";
    $defaultSidebar_account = "";
    $defaultSidebar_logout = "";
    $defaultSidebar_server_terminal = "";
    $defaultSidebar_server_files = "";
    $defaultSidebar_server_databases = "";
    $defaultSidebar_server_schedules = "";
    $defaultSidebar_server_users = "";
    $defaultSidebar_server_backups = "";
    $defaultSidebar_server_network = "";
    $defaultSidebar_server_startup = "";
    $defaultSidebar_server_settings = "";
    $defaultSidebar_server_activity = "";
    $defaultSidebar_account_account = "";
    $defaultSidebar_account_api = "";
    $defaultSidebar_account_ssh = "";
    $defaultSidebar_account_activity = "";
    $defaultIcon_scale = "0.90";
    $defaultWatermark = "1";
    $defaultInitialized = "yes";
    $defaultBackground_image = "";
    $defaultSidebar_background = "default";
    $defaultBackground_appearance = "0";
    $defaultAuth_background_image = "";
    $defaultAuth_background_appearance = "0";
    $defaultPalette_dashboard_1 = "#9aa5b1";
    $defaultPalette_dashboard_2 = "#b0bac4";
    $defaultPalette_dashboard_3 = "#1b1b1b";
    $defaultPalette_dashboard_4 = "#262626";
    $defaultPalette_dashboard_5 = "#3a3a3a";
    $defaultPalette_dashboard_6 = "#474747";
    $defaultPalette_dashboard_7 = "#141414";
    $defaultPalette_dashboard_8 = "#474849";
    $defaultPalette_dashboard_9 = "#525354";
    $defaultPalette_sidebar_1 = "#9aa5b1";
    $defaultPalette_sidebar_2 = "#b0bac4";
    $defaultPalette_sidebar_3 = "#1b1b1b";
    $defaultPalette_sidebar_4 = "#262626";
    $defaultPalette_sidebar_5 = "#3a3a3a";
    $defaultPalette_sidebar_6 = "#474747";
    $defaultPalette_sidebar_7 = "#0C090A";
    $defaultPalette_sidebar_8 = "#333333";
    $defaultKeyboard_shortcuts = "1";
    $defaultKeybind_icons = "1";
    $defaultSidebar_hover_tooltip = "1";
    $defaultServer_overview_graphs = "1";
    $defaultServer_colored_power = "0";
    
    // APPLY DEFAULT DATABASE VALUES
    if($sidebar_home == "") {$this->blueprint->dbSet('nebula', 'sidebar_home', "$defaultSidebar_home");$sidebar_home = $this->blueprint->dbGet('nebula', 'sidebar_home');}
    if($sidebar_admin == "") {$this->blueprint->dbSet('nebula', 'sidebar_admin', "$defaultSidebar_admin");$sidebar_admin = $this->blueprint->dbGet('nebula', 'sidebar_admin');}
    if($sidebar_account == "") {$this->blueprint->dbSet('nebula', 'sidebar_account', "$defaultSidebar_account");$sidebar_account = $this->blueprint->dbGet('nebula', 'sidebar_account');}
    if($sidebar_logout == "") {$this->blueprint->dbSet('nebula', 'sidebar_logout', "$defaultSidebar_logout");$sidebar_logout = $this->blueprint->dbGet('nebula', 'sidebar_logout');}
    if($sidebar_server_terminal == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_terminal', "$defaultSidebar_server_terminal");$sidebar_server_terminal = $this->blueprint->dbGet('nebula', 'sidebar_server_terminal');}
    if($sidebar_server_files == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_files', "$defaultSidebar_server_files");$sidebar_server_files = $this->blueprint->dbGet('nebula', 'sidebar_server_files');}
    if($sidebar_server_databases == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_databases', "$defaultSidebar_server_databases");$sidebar_server_databases = $this->blueprint->dbGet('nebula', 'sidebar_server_databases');}
    if($sidebar_server_schedules == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_schedules', "$defaultSidebar_server_schedules");$sidebar_server_schedules = $this->blueprint->dbGet('nebula', 'sidebar_server_schedules');}
    if($sidebar_server_users == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_users', "$defaultSidebar_server_users");$sidebar_server_users = $this->blueprint->dbGet('nebula', 'sidebar_server_users');}
    if($sidebar_server_backups == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_backups', "$defaultSidebar_server_backups");$sidebar_server_backups = $this->blueprint->dbGet('nebula', 'sidebar_server_backups');}
    if($sidebar_server_network == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_network', "$defaultSidebar_server_network");$sidebar_server_network = $this->blueprint->dbGet('nebula', 'sidebar_server_network');}
    if($sidebar_server_startup == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_startup', "$defaultSidebar_server_startup");$sidebar_server_startup = $this->blueprint->dbGet('nebula', 'sidebar_server_startup');}
    if($sidebar_server_settings == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_settings', "$defaultSidebar_server_settings");$sidebar_server_settings = $this->blueprint->dbGet('nebula', 'sidebar_server_settings');}
    if($sidebar_server_activity == "") {$this->blueprint->dbSet('nebula', 'sidebar_server_activity', "$defaultSidebar_server_activity");$sidebar_server_activity = $this->blueprint->dbGet('nebula', 'sidebar_server_activity');}
    if($sidebar_account_account == "") {$this->blueprint->dbSet('nebula', 'sidebar_account_account', "$defaultSidebar_account_account");$sidebar_account_account = $this->blueprint->dbGet('nebula', 'sidebar_account_account');}
    if($sidebar_account_api == "") {$this->blueprint->dbSet('nebula', 'sidebar_account_api', "$defaultSidebar_account_api");$sidebar_account_api = $this->blueprint->dbGet('nebula', 'sidebar_account_api');}
    if($sidebar_account_ssh == "") {$this->blueprint->dbSet('nebula', 'sidebar_account_ssh', "$defaultSidebar_account_ssh");$sidebar_account_ssh = $this->blueprint->dbGet('nebula', 'sidebar_account_ssh');}
    if($sidebar_account_activity == "") {$this->blueprint->dbSet('nebula', 'sidebar_account_activity', "$defaultSidebar_account_activity");$sidebar_account_activity = $this->blueprint->dbGet('nebula', 'sidebar_account_activity');}
    if($icon_scale == "") {$this->blueprint->dbSet('nebula', 'icon_scale', $defaultIcon_scale);$icon_scale = $this->blueprint->dbGet('nebula', 'icon_scale');}
    if($watermark == "") {$this->blueprint->dbSet('nebula', 'watermark', $defaultWatermark);$watermark = $this->blueprint->dbGet('nebula', 'watermark');}
    if($initialized == "") {$this->blueprint->dbSet('nebula', 'initialized', $defaultInitialized);$initialized = $this->blueprint->dbGet('nebula', 'initialized');}
    if($background_image == "") {$this->blueprint->dbSet('nebula', 'background_image', $defaultBackground_image);$background_image = $this->blueprint->dbGet('nebula', 'background_image');}
    if($sidebar_background == "") {$this->blueprint->dbSet('nebula', 'sidebar_background', $defaultSidebar_background);$sidebar_background = $this->blueprint->dbGet('nebula', 'sidebar_background');}
    if($background_appearance == "") {$this->blueprint->dbSet('nebula', 'background_appearance', $defaultBackground_appearance);$background_appearance = $this->blueprint->dbGet('nebula', 'background_appearance');}
    if($auth_background_image == "") {$this->blueprint->dbSet('nebula', 'auth_background_image', $defaultAuth_background_image);$auth_background_image = $this->blueprint->dbGet('nebula', 'auth_background_image');}
    if($auth_background_appearance == "") {$this->blueprint->dbSet('nebula', 'auth_background_appearance', $defaultAuth_background_appearance);$auth_background_appearance = $this->blueprint->dbGet('nebula', 'auth_background_appearance');}
    if($palette_dashboard_1 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_1', $defaultPalette_dashboard_1);$palette_dashboard_1 = $this->blueprint->dbGet('nebula', 'palette_dashboard_1');}
    if($palette_dashboard_2 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_2', $defaultPalette_dashboard_2);$palette_dashboard_2 = $this->blueprint->dbGet('nebula', 'palette_dashboard_2');}
    if($palette_dashboard_3 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_3', $defaultPalette_dashboard_3);$palette_dashboard_3 = $this->blueprint->dbGet('nebula', 'palette_dashboard_3');}
    if($palette_dashboard_4 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_4', $defaultPalette_dashboard_4);$palette_dashboard_4 = $this->blueprint->dbGet('nebula', 'palette_dashboard_4');}
    if($palette_dashboard_5 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_5', $defaultPalette_dashboard_5);$palette_dashboard_5 = $this->blueprint->dbGet('nebula', 'palette_dashboard_5');}
    if($palette_dashboard_6 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_6', $defaultPalette_dashboard_6);$palette_dashboard_6 = $this->blueprint->dbGet('nebula', 'palette_dashboard_6');}
    if($palette_dashboard_7 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_7', $defaultPalette_dashboard_7);$palette_dashboard_7 = $this->blueprint->dbGet('nebula', 'palette_dashboard_7');}
    if($palette_dashboard_8 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_8', $defaultPalette_dashboard_8);$palette_dashboard_8 = $this->blueprint->dbGet('nebula', 'palette_dashboard_8');}
    if($palette_dashboard_9 == "") {$this->blueprint->dbSet('nebula', 'palette_dashboard_9', $defaultPalette_dashboard_9);$palette_dashboard_9 = $this->blueprint->dbGet('nebula', 'palette_dashboard_9');}
    if($palette_sidebar_1 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_1', $defaultPalette_sidebar_1);$palette_sidebar_1 = $this->blueprint->dbGet('nebula', 'palette_sidebar_1');}
    if($palette_sidebar_2 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_2', $defaultPalette_sidebar_2);$palette_sidebar_2 = $this->blueprint->dbGet('nebula', 'palette_sidebar_2');}
    if($palette_sidebar_3 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_3', $defaultPalette_sidebar_3);$palette_sidebar_3 = $this->blueprint->dbGet('nebula', 'palette_sidebar_3');}
    if($palette_sidebar_4 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_4', $defaultPalette_sidebar_4);$palette_sidebar_4 = $this->blueprint->dbGet('nebula', 'palette_sidebar_4');}
    if($palette_sidebar_5 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_5', $defaultPalette_sidebar_5);$palette_sidebar_5 = $this->blueprint->dbGet('nebula', 'palette_sidebar_5');}
    if($palette_sidebar_6 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_6', $defaultPalette_sidebar_6);$palette_sidebar_6 = $this->blueprint->dbGet('nebula', 'palette_sidebar_6');}
    if($palette_sidebar_7 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_7', $defaultPalette_sidebar_7);$palette_sidebar_7 = $this->blueprint->dbGet('nebula', 'palette_sidebar_7');}
    if($palette_sidebar_8 == "") {$this->blueprint->dbSet('nebula', 'palette_sidebar_8', $defaultPalette_sidebar_8);$palette_sidebar_8 = $this->blueprint->dbGet('nebula', 'palette_sidebar_8');}
    if($keyboard_shortcuts == "") {$this->blueprint->dbSet('nebula', 'keyboard_shortcuts', $defaultKeyboard_shortcuts);$keyboard_shortcuts = $this->blueprint->dbGet('nebula', 'keyboard_shortcuts');}
    if($keybind_icons == "") {$this->blueprint->dbSet('nebula', 'keybind_icons', $defaultKeybind_icons);$keybind_icons = $this->blueprint->dbGet('nebula', 'keybind_icons');}
    if($sidebar_hover_tooltip == "") {$this->blueprint->dbSet('nebula', 'sidebar_hover_tooltip', $defaultSidebar_hover_tooltip);$sidebar_hover_tooltip = $this->blueprint->dbGet('nebula', 'sidebar_hover_tooltip');}
    if($server_overview_graphs == "") {$this->blueprint->dbSet('nebula', 'server_overview_graphs', $defaultServer_overview_graphs);$server_overview_graphs = $this->blueprint->dbGet('nebula', 'server_overview_graphs');}
    if($server_colored_power == "") {$this->blueprint->dbSet('nebula', 'server_colored_power', $defaultServer_colored_power);$server_colored_power = $this->blueprint->dbGet('nebula', 'server_colored_power');}

    return $this->view->make(
      'admin.extensions.nebula.index', [
        'sidebar_home' => $sidebar_home,
        'sidebar_admin' => $sidebar_admin,
        'sidebar_account' => $sidebar_account,
        'sidebar_logout' => $sidebar_logout,
        'sidebar_server_terminal' => $sidebar_server_terminal,
        'sidebar_server_files' => $sidebar_server_files,
        'sidebar_server_databases' => $sidebar_server_databases,
        'sidebar_server_schedules' => $sidebar_server_schedules,
        'sidebar_server_users' => $sidebar_server_users,
        'sidebar_server_backups' => $sidebar_server_backups,
        'sidebar_server_network' => $sidebar_server_network,
        'sidebar_server_startup' => $sidebar_server_startup,
        'sidebar_server_settings' => $sidebar_server_settings,
        'sidebar_server_activity' => $sidebar_server_activity,
        'sidebar_account_account' => $sidebar_account_account,
        'sidebar_account_api' => $sidebar_account_api,
        'sidebar_account_ssh' => $sidebar_account_ssh,
        'sidebar_account_activity' => $sidebar_account_activity,
        'icon_scale' => $icon_scale,
        'watermark' => $watermark,
        'initialized' => $initialized,
        'background_image' => $background_image,
        'sidebar_background' => $sidebar_background,
        'background_appearance' => $background_appearance,
        'auth_background_image' => $auth_background_image,
        'auth_background_appearance' => $auth_background_appearance,
        'palette_dashboard_1' => $palette_dashboard_1,
        'palette_dashboard_2' => $palette_dashboard_2,
        'palette_dashboard_3' => $palette_dashboard_3,
        'palette_dashboard_4' => $palette_dashboard_4,
        'palette_dashboard_5' => $palette_dashboard_5,
        'palette_dashboard_6' => $palette_dashboard_6,
        'palette_dashboard_7' => $palette_dashboard_7,
        'palette_dashboard_8' => $palette_dashboard_8,
        'palette_dashboard_9' => $palette_dashboard_9,
        'palette_sidebar_1' => $palette_sidebar_1,
        'palette_sidebar_2' => $palette_sidebar_2,
        'palette_sidebar_3' => $palette_sidebar_3,
        'palette_sidebar_4' => $palette_sidebar_4,
        'palette_sidebar_5' => $palette_sidebar_5,
        'palette_sidebar_6' => $palette_sidebar_6,
        'palette_sidebar_7' => $palette_sidebar_7,
        'palette_sidebar_8' => $palette_sidebar_8,
        'keyboard_shortcuts' => $keyboard_shortcuts,
        'keybind_icons' => $keybind_icons,
        'sidebar_hover_tooltip' => $sidebar_hover_tooltip,
        'server_overview_graphs' => $server_overview_graphs,
        'server_colored_power' => $server_colored_power,

        'root' => "/admin/extensions/nebula",
        'blueprint' => $this->blueprint,
      ]
    );
  }

  /**
   * @throws \Pterodactyl\Exceptions\Model\DataValidationException
   * @throws \Pterodactyl\Exceptions\Repository\RecordNotFoundException
   */
  public function update(NebulaSettingsFormRequest $request): RedirectResponse
  {
    foreach ($request->normalize() as $key => $value) {
      $this->settings->set('nebula::' . $key, $value);
    }

    return redirect()->route('admin.extensions.nebula.index');
  }
}

class NebulaSettingsFormRequest extends AdminFormRequest
{
  public function rules(): array
  {
    return [
      'sidebar_home' => 'string|nullable|url:http,https',
      'sidebar_admin' => 'string|nullable|url:http,https',
      'sidebar_account' => 'string|nullable|url:http,https',
      'sidebar_logout' => 'string|nullable|url:http,https',
      'sidebar_server_terminal' => 'string|nullable|url:http,https',
      'sidebar_server_files' => 'string|nullable|url:http,https',
      'sidebar_server_databases' => 'string|nullable|url:http,https',
      'sidebar_server_schedules' => 'string|nullable|url:http,https',
      'sidebar_server_users' => 'string|nullable|url:http,https',
      'sidebar_server_backups' => 'string|nullable|url:http,https',
      'sidebar_server_network' => 'string|nullable|url:http,https',
      'sidebar_server_startup' => 'string|nullable|url:http,https',
      'sidebar_server_settings' => 'string|nullable|url:http,https',
      'sidebar_server_activity' => 'string|nullable|url:http,https',
      'sidebar_account_account' => 'string|nullable|url:http,https',
      'sidebar_account_api' => 'string|nullable|url:http,https',
      'sidebar_account_ssh' => 'string|nullable|url:http,https',
      'sidebar_account_activity' => 'string|nullable|url:http,https',
      'icon_scale' => 'string',
      'watermark' => 'boolean',
      'background_image' => 'string|nullable|url:http,https',
      'sidebar_background' => 'string',
      'background_appearance' => 'string',
      'auth_background_image' => 'string|nullable|url:http,https',
      'auth_background_appearance' => 'string',
      'palette_dashboard_1' => 'starts_with:#|string',
      'palette_dashboard_2' => 'starts_with:#|string',
      'palette_dashboard_3' => 'starts_with:#|string',
      'palette_dashboard_4' => 'starts_with:#|string',
      'palette_dashboard_5' => 'starts_with:#|string',
      'palette_dashboard_6' => 'starts_with:#|string',
      'palette_dashboard_7' => 'starts_with:#|string',
      'palette_dashboard_8' => 'starts_with:#|string',
      'palette_dashboard_9' => 'starts_with:#|string',
      'palette_sidebar_1' => 'starts_with:#|string',
      'palette_sidebar_2' => 'starts_with:#|string',
      'palette_sidebar_3' => 'starts_with:#|string',
      'palette_sidebar_4' => 'starts_with:#|string',
      'palette_sidebar_5' => 'starts_with:#|string',
      'palette_sidebar_6' => 'starts_with:#|string',
      'palette_sidebar_7' => 'starts_with:#|string',
      'palette_sidebar_8' => 'starts_with:#|string',
      'keyboard_shortcuts' => 'boolean',
      'keybind_icons' => 'boolean',
      'sidebar_hover_tooltip' => 'boolean',
      'server_overview_graphs' => 'boolean',
      'server_colored_power' => 'boolean',
    ];
  }

  public function attributes(): array
  {
    return [
      'sidebar_home' => 'dashboard icon',
      'sidebar_admin' => 'admin icon',
      'sidebar_account' => 'account icon',
      'sidebar_logout' => 'logout icon',
      'sidebar_server_terminal' => '(server) terminal icon',
      'sidebar_server_files' => '(server) files icon',
      'sidebar_server_databases' => '(server) databases icon',
      'sidebar_server_schedules' => '(server) schedules icon',
      'sidebar_server_users' => '(server) users icon',
      'sidebar_server_backups' => '(server) backups icon',
      'sidebar_server_network' => '(server) network icon',
      'sidebar_server_startup' => '(server) startup icon',
      'sidebar_server_settings' => '(server) settings icon',
      'sidebar_server_activity' => '(server) activity icon',
      'sidebar_account_account' => '(account) account icon',
      'sidebar_account_api' => '(account) api icon',
      'sidebar_account_ssh' => '(account) ssh icon',
      'sidebar_account_activity' => '(account) activity icon',
      'icon_scale' => 'sidebar icon scale percentage',
      'watermark' => 'watermark toggle',
      'background_image' => 'dashboard background image',
      'sidebar_background' => 'sidebar background mode',
      'background_appearance' => 'dashboard background blur toggle',
      'auth_background_image' => 'authentication background image',
      'auth_background_appearance' => 'authentication background blur toggle',
      'palette_dashboard_1' => 'dashboard color palette value 1',
      'palette_dashboard_2' => 'dashboard color palette value 2',
      'palette_dashboard_3' => 'dashboard color palette value 3',
      'palette_dashboard_4' => 'dashboard color palette value 4',
      'palette_dashboard_5' => 'dashboard color palette value 5',
      'palette_dashboard_6' => 'dashboard color palette value 6',
      'palette_dashboard_7' => 'dashboard color palette value 7',
      'palette_dashboard_8' => 'dashboard color palette value 8',
      'palette_dashboard_9' => 'dashboard color palette value 9',
      'palette_sidebar_1' => 'sidebar color palette value 1',
      'palette_sidebar_2' => 'sidebar color palette value 2',
      'palette_sidebar_3' => 'sidebar color palette value 3',
      'palette_sidebar_4' => 'sidebar color palette value 4',
      'palette_sidebar_5' => 'sidebar color palette value 5',
      'palette_sidebar_6' => 'sidebar color palette value 6',
      'palette_sidebar_7' => 'sidebar color palette value 7',
      'palette_sidebar_8' => 'sidebar color palette value 8',
      'keyboard_shortcuts' => 'keyboard shortcuts toggle',
      'keybind_icons' => 'keyboard shortcuts toggle',
      'sidebar_hover_tooltip' => 'sidebar buttons hover tooltip',
      'server_overview_graphs' => 'server overview graphs',
      'server_colored_power' => 'server overview colored power buttons toggle',
    ];
  }
}