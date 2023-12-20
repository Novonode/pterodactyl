@extends('layouts.admin')  @section('title') Nebula @endsection  @section('content-header') <img src="/assets/extensions/nebula/icon.jpg" alt="logo" style="float:left;width:30px;height:30px;border-radius:3px;margin-right:5px;"> <!--websitecomment␀ <a href="␀website␀" target="_blank"><button class="btn btn-gray-alt pull-right" style="padding: 5px 10px;"><i class="bx ␀weblinkicon␀"></i></button></a> ␀websitecomment-->  <h1 ext-title>Nebula<tag mg-left blue>1.4.6</tag></h1>  @endsection  @section('content') <p>Pterodactyl takes flight.</p>  <script> document.addEventListener("DOMContentLoaded", function () {showSaveButton()}); function showSaveButton() { const nebula_configForm = document.getElementById("config-form"); const nebula_saveOverlay = document.getElementById("save-overlay"); nebula_configForm.addEventListener("change", function () { nebula_saveOverlay.style.display = "inline"; setTimeout(() => { nebula_saveOverlay.style.bottom = "10px"; }, 100) }); } </script> <!-- experimental: <tag red="" style="float:right"><i class='bx bxs-bug'></i> EXPERIMENTAL</tag> --> <form id="config-form" action="" method="POST"> <div class="row"> <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> <!-- Overview --> <div class="box"> <div class="box-header with-border"> <h3 class="box-title">Overview</h3> </div> <div class="box-body"> <p>Thank you for purchasing <tag blue=""><i class='bx bx-unite' style='color:#ffffff'></i> Nebula</tag>, you are currently running version <code>1.4.6</code>.</p> </div> </div> <div id="responsive-devider" style="border-bottom: 1px #ffffff50 solid; margin-bottom: 20px;"></div> <!-- Color Palette --> <div class="box"> <div class="box-header with-border"> <h3 class="box-title">Color Palette</h3> </div> <div class="box-body"> <div class="row" style="padding-bottom: 12px;"> <div class="col-xs-12"> <p><b>Color Configuration</b><br> Change the default color palette to anything you like and make your panel truely yours.</p> </div> </div> <div class="row"><div class="col-xs-12"><p class="nebula-text-center"><i>Dashboard</i></p></div></div> <div class="row"> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_1" id="palette_dashboard_1" value="{{ $palette_dashboard_1 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_1').value = '#9aa5b1'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_2" id="palette_dashboard_2" value="{{ $palette_dashboard_2 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_2').value = '#b0bac4'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_3" id="palette_dashboard_3" value="{{ $palette_dashboard_3 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_3').value = '#1b1b1b'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_4" id="palette_dashboard_4" value="{{ $palette_dashboard_4 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_4').value = '#262626'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_5" id="palette_dashboard_5" value="{{ $palette_dashboard_5 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_5').value = '#3a3a3a'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_6" id="palette_dashboard_6" value="{{ $palette_dashboard_6 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_6').value = '#474747'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_7" id="palette_dashboard_7" value="{{ $palette_dashboard_7 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_7').value = '#141414'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_8" id="palette_dashboard_8" value="{{ $palette_dashboard_8 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_8').value = '#474849'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_dashboard_9" id="palette_dashboard_9" value="{{ $palette_dashboard_9 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_dashboard_9').value = '#525354'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> </div> <div class="row"><div class="col-xs-12"><p class="nebula-text-center"><i>Sidebar</i></p></div></div> <div class="row"> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_1" id="palette_sidebar_1" value="{{ $palette_sidebar_1 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_1').value = '#9aa5b1'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_2" id="palette_sidebar_2" value="{{ $palette_sidebar_2 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_2').value = '#b0bac4'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_3" id="palette_sidebar_3" value="{{ $palette_sidebar_3 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_3').value = '#1b1b1b'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_4" id="palette_sidebar_4" value="{{ $palette_sidebar_4 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_4').value = '#262626'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_5" id="palette_sidebar_5" value="{{ $palette_sidebar_5 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_5').value = '#3a3a3a'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_6" id="palette_sidebar_6" value="{{ $palette_sidebar_6 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_6').value = '#474747'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_7" id="palette_sidebar_7" value="{{ $palette_sidebar_7 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_7').value = '#0C090A'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <input type="color" name="palette_sidebar_8" id="palette_sidebar_8" value="{{ $palette_sidebar_8 }}" placeholder="#000000" class="form-control nebula-input-with-reset"/> <div class="nebula-reset-container" onclick="showSaveButton();document.getElementById('palette_sidebar_8').value = '#333333'"><i class='bx bx-refresh nebula-reset-icon'></i></div> </div> </div> </div> </div> <!-- Apply --> <div id="save-overlay"> {{ csrf_field() }} <button type="submit" name="_method" value="PATCH" style="transition: background-color .3s;" class="btn btn-primary btn-sm">Apply Changes</button> </div> </div> <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12"> <!-- Configuration --> <div class="box"> <div class="box-header with-border"> <h3 class="box-title">Configuration</h3> </div> <div class="box-body"> <div class="row" style="padding-bottom: 12px;"> <div class="col-xs-12"> <p><b>Configuration</b><br> These preferences do not require their own configuration category, they are listed here instead.</p> </div> </div> <div class="row"> <!-- Watermark --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-purchase-tag'></i> Watermark</label> <select class="form-control" name="watermark"> <option value="1" @if($watermark == "1") selected @endif>Enabled</option> <option value="0" @if($watermark == "0") selected @endif>Disabled</option> </select> <p class="text-muted small">Disable or Enable the "powered by nebula" footer.</p> </div> <!-- Background Image --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-image'></i> Background Image</label> <input type="text" name="background_image" id="background_image" value="{{ $background_image }}" placeholder="(none)" class="form-control"/> <p class="text-muted small">Add a custom background image to your panel.</p> </div> <!-- Background Appearance --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bx-adjust'></i> Background Appearance</label> @if($background_image != "") <select class="form-control" name="background_appearance"> <option value="0" @if($background_appearance == "0") selected @endif>Default</option> <option value="1" @if($background_appearance == "1") selected @endif>Blur</option> <option value="2" @if($background_appearance == "2") selected @endif>Dimmed</option> </select> <p class="text-muted small">Customize your custom background's appearance.</p> @else <input type="text" name="background_appearance" id="background_appearance" value="0" readonly class="form-control" style="display: none;"/> <input type="text" name="" id="" value="Default" readonly class="form-control"/> <p class="text-muted small">Customize your custom background's appearance.</p> <?php $blueprint->dbSet("nebula", "background_appearance", "0") ?> @endif </div> <!-- Keyboard Shortcuts --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-keyboard'></i> Keyboard Shortcuts</label> <select class="form-control" name="keyboard_shortcuts"> <option value="1" @if($keyboard_shortcuts == "1") selected @endif>Enabled</option> <option value="0" @if($keyboard_shortcuts == "0") selected @endif>Disabled</option> </select> @if($keyboard_shortcuts == "0") <p class="text-muted small">Toggle keyboard shortcuts in the Pterodactyl panel.</p> @else <p class="text-muted small">Toggle keyboard shortcuts in the Pterodactyl panel. View all shortcuts by pressing <code>CTRL/ALT + /</code> in the client panel.</p> @endif </div> <!-- Keybind Icons --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-shapes'></i> Keybind Icons</label> @if($keyboard_shortcuts == "1") <select class="form-control" name="keybind_icons"> <option value="1" @if($keybind_icons == "1") selected @endif>Prefer Icons</option> <option value="0" @if($keybind_icons == "0") selected @endif>Disable Icons</option> </select> <p class="text-muted small">Choose to prefer or to disable modifier key icons.</p> @else <input type="text" name="keybind_icons" id="keybind_icons" value="1" readonly class="form-control" style="display: none;"/> <input type="text" name="" id="" value="Prefer Icons" readonly class="form-control"/> <p class="text-muted small">Choose to prefer or to disable modifier key icons when using keyboard shortcuts.</p> <?php $blueprint->dbSet("nebula", "keybind_icons", "1") ?> @endif </div> <!-- Server Overview Graphs --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-chart'></i> Server Overview Graphs</label> <select class="form-control" name="server_overview_graphs"> <option value="1" @if($server_overview_graphs == "1") selected @endif>Shown</option> <option value="0" @if($server_overview_graphs == "0") selected @endif>Hidden</option> </select> <p class="text-muted small">Hide or show graphs on the server overview page.</p> </div> <!-- Colored Power Buttons --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-spray-can'></i> Colored Power Buttons</label> <select class="form-control" name="server_colored_power"> <option value="1" @if($server_colored_power == "1") selected @endif>Enabled</option> <option value="0" @if($server_colored_power == "0") selected @endif>Disabled</option> </select> <p class="text-muted small">Enable or disable colored power buttons on the server overview page.</p> </div> </div> </div> </div> <!-- Sidebar --> <div class="box"> <div class="box-header with-border"> <h3 class="box-title">Sidebar</h3> </div> <div class="box-body"> <div class="row" style="padding-bottom: 12px;"> <div class="col-xs-12"> <p><b>Sidebar Configuration</b><br> Configure general options that allow you to adapt the sidebar to your preference.</p> </div> </div> <div class="row"> <!-- Icon Mode --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-crop'></i> Icon Scale</label> <select class="form-control" name="icon_scale"> <option value="1.00" @if($icon_scale == "1.00") selected @endif>100%</option> <option value="0.95" @if($icon_scale == "0.95") selected @endif>95%</option> <option value="0.90" @if($icon_scale == "0.90") selected @endif>90% (default)</option> <option value="0.85" @if($icon_scale == "0.85") selected @endif>85%</option> <option value="0.80" @if($icon_scale == "0.80") selected @endif>80%</option> <option value="0.75" @if($icon_scale == "0.75") selected @endif>75%</option> <option value="0.70" @if($icon_scale == "0.70") selected @endif>70%</option> <option value="0.65" @if($icon_scale == "0.65") selected @endif>65%</option> <option value="0.60" @if($icon_scale == "0.60") selected @endif>60%</option> <option value="0.55" @if($icon_scale == "0.55") selected @endif>55%</option> <option value="0.50" @if($icon_scale == "0.50") selected @endif>50%</option> <option value="0.45" @if($icon_scale == "0.45") selected @endif>45%</option> <option value="0.40" @if($icon_scale == "0.40") selected @endif>40%</option> <option value="0.35" @if($icon_scale == "0.35") selected @endif>35%</option> <option value="0.30" @if($icon_scale == "0.30") selected @endif>30%</option> <option value="0.25" @if($icon_scale == "0.25") selected @endif>25%</option> <option value="0.20" @if($icon_scale == "0.20") selected @endif>20%</option> <option value="0.15" @if($icon_scale == "0.15") selected @endif>15%</option> <option value="0.10" @if($icon_scale == "0.10") selected @endif>10%</option> </select> <p class="text-muted small">Controls the size of the sidebar items.</p> </div> <!-- Sidebar Style --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-dock-left'></i> Sidebar Style</label> @if($background_image != "") <select class="form-control" name="sidebar_background"> <option value="default" @if($sidebar_background == "default") selected @endif>Default</option> <option value="blurred" @if($sidebar_background == "blurred") selected @endif>Glass</option> </select> <p class="text-muted small">Switch between several sidebar background modes.</p> @else <input type="text" name="sidebar_background" id="sidebar_background" value="default" readonly class="form-control" style="display: none;"/> <input type="text" name="" id="" value="Default" readonly class="form-control"/> <p class="text-muted small">Switch between several sidebar background modes when using custom backgrounds.</p> <?php $blueprint->dbSet("nebula", "sidebar_background", "default") ?> @endif </div> <!-- Button Hover Tooltip --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-pointer'></i> Button Hover Tooltip</label> <select class="form-control" name="sidebar_hover_tooltip"> <option value="1" @if($sidebar_hover_tooltip == "1") selected @endif>Enabled</option> <option value="0" @if($sidebar_hover_tooltip == "0") selected @endif>Disabled</option> </select> <p class="text-muted small">Enable or disable the hover tooltip for sidebar buttons.</p> </div> </div> <div class="nebula-devider" style="opacity: 0;"></div> <div class="row" style="padding-bottom: 12px;"> <div class="col-xs-12"> <p><b>Icon Customization</b><br> Adapt the sidebar to your own custom branding. Use your own custom icons here by placing image links to them below.</p> </div> </div> <div class="row"> <div class="col-xs-12"><p class="nebula-text-center"><i>Always visible</i></p></div> </div> <!-- Main --> <div class="row"> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Dashboard</label> <input type="text" name="sidebar_home" id="sidebar_home" value="{{ $sidebar_home }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Admin</label> <input type="text" name="sidebar_admin" id="sidebar_admin" value="{{ $sidebar_admin }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Account</label> <input type="text" name="sidebar_account" id="sidebar_account" value="{{ $sidebar_account }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Logout</label> <input type="text" name="sidebar_logout" id="sidebar_logout" value="{{ $sidebar_logout }}" placeholder="(default)" class="form-control"/> </div> </div> <div class="row"> <div class="col-xs-12"><p class="nebula-text-center"><i>Server Management</i></p></div> </div> <!-- Server --> <div class="row"> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Terminal</label> <input type="text" name="sidebar_server_terminal" id="sidebar_server_terminal" value="{{ $sidebar_server_terminal }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Files</label> <input type="text" name="sidebar_server_files" id="sidebar_server_files" value="{{ $sidebar_server_files }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Databases</label> <input type="text" name="sidebar_server_databases" id="sidebar_server_databases" value="{{ $sidebar_server_databases }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Schedules</label> <input type="text" name="sidebar_server_schedules" id="sidebar_server_schedules" value="{{ $sidebar_server_schedules }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Users</label> <input type="text" name="sidebar_server_users" id="sidebar_server_users" value="{{ $sidebar_server_users }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Backups</label> <input type="text" name="sidebar_server_backups" id="sidebar_server_backups" value="{{ $sidebar_server_backups }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Network</label> <input type="text" name="sidebar_server_network" id="sidebar_server_network" value="{{ $sidebar_server_network }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Startup</label> <input type="text" name="sidebar_server_startup" id="sidebar_server_startup" value="{{ $sidebar_server_startup }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Settings</label> <input type="text" name="sidebar_server_settings" id="sidebar_server_settings" value="{{ $sidebar_server_settings }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Activity</label> <input type="text" name="sidebar_server_activity" id="sidebar_server_activity" value="{{ $sidebar_server_activity }}" placeholder="(default)" class="form-control"/> </div> </div> <div class="row"> <div class="col-xs-12"><p class="nebula-text-center"><i>Account Management</i></p></div> </div> <!-- Account --> <div class="row"> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Account</label> <input type="text" name="sidebar_account_account" id="sidebar_account_account" value="{{ $sidebar_account_account }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">API</label> <input type="text" name="sidebar_account_api" id="sidebar_account_api" value="{{ $sidebar_account_api }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">SSH</label> <input type="text" name="sidebar_account_ssh" id="sidebar_account_ssh" value="{{ $sidebar_account_ssh }}" placeholder="(default)" class="form-control"/> </div> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label">Activity</label> <input type="text" name="sidebar_account_activity" id="sidebar_account_activity" value="{{ $sidebar_account_activity }}" placeholder="(default)" class="form-control"/> </div> </div> </div> </div> <!-- Authentication --> <div class="box"> <div class="box-header with-border"> <h3 class="box-title">Authentication</h3> </div> <div class="box-body"> <div class="row" style="padding-bottom: 12px;"> <div class="col-xs-12"> <p><b>Authentication Configuration</b><br> Configure general options about your authentication page.</p> </div> </div> <div class="row"> <!-- Background Image --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bxs-image'></i> Background Image</label> <input type="text" name="auth_background_image" id="auth_background_image" value="{{ $auth_background_image }}" placeholder="(none)" class="form-control"/> <p class="text-muted small">Add a custom background image to your authentication page.</p> </div> <!-- Background Appearance --> <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 nebula-spacing"> <label class="control-label"><i class='bx bx-adjust'></i> Background Appearance</label> @if($auth_background_image != "") <select class="form-control" name="auth_background_appearance"> <option value="0" @if($auth_background_appearance == "0") selected @endif>Default</option> <option value="1" @if($auth_background_appearance == "1") selected @endif>Blur</option> <option value="2" @if($auth_background_appearance == "2") selected @endif>Dimmed</option> </select> <p class="text-muted small">Customize your custom background's appearance.</p> @else <input type="text" name="auth_background_appearance" id="auth_background_appearance" value="0" readonly class="form-control" style="display: none;"/> <input type="text" name="" id="" value="Default" readonly class="form-control"/> <p class="text-muted small">Customize your custom background's appearance.</p> <?php $blueprint->dbSet("nebula", "auth_background_appearance", "0") ?> @endif </div> </div> </div> </div> </div> </div> </form> @endsection
