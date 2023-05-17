var englishRadio = document.querySelector('input[name="radio"][value="en"]');
var bosnianRadio = document.querySelector('input[name="radio"][value="bs"]');

englishRadio.addEventListener('change', function() {
  if (englishRadio.checked) {
    translate('en');
  }
});

bosnianRadio.addEventListener('change', function() {
  if (bosnianRadio.checked) {
    translate('bs');
  }
});

function translate(language) {
    var elements = Object.keys(translations[language]);
    elements.forEach(function(elementId) {
      var element = document.getElementById(elementId);
      if (element) {
        element.textContent = translations[language][elementId];
      }
    });
}