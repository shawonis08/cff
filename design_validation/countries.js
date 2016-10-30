// JavaScript Document
var options = {
			url: "countries.json",

			getValue: "City, Airport",

			list: {
				match: {
					enabled: true
				}
			}
		};

		$("#input1").easyAutocomplete(options);
		$("#input2").easyAutocomplete(options);