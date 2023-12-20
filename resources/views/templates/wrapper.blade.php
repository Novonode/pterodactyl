@php
    use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Client\BlueprintClientLibrary as BlueprintExtensionLibrary;
    $settings = app()->make('Pterodactyl\Contracts\Repository\SettingsRepositoryInterface');
    $blueprint = app()->make(BlueprintExtensionLibrary::class, ['settings' => $settings]);
@endphp
<!DOCTYPE html>
<html>
    <head>
        <title>{{ config('app.name', 'Pterodactyl') }}</title>

        @yield('head')

        @section('meta')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="robots" content="noindex">
            <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
            <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
            <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
            <link rel="manifest" href="/favicons/manifest.json">
            <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#bc6e3c">
            <link rel="shortcut icon" href="/favicons/favicon.ico">
            <meta name="msapplication-config" content="/favicons/browserconfig.xml">
            <meta name="theme-color" content="#0e4688">
        @show

        @section('user-data')
            @if(!is_null(Auth::user()))
                <script>
                    window.PterodactylUser = {!! json_encode(Auth::user()->toVueObject()) !!};
                </script>
            @endif
            @if(!empty($siteConfiguration))
                <script>
                    window.SiteConfiguration = {!! json_encode($siteConfiguration) !!};
                </script>
            @endif
        @show
        <style>
            @import url('//fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap');
            @import url('//fonts.googleapis.com/css?family=IBM+Plex+Mono|IBM+Plex+Sans:500&display=swap');
        </style>

        @yield('assets')

        @include('layouts.scripts')
    </head>
    <body class="{{ $css['body'] ?? 'bg-neutral-50' }}">
        @section('content')
            @yield('above-container')
            @yield('container')
            @yield('below-container')

            <!--
                Blueprint extensions containing dashboard wrappers
                will have their wrapper code injected here.
            -->

            <!-- wrapper:insert -->
<!--␀nebula:start␀-->
<?php
  $n_sidebar_home = $blueprint->dbGet("nebula", "sidebar_home");
  $n_sidebar_admin = $blueprint->dbGet("nebula", "sidebar_admin");
  $n_sidebar_account = $blueprint->dbGet("nebula", "sidebar_account");
  $n_sidebar_logout = $blueprint->dbGet("nebula", "sidebar_logout");
  $n_sidebar_server_terminal = $blueprint->dbGet("nebula", "sidebar_server_terminal");
  $n_sidebar_server_files = $blueprint->dbGet("nebula", "sidebar_server_files");
  $n_sidebar_server_databases = $blueprint->dbGet("nebula", "sidebar_server_databases");
  $n_sidebar_server_schedules = $blueprint->dbGet("nebula", "sidebar_server_schedules");
  $n_sidebar_server_users = $blueprint->dbGet("nebula", "sidebar_server_users");
  $n_sidebar_server_backups = $blueprint->dbGet("nebula", "sidebar_server_backups");
  $n_sidebar_server_network = $blueprint->dbGet("nebula", "sidebar_server_network");
  $n_sidebar_server_startup = $blueprint->dbGet("nebula", "sidebar_server_startup");
  $n_sidebar_server_settings = $blueprint->dbGet("nebula", "sidebar_server_settings");
  $n_sidebar_server_activity = $blueprint->dbGet("nebula", "sidebar_server_activity");
  $n_icon_scale = $blueprint->dbGet("nebula", "icon_scale");
  $n_watermark = $blueprint->dbGet("nebula", "watermark");
  $n_initialized = $blueprint->dbGet("nebula", "initialized");
  $n_background_image = $blueprint->dbGet("nebula", "background_image");
  $n_sidebar_background = $blueprint->dbGet("nebula", "sidebar_background");
  $n_content_background = $blueprint->dbGet("nebula", "content_background");
  $n_background_appearance = $blueprint->dbGet("nebula", "background_appearance");
  $n_auth_background_image = $blueprint->dbGet("nebula", "auth_background_image");
  $n_auth_background_appearance = $blueprint->dbGet("nebula", "auth_background_appearance");
  $n_palette_dashboard_1 = $blueprint->dbGet("nebula", "palette_dashboard_1");
  $n_palette_dashboard_2 = $blueprint->dbGet("nebula", "palette_dashboard_2");
  $n_palette_dashboard_3 = $blueprint->dbGet("nebula", "palette_dashboard_3");
  $n_palette_dashboard_4 = $blueprint->dbGet("nebula", "palette_dashboard_4");
  $n_palette_dashboard_5 = $blueprint->dbGet("nebula", "palette_dashboard_5");
  $n_palette_dashboard_6 = $blueprint->dbGet("nebula", "palette_dashboard_6");
  $n_palette_dashboard_7 = $blueprint->dbGet("nebula", "palette_dashboard_7");
  $n_palette_dashboard_8 = $blueprint->dbGet("nebula", "palette_dashboard_8");
  $n_palette_dashboard_9 = $blueprint->dbGet("nebula", "palette_dashboard_9");
  $n_palette_sidebar_1 = $blueprint->dbGet("nebula", "palette_sidebar_1");
  $n_palette_sidebar_2 = $blueprint->dbGet("nebula", "palette_sidebar_2");
  $n_palette_sidebar_3 = $blueprint->dbGet("nebula", "palette_sidebar_3");
  $n_palette_sidebar_4 = $blueprint->dbGet("nebula", "palette_sidebar_4");
  $n_palette_sidebar_5 = $blueprint->dbGet("nebula", "palette_sidebar_5");
  $n_palette_sidebar_6 = $blueprint->dbGet("nebula", "palette_sidebar_6");
  $n_palette_sidebar_7 = $blueprint->dbGet("nebula", "palette_sidebar_7");
  $n_palette_sidebar_8 = $blueprint->dbGet("nebula", "palette_sidebar_8");
  $n_keyboard_shortcuts = $blueprint->dbGet("nebula", "keyboard_shortcuts");
  $n_keybind_icons = $blueprint->dbGet("nebula", "keybind_icons");
  $n_sidebar_hover_tooltip = $blueprint->dbGet("nebula", "sidebar_hover_tooltip");
  $n_server_overview_graphs = $blueprint->dbGet("nebula", "server_overview_graphs");
  $n_server_colored_power = $blueprint->dbGet("nebula", "server_colored_power");
?>
<script>console.log("nebula#~ wrapper.blade.php")</script>

