Perch.UserConfig.redactor = (function () {
  const get = function (profile, config, field) {
    config.plugins = ['fontcolor', 'alignment'];
    config.buttons = ['link', 'bold', 'italic', 'ol', 'ul', 'html'];
    config.fontcolors = ['#fdfcfa', '#5bb072', '#535cb0', '#b09b53', '#b07677'];
    return config;
  };

  const load = function (cb) {
    jQuery.getScript(`${Perch.path}/addons/plugins/editors/redactor-plugins/alignment.js`, cb);
  };

  return {
    get,
    load,
  };
})();
