// Assuming you have already created the Ace Editor instance
var lc_html_editor = ace.edit("lc-html-editor");

// Function to fetch completions from the endpoint
function fetchCompletions(callback) {
  fetch('/wp-json/livecanvas/v1/completions')
    .then(response => response.json())
    .then(data => callback(data))
    .catch(error => console.error('Error fetching completions:', error));
}

// Create a custom Ace Editor completer for the autocomplete suggestions
var smartCompleter = {
  getCompletions: function (editor, session, pos, prefix, callback) {
    // Fetch the autocomplete suggestions
    fetchCompletions(function(smartClasses) {
      var completions = smartClasses
        .filter((item) => item.caption.startsWith(prefix))
        .map(function (item) {
          return {
            caption: item.caption,
            value: item.value,
            meta: item.meta,
          };
        });

      // Call the callback function with the completions
      callback(null, completions);
    });
  },
};

// Add the custom completer to the Ace Editor instance
lc_html_editor.completers = [smartCompleter];

// Configure other Ace Editor options as needed
lc_html_editor.setOptions({
  enableBasicAutocompletion: true,
  enableLiveAutocompletion: true,
  showPrintMargin: false,
  highlightActiveLine: false,
  mode: "ace/mode/html",
  wrap: true,
  useSoftTabs: false,
  tabSize: 4,
  enableEmmet: true,
});