@if($n_initialized != "")
@if(Auth::check())
@if($n_watermark == "1")
<p class="nebulaFooter"><i style="font-size:12px; margin-right: 3px;" class="sidebarIcon bi bi-exclude"></i> Powered by Nebula.</p>
@endif
<div class="fixed-background"></div>
<div id="sidebar" class="sidebar">
  <div class="sidebarContentContainer">
    <div class="sidebarContent">
      
      <!-- Item: Home -->
      <div class="tooltip-toggle">
        <span class="tooltip">Home</span>
        <button oncontextmenu="showContextMenu(event, `/`)" onclick="sidebarRefresh();sidebarButtonEvent('home')" id="sidebarMainHome" class="sidebarButton">
          @if($n_sidebar_home == "")
          <i class="sidebarIcon bi bi-exclude"></i>
          @else
          <img class="customicon" src="{{ $n_sidebar_home }}"></img>
          @endif
        </button>
      </div>

      <!-- Item: Spacer -->
      <div class="sidebarSpacer"></div>
      
      <!-- Category: Server Management -->
      <div id="sidebarCategoryServer" class="sidebarCategory">

        <!-- Item: Terminal -->
        <div class="tooltip-toggle">
          <span class="tooltip">Terminal</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}`)" onclick="sidebarRefresh();sidebarButtonEvent('serverTerminal')" id="sidebarServerTerminal" class="sidebarButton">
            @if($n_sidebar_server_terminal == "")
            <i class="sidebarIcon bi bi-terminal"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_terminal }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: File Manager -->
        <div class="tooltip-toggle">
          <span class="tooltip">Files</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/files`)" onclick="sidebarRefresh();sidebarButtonEvent('serverFiles')" id="sidebarServerFilemanager" class="sidebarButton">
            @if($n_sidebar_server_files == "")
            <i class="sidebarIcon bi bi-folder2"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_files }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Databases -->
        <div class="tooltip-toggle">
          <span class="tooltip">Databases</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/databases`)" onclick="sidebarRefresh();sidebarButtonEvent('serverDatabases')" id="sidebarServerDatabases" class="sidebarButton">
            @if($n_sidebar_server_databases == "")
            <i class="sidebarIcon bi bi-database"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_databases }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Schedules -->
        <div class="tooltip-toggle">
          <span class="tooltip">Schedules</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/schedules`)" onclick="sidebarRefresh();sidebarButtonEvent('serverSchedules')" id="sidebarServerSchedules" class="sidebarButton">
            @if($n_sidebar_server_schedules == "")
            <i class="sidebarIcon bi bi-calendar-week"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_schedules }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Users -->
        <div class="tooltip-toggle">
          <span class="tooltip">Users</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/users`)" onclick="sidebarRefresh();sidebarButtonEvent('serverUsers')" id="sidebarServerUsers" class="sidebarButton">
            @if($n_sidebar_server_users == "")
            <i class="sidebarIcon bi bi-people"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_users }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Backups -->
        <div class="tooltip-toggle">
          <span class="tooltip">Backups</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/backups`)" onclick="sidebarRefresh();sidebarButtonEvent('serverBackups')" id="sidebarServerBackups" class="sidebarButton">
            @if($n_sidebar_server_backups == "")
            <i class="sidebarIcon bi bi-disc"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_backups }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Network -->
        <div class="tooltip-toggle">
          <span class="tooltip">Network</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/network`)" onclick="sidebarRefresh();sidebarButtonEvent('serverNetwork')" id="sidebarServerNetwork" class="sidebarButton">
            @if($n_sidebar_server_network == "")
            <i class="sidebarIcon bi bi-hdd-network"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_network }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Startup -->
        <div class="tooltip-toggle">
          <span class="tooltip">Startup</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/startup`)" onclick="sidebarRefresh();sidebarButtonEvent('serverStartup')" id="sidebarServerStartup" class="sidebarButton">
            @if($n_sidebar_server_startup == "")
            <i class="sidebarIcon bi bi-plug"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_startup }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Settings -->
        <div class="tooltip-toggle">
          <span class="tooltip">Settings</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/settings`)" onclick="sidebarRefresh();sidebarButtonEvent('serverSettings')" id="sidebarServerSettings" class="sidebarButton">
            @if($n_sidebar_server_settings == "")
            <i class="sidebarIcon bi bi-gear"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_settings }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Activity -->
        <div class="tooltip-toggle">
          <span class="tooltip">Activity</span>
          <button oncontextmenu="showContextMenu(event, `/server/${fetchServerId()}/activity`)" onclick="sidebarRefresh();sidebarButtonEvent('serverActivity')" id="sidebarServerActivity" class="sidebarButton">
            @if($n_sidebar_server_activity == "")
            <i class="sidebarIcon bi bi-clipboard-pulse"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_server_activity }}"></img>
            @endif
          </button>
        </div>
        
        <!-- Item: Spacer -->
        <div class="sidebarSpacer"></div>
        
      </div>
      
      <!-- Category: Account -->
      <div id="sidebarCategoryAccount" class="sidebarCategory">
        
        <!-- Item: Account -->
        <div class="tooltip-toggle">
          <span class="tooltip">Account</span>
          <button oncontextmenu="showContextMenu(event, `/account`)" onclick="sidebarRefresh();sidebarButtonEvent('accountAccount')" id="sidebarAccountAccount" class="sidebarButton">
            <i class="sidebarIcon bi bi-person-badge"></i>
          </button>
        </div>
        
        <!-- Item: API Credentials -->
        <div class="tooltip-toggle">
          <span class="tooltip">API</span>
          <button oncontextmenu="showContextMenu(event, `/account/api`)" onclick="sidebarRefresh();sidebarButtonEvent('accountApi')" id="sidebarAccountApi" class="sidebarButton">
            <i class="sidebarIcon bi bi-braces-asterisk"></i>
          </button>
        </div>
        
        <!-- Item: SSH Keys -->
        <div class="tooltip-toggle">
          <span class="tooltip">SSH</span>
          <button oncontextmenu="showContextMenu(event, `/account/ssh`)" onclick="sidebarRefresh();sidebarButtonEvent('accountSsh')" id="sidebarAccountSsh" class="sidebarButton">
            <i class="sidebarIcon bi bi-key"></i>
          </button>
        </div>
        
        <!-- Item: Activity -->
        <div class="tooltip-toggle">
          <span class="tooltip">Activity</span>
          <button oncontextmenu="showContextMenu(event, `/account/activity`)" onclick="sidebarRefresh();sidebarButtonEvent('accountActivity')" id="sidebarAccountActivity" class="sidebarButton">
            <i class="sidebarIcon bi bi-clipboard-pulse"></i>
          </button>
        </div>
        
        <!-- Item: Spacer -->
        <div class="sidebarSpacer"></div>
        
      </div>
      @if(Auth::user()->root_admin == 1)
      <!-- Item: Configuration -->
      <a href="/admin">
        <div class="tooltip-toggle">
          <span class="tooltip">Admin</span>
          <button oncontextmenu="showContextMenu(event, `/admin`)" onclick="sidebarRefresh();sidebarButtonEvent('admin')" id="sidebarMainConfiguration" class="sidebarButton">
            @if($n_sidebar_admin == "")
            <i class="sidebarIcon bi bi-gear-wide-connected"></i>
            @else
            <img class="customicon" src="{{ $n_sidebar_admin }}"></img>
            @endif
          </button>
        </div>
      </a>
      @endif
      
      <!-- Item: Account -->
      <div class="tooltip-toggle">
        <span class="tooltip">Account</span>
        <button oncontextmenu="showContextMenu(event, `/account`)" onclick="sidebarRefresh();sidebarButtonEvent('accountAccount')" id="sidebarMainAccount" class="sidebarButton">
          @if($n_sidebar_account == "")
          <i class="sidebarIcon bi bi-person-fill-gear"></i>
          @else
          <img class="customicon" src="{{ $n_sidebar_account }}"></img>
          @endif
        </button>
      </div>
      
      <!-- Item: Log out -->
      <div class="tooltip-toggle">
        <span class="tooltip">Logout</span>
        <button oncontextmenu="return false;" onclick="sidebarRefresh();sidebarButtonEvent('logout')" id="sidebarMainLogout" class="sidebarButton">
          @if($n_sidebar_logout == "")
          <i class="sidebarIcon bi bi-box-arrow-right"></i>
          @else
          <img class="customicon" src="{{ $n_sidebar_logout }}"></img>
          @endif
        </button>
      </div>
      
    </div>
  </div>
</div>
<div id="nebulaContextMenu" class="context-container">
  <button id="nebulaContextButton" class="context-button">
    <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/><path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/></svg>
    Open in new tab
  </button><br>
  <button id="nebulaContextButton2" class="context-button">
  <svg xmlns="http://www.w3.org/2000/svg" class="context-icon" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/></svg>
    Copy link
  </button><br>
</div>
@endif
<style id="nebula-components">
  /* Tooltip text */
  .tooltip {
    width: auto;
    font-size: 12px;
    background-color: var(--sidebarSecondaryHover);
    color: #9aa5b1;
    text-align: left;
    padding: 5px 5px;
    border-radius: 6px;
    bottom: -100px;
    left: calc(75px + 12px); 
    transition: bottom .5s;
    position: absolute;
    z-index: 4;
    @if($n_sidebar_hover_tooltip == "0") display: none; @endif
  }

  .tooltip-toggle:hover .tooltip {
    bottom: 12px;
  }

  .nebulaFooter {
    text-align: center;
    font-size: 12px;
    font-weight: 300;
    color: #9aa5b1;
    padding-bottom: 10px;
  }

  /* SIDEBAR */
  @if($n_sidebar_background == "default")
  .sidebar {
    transition: left 0.5s !important;
    position: fixed;
    left: 0; top: 0;
    width: 75px; height: 100%;
    background-color: var(--sidebarBackground);
    z-index: 5;
    border-radius: 0px 10px 10px 0px;
  }
  @elseif($n_sidebar_background == "blurred")
  .sidebar {
    transition: left 0.5s !important;
    position: fixed;
    left: 0; top: 0;
    width: 77px; height: 100%;
    background-color: #ffffff05;
    border-right: 1px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    z-index: 5;
    border-radius: 0px 10px 10px 0px;
  }
  @endif

  .sidebarContentContainer {
    margin: 10px 10px 10px 10px;
    height: calc(100% - 20px);
    overflow: auto;
    
    scrollbar-width: none;
    -ms-overflow-style: none;
    &::-webkit-scrollbar {
      display: none;
    }
  }

  .sidebarContent {
  }

  /* SIDEBAR ITEMS */
  .sidebarButton {
    border: none;
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarSecondary);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff10;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    @endif
    width: calc(75px - 10px - 10px);
    height: calc(75px - 10px - 10px);
    border-radius: 10px;
    margin-bottom: 10px;
    transition: background-color 0.5s,
    border 0.5s !important;
  }
  .sidebarButton:hover {
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarSecondaryHover);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff20;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    @endif
  }
  .sidebarButton:active {
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarSecondaryActive);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff15;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    @endif
  }

  .sidebarButtonSelected {
    transition: background-color 0.5s,
    border 0.5s !important;
    @if($n_sidebar_background == "default")
    background-color: var(--sidebarButtonActive);
    @elseif($n_sidebar_background == "blurred")
    background-color: #ffffff15;
    backdrop-filter: blur(50px);
    -webkit-backdrop-filter: blur(50px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    @endif
  }

  .sidebarIcon {
    @if($n_sidebar_background == "default")
    color: var(--sidebarPrimary);
    @elseif($n_sidebar_background == "blurred")
    color: #ffffff;
    opacity: 0.8;
    @endif
    transition:
      color 0.3s,
      opacity 0.3s !important;
    font-size: calc(30px * {{ $n_icon_scale }});
  }
  .sidebarIcon:hover {
    @if($n_sidebar_background == "default")
    color: var(--sidebarPrimaryHover);
    @elseif($n_sidebar_background == "blurred")
    color: #ffffff;
    opacity: 0.95;
    @endif
    font-size: calc(30px * {{ $n_icon_scale }});
  }

  .customicon {
    width: 100%;
    height: 100%;
    scale: calc({{ $n_icon_scale }});
    @if($n_icon_scale == "1.00")border-radius: 10px;@endif
  }

  .sidebarSpacer {
    padding-top: 7px;
    padding-bottom: 5px;
    margin-left: 12.5%;
    margin-right: 12.5%;
    width: 75%;
    @if($n_sidebar_background == "default")
    border-top: 1px solid var(--sidebarSecondary);
    @elseif($n_sidebar_background == "blurred")
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    @endif
  }

  .sidebarCategory {
    display: none;
  }

  /* BODY */
  @if(Auth::check())

    @if($n_background_image == "")
    
      body, body.bg-neutral-800 {
        padding-left: 75px;
        color: #fff;
        background-color: var(--pageBackground);
      }

    @else

      body, body.bg-neutral-800 {
        padding-left: 75px;
        color: #fff;
        background-color: #00000000;
      }

    @endif

  @else

    body, bg-neutral-800 {
      color: #fff;
      background-color: var(--pageBackground);
    }

  @endif

  @if($n_background_image == "")

    html {
      background-color: var(--pageBackground);
    }

    .fixed-background {
      display: none;
    }

  @else

    html {
      background-color: #000000;
      z-index: -2;
    }

    .fixed-background {
      background: url("{{ $n_background_image }}") no-repeat;
      @if($n_background_appearance == "1")filter: blur(20px);scale: 1.1;@endif
      @if($n_background_appearance == "2")opacity: 0.6;@endif
      z-index: -1;
      background-position: center;
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
    }

    body {
      z-index: 2;
    }
    
  @endif

</style>
<style id="nebula-variables">
  /* Import Bootstrap Icons */
  @import url("/extensions/nebula/libraries/bootstrap-icons.css");
  
  /* Variables */
  :root {
    --sidebarPrimary: {{ $n_palette_sidebar_1 }};
    --sidebarPrimaryHover: {{ $n_palette_sidebar_2 }};
    --sidebarSecondary: {{ $n_palette_sidebar_3 }};
    --sidebarSecondaryHover: {{ $n_palette_sidebar_4 }};
    --sidebarSecondaryActive: {{ $n_palette_sidebar_5 }};
    --sidebarSecondarySelected: {{ $n_palette_sidebar_6 }};
    --sidebarButtonActive: {{ $n_palette_sidebar_8 }};

    --pagePrimary: {{ $n_palette_dashboard_1 }};
    --pagePrimaryHover: {{ $n_palette_dashboard_2 }};
    --pageSecondary: {{ $n_palette_dashboard_3 }};
    --pageSecondaryHover: {{ $n_palette_dashboard_4 }};
    --pageSecondaryActive: {{ $n_palette_dashboard_5 }};
    --pageSecondarySelected: {{ $n_palette_dashboard_6 }};
    --pageButtonDefault: {{ $n_palette_dashboard_8 }};
    --pageButtonHover: {{ $n_palette_dashboard_9 }};
    
    --sidebarBackground: {{ $n_palette_sidebar_7 }};
    --pageBackground: {{ $n_palette_dashboard_7 }};
  }

</style>
@if(Auth::check())
<script>

  window.onload = function() {
    setInterval(() => { sidebarRefresh() }, 1000)
    filesRefresh()
  }

  window.addEventListener('locationchange', function () {
    setTimeout(() => {sidebarRefresh()}, 200)
  });

  async function sidebarButtonEvent(btn) {
    serverId = fetchServerId()

    if(btn === "home") { document.querySelector("a:not([blueprint])[href='/']").click() };
    @if(Auth::user()->root_admin == 1) if(btn === "logout") { document.querySelector(".NavigationBar__RightNavigation-sc-tupl2x-0 > button:nth-child(5)").click() };
    @else if(btn === "logout") { document.querySelector(".NavigationBar__RightNavigation-sc-tupl2x-0 > button:nth-child(4)").click() }; @endif
    // servers
    if(btn === "serverTerminal") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"']").click() };
    if(btn === "serverFiles") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/files']").click() };
    if(btn === "serverDatabases") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/databases']").click() };
    if(btn === "serverSchedules") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/schedules']").click() };
    if(btn === "serverUsers") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/users']").click() };
    if(btn === "serverBackups") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/backups']").click() };
    if(btn === "serverNetwork") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/network']").click() };
    if(btn === "serverStartup") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/startup']").click() };
    if(btn === "serverSettings") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/settings']").click() };
    if(btn === "serverActivity") { document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/activity']").click() };
    // users
    if(btn === "accountAccount") { document.querySelector("a:not([blueprint])[href='/account']").click() };
    if(btn === "accountApi") { document.querySelector("a:not([blueprint])[href='/account/api']").click() };
    if(btn === "accountSsh") { document.querySelector("a:not([blueprint])[href='/account/ssh']").click() };
    if(btn === "accountActivity") { document.querySelector("a:not([blueprint])[href='/account/activity']").click() };

    sidebarRefresh()
  }
  function sidebarRefresh() {
    // Get current window path and asign it to a variable.
    currentPage = nebulaCurrentPage()
    fileModeHide()
    contextTweak()
    // Show selected button.
    if(currentPage === "home") {document.getElementById('sidebarMainHome').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarMainHome').className = 'sidebarButton';}
    if(currentPage.startsWith("account")) {
      document.getElementById('sidebarCategoryAccount').style.display = "inline";
      if(currentPage === "accountAccount") {document.getElementById('sidebarAccountAccount').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountAccount').className = 'sidebarButton';}
      if(currentPage === "accountApi") {document.getElementById('sidebarAccountApi').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountApi').className = 'sidebarButton';}
      if(currentPage === "accountSsh") {document.getElementById('sidebarAccountSsh').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountSsh').className = 'sidebarButton';}
      if(currentPage === "accountActivity") {document.getElementById('sidebarAccountActivity').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarAccountActivity').className = 'sidebarButton';}
    } else {document.getElementById('sidebarCategoryAccount').style.display = "none";}
    if(currentPage.startsWith("server")) {
      document.getElementById('sidebarCategoryServer').style.display = "inline";
      if(currentPage === "serverTerminal") {document.getElementById('sidebarServerTerminal').className = 'sidebarButton sidebarButtonSelected';refreshStatusOrb() } else {document.getElementById('sidebarServerTerminal').className = 'sidebarButton';}
      if(currentPage === "serverFiles") {document.getElementById('sidebarServerFilemanager').className = 'sidebarButton sidebarButtonSelected';fileModeShow() }
      if(currentPage === "serverFilesEdit") {document.getElementById('sidebarServerFilemanager').className = 'sidebarButton sidebarButtonSelected'; }
      if((currentPage != "serverFiles") && (currentPage != "serverFilesEdit")) { document.getElementById('sidebarServerFilemanager').className = 'sidebarButton'; }
      if(currentPage === "serverDatabases") {document.getElementById('sidebarServerDatabases').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerDatabases').className = 'sidebarButton';}
      if(currentPage === "serverSchedules") {document.getElementById('sidebarServerSchedules').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerSchedules').className = 'sidebarButton';}
      if(currentPage === "serverUsers") {document.getElementById('sidebarServerUsers').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerUsers').className = 'sidebarButton';}
      if(currentPage === "serverBackups") {document.getElementById('sidebarServerBackups').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerBackups').className = 'sidebarButton';}
      if(currentPage === "serverNetwork") {document.getElementById('sidebarServerNetwork').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerNetwork').className = 'sidebarButton';}
      if(currentPage === "serverStartup") {document.getElementById('sidebarServerStartup').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerStartup').className = 'sidebarButton';}
      if(currentPage === "serverSettings") {document.getElementById('sidebarServerSettings').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerSettings').className = 'sidebarButton';}
      if(currentPage === "serverActivity") {document.getElementById('sidebarServerActivity').className = 'sidebarButton sidebarButtonSelected';} else {document.getElementById('sidebarServerActivity').className = 'sidebarButton';}

      setTimeout(() => {
        serverId = fetchServerId()
        sidebarServerButtonRefresh(serverId);
      }, 300)
    } else {document.getElementById('sidebarCategoryServer').style.display = "none";}
  }
  function sidebarServerButtonRefresh(serverId) {
    nopage=false
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"']") === null) {
      document.getElementById('sidebarServerTerminal').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerTerminal').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/files']") === null) {
      document.getElementById('sidebarServerFilemanager').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerFilemanager').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/databases']") === null) {
      document.getElementById('sidebarServerDatabases').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerDatabases').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/schedules']") === null) {
      document.getElementById('sidebarServerSchedules').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerSchedules').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/users']") === null) {
      document.getElementById('sidebarServerUsers').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerUsers').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/backups']") === null) {
      document.getElementById('sidebarServerBackups').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerBackups').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/network']") === null) {
      document.getElementById('sidebarServerNetwork').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerNetwork').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/startup']") === null) {
      document.getElementById('sidebarServerStartup').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerStartup').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/settings']") === null) {
      document.getElementById('sidebarServerSettings').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerSettings').style.display = "inline";
    }
    if(document.querySelector("a:not([blueprint])[href='/server/"+serverId+"/activity']") === null) {
      document.getElementById('sidebarServerActivity').style.display = "none";
      nopage=true
    } else {
      document.getElementById('sidebarServerActivity').style.display = "inline";
    }

    // if nopage = true then no page buttons are appearing.
  }
</script>
@endif
@if(Auth::check() != true)
<!-- PTERODACTYL AUTHENTICATION THEMING -->
<style id="nebula-authentication-theme">
  html, body {
    background-color: #000 !important;
  }
  div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY { position: fixed; z-index: 4; top: 0; left: 0 !important; width: 100% !important; }

  @keyframes backdrop {
    0%   {scale: calc(.1 +@if($n_auth_background_appearance == "1") 2.4 @else 1 @endif)}
    100% {scale: @if($n_auth_background_appearance == "1") 2 @else 1 @endif}
  }
  .nebula-auth-wallpaper { 
    z-index: 3;
    overflow: hidden;
    @if($n_auth_background_image == "")background-color: #080808;
    @else background: url("{{ $n_auth_background_image }}") no-repeat; background-color: #000;@endif
    background-position: center;
    background-size: cover;
    height: 100vh;
    width: 100vw;
    top: 0; left: 0;
    position: fixed;
    @if($n_auth_background_appearance == "1")filter: blur(50px);scale: 2;@endif
    @if($n_auth_background_appearance == "1")filter: blur(50px);@endif
    @if($n_auth_background_appearance == "2")opacity: 0.6;@endif
    animation: backdrop 2s;
  }
  .nebula-auth-backdrop {
    background-color: #000 !important;
    z-index: 2;
    position: fixed;
    left: 0; top: 0;
    width: 100vw; height: 100vh;
  }

  div.App___StyledDiv-sc-2l91w7-0.fnfeQw { background-color: var(--pageBackground) !important; z-index: 1; }
  .LoginFormContainer___StyledDiv-sc-cyh04c-3 { padding-left: 10px !important; padding-right: 10px !important; }

  /* login container */
  div.LoginFormContainer__Container-sc-cyh04c-0 {
    z-index: 4;
    position: fixed;
    width: 30%;
    left: 50%;
    background-color: #0f0f0f;
    border-radius: 10px;
    top: 50%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    padding: 40px !important;
  }
  @media screen and (max-width: 1200px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 40%;}}
  @media screen and (max-width: 1100px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 45%;}}
  @media screen and (max-width: 1000px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 50%;}}
  @media screen and (max-width: 900px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 55%;}}
  @media screen and (max-width: 800px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 60%; padding: 30px !important;}}
  @media screen and (max-width: 700px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 70%; padding: 25px !important;}}
  @media screen and (max-width: 600px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 80%; padding: 20px !important;}}
  @media screen and (max-width: 500px) {div.LoginFormContainer__Container-sc-cyh04c-0 {width: 90%; padding: 15px !important;}}


  .LoginFormContainer___StyledDiv-sc-cyh04c-3 { background: none; background-color: #00000000; box-shadow: none; }
  div.LoginFormContainer___StyledDiv2-sc-cyh04c-4 { display: none; }
  .Input-sc-19rce1w-0.fFYzlR {
    background: none !important;
    background-color: #1f1f1f !important;
    border: none;
    border-bottom: 5px #2c2c2c solid !important;
    border-radius: 0;
  }
  .Input-sc-19rce1w-0.floJYL {
    background: none !important;
    background-color: #1f1f1f !important;
    border: none;
    border-bottom: 5px #ff5151 solid !important;
    border-radius: 0;
  }
  input[type=text],input[type=text]::placeholder, 
  input[type=password],input[type=password]::placeholder, 
  input[type=email],input[type=email]::placeholder{
    color:white !important;
  }

  /*ptero footer*/
  .LoginFormContainer___StyledP-sc-cyh04c-7.llNNfK {
    padding: 0;
    margin: 0;
    opacity: 0.5;
  }

  @font-face {
    font-display: block;
    font-family: "bootstrap-icons";
    src: 
      url("/extensions/nebula/libraries/assets/bootstrap-icons.woff2") format("woff2"),
      url("/extensions/nebula/libraries/assets/bootstrap-icons.woff") format("woff");
  }

</style>
@endif
<!-- PTERODACTYL PANEL THEMING -->
<style id="nebula-theme">
  /* Pterodactyl */
  div.w-full.bg-neutral-900.shadow-md.overflow-x-auto { display: none; background-color: var(--pageBackground); opacity: 0; transition: none; }
  div.SubNavigation-sc-lfuaoi-0.jZPsWO.fade-appear-done.fade-enter-done { display: none; background-color: var(--pageBackground); opacity: 0; transition: none; }
  @if($n_background_image == "") div.App___StyledDiv-sc-2l91w7-0.fnfeQw { background-color: var(--pageBackground) }
  @else div.App___StyledDiv-sc-2l91w7-0.fnfeQw { background-color: #00000000 } @endif
  div.SubNavigation-sc-lfuaoi-0.jZPsWO { display: none; background-color: var(--pageBackground); opacity: 0; transition: none; }
  div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY { position: fixed; z-index: 4; top: 0; left: 70px; width: calc(100% - 70px); }
  .bg-neutral-900, .bg-gray-900, .bg-neutral-700 { background-color: var(--pageSecondaryActive) }
  .ZkNLd:not([type="checkbox"]):not([type="radio"]) { background: none; background-color: var(--pageSecondaryActive); border: none; }
  .jqTCDz:not([type="checkbox"]):not([type="radio"]) { background: none; background-color: var(--pageSecondaryActive); border: none; }
  input.form-input.styles-module_S9h-xMSg.styles-module_AWe-iPIe.mt-3,
  input.form-input.styles-module_S9h-xMSg.styles-module_AWe-iPIe.mt-1 { background: none; background-color: var(--pageSecondaryActive); border: none; }
  select.Select-sc-17exaqp-0 { background-color: var(--pageSecondaryActive); border: none; }
  div.ContentBox___StyledDiv-sc-mjlt6f-2.iGOcRf { background-color: var(--pageSecondary) }
  
  .style-module_3kBDV_wo, .cDkCmT {
    --thisButtonColor: var(--pageButtonDefault); /*#474849*/
    --tw-ring-opacity: 0 !important;
    --tw-ring-color: #00000000 !important;
    --tw-ring-offset-width: 0px !important;
    background: none !important;
    background-color: var(--thisButtonColor) !important;
    border: none !important;
    transition: background-color .3s;
   }
  .style-module_3kBDV_wo:hover, .cDkCmT:hover { --thisButtonColor: var(--pageButtonHover) } /*#525354*/
  .style-module_Yp7-2Fw- { --thisButtonColor: var(--pageSecondaryHover) }
  .style-module_Yp7-2Fw-:hover { background-color: var(--pageSecondaryActive) !important; }

  /* Modal 1 */
  div.Modal___StyledDiv2-sc-9vzni8-3 { background-color: var(--pageSecondary) }
  /* Modal 2 */
  div.style-module_1RnhIT0w div.flex.p-6.pb-0.overflow-y-auto { background-color: var(--pageSecondary) }
  div.style-module_1RnhIT0w { background-color: var(--pageSecondaryHover) }
  div.px-6.py-3.bg-gray-700.flex.items-center.justify-end.space-x-3.rounded-b { background-color: var(--pageSecondaryHover) }
  div.style-module_1RnhIT0w { border: var(--pageSecondaryHover) 5px solid; --tw-ring-shadow: none; }
  div.fixed:nth-child(1) { background-color: #00000075 }
  button.style-module_4LBM1DKx.style-module_3kBDV_wo.style-module_3xOG8K0n.style-module_2UCZLAAp.style-module_Yp7-2Fw-.group {
    background-color: var(--pageSecondaryHover);
  }
  /* pterodactyl home */
  div.ServerRow___StyledDiv-sc-1ibsw91-3.ecJXa-d div.icon.mr-4 {
    background-color: var(--pageSecondaryHover)
  }
  /* account 2fa codes */
  #disable-totp-form .form-input.styles-module_S9h-xMSg.styles-module_AWe-iPIe,
  .bg-gray-800.rounded.p-2.mt-6.cursor-pointer
  { background: none; background-color: var(--pageSecondaryHover) !important }
  /* account api key */
  .ApiKeyModal___StyledPre-sc-s6pcab-2.irvYxA,
  .AccountApiContainer___StyledCode-sc-1c4s3nm-10.lnIosn { background-color: var(--pageSecondaryHover) !important }
  /* file manager */
  div.style-module_35MPv1CD.active { margin-bottom: 0px; background-color: var(--pageSecondary); transition: background-color .5s; }
  div.style-module_1WqkLT9X { margin-bottom: 0px; background-color: var(--pageSecondary); transition: background-color .5s; }
  div.style-module_35MPv1CD.active:hover { margin-bottom: 0px; background-color: var(--pageSecondaryHover) }
  div.style-module_1WqkLT9X:hover { margin-bottom: 0px; background-color: var(--pageSecondaryHover) }

  .CodeMirror.cm-s-ayu-mirage.CodeMirror-wrap.CodeMirror-overlayscroll,
  .CodeMirror-gutter.CodeMirror-foldgutter,
  .CodeMirror-gutter.CodeMirror-linenumbers,
  .FileEditContainer___StyledDiv4-sc-48rzpu-8.eDlcZT .Select-sc-17exaqp-0.dupyoa { background-color: var(--pageSecondary); border: none; }
  
  /* mass action bar */
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1.haunnZ.fade-enter-done,
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1.haunnZ {
    background-color: var(--pageSecondaryHover);
    height: 50px;
    border-radius: 10px;
    padding: 10px 10px !important;
  }
  /* mass action bar container */
  div.fixed.bottom-0.mb-6.flex.justify-center.w-full.z-50 {
    width: auto;
    right: 150px;
  }
  /* mass action bar buttons */
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(1),
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(2),
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(3) {
    font-size: 0px;
    margin-top: 10px !important;
    margin-bottom: 10px !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    scale: 0.75 !important;
    border-radius: 5px !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
    background-color: #00000000 !important;
  }

  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(1)::before {
    font-size: 22px;
    color: #c7c9cc;
    font-family: bootstrap-icons !important;
    content: "\F2E2";
    background-color: #444444;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 7px;
    padding-bottom: 7px;
    border-radius: 5px;
  }
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(2)::before {
    font-size: 22px;
    color: #c7c9cc;
    font-family: bootstrap-icons !important;
    content: "\F10C";
    background-color: #444444;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 7px;
    padding-bottom: 7px;
    border-radius: 5px;
  }
  .MassActionsBar___StyledDiv2-sc-1x2nl3g-1 > button:nth-child(3)::before {
    font-size: 22px;
    color: #ff524c;
    font-family: bootstrap-icons !important;
    content: "\F78A";
    background-color: #444444;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 7px;
    padding-bottom: 7px;
    border-radius: 5px;
  }
  
  /* checkbox */
  .jqTCDz[type="checkbox"]:checked, .jqTCDz[type="radio"]:checked {
    background: hex(#3a3a3a00);
    background-color: #dddddd;
    background-image: none;
    border: none;
    border-color: #00000000;
  }
  .jqTCDz[type="checkbox"], .jqTCDz[type="radio"] { border-color: #333333; transition: border-color .5s, background-color .5s }
  .jqTCDz[type="checkbox"]:hover, .jqTCDz[type="radio"]:hover { border-color: #3a3a3a; transition: border-color .5s, background-color .5s }

  /* terminal */
  div.style-module_2Vp6MaXq.bg-gray-600.cursor-pointer { background-color: var(--pageSecondary); overflow: hidden; color: #fff !important; }
  div.style-module_2Vp6MaXq.bg-gray-600.cursor-pointer div.style-module_1DtraXMW.bg-gray-700 { background-color: var(--pageSecondaryHover); box-shadow: none !important; border: none !important; }
  div.style-module_2Vp6MaXq.bg-gray-600 { background-color: var(--pageSecondary); overflow: hidden; }
  div.style-module_2Vp6MaXq.bg-gray-600 div.style-module_1DtraXMW.bg-gray-700 { background-color: #00000000 !important; box-shadow: none; background: none !important; }
  div.style-module_2XbmHEcn:nth-child(1) { background-color: var(--pageSecondary); border-bottom: 3px solid var(--pageSecondary); }
  div.style-module_2XbmHEcn:nth-child(2) { background-color: var(--pageSecondary); border-bottom: 3px solid var(--pageSecondary); }
  div.style-module_2Vp6MaXq:nth-child(2) > div:nth-child(2),
  div.style-module_1DtraXMW.bg-red-500,
  div.style-module_1DtraXMW.bg-yellow-500 { background: none !important; }
  div.style-module_2XbmHEcn:nth-child(3) { background-color: var(--pageSecondary); border-bottom: 3px solid var(--pageSecondary); }
  
  /* copy notification */
  div.rounded-md.py-3.px-4.text-gray-200.bg-neutral-600\/95.shadow {
    background-color: var(--pageSecondary) !important;
  }


  /* ICONS INSTEAD OF TEXT ON START/STOP/RESTART BUTTONS */
  @if($n_server_colored_power)
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(1) {
      font-size: 0px !important;
      background-color: #18b855 !important;
      transition: background-color .3s !important;
      border: none !important;
      box-shadow: none !important;
      width: 30% !important;
    }
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(2) {
      font-size: 0px !important;
      background-color: #ca7a25 !important;
      transition: background-color .3s !important;
      border: none !important;
      box-shadow: none !important;
      width: 30% !important;
    }
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(3) {
      font-size: 0px !important;
      background-color: #bc362f !important;
      transition: background-color .3s !important;
      border: none !important;
      box-shadow: none !important;
      width: 30% !important;
    }
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(1):hover {
      background-color: #149e49 !important;
    }
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(2):hover {
      background-color: #a76218 !important;
    }
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(3):hover {
      background-color: #a72721 !important;
    }
  @else
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(1),
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(2),
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(3) {
      font-size: 0px !important;
      background-color: var(--pageSecondary) !important;
      transition: background-color .3s !important;
      border: none !important;
      box-shadow: none !important;
      width: 30% !important;
    }
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(1):hover,
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(2):hover,
    .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(3):hover {
      background-color: var(--pageSecondaryHover) !important;
    }
  @endif

  .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(1)::before {
    font-family: bootstrap-icons !important;
    font-size: 25px !important;
    content: "\F4F4" !important;
  }
  .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(2)::before {
    font-family: bootstrap-icons !important;
    font-size: 21px !important;
    content: "\F130" !important;
  }
  .PageContentBlock___StyledContentContainer-sc-kbxq2g-0 div.grid.grid-cols-4.gap-4.mb-4 div.col-span-4.sm\:col-span-2.lg\:col-span-1.self-end div.flex.sm\:justify-end.space-x-2 button.style-module_4LBM1DKx:nth-child(3)::before {
    font-family: bootstrap-icons !important;
    font-size: 25px !important;
    content: "\F592" !important;
  }
  

  /* default status */
  .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-100,
  /* warning status */
  .style-module_1DtraXMW.bg-yellow-500 .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-50,
  /* danger status */
  .style-module_1DtraXMW.bg-red-500 .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-50 {
    /* styles */
    z-index: 4;
    margin-right:25px;
    scale: 4;
    color: #ffffff09 !important;
    transition: color .3s, scale .3s, background-color .3s;
  }

  .Icon___StyledSvg-sc-omsq29-0.ejRaBu.text-gray-100:hover {
    z-index: 4;
    color: #ffffff12 !important;
  }

  /* address */ div.style-module_2Vp6MaXq:nth-child(1) > div:nth-child(2) > svg:nth-child(1) {scale: 5 !important;rotate: -20deg !important;}
  /* address hover */ div.style-module_2Vp6MaXq:nth-child(1):hover > div:nth-child(2) > svg:nth-child(1) {scale: 5.3 !important; color: #ffffff12 !important;}
  
  /* uptime */ div.style-module_2Vp6MaXq:nth-child(2) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important; color: #ffffff09 !important; transition: color .3s, scale .3s, background-color .3s;}
  /* uptime hover */ div.style-module_2Vp6MaXq:nth-child(2):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}

  /* cpu */ div.style-module_2Vp6MaXq:nth-child(3) > div:nth-child(2) > svg:nth-child(1) {scale: 3.8 !important;rotate: -20deg !important;}
  /* cpu hover */ div.style-module_2Vp6MaXq:nth-child(3):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.1 !important; color: #ffffff12 !important;}
  
  /* ram */ div.style-module_2Vp6MaXq:nth-child(4) > div:nth-child(2) > svg:nth-child(1) {scale: 4 !important;rotate: -20deg !important;}
  /* ram hover */ div.style-module_2Vp6MaXq:nth-child(4):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.3 !important; color: #ffffff12 !important;}
  
  /* disk */ div.style-module_2Vp6MaXq:nth-child(5) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important;}
  /* disk hover */ div.style-module_2Vp6MaXq:nth-child(5):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}
  
  /* network in */ div.style-module_2Vp6MaXq:nth-child(6) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important;}
  /* network in hover */ div.style-module_2Vp6MaXq:nth-child(6):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}
  
  /* network out */ div.style-module_2Vp6MaXq:nth-child(7) > div:nth-child(2) > svg:nth-child(1) {scale: 4.5 !important;rotate: -20deg !important;}
  /* network out hover */ div.style-module_2Vp6MaXq:nth-child(7):hover > div:nth-child(2) > svg:nth-child(1) {scale: 4.8 !important; color: #ffffff12 !important;}

  /* xterm */
  .relative.style-module_1AMtO9lt input { background: none; background-color: var(--pageSecondaryHover); }
  .style-module_1n_DiqmT.style-module_1AMtO9lt, .xterm-screen, .xterm-viewport, .terminal.xterm { background: none !important; background-color: var(--pageSecondary) !important; }

  /* schedules */
  .GreyRowBox-sc-1xo9c6v-0,
  .flex.ScheduleEditContainer___StyledScheduleCronRow-sc-1fhsmlc-5.gLoyLu { background-color: var(--pageSecondary) }
  div.ScheduleEditContainer___StyledDiv3-sc-1fhsmlc-7 { background-color: var(--pageSecondary); border-color: var(--pageSecondaryHover) }
  div.ScheduleEditContainer___StyledDiv-sc-1fhsmlc-0.bWXUsX { background-color: var(--pageSecondaryHover) }
  div.ScheduleTaskRow___StyledDiv-sc-17r38ls-0.ipThkt { background-color: var(--pageSecondaryHover); border: none; }
  .ScheduleTaskRow___StyledDiv4-sc-17r38ls-6.cPagWz { background-color: var(--pageSecondaryActive); }

  div.EditScheduleModal___StyledDiv2-sc-wh9db9-4,
  div.EditScheduleModal___StyledDiv4-sc-wh9db9-6,
  div.EditScheduleModal___StyledDiv5-sc-wh9db9-7,
  div.TaskDetailsModal___StyledDiv5-sc-1b5dnyw-7 { background-color: var(--pageSecondaryHover); border: none; } /*create/edit schedule*/

  div.EditScheduleModal___StyledDiv3-sc-wh9db9-5.hsBdEm,
  div.EditScheduleModal___StyledDiv3-sc-wh9db9-5.hsBdEm * {
    background-color: var(--pageSecondaryActive) !important;
    border-radius: 10px !important;
  }
  div.EditScheduleModal___StyledDiv3-sc-wh9db9-5.hsBdEm {
    margin-top: 15px;
  }


  /* settings */
  div.SettingsContainer___StyledTitledGreyBox-sc-1e5ycmz-3 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.SettingsContainer___StyledTitledGreyBox-sc-1e5ycmz-3 > div:nth-child(2) { background-color: var(--pageSecondaryHover) }
  .SettingsContainer___StyledTitledGreyBox-sc-1e5ycmz-3 > div:nth-child(2) > div:nth-child(1) > input:nth-child(2) { background-color: var(--pageSecondaryActive); border: none; }
  .SettingsContainer___StyledDiv3-sc-1e5ycmz-4.keyYci .Input-sc-19rce1w-0.jqTCDz.cursor-pointer { background-color: var(--pageSecondaryActive); border: none; }

  div.RenameServerBox___StyledTitledGreyBox-sc-1bh2mfg-0 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.RenameServerBox___StyledTitledGreyBox-sc-1bh2mfg-0 > div:nth-child(2) { background-color: var(--pageSecondaryHover) }
  #name { background-color: var(--pageSecondaryActive); border: none; }
  .Input__Textarea-sc-19rce1w-1 { background-color: var(--pageSecondaryActive); border: none; }

  div.SettingsContainer___StyledTitledGreyBox2-sc-1e5ycmz-10 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.SettingsContainer___StyledTitledGreyBox2-sc-1e5ycmz-10 > div:nth-child(2) { background-color: var(--pageSecondaryHover) }

  .SettingsContainer___StyledCode-sc-1e5ycmz-12.EwfIk,
  .SettingsContainer___StyledCode2-sc-1e5ycmz-14.izAmwE { background-color: var(--pageSecondaryActive); }

  div.ReinstallServerBox___StyledTitledGreyBox-sc-1prmksw-0 > div:nth-child(1) { background-color: var(--pageSecondary) }
  div.ReinstallServerBox___StyledTitledGreyBox-sc-1prmksw-0 > div:nth-child(2) { background-color: var(--pageSecondaryHover) }
  /* activity  ACCOUNT + SERVER */
  .ContentContainer-sc-x3r2dw-0.PageContentBlock___StyledContentContainer-sc-kbxq2g-0.jyeSuy.HeRWk.fade-appear-done.fade-enter-done div.bg-gray-700 div.grid {
    background-color: var(--pageSecondary);
    border-radius: 10px;
    border: none;
    margin-bottom: 10px;
  }
  .ContentContainer-sc-x3r2dw-0.PageContentBlock___StyledContentContainer-sc-kbxq2g-0.jyeSuy.HeRWk.fade-appear-done.fade-enter-done div.bg-gray-700,
  .bg-gray-700,
  div.ContentContainer-sc-x3r2dw-0:nth-child(2) {
    background: none;
    background-color: none;
    transition: none;
    animation: none;
    border: none;
    border-color: #00000000;
  }
  /* startup */
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv2-sc-gvsoy-1.jRrWLs { background-color: var(--pageSecondary) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ { background-color: var(--pageSecondaryHover) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.StartupContainer___StyledTitledGreyBox-sc-163imy2-1.kRunTE { background-color: var(--pageSecondaryHover) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.StartupContainer___StyledTitledGreyBox2-sc-163imy2-4.aRhRz { background-color: var(--pageSecondaryHover) }
  .StartupContainer___StyledDiv-sc-163imy2-0.dUOPLC .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.StartupContainer___StyledTitledGreyBox2-sc-163imy2-4.aRhRz .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ .Select-sc-17exaqp-0.dupyoa,
  .StartupContainer___StyledDiv2-sc-163imy2-2.gMdcgi p { background-color: var(--pageSecondaryActive); border: none; }

  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .TitledGreyBox___StyledDiv2-sc-gvsoy-1.jRrWLs { background-color: var(--pageSecondary) }
  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ,
  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP { background-color: var(--pageSecondaryHover) }
  .Label-sc-g780ms-0.eDArzA,
  .StartupContainer___StyledDiv3-sc-163imy2-8.gMWjQt .Input-sc-19rce1w-0.jqTCDz { border: none; }
  /* subusers */
  .EditSubuserModal___StyledDiv4-sc-1hon03w-7.bgqXrq .TitledGreyBox___StyledDiv2-sc-gvsoy-1.jRrWLs { background-color: var(--pageSecondary) }
  .EditSubuserModal___StyledDiv4-sc-1hon03w-7.bgqXrq .TitledGreyBox___StyledDiv-sc-gvsoy-0.oLbNP.EditSubuserModal___StyledPermissionTitleBox-sc-1hon03w-8,
  .EditSubuserModal___StyledDiv4-sc-1hon03w-7.bgqXrq .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ { background-color: var(--pageSecondaryHover) }
  .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ .PermissionRow__Container-sc-1h899cn-0.icxFlO:hover { border-color: #00000000; border: none; background-color: var(--pageSecondaryActive) }
  .TitledGreyBox___StyledDiv3-sc-gvsoy-4.fKIIIQ .PermissionRow__Container-sc-1h899cn-0.icxFlO { border-color: #00000000; border: none; }
  /* backups */
  .CreateBackupButton___StyledDiv2-sc-da8bqw-3.eDncUf { background-color: var(--pageSecondaryHover); border: none; }
</style>
@else
<iframe
  id="nebula-initialization-frame"
  width="100vw"
  height="100vh"
  frameborder="0"
  scrolling="no"
  style="
  position: fixed;
  left: 0;
  top: 0;
  width: 100vw;
  height: 100vh;
  z-index: 9999999;
  "
  src="/extensions/nebula/overlay/configure/index.html"
></iframe>
<script>console.log("[NEBULA] Database values have not been initialized yet, please open Nebula in your admin dashboard to initialize them.")</script>
@endif
@if(Auth::check() != true)
  <div class="nebula-auth-wallpaper"></div>
  <div class="nebula-auth-backdrop"></div>
  <style> @import url("/extensions/nebula/libraries/hideRecaptcha.css"); </style>
  @if($blueprint->dbGet("settings", "recaptcha.enabled") == "true")
    <style> @import url("/extensions/nebula/libraries/recaptcha.css"); </style>
  @endif
  <div class="notification">
    <div class="notificationBar"></div>
    <div class="notificationIcon"></div>
    <div class="notificationTextContainer">
      <p class="notificationText"><b style="font-size: 14px;">Protected by reCAPTCHA</b><br>
        <span style="font-size: 12px;"><a href="https://www.google.com/intl/en/policies/privacy/" style="color: #4D4DFF;">Privacy</a>, <a href="https://www.google.com/intl/en/policies/terms/" style="color: #4D4DFF;">Terms</a></span></p>
    </div>
</div>
@endif

<script src="/extensions/nebula/libraries/locationchange.js"></script>
<script src="/extensions/nebula/libraries/fetchStyle.js"></script>
<script src="/extensions/nebula/libraries/currentPage.js"></script>
<script src="/extensions/nebula/libraries/fetchServerId.js"></script>
<script src="/extensions/nebula/libraries/statusOrb.js"></script>
<script src="/extensions/nebula/libraries/fileContextMenuTweak.js"></script>
<script src="/extensions/nebula/libraries/customContextMenu.js"></script>
<script src="/extensions/nebula/libraries/copyapi.js"></script>
<style> @import url("/extensions/nebula/libraries/statusOrb.css"); </style>
<style> @import url("/extensions/nebula/libraries/fixUserInterfaceBugs.css"); </style>
<style> @import url("/extensions/nebula/libraries/customContextMenu.css"); </style>
@if($n_server_overview_graphs == "0")<style> @import url("/extensions/nebula/libraries/hideServerOverviewGraphs.css"); </style>@endif
@if(Auth::check())

  <!-- FILE MODE -->
  <script src="/extensions/nebula/libraries/fileMode.js"></script>
  <style> @import url("/extensions/nebula/libraries/fileMode.css"); </style>

  <div id="fileMode" class="file-manager-switch">
    <div class="file-manager-switch-container">
      <button id="filesGrid" class="file-manager-switch-grid" onclick="switchFilesLayout()">
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M10 7h4v4h-4zm6 0h4v4h-4zM4 7h4v4H4zm6 6h4v4h-4zm6 0h4v4h-4zM4 13h4v4H4z"></path></svg>
      </button>
      <button id="filesList" class="file-manager-switch-list" onclick="switchFilesLayout()">
        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 24 24" style="transform: ;msFilter:;"><path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z"></path></svg>
      </button>
    </div>
  </div>

@if($n_keyboard_shortcuts == "1") 
  <script src="/extensions/nebula/libraries/keybinds.js"></script>
  <script src="/extensions/nebula/libraries/keybindsModal.js"></script>
  <style> @import url("/extensions/nebula/libraries/keybindsModal.css"); </style>


  <!-- KEYBINDS MODAL -->
  <?php
    if($n_keybind_icons == "0") {
      $KEY_CTRL = 'CTRL';
      $KEY_ALT = 'ALT';
      $KEY_CMD = 'CMD';
      $KEY_WIN = 'WIN';
      $KEY_SHIFT = 'SHIFT';
      $KEY_ESCAPE = 'ESC';
      $KEY_SLASH = '/';

      $KEY_1 = "1";
      $KEY_2 = "2";
      $KEY_3 = "3";
      $KEY_4 = "4";
      $KEY_5 = "5";
      $KEY_6 = "6";
      $KEY_7 = "7";
      $KEY_8 = "8";
      $KEY_9 = "9";
      $KEY_0 = "0";
    } else {
      $KEY_CTRL = '<i class="bi bi-option"></i>';
      $KEY_ALT = '<i class="bi bi-alt"></i>';
      $KEY_CMD = '<i class="bi bi-command"></i>';
      $KEY_WIN = '<i class="bi bi-microsoft"></i>';
      $KEY_SHIFT = '<i class="bi bi-shift"></i>';
      $KEY_ESCAPE = '<i class="bi bi-escape"></i>';
      $KEY_SLASH = '<i class="bi bi-slash-lg"></i>';

      $KEY_1 = '<i class="bi bi-1-square"></i>';
      $KEY_2 = '<i class="bi bi-2-square"></i>';
      $KEY_3 = '<i class="bi bi-3-square"></i>';
      $KEY_4 = '<i class="bi bi-4-square"></i>';
      $KEY_5 = '<i class="bi bi-5-square"></i>';
      $KEY_6 = '<i class="bi bi-6-square"></i>';
      $KEY_7 = '<i class="bi bi-7-square"></i>';
      $KEY_8 = '<i class="bi bi-8-square"></i>';
      $KEY_9 = '<i class="bi bi-9-square"></i>';
      $KEY_0 = '<i class="bi bi-0-square"></i>';
    };
  ?>

  <a onclick="hideKeybinds()">
    <div id="keybindsSiteOverlay" class="keybinds-site-overlay"></div>
  </a>
  <div id="keybindsContainer" class="keybinds-container">
    <div class="keybinds-content-box">
      <div class="keybinds-content">
        <h2 class="keybinds-content-title">Keybinds</h2>
        <img src="/extensions/nebula/libraries/assets/keyboard.png" class="keybinds-emoji" id="keybindsEmoji"/>
        <p class="keybinds-content-text">Quickly navigate through the panel using keybinds.</p><br>
        
        <!--Global-->
        <p class="keybinds-content-text-bold">Global</p>
        <div class="keybinds-content-text-box">

          <!-- View Keybinds -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">View Keybinds</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_SLASH !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} {!! $KEY_SLASH !!}
              </code>
            </p></div>
          </div>

          <!-- Home -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Home</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_ESCAPE !!}
              </code>
            </p></div>
          </div>

          <!-- Account -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Account</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} .
              </code>
            </p></div>
          </div>
          
          @if(Auth::user()->root_admin == 1)
          <!-- Admin -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Admin</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} ,
              </code>
            </p></div>
          </div>
          @endif

          <p style="opacity: 0; font-size: 0px;">.</p>
        </div><br>

        <!--Server management-->
        <p class="keybinds-content-text-bold">Server management</p>
        <div class="keybinds-content-text-box">

          <!-- Terminal -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Terminal</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_1 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} .
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Start</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} Z
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Stop</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} X
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Restart</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} E
              </code>
            </p></div>
          </div>

          <!-- Files -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Files</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_2 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} ,
              </code>
            </p></div>

            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-subcategory-name">Switch layout</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-subcategory-shortcut">
                {!! $KEY_ALT !!} Z
              </code>
            </p></div>
          </div>

          <!-- Databases -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Databases</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_3 !!}
              </code>
            </p></div>
          </div>

          <!-- Schedules -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Schedules</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_4 !!}
              </code>
            </p></div>
          </div>

          <!-- Users -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Users</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_5 !!}
              </code>
            </p></div>
          </div>

          <!-- Backups -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Backups</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_6 !!}
              </code>
            </p></div>
          </div>

          <!-- Network -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Network</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_7 !!}
              </code>
            </p></div>
          </div>

          <!-- Startup -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Startup</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_8 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} M
              </code>
            </p></div>
          </div>

          <!-- Settings -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Settings</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_9 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} L
              </code>
            </p></div>
          </div>

          <!-- Activity -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Activity</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_0 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} -
              </code>
            </p></div>
          </div>

          <p style="opacity: 0; font-size: 0px;">.</p>
        </div><br>

        <!--Account management-->
        <p class="keybinds-content-text-bold">Account management</p>
        <div class="keybinds-content-text-box">

          <!-- Account -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Account</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_1 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} .
              </code>
            </p></div>
          </div>

          <!-- API -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">API</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_2 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} ,
              </code>
            </p></div>
          </div>

          <!-- SSH -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">SSH</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_3 !!}
              </code>
            </p></div>
          </div>

          <!-- Activity -->
          <div class="row">
            <div class="keybinds-column"><p class="keybinds-content-text-dim keybinds-name">Activity</p></div>
            <div class="keybinds-column"><p class="keybinds-content-text-dim">
              <code class="keybinds-shortcut">
                {!! $KEY_CTRL !!} {!! $KEY_4 !!}
              </code><code class="keybinds-shortcut">
                {!! $KEY_ALT !!} -
              </code>
            </p></div>
          </div>

          <p style="opacity: 0; font-size: 0px;">.</p>
        </div>

        <p class="keybinds-content-text-dim" style="margin-top: 30px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_CTRL !!}</code> Control/Option
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_ALT !!}</code> Alt
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_CMD !!}</code> Command/Meta
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_WIN !!}</code> Windows
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_SHIFT !!}</code> Shift
        </p><p class="keybinds-content-text-dim" style="margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_ESCAPE !!}</code> Escape
        </p><p class="keybinds-content-text-dim" style="margin-bottom: 12px; margin-top: 6.5px; font-size: 12px;">
          <code class="keybinds-modifier-info" @if($n_keybind_icons == "1")style="min-width:0px;"@endif>{!! $KEY_SLASH !!}</code> Slash
        </p>

      </div>
    </div>
    <div class="keybinds-controls">
      <a onclick="hideKeybinds()">
        <button class="keybinds-controls-button" role="button">Close</button>
      </a>
    </div>
  </div>
  <div id="keybindsHideAlert" class="keybinds-close-alert">
    <p>Use <code style="background-color: #2b2a2a; padding: 5px 10px; border-radius: 5px;">{!! $KEY_CTRL !!} {!! $KEY_SLASH !!}</code> to show these keybinds again.</p>
  </div>
@endif
@endif
<!--␀nebula:stop␀-->


        @show
        @section('scripts')
            {!! $asset->js('main.js') !!}
        @show
    </body>
</html>