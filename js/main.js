// JS documentation
// https://github.com/vanderbilt-redcap/external-module-framework-docs/blob/main/javascript.md

$(document).ready(() => {
  const module = ExternalModules.ExternalModuleTemplate.ExternalModule;
  const param1 = module.tt("param1");

	module.ajax('action1', param1).then((response) => {
    console.log(response);
	}).catch((err) => {
    console.log("error");
    console.log(err);
	});
});
