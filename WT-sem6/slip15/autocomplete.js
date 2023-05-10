$(document).ready(function() {
	// Array of suggestions
	var suggestions = ['apple', 'banana', 'cherry', 'durian', 'elderberry', 'fig', 'grape', 'honeydew', 'kiwi', 'lemon'];

	// Function to display suggestions
	function showSuggestions() {
		var inputVal = $('#search').val();
		var matches = [];

		// Find matches in suggestions array
		for (var i = 0; i < suggestions.length; i++) {
			if (suggestions[i].toLowerCase().indexOf(inputVal.toLowerCase()) >= 0) {
				matches.push(suggestions[i]);
			}
		}

		// Display matches in suggestions div
		var outputHtml = '';
		for (var i = 0; i < matches.length; i++) {
			outputHtml += '<p>' + matches[i] + '</p>';
		}
		$('#suggestions').html(outputHtml);
	}

	// Event listener for typing in search box
	$('#search').on('keyup', function() {
		showSuggestions();
	});
});
