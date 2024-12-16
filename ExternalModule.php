<?php
namespace ExternalModuleTemplate\ExternalModule;

use ExternalModules\AbstractExternalModule;

// dependencies documentation
// https://github.com/vanderbilt-redcap/external-module-framework-docs/blob/main/dependencies.md

use REDCap;

class ExternalModule extends AbstractExternalModule {

	// hooks documentation
	// https://github.com/vanderbilt-redcap/external-module-framework-docs/blob/main/hooks.md

	function redcap_module_ajax($action, $payload, $project_id, $record, $instrument, $event_id, $repeat_instance, $survey_hash, $response_id, $survey_queue_hash, $page, $page_full, $user_id, $group_id): string {
		$response = "";
		switch ($action) {
		case "action1":
			// consider calling a function here
			$response = $payload;
			break;
		default:
			break;
		}

		return json_encode($response);
	}

	function setUpJSMO(): void {
		$this->initializeJavascriptModuleObject();

		$param1 = [
			"foo" => "bar"
		];

		$this->tt_addToJavascriptModuleObject("param1", $param1);
	}

	function addJS(string $path): void {
		$this->initializeJavascriptModuleObject();
		echo "<script src='" . $this->getUrl($path) . "'></script>";
	}


	// Cron that runs every 30 minutes to do X
	function myCronFunction(array $cron_info): void {
		$log_params = [$cron_info];
		$this->log("myCronFunction ran", $log_params);
	}

}
