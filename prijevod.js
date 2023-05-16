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

var translation = {
    en: {
        'namaz-naslov' : 'Prayers',
        'abdest-naslov': 'abultion',
        'sure-nalov': 'chapters',
        'zikr-naslov ': 'remembrance',
    },
    bs: {
        'namaz-naslov' : 'Namazi',
        'abdest-naslov': 'Abdest',
        'sure-nalov': 'Sure',
        'zikr-naslov ': 'Zikr',
    }
};

function translate(language) {
    var elements = Object.keys(translations[language]);
    elements.forEach(function(elementId) {
      var element = document.getElementById(elementId);
      if (element) {
        element.textContent = translations[language][elementId];
      }
    });
}