function nebulaCurrentPage(){var t=window.location.pathname+window.location.search;if("/"===t||""===t)return"home";if(t.startsWith("/account")||t.startsWith("/account/")){if(t.endsWith("/account")||t.endsWith("/account/"))return"accountAccount";if(t.endsWith("/account/api")||t.endsWith("/account/api/"))return"accountApi";if(t.endsWith("/account/ssh")||t.endsWith("/account/ssh/"))return"accountSsh";if(t.endsWith("/account/activity")||t.endsWith("/account/activity/"))return"accountActivity"}return t.startsWith("/server/")?(terminalPattern=/^\/server\/[^/]+$/).test(t)?"serverTerminal":t.endsWith("/files")||t.endsWith("/files/")?"serverFiles":t.endsWith("/files/edit")||t.endsWith("/files/edit/")?"serverFilesEdit":t.endsWith("/databases")||t.endsWith("/databases/")?"serverDatabases":t.startsWith("/schedules",16)||t.startsWith("/schedules/",16)?"serverSchedules":t.endsWith("/users")||t.endsWith("/users/")?"serverUsers":t.endsWith("/backups")||t.endsWith("/backups/")?"serverBackups":t.endsWith("/network")||t.endsWith("/network/")?"serverNetwork":t.endsWith("/startup")||t.endsWith("/startup/")?"serverStartup":t.endsWith("/settings")||t.endsWith("/settings/")?"serverSettings":t.endsWith("/activity")||t.endsWith("/activity/")?"serverActivity":void 0:void 0}console.log("nebula#~ currentPage.js");
