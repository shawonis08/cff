// JavaScript Document
var options = {
			url: "countries.json",

			getValue: "name",

			list: {
				match: {
					enabled: true
				}
			}
		};

		$("#input1").easyAutocomplete(options);
		$("#input2").easyAutocomplete(options);